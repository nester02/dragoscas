<?php
$page_title = "Jeu Responsable ANJ — Ressources &amp; prévention | Dragoscas";
$page_desc  = "Risques du jeu, signes d'alerte, outils de contrôle ANJ et ressources d'aide gratuites pour les joueurs et leurs proches.";
$page_canonical = "https://dragoscas.com/guide-jeu-responsable/";
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
                    Guide ANJ &middot; Prévention
                </p>
                <h1 class="ip-hero__title">Jouer, oui&nbsp;—<br>mais en gardant le contrôle</h1>
                <p class="ip-hero__sub">Le jeu doit rester un divertissement. Si les paris occupent trop de place dans votre quotidien, des ressources concrètes existent pour vous aider à retrouver la maîtrise.</p>
                <p class="ip-hero__meta">
                    <img src="/assets/icons/refresh-cw.svg" alt="" class="dg-ico dg-ico--xs dg-ico--brand">
                    Mis à jour le 7 mars 2026
                    <span class="ip-hero__meta-dot" aria-hidden="true"></span>
                    Guide indépendant Dragoscas
                </p>
            </div>
        </div>
    </div>

    <div class="ip-content">
        <div class="dg-wrap">
            <div class="ip-body">

                <div class="ip-hotline">
                    <div class="ip-hotline__icon">
                        <img src="/assets/icons/phone.svg" alt="">
                    </div>
                    <div class="ip-hotline__body">
                        <p class="ip-hotline__num"><a href="tel:0974751313">09 74 75 13 13</a></p>
                        <p class="ip-hotline__note">Ligne d'écoute gratuite &amp; anonyme &mdash; 7j/7 de 8h à 2h du matin</p>
                    </div>
                    <a href="https://www.joueurs-info-service.fr/" rel="nofollow noreferrer" target="_blank" class="ip-hotline__link">joueurs-info-service.fr</a>
                </div>

                <!-- 01 Risques -->
                <section class="ip-section">
                    <div class="ip-section-head">
                        <span class="ip-section-num" aria-hidden="true">01</span>
                        <div class="ip-section-title-wrap">
                            <span class="ip-section-label">Risques</span>
                            <h2 class="ip-section-title">Ce que le jeu peut provoquer</h2>
                        </div>
                    </div>
                    <div class="ip-prose">
                        <p>Les paris sportifs et le poker en ligne peuvent sembler anodins. Ils exercent pourtant des effets réels sur trois dimensions de la vie.</p>
                    </div>
                    <div class="ip-trio">
                        <div class="ip-trio__col">
                            <div class="ip-trio__head">
                                <img src="/assets/icons/credit-card.svg" alt="">
                                <span class="ip-trio__label">Finances</span>
                            </div>
                            <ul class="ip-trio__list">
                                <li>Endettement progressif</li>
                                <li>Difficultés budgétaires</li>
                                <li>Recours à l'emprunt</li>
                                <li>Épargne dilapidée</li>
                            </ul>
                        </div>
                        <div class="ip-trio__col">
                            <div class="ip-trio__head">
                                <img src="/assets/icons/activity.svg" alt="">
                                <span class="ip-trio__label">Psychologie</span>
                            </div>
                            <ul class="ip-trio__list">
                                <li>Dépendance comportementale</li>
                                <li>Anxiété et stress chroniques</li>
                                <li>Humeur dépressive</li>
                                <li>Perte d'estime de soi</li>
                            </ul>
                        </div>
                        <div class="ip-trio__col">
                            <div class="ip-trio__head">
                                <img src="/assets/icons/users.svg" alt="">
                                <span class="ip-trio__label">Relations</span>
                            </div>
                            <ul class="ip-trio__list">
                                <li>Isolement progressif</li>
                                <li>Tensions familiales</li>
                                <li>Difficultés professionnelles</li>
                                <li>Ruptures relationnelles</li>
                            </ul>
                        </div>
                    </div>
                    <div class="ip-callout ip-callout--warn">
                        <span class="ip-callout__label">À retenir</span>
                        <p class="ip-callout__text">Mathématiquement, les jeux d'argent sont conçus pour que l'opérateur soit gagnant sur le long terme. La probabilité de perte est toujours supérieure à celle de gain.</p>
                    </div>
                </section>

                <!-- 02 Signes d'alerte -->
                <section class="ip-section">
                    <div class="ip-section-head">
                        <span class="ip-section-num" aria-hidden="true">02</span>
                        <div class="ip-section-title-wrap">
                            <span class="ip-section-label">Signes d'alerte</span>
                            <h2 class="ip-section-title">Comment reconnaître un problème</h2>
                        </div>
                    </div>
                    <div class="ip-prose">
                        <p>Identifier les signaux précoces est la première étape vers une reprise de contrôle.</p>
                    </div>
                    <h3 style="font-size:0.875rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:var(--dg-ink-subtle);margin:24px 0 14px;">Comportements</h3>
                    <ul class="ip-icolist">
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/trending-up.svg" alt=""></span>Temps consacré au jeu en augmentation régulière</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/x-circle.svg" alt=""></span>Difficulté croissante à arrêter ou à se fixer des limites</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/activity.svg" alt=""></span>Pensées envahissantes liées aux paris en dehors des sessions</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/arrow-up.svg" alt=""></span>Besoin de miser des sommes toujours plus importantes</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/zap.svg" alt=""></span>Irritabilité lors des tentatives de réduction</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/shield.svg" alt=""></span>Utilisation du jeu pour fuir des problèmes personnels</li>
                    </ul>
                    <h3 style="font-size:0.875rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:var(--dg-ink-subtle);margin:28px 0 14px;">Finances &amp; relations</h3>
                    <ul class="ip-icolist">
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/alert-triangle.svg" alt=""></span>Dettes accumulées, découverts ou emprunts fréquents à l'entourage</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/alert-triangle.svg" alt=""></span>Vente d'objets personnels pour financer le jeu</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/alert-triangle.svg" alt=""></span>Mensonges sur l'étendue réelle de l'activité</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/alert-triangle.svg" alt=""></span>Retrait des activités sociales habituelles</li>
                    </ul>
                    <div class="ip-callout">
                        <span class="ip-callout__label">Quand agir ?</span>
                        <p class="ip-callout__text">Si vous vous reconnaissez dans trois points ou plus, contactez Joueurs Info Service au <strong>09 74 75 13 13</strong> — sans attendre.</p>
                    </div>
                </section>

                <!-- 03 Pratiquer sainement -->
                <section class="ip-section">
                    <div class="ip-section-head">
                        <span class="ip-section-num" aria-hidden="true">03</span>
                        <div class="ip-section-title-wrap">
                            <span class="ip-section-label">Pratiquer sainement</span>
                            <h2 class="ip-section-title">Règles pour un jeu maîtrisé</h2>
                        </div>
                    </div>
                    <div class="ip-rules">
                        <div>
                            <div class="ip-rules__col-head">
                                <img src="/assets/icons/check-circle.svg" alt="">
                                Avant chaque session
                            </div>
                            <ul class="ip-icolist">
                                <li><span class="ip-icolist__ico"><img src="/assets/icons/dollar-sign.svg" alt=""></span>Fixez à l'avance le montant maximal que vous êtes prêt à perdre</li>
                                <li><span class="ip-icolist__ico"><img src="/assets/icons/clock.svg" alt=""></span>Définissez une limite de temps et respectez-la</li>
                                <li><span class="ip-icolist__ico"><img src="/assets/icons/smile.svg" alt=""></span>Ne jouez jamais sous stress ni sous l'influence d'alcool</li>
                            </ul>
                        </div>
                        <div>
                            <div class="ip-rules__col-head">
                                <img src="/assets/icons/slash.svg" alt="">
                                À ne jamais faire
                            </div>
                            <ul class="ip-icolist">
                                <li><span class="ip-icolist__ico"><img src="/assets/icons/x-circle.svg" alt=""></span>Jouer avec l'argent des charges ou de l'alimentation</li>
                                <li><span class="ip-icolist__ico"><img src="/assets/icons/x-circle.svg" alt=""></span>Emprunter pour jouer ou tenter de récupérer des pertes</li>
                                <li><span class="ip-icolist__ico"><img src="/assets/icons/x-circle.svg" alt=""></span>Considérer le jeu comme une source de revenus réguliers</li>
                            </ul>
                        </div>
                    </div>
                    <div class="ip-callout ip-callout--info">
                        <span class="ip-callout__label">Bonne posture</span>
                        <p class="ip-callout__text">Considérez chaque mise comme définitivement perdue avant de jouer. Maintenez le jeu dans la catégorie des loisirs occasionnels et diversifiez vos activités.</p>
                    </div>
                </section>

                <!-- 04 Outils ANJ -->
                <section class="ip-section">
                    <div class="ip-section-head">
                        <span class="ip-section-num" aria-hidden="true">04</span>
                        <div class="ip-section-title-wrap">
                            <span class="ip-section-label">Outils de contrôle</span>
                            <h2 class="ip-section-title">Ce que les opérateurs ANJ doivent proposer</h2>
                        </div>
                    </div>
                    <div class="ip-prose">
                        <p>Tous les opérateurs agréés par l'ANJ sont légalement tenus de mettre à disposition des outils de protection accessibles depuis votre espace personnel.</p>
                    </div>
                    <div class="ip-tools">
                        <div class="ip-tool">
                            <div class="ip-tool__ico-wrap"><img src="/assets/icons/bar-chart-2.svg" alt=""></div>
                            <div class="ip-tool__body">
                                <p class="ip-tool__name">Limites de dépôt</p>
                                <p class="ip-tool__desc">Plafonnez vos dépôts par jour, semaine ou mois. Aucun dépôt supplémentaire n'est possible une fois la limite atteinte.</p>
                            </div>
                        </div>
                        <div class="ip-tool">
                            <div class="ip-tool__ico-wrap"><img src="/assets/icons/timer.svg" alt=""></div>
                            <div class="ip-tool__body">
                                <p class="ip-tool__name">Limites de temps de session</p>
                                <p class="ip-tool__desc">Configurez la durée maximale de vos sessions. Vous serez alerté puis déconnecté automatiquement.</p>
                            </div>
                        </div>
                        <div class="ip-tool">
                            <div class="ip-tool__ico-wrap"><img src="/assets/icons/trending-down.svg" alt=""></div>
                            <div class="ip-tool__body">
                                <p class="ip-tool__name">Limites de perte</p>
                                <p class="ip-tool__desc">Définissez un montant maximum de perte acceptable. Votre compte est suspendu automatiquement à l'atteinte de ce seuil.</p>
                            </div>
                        </div>
                        <div class="ip-tool">
                            <div class="ip-tool__ico-wrap"><img src="/assets/icons/lock.svg" alt=""></div>
                            <div class="ip-tool__body">
                                <p class="ip-tool__name">Auto-exclusion temporaire</p>
                                <p class="ip-tool__desc">Excluez-vous pour 24h à 30 jours ou plus. L'accès à votre compte est totalement bloqué durant cette période.</p>
                            </div>
                        </div>
                        <div class="ip-tool">
                            <div class="ip-tool__ico-wrap"><img src="/assets/icons/shield-off.svg" alt=""></div>
                            <div class="ip-tool__body">
                                <p class="ip-tool__name">Interdiction volontaire ANJ</p>
                                <p class="ip-tool__desc">En cas de perte de contrôle avérée, vous pouvez demander une exclusion permanente de tous les sites agréés en France.</p>
                            </div>
                        </div>
                    </div>
                    <div class="ip-callout ip-callout--info">
                        <span class="ip-callout__label">Fichier d'interdiction volontaire</span>
                        <p class="ip-callout__text">Vous pouvez vous inscrire au fichier ANJ en vous présentant dans un commissariat, une gendarmerie ou directement auprès de l'ANJ. Cette inscription vous interdit l'accès à tous les établissements de jeux et sites agréés en France.</p>
                    </div>
                    <a href="https://www.anj.fr/" rel="nofollow noreferrer" target="_blank" class="ip-anj-link">
                        Visiter le site de l'ANJ
                        <img src="/assets/icons/arrow-right.svg" alt="" class="dg-ico dg-ico--sm">
                    </a>
                </section>

                <!-- 05 Ressources -->
                <section class="ip-section">
                    <div class="ip-section-head">
                        <span class="ip-section-num" aria-hidden="true">05</span>
                        <div class="ip-section-title-wrap">
                            <span class="ip-section-label">Ressources d'aide</span>
                            <h2 class="ip-section-title">Vous n'êtes pas seul</h2>
                        </div>
                    </div>
                    <div class="ip-prose">
                        <p>Des services gratuits, confidentiels et spécialisés existent pour accompagner joueurs et proches.</p>
                    </div>
                    <div class="ip-resources">
                        <div class="ip-resource">
                            <div class="ip-resource__ico"><img src="/assets/icons/phone.svg" alt=""></div>
                            <div>
                                <p class="ip-resource__name">Joueurs Info Service &mdash; 09 74 75 13 13</p>
                                <p class="ip-resource__desc">Écoute, information et conseil. 7j/7 de 8h à 2h du matin. Appel anonyme et non surtaxé.</p>
                                <a href="https://www.joueurs-info-service.fr/" rel="nofollow noreferrer" target="_blank" class="ip-resource__link">joueurs-info-service.fr</a>
                            </div>
                        </div>
                        <div class="ip-resource">
                            <div class="ip-resource__ico"><img src="/assets/icons/heart.svg" alt=""></div>
                            <div>
                                <p class="ip-resource__name">CSAPA — Centres spécialisés en addictologie</p>
                                <p class="ip-resource__desc">Consultations gratuites, prise en charge médicale et psychologique. Présents dans toute la France.</p>
                            </div>
                        </div>
                        <div class="ip-resource">
                            <div class="ip-resource__ico"><img src="/assets/icons/users.svg" alt=""></div>
                            <div>
                                <p class="ip-resource__name">Joueurs Anonymes</p>
                                <p class="ip-resource__desc">Groupes de parole entre pairs, réunions régulières dans toute la France.</p>
                                <a href="https://www.joueursanonymes.org/" rel="nofollow noreferrer" target="_blank" class="ip-resource__link">joueursanonymes.org</a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- 06 Entourage -->
                <section class="ip-section">
                    <div class="ip-section-head">
                        <span class="ip-section-num" aria-hidden="true">06</span>
                        <div class="ip-section-title-wrap">
                            <span class="ip-section-label">Entourage</span>
                            <h2 class="ip-section-title">Un proche est concerné&nbsp;?</h2>
                        </div>
                    </div>
                    <div class="ip-prose">
                        <p>L'entourage d'un joueur en difficulté a lui aussi besoin de soutien. Joueurs Info Service propose un accompagnement spécifique pour les familles.</p>
                    </div>
                    <h3 style="font-size:0.875rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:var(--dg-ink-subtle);margin:24px 0 14px;">Identifier le problème</h3>
                    <ul class="ip-icolist">
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/eye.svg" alt=""></span>Changements de comportement inhabituels ou inexpliqués</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/eye.svg" alt=""></span>Difficultés financières répétées sans explication claire</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/eye.svg" alt=""></span>Mensonges sur les activités ou les dépenses</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/eye.svg" alt=""></span>Retrait social progressif et tensions familiales</li>
                    </ul>
                    <h3 style="font-size:0.875rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:var(--dg-ink-subtle);margin:28px 0 14px;">Comment aider sans s'épuiser</h3>
                    <ul class="ip-icolist">
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/message-circle.svg" alt=""></span>Engagez une conversation calme, sans jugement ni accusation</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/user-check.svg" alt=""></span>Proposez votre accompagnement pour consulter un professionnel</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/x-circle.svg" alt=""></span>Ne prêtez pas d'argent susceptible de financer le jeu</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/lock.svg" alt=""></span>Protégez vos finances personnelles</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/phone.svg" alt=""></span>Appelez le <strong>09 74 75 13 13</strong> pour être conseillé vous-même</li>
                    </ul>
                    <div class="ip-callout">
                        <span class="ip-callout__label">À retenir</span>
                        <p class="ip-callout__text">Vous n'êtes pas responsable du problème de jeu d'un proche. Votre rôle est d'offrir du soutien tout en prenant soin de vous.</p>
                    </div>
                </section>

                <!-- 07 Mineurs -->
                <section class="ip-section">
                    <div class="ip-section-head">
                        <span class="ip-section-num" aria-hidden="true">07</span>
                        <div class="ip-section-title-wrap">
                            <span class="ip-section-label">Protection des mineurs</span>
                            <h2 class="ip-section-title">Les jeux d'argent sont interdits aux moins de 18 ans</h2>
                        </div>
                    </div>
                    <div class="ip-prose">
                        <p>La législation française interdit formellement l'accès aux jeux d'argent aux personnes de moins de 18 ans, en ligne comme en établissement physique. Les opérateurs ne respectant pas cette obligation s'exposent à des sanctions pénales.</p>
                    </div>
                    <ul class="ip-icolist" style="margin-top:20px;">
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/shield-check.svg" alt=""></span>Vérification d'identité obligatoire à l'inscription</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/shield-check.svg" alt=""></span>Contrôles d'âge renforcés par les opérateurs agréés</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/monitor.svg" alt=""></span>Supervisez l'utilisation d'internet par vos enfants</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/monitor.svg" alt=""></span>Logiciels de contrôle parental pour bloquer l'accès aux sites de jeux</li>
                        <li><span class="ip-icolist__ico"><img src="/assets/icons/credit-card.svg" alt=""></span>Protégez vos moyens de paiement (cartes, portefeuilles électroniques)</li>
                    </ul>
                </section>

                <div class="ip-alert">
                    <p class="ip-alert__title">N'attendez pas pour demander de l'aide</p>
                    <p class="ip-alert__text">Le jeu problématique peut être pris en charge efficacement. Plus tôt vous agissez, plus vite vous retrouverez le contrôle. Appelez le <a href="tel:0974751313">09 74 75 13 13</a> — gratuit, anonyme, 7j/7. <a href="https://www.joueurs-info-service.fr/" rel="nofollow noreferrer" target="_blank">www.joueurs-info-service.fr</a></p>
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