document.querySelectorAll('.scrollToTop').forEach(function(element) {
    element.addEventListener('click', function(event) {
        event.preventDefault();
        document.querySelector('#top').scrollIntoView({
            behavior: 'smooth'
        });
    });
});