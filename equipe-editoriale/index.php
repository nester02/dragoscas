<?php
$page_title     = "Équipe Éditoriale — Méthodologie, transparence et indépendance | Dragoscas";
$page_desc      = "Qui sommes-nous, comment nous évaluons les opérateurs ANJ, notre modèle de monétisation et les garanties d'indépendance éditoriale de Dragoscas.";
$page_canonical = "https://dragoscas.com/equipe-editoriale/";
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
                    E-E-A-T &middot; Guide indépendant ANJ
                </p>
                <h1 class="ip-hero__title">Ce que nous faisons<br>et comment nous le faisons</h1>
                <p class="ip-hero__sub">Dragoscas est un comparatif indépendant de bookmakers et plateformes de poker agréés en France. Cette page décrit notre identité, notre méthode d'évaluation et nos engagements en matière de transparence.</p>
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

                <!-- 01 Identité -->
                <section class="ip-section">
                    <div class="ip-section-head">
                        <span class="ip-section-num" aria-hidden="true">01</span>
                        <div class="ip-section-title-wrap">
                            <span class="ip-section-label">Identité</span>
                            <h2 class="ip-section-title">Qui sommes-nous</h2>
                        </div>
                    </div>
                    <div class="ip-prose">
                        <p>Dragoscas est un site comparatif indépendant dédié aux paris sportifs et au poker en ligne en France. Nous recensons et évaluons exclusivement des opérateurs titulaires d'une licence délivrée par l'Autorité Nationale des Jeux (ANJ) — aucun opérateur non agréé n'apparaît dans nos classements.</p>
                        <p>Notre objectif est d'aider chaque joueur à comparer les conditions réelles des offres disponibles : bonus, paiements, fiabilité, qualité du support. Nous ne gérons aucun compte joueur et n'intervenons à aucun stade dans la relation entre l'utilisateur et l'opérateur.</p>
                    </div>
                    <div class="ip-tools">
                        <div class="ip-tool">
                            <div class="ip-tool__ico-wrap"><img src="/assets/icons/shield-check.svg" alt=""></div>
                            <div class="ip-tool__body">
                                <p class="ip-tool__name">ANJ exclusivement</p>
                                <p class="ip-tool__desc">Seuls les opérateurs titulaires d'une licence ANJ en cours de validité sont référencés sur Dragoscas.</p>
                            </div>
                        </div>
                        <div class="ip-tool">
                            <div class="ip-tool__ico-wrap"><img src="/assets/icons/slash.svg" alt=""></div>
                            <div class="ip-tool__body">
                                <p class="ip-tool__name">Aucun compte joueur</p>
                                <p class="ip-tool__desc">Dragoscas ne gère ni ne détient aucun compte joueur. Nous ne participons à aucune transaction financière entre utilisateurs et opérateurs.</p>
                            </div>
                        </div>
                        <div class="ip-tool">
                            <div class="ip-tool__ico-wrap"><img src="/assets/icons/bar-chart-2.svg" alt=""></div>
                            <div class="ip-tool__body">
                                <p class="ip-tool__name">Comparatif objectif</p>
                                <p class="ip-tool__desc">Nos classements sont fondés sur une méthodologie uniforme appliquée à chaque opérateur, sans favoritisme commercial.</p>
                            </div>
                        </div>
                        <div class="ip-tool">
                            <div class="ip-tool__ico-wrap"><img src="/assets/icons/refresh-cw.svg" alt=""></div>
                            <div class="ip-tool__body">
                                <p class="ip-tool__name">Mises à jour régulières</p>
                                <p class="ip-tool__desc">Chaque évaluation est révisée dès un changement d'offre significatif et systématiquement au moins une fois par trimestre.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- 02 Méthodologie -->
                <section class="ip-section">
                    <div class="ip-section-head">
                        <span class="ip-section-num" aria-hidden="true">02</span>
                        <div class="ip-section-title-wrap">
                            <span class="ip-section-label">Méthodologie</span>
                            <h2 class="ip-section-title">Comment nous évaluons les opérateurs</h2>
                        </div>
                    </div>
                    <div class="ip-prose">
                        <p>Chaque opérateur reçoit une note sur une échelle de 0 à 10, calculée à partir de six critères issus de tests pratiques et de données vérifiées.</p>
                    </div>
                    <div class="ip-resources">
                        <div class="ip-resource">
                            <div class="ip-resource__ico"><img src="/assets/icons/gift.svg" alt=""></div>
                            <div>
                                <p class="ip-resource__name">Bonus et conditions</p>
                                <p class="ip-resource__desc">Montant de l'offre, exigences de mise, délai d'expiration et restrictions éventuelles — chaque paramètre est noté indépendamment.</p>
                            </div>
                        </div>
                        <div class="ip-resource">
                            <div class="ip-resource__ico"><img src="/assets/icons/credit-card.svg" alt=""></div>
                            <div>
                                <p class="ip-resource__name">Paiements</p>
                                <p class="ip-resource__desc">Méthodes acceptées, délais de retrait constatés et limites appliquées par l'opérateur, mesurés par des tests réels.</p>
                            </div>
                        </div>
                        <div class="ip-resource">
                            <div class="ip-resource__ico"><img src="/assets/icons/shield-check.svg" alt=""></div>
                            <div>
                                <p class="ip-resource__name">Légalité et sécurité</p>
                                <p class="ip-resource__desc">Validité de la licence ANJ, protocoles de vérification d'identité et protection des données personnelles.</p>
                            </div>
                        </div>
                        <div class="ip-resource">
                            <div class="ip-resource__ico"><img src="/assets/icons/headphones.svg" alt=""></div>
                            <div>
                                <p class="ip-resource__name">Service client</p>
                                <p class="ip-resource__desc">Disponibilité, canaux de contact et qualité des réponses testés directement par notre équipe éditoriale.</p>
                            </div>
                        </div>
                        <div class="ip-resource">
                            <div class="ip-resource__ico"><img src="/assets/icons/smartphone.svg" alt=""></div>
                            <div>
                                <p class="ip-resource__name">Expérience mobile</p>
                                <p class="ip-resource__desc">Fluidité sur smartphone et tablette, présence d'une application native ou qualité de la version web mobile.</p>
                            </div>
                        </div>
                        <div class="ip-resource">
                            <div class="ip-resource__ico"><img src="/assets/icons/users.svg" alt=""></div>
                            <div>
                                <p class="ip-resource__name">Avis utilisateurs</p>
                                <p class="ip-resource__desc">Volume et tendance générale des retours collectés sur des plateformes tierces indépendantes, analysés sans filtrage.</p>
                            </div>
                        </div>
                    </div>
                    <div class="ip-callout ip-callout--warn">
                        <span class="ip-callout__label">À vérifier avant inscription</span>
                        <p class="ip-callout__text">Les conditions des opérateurs évoluent régulièrement. Vérifiez toujours les termes directement sur le site de l'opérateur avant de vous inscrire ou d'effectuer un dépôt.</p>
                    </div>
                </section>

                <!-- 03 Transparence -->
                <section class="ip-section">
                    <div class="ip-section-head">
                        <span class="ip-section-num" aria-hidden="true">03</span>
                        <div class="ip-section-title-wrap">
                            <span class="ip-section-label">Transparence</span>
                            <h2 class="ip-section-title">Monétisation et indépendance éditoriale</h2>
                        </div>
                    </div>
                    <div class="ip-prose">
                        <p>Certains liens sur Dragoscas sont des liens affiliés : si vous cliquez et vous inscrivez auprès d'un opérateur, nous pouvons percevoir une commission. Cette rémunération ne modifie en rien nos notes ni l'ordre de notre classement — nos évaluations reposent uniquement sur la méthodologie décrite ci-dessus.</p>
                    </div>
                    <ul class="ip-icolist">
                        <li>
                            <span class="ip-icolist__ico"><img src="/assets/icons/shield-check.svg" alt=""></span>
                            Les opérateurs ne peuvent pas acheter de position dans nos classements ni influencer le contenu de nos avis.
                        </li>
                        <li>
                            <span class="ip-icolist__ico"><img src="/assets/icons/shield-check.svg" alt=""></span>
                            Toute relation commerciale susceptible d'affecter notre indépendance serait signalée explicitement sur la page concernée.
                        </li>
                        <li>
                            <span class="ip-icolist__ico"><img src="/assets/icons/zap.svg" alt=""></span>
                            Ce site peut afficher des annonces via Google Ads, clairement distinctes du contenu éditorial. Gérez vos préférences sur <a href="https://adssettings.google.com/" rel="nofollow noreferrer" target="_blank">adssettings.google.com</a>.
                        </li>
                    </ul>
                    <div class="ip-callout">
                        <span class="ip-callout__label">Jeu responsable</span>
                        <p class="ip-callout__text">Les jeux d'argent comportent des risques de dépendance. Si vous ressentez des difficultés, consultez notre page <a href="/guide-jeu-responsable/">Jeu Responsable ANJ</a> ou contactez le Joueurs Info Service au <a href="tel:0974751313">09 74 75 13 13</a> — 7j/7, appel non surtaxé. Ce site s'adresse exclusivement aux personnes de 18 ans et plus.</p>
                    </div>
                </section>

                <!-- 04 Rédaction -->
                <section class="ip-section">
                    <div class="ip-section-head">
                        <span class="ip-section-num" aria-hidden="true">04</span>
                        <div class="ip-section-title-wrap">
                            <span class="ip-section-label">Rédaction</span>
                            <h2 class="ip-section-title">Qui est derrière ce contenu</h2>
                        </div>
                    </div>
                    <div class="ip-prose">
                        <p>Le contenu de Dragoscas est produit et vérifié par une équipe éditoriale spécialisée dans les jeux en ligne réglementés en France. Chaque fiche opérateur est rédigée sur la base de tests pratiques et de données vérifiées — sans rémunération de la part des opérateurs évalués.</p>
                    </div>
                    <div class="ip-hotline">
                        <div class="ip-hotline__icon">
                            <img src="/assets/icons/user-check.svg" alt="">
                        </div>
                        <div class="ip-hotline__body">
                            <p class="ip-hotline__num">Équipe Dragoscas</p>
                            <p class="ip-hotline__note">Responsable éditorial &middot; <a href="mailto:contact@dragoscas.com">contact@dragoscas.com</a></p>
                        </div>
                    </div>
                    <div class="ip-callout ip-callout--info">
                        <span class="ip-callout__label">Signalement d'erreur</span>
                        <p class="ip-callout__text">Vous avez repéré une information inexacte ou obsolète&nbsp;? Écrivez-nous à <a href="mailto:contact@dragoscas.com">contact@dragoscas.com</a> — nous vérifierons et corrigerons le contenu concerné en mettant à jour la date de révision de la page.</p>
                    </div>
                </section>

                <!-- 05 Contact -->
                <section class="ip-section">
                    <div class="ip-section-head">
                        <span class="ip-section-num" aria-hidden="true">05</span>
                        <div class="ip-section-title-wrap">
                            <span class="ip-section-label">Contact</span>
                            <h2 class="ip-section-title">Nous écrire</h2>
                        </div>
                    </div>
                    <div class="ip-hotline">
                        <div class="ip-hotline__icon">
                            <img src="/assets/icons/mail.svg" alt="">
                        </div>
                        <div class="ip-hotline__body">
                            <p class="ip-hotline__num"><a href="mailto:contact@dragoscas.com">contact@dragoscas.com</a></p>
                            <p class="ip-hotline__note">Lundi–Vendredi, 9h30–17h00 (Paris) &middot; Réponse sous 24 à 48h ouvrées</p>
                        </div>
                    </div>
                    <div class="ip-callout ip-callout--info">
                        <span class="ip-callout__label">Comptes joueurs</span>
                        <p class="ip-callout__text">Pour toute question liée à un compte joueur, contactez directement le service client de l'opérateur concerné. Dragoscas n'a pas accès aux comptes joueurs et ne peut pas intervenir dans ces démarches.</p>
                    </div>
                </section>

            </div>
        </div>
    </div>

</main>

<?php include '../footer.php'; ?>
<script src="/assets/js/age-gate.js" defer></script>
<script src="/assets/js/cookie-banner.js" defer></script>
</body>
</html>