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
            if (this.getAttribute("href") === "#top") {
                e.preventDefault(); 
                window.scrollTo({ top: 0, behavior: "smooth" }); 
            } else {
                e.preventDefault(); 
                const href = this.href;
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