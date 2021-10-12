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

        const URL = '../php/register.html';
        let res = await fetch(URL, {
            method: "POST",
            body: data
        })
            .then(res => res.json())
            .then(data => {
                const type = data.result === 'Rejestracja przebiegła pomyślnie!' ? 'success' : 'danger'
                showNotification(type, data.result)
            })

    }
    else if (password !== secPassword) showNotification('danger', 'Hasło główne nie zgadza się z drugim hasłem!')
    else showNotification('danger', 'Jedno z pól formularza pozostało puste!')
})

const showNotification = (type, message) => {
    const notification = document.createElement('div')
    const button = document.createElement('button')
    const column = document.querySelector('.column')
    notification.innerText = message
    notification.appendChild(button)
    notification.classList.add('notification', 'has-text-white')
    button.classList.add('delete')
    button.addEventListener('click',() => notification.remove())
    setTimeout(() => notification.remove(), 4000)

    if (type === 'success') notification.classList.add('has-background-success-dark')
    else if (type === 'danger') notification.classList.add('has-background-danger-dark')

    column.appendChild(notification)
}