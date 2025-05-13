import { ArtElement, defineElement } from 'art';

class Card extends ArtElement {
    static templateRoute = '/templates/card.html';
    static styleRoute = '/assets/styles/components/card.css';
    static attributes = {
        index: {
            type: Number,
            prefix: 'art-'
        },
        selected: {
            type: Boolean,
            prefix: 'art-'
        }
    }
    
    constructor() {
        super();
    }

    async connectedCallback() {
        await super.connectedCallback();

        const container = this.querySelector('.card');

        this.assignIndex(container);
        this.addEventListener('click', function () {
            this.selected = true;
        });
    }

    assignIndex(container) {
        const indexOutput = container.outputSelectorAll('index');
        indexOutput.forEach(function (element) {
            element.textContent = this.index;
        }.bind(this));
    }
}

defineElement('art-card', Card);
