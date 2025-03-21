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

 
    let textElement = document.getElementById("animatedText");
    if (textElement) {
        let fullText = textElement.getAttribute("data-text");
        let words = fullText.split(" ");
        let index = 0;
        let charIndex = 0;
        let currentText = "";

        function typeEffect() {
            if (index < words.length) {
                let word = words[index];
                if (charIndex < word.length) {
                    currentText += word[charIndex];
                    charIndex++;
                    textElement.textContent = currentText + (charIndex < word.length ? "" : " "); 
                    setTimeout(typeEffect, 10);
                } else {
                    index++; 
                    charIndex = 0;
                    currentText += " "; 
                    setTimeout(typeEffect, 0); 
                }
            }
        }

        typeEffect();
    }

   
    const title = document.getElementById("animatedTitle");
    if (title) {
        title.classList.add("show");
    }

   
    document.querySelectorAll('.infos').forEach(function(element) {
        element.style.opacity = 1;
    });
});