document.addEventListener('DOMContentLoaded', function () {
    var header = document.getElementById('dgHeader');
    var toggle = document.getElementById('dgNavToggle');
    var sheet = document.getElementById('dgMobileSheet');
    var overlay = document.getElementById('dgMobileOverlay');
    var closeBtn = document.getElementById('dgSheetClose');

    if (header) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 10) {
                header.classList.add('dg-header--scrolled');
            } else {
                header.classList.remove('dg-header--scrolled');
            }
        }, { passive: true });
    }

    function openMenu() {
        sheet.classList.add('dg-mobile-sheet--open');
        overlay.classList.add('dg-mobile-overlay--visible');
        document.body.style.overflow = 'hidden';
        if (toggle) toggle.setAttribute('aria-expanded', 'true');
    }

    function closeMenu() {
        sheet.classList.remove('dg-mobile-sheet--open');
        overlay.classList.remove('dg-mobile-overlay--visible');
        document.body.style.overflow = '';
        if (toggle) toggle.setAttribute('aria-expanded', 'false');
    }

    if (toggle) toggle.addEventListener('click', openMenu);
    if (closeBtn) closeBtn.addEventListener('click', closeMenu);
    if (overlay) overlay.addEventListener('click', closeMenu);

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && sheet && sheet.classList.contains('dg-mobile-sheet--open')) {
            closeMenu();
        }
    });

    var currentPath = window.location.pathname;
    var navLinks = document.querySelectorAll('.dg-header__nav-link');
    navLinks.forEach(function (link) {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }
    });
});