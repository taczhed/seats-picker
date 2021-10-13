export const loginCheck = async () => {
    const response = await fetch('../php/session.php', {method: "POST"})
    const data = await response.json()
    return data
}