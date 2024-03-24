import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/reset.css'
import './styles/app.css';

const arrowToDown = document.querySelector('.arrowToDown');
arrowToDown.addEventListener('click', () => {
    const mainContent = document.querySelector('.pages');
    mainContent.scrollIntoView({ behavior: 'smooth' });
});

// Fonction générique pour ajouter un écouteur d'événement à un onglet
function addTabClickListener(tabClassName, targetId) {
    const tab = document.querySelector(`.${tabClassName}`);
    tab.addEventListener('click', () => {
        const targetPage = document.querySelector(`#${targetId}`);
        targetPage.scrollIntoView({ behavior: 'smooth' });
    });
}

// Ajout des écouteurs d'événements pour chaque onglet
addTabClickListener('about-tab', 'about');
addTabClickListener('achievements-tab', 'achievements');
addTabClickListener('contact-tab', 'contact');
addTabClickListener('arrowToUpDiv', 'main-content')



const navTabs = document.querySelector('.nav-tabs');
const isMobile = window.innerWidth <= 768; // Check for mobile based on width

function adjustNavTabsPositionY() {

    if (isMobile) {
        navTabs.style.bottom = `0%`;
    } else {
        /* A la base partis dans le CSS pour faire {top:50%; transform:translateY(-50%)}
         * Le translate faisait sortir de son parent navTabs. L'idée est donc de calculer ce recul
         * à l'intérieur de top, pour que l'élément ne remonte jamais hors du parent.
         * On peut calculer dynamiquement cette valeur comme ci-dessous, ce qui permet de modifier
         * la taille des sous-éléments sans perdre les proportions
         */
        navTabs.style.top = `calc(50% - ${navTabs.scrollHeight / 2}px)`;
    }
}

// Call the function on initial load and window resize
adjustNavTabsPositionY();

// Sélectionnez l'élément arrowToUpDiv
const arrowToUpDiv = document.querySelector('.arrowToUpDiv');
// Sélectionnez l'élément main
const mainContent = document.getElementById('main-content');

// Fonction pour gérer l'affichage de la flèche
function toggleArrowVisibility() {
    // Vérifiez la position de défilement
    if (window.scrollY > mainContent.clientHeight) {
        // Si la position de défilement est supérieure à la hauteur de l'élément main
        // alors affichez la flèche
        arrowToUpDiv.style.display = 'block';
    } else {
        // Sinon, masquez la flèche
        arrowToUpDiv.style.display = 'none';
    }
}

// Ajoutez un gestionnaire d'événement pour le chargement de la page
window.addEventListener('DOMContentLoaded', toggleArrowVisibility);

// Ajoutez un gestionnaire d'événement pour le défilement
window.addEventListener('scroll', toggleArrowVisibility);

// const navTabs = document.querySelector('.nav-tabs');
// navTabs.style.top = `calc(50% - ${navTabs.scrollHeight /2}px)`


// Fonction pour vérifier si un élément est visible dans la fenêtre
// function isElementInViewport(el) {
//     const rect = el.getBoundingClientRect();
//     return (
//         rect.top >= 0 &&
//         rect.left >= 0 &&
//         rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
//         rect.right <= (window.innerWidth || document.documentElement.clientWidth)
//     );
// }
//
// // Fonction pour vérifier si à la fois main et nav-tabs sont visibles dans la fenêtre
// function areBothElementsVisible() {
//     const main = document.querySelector('main');
//     const navTabs = document.querySelector('.nav-tabs');
//
//     if (main && navTabs) {
//         return isElementInViewport(main) && isElementInViewport(navTabs);
//     }
//
//     return false;
// }
//
// // Exécute la vérification au chargement initial de la page
// document.addEventListener("DOMContentLoaded", function() {
//     const navTabs = document.querySelector('.nav-tabs');
//     const arrowToUp = document.querySelector('.arrowToUpDiv')
//     if (areBothElementsVisible()) {
//         navTabs.style.display = 'none'
//         arrowToUp.style.display = 'none'
//     }
// });


