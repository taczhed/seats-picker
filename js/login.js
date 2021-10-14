import { notification } from './notification.js'

const loginBtn = document.querySelector('#login-button')

loginBtn.addEventListener('click',async () => {
    const login = document.querySelector('#login').value
    const password = document.querySelector('#password').value

    if (login && password) {
        let data = new FormData()
        data.append('login', login)
        data.append('password', password)

        const res = await fetch('../php/loginRequest.php', {
            method: "POST",
            body: data
        });
        data = await res.json();

        if (data.result === 'success') {
            location.href = "/"
        } else {
            const message = 'Zły login lub hasło!'
            notification(data.result, message)
        }

    } else notification('error', 'Jedno z pól formularza pozostało puste!')
})
