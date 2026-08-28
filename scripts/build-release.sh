#!/usr/bin/env bash

set -euo pipefail

OUTPUT="${1:-/tmp/codepty.zip}"
ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"

if [[ "$OUTPUT" != /* ]]; then
    OUTPUT="$(pwd)/$OUTPUT"
fi

VERSION="$(git -C "$ROOT_DIR" show HEAD:style.css | sed -n 's/^Version:[[:space:]]*//p' | head -n 1)"
if [[ ! "$VERSION" =~ ^[0-9]+\.[0-9]+\.[0-9]+$ ]]; then
    echo "ERROR: versión inválida en style.css" >&2
    exit 1
fi

if git -C "$ROOT_DIR" diff --cached --quiet -- style.css inc functions.php README.md CHANGELOG.md .gitattributes scripts tests; then
    :
else
    echo "ERROR: hay cambios preparados sin commit; crea el commit antes del ZIP" >&2
    exit 1
fi

mkdir -p "$(dirname "$OUTPUT")"
git -C "$ROOT_DIR" archive --format=zip --prefix=codepty/ --output="$OUTPUT" HEAD

if ! unzip -Z1 "$OUTPUT" | grep -qx 'codepty/style.css'; then
    echo "ERROR: el ZIP no contiene codepty/style.css" >&2
    exit 1
fi

if unzip -Z1 "$OUTPUT" | grep -Ev '^codepty/' >/dev/null; then
    echo "ERROR: el ZIP contiene rutas fuera de codepty/" >&2
    exit 1
fi

echo "ZIP creado: $OUTPUT"
echo "Versión: $VERSION"
