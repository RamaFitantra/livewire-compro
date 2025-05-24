// resources/js/app.js
import './bootstrap';  // Jika ada file bootstrap atau pengaturan lainnya

// Fungsi untuk scroll
window.onscroll = function() {
    var nav = document.getElementById('navbar');
    if (window.scrollY > 0) {
        nav.classList.add('bg-opacity-90');
    } else {
        nav.classList.remove('bg-opacity-90');
    }
};
