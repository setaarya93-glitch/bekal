// Dashboard JavaScript - Production Build

// Initialize Alpine.js
document.addEventListener('alpine:init', () => {
    Alpine.data('dashboard', () => ({
        sidebarOpen: true,
        mobileMenuOpen: false,
        
        toggleSidebar() {
            this.sidebarOpen = !this.sidebarOpen;
        },
        
        toggleMobileMenu() {
            this.mobileMenuOpen = !this.mobileMenuOpen;
        }
    }));
});

// Dark mode functionality
function initDarkMode() {
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', () => {
    initDarkMode();
});

// Export for Laravel Mix/Vite
export default {};
