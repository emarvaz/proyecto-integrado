import { Component, define } from 'component';
import 'card';

class CardDeck extends Component {
    static shadow = false;
    static templateRoute = '/templates/card-deck.html';
    static attributes = {
        cards: {
            type: Number,
            prefix: 'data-'
        },
        cardsDisplayed: {
            type: Boolean,
            prefix: 'data-'
        }
    }
    
    constructor() {
        super();
    }

    async connectedCallback() {
        await super.connectedCallback();

        this.cards = 100;
        this.cardsDisplayed = true;

        document.addEventListener('click', function () {
            this.cardsDisplayed = !this.cardsDisplayed;
        }.bind(this));
    }

    handleCards() {
        const output = this.querySelector('[data-output-cards]');
        output.textContent = '';

        for (let i = 0; i < this.cards; i++) {
            const card = document.createElement('card-component');

            output.appendChild(card);
        }
    }

    handleCardsDisplayed() {
        const hiddenClass = 'hidden';

        if (!this.cardsDisplayed) {
            this.classList.add(hiddenClass);
        } else {
            this.classList.remove(hiddenClass);
        }
    }
}

define('card-deck-container', CardDeck);
