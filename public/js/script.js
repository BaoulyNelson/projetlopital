function toggleMenu() {
    const links = document.querySelector('.links');
    const hamburgerIcon = document.querySelector('.hamburger-icon');
    const closeIcon = document.querySelector('.close-icon');

    links.classList.toggle('open');

    if (links.classList.contains('open')) {
        hamburgerIcon.style.display = 'none';
        closeIcon.style.display = 'block';
    } else {
        hamburgerIcon.style.display = 'block';
        closeIcon.style.display = 'none';
    }
}

function resetIcons() {
    const hamburgerIcon = document.querySelector('.hamburger-icon');
    const closeIcon = document.querySelector('.close-icon');
    const links = document.querySelector('.links');

    if (window.innerWidth > 768) {
        hamburgerIcon.style.display = 'none';
        closeIcon.style.display = 'none';
        links.classList.remove('open');
    } else {
        if (links.classList.contains('open')) {
            hamburgerIcon.style.display = 'none';
            closeIcon.style.display = 'block';
        } else {
            hamburgerIcon.style.display = 'block';
            closeIcon.style.display = 'none';
        }
    }
}

// Call resetIcons on window resize
window.addEventListener('resize', resetIcons);

// Call resetIcons initially to set correct icon states on page load
document.addEventListener('DOMContentLoaded', resetIcons);


        function toggleSearchForm() {
            var searchForm = document.querySelector('form');
            searchForm.classList.toggle('hidden');
            if (!searchForm.classList.contains('hidden')) {
                document.querySelector('#search-input').focus();
            }
        }

        
        let lastScrollTop = 0;

        window.onscroll = function() {
            let currentScroll = document.documentElement.scrollTop || document.body.scrollTop;

            if (currentScroll > lastScrollTop) {
                // Scrolling down
                document.getElementById("myBtn").style.display = "block";
            } else {
                // Scrolling up
                document.getElementById("myBtn").style.display = "none";
            }
            lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
        };

        // Lorsque l'utilisateur clique sur le bouton, faire défiler vers le haut de la page
        function topFunction() {
            document.body.scrollTop = 0; // Pour Safari
            document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE et Opera
        }