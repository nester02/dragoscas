<?php
$pageTitle     = 'Protection des données & RGPD — Novorexas';
$pageDesc      = 'Politique de confidentialité de Novorexas : données collectées, bases légales RGPD, durées de conservation, vos droits et gestion des cookies Google Ads.';
$pageCanonical = 'https://novorexas.com/protection-donnees/';
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
        .nx-pd-table { width: 100%; border-collapse: collapse; margin-bottom: var(--sp-6); }
        .nx-pd-table th {
            text-align: left;
            font-family: var(--ff-head);
            font-size: var(--fz-2xs);
            font-weight: var(--fw-bd);
            letter-spacing: 0.8px;
            text-transform: uppercase;
            color: var(--nx-mist);
            padding: var(--sp-3) var(--sp-4);
            border-bottom: 2px solid rgba(61,138,129,0.18);
        }
        .nx-pd-table td {
            font-size: var(--fz-sm);
            color: var(--nx-mist);
            padding: var(--sp-4);
            border-bottom: 1px solid rgba(61,138,129,0.10);
            vertical-align: top;
            line-height: 1.6;
        }
        .nx-pd-table tr:last-child td { border-bottom: none; }
        .nx-pd-table td:first-child { font-weight: var(--fw-bd); color: var(--nx-ink); white-space: nowrap; }

        .nx-rights-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: var(--sp-4);
            margin-bottom: var(--sp-6);
        }
        .nx-right-card {
            background: var(--nx-paper);
            border-radius: var(--rad-lg);
            padding: var(--sp-5);
        }
        .nx-right-card__ico {
            width: 36px; height: 36px;
            border-radius: var(--rad-md);
            background: rgba(61,138,129,0.10);
            color: var(--nx-core);
            display: flex; align-items: center; justify-content: center;
            margin-bottom: var(--sp-3);
        }
        .nx-right-card__name {
            font-family: var(--ff-head);
            font-size: var(--fz-xs);
            font-weight: var(--fw-bd);
            color: var(--nx-ink);
            margin-bottom: var(--sp-2);
        }
        .nx-right-card__desc {
            font-size: var(--fz-xs);
            color: var(--nx-mist);
            line-height: 1.6;
        }

        .nx-legal-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: var(--sp-4);
            margin-bottom: var(--sp-6);
        }
        .nx-legal-card {
            background: var(--nx-paper);
            border-radius: var(--rad-lg);
            padding: var(--sp-5) var(--sp-5);
        }
        .nx-legal-card__label {
            font-family: var(--ff-head);
            font-size: var(--fz-2xs);
            font-weight: var(--fw-bd);
            letter-spacing: 0.8px;
            text-transform: uppercase;
            color: var(--nx-core);
            margin-bottom: var(--sp-3);
        }
        .nx-legal-card ul {
            list-style: none;
            display: flex; flex-direction: column; gap: var(--sp-2);
        }
        .nx-legal-card li {
            font-size: var(--fz-xs);
            color: var(--nx-mist);
            line-height: 1.55;
            padding-left: var(--sp-4);
            position: relative;
        }
        .nx-legal-card li::before {
            content: '';
            position: absolute; left: 0; top: 7px;
            width: 5px; height: 5px;
            border-radius: 50%;
            background: var(--nx-core);
            opacity: 0.35;
        }

        .nx-cookie-row {
            display: grid;
            grid-template-columns: 200px 1fr;
            gap: var(--sp-4) var(--sp-6);
            align-items: start;
            padding: var(--sp-4) 0;
        }
        .nx-cookie-row + .nx-cookie-row { border-top: 1px solid rgba(61,138,129,0.10); }
        .nx-cookie-row__name {
            font-family: var(--ff-head);
            font-size: var(--fz-xs);
            font-weight: var(--fw-bd);
            color: var(--nx-ink);
            line-height: 1.4;
        }
        .nx-cookie-row__tag {
            display: inline-block;
            font-size: 0.625rem;
            font-weight: var(--fw-bd);
            letter-spacing: 0.7px;
            text-transform: uppercase;
            padding: 2px 7px;
            border-radius: 99px;
            margin-top: 4px;
        }
        .nx-cookie-row__tag--ess { background: rgba(109,173,103,0.15); color: var(--nx-leaf); }
        .nx-cookie-row__tag--stats { background: rgba(61,138,129,0.12); color: var(--nx-core); }
        .nx-cookie-row__tag--ads { background: rgba(212,137,58,0.12); color: var(--nx-amber); }
        .nx-cookie-row__desc { font-size: var(--fz-xs); color: var(--nx-mist); line-height: 1.6; }

        .nx-cnil-block {
            background: var(--nx-paper);
            border-radius: var(--rad-lg);
            padding: var(--sp-6);
            display: flex;
            align-items: flex-start;
            gap: var(--sp-5);
            margin-top: var(--sp-6);
        }
        .nx-cnil-block__ico {
            width: 44px; height: 44px;
            border-radius: var(--rad-md);
            background: rgba(61,138,129,0.10);
            color: var(--nx-core);
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
        }
        .nx-cnil-block__title {
            font-family: var(--ff-head);
            font-size: var(--fz-sm);
            font-weight: var(--fw-bd);
            color: var(--nx-ink);
            margin-bottom: var(--sp-2);
        }
        .nx-cnil-block p { font-size: var(--fz-xs); color: var(--nx-mist); line-height: 1.65; margin: 0; }
        .nx-cnil-block a { color: var(--nx-core); text-decoration: none; }
        .nx-cnil-block a:hover { color: var(--nx-ink); }

        @media (max-width: 768px) {
            .nx-rights-grid { grid-template-columns: 1fr 1fr; }
            .nx-legal-grid { grid-template-columns: 1fr; }
            .nx-cookie-row { grid-template-columns: 1fr; gap: var(--sp-2); }
            .nx-pd-table { font-size: var(--fz-xs); }
            .nx-pd-table td:first-child { white-space: normal; }
        }
        @media (max-width: 480px) {
            .nx-rights-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body class="nx-inner">

<?php include '../header.php'; ?>

<main>

    <div class="nx-inner__hero">
        <div class="nx-wrap">
            <div class="nx-inner__hero-meta">
                <span class="nx-inner__hero-tag">Protection des donn&eacute;es</span>
                <span class="nx-inner__hero-date">Derni&egrave;re mise &agrave; jour : 7 mars 2026</span>
                <span class="nx-inner__hero-date">&middot;</span>
                <span class="nx-inner__hero-date">support@novorexas.com</span>
            </div>
            <h1>Vos donn&eacute;es,<br>nos engagements</h1>
            <p class="nx-inner__hero-sub">Cette page d&eacute;taille la mani&egrave;re dont Novorexas collecte, utilise et prot&egrave;ge vos donn&eacute;es personnelles, conform&eacute;ment au R&egrave;glement G&eacute;n&eacute;ral sur la Protection des Donn&eacute;es (RGPD).</p>
        </div>
    </div>

    <div class="nx-inner__body">
        <div class="nx-wrap nx-inner__layout">

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico nx-sec__ico--ink">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Responsable du traitement</div>
                        <h2>Qui traite vos donn&eacute;es</h2>
                    </div>
                </div>
                <p>Le responsable du traitement des donn&eacute;es personnelles collect&eacute;es sur Novorexas est l&apos;entit&eacute; exploitant le site novorexas.com.</p>
                <div class="nx-inner__note">
                    <svg class="nx-ico nx-ico--sm nx-inner__note-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                    <p>Pour toute question relative &agrave; la protection de vos donn&eacute;es ou &agrave; l&apos;exercice de vos droits, &eacute;crivez-nous &agrave; <strong>support@novorexas.com</strong>. Nous r&eacute;pondons dans un d&eacute;lai maximum d&apos;un mois.</p>
                </div>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5v14c0 1.66 4.03 3 9 3s9-1.34 9-3V5"/><path d="M3 12c0 1.66 4.03 3 9 3s9-1.34 9-3"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Donn&eacute;es collect&eacute;es</div>
                        <h2>Ce que nous collectons et pourquoi</h2>
                    </div>
                </div>
                <p>Nous collectons uniquement les donn&eacute;es strictement n&eacute;cessaires au fonctionnement du site et &agrave; la fourniture de nos services d&apos;information comparatif.</p>

                <table class="nx-pd-table">
                    <thead>
                    <tr>
                        <th>Type</th>
                        <th>D&eacute;tail</th>
                        <th>Finalit&eacute;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Contact</td>
                        <td>Email, nom (formulaire de contact)</td>
                        <td>R&eacute;pondre &agrave; vos demandes</td>
                    </tr>
                    <tr>
                        <td>Techniques</td>
                        <td>Adresse IP, navigateur, syst&egrave;me d&apos;exploitation</td>
                        <td>S&eacute;curit&eacute;, pr&eacute;vention des fraudes</td>
                    </tr>
                    <tr>
                        <td>Navigation</td>
                        <td>Pages visit&eacute;es, dur&eacute;e, source de trafic</td>
                        <td>Statistiques anonymis&eacute;es</td>
                    </tr>
                    <tr>
                        <td>Cookies</td>
                        <td>Cookies techniques et de mesure d&apos;audience</td>
                        <td>Fonctionnement du site et analytics</td>
                    </tr>
                    </tbody>
                </table>

                <div class="nx-inner__note">
                    <svg class="nx-ico nx-ico--sm nx-inner__note-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" x2="12" y1="8" y2="12"/><line x1="12" x2="12.01" y1="16" y2="16"/></svg>
                    <p><strong>Ce que nous ne collectons pas&nbsp;:</strong> aucune donn&eacute;e sensible &mdash; origine ethnique, opinions politiques, convictions religieuses, donn&eacute;es de sant&eacute;, orientation sexuelle ou donn&eacute;es biom&eacute;triques.</p>
                </div>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico nx-sec__ico--leaf">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/><path d="m9 12 2 2 4-4"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Bases l&eacute;gales</div>
                        <h2>Sur quoi repose chaque traitement</h2>
                    </div>
                </div>
                <p>Chaque traitement de donn&eacute;es repose sur un fondement l&eacute;gal explicite conform&eacute;ment au RGPD.</p>

                <div class="nx-legal-grid">
                    <div class="nx-legal-card">
                        <div class="nx-legal-card__label">Consentement</div>
                        <ul>
                            <li>R&eacute;ponse &agrave; vos demandes via le formulaire de contact</li>
                            <li>Utilisation de cookies non essentiels (mesure d&apos;audience, publicit&eacute;)</li>
                        </ul>
                    </div>
                    <div class="nx-legal-card">
                        <div class="nx-legal-card__label">Int&eacute;r&ecirc;t l&eacute;gitime</div>
                        <ul>
                            <li>S&eacute;curit&eacute; du site et pr&eacute;vention des activit&eacute;s frauduleuses</li>
                            <li>Am&eacute;lioration de la performance et de l&apos;exp&eacute;rience utilisateur</li>
                            <li>Analyse statistique anonymis&eacute;e de la fr&eacute;quentation</li>
                        </ul>
                    </div>
                    <div class="nx-legal-card">
                        <div class="nx-legal-card__label">Obligation l&eacute;gale</div>
                        <ul>
                            <li>Conservation des journaux de connexion (s&eacute;curit&eacute; informatique)</li>
                            <li>Respect des obligations l&eacute;gales et r&eacute;glementaires applicables</li>
                        </ul>
                    </div>
                </div>

                <div class="nx-inner__note">
                    <svg class="nx-ico nx-ico--sm nx-inner__note-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="m8 21 4-4 4 4"/></svg>
                    <p><strong>Publicit&eacute;&nbsp;:</strong> ce site peut afficher des annonces via Google Ads. Google peut utiliser des cookies pour personnaliser les publicit&eacute;s affich&eacute;es. Vous pouvez g&eacute;rer vos pr&eacute;f&eacute;rences via <a href="https://adssettings.google.com" rel="nofollow noopener" target="_blank">adssettings.google.com</a>.</p>
                </div>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Conservation</div>
                        <h2>Combien de temps vos donn&eacute;es sont conserv&eacute;es</h2>
                    </div>
                </div>
                <p>Vos donn&eacute;es sont conserv&eacute;es pendant des dur&eacute;es limit&eacute;es, adapt&eacute;es &agrave; chaque finalit&eacute;. &Agrave; l&apos;issue de ces d&eacute;lais, elles sont supprim&eacute;es ou anonymis&eacute;es de mani&egrave;re irr&eacute;versible.</p>

                <table class="nx-pd-table">
                    <thead>
                    <tr>
                        <th>Type de donn&eacute;es</th>
                        <th>Dur&eacute;e de conservation</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Demandes de contact</td>
                        <td>12 mois maximum apr&egrave;s traitement</td>
                    </tr>
                    <tr>
                        <td>Journaux de connexion</td>
                        <td>6 mois (obligation l&eacute;gale)</td>
                    </tr>
                    <tr>
                        <td>Cookies techniques</td>
                        <td>13 mois maximum</td>
                    </tr>
                    <tr>
                        <td>Statistiques anonymis&eacute;es</td>
                        <td>Dur&eacute;e illimit&eacute;e (donn&eacute;es non personnelles)</td>
                    </tr>
                    </tbody>
                </table>

                <div class="nx-inner__note">
                    <svg class="nx-ico nx-ico--sm nx-inner__note-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" x2="12" y1="8" y2="12"/><line x1="12" x2="12.01" y1="16" y2="16"/></svg>
                    <p>Vos donn&eacute;es ne sont jamais vendues, lou&eacute;es ou transmises &agrave; des tiers &agrave; des fins commerciales ou marketing.</p>
                </div>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico nx-sec__ico--amber">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="18" height="11" x="3" y="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Vos droits</div>
                        <h2>Ce que le RGPD vous garantit</h2>
                    </div>
                </div>
                <p>Conform&eacute;ment au RGPD et &agrave; la loi Informatique et Libert&eacute;s, vous disposez des droits suivants sur vos donn&eacute;es personnelles.</p>

                <div class="nx-rights-grid">
                    <div class="nx-right-card">
                        <div class="nx-right-card__ico">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" x2="16.65" y1="21" y2="16.65"/></svg>
                        </div>
                        <div class="nx-right-card__name">Droit d&apos;acc&egrave;s</div>
                        <div class="nx-right-card__desc">Obtenir confirmation que vos donn&eacute;es sont trait&eacute;es et en obtenir une copie.</div>
                    </div>
                    <div class="nx-right-card">
                        <div class="nx-right-card__ico">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                        </div>
                        <div class="nx-right-card__name">Droit de rectification</div>
                        <div class="nx-right-card__desc">Corriger ou compl&eacute;ter des donn&eacute;es inexactes ou incompl&egrave;tes vous concernant.</div>
                    </div>
                    <div class="nx-right-card">
                        <div class="nx-right-card__ico">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2"/></svg>
                        </div>
                        <div class="nx-right-card__name">Droit &agrave; l&apos;effacement</div>
                        <div class="nx-right-card__desc">Demander la suppression de vos donn&eacute;es personnelles (droit &agrave; l&apos;oubli).</div>
                    </div>
                    <div class="nx-right-card">
                        <div class="nx-right-card__ico">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" x2="6" y1="6" y2="18"/><line x1="6" x2="18" y1="6" y2="18"/></svg>
                        </div>
                        <div class="nx-right-card__name">Droit d&apos;opposition</div>
                        <div class="nx-right-card__desc">Vous opposer au traitement de vos donn&eacute;es pour des motifs l&eacute;gitimes.</div>
                    </div>
                    <div class="nx-right-card">
                        <div class="nx-right-card__ico">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="18" height="11" x="3" y="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 9.9-1"/></svg>
                        </div>
                        <div class="nx-right-card__name">Droit &agrave; la limitation</div>
                        <div class="nx-right-card__desc">Demander la suspension temporaire du traitement dans certaines situations.</div>
                    </div>
                    <div class="nx-right-card">
                        <div class="nx-right-card__ico">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="8 17 12 21 16 17"/><line x1="12" x2="12" y1="12" y2="21"/><path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"/></svg>
                        </div>
                        <div class="nx-right-card__name">Droit &agrave; la portabilit&eacute;</div>
                        <div class="nx-right-card__desc">Recevoir vos donn&eacute;es dans un format structur&eacute; et les transmettre &agrave; un tiers.</div>
                    </div>
                </div>

                <div class="nx-inner__note">
                    <svg class="nx-ico nx-ico--sm nx-inner__note-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                    <p>Pour exercer vos droits&nbsp;: <strong>support@novorexas.com</strong>. Merci de joindre une copie de votre pi&egrave;ce d&apos;identit&eacute;. R&eacute;ponse sous un mois maximum.</p>
                </div>

                <div class="nx-cnil-block">
                    <div class="nx-cnil-block__ico">
                        <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </div>
                    <div>
                        <div class="nx-cnil-block__title">R&eacute;clamation aupr&egrave;s de la CNIL</div>
                        <p>Si vous estimez que vos droits ne sont pas respect&eacute;s, vous pouvez saisir la Commission Nationale de l&apos;Informatique et des Libert&eacute;s.<br>3 Place de Fontenoy &mdash; TSA 80715, 75334 Paris Cedex 07 &mdash; T&eacute;l. 01 53 73 22 22 &mdash; <a href="https://www.cnil.fr" rel="nofollow noopener" target="_blank">www.cnil.fr</a></p>
                    </div>
                </div>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico nx-sec__ico--ink">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">S&eacute;curit&eacute;</div>
                        <h2>Comment nous prot&eacute;geons vos donn&eacute;es</h2>
                    </div>
                </div>

                <div class="nx-rules-grid">
                    <div class="nx-rules-col">
                        <h3>Mesures techniques</h3>
                        <div class="nx-checklist">
                            <div class="nx-checklist__item">
                                <div class="nx-checklist__dot nx-checklist__dot--teal"><svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div>
                                <span class="nx-checklist__text">Chiffrement des communications via HTTPS/SSL</span>
                            </div>
                            <div class="nx-checklist__item">
                                <div class="nx-checklist__dot nx-checklist__dot--teal"><svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div>
                                <span class="nx-checklist__text">H&eacute;bergement s&eacute;curis&eacute; avec sauvegardes r&eacute;guli&egrave;res</span>
                            </div>
                            <div class="nx-checklist__item">
                                <div class="nx-checklist__dot nx-checklist__dot--teal"><svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div>
                                <span class="nx-checklist__text">Pare-feu et syst&egrave;mes de d&eacute;tection d&apos;intrusion</span>
                            </div>
                            <div class="nx-checklist__item">
                                <div class="nx-checklist__dot nx-checklist__dot--teal"><svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div>
                                <span class="nx-checklist__text">Mises &agrave; jour r&eacute;guli&egrave;res des syst&egrave;mes et logiciels</span>
                            </div>
                        </div>
                    </div>
                    <div class="nx-rules-col">
                        <h3>Mesures organisationnelles</h3>
                        <div class="nx-checklist">
                            <div class="nx-checklist__item">
                                <div class="nx-checklist__dot nx-checklist__dot--teal"><svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div>
                                <span class="nx-checklist__text">Acc&egrave;s limit&eacute; aux seules personnes autoris&eacute;es, sous obligation de confidentialit&eacute;</span>
                            </div>
                            <div class="nx-checklist__item">
                                <div class="nx-checklist__dot nx-checklist__dot--teal"><svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div>
                                <span class="nx-checklist__text">Politique de gestion des mots de passe robuste</span>
                            </div>
                            <div class="nx-checklist__item">
                                <div class="nx-checklist__dot nx-checklist__dot--teal"><svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div>
                                <span class="nx-checklist__text">Proc&eacute;dures de notification en cas de violation de donn&eacute;es</span>
                            </div>
                        </div>
                    </div>
                </div>
                <p style="margin-top:var(--sp-4)">Vos donn&eacute;es sont h&eacute;berg&eacute;es et trait&eacute;es au sein de l&apos;Union Europ&eacute;enne. Tout transfert hors UE serait encadr&eacute; par des garanties conformes au RGPD (clauses contractuelles types approuv&eacute;es par la Commission Europ&eacute;enne).</p>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico nx-sec__ico--amber">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="13" r="8"/><path d="M12 9v4"/><path d="m9.17 15.83 1.88-1.88"/><path d="M22 2 11 13"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Cookies</div>
                        <h2>Cookies et technologies similaires</h2>
                    </div>
                </div>
                <p>Le site utilise des cookies pour assurer son fonctionnement, mesurer l&apos;audience et, le cas &eacute;ch&eacute;ant, afficher des publicit&eacute;s via Google Ads.</p>

                <div style="margin-bottom: var(--sp-4);">
                    <div class="nx-cookie-row">
                        <div>
                            <div class="nx-cookie-row__name">Cookies essentiels</div>
                            <span class="nx-cookie-row__tag nx-cookie-row__tag--ess">Toujours actifs</span>
                        </div>
                        <div class="nx-cookie-row__desc">M&eacute;morisation de votre consentement (bandeau cookies), v&eacute;rification de l&apos;&acirc;ge, maintien de votre session de navigation.</div>
                    </div>
                    <div class="nx-cookie-row">
                        <div>
                            <div class="nx-cookie-row__name">Cookies de mesure d&apos;audience</div>
                            <span class="nx-cookie-row__tag nx-cookie-row__tag--stats">Sur consentement</span>
                        </div>
                        <div class="nx-cookie-row__desc">Analyse statistique anonymis&eacute;e du trafic, identification des pages les plus consult&eacute;es.</div>
                    </div>
                    <div class="nx-cookie-row">
                        <div>
                            <div class="nx-cookie-row__name">Cookies publicitaires (Google Ads)</div>
                            <span class="nx-cookie-row__tag nx-cookie-row__tag--ads">Sur consentement</span>
                        </div>
                        <div class="nx-cookie-row__desc">Personnalisation des annonces affich&eacute;es, mesure des performances publicitaires. G&eacute;rez vos pr&eacute;f&eacute;rences via <a href="https://adssettings.google.com" rel="nofollow noopener" target="_blank" style="color:var(--nx-core)">adssettings.google.com</a>.</div>
                    </div>
                </div>

                <div class="nx-inner__note">
                    <svg class="nx-ico nx-ico--sm nx-inner__note-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" x2="12" y1="8" y2="12"/><line x1="12" x2="12.01" y1="16" y2="16"/></svg>
                    <p>Vous pouvez &agrave; tout moment modifier vos pr&eacute;f&eacute;rences via le bandeau pr&eacute;sent sur le site ou d&eacute;sactiver les cookies dans les param&egrave;tres de votre navigateur. Cette politique est susceptible d&apos;&ecirc;tre modifi&eacute;e pour refl&eacute;ter les &eacute;volutions l&eacute;gales.</p>
                </div>
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