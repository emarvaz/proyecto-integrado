document.addEventListener('DOMContentLoaded', function () {
    const cardDeckContainer = document.querySelector('.card-deck__container');
    const cardsContainer = document.querySelector('.cards__container');
    const selectedClass = 'card-deck__card--selected';

    const cards = cardsContainer.querySelectorAll('.card');

    cards.forEach((card) => {
        const checkbox = card.querySelector('input[type="checkbox"]');

        if (checkbox.checked) {
            const firstSlot = cardDeckContainer.querySelector('article.card-slot:first-of-type');
            if (firstSlot) {
                firstSlot.replaceWith(card);
                card.classList.add(selectedClass);
            }
        }

        checkbox.addEventListener('change', function (event) {
            if (event.target.checked) {
                const firstSlot = cardDeckContainer.querySelector('article.card-slot:first-of-type');
                if (firstSlot) {
                    firstSlot.replaceWith(card);
                    card.classList.add(selectedClass);
                } else {
                    event.target.checked = false;
                }
            } else {
                cardsContainer.prepend(card);
                card.classList.remove(selectedClass);

                const newSlot = document.createElement('article');
                newSlot.classList.add('card-slot');
                cardDeckContainer.appendChild(newSlot);
            }
        });
    });
});