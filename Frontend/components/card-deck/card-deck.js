import Component from 'Component';

class CardDeck extends Component {
    static shadow = false;
    static templateRoute = '/components/card-deck/card-deck.html';
    static attributes = {
        cards: {
            default: 10,
            type: Number
        },
        displayed: {
            type: Boolean
        }
    }
    
    constructor() {
        super();
    }

    async connectedCallback() {
        await super.connectedCallback();

        this.addEventListener('click', function () {
            this.toggleAttribute('displayed')
        }.bind(this));
    }

    handleCards() {
        const output = this.querySelector('[output-cards]');
        output.textContent = '';

        for (let i = 0; i < this.cards; i++) {
            const div = document.createElement('div');
            div.textContent = `Carta ${i + 1}`;

            output.appendChild(div);
        }
    }

    handleDisplayed() {
        if (this.hasAttribute('displayed')) {
            this.style.color = 'white';
            this.style.backgroundColor = 'blue';
        } else {
            this.style.color = 'black';
            this.style.backgroundColor = 'coral';
        }
    }
}

CardDeck.templatePromise.then(function () {
    if (!customElements.get('card-deck-container')) {
        customElements.define('card-deck-container', CardDeck);
    }
});
