
function handleflip(card) {

    if (card.classList.contains('is-flipped')) {
        card.classList.remove("is-flipped")
    }
    else {
        card.classList.add("is-flipped");
    }
}