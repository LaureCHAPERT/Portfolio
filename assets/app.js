import './bootstrap.js';
import PerfectScrollbar from "perfect-scrollbar";

/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/reset.css'
import './styles/app.css';

const navTabs = document.querySelector('.nav-tabs');
const arrowToDown = document.querySelector('.arrowToDown');
arrowToDown.addEventListener('click', () => {
    const mainContent = document.querySelector('.pages');
    mainContent.scrollIntoView({ behavior: 'smooth' });
});

// Fonction générique pour ajouter un écouteur d'événement à un onglet
function addTabClickListener(tabClassName, targetId) {
    const tab = document.querySelector(`.${tabClassName}`);
    tab.addEventListener('click', () => {
        // Supprimer la classe "active" de tous les onglets d'abord
        document.querySelectorAll('.nav-tab').forEach(tab => {
            tab.classList.remove('active');
        });
        // Ajouter la classe "active" à l'onglet cliqué
        tab.classList.add('active');
        const targetPage = document.querySelector(`#${targetId}`);
        targetPage.scrollIntoView({ behavior: 'smooth' });
    });
}

// Ajout des écouteurs d'événements pour chaque onglet
addTabClickListener('about-tab', 'about');
addTabClickListener('achievements-tab', 'achievements');
addTabClickListener('contact-tab', 'contact');
addTabClickListener('arrowToUpDiv', 'main-content');


// Exécute la vérification au chargement initial de la page
['DOMContentLoaded', 'scroll'].forEach(e => {
    document.addEventListener(e, showNavOptions);
})

function showNavOptions () {
    // Retourne si notre scroll est plus bas que la hauteur totale de l'écran.
    // Le cas échéant, on a totalement quitté le block #main-content
    const isMainPageVisible = window.scrollY < window.innerHeight
    const arrowToUp = document.querySelector('.arrowToUpDiv')

    if (isMainPageVisible) {
        navTabs.style.display = 'none'
        arrowToUp.style.display = 'none'
    } else {
        navTabs.style.display = 'flex'
        arrowToUp.style.display = 'block'
    }
}

function adjustNavTabsPositionY() {
    const isMobile = window.innerWidth <= 768; // Check for mobile based on width

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

const form = document.getElementById('contact-form');
form.addEventListener('submit', (event) => {
    event.preventDefault();

    const formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        body: formData,
    })
        .then(response => response.json())
        .then(data => {

            console.log(data);

        })
        .catch(error => {
            console.error(error);
        });
});

//ScrollBar by PerfectScrollBar
const container =
    document.querySelector('.contact');
const ps = new PerfectScrollbar(container, {
    wheelSpeed: 2,
    wheelPropagation: true,
    minScrollbarLength: 20
});
const container2 =
    document.querySelector('article');
const ps2 = new PerfectScrollbar(container2, {
    wheelSpeed: 2,
    wheelPropagation: true,
    minScrollbarLength: 20
});
