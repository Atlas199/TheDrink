const text = ["I work until beer o'clock -Stephen King"];
let count = 0;
let index = 0;
let currentText = '';
let letter = '';

(function type() {

    currentText = text[count];
    letter = currentText.slice(0, ++index);

    document.querySelector('.typing').textContent = letter;
    if (letter.length === currentText.length) {
        count++;
        index = 0;
    }

    setTimeout(type, 100);

}());