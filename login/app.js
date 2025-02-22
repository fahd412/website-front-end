const menu = document.querySelector('#mobile-menu')
const menulinks = document.querySelector('.navigation__menu')

menu.addEventListener('click', function() {
    menu.classList.toggle('is-active');
    menulinks.classList.toggle('active');

    /*makes animation for mobile users. top right icon*/

});

