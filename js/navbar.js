document.addEventListener("DOMContentLoaded", function () {

    const button = document.getElementById("navbarToggler");
    const menu = document.getElementById("mainNavbar");

    console.log("Navbar JS loaded");
    console.log(button);
    console.log(menu);

    if (!button || !menu) {
        return;
    }

    button.addEventListener("click", function () {

        console.log("Hamburger clicked");

        menu.classList.toggle("active");

    });

});