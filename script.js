
var toggle_menu = document.querySelector('.responsive-menu');
var menu = document.querySelector('.menu');

toggle_menu.onclick = function() {
    toggle_menu.classList.toggle('active');
    menu.classList.toggle('responsive');
};

var carousel = document.querySelector('.carousel');
var currentIndex = 0;
var items = carousel.querySelectorAll('.carousel-item');

function showSlide(index) {
    items.forEach((item, i) => {
        item.classList.toggle('active', i === index);
    });
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % items.length;
    showSlide(currentIndex);
}

function prevSlide() {
    currentIndex = (currentIndex - 1 + items.length) % items.length;
    showSlide(currentIndex);
}

document.querySelector('.carousel-control-next').addEventListener('click', nextSlide);
document.querySelector('.carousel-control-prev').addEventListener('click', prevSlide);
