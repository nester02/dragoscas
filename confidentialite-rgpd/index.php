<?php
$page_title     = "Confidentialité &amp; RGPD — Politique de données personnelles | Dragoscas";
$page_desc      = "Politique de confidentialité de Dragoscas : données collectées, bases légales RGPD, durées de conservation, vos droits et gestion des cookies Google Ads.";
$page_canonical = "https://dragoscas.com/confidentialite-rgpd/";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title><?= $page_title ?></title>
    <meta name="description" content="<?= $page_desc ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="<?= $page_canonical ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/assets/favicon/android-chrome-512x512.png">
    <link rel="preload" href="/assets/fonts/sora-v12-latin-700.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/assets/fonts/inter-v13-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="/assets/css/style.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="/assets/css/inner.css" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/inner.css">
    </noscript>
    <script>
        (function(){
            try { if (!localStorage.getItem('dg_age_ok')) { document.documentElement.style.visibility = 'hidden'; } } catch(e) {}
        })();
    </script>
</head>
<body class="ip-page">

<?php include '../header.php'; ?>

<main>

    <div class="ip-hero">
        <div class="dg-wrap">
            <div class="ip-hero__inner">
                <p class="ip-eyebrow">
                    <span class="ip-eyebrow-line" aria-hidden="true"></span>
                    RGPD &middot; Données personnelles
                </p>
                <h1 class="ip-hero__title">Vos données,<br>nos engagements</h1>
                <p class="ip-hero__sub">Ce document décrit quelles données nous collectons, pourquoi, combien de temps nous les conservons et quels droits vous avez sur elles.</p>
                <p class="ip-hero__meta">
                    <img src="/assets/icons/refresh-cw.svg" alt="" class="dg-ico dg-ico--xs dg-ico--brand">
                    Dernière mise à jour : 7 mars 2026
                    <span class="ip-hero__meta-dot" aria-hidden="true"></span>
                    <a href="mailto:contact@dragoscas.com">contact@dragoscas.com</a>
                </p>
            </div>
        </div>
    </div>

    <div class="ip-content">
        <div class="dg-wrap">
            <div class="ip-body">

                <!-- 01 Responsable -->
                <section class="ip-section">
                    <div class="ip-section-head">
                        <span class="ip-section-num" aria-hidden="true">01</span>
                        <div class="ip-section-title-wrap">
                            <span class="ip-section-label">Responsable du traitement</span>
                            <h2 class="ip-section-title">Qui traite vos données</h2>
                        </div>
                    </div>
                    <div class="ip-prose">
                        <p>Le responsable du traitement des données personnelles collectées sur Dragoscas est l'entité exploitant le site dragoscas.com.</p>
                    </div>
                    <div class="ip-hotline">
                        <div class="ip-hotline__icon">
                            <img src="/assets/icons/mail.svg" alt="">
                        </div>
                        <div class="ip-hotline__body">
                            <p class="ip-hotline__num"><a href="mailto:contact@dragoscas.com">contact@dragoscas.com</a></p>
                            <p class="ip-hotline__note">Contact délégué à la protection des données — réponse sous un mois maximum</p>
                        </div>
                    </div>
                </section>

                <!-- 02 Données collectées -->
                <section class="ip-section">
                    <div class="ip-section-head">
                        <span class="ip-section-num" aria-hidden="true">02</span>
                        <div class="ip-section-title-wrap">
                            <span class="ip-section-label">Données collectées</span>
                            <h2 class="ip-section-title">Ce que nous collectons et pourquoi</h2>
                        </div>
                    </div>
                    <div class="ip-prose">
                        <p>Nous collectons uniquement les données strictement nécessaires au fonctionnement du site et à la fourniture de nos services d'information comparatif.</p>
                    </div>
                    <div class="ip-tools">
                        <div class="ip-tool">
                            <div class="ip-tool__ico-wrap"><img src="/assets/icons/mail.svg" alt=""></div>
                            <div class="ip-tool__body">
                                <p class="ip-tool__name">Contact</p>
                                <p class="ip-tool__desc">Email et nom via le formulaire de contact — uniquement pour répondre à vos demandes.</p>
                            </div>
                        </div>
                        <div class="ip-tool">
                            <div class="ip-tool__ico-wrap"><img src="/assets/icons/shield-check.svg" alt=""></div>
                            <div class="ip-tool__body">
                                <p class="ip-tool__name">Données techniques</p>
                                <p class="ip-tool__desc">Adresse IP, navigateur, système d'exploitation — sécurité et prévention des fraudes.</p>
                            </div>
                        </div>
                        <div class="ip-tool">
                            <div class="ip-tool__ico-wrap"><img src="/assets/icons/bar-chart-2.svg" alt=""></div>
                            <div class="ip-tool__body">
                                <p class="ip-tool__name">Navigation</p>
                                <p class="ip-tool__desc">Pages visitées, durée, source de trafic — statistiques anonymisées uniquement.</p>
                            </div>
                        </div>
                        <div class="ip-tool">
                            <div class="ip-tool__ico-wrap"><img src="/assets/icons/layers.svg" alt=""></div>
                            <div class="ip-tool__body">
                                <p class="ip-tool__name">Cookies</p>
                                <p class="ip-tool__desc">Cookies techniques et de mesure d'audience — fonctionnement du site et analytics.</p>
                            </div>
                        </div>
                    </div>
                    <div class="ip-callout ip-callout--info">
                        <span class="ip-callout__label">Ce que nous ne collectons pas</span>
                        <p class="ip-callout__text">Aucune donnée sensible — origine ethnique, opinions politiques, convictions religieuses, données de santé, orientation sexuelle ou données biométriques.</p>
                    </div>
                </section>

                <!-- 03 Bases légales -->
                <section class="ip-section">
                    <div class="ip-section-head">
                        <span class="ip-section-num" aria-hidden="true">03</span>
                        <div class="ip-section-title-wrap">
                            <span class="ip-section-label">Bases légales</span>
                            <h2 class="ip-section-title">Sur quoi repose chaque traitement</h2>
                        </div>
                    </div>
                    <div class="ip-prose">
                        <p>Chaque traitement de données repose sur un fondement légal explicite conformément au RGPD.</p>
                    </div>

                    <h3 style="font-size:0.875rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:var(--dg-ink-subtle);margin:24px 0 14px;">Consentement</h3>
                    <ul class="ip-icolist">
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/check-circle.svg" alt=""></span>Réponse à vos demandes via le formulaire de contact</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/check-circle.svg" alt=""></span>Utilisation de cookies non essentiels (mesure d'audience, publicité)</li>
                    </ul>

                    <h3 style="font-size:0.875rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:var(--dg-ink-subtle);margin:24px 0 14px;">Intérêt légitime</h3>
                    <ul class="ip-icolist">
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/shield-check.svg" alt=""></span>Sécurité du site et prévention des activités frauduleuses</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/trending-up.svg" alt=""></span>Amélioration de la performance et de l'expérience utilisateur</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/bar-chart-2.svg" alt=""></span>Analyse statistique anonymisée de la fréquentation</li>
                    </ul>

                    <h3 style="font-size:0.875rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:var(--dg-ink-subtle);margin:24px 0 14px;">Obligation légale</h3>
                    <ul class="ip-icolist">
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/list.svg" alt=""></span>Conservation des journaux de connexion (sécurité informatique)</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/list.svg" alt=""></span>Respect des obligations légales et réglementaires applicables</li>
                    </ul>

                    <div class="ip-callout ip-callout--warn">
                        <span class="ip-callout__label">Publicité — Google Ads</span>
                        <p class="ip-callout__text">Ce site peut afficher des annonces via Google Ads. Google peut utiliser des cookies pour personnaliser les publicités affichées. Gérez vos préférences sur <a href="https://adssettings.google.com/" rel="nofollow noreferrer" target="_blank">adssettings.google.com</a>.</p>
                    </div>
                </section>

                <!-- 04 Conservation -->
                <section class="ip-section">
                    <div class="ip-section-head">
                        <span class="ip-section-num" aria-hidden="true">04</span>
                        <div class="ip-section-title-wrap">
                            <span class="ip-section-label">Durées de conservation</span>
                            <h2 class="ip-section-title">Combien de temps vos données sont conservées</h2>
                        </div>
                    </div>
                    <div class="ip-prose">
                        <p>Vos données sont conservées pendant des durées limitées adaptées à chaque finalité. À l'issue de ces délais, elles sont supprimées ou anonymisées de manière irréversible.</p>
                    </div>
                    <div class="ip-resources">
                        <div class="ip-resource">
                            <div class="ip-resource__ico"><img src="/assets/icons/mail.svg" alt=""></div>
                            <div>
                                <p class="ip-resource__name">Demandes de contact — 12 mois</p>
                                <p class="ip-resource__desc">Durée maximale après traitement de la demande.</p>
                            </div>
                        </div>
                        <div class="ip-resource">
                            <div class="ip-resource__ico"><img src="/assets/icons/shield-check.svg" alt=""></div>
                            <div>
                                <p class="ip-resource__name">Journaux de connexion — 6 mois</p>
                                <p class="ip-resource__desc">Obligation légale en matière de sécurité informatique.</p>
                            </div>
                        </div>
                        <div class="ip-resource">
                            <div class="ip-resource__ico"><img src="/assets/icons/layers.svg" alt=""></div>
                            <div>
                                <p class="ip-resource__name">Cookies techniques — 13 mois</p>
                                <p class="ip-resource__desc">Durée maximale conformément aux recommandations CNIL.</p>
                            </div>
                        </div>
                        <div class="ip-resource">
                            <div class="ip-resource__ico"><img src="/assets/icons/bar-chart-2.svg" alt=""></div>
                            <div>
                                <p class="ip-resource__name">Statistiques anonymisées — illimitée</p>
                                <p class="ip-resource__desc">Données non personnelles ne permettant pas d'identifier un individu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="ip-callout ip-callout--info">
                        <span class="ip-callout__label">Engagement</span>
                        <p class="ip-callout__text">Vos données ne sont jamais vendues, louées ou transmises à des tiers à des fins commerciales ou marketing.</p>
                    </div>
                </section>

                <!-- 05 Vos droits -->
                <section class="ip-section">
                    <div class="ip-section-head">
                        <span class="ip-section-num" aria-hidden="true">05</span>
                        <div class="ip-section-title-wrap">
                            <span class="ip-section-label">Vos droits</span>
                            <h2 class="ip-section-title">Ce que le RGPD vous garantit</h2>
                        </div>
                    </div>
                    <div class="ip-prose">
                        <p>Conformément au RGPD et à la loi Informatique et Libertés, vous disposez des droits suivants sur vos données personnelles.</p>
                    </div>
                    <div class="ip-tools">
                        <div class="ip-tool">
                            <div class="ip-tool__ico-wrap"><img src="/assets/icons/eye.svg" alt=""></div>
                            <div class="ip-tool__body">
                                <p class="ip-tool__name">Droit d'accès</p>
                                <p class="ip-tool__desc">Obtenir confirmation que vos données sont traitées et en recevoir une copie.</p>
                            </div>
                        </div>
                        <div class="ip-tool">
                            <div class="ip-tool__ico-wrap"><img src="/assets/icons/refresh-cw.svg" alt=""></div>
                            <div class="ip-tool__body">
                                <p class="ip-tool__name">Droit de rectification</p>
                                <p class="ip-tool__desc">Corriger ou compléter des données inexactes ou incomplètes vous concernant.</p>
                            </div>
                        </div>
                        <div class="ip-tool">
                            <div class="ip-tool__ico-wrap"><img src="/assets/icons/x-circle.svg" alt=""></div>
                            <div class="ip-tool__body">
                                <p class="ip-tool__name">Droit à l'effacement</p>
                                <p class="ip-tool__desc">Demander la suppression de vos données personnelles (droit à l'oubli).</p>
                            </div>
                        </div>
                        <div class="ip-tool">
                            <div class="ip-tool__ico-wrap"><img src="/assets/icons/slash.svg" alt=""></div>
                            <div class="ip-tool__body">
                                <p class="ip-tool__name">Droit d'opposition</p>
                                <p class="ip-tool__desc">Vous opposer au traitement de vos données pour des motifs légitimes.</p>
                            </div>
                        </div>
                        <div class="ip-tool">
                            <div class="ip-tool__ico-wrap"><img src="/assets/icons/lock.svg" alt=""></div>
                            <div class="ip-tool__body">
                                <p class="ip-tool__name">Droit à la limitation</p>
                                <p class="ip-tool__desc">Demander la suspension temporaire du traitement dans certaines situations.</p>
                            </div>
                        </div>
                        <div class="ip-tool">
                            <div class="ip-tool__ico-wrap"><img src="/assets/icons/arrow-right.svg" alt=""></div>
                            <div class="ip-tool__body">
                                <p class="ip-tool__name">Droit à la portabilité</p>
                                <p class="ip-tool__desc">Recevoir vos données dans un format structuré et les transmettre à un tiers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="ip-hotline">
                        <div class="ip-hotline__icon">
                            <img src="/assets/icons/mail.svg" alt="">
                        </div>
                        <div class="ip-hotline__body">
                            <p class="ip-hotline__num"><a href="mailto:contact@dragoscas.com">contact@dragoscas.com</a></p>
                            <p class="ip-hotline__note">Joignez une copie de votre pièce d'identité — réponse dans un délai d'un mois</p>
                        </div>
                    </div>
                    <div class="ip-callout ip-callout--info">
                        <span class="ip-callout__label">Réclamation auprès de la CNIL</span>
                        <p class="ip-callout__text">Si vous estimez que vos droits ne sont pas respectés, vous pouvez saisir la CNIL — 3 Place de Fontenoy, TSA 80715, 75334 Paris Cedex 07 — Tél. 01 53 73 22 22 — <a href="https://www.cnil.fr/" rel="nofollow noreferrer" target="_blank">www.cnil.fr</a></p>
                    </div>
                </section>

                <!-- 06 Sécurité -->
                <section class="ip-section">
                    <div class="ip-section-head">
                        <span class="ip-section-num" aria-hidden="true">06</span>
                        <div class="ip-section-title-wrap">
                            <span class="ip-section-label">Sécurité</span>
                            <h2 class="ip-section-title">Comment nous protégeons vos données</h2>
                        </div>
                    </div>
                    <div class="ip-prose">
                        <p>Nous mettons en œuvre des mesures techniques et organisationnelles appropriées pour garantir la confidentialité et l'intégrité de vos données.</p>
                    </div>
                    <div class="ip-rules">
                        <div>
                            <div class="ip-rules__col-head">
                                <img src="/assets/icons/shield-check.svg" alt="">
                                Mesures techniques
                            </div>
                            <ul class="ip-icolist">
                                <li><span class="ip-icolist__ico"><img src="/assets/icons/lock.svg" alt=""></span>Chiffrement des communications via HTTPS/SSL</li>
                                <li><span class="ip-icolist__ico"><img src="/assets/icons/shield-check.svg" alt=""></span>Hébergement sécurisé avec sauvegardes régulières</li>
                                <li><span class="ip-icolist__ico"><img src="/assets/icons/shield-check.svg" alt=""></span>Pare-feu et systèmes de détection d'intrusion</li>
                                <li><span class="ip-icolist__ico"><img src="/assets/icons/lock.svg" alt=""></span>Contrôle d'accès strict aux données sensibles</li>
                                <li><span class="ip-icolist__ico"><img src="/assets/icons/refresh-cw.svg" alt=""></span>Mises à jour régulières des systèmes et logiciels</li>
                            </ul>
                        </div>
                        <div>
                            <div class="ip-rules__col-head">
                                <img src="/assets/icons/users.svg" alt="">
                                Mesures organisationnelles
                            </div>
                            <ul class="ip-icolist">
                                <li><span class="ip-icolist__ico"><img src="/assets/icons/user-check.svg" alt=""></span>Accès limité aux seules personnes autorisées, sous obligation de confidentialité</li>
                                <li><span class="ip-icolist__ico"><img src="/assets/icons/lock.svg" alt=""></span>Politique de gestion des mots de passe robuste</li>
                                <li><span class="ip-icolist__ico"><img src="/assets/icons/alert-triangle.svg" alt=""></span>Procédures de notification en cas de violation de données</li>
                            </ul>
                        </div>
                    </div>
                    <div class="ip-callout ip-callout--info">
                        <span class="ip-callout__label">Hébergement</span>
                        <p class="ip-callout__text">Vos données sont hébergées et traitées au sein de l'Union Européenne. Tout transfert hors UE éventuel serait encadré par des garanties conformes au RGPD (clauses contractuelles types approuvées par la Commission Européenne).</p>
                    </div>
                </section>

                <!-- 07 Cookies -->
                <section class="ip-section">
                    <div class="ip-section-head">
                        <span class="ip-section-num" aria-hidden="true">07</span>
                        <div class="ip-section-title-wrap">
                            <span class="ip-section-label">Cookies</span>
                            <h2 class="ip-section-title">Cookies et technologies similaires</h2>
                        </div>
                    </div>
                    <div class="ip-prose">
                        <p>Le site utilise des cookies pour assurer son fonctionnement, mesurer l'audience et afficher des publicités pertinentes via Google Ads.</p>
                    </div>
                    <div class="ip-resources">
                        <div class="ip-resource">
                            <div class="ip-resource__ico"><img src="/assets/icons/shield-check.svg" alt=""></div>
                            <div>
                                <p class="ip-resource__name">Cookies essentiels</p>
                                <p class="ip-resource__desc">Mémorisation de votre consentement, vérification de l'âge, maintien de votre session. Nécessaires au fonctionnement du site, ils ne peuvent pas être refusés.</p>
                            </div>
                        </div>
                        <div class="ip-resource">
                            <div class="ip-resource__ico"><img src="/assets/icons/bar-chart-2.svg" alt=""></div>
                            <div>
                                <p class="ip-resource__name">Cookies de mesure d'audience</p>
                                <p class="ip-resource__desc">Analyse statistique anonymisée du trafic, identification des pages les plus consultées.</p>
                            </div>
                        </div>
                        <div class="ip-resource">
                            <div class="ip-resource__ico"><img src="/assets/icons/zap.svg" alt=""></div>
                            <div>
                                <p class="ip-resource__name">Cookies publicitaires — Google Ads</p>
                                <p class="ip-resource__desc">Personnalisation des annonces affichées et mesure des performances publicitaires.</p>
                                <a href="https://adssettings.google.com/" rel="nofollow noreferrer" target="_blank" class="ip-resource__link">Gérer mes préférences publicitaires</a>
                            </div>
                        </div>
                    </div>
                    <div class="ip-callout">
                        <span class="ip-callout__label">Gestion des cookies</span>
                        <p class="ip-callout__text">Modifiez vos préférences à tout moment via le bandeau présent sur le site, ou désactivez les cookies dans les paramètres de votre navigateur. Certaines fonctionnalités peuvent être affectées en cas de refus des cookies techniques.</p>
                    </div>
                </section>

                <div class="ip-alert">
                    <p class="ip-alert__title">Cette politique peut évoluer</p>
                    <p class="ip-alert__text">Ce document est susceptible d'être modifié pour refléter les évolutions légales ou nos pratiques. La date de mise à jour est indiquée en haut de cette page. Pour toute question : <a href="mailto:contact@dragoscas.com">contact@dragoscas.com</a></p>
                </div>

            </div>
        </div>
    </div>

</main>

<?php include '../footer.php'; ?>
<script src="/assets/js/age-gate.js" defer></script>
<script src="/assets/js/cookie-banner.js" defer></script>
</body>
</html>