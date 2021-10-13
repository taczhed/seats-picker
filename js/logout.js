const logoutBtn = document.querySelector('#logout')
logoutBtn.addEventListener('click', async () => {
    await fetch('../php/logoutRequest.php', {
        method: "POST"
    });

    window.location.href = '/'
})
