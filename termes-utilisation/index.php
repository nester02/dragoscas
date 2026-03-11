<?php
$pageTitle     = 'Termes d\'utilisation — Novorexas';
$pageDesc      = 'Conditions d\'accès, contenu éditorial, liens affiliés, propriété intellectuelle et publicité Google Ads : les règles d\'utilisation de Novorexas.';
$pageCanonical = 'https://novorexas.com/termes-utilisation/';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= $pageCanonical ?>">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta property="og:url" content="<?= $pageCanonical ?>">
    <meta property="og:type" content="article">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
    <link rel="shortcut icon" href="/assets/favicon/favicon.ico">
    <link rel="preload" href="/assets/fonts/barlow-v12-latin-700.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/assets/fonts/source-sans-3-v15-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/assets/css/index.css" as="style">
    <link rel="stylesheet" href="/assets/css/index.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="/assets/css/inner.css" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="/assets/css/index.css">
        <link rel="stylesheet" href="/assets/css/inner.css">
    </noscript>
    <style>
        .nx-tu-perm {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: var(--sp-4);
            margin-bottom: var(--sp-6);
        }
        .nx-tu-perm__card {
            background: var(--nx-paper);
            border-radius: var(--rad-lg);
            padding: var(--sp-5) var(--sp-6);
        }
        .nx-tu-perm__label {
            display: flex;
            align-items: center;
            gap: var(--sp-2);
            font-family: var(--ff-head);
            font-size: var(--fz-2xs);
            font-weight: var(--fw-bd);
            letter-spacing: 0.8px;
            text-transform: uppercase;
            margin-bottom: var(--sp-3);
        }
        .nx-tu-perm__label--ok { color: var(--nx-leaf); }
        .nx-tu-perm__label--no { color: #C83C3C; }
        .nx-tu-perm__card ul {
            list-style: none;
            display: flex; flex-direction: column; gap: var(--sp-2);
        }
        .nx-tu-perm__card li {
            font-size: var(--fz-xs);
            color: var(--nx-mist);
            line-height: 1.6;
            padding-left: var(--sp-4);
            position: relative;
        }
        .nx-tu-perm__card li::before {
            content: '';
            position: absolute; left: 0; top: 7px;
            width: 5px; height: 5px; border-radius: 50%;
            opacity: 0.4;
        }
        .nx-tu-perm--ok li::before { background: var(--nx-leaf); }
        .nx-tu-perm--no li::before { background: #C83C3C; }

        .nx-tu-nolist {
            display: flex; flex-direction: column; gap: var(--sp-3);
            margin-bottom: var(--sp-6);
        }
        .nx-tu-nolist__item {
            display: flex; align-items: flex-start; gap: var(--sp-4);
            padding: var(--sp-4) 0;
        }
        .nx-tu-nolist__item + .nx-tu-nolist__item {
            border-top: 1px solid rgba(61,138,129,0.10);
        }
        .nx-tu-nolist__ico {
            width: 36px; height: 36px; flex-shrink: 0;
            border-radius: var(--rad-md);
            background: rgba(200,60,60,0.09);
            color: #C83C3C;
            display: flex; align-items: center; justify-content: center;
        }
        .nx-tu-nolist__text { font-size: var(--fz-sm); color: var(--nx-mist); line-height: 1.65; padding-top: 6px; }

        .nx-tu-contact {
            background: var(--nx-bark);
            border-radius: var(--rad-xl);
            padding: var(--sp-8) var(--sp-8);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: var(--sp-8);
            margin-top: var(--sp-8);
        }
        .nx-tu-contact__label {
            font-family: var(--ff-head);
            font-size: var(--fz-2xs);
            font-weight: var(--fw-bd);
            letter-spacing: 1px;
            text-transform: uppercase;
            color: rgba(235,246,158,0.55);
            margin-bottom: var(--sp-2);
        }
        .nx-tu-contact__title {
            font-family: var(--ff-head);
            font-size: var(--fz-h4);
            font-weight: var(--fw-xbd);
            color: #F5FCF3;
            letter-spacing: -0.02em;
            margin-bottom: var(--sp-1);
        }
        .nx-tu-contact__sub { font-size: var(--fz-xs); color: rgba(232,245,233,0.50); }
        .nx-tu-contact__email {
            flex-shrink: 0;
            display: inline-flex; align-items: center; gap: var(--sp-2);
            padding: var(--sp-3) var(--sp-6);
            background: rgba(61,138,129,0.22);
            color: var(--nx-sun);
            font-family: var(--ff-head);
            font-size: var(--fz-sm);
            font-weight: var(--fw-bd);
            border-radius: var(--rad-md);
            text-decoration: none;
            transition: background var(--dur-fast) var(--ease-out), color var(--dur-fast) var(--ease-out);
            white-space: nowrap;
        }
        .nx-tu-contact__email:hover { background: rgba(61,138,129,0.38); color: var(--nx-glow); }

        @media (max-width: 600px) {
            .nx-tu-perm { grid-template-columns: 1fr; }
            .nx-tu-contact { flex-direction: column; }
            .nx-tu-contact__email { width: 100%; justify-content: center; }
        }
    </style>
</head>
<body class="nx-inner">

<?php include '../header.php'; ?>

<main>

    <div class="nx-inner__hero">
        <div class="nx-wrap">
            <div class="nx-inner__hero-meta">
                <span class="nx-inner__hero-tag">Termes d&apos;utilisation</span>
                <span class="nx-inner__hero-date">Derni&egrave;re mise &agrave; jour : 7 mars 2026</span>
                <span class="nx-inner__hero-date">&middot;</span>
                <span class="nx-inner__hero-date">support@novorexas.com</span>
            </div>
            <h1>R&egrave;gles d&apos;acc&egrave;s<br>et responsabilit&eacute;s</h1>
            <p class="nx-inner__hero-sub">En acc&eacute;dant &agrave; Novorexas, vous acceptez les pr&eacute;sentes conditions dans leur int&eacute;gralit&eacute;. Ce site est r&eacute;serv&eacute; aux personnes majeures (18 ans minimum en France).</p>
        </div>
    </div>

    <div class="nx-inner__body">
        <div class="nx-wrap nx-inner__layout">

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico nx-sec__ico--ink">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="10 17 15 12 10 7"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Acc&egrave;s au site</div>
                        <h2>Conditions d&apos;utilisation du service</h2>
                    </div>
                </div>
                <p>L&apos;acc&egrave;s au site est r&eacute;serv&eacute; aux personnes majeures ayant atteint l&apos;&acirc;ge l&eacute;gal de participation aux jeux d&apos;argent dans leur pays de r&eacute;sidence, soit 18 ans minimum en France. Novorexas se r&eacute;serve le droit de modifier, suspendre ou interrompre l&apos;acc&egrave;s au service &agrave; tout moment, sans pr&eacute;avis.</p>
                <div class="nx-inner__note">
                    <svg class="nx-ico nx-ico--sm nx-inner__note-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" x2="12" y1="8" y2="12"/><line x1="12" x2="12.01" y1="16" y2="16"/></svg>
                    <p>Novorexas est un site d&apos;information et de comparaison. Il ne constitue en aucun cas un op&eacute;rateur de jeux d&apos;argent, ne g&egrave;re aucun compte joueur et ne participe pas aux transactions entre l&apos;utilisateur et les op&eacute;rateurs r&eacute;f&eacute;renc&eacute;s.</p>
                </div>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Contenu &eacute;ditorial</div>
                        <h2>Nature et limites de l&apos;information</h2>
                    </div>
                </div>
                <p>Les contenus publi&eacute;s sur Novorexas ont un caract&egrave;re exclusivement informatif. Ils ne constituent ni un conseil professionnel, ni une recommandation personnalis&eacute;e d&apos;investissement ou de participation &agrave; des jeux d&apos;argent.</p>

                <div class="nx-checklist" style="margin-bottom:var(--sp-5)">
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--teal"><svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div>
                        <span class="nx-checklist__text">Des &eacute;valuations ind&eacute;pendantes bas&eacute;es sur une m&eacute;thodologie d&eacute;finie</span>
                    </div>
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--teal"><svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div>
                        <span class="nx-checklist__text">Des informations susceptibles d&apos;&eacute;voluer &mdash; les offres des op&eacute;rateurs changent r&eacute;guli&egrave;rement</span>
                    </div>
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--teal"><svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div>
                        <span class="nx-checklist__text">Des donn&eacute;es v&eacute;rifi&eacute;es au moment de leur publication, sans garantie d&apos;exactitude permanente</span>
                    </div>
                </div>

                <div class="nx-inner__note">
                    <svg class="nx-ico nx-ico--sm nx-inner__note-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><line x1="12" x2="12" y1="9" y2="13"/><line x1="12" x2="12.01" y1="17" y2="17"/></svg>
                    <p><strong>Important&nbsp;:</strong> v&eacute;rifiez syst&eacute;matiquement les conditions en vigueur directement sur le site de l&apos;op&eacute;rateur avant toute inscription ou d&eacute;p&ocirc;t. Novorexas d&eacute;cline toute responsabilit&eacute; en cas d&apos;&eacute;cart entre les informations publi&eacute;es et les conditions r&eacute;elles appliqu&eacute;es.</p>
                </div>

                <p style="margin-top:var(--sp-5)">Nous nous effor&ccedil;ons de maintenir nos contenus &agrave; jour. Toute erreur signal&eacute;e &agrave; <strong>support@novorexas.com</strong> sera v&eacute;rifi&eacute;e et corrig&eacute;e dans les meilleurs d&eacute;lais.</p>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico nx-sec__ico--amber">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Liens affili&eacute;s</div>
                        <h2>Transparence sur notre mod&egrave;le &eacute;conomique</h2>
                    </div>
                </div>
                <p>Certains liens pr&eacute;sents sur Novorexas sont des liens affili&eacute;s. En cliquant sur ces liens et en vous inscrivant aupr&egrave;s d&apos;un op&eacute;rateur, Novorexas peut percevoir une commission commerciale.</p>

                <div class="nx-checklist" style="margin-bottom:var(--sp-5)">
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--teal"><svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div>
                        <span class="nx-checklist__text">Cette r&eacute;mun&eacute;ration <strong>n&apos;influence pas</strong> nos classements ni le contenu de nos &eacute;valuations</span>
                    </div>
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--teal"><svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div>
                        <span class="nx-checklist__text">Les op&eacute;rateurs ne peuvent pas acheter de position dans nos comparatifs</span>
                    </div>
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--teal"><svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div>
                        <span class="nx-checklist__text">Tous les liens affili&eacute;s sont dirig&eacute;s vers des op&eacute;rateurs agr&eacute;&eacute;s par l&apos;ANJ uniquement</span>
                    </div>
                </div>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico nx-sec__ico--ink">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Propri&eacute;t&eacute; intellectuelle</div>
                        <h2>Droits sur les contenus du site</h2>
                    </div>
                </div>
                <p>L&apos;ensemble des contenus pr&eacute;sents sur Novorexas &mdash; textes, &eacute;valuations, m&eacute;thodologie, design, structure &eacute;ditoriale, logos &mdash; est prot&eacute;g&eacute; par le droit de la propri&eacute;t&eacute; intellectuelle.</p>

                <div class="nx-tu-perm">
                    <div class="nx-tu-perm__card nx-tu-perm--ok">
                        <div class="nx-tu-perm__label nx-tu-perm__label--ok">
                            <svg class="nx-ico" style="width:14px;height:14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                            Autoris&eacute;
                        </div>
                        <ul>
                            <li>Partage d&apos;un lien vers une page du site</li>
                            <li>Citation courte avec attribution explicite &agrave; Novorexas</li>
                        </ul>
                    </div>
                    <div class="nx-tu-perm__card nx-tu-perm--no">
                        <div class="nx-tu-perm__label nx-tu-perm__label--no">
                            <svg class="nx-ico" style="width:14px;height:14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" x2="6" y1="6" y2="18"/><line x1="6" x2="18" y1="6" y2="18"/></svg>
                            Interdit
                        </div>
                        <ul>
                            <li>Reproduction totale ou partielle du contenu</li>
                            <li>Scraping ou copie de classements sans autorisation &eacute;crite</li>
                        </ul>
                    </div>
                </div>

                <div class="nx-inner__note">
                    <svg class="nx-ico nx-ico--sm nx-inner__note-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                    <p>Pour toute demande de partenariat &eacute;ditorial ou de reproduction de contenu, contactez-nous &agrave; <strong>support@novorexas.com</strong>.</p>
                </div>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico nx-sec__ico--amber">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="m8 21 4-4 4 4"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Publicit&eacute;</div>
                        <h2>Annonces et contenus sponsoris&eacute;s</h2>
                    </div>
                </div>
                <p>Novorexas peut afficher des annonces publicitaires via des r&eacute;seaux tiers, dont Google Ads. Ces annonces sont clairement distinctes du contenu &eacute;ditorial.</p>

                <div class="nx-checklist" style="margin-bottom:var(--sp-5)">
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--teal"><svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div>
                        <span class="nx-checklist__text">Les annonces sont s&eacute;lectionn&eacute;es automatiquement par les r&eacute;seaux publicitaires en fonction de votre profil de navigation</span>
                    </div>
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--teal"><svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div>
                        <span class="nx-checklist__text">Novorexas ne contr&ocirc;le pas le contenu individuel des annonces affich&eacute;es par ces r&eacute;seaux</span>
                    </div>
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--teal"><svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div>
                        <span class="nx-checklist__text">Aucun op&eacute;rateur ne peut payer pour appara&icirc;tre dans notre contenu &eacute;ditorial</span>
                    </div>
                </div>

                <div class="nx-inner__note">
                    <svg class="nx-ico nx-ico--sm nx-inner__note-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" x2="12" y1="8" y2="12"/><line x1="12" x2="12.01" y1="16" y2="16"/></svg>
                    <p>G&eacute;rez vos pr&eacute;f&eacute;rences publicitaires Google via <a href="https://adssettings.google.com" rel="nofollow noopener" target="_blank" style="color:var(--nx-core)">adssettings.google.com</a> ou d&eacute;sactivez la personnalisation depuis votre compte Google.</p>
                </div>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><line x1="12" x2="12" y1="9" y2="13"/><line x1="12" x2="12.01" y1="17" y2="17"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Responsabilit&eacute;</div>
                        <h2>Limites de notre responsabilit&eacute;</h2>
                    </div>
                </div>
                <p>Novorexas s&apos;efforce de fournir des informations exactes et &agrave; jour. Toutefois, notre responsabilit&eacute; est limit&eacute;e dans les cas suivants.</p>

                <div class="nx-tu-nolist">
                    <div class="nx-tu-nolist__item">
                        <div class="nx-tu-nolist__ico">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" x2="6" y1="6" y2="18"/><line x1="6" x2="18" y1="6" y2="18"/></svg>
                        </div>
                        <span class="nx-tu-nolist__text">Les d&eacute;cisions de jeu prises par les utilisateurs sur la base des informations publi&eacute;es</span>
                    </div>
                    <div class="nx-tu-nolist__item">
                        <div class="nx-tu-nolist__ico">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" x2="6" y1="6" y2="18"/><line x1="6" x2="18" y1="6" y2="18"/></svg>
                        </div>
                        <span class="nx-tu-nolist__text">Les pertes financi&egrave;res r&eacute;sultant d&apos;une participation aux jeux d&apos;argent</span>
                    </div>
                    <div class="nx-tu-nolist__item">
                        <div class="nx-tu-nolist__ico">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" x2="6" y1="6" y2="18"/><line x1="6" x2="18" y1="6" y2="18"/></svg>
                        </div>
                        <span class="nx-tu-nolist__text">L&apos;exactitude des informations publi&eacute;es sur les sites des op&eacute;rateurs tiers</span>
                    </div>
                    <div class="nx-tu-nolist__item">
                        <div class="nx-tu-nolist__ico">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" x2="6" y1="6" y2="18"/><line x1="6" x2="18" y1="6" y2="18"/></svg>
                        </div>
                        <span class="nx-tu-nolist__text">Les interruptions temporaires d&apos;acc&egrave;s dues &agrave; des op&eacute;rations de maintenance</span>
                    </div>
                    <div class="nx-tu-nolist__item">
                        <div class="nx-tu-nolist__ico">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" x2="6" y1="6" y2="18"/><line x1="6" x2="18" y1="6" y2="18"/></svg>
                        </div>
                        <span class="nx-tu-nolist__text">Les contenus des sites tiers accessibles via des liens externes</span>
                    </div>
                </div>

                <div class="nx-inner__note">
                    <svg class="nx-ico nx-ico--sm nx-inner__note-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/><path d="m9 12 2 2 4-4"/></svg>
                    <p><strong>Jeu responsable&nbsp;:</strong> les jeux d&apos;argent comportent des risques de d&eacute;pendance. Consultez notre page <a href="/securite-du-jeu/" style="color:var(--nx-core)">S&eacute;curit&eacute; du jeu</a> ou appelez le <strong>09 74 75 13 13</strong> si vous ressentez des difficult&eacute;s.</p>
                </div>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico nx-sec__ico--ink">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m18 16 4-4-4-4"/><path d="m6 8-4 4 4 4"/><line x1="14.5" x2="9.5" y1="4" y2="20"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Droit applicable</div>
                        <h2>Cadre juridique et litiges</h2>
                    </div>
                </div>
                <p>Les pr&eacute;sentes conditions d&apos;utilisation sont r&eacute;gies par le droit fran&ccedil;ais. Tout litige relatif &agrave; leur interpr&eacute;tation ou &agrave; leur ex&eacute;cution sera soumis aux tribunaux comp&eacute;tents du ressort de Paris, sauf disposition l&eacute;gale contraire.</p>
                <p>Novorexas se r&eacute;serve le droit de modifier les pr&eacute;sentes conditions &agrave; tout moment. La version en vigueur est celle publi&eacute;e sur cette page, avec la date de mise &agrave; jour indiqu&eacute;e en haut. L&apos;utilisation continue du site apr&egrave;s modification vaut acceptation des nouvelles conditions.</p>
            </div>

            <div class="nx-tu-contact">
                <div>
                    <div class="nx-tu-contact__label">Une question&nbsp;?</div>
                    <div class="nx-tu-contact__title">Contactez la r&eacute;daction</div>
                    <div class="nx-tu-contact__sub">Lun&ndash;Ven, 9h30&ndash;17h00 (Paris) &middot; R&eacute;ponse sous 24&ndash;48h ouvr&eacute;es</div>
                </div>
                <a href="mailto:support@novorexas.com" class="nx-tu-contact__email">
                    <svg class="nx-ico nx-ico--xs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                    support@novorexas.com
                </a>
            </div>

        </div>
    </div>

</main>

<?php include '../footer.php'; ?>

<script src="/assets/js/age-gate.js" async></script>
<script src="/assets/js/cookie-banner.js" defer></script>
<script src="/assets/js/index.js" defer></script>
</body>
</html>