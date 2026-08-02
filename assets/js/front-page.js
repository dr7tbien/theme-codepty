const menuToggle = document.querySelector('.menu-toggle');
const siteNavigation = document.querySelector('.site-navigation');

if (menuToggle && siteNavigation) {
    const closeMenu = () => {
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.setAttribute('aria-label', 'Abrir menú');
        siteNavigation.classList.remove('is-open');
    };

    menuToggle.addEventListener('click', () => {
        const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';

        menuToggle.setAttribute('aria-expanded', String(!isOpen));
        menuToggle.setAttribute('aria-label', isOpen ? 'Abrir menú' : 'Cerrar menú');
        siteNavigation.classList.toggle('is-open', !isOpen);
    });

    siteNavigation.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeMenu();
        }
    });
}

document.addEventListener('click', (event) => {
    const button = event.target.closest('.copy-button');

    if (!button) {
        return;
    }

    const target = document.getElementById(button.getAttribute('data-copy-target'));

    if (!target) {
        return;
    }

    navigator.clipboard.writeText(target.innerText.trim()).then(() => {
        const originalLabel = button.textContent;

        button.textContent = '✓ Copiado';
        button.classList.add('is-copied');

        setTimeout(() => {
            button.textContent = originalLabel;
            button.classList.remove('is-copied');
        }, 1800);
    });
});
