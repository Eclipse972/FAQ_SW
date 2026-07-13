/**
 * gerer-spotlight.js
 * Système d'aide contextuelle : clic sur un mot .mot-spotlight
 * → met en évidence la zone correspondante (box-shadow sur tout le reste).
 * Clic n'importe où → fermeture.
 *
 * Correspondance data-spotlight → sélecteur CSS :
 *   onglets        → #onglets
 *   menu           → #menu
 *   section-article→ section
 *   aside-connexes → aside
 */

(function () {
    // Table de correspondance data-spotlight → sélecteur DOM
    const ZONES = {
        'onglets':         '#onglets',
        'menu':            '#menu',
        'section-article': 'section',
        'aside-connexes':  'aside',
    };

    let zoneActive = null; // élément DOM actuellement mis en évidence

    // ── Fermeture du spotlight ────────────────────────────────────────────────
    function fermerSpotlight() {
        if (!zoneActive) return;
        zoneActive.classList.remove('spotlight-actif');
        // Restituer position si elle avait été forcée
        if (zoneActive.dataset.spotlightPositionForcee) {
            zoneActive.style.position = '';
            delete zoneActive.dataset.spotlightPositionForcee;
        }
        zoneActive = null;
    }

    // ── Ouverture du spotlight ────────────────────────────────────────────────
    function ouvrirSpotlight(cle) {
        const selecteur = ZONES[cle];
        if (!selecteur) return;

        const element = document.querySelector(selecteur);
        if (!element) return;

        // Fermer un éventuel spotlight déjà ouvert
        fermerSpotlight();

        // S'assurer que l'élément crée un contexte d'empilement (nécessaire pour z-index)
        const positionActuelle = getComputedStyle(element).position;
        if (positionActuelle === 'static') {
            element.style.position = 'relative';
            element.dataset.spotlightPositionForcee = '1';
        }

        element.classList.add('spotlight-actif');
        zoneActive = element;
    }

    // ── Écouteurs ─────────────────────────────────────────────────────────────

    // Clic sur un mot déclencheur
    document.addEventListener('click', function (e) {
        const mot = e.target.closest('.mot-spotlight');

        if (mot) {
            e.stopPropagation(); // ne pas déclencher la fermeture immédiatement
            const cle = mot.dataset.spotlight;

            if (zoneActive && zoneActive === document.querySelector(ZONES[cle])) {
                // Clic sur le même mot → bascule (fermeture)
                fermerSpotlight();
            } else {
                ouvrirSpotlight(cle);
            }
            return;
        }

        // Clic ailleurs → fermeture
        fermerSpotlight();
    });

    // Touche Échap → fermeture
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') fermerSpotlight();
    });

})();
