#!/usr/bin/env bash

set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
REPOSITORY="dr7tbien/theme-codepty"
MESSAGE="${1:-}"
OUTPUT="/tmp/codepty.zip"

fail() {
    echo "ERROR: $*" >&2
    exit 1
}

for command in git gh php unzip; do
    command -v "$command" >/dev/null 2>&1 || fail "falta el comando $command"
done

[[ -n "$MESSAGE" ]] || fail "uso: ./scripts/publish-release.sh \"Descripción de la mejora\""
[[ "$MESSAGE" != *$'\n'* && "$MESSAGE" != *$'\r'* ]] || fail "el mensaje debe ocupar una sola línea"

cd "$ROOT_DIR"

[[ "$(git rev-parse --show-toplevel)" == "$ROOT_DIR" ]] || fail "el script no está dentro de la raíz del repositorio"
[[ "$(git branch --show-current)" == "main" ]] || fail "debes estar en la rama main"
git diff --check
gh auth status --hostname github.com >/dev/null

git fetch origin main --quiet
LOCAL_HEAD="$(git rev-parse HEAD)"
REMOTE_HEAD="$(git rev-parse origin/main)"
[[ "$LOCAL_HEAD" == "$REMOTE_HEAD" ]] || fail "main local y origin/main no coinciden; revísalos antes de publicar"

STATUS="$(git status --short --untracked-files=all)"
[[ -n "$STATUS" ]] || {
    echo "No hay cambios que publicar."
    exit 0
}

while IFS= read -r changed_file; do
    changed_file="${changed_file:3}"
    case "$changed_file" in
        *.env|*.env.*|*wp-config.php|*.log|*.sql|*.bak|*.pem|*.key|*id_rsa*|*node_modules/*|*backup*|*backups*)
            fail "archivo potencialmente privado detectado: $changed_file"
            ;;
    esac
done <<< "$STATUS"

CURRENT_VERSION="$(sed -n 's/^Version:[[:space:]]*//p' style.css | head -n 1)"
[[ "$CURRENT_VERSION" =~ ^([0-9]+)\.([0-9]+)\.([0-9]+)$ ]] || fail "versión inválida en style.css"
NEW_VERSION="${BASH_REMATCH[1]}.${BASH_REMATCH[2]}.$((BASH_REMATCH[3] + 1))"
TAG="v${NEW_VERSION}"

git rev-parse -q --verify "refs/tags/$TAG" >/dev/null && fail "ya existe el tag local $TAG"
if git ls-remote --exit-code --tags origin "refs/tags/$TAG" >/dev/null 2>&1; then
    fail "ya existe el tag remoto $TAG"
fi

echo "Cambios que se publicarán:"
echo "$STATUS"
echo
echo "Versión: $CURRENT_VERSION → $NEW_VERSION"
echo "Mensaje: $MESSAGE"
echo
read -r -p "¿Continuar y publicar en GitHub? [s/N] " CONFIRMATION
[[ "$CONFIRMATION" == "s" || "$CONFIRMATION" == "S" ]] || {
    echo "Publicación cancelada."
    exit 0
}

BACKUP_DIR="$(mktemp -d)"
cp style.css "$BACKUP_DIR/style.css"
cp CHANGELOG.md "$BACKUP_DIR/CHANGELOG.md"
COMMITTED=false

cleanup() {
    if [[ "$COMMITTED" == false ]]; then
        cp "$BACKUP_DIR/style.css" style.css
        cp "$BACKUP_DIR/CHANGELOG.md" CHANGELOG.md
    fi
    rm -rf "$BACKUP_DIR"
}
trap cleanup EXIT

sed -i "s/^Version:[[:space:]]*.*/Version: $NEW_VERSION/" style.css
{
    head -n 2 CHANGELOG.md
    printf '\n## %s\n\n- %s\n' "$NEW_VERSION" "$MESSAGE"
    tail -n +3 CHANGELOG.md
} > "$BACKUP_DIR/CHANGELOG.new"
mv "$BACKUP_DIR/CHANGELOG.new" CHANGELOG.md

echo
echo "Ejecutando pruebas..."
php tests/run.php
find . -name '*.php' -not -path './.git/*' -print0 | xargs -0 -n1 php -l
git diff --check

git add --all -- .
git diff --cached --quiet && fail "no hay cambios preparados para el commit"

echo
echo "Resumen del commit:"
git diff --cached --stat

git commit -m "$MESSAGE"
COMMITTED=true

./scripts/build-release.sh "$OUTPUT"
unzip -t "$OUTPUT" >/dev/null

git push origin main
git tag -a "$TAG" -m "Theme CodePTY $NEW_VERSION"
git push origin "$TAG"
gh release create "$TAG" "$OUTPUT" \
    --repo "$REPOSITORY" \
    --title "Theme CodePTY $NEW_VERSION" \
    --notes "$MESSAGE"

RELEASE_URL="$(gh release view "$TAG" --repo "$REPOSITORY" --json url --jq .url)"

echo
echo "Publicación completada."
echo "Versión: $NEW_VERSION"
echo "Commit: $(git rev-parse --short HEAD)"
echo "Release: $RELEASE_URL"
echo
echo "El servidor no se ha modificado. Actualízalo después mediante WP-CLI."
