// "/piece/esquisse-2d" -> ['', 'piece', 'esquisse-2d']
const segments = window.location.pathname.split('/');

const urlOnglet = segments[1] ? '/' + segments[1] : null;
const urlMenu = segments[2] ? urlOnglet + '/' + segments[2] : null;
const urlSousMenu = segments[3] ? urlMenu + '/' + segments[3] : null;

// parcours des onglets
const listeOnglets = document.querySelectorAll('#onglets > ul > li');

listeOnglets.forEach(li => {
    const lien = li.querySelector(':scope > a');
    if (!lien) return;

    if (lien.getAttribute('href') === urlOnglet) {
        lien.id = 'onglet-actif';
    }
});

// parcours des categories (niveau 1 du menu)
const listeCategories = document.querySelectorAll('#menu > ul > li');

listeCategories.forEach(li => {
    const lien = li.querySelector(':scope > a');
    if (!lien) return;

    const href = lien.getAttribute('href');

    // Actif si c'est le lien racine de l'onglet (ex. "/accueil")
    // ou la catégorie du niveau 1 (ex. "/piece/esquisse-2d")
    if (href === urlOnglet || href === urlMenu) {
        lien.id = 'menu-actif';

        // On affiche le sous-menu s'il existe
        const sousMenu = li.querySelector(':scope > ul');
        if (sousMenu) {
            sousMenu.style.display = 'block';

            // parcours des articles (niveau 2 du menu)
            sousMenu.querySelectorAll(':scope > li').forEach(liEnfant => {
                const lienEnfant = liEnfant.querySelector(':scope > a');
                if (!lienEnfant) return;

                if (lienEnfant.getAttribute('href') === urlSousMenu) {
                    lienEnfant.id = 'sous-menu-actif';
                }
            });
        }
    }
});