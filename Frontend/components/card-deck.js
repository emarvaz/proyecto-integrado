import { Component, defineElement, extendElement } from 'component';
import 'card';

class CardDeck extends Component {
    static templateRoute = '/templates/card-deck.html';
    static styleRoute = '/assets/styles/components/card-deck.css';
    static attributes = {
        cards: {
            type: Number,
            prefix: 'data-',
        },
        displayed: {
            type: Boolean,
            prefix: 'data-'
        }
    }
    
    constructor() {
        super();
    }

    async connectedCallback() {
        await super.connectedCallback();

        this.displayed = true;

        document.addEventListener('click', function () {
            this.displayed = !this.displayed;
        }.bind(this));
    }

    async handleCards() {
        try {
            const response = await fetch('/data/data.json', { cache: 'no-store' });
            const content = await response.json();
        
            this.cards = content.cards.number;

            if (!this.cards) {
                throw new Error('No se encontró el número de cartas en la respuesta.');
            }
        } catch (error) {
            console.error('Error al manejar las cartas:', error.message);
        }
        
        const output = this.querySelector('[data-output-cards]');
        
        output.replaceChildren();

        for (let i = 0; i < this.cards; i++) {
            const cardComponentElement = document.createElement('card-component');

            output.appendChild(extendElement('li', cardComponentElement));
        }
    }

    handleDisplayed() {
        const hiddenClass = 'hidden';

        if (!this.displayed) {
            this.classList.add(hiddenClass);
        } else {
            this.classList.remove(hiddenClass);
        }
    }
}

defineElement('card-deck-container', CardDeck);
