import { loginCheck } from "./loginCheck.js";
const sessionStatus = await loginCheck()
if (sessionStatus.status) location.href = "/html/films.html"