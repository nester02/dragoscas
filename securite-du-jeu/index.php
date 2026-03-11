<?php
$pageTitle       = 'Sécurité du jeu — Novorexas';
$pageDesc        = 'Risques, signaux d\'alerte, outils ANJ et ressources d\'aide : tout ce que vous devez savoir pour pratiquer les paris sportifs et le poker en toute sécurité.';
$pageCanonical   = 'https://novorexas.com/securite-du-jeu/';
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
</head>
<body class="nx-inner">

<?php include '../header.php'; ?>

<main>

    <div class="nx-inner__hero">
        <div class="nx-wrap">
            <div class="nx-inner__hero-meta">
                <span class="nx-inner__hero-tag">S&eacute;curit&eacute; du jeu</span>
                <span class="nx-inner__hero-date">Mis &agrave; jour le 7 mars 2026</span>
            </div>
            <h1>Jouer, oui &mdash;<br>mais garder le contr&ocirc;le</h1>
            <p class="nx-inner__hero-sub">Le jeu doit rester un divertissement. Si les paris prennent trop de place dans votre quotidien &mdash; en temps, en argent ou en &eacute;motions &mdash; des ressources concr&egrave;tes existent pour vous aider.</p>
        </div>
    </div>

    <div class="nx-inner__body">
        <div class="nx-wrap nx-inner__layout">

            <div class="nx-inner__callout">
                <div class="nx-inner__callout-left">
                    <div class="nx-inner__callout-label">Besoin d&apos;aide maintenant ?</div>
                    <div class="nx-inner__callout-title">Ligne d&apos;&eacute;coute gratuite &amp; anonyme</div>
                    <div class="nx-inner__callout-sub">Pour les joueurs et leurs proches &mdash; 7j/7 de 8h &agrave; 2h du matin</div>
                    <a href="https://www.joueurs-info-service.fr/" rel="nofollow noopener" target="_blank" class="nx-inner__callout-link">
                        <svg class="nx-ico nx-ico--xs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" x2="21" y1="14" y2="3"/></svg>
                        joueurs-info-service.fr
                    </a>
                </div>
                <div class="nx-inner__callout-right">
                    <div class="nx-inner__callout-num">09&nbsp;74&nbsp;75&nbsp;13&nbsp;13</div>
                    <div class="nx-inner__callout-hint">Appel non surtax&eacute;</div>
                </div>
            </div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico nx-sec__ico--amber">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><line x1="12" x2="12" y1="9" y2="13"/><line x1="12" x2="12.01" y1="17" y2="17"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Risques</div>
                        <h2>Ce que le jeu peut provoquer</h2>
                    </div>
                </div>

                <div class="nx-risk-grid">
                    <div class="nx-risk-card">
                        <div class="nx-risk-card__ico nx-risk-card__ico--fin">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" x2="22" y1="10" y2="10"/></svg>
                        </div>
                        <h3>Finances</h3>
                        <ul>
                            <li>Endettement progressif</li>
                            <li>Difficult&eacute;s budg&eacute;taires</li>
                            <li>Recours &agrave; l&apos;emprunt</li>
                            <li>&Eacute;pargne dilapid&eacute;e</li>
                        </ul>
                    </div>
                    <div class="nx-risk-card">
                        <div class="nx-risk-card__ico nx-risk-card__ico--psy">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 2a8 8 0 1 0 0 16"/><path d="M12 2v4"/><path d="M12 18v4"/><path d="M4.93 4.93l2.83 2.83"/><path d="M16.24 16.24l2.83 2.83"/></svg>
                        </div>
                        <h3>Psychologie</h3>
                        <ul>
                            <li>D&eacute;pendance comportementale</li>
                            <li>Anxi&eacute;t&eacute; et stress chroniques</li>
                            <li>Humeur d&eacute;pressive</li>
                            <li>Perte d&apos;estime de soi</li>
                        </ul>
                    </div>
                    <div class="nx-risk-card">
                        <div class="nx-risk-card__ico nx-risk-card__ico--rel">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </div>
                        <h3>Relations</h3>
                        <ul>
                            <li>Isolement progressif</li>
                            <li>Tensions familiales</li>
                            <li>Difficult&eacute;s professionnelles</li>
                            <li>Ruptures relationnelles</li>
                        </ul>
                    </div>
                </div>

                <div class="nx-inner__note">
                    <svg class="nx-ico nx-ico--sm nx-inner__note-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" x2="12" y1="8" y2="12"/><line x1="12" x2="12.01" y1="16" y2="16"/></svg>
                    <p><strong>&Agrave; retenir&nbsp;:</strong> Math&eacute;matiquement, les jeux d&apos;argent sont con&ccedil;us pour que l&apos;op&eacute;rateur soit gagnant sur le long terme. La probabilit&eacute; de perte est toujours sup&eacute;rieure &agrave; celle de gain.</p>
                </div>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" x2="16.65" y1="21" y2="16.65"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Signes d&apos;alerte</div>
                        <h2>Comment reconna&icirc;tre un probl&egrave;me</h2>
                    </div>
                </div>

                <div class="nx-checklist">
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--amber">
                            <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <span class="nx-checklist__text">Temps consacr&eacute; au jeu en augmentation r&eacute;guli&egrave;re</span>
                    </div>
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--amber">
                            <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <span class="nx-checklist__text">Difficult&eacute; &agrave; s&apos;arr&ecirc;ter ou &agrave; se fixer des limites</span>
                    </div>
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--amber">
                            <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <span class="nx-checklist__text">Pens&eacute;es envahissantes li&eacute;es aux paris en dehors des sessions</span>
                    </div>
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--amber">
                            <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <span class="nx-checklist__text">Besoin de miser des sommes toujours plus importantes</span>
                    </div>
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--amber">
                            <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <span class="nx-checklist__text">Dettes accumul&eacute;es, emprunts fr&eacute;quents &agrave; l&apos;entourage</span>
                    </div>
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--amber">
                            <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <span class="nx-checklist__text">Mensonges sur l&apos;&eacute;tendue r&eacute;elle de l&apos;activit&eacute; de jeu</span>
                    </div>
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--amber">
                            <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <span class="nx-checklist__text">Retrait des activit&eacute;s sociales habituelles</span>
                    </div>
                </div>

                <div class="nx-inner__note">
                    <svg class="nx-ico nx-ico--sm nx-inner__note-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" x2="12" y1="8" y2="12"/><line x1="12" x2="12.01" y1="16" y2="16"/></svg>
                    <p>Si vous vous reconnaissez dans trois points ou plus, contactez Joueurs Info Service au <strong>09 74 75 13 13</strong> &mdash; sans attendre.</p>
                </div>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico nx-sec__ico--leaf">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/><path d="m9 12 2 2 4-4"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Pratiquer sainement</div>
                        <h2>R&egrave;gles pour un jeu ma&icirc;tris&eacute;</h2>
                    </div>
                </div>

                <div class="nx-rules-grid">
                    <div class="nx-rules-col">
                        <h3>Avant chaque session</h3>
                        <div class="nx-checklist">
                            <div class="nx-checklist__item">
                                <div class="nx-checklist__dot nx-checklist__dot--teal">
                                    <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                                </div>
                                <span class="nx-checklist__text"><strong>Budget</strong>&nbsp;: fixez &agrave; l&apos;avance la somme maximale que vous &ecirc;tes pr&ecirc;t &agrave; perdre</span>
                            </div>
                            <div class="nx-checklist__item">
                                <div class="nx-checklist__dot nx-checklist__dot--teal">
                                    <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                                </div>
                                <span class="nx-checklist__text"><strong>Dur&eacute;e</strong>&nbsp;: d&eacute;finissez une limite de temps et respectez-la</span>
                            </div>
                            <div class="nx-checklist__item">
                                <div class="nx-checklist__dot nx-checklist__dot--teal">
                                    <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                                </div>
                                <span class="nx-checklist__text"><strong>&Eacute;tat d&apos;esprit</strong>&nbsp;: ne jouez jamais sous stress ou pour &laquo;&nbsp;vous refaire&nbsp;&raquo;</span>
                            </div>
                        </div>
                    </div>
                    <div class="nx-rules-col">
                        <h3>&Agrave; ne jamais faire</h3>
                        <div class="nx-checklist">
                            <div class="nx-checklist__item">
                                <div class="nx-checklist__dot nx-checklist__dot--red">
                                    <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" x2="6" y1="6" y2="18"/><line x1="6" x2="18" y1="6" y2="18"/></svg>
                                </div>
                                <span class="nx-checklist__text">Jouer avec l&apos;argent destin&eacute; aux charges</span>
                            </div>
                            <div class="nx-checklist__item">
                                <div class="nx-checklist__dot nx-checklist__dot--red">
                                    <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" x2="6" y1="6" y2="18"/><line x1="6" x2="18" y1="6" y2="18"/></svg>
                                </div>
                                <span class="nx-checklist__text">Emprunter de l&apos;argent pour jouer</span>
                            </div>
                            <div class="nx-checklist__item">
                                <div class="nx-checklist__dot nx-checklist__dot--red">
                                    <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" x2="6" y1="6" y2="18"/><line x1="6" x2="18" y1="6" y2="18"/></svg>
                                </div>
                                <span class="nx-checklist__text">Tenter de r&eacute;cup&eacute;rer des pertes en rejouant</span>
                            </div>
                            <div class="nx-checklist__item">
                                <div class="nx-checklist__dot nx-checklist__dot--red">
                                    <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" x2="6" y1="6" y2="18"/><line x1="6" x2="18" y1="6" y2="18"/></svg>
                                </div>
                                <span class="nx-checklist__text">Utiliser le jeu comme source de revenus</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico nx-sec__ico--ink">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="18" height="11" x="3" y="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Outils de contr&ocirc;le</div>
                        <h2>Ce que les op&eacute;rateurs ANJ doivent proposer</h2>
                    </div>
                </div>

                <div class="nx-tools-list">
                    <div class="nx-tool">
                        <div class="nx-tool__ico">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" x2="12" y1="2" y2="22"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                        </div>
                        <div class="nx-tool__body">
                            <div class="nx-tool__name">Limites de d&eacute;p&ocirc;t</div>
                            <div class="nx-tool__desc">Plafonnez vos d&eacute;p&ocirc;ts par jour, semaine ou mois. Aucun d&eacute;p&ocirc;t suppl&eacute;mentaire n&apos;est possible une fois la limite atteinte.</div>
                        </div>
                    </div>
                    <div class="nx-tool">
                        <div class="nx-tool__ico">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div class="nx-tool__body">
                            <div class="nx-tool__name">Limites de temps de session</div>
                            <div class="nx-tool__desc">Configurez la dur&eacute;e maximale de vos sessions. Vous serez alert&eacute; puis d&eacute;connect&eacute; automatiquement.</div>
                        </div>
                    </div>
                    <div class="nx-tool">
                        <div class="nx-tool__ico">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" x2="18" y1="20" y2="10"/><line x1="12" x2="12" y1="20" y2="4"/><line x1="6" x2="6" y1="20" y2="14"/></svg>
                        </div>
                        <div class="nx-tool__body">
                            <div class="nx-tool__name">Limites de perte</div>
                            <div class="nx-tool__desc">D&eacute;finissez un montant maximum de perte acceptable. Votre compte est suspendu automatiquement &agrave; l&apos;atteinte de ce seuil.</div>
                        </div>
                    </div>
                    <div class="nx-tool">
                        <div class="nx-tool__ico">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18.36 6.64a9 9 0 1 1-12.73 0"/><line x1="12" x2="12" y1="2" y2="12"/></svg>
                        </div>
                        <div class="nx-tool__body">
                            <div class="nx-tool__name">Auto-exclusion temporaire</div>
                            <div class="nx-tool__desc">Excluez-vous pour 24h, 7 jours, 30 jours ou plus. L&apos;acc&egrave;s &agrave; votre compte est totalement bloqu&eacute; durant cette p&eacute;riode.</div>
                        </div>
                    </div>
                    <div class="nx-tool">
                        <div class="nx-tool__ico">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/></svg>
                        </div>
                        <div class="nx-tool__body">
                            <div class="nx-tool__name">Interdiction volontaire ANJ</div>
                            <div class="nx-tool__desc">En cas de perte de contr&ocirc;le av&eacute;r&eacute;e, demandez une exclusion permanente de <strong>tous</strong> les sites agr&eacute;&eacute;s en France.</div>
                        </div>
                    </div>
                </div>

                <div class="nx-anj-cta" style="margin-top: var(--sp-8);">
                    <div class="nx-anj-cta__text">
                        <h3>Fichier d&apos;interdiction volontaire ANJ</h3>
                        <p>Pr&eacute;sentez-vous dans un commissariat, une gendarmerie ou directement aupr&egrave;s de l&apos;ANJ pour vous inscrire. Cette d&eacute;marche vous interdit l&apos;acc&egrave;s &agrave; tous les &eacute;tablissements agr&eacute;&eacute;s en France.</p>
                    </div>
                    <a href="https://www.anj.fr/" rel="nofollow noopener" target="_blank" class="nx-anj-cta__btn">
                        Visiter le site de l&apos;ANJ
                        <svg class="nx-ico nx-ico--xs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Ressources d&apos;aide</div>
                        <h2>Vous n&apos;&ecirc;tes pas seul</h2>
                    </div>
                </div>

                <div class="nx-res-grid">
                    <div class="nx-res-card">
                        <div class="nx-res-card__ico">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2.18h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.06 6.06l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </div>
                        <div class="nx-res-card__name">Joueurs Info Service</div>
                        <div class="nx-res-card__desc">&Eacute;coute, information et conseil. 7j/7 de 8h &agrave; 2h. Appel anonyme et non surtax&eacute;.</div>
                        <a href="https://www.joueurs-info-service.fr/" rel="nofollow noopener" target="_blank" class="nx-res-card__link">
                            joueurs-info-service.fr
                            <svg class="nx-ico" style="width:11px;height:11px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </a>
                    </div>
                    <div class="nx-res-card">
                        <div class="nx-res-card__ico">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        </div>
                        <div class="nx-res-card__name">CSAPA</div>
                        <div class="nx-res-card__desc">Consultations gratuites, prise en charge m&eacute;dicale et psychologique. Pr&eacute;sents dans toute la France.</div>
                    </div>
                    <div class="nx-res-card">
                        <div class="nx-res-card__ico">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                        </div>
                        <div class="nx-res-card__name">Joueurs Anonymes</div>
                        <div class="nx-res-card__desc">Groupes de parole entre pairs, r&eacute;unions r&eacute;guli&egrave;res dans toute la France.</div>
                        <a href="https://www.joueursanonymes.org/" rel="nofollow noopener" target="_blank" class="nx-res-card__link">
                            joueursanonymes.org
                            <svg class="nx-ico" style="width:11px;height:11px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico nx-sec__ico--amber">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Entourage</div>
                        <h2>Un proche est concern&eacute;&nbsp;?</h2>
                    </div>
                </div>

                <p>Joueurs Info Service propose un accompagnement sp&eacute;cifique pour les familles et proches de joueurs en difficult&eacute;.</p>

                <div class="nx-checklist" style="margin-top: var(--sp-5);">
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--teal">
                            <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <span class="nx-checklist__text">Engagez une conversation calme, sans jugement ni accusation</span>
                    </div>
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--teal">
                            <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <span class="nx-checklist__text">Proposez votre accompagnement pour consulter un professionnel</span>
                    </div>
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--red">
                            <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" x2="6" y1="6" y2="18"/><line x1="6" x2="18" y1="6" y2="18"/></svg>
                        </div>
                        <span class="nx-checklist__text">Ne pr&ecirc;tez pas d&apos;argent susceptible de financer le jeu</span>
                    </div>
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--teal">
                            <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <span class="nx-checklist__text">Appelez le 09&nbsp;74&nbsp;75&nbsp;13&nbsp;13 pour &ecirc;tre conseill&eacute; vous-m&ecirc;me</span>
                    </div>
                </div>

                <div class="nx-inner__note" style="margin-top:var(--sp-6)">
                    <svg class="nx-ico nx-ico--sm nx-inner__note-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" x2="12" y1="8" y2="12"/><line x1="12" x2="12.01" y1="16" y2="16"/></svg>
                    <p>Vous n&apos;&ecirc;tes pas responsable du probl&egrave;me de jeu d&apos;un proche et vous ne pouvez pas le contraindre &agrave; arr&ecirc;ter. Votre r&ocirc;le est d&apos;offrir du soutien tout en prenant soin de vous.</p>
                </div>
            </div>

            <div class="nx-inner__divider"></div>

            <div class="nx-sec">
                <div class="nx-sec__head">
                    <div class="nx-sec__ico nx-sec__ico--ink">
                        <svg class="nx-ico nx-ico--md" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="14" x="2" y="3" rx="2"/><line x1="8" x2="16" y1="21" y2="21"/><line x1="12" x2="12" y1="17" y2="21"/></svg>
                    </div>
                    <div class="nx-sec__titles">
                        <div class="nx-sec__eyebrow">Protection des mineurs</div>
                        <h2>Interdit aux moins de 18 ans</h2>
                    </div>
                </div>

                <p>La l&eacute;gislation fran&ccedil;aise interdit formellement l&apos;acc&egrave;s aux jeux d&apos;argent aux personnes de moins de 18 ans, en ligne comme en &eacute;tablissement physique.</p>

                <div class="nx-checklist">
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--teal">
                            <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <span class="nx-checklist__text">V&eacute;rification d&apos;identit&eacute; obligatoire &agrave; l&apos;inscription</span>
                    </div>
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--teal">
                            <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <span class="nx-checklist__text">Supervisez l&apos;utilisation d&apos;internet par vos enfants</span>
                    </div>
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--teal">
                            <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <span class="nx-checklist__text">Utilisez des logiciels de contr&ocirc;le parental pour bloquer l&apos;acc&egrave;s aux sites de jeux</span>
                    </div>
                    <div class="nx-checklist__item">
                        <div class="nx-checklist__dot nx-checklist__dot--teal">
                            <svg class="nx-ico" style="width:13px;height:13px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <span class="nx-checklist__text">Prot&eacute;gez vos moyens de paiement</span>
                    </div>
                </div>
            </div>

            <div class="nx-inner__callout" style="margin-top: var(--sp-6);">
                <div class="nx-inner__callout-left">
                    <div class="nx-inner__callout-label">N&apos;attendez pas</div>
                    <div class="nx-inner__callout-title">Le jeu probl&eacute;matique peut &ecirc;tre pris en charge</div>
                    <div class="nx-inner__callout-sub">Plus t&ocirc;t vous agissez, plus vite vous retrouverez le contr&ocirc;le.</div>
                    <a href="https://www.joueurs-info-service.fr/" rel="nofollow noopener" target="_blank" class="nx-inner__callout-link">
                        <svg class="nx-ico nx-ico--xs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" x2="21" y1="14" y2="3"/></svg>
                        www.joueurs-info-service.fr
                    </a>
                </div>
                <div class="nx-inner__callout-right">
                    <div class="nx-inner__callout-num">09&nbsp;74&nbsp;75&nbsp;13&nbsp;13</div>
                    <div class="nx-inner__callout-hint">Gratuit &middot; Anonyme &middot; 7j/7</div>
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