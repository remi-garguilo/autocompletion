document.addEventListener("DOMContentLoaded", function (){

    let form = document.querySelector("form");
    const input = document.querySelector('#search');
    const suggestions = document.querySelector('.suggestions ul');
    let donnee = new FormData(form);
    // input.addEventListener("keyup", function (e) {
        fetch('sql/search-sql.php', {
            method: 'POST',
            body: donnee,
        })
        .then( (response) => response.json())
        .then( (response) => {
            console.log(response);
                response.forEach((element) => {

                function search(str) {
                    let results = [];
                    const val = str.toLowerCase();

                    for (let i = 0; i < response.length; i++) {
                        console.log(response[i].nom);
                        let nom = response[i].nom;
                        if (nom.toLowerCase().indexOf(val) > -1) {
                            results.push(nom);
                        }
                    }
                    console.log(results);

                    return results;
                }

                function searchHandler(e) {
                    const inputVal = e.currentTarget.value;
                    let results = [];
                    if (inputVal.length > 0) {
                        results = search(inputVal);
                    }
                    showSuggestions(results, inputVal);
                }

                function showSuggestions(results, inputVal) {

                    suggestions.innerHTML = '';

                    if (results.length > 0) {
                        for (i = 0; i < results.length; i++) {
                            let item = results[i];
                            // Highlights only the first match
                            // TODO: highlight all matches
                            const match = item.match(new RegExp(inputVal, 'i'));
                            item = item.replace(match[0], `<strong>${match[0]}</strong>`);
                            suggestions.innerHTML += `<li>${item}</li>`;
                        }
                        suggestions.classList.add('has-suggestions');
                    } else {
                        results = [];
                        suggestions.innerHTML = '';
                        suggestions.classList.remove('has-suggestions');
                    }
                }

                function useSuggestion(e) {
                    input.value = e.target.innerText;
                    (document.location.href = `pages/recherche.php?search=${input.value}`)
                    input.focus();
                    suggestions.innerHTML = '';
                    suggestions.classList.remove('has-suggestions');
                }
                input.addEventListener('keyup', searchHandler);
                suggestions.addEventListener('click', useSuggestion);
            })
            })
        // })
})