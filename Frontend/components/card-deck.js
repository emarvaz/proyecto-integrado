import { Component, define } from 'component';
import 'card';

class CardDeck extends Component {
    static shadow = false;
    static templateRoute = '/templates/card-deck.html';
    static attributes = {
        cards: {
            data: true,
            default: 10,
            type: Number
        },
        displayed: {
            data: true,
            default: true,
            type: Boolean
        }
    };
    
    constructor() {
        super();
    }

    async connectedCallback() {
        await super.connectedCallback();

        this.addEventListener('click', function () {
            this.toggleAttribute('displayed');
        }.bind(this));
    }

    handleCards() {
        const output = this.querySelector('[output-cards]');
        output.textContent = '';

        for (let i = 0; i < this.cards; i++) {
            const card = document.createElement('card-component');

            output.appendChild(card);
        }
    }

    handleDisplayed() {
        const displayedClass = 'displayed';

        if (this.hasAttribute('displayed')) {
            this.classList.add(displayedClass);
        } else {
            this.classList.remove(displayedClass);
        }
    }
}

define('card-deck-container', CardDeck);
