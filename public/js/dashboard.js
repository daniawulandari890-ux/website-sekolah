document.addEventListener('DOMContentLoaded', function () {

    // Toggle sidebar dashboard di tampilan mobile
    const sidebarToggle = document.getElementById('sidebarToggle');
    const dashSidebar = document.getElementById('dashSidebar');

    if (sidebarToggle && dashSidebar) {
        sidebarToggle.addEventListener('click', function () {
            dashSidebar.classList.toggle('is-open');
        });
    }

    // Tutup sidebar saat klik di luar area (mobile)
    document.addEventListener('click', function (e) {
        if (!dashSidebar) return;

        const isClickInside = dashSidebar.contains(e.target) || sidebarToggle.contains(e.target);

        if (!isClickInside && dashSidebar.classList.contains('is-open')) {
            dashSidebar.classList.remove('is-open');
        }
    });

});
