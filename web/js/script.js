/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function updateTitle(title) {
    document.getElementById("pageTitle").innerText = title;
}

function clearNotice() {
    document.getElementById("confirmationNotice").style.display = "none";
}
