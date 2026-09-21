document.addEventListener('DOMContentLoaded', function () {

    // Toggle menu navigasi di tampilan mobile
    const navToggle = document.getElementById('navToggle');
    const siteNav = document.getElementById('siteNav');

    if (navToggle && siteNav) {
        navToggle.addEventListener('click', function () {
            siteNav.classList.toggle('is-open');
        });
    }

    // Auto hilangkan alert error setelah beberapa detik
    const alertError = document.querySelector('.alert-error');
    if (alertError) {
        setTimeout(function () {
            alertError.style.transition = 'opacity 0.5s ease';
            alertError.style.opacity = '0';
            setTimeout(() => alertError.remove(), 500);
        }, 4000);
    }

});
