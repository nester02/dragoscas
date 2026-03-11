(function () {
    function initHeader() {
        var header  = document.getElementById('nxHeader');
        var burger  = document.getElementById('nxBurger');
        var mobMenu = document.getElementById('nxMobMenu');

        if (header) {
            window.addEventListener('scroll', function () {
                header.classList.toggle('is-scrolled', window.scrollY > 40);
            }, { passive: true });
        }

        function openMenu() {
            if (!mobMenu || !burger) return;
            mobMenu.classList.add('is-open');
            mobMenu.setAttribute('aria-hidden', 'false');
            burger.classList.add('is-on');
            burger.setAttribute('aria-expanded', 'true');
        }
        function closeMenu() {
            if (!mobMenu || !burger) return;
            mobMenu.classList.remove('is-open');
            mobMenu.setAttribute('aria-hidden', 'true');
            burger.classList.remove('is-on');
            burger.setAttribute('aria-expanded', 'false');
        }

        if (burger && mobMenu) {
            burger.addEventListener('click', function () {
                mobMenu.classList.contains('is-open') ? closeMenu() : openMenu();
            });
            document.addEventListener('click', function (e) {
                if (mobMenu.classList.contains('is-open') && header && !header.contains(e.target)) closeMenu();
            });
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') closeMenu();
            });
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initHeader);
    } else {
        initHeader();
    }
}());