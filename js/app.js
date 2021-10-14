let room = []
let userId

const render = {

    loadRoom: async () => {
        const movieId = location.search.split('id=')[1]
        const movieData = new FormData()
        movieData.append('id', movieId)
        const response = await fetch('../php/loadRoomRequest.php', {
            method: "POST",
            body: movieData
        })
        const data = await response.json()
        room = JSON.parse(data.seats).seats
        userId = JSON.parse(data.userId)
        render.display()
        render.seats(room)
    },

    display: () => {
        let display = document.createElement('div')
        display.classList.add("display")
        render.renderer(display)
    },

    seats: (room) => {
        room.map((x, row) => {
            let section = document.createElement('div')
            section.classList.add("seats-row")
            x.map((typeOfSeat, i) => {
                let seat = document.createElement('div')
                seat.setAttribute('row', row)
                seat.setAttribute('column', i)
                seat.classList.add("seat")
                section.appendChild(seat)

                if (typeOfSeat === 0) {
                    seat.classList.add("free")
                    seat.addEventListener('click', () => render.toggleSeat(row, i))
                } else if (typeOfSeat === userId) {
                    seat.classList.add("selected")
                }
            })
            render.renderer(section)
        })
    },

    toggleSeat: (row, i) => {
        room[row][i] = userId
        render.prerenderer()
        render.display()
        render.seats(room)
    },

    renderer: (component) => {
        let app = document.getElementById('app')
        app.appendChild(component)
    },

    prerenderer: () => {
        let app = document.getElementById('app')
        app.innerHTML = ''
    },
}

render.loadRoom()