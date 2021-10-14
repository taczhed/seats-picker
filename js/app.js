import { notification } from './notification.js'

let room
let previousRoom
let userId
let movieId

const render = {

    loadRoom: async () => {
        movieId = location.search.split('id=')[1]
        const movieData = new FormData()
        movieData.append('id', movieId)
        const response = await fetch('../php/loadRoomRequest.php', {
            method: "POST",
            body: movieData
        })
        const data = await response.json()
        room = JSON.parse(data.seats).seats
        previousRoom = [...room]
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
                    seat.addEventListener('click', () => render.toggleSeat(row, i, true))
                } else if (typeOfSeat === userId) {
                    seat.classList.add("selected")
                    seat.addEventListener('click', () => render.toggleSeat(row, i, false))
                } else {
                    seat.classList.add("occupied")
                }
            })
            render.renderer(section)
        })
    },

    toggleSeat: (row, i, action) => {
        // true = select, false = unselect
        if (action) room[row][i] = userId
        else room[row][i] = 0
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

const reserveBtn = document.querySelector('#reserve')
reserveBtn.addEventListener('click', async () => {
    const roomData = new FormData()
    roomData.append('id', movieId)
    roomData.append('seats', JSON.stringify({seats: room}))

    const response = await fetch('../php/updateRoomRequest.php', {
        method: "POST",
        body: roomData
    })
    await response
    render.prerenderer()
    render.display()
    render.seats(room)

    notification('success', "Rezerwacja zaznaczonych miejsc potwierdzona!")



})
