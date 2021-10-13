import { showNotification } from './showNotification.js'

const registerBtn = document.querySelector('#register')

registerBtn.addEventListener('click',async () => {
    const tel = document.querySelector('#tel').value
    const login = document.querySelector('#login').value
    const password = document.querySelector('#password').value
    const secPassword = document.querySelector('#sec-password').value

    if (tel && login && password && secPassword && password === secPassword) {
        const data = new FormData()
        data.append('tel', tel)
        data.append('login', login)
        data.append('password', password)

        const URL = '../php/register.php';
        let res = await fetch(URL, {
            method: "POST",
            body: data
        })
            .then(res => res.json())
            .then(data => {
                const type = data.result === 'Rejestracja przebiegła pomyślnie!' ? 'success' : 'error'
                showNotification(type, data.result)
            })

    }
    else if (password !== secPassword) showNotification('danger', 'Hasło główne nie zgadza się z drugim hasłem!')
    else showNotification('danger', 'Jedno z pól formularza pozostało puste!')
})