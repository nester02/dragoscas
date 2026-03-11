<?php
$pageTitle     = 'Nous écrire — Contact Novorexas';
$pageDesc      = 'Contactez l\'équipe éditoriale Novorexas : signalement d\'erreur, question sur un opérateur, partenariat ou demande RGPD. Réponse sous 24–48h ouvrées.';
$pageCanonical = 'https://novorexas.com/nous-ecrire/';
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
    <meta property="og:type" content="website">
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
        /* ── Layout ── */
        .nx-ne-wrap {
            display: grid;
            grid-template-columns: 1fr 420px;
            gap: var(--sp-10);
            align-items: start;
        }

        /* ── Info cards column ── */
        .nx-cc-list {
            display: flex;
            flex-direction: column;
            gap: var(--sp-3);
        }
        .nx-cc {
            background: var(--nx-paper);
            border-radius: var(--rad-xl);
            padding: var(--sp-5) var(--sp-6);
            display: flex;
            align-items: flex-start;
            gap: var(--sp-5);
        }
        .nx-cc__ico {
            width: 42px;
            height: 42px;
            flex-shrink: 0;
            border-radius: var(--rad-md);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .nx-cc__ico--teal  { background: rgba(61,138,129,.12); color: var(--nx-core); }
        .nx-cc__ico--amber { background: rgba(212,137,58,.12); color: var(--nx-amber); }
        .nx-cc__ico--ink   { background: rgba(45,94,99,.10);   color: var(--nx-ink); }
        .nx-cc__ico--leaf  { background: rgba(109,173,103,.14);color: var(--nx-leaf); }
        .nx-cc__title {
            font-family: var(--ff-head);
            font-size: var(--fz-sm);
            font-weight: var(--fw-bd);
            color: var(--nx-ink);
            margin-bottom: var(--sp-1);
        }
        .nx-cc__text {
            font-size: var(--fz-xs);
            color: var(--nx-mist);
            line-height: 1.7;
        }
        .nx-cc__text a {
            color: var(--nx-core);
            text-decoration: none;
            font-weight: var(--fw-bd);
        }
        .nx-cc__text a:hover { color: var(--nx-ink); }
        .nx-cc__phone {
            display: block;
            font-family: var(--ff-head);
            font-size: var(--fz-h4);
            font-weight: var(--fw-xbd);
            color: var(--nx-ink);
            letter-spacing: -.025em;
            margin: var(--sp-2) 0 var(--sp-1);
            text-decoration: none;
            line-height: 1;
        }
        .nx-cc__phone:hover { color: var(--nx-core); }

        /* ── Sticky form column ── */
        .nx-ne-form-col {
            position: sticky;
            top: calc(var(--sp-6) + var(--sp-6));
        }
        .nx-form-card {
            background: var(--nx-surface);
            border-radius: var(--rad-xl);
            box-shadow: 0 2px 8px rgba(27,50,54,.06), 0 8px 32px rgba(27,50,54,.07);
            padding: var(--sp-8) var(--sp-8);
        }
        .nx-form-card__title {
            font-family: var(--ff-head);
            font-size: var(--fz-h4);
            font-weight: var(--fw-xbd);
            color: var(--nx-ink);
            letter-spacing: -.025em;
            margin-bottom: var(--sp-1);
        }
        .nx-form-card__sub {
            font-size: var(--fz-xs);
            color: var(--nx-mist);
            margin-bottom: var(--sp-6);
        }
        .nx-req { color: var(--nx-amber); }

        /* ── Fields ── */
        .nx-field {
            display: flex;
            flex-direction: column;
            gap: 6px;
            margin-bottom: var(--sp-4);
        }
        .nx-field label {
            font-size: var(--fz-xs);
            font-weight: var(--fw-bd);
            color: var(--nx-ink);
        }
        .nx-field input,
        .nx-field select,
        .nx-field textarea {
            width: 100%;
            box-sizing: border-box;
            background: var(--nx-paper);
            border: 1.5px solid rgba(61,138,129,.18);
            border-radius: var(--rad-md);
            padding: 10px var(--sp-4);
            font-family: var(--ff-body);
            font-size: var(--fz-sm);
            color: var(--nx-ink);
            outline: none;
            -webkit-appearance: none;
            appearance: none;
            transition: border-color .18s ease, box-shadow .18s ease;
        }
        .nx-field input::placeholder,
        .nx-field textarea::placeholder { color: rgba(80,122,126,.45); }
        .nx-field select {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23507A7E' stroke-width='2.2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            padding-right: 36px;
            cursor: pointer;
            color: var(--nx-ink);
        }
        .nx-field select option[value=""][disabled] { color: rgba(80,122,126,.45); }
        .nx-field textarea {
            resize: vertical;
            min-height: 108px;
        }
        .nx-field input:focus,
        .nx-field select:focus,
        .nx-field textarea:focus {
            border-color: var(--nx-core);
            box-shadow: 0 0 0 3px rgba(61,138,129,.11);
        }
        .nx-field input.is-err,
        .nx-field select.is-err,
        .nx-field textarea.is-err {
            border-color: #C0392B;
            box-shadow: 0 0 0 3px rgba(192,57,43,.09);
        }
        .nx-err-msg {
            font-size: 11px;
            color: #C0392B;
            display: none;
        }
        .nx-err-msg.is-on { display: block; }

        .nx-form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: var(--sp-4);
        }

        /* ── Submit ── */
        .nx-form-btn {
            width: 100%;
            padding: 12px var(--sp-5);
            background: var(--nx-core);
            color: #fff;
            font-family: var(--ff-head);
            font-size: var(--fz-sm);
            font-weight: var(--fw-bd);
            border: none;
            border-radius: var(--rad-md);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: var(--sp-2);
            margin-top: var(--sp-2);
            transition: background .18s ease, transform .15s ease;
        }
        .nx-form-btn:hover:not(:disabled) { background: var(--nx-ink); transform: translateY(-1px); }
        .nx-form-btn:active { transform: translateY(0); }
        .nx-form-btn:disabled { opacity: .7; cursor: not-allowed; }
        .nx-spinner {
            width: 16px; height: 16px;
            border: 2px solid rgba(255,255,255,.3);
            border-top-color: #fff;
            border-radius: 50%;
            animation: nx-spin .65s linear infinite;
            display: none;
        }
        .nx-form-btn.is-loading .nx-btn-lbl { display: none; }
        .nx-form-btn.is-loading .nx-spinner { display: block; }
        @keyframes nx-spin { to { transform: rotate(360deg); } }

        .nx-form-privacy {
            margin-top: var(--sp-4);
            font-size: 11px;
            color: var(--nx-mist);
            text-align: center;
            line-height: 1.6;
        }
        .nx-form-privacy a { color: var(--nx-core); text-decoration: none; }
        .nx-form-privacy a:hover { color: var(--nx-ink); }

        /* ── Thank you ── */
        .nx-form-area.is-hidden { display: none; }
        .nx-form-thanks {
            display: none;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: var(--sp-6) 0 var(--sp-3);
            gap: var(--sp-5);
        }
        .nx-form-thanks.is-on { display: flex; }
        .nx-ty-ico {
            width: 68px; height: 68px;
            border-radius: 50%;
            background: rgba(109,173,103,.13);
            color: var(--nx-leaf);
            display: flex; align-items: center; justify-content: center;
        }
        .nx-ty-title {
            font-family: var(--ff-head);
            font-size: var(--fz-h4);
            font-weight: var(--fw-xbd);
            color: var(--nx-ink);
            letter-spacing: -.02em;
        }
        .nx-ty-sub {
            font-size: var(--fz-sm);
            color: var(--nx-mist);
            line-height: 1.65;
            max-width: 300px;
        }
        .nx-ty-back {
            display: inline-flex;
            align-items: center;
            gap: var(--sp-2);
            padding: 10px var(--sp-6);
            background: var(--nx-paper);
            border: 1.5px solid rgba(61,138,129,.20);
            border-radius: var(--rad-md);
            color: var(--nx-core);
            font-family: var(--ff-head);
            font-size: var(--fz-xs);
            font-weight: var(--fw-bd);
            text-decoration: none;
            transition: background .18s ease, border-color .18s ease;
        }
        .nx-ty-back:hover { background: rgba(61,138,129,.07); border-color: var(--nx-core); }

        /* ── Hero ── */
        .nx-ne-hero-chips {
            display: flex;
            align-items: center;
            gap: var(--sp-5);
            flex-wrap: wrap;
            margin-top: var(--sp-5);
        }
        .nx-ne-chip {
            display: flex;
            align-items: center;
            gap: var(--sp-2);
            font-size: var(--fz-sm);
            color: rgba(232,245,233,.75);
        }
        .nx-ne-chip strong { color: #F5FCF3; font-weight: var(--fw-bd); }

        /* ── Responsive ── */
        @media (max-width: 960px) {
            .nx-ne-wrap {
                grid-template-columns: 1fr;
            }
            .nx-ne-form-col {
                position: static;
                order: -1;
            }
        }
        @media (max-width: 520px) {
            .nx-form-row { grid-template-columns: 1fr; }
            .nx-form-card { padding: var(--sp-6) var(--sp-5); }
        }
    </style>
</head>
<body class="nx-inner">

<?php include '../header.php'; ?>

<main>

    <div class="nx-inner__hero">
        <div class="nx-wrap">
            <div class="nx-inner__hero-meta">
                <span class="nx-inner__hero-tag">Nous &eacute;crire</span>
            </div>
            <h1>Une question&nbsp;?<br>On vous r&eacute;pond.</h1>
            <div class="nx-ne-hero-chips">
                <div class="nx-ne-chip">
                    <svg class="nx-ico nx-ico--xs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                    <strong>support@novorexas.com</strong>
                </div>
                <div class="nx-ne-chip">
                    <svg class="nx-ico nx-ico--xs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    <span>Lun&ndash;Ven&nbsp;9h30&ndash;17h00 &nbsp;&middot;&nbsp; <strong>R&eacute;ponse 24&ndash;48h</strong></span>
                </div>
            </div>
        </div>
    </div>

    <div class="nx-inner__body">
        <div class="nx-wrap">
            <div class="nx-ne-wrap">

                <div class="nx-cc-list">

                    <div class="nx-cc">
                        <div class="nx-cc__ico nx-cc__ico--teal">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                        </div>
                        <div>
                            <div class="nx-cc__title">Contact &eacute;ditorial</div>
                            <div class="nx-cc__text">Notre &eacute;quipe traite chaque message personnellement &mdash; signalement d&apos;erreur, question sur un op&eacute;rateur ou demande de partenariat.<br><br><a href="mailto:support@novorexas.com">support@novorexas.com</a> &nbsp;&middot;&nbsp; Lun&ndash;Ven, 9h30&ndash;17h00 (Paris)</div>
                        </div>
                    </div>

                    <div class="nx-cc">
                        <div class="nx-cc__ico nx-cc__ico--amber">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><line x1="12" x2="12" y1="9" y2="13"/><line x1="12" x2="12.01" y1="17" y2="17"/></svg>
                        </div>
                        <div>
                            <div class="nx-cc__title">Signaler une erreur</div>
                            <div class="nx-cc__text">Information inexacte ou obsol&egrave;te&nbsp;? Pr&eacute;cisez la page et l&apos;erreur via le formulaire. Nous corrigeons sous 48h et mettons &agrave; jour la date de r&eacute;vision.</div>
                        </div>
                    </div>

                    <div class="nx-cc">
                        <div class="nx-cc__ico nx-cc__ico--ink">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        </div>
                        <div>
                            <div class="nx-cc__title">Comptes joueurs</div>
                            <div class="nx-cc__text">Pour tout probl&egrave;me li&eacute; &agrave; un compte joueur, contactez directement le service client de l&apos;op&eacute;rateur. Novorexas n&apos;a aucun acc&egrave;s aux comptes joueurs.</div>
                        </div>
                    </div>

                    <div class="nx-cc">
                        <div class="nx-cc__ico nx-cc__ico--leaf">
                            <svg class="nx-ico nx-ico--sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.61 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.6a16 16 0 0 0 6 6l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </div>
                        <div>
                            <div class="nx-cc__title">Aide au jeu responsable</div>
                            <div class="nx-cc__text">
                                7j/7 de 8h &agrave; 2h &mdash; appel non surtax&eacute;
                                <a class="nx-cc__phone" href="tel:0974751313">09 74 75 13 13</a>
                                <a href="https://www.joueurs-info-service.fr" rel="nofollow noopener" target="_blank">joueurs-info-service.fr</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="nx-ne-form-col">
                    <div class="nx-form-card">

                        <div class="nx-form-area" id="nx-form-area">
                            <div class="nx-form-card__title">Formulaire de contact</div>
                            <div class="nx-form-card__sub">Champs marqu&eacute;s <span class="nx-req">*</span> obligatoires.</div>

                            <div class="nx-form-row">
                                <div class="nx-field">
                                    <label for="nx-nom">Nom <span class="nx-req">*</span></label>
                                    <input type="text" id="nx-nom" name="nom" autocomplete="name" placeholder="Votre nom">
                                    <span class="nx-err-msg" id="nx-nom-err">Indiquez votre nom.</span>
                                </div>
                                <div class="nx-field">
                                    <label for="nx-email">Email <span class="nx-req">*</span></label>
                                    <input type="email" id="nx-email" name="email" autocomplete="email" placeholder="votre@email.com">
                                    <span class="nx-err-msg" id="nx-email-err">Adresse invalide.</span>
                                </div>
                            </div>

                            <div class="nx-field">
                                <label for="nx-sujet">Sujet <span class="nx-req">*</span></label>
                                <select id="nx-sujet" name="sujet">
                                    <option value="" disabled selected>Choisissez un sujet</option>
                                    <option value="erreur">Signaler une erreur ou information obsol&egrave;te</option>
                                    <option value="operateur">Question sur un op&eacute;rateur</option>
                                    <option value="partenariat">Demande de partenariat &eacute;ditorial</option>
                                    <option value="rgpd">Demande relative &agrave; mes donn&eacute;es personnelles</option>
                                    <option value="autre">Autre</option>
                                </select>
                                <span class="nx-err-msg" id="nx-sujet-err">Choisissez un sujet.</span>
                            </div>

                            <div class="nx-field">
                                <label for="nx-message">Message <span class="nx-req">*</span></label>
                                <textarea id="nx-message" name="message" placeholder="Votre message&hellip;"></textarea>
                                <span class="nx-err-msg" id="nx-message-err">Entrez votre message.</span>
                            </div>

                            <button type="button" class="nx-form-btn" id="nx-submit-btn">
                                <span class="nx-btn-lbl">
                                    <svg class="nx-ico nx-ico--xs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="22" x2="11" y1="2" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                                    Envoyer
                                </span>
                                <span class="nx-spinner"></span>
                            </button>

                            <p class="nx-form-privacy">Donn&eacute;es utilis&eacute;es uniquement pour r&eacute;pondre &agrave; votre demande &mdash; <a href="/protection-donnees/">Politique de confidentialit&eacute;</a></p>
                        </div>

                        <div class="nx-form-thanks" id="nx-form-thanks">
                            <div class="nx-ty-ico">
                                <svg class="nx-ico" style="width:30px;height:30px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div class="nx-ty-title">Message envoy&eacute;&nbsp;!</div>
                            <div class="nx-ty-sub">Merci. Notre &eacute;quipe &eacute;ditoriale vous r&eacute;pondra sous 24&ndash;48h ouvr&eacute;es.</div>
                            <a href="/" class="nx-ty-back">
                                <svg class="nx-ico nx-ico--xs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="19" x2="5" y1="12" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                                Retour &agrave; l&apos;accueil
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</main>

<?php include '../footer.php'; ?>

<script src="/assets/js/age-gate.js" async></script>
<script src="/assets/js/cookie-banner.js" defer></script>
<script src="/assets/js/index.js" defer></script>
<script>
    (function () {
        var btn    = document.getElementById('nx-submit-btn');
        var area   = document.getElementById('nx-form-area');
        var thanks = document.getElementById('nx-form-thanks');

        var fields = [
            { id: 'nx-nom',     errId: 'nx-nom-err',     test: function(v){ return v.trim().length >= 2; } },
            { id: 'nx-email',   errId: 'nx-email-err',   test: function(v){ return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v.trim()); } },
            { id: 'nx-sujet',   errId: 'nx-sujet-err',   test: function(v){ return v !== ''; } },
            { id: 'nx-message', errId: 'nx-message-err', test: function(v){ return v.trim().length >= 10; } }
        ];

        fields.forEach(function(f) {
            var el  = document.getElementById(f.id);
            var err = document.getElementById(f.errId);
            el.addEventListener('blur', function() {
                if (!f.test(el.value)) { el.classList.add('is-err'); err.classList.add('is-on'); }
            });
            el.addEventListener('input', function() {
                if (f.test(el.value)) { el.classList.remove('is-err'); err.classList.remove('is-on'); }
            });
        });

        btn.addEventListener('click', function() {
            var ok = true;
            fields.forEach(function(f) {
                var el  = document.getElementById(f.id);
                var err = document.getElementById(f.errId);
                if (!f.test(el.value)) {
                    el.classList.add('is-err');
                    err.classList.add('is-on');
                    ok = false;
                }
            });
            if (!ok) return;
            btn.classList.add('is-loading');
            btn.disabled = true;
            setTimeout(function() {
                area.classList.add('is-hidden');
                thanks.classList.add('is-on');
            }, 900);
        });
    }());
</script>
</body>
</html>