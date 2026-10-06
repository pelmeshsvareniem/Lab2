const menuButton = document.getElementById("menuButton");
const closeButton = document.getElementById("closeButton");
const sideMenu = document.getElementById("sideMenu");

menuButton.addEventListener("click", function () {
    sideMenu.classList.add("active");
});

closeButton.addEventListener("click", function () {
    sideMenu.classList.remove("active");
});

const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");
const nextButton = document.getElementById("next");
const previousButton = document.getElementById("prev");

let currentSlide = 0;
function showSlide(index) {
    if (index >= slides.length) {
        currentSlide = 0;
    }
    if (index < 0) {
        currentSlide = slides.length - 1;
    }
    slides.forEach(function (slide) {
        slide.classList.remove("active");
    });
    dots.forEach(function (dot) {

        dot.classList.remove("active");
    });
    slides[currentSlide].classList.add("active");
    dots[currentSlide].classList.add("active");
}

nextButton.addEventListener("click", function () {
    currentSlide++;
    showSlide(currentSlide);
});

previousButton.addEventListener("click", function () {
    currentSlide--;
    showSlide(currentSlide);
});

dots.forEach(function (dot, index) {
    dot.addEventListener("click", function () {
        currentSlide = index;
        showSlide(currentSlide);
    });
});