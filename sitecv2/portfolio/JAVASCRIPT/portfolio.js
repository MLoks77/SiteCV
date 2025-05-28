document.addEventListener('DOMContentLoaded', function() {
    // Gestion des filtres
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Mise à jour des boutons actifs
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            // Filtrage des projets
            const filter = button.getAttribute('data-filter');
            projectCards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }, 100);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // Gestion des pop-ups
    const popup = document.querySelector('.project-popup');
    const closePopup = document.querySelector('.close-popup');
    let currentSlide = 0;
    let slides = [];

    // Ouvrir le pop-up
    projectCards.forEach(card => {
        card.addEventListener('click', () => {
            // Faire défiler vers le haut d'abord
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

            // Attendre que le défilement soit terminé
            setTimeout(() => {
                const title = card.querySelector('h3').textContent;
                const description = card.querySelector('p').textContent;
                const links = card.querySelectorAll('.project-link');
                const images = [card.querySelector('img').src];

                // Remplir le pop-up
                document.querySelector('.popup-title').textContent = title;
                document.querySelector('.project-description').textContent = description;

                // Gérer les liens
                const linksContainer = document.querySelector('.project-links');
                linksContainer.innerHTML = '';
                links.forEach(link => {
                    const newLink = link.cloneNode(true);
                    linksContainer.appendChild(newLink);
                });

                // Gérer les images
                const sliderImages = document.querySelector('.slider-images');
                sliderImages.innerHTML = '';
                images.forEach(src => {
                    const img = document.createElement('img');
                    img.src = src;
                    sliderImages.appendChild(img);
                });

                slides = sliderImages.querySelectorAll('img');
                currentSlide = 0;
                updateSlider();

                // Afficher/masquer les flèches selon le nombre d'images
                const prevButton = document.querySelector('.slider-arrow.prev');
                const nextButton = document.querySelector('.slider-arrow.next');
                
                if (slides.length > 1) {
                    prevButton.style.display = 'flex';
                    nextButton.style.display = 'flex';
                } else {
                    prevButton.style.display = 'none';
                    nextButton.style.display = 'none';
                }

                // Afficher le pop-up
                popup.style.display = 'flex';
                document.body.style.overflow = 'hidden';
                popup.classList.add('active');
            }, 300); // Attendre que le défilement soit terminé
        });
    });

    // Fermer le pop-up
    function closePopupHandler() {
        popup.classList.remove('active');
        setTimeout(() => {
            popup.style.display = 'none';
            document.body.style.overflow = 'auto';
        }, 300);
    }

    closePopup.addEventListener('click', closePopupHandler);

    // Fermer le pop-up en cliquant en dehors
    popup.addEventListener('click', (e) => {
        if (e.target === popup) {
            closePopupHandler();
        }
    });

    // Gestion du slider
    const prevButton = document.querySelector('.slider-arrow.prev');
    const nextButton = document.querySelector('.slider-arrow.next');

    function updateSlider() {
        const sliderImages = document.querySelector('.slider-images');
        const offset = -currentSlide * 100;
        sliderImages.style.transform = `translateX(${offset}%)`;
    }

    prevButton.addEventListener('click', (e) => {
        e.stopPropagation();
        if (currentSlide > 0) {
            currentSlide--;
            updateSlider();
        }
    });

    nextButton.addEventListener('click', (e) => {
        e.stopPropagation();
        if (currentSlide < slides.length - 1) {
            currentSlide++;
            updateSlider();
        }
    });

    // Navigation au clavier
    document.addEventListener('keydown', (e) => {
        if (popup.style.display === 'flex') {
            if (e.key === 'Escape') {
                closePopupHandler();
            } else if (e.key === 'ArrowLeft' && slides.length > 1) {
                prevButton.click();
            } else if (e.key === 'ArrowRight' && slides.length > 1) {
                nextButton.click();
            }
        }
    });

    // Empêcher la propagation des clics dans le pop-up
    document.querySelector('.popup-content').addEventListener('click', (e) => {
        e.stopPropagation();
    });
}); 