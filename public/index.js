/**
 * Los imports se hacen desde un importmap en index.html.
 * El objetivo es separarlo en un archivo aparte para no tener los imports
 * definidos directamente en el HTML.
 */

import './components/router.js';
import './components/board.js';
import './components/card-deck.js';
import './components/card.js';

const router = document.querySelector('art-router');

function navigate(path) {
    router.navigateTo(path);
}

window.navigate = navigate;
window.addEventListener('DOMContentLoaded', function () {
    const router = document.querySelector('art-router');

    if (router) {
        router.addRoute('/', 'art-card-deck');
        router.addRoute('/board', 'art-board');
        router.loadRoute();
    }

    const navListItemElements = document.querySelectorAll('nav > ul > li');
    navListItemElements.forEach(function (child) {
        if (child.hasAttribute('data-path')) {
            const path = child.getAttribute('data-path');

            child.addEventListener('click', function () {
                router.navigateTo(path);
            });
        }
    });
});
