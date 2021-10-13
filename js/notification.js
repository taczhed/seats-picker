export const notification = (type, message) => {
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
    else notification.classList.add('has-background-danger-dark')

    column.appendChild(notification)
}