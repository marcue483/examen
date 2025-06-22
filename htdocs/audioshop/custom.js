document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.selectbutton');
    const arrowLeft = document.querySelector('.arrowleft');
    const arrowRight = document.querySelector('.arrowright');
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.display = i === index ? 'block' : 'none';
            dots[i].style.backgroundColor = i === index ? 'gray' : 'rgb(155, 155, 155)';
        });
        currentSlide = index;
    }

    if (!slides.length || !dots.length || !arrowLeft || !arrowRight) {
        console.error('Gallery elements not found');
        return;
    }

    arrowLeft.addEventListener('click', () => {
        let newIndex = currentSlide - 1;
        if (newIndex < 0) newIndex = slides.length - 1;
        showSlide(newIndex);
    });

    arrowRight.addEventListener('click', () => {
        let newIndex = (currentSlide + 1) % slides.length;
        showSlide(newIndex);
    });

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            showSlide(index);
        });
    });

    showSlide(0);
});