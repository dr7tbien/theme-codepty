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
