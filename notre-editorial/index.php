<?php
$pageTitle     = 'Notre éditorial — Qui sommes-nous & Méthodologie — Novorexas';
$pageDesc      = 'Découvrez qui est Novorexas, notre méthodologie de notation des bookmakers ANJ, notre modèle de transparence et l\'équipe derrière nos comparatifs.';
$pageCanonical = 'https://novorexas.com/notre-editorial/';
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
        .nx-crit-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: var(--sp-4);
            margin-bottom: var(--sp-5);
        }
        .nx-crit-card {
            background: var(--nx-paper);
            border-radius: var(--rad-lg);
            padding: var(--sp-5);
        }
        .nx-crit-card__num {
            font-family: var(--ff-head);
            font-size: var(--fz-h3);
            font-weight: var(--fw-xbd);
            color: var(--nx-core);
            opacity: 0.22;
            line-height: 1;
            margin-bottom: var(--sp-2);
            letter-spacing: -0.03em;
        }
        .nx-crit-card__name {
            font-family: var(--ff-head);
            font-size: var(--fz-sm);
            font-weight: var(--fw-bd);
            color: var(--nx-ink);
            margin-bottom: var(--sp-2);
        }
        .nx-crit-card__desc {
            font-size: var(--fz-xs);
            color: var(--nx-mist);
            line-height: 1.6;
        }

        .nx-score-bar {
            display: flex;
            align-items: center;
            gap: var(--sp-4);
            padding: var(--sp-3) 0;
            border-bottom: 1px solid rgba(61,138,129,0.10);
        }
        .nx-score-bar:last-child { border-bottom: none; }
        .nx-score-bar__label {
            font-size: var(--fz-xs);
            font-weight: var(--fw-bd);
            color: var(--nx-ink);
            width: 180px;
            flex-shrink: 0;
        }
        .nx-score-bar__track {
            flex: 1;
            height: 6px;
            background: rgba(61,138,129,0.12);
            border-radius: 99px;
            overflow: hidden;
        }
        .nx-score-bar__fill {
            height: 100%;
            border-radius: 99px;
            background: linear-gradient(90deg, var(--nx-core), var(--nx-leaf));
        }
        .nx-score-bar__pct {
            font-size: var(--fz-2xs);
            font-weight: var(--fw-bd);
            color: var(--nx-mist);
            width: 36px;
            text-align: right;
            flex-shrink: 0;
        }

        .nx-author-card {
            background: var(--nx-paper);
            border-radius: var(--rad-xl);
            padding: var(--sp-7) var(--sp-8);
            display: flex;
            align-items: center;
            gap: var(--sp-6);
        }
        .nx-author-card__avatar {
            width: 72px; height: 72px; flex-shrink: 0;
            border-radius: var(--rad-pill);
            background: rgba(61,138,129,0.12);
            color: var(--nx-core);
            display: flex; align-items: center; justify-content: center;
        }
        .nx-author-card__initials {
            font-family: var(--ff-head);
            font-size: var(--fz-h4);
            font-weight: var(--fw-xbd);
            color: var(--nx-core);
        }
        .nx-author-card__name {
            font-family: var(--ff-head);
            font-size: var(--fz-lg);
            font-weight: var(--fw-xbd);
            color: var(--nx-ink);
            margin-bottom: var(--sp-1);
        }
        .nx-author-card__role {
            font-size: var(--fz-sm);
            color: var(--nx-mist);
            margin-bottom: var(--sp-3);
        }
        .nx-author-card__email {
            display: inline-flex; align-items: center; gap: var(--sp-2);
            font-size: var(--fz-xs);
            color: var(--nx-core);
            text-decoration: none;
            font-weight: var(--fw-bd);
        }
        .nx-author-card__email:hover { color: var(--nx-ink); }

        .nx-transp-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: var(--sp-4);
            margin-bottom: var(--sp-6);
        }
        .nx-transp-card {
            background: var(--nx-paper);
            border-radius: var(--rad-lg);
            padding: var(--sp-5) var(--sp-6);
        }
        .nx-transp-card__ico {
            width: 40px; height: 40px;
            border-radius: var(--rad-md);
            display: flex; align-items: center; justify-content: center;
            margin-bottom: var(--sp-3);
        }
        .nx-transp-card__ico--green { background: rgba(109,173,103,0.12); color: var(--nx-leaf); }
        .nx-transp-card__ico--red   { background: rgba(200,60,60,0.09);   color: #C83C3C; }
        .nx-transp-card__title {
            font-family: var(--ff-head);
            font-size: var(--fz-sm);
            font-weight: var(--fw-bd);
            color: var(--nx-ink);
            margin-bottom: var(--sp-2);
        }
        .nx-transp-card__text {
            font-size: var(--fz-xs);
            color: var(--nx-mist);
            line-height: 1.65;
        }

        @media (max-width: 768px) {
            .nx-crit-grid { grid-template-columns: 1fr 1fr; }
            .nx-transp-grid { grid-template-columns: 1fr; }
            .nx-score-bar__label { width: 130px; }
            .nx-author-card { flex-direction: column; text-align: center; }
        }
        @media (max-width: 480px) {
            .nx-crit-grid { grid-template-columns: 1fr; }
            .nx-author-card__email { justify-content: center; }
        }
    </style>
</head>
<body class="nx-inner">

<?php include '../header.php'; ?>

<main>

    <div class="nx-inner__hero">
        <div class="nx-wrap">
            <div class="nx-inner__hero-meta">
                <span class="nx-inner__hero-tag">Notre &eacute;ditorial</span>
                <span class="nx-inner__hero-date">Derni&egrave;re mise &agrave; jour : 7 mars 2026</span>
                <span class="nx-inner__hero-date">&middot;</span>
                <span class="nx-inner__hero-date">support@novorexas.com</span>
            </div>
            <h1>Ce que nous faisons<br>et comment nous le faisons</h1>
            <p class="nx-inner__hero-sub">Novorexas est un comparatif ind&eacute;pendant de bookmakers et de sites de poker agr&eacute;&eacute;s ANJ. Cette page explique notre identit&eacute;, notre m&eacute;thodologie de notation et notre engagement envers l&apos;ind&eacute;pendance &eacute;ditoriale.</p>
        </div>
    </div>

    <div class="nx-inner__body">
        <div class="nx-wrap nx-inner__layout">

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico nx-sec__ico--ink">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Identit&eacute;</div>
                        <h2>Qui sommes-nous</h2>
                    </div>
                </div>
                <p>Novorexas est un site comparatif ind&eacute;pendant d&eacute;di&eacute; aux paris sportifs et au poker en ligne en France. Nous recensons et &eacute;valuons exclusivement des op&eacute;rateurs titulaires d&apos;une licence d&eacute;livr&eacute;e par l&apos;Autorit&eacute; Nationale des Jeux (ANJ) &mdash; aucun op&eacute;rateur non agr&eacute;&eacute; n&apos;appara&icirc;t dans nos classements.</p>
                <p>Notre objectif est d&apos;aider chaque joueur &agrave; comparer les conditions r&eacute;elles des offres disponibles&nbsp;: bonus, paiements, fiabilit&eacute;, qualit&eacute; du support. Nous ne g&eacute;rons aucun compte joueur et n&apos;intervenons &agrave; aucun stade dans la relation entre l&apos;utilisateur et l&apos;op&eacute;rateur.</p>

                <div class="nx-checklist" style="margin-top:var(--sp-5)">
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--teal"><svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div>
                        <span class="nx-checklist__text">Op&eacute;rateurs ANJ uniquement &mdash; z&eacute;ro op&eacute;rateur non agr&eacute;&eacute; r&eacute;f&eacute;renc&eacute;</span>
                    </div>
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--teal"><svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div>
                        <span class="nx-checklist__text">Site purement comparatif &mdash; aucune gestion de compte joueur ni transaction</span>
                    </div>
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--teal"><svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div>
                        <span class="nx-checklist__text">Contenu exclusivement informatif &mdash; pas de conseil personnalis&eacute;</span>
                    </div>
                </div>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" x2="18" y1="20" y2="10"/><line x1="12" x2="12" y1="20" y2="4"/><line x1="6" x2="6" y1="20" y2="14"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">M&eacute;thodologie</div>
                        <h2>Comment nous &eacute;valuons les op&eacute;rateurs</h2>
                    </div>
                </div>
                <p>Chaque op&eacute;rateur re&ccedil;oit une note sur une &eacute;chelle de 0 &agrave; 10, calcul&eacute;e &agrave; partir de six crit&egrave;res issus de tests pratiques et de donn&eacute;es v&eacute;rifi&eacute;es.</p>

                <div class="nx-crit-grid">
                    <div class="nx-crit-card">
                        <div class="nx-crit-card__num">01</div>
                        <div class="nx-crit-card__name">Bonus et conditions</div>
                        <div class="nx-crit-card__desc">Montant de l&apos;offre, exigences de mise, d&eacute;lai d&apos;expiration et restrictions &eacute;ventuelles.</div>
                    </div>
                    <div class="nx-crit-card">
                        <div class="nx-crit-card__num">02</div>
                        <div class="nx-crit-card__name">Paiements</div>
                        <div class="nx-crit-card__desc">M&eacute;thodes accept&eacute;es, d&eacute;lais de retrait constat&eacute;s et limites appliqu&eacute;es par l&apos;op&eacute;rateur.</div>
                    </div>
                    <div class="nx-crit-card">
                        <div class="nx-crit-card__num">03</div>
                        <div class="nx-crit-card__name">L&eacute;galit&eacute; et s&eacute;curit&eacute;</div>
                        <div class="nx-crit-card__desc">Validit&eacute; de la licence ANJ, protocoles de v&eacute;rification d&apos;identit&eacute; et protection des donn&eacute;es.</div>
                    </div>
                    <div class="nx-crit-card">
                        <div class="nx-crit-card__num">04</div>
                        <div class="nx-crit-card__name">Service client</div>
                        <div class="nx-crit-card__desc">Disponibilit&eacute;, canaux de contact et qualit&eacute; des r&eacute;ponses test&eacute;es par notre &eacute;quipe.</div>
                    </div>
                    <div class="nx-crit-card">
                        <div class="nx-crit-card__num">05</div>
                        <div class="nx-crit-card__name">Exp&eacute;rience mobile</div>
                        <div class="nx-crit-card__desc">Fluidit&eacute; sur smartphone et tablette, application native disponible ou non.</div>
                    </div>
                    <div class="nx-crit-card">
                        <div class="nx-crit-card__num">06</div>
                        <div class="nx-crit-card__name">Avis utilisateurs</div>
                        <div class="nx-crit-card__desc">Volume et tendance g&eacute;n&eacute;rale des retours collect&eacute;s sur des plateformes tierces ind&eacute;pendantes.</div>
                    </div>
                </div>

                <div style="margin-bottom: var(--sp-6);">
                    <div class="nx-score-bar">
                        <span class="nx-score-bar__label">Bonus et conditions</span>
                        <div class="nx-score-bar__track"><div class="nx-score-bar__fill" style="width:30%"></div></div>
                        <span class="nx-score-bar__pct">30 %</span>
                    </div>
                    <div class="nx-score-bar">
                        <span class="nx-score-bar__label">Paiements</span>
                        <div class="nx-score-bar__track"><div class="nx-score-bar__fill" style="width:20%"></div></div>
                        <span class="nx-score-bar__pct">20 %</span>
                    </div>
                    <div class="nx-score-bar">
                        <span class="nx-score-bar__label">L&eacute;galit&eacute; et s&eacute;curit&eacute;</span>
                        <div class="nx-score-bar__track"><div class="nx-score-bar__fill" style="width:20%"></div></div>
                        <span class="nx-score-bar__pct">20 %</span>
                    </div>
                    <div class="nx-score-bar">
                        <span class="nx-score-bar__label">Service client</span>
                        <div class="nx-score-bar__track"><div class="nx-score-bar__fill" style="width:15%"></div></div>
                        <span class="nx-score-bar__pct">15 %</span>
                    </div>
                    <div class="nx-score-bar">
                        <span class="nx-score-bar__label">Exp&eacute;rience mobile</span>
                        <div class="nx-score-bar__track"><div class="nx-score-bar__fill" style="width:10%"></div></div>
                        <span class="nx-score-bar__pct">10 %</span>
                    </div>
                    <div class="nx-score-bar">
                        <span class="nx-score-bar__label">Avis utilisateurs</span>
                        <div class="nx-score-bar__track"><div class="nx-score-bar__fill" style="width:5%"></div></div>
                        <span class="nx-score-bar__pct">5 %</span>
                    </div>
                </div>

                <div class="nx-inner__note">
                    <svg class="nx-ico nx-ico--sm nx-inner__note-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" x2="12" y1="8" y2="12"/><line x1="12" x2="12.01" y1="16" y2="16"/></svg>
                    <p>Nos &eacute;valuations sont r&eacute;vis&eacute;es &agrave; chaque changement d&apos;offre significatif, et syst&eacute;matiquement au moins une fois par trimestre. V&eacute;rifiez toujours les termes directement sur le site de l&apos;op&eacute;rateur avant de vous inscrire.</p>
                </div>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico nx-sec__ico--leaf">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Transparence</div>
                        <h2>Mon&eacute;tisation et ind&eacute;pendance &eacute;ditoriale</h2>
                    </div>
                </div>
                <p>Certains liens sur Novorexas sont des liens affili&eacute;s&nbsp;: si vous cliquez et vous inscrivez aupr&egrave;s d&apos;un op&eacute;rateur, nous pouvons percevoir une commission. Cette r&eacute;mun&eacute;ration ne modifie en rien nos notes ni l&apos;ordre de notre classement.</p>

                <div class="nx-transp-grid">
                    <div class="nx-transp-card">
                        <div class="nx-transp-card__ico nx-transp-card__ico--green">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/><path d="m9 12 2 2 4-4"/></svg>
                        </div>
                        <div class="nx-transp-card__title">Notre engagement</div>
                        <div class="nx-transp-card__text">Nos &eacute;valuations reposent uniquement sur la m&eacute;thodologie d&eacute;crite ci-dessus. Toute relation commerciale susceptible d&apos;affecter notre ind&eacute;pendance serait signal&eacute;e explicitement.</div>
                    </div>
                    <div class="nx-transp-card">
                        <div class="nx-transp-card__ico nx-transp-card__ico--red">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" x2="6" y1="6" y2="18"/><line x1="6" x2="18" y1="6" y2="18"/></svg>
                        </div>
                        <div class="nx-transp-card__title">Ce que nous refusons</div>
                        <div class="nx-transp-card__text">Les op&eacute;rateurs ne peuvent pas acheter de position dans nos classements ni influencer le contenu de nos avis. Z&eacute;ro op&eacute;rateur non agr&eacute;&eacute; ANJ r&eacute;f&eacute;renc&eacute;.</div>
                    </div>
                </div>

                <div class="nx-inner__note">
                    <svg class="nx-ico nx-ico--sm nx-inner__note-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/></svg>
                    <p><strong>Jeu responsable&nbsp;:</strong> les jeux d&apos;argent comportent des risques de d&eacute;pendance. Si vous ressentez des difficult&eacute;s, consultez notre page <a href="/securite-du-jeu/" style="color:var(--nx-core)">S&eacute;curit&eacute; du jeu</a> ou contactez le Joueurs Info Service au <strong>09 74 75 13 13</strong> &mdash; 7j/7, appel non surtax&eacute;. Ce site s&apos;adresse exclusivement aux personnes &acirc;g&eacute;es de 18 ans et plus.</p>
                </div>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico nx-sec__ico--ink">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">R&eacute;daction</div>
                        <h2>Qui est derri&egrave;re ce contenu</h2>
                    </div>
                </div>
                <p>Le contenu de Novorexas est produit et v&eacute;rifi&eacute; par une &eacute;quipe &eacute;ditoriale sp&eacute;cialis&eacute;e dans les jeux en ligne r&eacute;glement&eacute;s en France. Chaque fiche op&eacute;rateur est r&eacute;dig&eacute;e sur la base de tests pratiques et de donn&eacute;es v&eacute;rifi&eacute;es &mdash; sans r&eacute;mun&eacute;ration de la part des op&eacute;rateurs &eacute;valu&eacute;s.</p>

                <div class="nx-author-card" style="margin: var(--sp-5) 0;">
                    <div class="nx-author-card__avatar">
                        <span class="nx-author-card__initials">NX</span>
                    </div>
                    <div>
                        <div class="nx-author-card__name">&Eacute;quipe Novorexas</div>
                        <div class="nx-author-card__role">Responsable &eacute;ditorial &mdash; comparatifs bookmakers &amp; poker ANJ</div>
                        <a href="mailto:support@novorexas.com" class="nx-author-card__email">
                            <svg class="nx-ico nx-ico--xs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                            support@novorexas.com
                        </a>
                    </div>
                </div>

                <div class="nx-inner__note">
                    <svg class="nx-ico nx-ico--sm nx-inner__note-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><line x1="12" x2="12" y1="9" y2="13"/><line x1="12" x2="12.01" y1="17" y2="17"/></svg>
                    <p>Vous avez rep&eacute;r&eacute; une information inexacte ou obsol&egrave;te&nbsp;? &Eacute;crivez-nous &agrave; <strong>support@novorexas.com</strong> &mdash; nous v&eacute;rifierons et corrigerons le contenu concern&eacute; en mettant &agrave; jour la date de r&eacute;vision de la page.</p>
                </div>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico nx-sec__ico--amber">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Contact</div>
                        <h2>Nous &eacute;crire</h2>
                    </div>
                </div>

                <div class="nx-inner__callout">
                    <div class="nx-inner__callout-text">
                        <p class="nx-inner__callout-label">Adresse de contact</p>
                        <p class="nx-inner__callout-body">Lundi &ndash; Vendredi, 9h30 &ndash; 17h00 (Paris)<br>R&eacute;ponse sous 24 &agrave; 48h ouvr&eacute;es</p>
                    </div>
                    <div class="nx-inner__callout-phone">
                        <a href="mailto:support@novorexas.com">support@novorexas.com</a>
                    </div>
                </div>

                <div class="nx-inner__note" style="margin-top:var(--sp-5)">
                    <svg class="nx-ico nx-ico--sm nx-inner__note-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" x2="12" y1="8" y2="12"/><line x1="12" x2="12.01" y1="16" y2="16"/></svg>
                    <p>Pour toute question li&eacute;e &agrave; un compte joueur, contactez directement le service client de l&apos;op&eacute;rateur concern&eacute;. Novorexas n&apos;a pas acc&egrave;s aux comptes joueurs.</p>
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