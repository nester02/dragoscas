(function () {
    var LS_KEY = 'dg_age_ok';
    var COOKIE_NAME = 'dg_age_confirmed';
    var COOKIE_DAYS = 30;

    function setCookie(name, value, days) {
        var expires = new Date(Date.now() + days * 864e5).toUTCString();
        document.cookie = name + '=' + encodeURIComponent(value) +
            '; expires=' + expires + '; path=/; SameSite=Lax';
    }

    function lsGet(key) {
        try { return localStorage.getItem(key); } catch (e) { return null; }
    }

    function lsSet(key, value) {
        try { localStorage.setItem(key, value); } catch (e) {}
    }

    function showPage() {
        document.documentElement.style.visibility = '';
    }

    function openGate() {
        var gate    = document.getElementById('dgAgeGate');
        var overlay = document.getElementById('dgAgeOverlay');
        if (!gate || !overlay) { showPage(); return; }

        gate.classList.add('dg-agegate--visible');
        overlay.classList.add('dg-agegate__overlay--visible');
        document.body.style.overflow = 'hidden';

        showPage();

        document.getElementById('dgAgeAccept') && document.getElementById('dgAgeAccept').addEventListener('click', function () {
            lsSet(LS_KEY, '1');
            setCookie(COOKIE_NAME, '1', COOKIE_DAYS);
            gate.classList.remove('dg-agegate--visible');
            overlay.classList.remove('dg-agegate__overlay--visible');
            document.body.style.overflow = '';
        });

        document.getElementById('dgAgeDecline') && document.getElementById('dgAgeDecline').addEventListener('click', function (e) {
            e.preventDefault();
            window.location.href = '/mineur/';
        });
    }

    if (lsGet(LS_KEY) === '1') {
        showPage();
        return;
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', openGate);
    } else {
        openGate();
    }
})();