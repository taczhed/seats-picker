import { showNotification } from './showNotification.js'

const loginBtn = document.querySelector('#login-button')

loginBtn.addEventListener('click',async () => {
    const login = document.querySelector('#login').value
    const password = document.querySelector('#password').value

    if (login && password) {
        const data = new FormData()
        data.append('login', login)
        data.append('password', password)

        const URL = '../php/login.php';
        let res = await fetch(URL, {
            method: "POST",
            body: data
        })
            .then(res => res.json())
            .then(data => {
                if (data.result === 'success') {
                    location.href = "/html/films.html"
                } else {
                    const message = 'Zły login lub hasło!'
                    showNotification(data.result, message)
                }
            })

    } else showNotification('error', 'Jedno z pól formularza pozostało puste!')
})
