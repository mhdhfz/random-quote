// get element
const btnNextQuote = document.getElementById('nextQuote');

// event
btnNextQuote.addEventListener('click', getNextQuote);

// function
function getNextQuote() {
    const url = 'random.php'
    
    fetch(url)
        .then(response => response.json())
        .then(data => {
            showQoute(data)
        });
}

function showQoute(data) {
    // get element
    const quoteTextEl = document.getElementById('quoteText')
    const quoteAuthorEl = document.getElementById('quoteAuthor')

    quoteAuthorEl.innerHTML =`- ${data.author}`;
    quoteTextEl.innerHTML =`&ldquo;${data.text}&rdquo;`;
}