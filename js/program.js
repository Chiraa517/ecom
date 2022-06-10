// menu bar
let menu = document.querySelector('.menu');
let close = document.querySelector('.close');
let nav_bar = document.querySelector('.nav_bar');

menu.addEventListener('click', () => {
    nav_bar.classList.add('show_nav');
    menu.style.display = 'none';
    close.style.display = 'block';
})

close.addEventListener('click', () => {
    nav_bar.classList.remove('show_nav');
    menu.style.display = 'block';
    close.style.display = 'none';
})


// login system
let login = document.querySelector('.login');
let cross = document.querySelector('.cross');
let form = document.querySelector('.form_container');

login.addEventListener('click', () => {
    form.classList.add('show_form');
})

cross.addEventListener('click', () => {
    form.classList.remove('show_form');
})
