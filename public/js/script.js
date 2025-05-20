/*!
* Start Bootstrap - New Age v6.0.7 (https://startbootstrap.com/theme/new-age)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-new-age/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});

function formvalidation() {
    var FirstName = document.getElementById("FirstName").value;
    var LastName = document.getElementById("LastName").value;
    var Email = document.getElementById("Email").value;
    var Message = document.getElementById("Message").value;

    if (FirstName.length < 1) {
        Swal.fire({title: "Warning", text: "Nama harus diisi", icon: "error"});
        document.getElementById("FirstName").focus();
        return false;
    } else if (/\d/.test(FirstName)){
        Swal.fire({title: "Warning", text: "Nama tidak boleh angka", icon: "error"});
        document.getElementById("FirstName").focus();
        return false;
    }

    if (LastName.length < 1) {
        Swal.fire({title: "Warning", text: "Nama harus diisi", icon: "error"});
        document.getElementById("LastName").focus();
        return false;
    } else if (/\d/.test(LastName)){
        Swal.fire({title: "Warning", text: "Nama tidak boleh angka", icon: "error"});
        document.getElementById("LastName").focus();
        return false;
    }

    if (Email.length < 1) {
        Swal.fire({title: "Warning", text: "Email harus diisi", icon: "error"});
        document.getElementById("Email").focus();
        return false;
    } else if (/\d/.test(Email)){
        Swal.fire({title: "Warning", text: "Email tidak boleh angka", icon: "error"});
        document.getElementById("Email").focus();
        return false;
    }

    if (Message.length < 1) {
        Swal.fire({title: "Warning", text: "Message harus diisi", icon: "error"});
        document.getElementById("Message").focus();
        return false;
    } else if (/\d/.test(Message)){
        Swal.fire({title: "Warning", text: "Message tidak boleh angka", icon: "error"});
        document.getElementById("Message").focus();
        return false;
    }
}