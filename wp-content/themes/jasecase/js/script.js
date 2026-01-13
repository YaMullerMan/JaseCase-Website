
// puts highlight under active nav item
const activePage = window.location.pathname.replaceAll('/', '');
const navLinks = document.querySelectorAll('.nav-item');
navLinks.forEach(link => {
    if (link.href.includes(`${activePage}`) && activePage != "") {
        link.classList.add('nav-active');
    } else if (activePage == "blog") {
        // blog/news is the second nav item
        document.querySelectorAll('.nav-item')[1].classList.add('nav-active');
    }
    else if (activePage == "sample") {
        // blog/news is the second nav item
        document.querySelectorAll('.nav-item')[0].classList.add('nav-active');
    }
})

// const navIcon = document.querySelector('#nav-icon4');
// const mobileNav = document.querySelector('.mobile-nav-container');
// navIcon.addEventListener("click", () => {
//     console.log('event listerne added');
//     navIcon.classList.toggle('open');
//     mobileNav.classList.toggle('mobile-nav-open');
// })

// script for mobile nav functionality
const navClose = document.getElementById('nav-icon4');
const navContainer = document.getElementsByClassName('mobile-nav-container')[0];

navClose.addEventListener("click", (event) => {
    let target = event.currentTarget;
    if (target.classList.length <= 1) {
        target.classList.toggle('open');
        navContainer.style.padding = "30px 70px 30px 0";
        navContainer.style.width = "100%";
        navContainer.style.opacity = "1";
    } else {
        navContainer.style.width = "0";
        navContainer.style.padding = "30px 0 0 0";
        target.classList.toggle('open');
        navContainer.style.opacity = "0";
    }
});