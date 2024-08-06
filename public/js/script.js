function updateTime() {
    const now = new Date();
    const options = { year: 'numeric', month: 'short', day: 'numeric' };
    document.getElementById('date-time').innerText = now.toLocaleDateString('fr-FR', options);
}

setInterval(updateTime, 1000);
updateTime();



// Call resetIcons on window resize
window.addEventListener('resize', resetIcons);

// Call resetIcons initially to set correct icon states on page load
document.addEventListener('DOMContentLoaded', resetIcons);

function toggleSearchForm() {
    const searchForm = document.getElementById('searchForm');
    searchForm.classList.toggle('hidden');

    if (!searchForm.classList.contains('hidden')) {
        document.getElementById('search-input').focus();
    }
}


let lastScrollTop = 0;

window.onscroll = function () {
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



