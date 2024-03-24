import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/reset.css'
import './styles/app.css';

const $icon = document.querySelector('.icon')
const $arrow = document.querySelector('.arrow')

$icon.onclick = () => {
    $arrow.animate([
        {left: '0'},
        {left: '10px'},
        {left: '0'}
    ],{
        duration: 700,
        iterations: Infinity
    });
}
console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');
