document.addEventListener("DOMContentLoaded", function () {
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
            } else if (href === "#vptour") {
                e.preventDefault();
                document.querySelector('#vptour').scrollIntoView({
                    behavior: 'smooth'
                });
            } else if (href === "#PDFinteractif") {
                e.preventDefault();
                document.querySelector('#PDFinteractif').scrollIntoView({
                    behavior: 'smooth'
                });
            } else if (href === "#MockupsCD") {
                e.preventDefault();
                document.querySelector('#MockupsCD').scrollIntoView({
                    behavior: 'smooth'
                });
            } else if (href === "#Blender") {
                e.preventDefault();
                document.querySelector('#Blender').scrollIntoView({
                    behavior: 'smooth'
                });
            } else if (href === "#wireframes") {
                e.preventDefault();
                document.querySelector('#wireframes').scrollIntoView({
                    behavior: 'smooth'
                });
            } else if (href === "#rubtext") {
                e.preventDefault();
                document.querySelector('#rubtext').scrollIntoView({
                    behavior: 'smooth'
                });
            } else if (href === "#mode") {
                e.preventDefault();
                document.querySelector('#mode').scrollIntoView({
                    behavior: 'smooth'
                });
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