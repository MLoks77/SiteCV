document.addEventListener("DOMContentLoaded", function () {

    if (/Mobi|Android|iPhone|iPad|iPod/i.test(navigator.userAgent)) {
        alert("Attention : Ce site n'est pas encore entièrement adapté aux appareils mobiles. Pour une meilleure expérience, veuillez utiliser un ordinateur.");
    }

    document.querySelectorAll('.scrollToTop').forEach(function(element) {
        element.addEventListener('click', function(event) {
            event.preventDefault();
            document.querySelector('#top').scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    document.body.style.opacity = 1;
    document.body.style.transform = "scale(1)";

    document.querySelectorAll("a").forEach(link => {
        link.addEventListener("click", function (e) {
            if (this.target === "_blank") return;
            const href = this.getAttribute("href");
            if (href === "#top") {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: "smooth" });
            } else if (href.startsWith("mailto:")) {
                return;
            } else {
                e.preventDefault();
                document.body.style.opacity = 0;
                document.body.style.transform = "ease-in-out";
                setTimeout(() => {
                    window.location.href = href;
                }, 500);
            }
        });
    });

    const title = document.getElementById("animatedTitle");
    if (title) {
        title.classList.add("show");
    }

    document.querySelectorAll('.infos').forEach(function(element) {
        element.style.opacity = 1;
    });
});

function playclickSound() {
    const clickSound = document.getElementById('clickSound');
    clickSound.play();
}

document.addEventListener("DOMContentLoaded", function () {
    const lazySections = document.querySelectorAll('.lazy-section');

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); 
            }
        });
    }, {
        threshold: 0.1 
    });

    lazySections.forEach(section => {
        observer.observe(section);
    });
});

window.addEventListener("pageshow", function () {
    document.body.style.opacity = 1;
    document.body.style.transform = "scale(1)";
});