import { ArtElement, defineElement } from 'art';

class Card extends ArtElement {
    static templateRoute = '/templates/card.html.twig';
    static styleRoute = '/assets/styles/components/card.css';
    static attributes = {
        name: {
            type: String,
            prefix: '_'
        },
        description: {
            type: String,
            prefix: '_'
        },
        health: {
            type: Number,
            prefix: '_'
        },
        abilities: {
            type: String,
            prefix: '_'
        },
        index: {
            type: Number,
            prefix: '_'
        },
        selected: {
            type: Boolean,
            prefix: '_'
        }
    }
    
    constructor() {
        super();
    }

    async connectedCallback() {
        await super.connectedCallback();

        this.contextSelector('.card-name', this.name);
        this.contextSelector('.card-description', this.description);
        this.contextSelector('.card-health', this.health);
        this.contextSelector('.card-abilities', this.abilities);

        this.contextSelectorAll('.card-index', this.index);

        this.addEventListener('click', function () {
            this.selected = true;
        });
    }
}

defineElement('card-component', Card);
