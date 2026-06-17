const fadeElements = document.querySelectorAll('.fade-up');

window.addEventListener('scroll', () => {

    fadeElements.forEach(element => {

        const elementTop = element.getBoundingClientRect().top;

        if (elementTop < window.innerHeight - 100) {
            element.classList.add('show');
        }

    });

});

window.addEventListener('load', () => {

    const loader = document.getElementById('loader');

    loader.style.opacity = '0';

    setTimeout(() => {
        loader.style.display = 'none';
    }, 500);

});