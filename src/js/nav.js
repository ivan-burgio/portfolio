document.addEventListener("DOMContentLoaded", function () {
    var toggleNav = document.getElementById("toggleNav");
    var navLinks = document.getElementById("navLinks");

    toggleNav.addEventListener("click", function () {
        // Toggle the 'desplegado' class on navLinks
        navLinks.classList.toggle("desplegado");
    });
});