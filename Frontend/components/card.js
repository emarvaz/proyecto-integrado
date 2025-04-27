import { Component, define } from 'component';

class Card extends Component {
    static shadow = false;
    static templateRoute = '/templates/card.html';
    static attributes = {
    }
    
    constructor() {
        super();
    }

    async connectedCallback() {
        await super.connectedCallback();
    }
}

define('card-component', Card);
