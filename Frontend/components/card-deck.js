import { Component, define } from 'component';
import 'card';

class CardDeck extends Component {
    static shadow = false;
    static templateRoute = '/templates/card-deck.html';
    static attributes = {
        dataCards: {
            type: Number,
        },
        dataDisplayed: {
            type: Boolean,
        }
    }
    
    constructor() {
        super();
    }

    async connectedCallback() {
        await super.connectedCallback();

        this.dataCards = 100;
        this.dataDisplayed = true;

        document.addEventListener('click', function () {
            this.dataDisplayed = !this.dataDisplayed;
        }.bind(this));
    }

    handleDataCards() {
        const output = this.querySelector('[data-output-cards]');
        output.textContent = '';

        for (let i = 0; i < this.dataCards; i++) {
            const card = document.createElement('card-component');

            output.appendChild(card);
        }
    }

    handleDataDisplayed() {
        const hiddenClass = 'hidden';

        if (!this.dataDisplayed) {
            this.classList.add(hiddenClass);
        } else {
            this.classList.remove(hiddenClass);
        }
    }
}

define('card-deck-container', CardDeck);
