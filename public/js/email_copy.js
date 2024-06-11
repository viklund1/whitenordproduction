function copyEmail() {
    let email = document.getElementById("email").innerHTML;
    navigator.clipboard.writeText(email);
}
