<?php
$page_title     = "Nous Contacter — Équipe éditoriale Dragoscas";
$page_desc      = "Contactez l'équipe éditoriale de Dragoscas : signalement d'erreur, question sur un opérateur, demande de partenariat. Réponse sous 24 à 48h ouvrées.";
$page_canonical = "https://dragoscas.com/nous-contacter/";
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
    <style>
        .nc-grid {
            display: grid;
            grid-template-columns: 1fr 480px;
            gap: 48px;
            align-items: start;
            padding: 64px 0 80px;
        }

        /* ── Left column ── */
        .nc-left__title {
            font-family: var(--ff-head);
            font-size: 1.625rem;
            font-weight: var(--fw-bd);
            color: var(--dg-ink-strong);
            line-height: 1.25;
            margin: 0 0 8px;
        }
        .nc-left__sub {
            font-size: 0.9375rem;
            color: var(--dg-ink-muted);
            line-height: 1.65;
            margin: 0 0 36px;
        }
        .nc-primary {
            display: flex;
            align-items: center;
            gap: 16px;
            background: var(--dg-brand-deep);
            border-radius: 16px;
            padding: 20px 24px;
            margin-bottom: 28px;
        }
        .nc-primary__ico {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: rgba(255,255,255,0.12);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .nc-primary__ico img { width: 20px; height: 20px; filter: brightness(0) invert(1); }
        .nc-primary__email {
            font-family: var(--ff-head);
            font-size: 1.0625rem;
            font-weight: var(--fw-bd);
            color: #fff;
            text-decoration: none;
            display: block;
        }
        .nc-primary__email:hover { text-decoration: underline; }
        .nc-primary__note {
            font-size: 0.8125rem;
            color: rgba(255,255,255,0.62);
            margin: 3px 0 0;
        }

        .nc-cards { display: flex; flex-direction: column; gap: 12px; }
        .nc-card {
            display: flex;
            gap: 14px;
            background: var(--dg-bg-surface);
            border: 1px solid var(--dg-line-mid);
            border-radius: 14px;
            padding: 18px 20px;
        }
        .nc-card__ico {
            width: 38px;
            height: 38px;
            border-radius: 9px;
            background: var(--dg-brand-ivory);
            border: 1px solid var(--dg-line-mid);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-top: 2px;
        }
        .nc-card__ico img { width: 17px; height: 17px; filter: brightness(0) saturate(1) sepia(1) hue-rotate(320deg) saturate(3); opacity: 0.75; }
        .nc-card__title {
            font-size: 0.875rem;
            font-weight: var(--fw-semi);
            color: var(--dg-ink-strong);
            margin: 0 0 4px;
        }
        .nc-card__text {
            font-size: 0.8125rem;
            color: var(--dg-ink-muted);
            line-height: 1.6;
            margin: 0;
        }
        .nc-card__text a { color: var(--dg-brand-main); text-decoration: none; }
        .nc-card__text a:hover { text-decoration: underline; }

        .nc-hotline {
            display: flex;
            gap: 14px;
            background: linear-gradient(135deg, #2E0003 0%, #4E0508 100%);
            border-radius: 14px;
            padding: 18px 20px;
            margin-top: 12px;
        }
        .nc-hotline__ico {
            width: 38px;
            height: 38px;
            border-radius: 9px;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-top: 2px;
        }
        .nc-hotline__ico img { width: 17px; height: 17px; filter: brightness(0) invert(1); opacity: 0.85; }
        .nc-hotline__title {
            font-size: 0.875rem;
            font-weight: var(--fw-semi);
            color: rgba(255,255,255,0.88);
            margin: 0 0 4px;
        }
        .nc-hotline__num {
            font-family: var(--ff-head);
            font-size: 1.0625rem;
            font-weight: var(--fw-bd);
            color: #fff;
            text-decoration: none;
            display: block;
            margin: 0 0 3px;
        }
        .nc-hotline__num:hover { text-decoration: underline; }
        .nc-hotline__note {
            font-size: 0.75rem;
            color: rgba(255,255,255,0.52);
            margin: 0;
        }
        .nc-hotline__link {
            display: inline-block;
            margin-top: 6px;
            font-size: 0.75rem;
            color: var(--dg-brand-sand);
            text-decoration: none;
        }
        .nc-hotline__link:hover { text-decoration: underline; }

        /* ── Right column — form card ── */
        .nc-form-card {
            background: var(--dg-bg-card);
            border: 1px solid var(--dg-line-mid);
            border-radius: 20px;
            padding: 36px 32px;
            box-shadow: 0 4px 24px rgba(58,0,5,0.06), 0 1px 4px rgba(58,0,5,0.04);
            position: sticky;
            top: 88px;
        }
        .nc-form-card__title {
            font-family: var(--ff-head);
            font-size: 1.125rem;
            font-weight: var(--fw-bd);
            color: var(--dg-ink-strong);
            margin: 0 0 4px;
        }
        .nc-form-card__sub {
            font-size: 0.8125rem;
            color: var(--dg-ink-subtle);
            margin: 0 0 28px;
        }

        .nc-field { margin-bottom: 18px; }
        .nc-field label {
            display: block;
            font-size: 0.8125rem;
            font-weight: var(--fw-semi);
            color: var(--dg-ink-main);
            margin-bottom: 6px;
        }
        .nc-field label .nc-req {
            color: var(--dg-brand-hot);
            margin-left: 2px;
        }
        .nc-field input,
        .nc-field select,
        .nc-field textarea {
            width: 100%;
            box-sizing: border-box;
            font-family: var(--ff-body);
            font-size: 0.9375rem;
            color: var(--dg-ink-strong);
            background: var(--dg-bg-surface);
            border: 1.5px solid var(--dg-line-mid);
            border-radius: 10px;
            padding: 11px 14px;
            outline: none;
            transition: border-color 0.18s, box-shadow 0.18s;
            -webkit-appearance: none;
            appearance: none;
        }
        .nc-field input::placeholder,
        .nc-field textarea::placeholder { color: var(--dg-ink-subtle); opacity: 0.7; }
        .nc-field input:focus,
        .nc-field select:focus,
        .nc-field textarea:focus {
            border-color: var(--dg-brand-main);
            box-shadow: 0 0 0 3px rgba(153,15,6,0.1);
        }
        .nc-field textarea { resize: vertical; min-height: 120px; line-height: 1.6; }
        .nc-select-wrap { position: relative; }
        .nc-select-wrap::after {
            content: '';
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            width: 0; height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 6px solid var(--dg-ink-subtle);
            pointer-events: none;
        }

        .nc-row { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }

        .nc-submit {
            width: 100%;
            font-family: var(--ff-head);
            font-size: 0.9375rem;
            font-weight: var(--fw-bd);
            color: #fff;
            background: linear-gradient(135deg, var(--dg-brand-main) 0%, var(--dg-brand-hot) 100%);
            border: none;
            border-radius: 10px;
            padding: 13px 20px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: opacity 0.18s, transform 0.18s;
            margin-top: 8px;
        }
        .nc-submit:hover { opacity: 0.9; transform: translateY(-1px); }
        .nc-submit img { width: 16px; height: 16px; filter: brightness(0) invert(1); }
        .nc-form-footer {
            font-size: 0.75rem;
            color: var(--dg-ink-subtle);
            margin-top: 14px;
            text-align: center;
        }
        .nc-form-footer a { color: var(--dg-brand-main); text-decoration: none; }
        .nc-form-footer a:hover { text-decoration: underline; }

        /* ── Thank you state ── */
        .nc-thanks {
            display: none;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 12px 0 4px;
        }
        .nc-thanks.is-visible { display: flex; }
        .nc-form-inner.is-hidden { display: none; }

        .nc-thanks__ico {
            width: 64px;
            height: 64px;
            border-radius: 16px;
            background: linear-gradient(135deg, var(--dg-brand-deep), var(--dg-brand-main));
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        .nc-thanks__ico img { width: 30px; height: 30px; filter: brightness(0) invert(1); }
        .nc-thanks__title {
            font-family: var(--ff-head);
            font-size: 1.25rem;
            font-weight: var(--fw-bd);
            color: var(--dg-ink-strong);
            margin: 0 0 10px;
        }
        .nc-thanks__text {
            font-size: 0.9rem;
            color: var(--dg-ink-muted);
            line-height: 1.65;
            margin: 0 0 28px;
            max-width: 320px;
        }
        .nc-thanks__back {
            font-family: var(--ff-head);
            font-size: 0.875rem;
            font-weight: var(--fw-semi);
            color: var(--dg-brand-main);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            border: 1.5px solid var(--dg-line-mid);
            border-radius: 8px;
            padding: 9px 18px;
            transition: border-color 0.18s;
        }
        .nc-thanks__back:hover { border-color: var(--dg-brand-main); }

        /* ── Responsive ── */
        @media (max-width: 900px) {
            .nc-grid {
                grid-template-columns: 1fr;
                gap: 40px;
                padding: 48px 0 64px;
            }
            .nc-form-card { position: static; }
        }
        @media (max-width: 560px) {
            .nc-form-card { padding: 28px 20px; }
            .nc-row { grid-template-columns: 1fr; }
        }
    </style>
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
                    Équipe éditoriale &middot; Support
                </p>
                <h1 class="ip-hero__title">Une question&nbsp;?<br>On vous répond.</h1>
                <p class="ip-hero__sub">Signalement d'erreur, question sur un opérateur, demande de partenariat — notre équipe éditoriale traite chaque message personnellement.</p>
            </div>
        </div>
    </div>

    <div class="dg-wrap">
        <div class="nc-grid">

            <!-- Left -->
            <div class="nc-left">
                <h2 class="nc-left__title">Plusieurs façons de nous joindre</h2>
                <p class="nc-left__sub">Choisissez le canal adapté à votre demande. Les questions liées aux jeux responsables bénéficient d'une ligne dédiée.</p>

                <div class="nc-primary">
                    <div class="nc-primary__ico">
                        <img src="/assets/icons/mail.svg" alt="">
                    </div>
                    <div>
                        <a href="mailto:contact@dragoscas.com" class="nc-primary__email">contact@dragoscas.com</a>
                        <p class="nc-primary__note">Lun–Ven, 9h30–17h00 (Paris) &middot; Réponse 24–48h ouvrées</p>
                    </div>
                </div>

                <div class="nc-cards">
                    <div class="nc-card">
                        <div class="nc-card__ico">
                            <img src="/assets/icons/alert-triangle.svg" alt="">
                        </div>
                        <div>
                            <p class="nc-card__title">Signaler une erreur</p>
                            <p class="nc-card__text">Information inexacte ou obsolète&nbsp;? Précisez la page et l'erreur — nous corrigeons sous 48h ouvrées et mettons à jour la date de révision.</p>
                        </div>
                    </div>
                    <div class="nc-card">
                        <div class="nc-card__ico">
                            <img src="/assets/icons/slash.svg" alt="">
                        </div>
                        <div>
                            <p class="nc-card__title">Comptes joueurs</p>
                            <p class="nc-card__text">Pour tout problème lié à un compte, contactez directement le service client de l'opérateur concerné. Dragoscas n'a pas accès aux comptes joueurs.</p>
                        </div>
                    </div>
                    <div class="nc-card">
                        <div class="nc-card__ico">
                            <img src="/assets/icons/message-circle.svg" alt="">
                        </div>
                        <div>
                            <p class="nc-card__title">Partenariat éditorial</p>
                            <p class="nc-card__text">Demande de collaboration, reproduction de contenu ou question presse — utilisez le formulaire ou écrivez-nous directement.</p>
                        </div>
                    </div>
                </div>

                <div class="nc-hotline">
                    <div class="nc-hotline__ico">
                        <img src="/assets/icons/phone.svg" alt="">
                    </div>
                    <div>
                        <p class="nc-hotline__title">Aide au jeu responsable</p>
                        <a href="tel:0974751313" class="nc-hotline__num">09 74 75 13 13</a>
                        <p class="nc-hotline__note">7j/7 de 8h à 2h &middot; appel non surtaxé</p>
                        <a href="https://www.joueurs-info-service.fr/" rel="nofollow noreferrer" target="_blank" class="nc-hotline__link">joueurs-info-service.fr →</a>
                    </div>
                </div>
            </div>

            <!-- Right — form -->
            <div class="nc-form-card">

                <div class="nc-form-inner" id="ncFormInner">
                    <p class="nc-form-card__title">Formulaire de contact</p>
                    <p class="nc-form-card__sub">Tous les champs marqués d'un <span style="color:var(--dg-brand-hot)">*</span> sont obligatoires.</p>

                    <div class="nc-row">
                        <div class="nc-field">
                            <label for="ncNom">Nom<span class="nc-req">*</span></label>
                            <input type="text" id="ncNom" name="nom" placeholder="Votre nom" autocomplete="name" required>
                        </div>
                        <div class="nc-field">
                            <label for="ncEmail">Email<span class="nc-req">*</span></label>
                            <input type="email" id="ncEmail" name="email" placeholder="votre@email.com" autocomplete="email" required>
                        </div>
                    </div>

                    <div class="nc-field">
                        <label for="ncSujet">Sujet<span class="nc-req">*</span></label>
                        <div class="nc-select-wrap">
                            <select id="ncSujet" name="sujet" required>
                                <option value="" disabled selected>Choisissez un sujet</option>
                                <option value="erreur">Signaler une erreur</option>
                                <option value="operateur">Question sur un opérateur</option>
                                <option value="partenariat">Demande de partenariat</option>
                                <option value="rgpd">Données personnelles (RGPD)</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>
                    </div>

                    <div class="nc-field">
                        <label for="ncMessage">Message<span class="nc-req">*</span></label>
                        <textarea id="ncMessage" name="message" placeholder="Décrivez votre demande..." required></textarea>
                    </div>

                    <button type="button" class="nc-submit" id="ncSubmit">
                        <img src="/assets/icons/arrow-right.svg" alt="">
                        Envoyer le message
                    </button>
                    <p class="nc-form-footer">Données utilisées uniquement pour répondre à votre demande. <a href="/confidentialite-rgpd/">Politique de confidentialité</a>.</p>
                </div>

                <div class="nc-thanks" id="ncThanks">
                    <div class="nc-thanks__ico">
                        <img src="/assets/icons/check-circle.svg" alt="">
                    </div>
                    <p class="nc-thanks__title">Message envoyé !</p>
                    <p class="nc-thanks__text">Merci pour votre message. Notre équipe éditoriale vous répondra dans un délai de 24 à 48 heures ouvrées.</p>
                    <a href="/" class="nc-thanks__back">
                        <img src="/assets/icons/arrow-right.svg" alt="" style="width:14px;height:14px;transform:rotate(180deg);filter:none;opacity:0.6;">
                        Retour à l'accueil
                    </a>
                </div>

            </div>
        </div>
    </div>

</main>

<?php include '../footer.php'; ?>
<script src="/assets/js/age-gate.js" defer></script>
<script src="/assets/js/cookie-banner.js" defer></script>
<script>
    (function () {
        var btn = document.getElementById('ncSubmit');
        if (!btn) return;
        btn.addEventListener('click', function () {
            var nom     = document.getElementById('ncNom');
            var email   = document.getElementById('ncEmail');
            var sujet   = document.getElementById('ncSujet');
            var message = document.getElementById('ncMessage');
            var fields  = [nom, email, sujet, message];
            var valid   = true;

            fields.forEach(function (f) {
                f.style.borderColor = '';
                f.style.boxShadow   = '';
            });

            fields.forEach(function (f) {
                if (!f.value.trim()) {
                    f.style.borderColor = 'var(--dg-brand-hot)';
                    f.style.boxShadow   = '0 0 0 3px rgba(210,60,12,0.15)';
                    valid = false;
                }
            });

            if (email.value.trim() && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim())) {
                email.style.borderColor = 'var(--dg-brand-hot)';
                email.style.boxShadow   = '0 0 0 3px rgba(210,60,12,0.15)';
                valid = false;
            }

            if (!valid) return;

            document.getElementById('ncFormInner').classList.add('is-hidden');
            document.getElementById('ncThanks').classList.add('is-visible');
            document.querySelector('.nc-form-card').scrollIntoView({ behavior: 'smooth', block: 'center' });
        });
    })();
</script>
</body>
</html>