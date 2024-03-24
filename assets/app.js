import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/reset.css'
import './styles/app.css';

const arrow = document.querySelector('.arrow');
arrow.addEventListener('click', () => {
    const mainContent = document.querySelector('.pages');
    mainContent.scrollIntoView({ behavior: 'smooth' });
});

    const navTabs = document.querySelector('.nav-tabs');
    navTabs.style.top = `calc(50% - ${navTabs.scrollHeight /2}px)`
    console.log(navTabs.innerHeight)


console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');
