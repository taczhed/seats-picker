import { notification } from './notification.js'

const registerBtn = document.querySelector('#register')

registerBtn.addEventListener('click',async () => {
    const tel = document.querySelector('#tel').value
    const login = document.querySelector('#login').value
    const password = document.querySelector('#password').value
    const secPassword = document.querySelector('#sec-password').value

    if (tel && login && password && secPassword && password === secPassword) {
        let data = new FormData()
        data.append('tel', tel)
        data.append('login', login)
        data.append('password', password)

        const res = await fetch('../php/registerRequest.php', {
            method: "POST",
            body: data
        });

        data = await res.json();
        const type = data.result === 'Rejestracja przebiegła pomyślnie!' ? 'success' : 'error'
        notification(type, data.result)

    }
    else if (password !== secPassword) notification('danger', 'Hasło główne nie zgadza się z drugim hasłem!')
    else notification('danger', 'Jedno z pól formularza pozostało puste!')
})