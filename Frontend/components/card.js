import { Component, defineElement } from 'component';

class Card extends Component {
    static shadow = false;
    static templateRoute = '/templates/card.html';
    static styleRoute = '/assets/styles/components/card.css';
    static attributes = {}
    
    constructor() {
        super();
    }

    async connectedCallback() {
        await super.connectedCallback();
    }
}

defineElement('card-component', Card);