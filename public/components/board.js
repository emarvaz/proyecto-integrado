import { ArtElement, defineElement } from 'art';

class Board extends ArtElement {
    static templateRoute = '/templates/board.html';
    static styleRoute = '/assets/styles/components/board.css';
    static attributes = {
        width: {
            type: Number,
            prefix: 'art-'
        },
        height: {
            type: Number,
            prefix: 'art-'
        }
    }
    
    constructor() {
        super();
    }

    async connectedCallback() {
        await super.connectedCallback();

        this.create(this.width, this.height);
    }

    create(width, height) {
        const containerElement = this.querySelector('.board');

        for (let heightIterator = 0; heightIterator < height; heightIterator++) {
            const rowElement = document.createElement('div');

            for (let widthIterator = 0; widthIterator < width; widthIterator++) {
                const columnElement = document.createElement('div');
                columnElement.classList.add('cell');

                rowElement.appendChild(columnElement);
            }

            containerElement.appendChild(rowElement);
        }
    }
}

defineElement('art-board', Board);
