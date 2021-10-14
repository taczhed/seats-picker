const heading = '<tr><th>id</th><th>Tytuł</th><th>Rezerwacja</th></tr>'
const table = document.querySelector('.table')

const reserve = (filmId) => {
    window.location.href = '/app.php?id=' + filmId
}

const fetchContent = async () => {
    table.innerHTML = heading
    const resquest = await fetch('../php/tableRequest.php', {type: 'POST'})
    const movies = await resquest.json()

    movies.map(movie => {
        const tr = document.createElement('tr')
        const id = document.createElement('td')
        const title = document.createElement('td')
        const option = document.createElement('td')
        const btn = document.createElement('button')

        id.innerText = movie.id
        title.innerText = movie.movie
        btn.innerText = 'Edytuj rezerwacje'
        btn.classList.add('button', 'has-background-primary-dark', 'has-text-white')
        id.classList.add('is-vcentered', 'is-size-5')
        title.classList.add('is-vcentered', 'is-size-5')
        btn.addEventListener('click', () => reserve(movie.id))
        option.appendChild(btn)

        tr.appendChild(id)
        tr.appendChild(title)
        tr.appendChild(option)

        table.appendChild(tr)
    })

}
fetchContent()


