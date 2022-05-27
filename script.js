document.addEventListener('DOMContentLoaded', (event) => {
    let input = document.querySelector('input');
    let sectionUp = document.querySelector('#sectionUp');
    let sectionDown = document.querySelector('#sectionDown');

    console.log(sectionUp);

    input.addEventListener('input', function() {

        // Si l'input est vide, alors on efface la liste
        if (input.value.length == 0) {

            var items = document.querySelectorAll('#sectionDown a')
            var items2 = document.querySelectorAll('#sectionUp a')

            items.forEach(element => element.remove())
            items2.forEach(element => element.remove())


        } else { //si l'input n'est pas vide, on récupère le tableau avec les résultats

            var data = new FormData();

            data.append('input', input.value)

            fetch('traitement_recherche.php?search=' + input.value, {
                method: 'GET',
                body: null

            }).then(response => {
                return response.json();

            }).then(response => {

                var items = document.querySelectorAll('#sectionDown a');
                var items2 = document.querySelectorAll('#sectionUp a');

                var p = document.querySelectorAll('#sectionDown p')
                var p2 = document.querySelectorAll('#sectionUp p')



                //Permet de reset la liste des suggestions à chaque fois que l'input est vidé ou modifié
                items.forEach(element => element.remove())
                p.forEach(element => element.remove())

                items2.forEach(element => element.remove())
                p2.forEach(element => element.remove())


                for (let i = 0; i < response['start'].length; i++) {
                    let a = document.createElement('a')
                    a.innerText = response['start'][i]['nom']
                    a.href = 'recherche.php?search=' + response['start'][i]['nom']
                    a.classList.add('dropdown-item')
                    sectionUp.appendChild(a)
                }

                for (let j = 0; j < response['contain'].length; j++) {
                    let a = document.createElement('a')
                    a.innerText = response['contain'][j]['nom']
                    a.href = 'recherche.php?search=' + response['contain'][j]['nom']
                    a.classList.add('dropdown-item')
                    sectionDown.appendChild(a)
                }

            })

        }

    })
})