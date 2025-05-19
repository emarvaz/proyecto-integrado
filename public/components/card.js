import { ArtElement, defineElement } from 'art';

class Card extends ArtElement {
    static templateRoute = '/templates/card.html';
    static styleRoute = '/assets/styles/components/card.css';
    static attributes = {
        index: {
            type: Number,
            prefix: '_'
        },
        name: {
            type: String,
            prefix: '_'
        },
        description: {
            type: String,
            prefix: '_'
        },
        // health: {
        //     type: Number,
        //     prefix: '_'
        // },
        // abilities: {
        //     type: String,
        //     prefix: '_'
        // },
        // type: {
        //     type: String,
        //     prefix: '_'
        // },
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

        const container = this.querySelector('.card');

        const indexOutput = container.querySelectorAll('.card-index');
        indexOutput.forEach(function (element) {
            element.textContent = this.index;
        }.bind(this));

        const nameOutput = container.querySelector('.card-name');
        nameOutput.textContent = this.name;

        const descriptionOutput = container.querySelector('.card-description');
        descriptionOutput.textContent = this.description;

        this.addEventListener('click', function () {
            this.selected = true;
        });
    }
}

defineElement('card-component', Card);
