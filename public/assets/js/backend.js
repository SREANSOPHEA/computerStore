 const sidebar = document.getElementById('mainSidebar');
    const menuToggle = document.getElementById('mobileMenuToggle');
    const overlay = document.getElementById('sidebarOverlay');

    function closeSidebar() {
        if (sidebar.classList.contains('show-sidebar')) {
            sidebar.classList.remove('show-sidebar');
            overlay.classList.remove('active');
        }
    }

    function openSidebar() {
        if (!sidebar.classList.contains('show-sidebar')) {
            sidebar.classList.add('show-sidebar');
            overlay.classList.add('active');
        }
    }

    if (menuToggle) {
        menuToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            if (sidebar.classList.contains('show-sidebar')) {
                closeSidebar();
            } else {
                openSidebar();
            }
        });
    }

    if (overlay) {
        overlay.addEventListener('click', closeSidebar);
    }