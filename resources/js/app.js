// Initialize Alpine.js
document.addEventListener('alpine:init', () => {
    Alpine.data('dashboard', () => ({
        sidebarOpen: true,
        mobileMenuOpen: false,
        
        toggleSidebar() {
            this.sidebarOpen = !this.sidebarOpen
        },
        
        toggleMobileMenu() {
            this.mobileMenuOpen = !this.mobileMenuOpen
        }
    }))
})

// Dark mode toggle
if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark')
} else {
    document.documentElement.classList.remove('dark')
}
