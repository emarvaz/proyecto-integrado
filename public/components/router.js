import { ArtElement, defineElement } from 'art';

class Router extends ArtElement {
    constructor() {
        super();

        this.routes = [];
    }

    async connectedCallback() {
        await super.connectedCallback();

        window.addEventListener('popstate', function () {
            this.loadRoute()
        }.bind(this));
    }

    addRoute(path, element) {
        this.routes.push({ path, element });
    }

    navigateTo(path) {
        history.pushState(null, '', path);

        this.loadRoute();
    }

    loadRoute() {
        const path = window.location.pathname;
        const route = this.routes.find(function (route) {
            return route.path === path;
        });

        if (route) {
            const element = document.createElement(route.element);

            this.replaceChildren();
            this.appendChild(element);
        }
    }
}

defineElement('art-router', Router);