const render = {
    display: () => {
        let display = document.createElement('div')
        display.classList.add("display")
        render.renderer(display)
    },

    seats: () => {
        for (let row = 0; row < 15; row ++) {
            let section = document.createElement('div')
            section.classList.add("seats-row")
            for (let i = 0; i < 20; i++) {
                let seat = document.createElement('div')
                seat.setAttribute('row', row)
                seat.setAttribute('column', i)
                seat.classList.add("seat")
                section.appendChild(seat)
            }
            render.renderer(section)
        }
    },

    renderer: (component) => {
        let app = document.getElementById('app')
        app.appendChild(component)
    }
}

render.display()
render.seats()