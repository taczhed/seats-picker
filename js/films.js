import { loginCheck } from "./loginCheck.js";
const sessionStatus = await loginCheck()
if (!sessionStatus.status) "/html/"
document.querySelector('#status').innerText = sessionStatus.user

