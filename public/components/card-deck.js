import { ArtElement, defineElement } from 'art';
import 'card';

class CardDeck extends ArtElement {
    static templateRoute = '/templates/card-deck.html';
    static styleRoute = '/assets/styles/components/card-deck.css';
    static attributes = {
        cardCount: {
            type: Number,
            prefix: 'data-'
        }
    }
    
    constructor() {
        super();
    }

    async connectedCallback() {
        await super.connectedCallback();

        const container = this.querySelector('.container');

        this.loadCards(container);
    }

    async loadCards(container) {
        try {
            const response = await fetch('/data/data.json', { cache: 'no-store' });
            const content = await response.json();
        
            this.cardCount = content.cards.count;

            if (!this.cardCount) {
                throw new Error('no se encontró el número de cartas en la respuesta');
            }
        } catch (error) {
            console.error('Error al cargar las cartas:', error.message);
        }

        const cardCountOutput = container.outputSelector('card-count');
        cardCountOutput.textContent = this.cardCount;

        const cardsOutput = container.outputSelector('cards');
        this.appendChildren(cardsOutput, 'art-card');
    }

    appendChildren(container, child) {
        container.replaceChildren();

        for (let i = 0; i < this.cardCount; i++) {            
            const childElement = document.createElement(child);
            childElement.index = i + 1;

            container.appendChild(childElement);
        }
    }
}

defineElement('art-card-deck', CardDeck);
