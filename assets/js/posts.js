(() => {
    const initialized = new WeakSet();
    const active = new Map();
    function initializeArchive(root) {
    const grid = root.querySelector('#posts-grid');
    const nav = root.querySelector('.posts-pagination');
    const sentinel = root.querySelector('.posts-sentinel');
    const status = root.querySelector('.posts-load-status');
    if (!grid || !nav || !sentinel || !('IntersectionObserver' in window)) return;
    if (initialized.has(grid)) return;
    initialized.add(grid);
    let next = nav.querySelector('a')?.href;
    if (!next) return;
    let loading = false;
    nav.hidden = true;
    const controller = new AbortController();
    const observer = new IntersectionObserver(async (entries) => {
        if (!entries.some(entry => entry.isIntersecting) || loading || !next) return;
        loading = true;
        grid.setAttribute('aria-busy', 'true');
        status.textContent = 'Cargando más artículos…';
        try {
            const response = await fetch(next, { credentials: 'same-origin', signal: controller.signal });
            if (!response.ok) throw new Error('Unable to load posts');
            if (!grid.isConnected) return;
            const doc = new DOMParser().parseFromString(await response.text(), 'text/html');
            const cards = doc.querySelectorAll('#posts-grid > .post-card');
            if (!cards.length) throw new Error('No articles returned');
            cards.forEach(card => grid.appendChild(document.importNode(card, true)));
            next = doc.querySelector('.posts-pagination a')?.href;
            nav.replaceChildren();
            if (next) {
                const link = document.createElement('a');
                link.href = next;
                link.textContent = 'Ver más artículos';
                nav.appendChild(link);
            }
            status.textContent = next ? '' : 'Has llegado al último artículo.';
            observer.unobserve(sentinel);
            if (next) observer.observe(sentinel);
        } catch (error) {
            if (error.name === 'AbortError') return;
            status.textContent = 'No se han podido cargar más artículos. Puedes continuar con el enlace.';
            nav.hidden = false;
            observer.disconnect();
        } finally {
            loading = false;
            grid.removeAttribute('aria-busy');
        }
    }, { rootMargin: '0px 0px 350px 0px' });
    observer.observe(sentinel);
    active.set(grid, () => { observer.disconnect(); controller.abort(); });
    }
    function initialize(root) {
        const article = root.querySelector('.post-article');
        const archive = root.querySelector('.posts-archive');
        if (article || archive) {
            const panel = root.closest?.('.panels-pty-panel');
            if (panel) {
                panel.classList.add('codepty-posts');
                const title = panel.querySelector('.panels-pty-panel__title');
                const label = archive ? 'Posts' : article.querySelector('h1')?.textContent;
                if (title && label) { title.textContent = label; panel.setAttribute('aria-label', label); }
            }
        }
        initializeArchive(root);
    }
    document.addEventListener('panelspty:loaded', event => initialize(event.target));
    document.addEventListener('panelspty:close', () => {
        for (const [grid, cleanup] of active) {
            if (!grid.isConnected) { cleanup(); active.delete(grid); }
        }
    });
    initialize(document);
})();
