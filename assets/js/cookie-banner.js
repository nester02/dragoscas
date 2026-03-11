document.addEventListener('DOMContentLoaded', function () {
    var banner = document.getElementById('dgCookieBanner');
    var btnAccept = document.getElementById('dgCookieAccept');
    var btnDecline = document.getElementById('dgCookieDecline');

    function getCookie(name) {
        var match = document.cookie.match(new RegExp('(?:^|; )' + name + '=([^;]*)'));
        return match ? decodeURIComponent(match[1]) : null;
    }

    function setCookie(name, value, days) {
        var expires = new Date(Date.now() + days * 864e5).toUTCString();
        document.cookie = name + '=' + encodeURIComponent(value) + '; expires=' + expires + '; path=/; SameSite=Lax';
    }

    if (!getCookie('dc_cookie_consent') && banner) {
        banner.classList.add('dg-cookie--visible');
    }

    function dismissBanner(value) {
        setCookie('dc_cookie_consent', value, 180);
        if (banner) banner.classList.remove('dg-cookie--visible');
    }

    if (btnAccept) btnAccept.addEventListener('click', function () { dismissBanner('accepted'); });
    if (btnDecline) btnDecline.addEventListener('click', function () { dismissBanner('declined'); });
});