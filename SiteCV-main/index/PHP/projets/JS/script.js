
document.getElementById('scrollToTop').addEventListener('click', function(event) {
    event.preventDefault();
    document.querySelector('#top').scrollIntoView({
        behavior: 'smooth'
    });
});