(function () {
    function cookieGet(n) {
        return document.cookie.split(';').some(function (c) { return c.trim().startsWith(n + '='); });
    }
    function cookieSet(n, v, days) {
        var d = new Date();
        d.setTime(d.getTime() + days * 86400000);
        document.cookie = n + '=' + v + ';expires=' + d.toUTCString() + ';path=/;SameSite=Lax';
    }

    function init() {
        if (cookieGet('nx_age')) return;

        var gate   = document.getElementById('nxAgeGate');
        var veil   = document.getElementById('nxGateVeil');
        var btnOk  = document.getElementById('nxGateAccept');
        var btnOut = document.getElementById('nxGateDecline');
        if (!gate || !veil) return;

        gate.style.display = '';
        veil.style.display = '';
        document.body.classList.add('nx-locked');

        if (btnOk) {
            btnOk.addEventListener('click', function () {
                cookieSet('nx_age', '1', 30);
                gate.style.display = 'none';
                veil.style.display = 'none';
                document.body.classList.remove('nx-locked');
                document.dispatchEvent(new Event('nx_age_accepted'));
            });
        }
        if (btnOut) {
            btnOut.addEventListener('click', function () {
                window.location.href = '/acces-refuse/';
            });
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
}());