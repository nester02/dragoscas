<?php
$uri = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$nav = [
    ['href' => '/',                'label' => 'Bookmakers'],
    ['href' => '/securite-du-jeu', 'label' => 'S&eacute;curit&eacute; du jeu'],
    ['href' => '/notre-editorial',        'label' => 'Notre &eacute;ditorial'],
    ['href' => '/nous-ecrire',         'label' => 'Nous &eacute;crire'],
];
?>
<div class="nx-gate__veil" id="nxGateVeil" aria-hidden="true" style="display:none"></div>
<div class="nx-gate" id="nxAgeGate" role="dialog" aria-modal="true" aria-labelledby="nxGateTitle" style="display:none">
    <div class="nx-gate__box">
        <img src="/assets/images/age-18plus.webp" alt="" class="nx-gate__img" width="250" height="250" aria-hidden="true">
        <h2 class="nx-gate__title" id="nxGateTitle">Confirmation d'âge requise</h2>
        <p class="nx-gate__body">L'accès à ce site est strictement réservé aux personnes âgées de 18 ans et plus. En continuant, vous confirmez avoir l'âge légal requis dans votre pays de résidence. Les jeux d'argent comportent des risques de dépendance. Jouez de manière responsable. Pour obtenir de l'aide&#160;: <a href="https://joueurs-info-service.fr" rel="nofollow noopener" target="_blank" class="nx-gate__ref">joueurs-info-service.fr</a></p>
        <div class="nx-gate__row">
            <button class="nx-btn nx-btn--cta nx-btn--full nx-btn--lg" id="nxGateAccept">J'ai 18 ans ou plus — Continuer</button>
            <button class="nx-btn nx-btn--outline nx-btn--full" id="nxGateDecline">Quitter le site</button>
        </div>
    </div>
</div>

<header class="nx-hdr" id="nxHeader">

    <div class="nx-hdr__shell">
        <div class="nx-wrap">
            <nav class="nx-hdr__nav" aria-label="Navigation principale">

                <a href="/" class="nx-hdr__logo" aria-label="Novorexas — retour à l'accueil">
                    <img src="/assets/logos/novorexas.webp" alt="Novorexas" class="nx-hdr__logo-img" width="360" height="116">
                </a>

                <ul class="nx-hdr__menu" role="list">
                    <?php foreach ($nav as $item):
                        $active = (rtrim($item['href'], '/') === $uri);
                        ?>
                        <li class="nx-hdr__item">
                            <a href="<?= $item['href'] ?>"
                               class="nx-hdr__link<?= $active ? ' nx-hdr__link--on' : '' ?>"
                                <?= $active ? 'aria-current="page"' : '' ?>>
                                <?= $item['label'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <div class="nx-hdr__chip">
                    <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/><path d="m9 12 2 2 4-4"/></svg>
                    <span class="nx-hdr__chip-txt">Guide ANJ</span>
                </div>

                <button class="nx-hdr__burger"
                        id="nxBurger"
                        type="button"
                        aria-label="Ouvrir le menu"
                        aria-expanded="false"
                        aria-controls="nxMobMenu">
                    <span class="nx-burger-lines" aria-hidden="true">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <span class="nx-burger-x" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    </span>
                </button>

            </nav>
        </div>
    </div>

    <div class="nx-hdr__bar">
        <div class="nx-wrap nx-hdr__bar-row">
            <div class="nx-hdr__bar-seg nx-hdr__bar-seg--end">
                <a href="https://joueurs-info-service.fr" rel="nofollow noopener" target="_blank" class="nx-hdr__bar-link">joueurs-info-service.fr</a>
                <span class="nx-hdr__bar-sep" aria-hidden="true"></span>
                <span class="nx-hdr__bar-txt">09&#8209;74&#8209;75&#8209;13&#8209;13</span>
                <span class="nx-hdr__bar-note">Appel non surtaxé</span>
            </div>
            <div class="nx-hdr__bar-seg nx-hdr__bar-seg--mid">
                <span class="nx-hdr__bar-txt">Jouez toujours de façon responsable.</span>
            </div>
            <div class="nx-hdr__bar-seg">
                <img src="/assets/images/age-18plus.webp" alt="18+" class="nx-hdr__bar-ico" width="250" height="250">
                <span class="nx-hdr__bar-txt">Destiné uniquement aux personnes majeures de 18 ans et plus.</span>
            </div>
        </div>
    </div>

    <div class="nx-mob" id="nxMobMenu" aria-hidden="true">
        <div class="nx-mob__inner">
            <ul class="nx-mob__list" role="list">
                <?php foreach ($nav as $item):
                    $active = (rtrim($item['href'], '/') === $uri);
                    ?>
                    <li>
                        <a href="<?= $item['href'] ?>"
                           class="nx-mob__link<?= $active ? ' nx-mob__link--on' : '' ?>"
                            <?= $active ? 'aria-current="page"' : '' ?>>
                            <?= $item['label'] ?>
                            <svg class="nx-mob__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="nx-mob__legal">
                <div class="nx-mob__legal-row">
                    <img src="/assets/images/age-18plus.webp" alt="18+" class="nx-mob__legal-ico" width="250" height="250">
                    <span>Réservé aux personnes de 18 ans et plus</span>
                </div>
                <div class="nx-mob__legal-links">
                    <a href="https://joueurs-info-service.fr" rel="nofollow noopener" target="_blank" class="nx-mob__ref">joueurs-info-service.fr</a>
                    <span class="nx-mob__legal-sep" aria-hidden="true"></span>
                    <a href="tel:0974751313" class="nx-mob__tel">09 74 75 13 13</a>
                </div>
            </div>
        </div>
    </div>

</header>