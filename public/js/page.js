document.addEventListener("DOMContentLoaded", function() {
    const sidebar = document.querySelector("aside.sidebar");
    const sidebarButton = document.querySelector("aside.sidebar > .sidebar-button");
    sidebarButton.addEventListener("click", function() {
        sidebar.classList.toggle("open");
    });
});
