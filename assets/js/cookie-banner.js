(function () {
    function cookieGet(n) {
        return document.cookie.split(';').some(function (c) { return c.trim().startsWith(n + '='); });
    }
    function cookieSet(n, v, days) {
        var d = new Date();
        d.setTime(d.getTime() + days * 86400000);
        document.cookie = n + '=' + v + ';expires=' + d.toUTCString() + ';path=/;SameSite=Lax';
    }

    function buildBanner() {
        var el = document.createElement('div');
        el.className = 'nx-cookie';
        el.id = 'nxCookieBanner';
        el.setAttribute('role', 'dialog');
        el.setAttribute('aria-label', 'Consentement aux cookies');
        el.innerHTML =
            '<p class="nx-cookie__txt">Nous utilisons des cookies pour améliorer votre expérience. En continuant, vous acceptez notre <a href="/politique-de-confidentialite/" class="nx-cookie__link">politique de confidentialité</a>.</p>' +
            '<div class="nx-cookie__row">' +
            '<button class="nx-btn nx-btn--outline nx-btn--sm" id="nxCookieDecline">Refuser</button>' +
            '<button class="nx-btn nx-btn--primary nx-btn--sm" id="nxCookieAccept">Accepter</button>' +
            '</div>';
        document.body.appendChild(el);

        setTimeout(function () { el.classList.add('is-visible'); }, 80);

        function hide() {
            el.classList.remove('is-visible');
            el.addEventListener('transitionend', function () { el.remove(); }, { once: true });
        }

        document.getElementById('nxCookieAccept').addEventListener('click', function () {
            cookieSet('nx_cookie', 'accepted', 365);
            hide();
        });
        document.getElementById('nxCookieDecline').addEventListener('click', function () {
            cookieSet('nx_cookie', 'declined', 180);
            hide();
        });
    }

    function init() {
        if (cookieGet('nx_cookie')) return;
        if (cookieGet('nx_age')) {
            buildBanner();
        } else {
            document.addEventListener('nx_age_accepted', buildBanner, { once: true });
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
}());