const searchInputHome = document.getElementById('searchInputHome');
const searchResults = document.getElementById('searchResults');

searchInputHome.addEventListener('input', function () {
    const query = this.value.trim();

    if (query === '') {
        searchResults.innerHTML = '';
        return;
    }

    fetch(`/search?query=${query}`)
        .then(response => response.json())
        .then(data => {
            displayResults(data);
        });
});

searchInputHome.addEventListener('keypress', function (event) {
    console.log('Keypress event triggered');
    if (event.key === 'Enter') {
        event.preventDefault();
        const query = this.value.trim();
        if (query !== '') {
            fetch(`/search?query=${query}`)
                .then(response => response.json())
                .then(data => {
                    displayResults(data);
                });
        }
    }
});
