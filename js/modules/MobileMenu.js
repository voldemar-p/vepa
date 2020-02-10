
class MobileMenu {
    constructor() {
        this.openButton = document.querySelector('.burger-menu');
        this.closeButton = document.querySelector('.close-burger');
        this.overlay = document.querySelector('.sidebar-div');
        this.isPhone = document.querySelector('#mob-header');
        this.events();
    }

    events() {
        this.openButton.addEventListener('click', this.openMenu.bind(this));
        this.closeButton.addEventListener('click', this.closeMenu.bind(this));
    }

    openMenu() {
        if(window.getComputedStyle(this.isPhone).display === 'flex' && window.getComputedStyle(this.openButton).display === 'flex') {
            this.openButton.style.display = 'none';
            this.closeButton.style.display = 'block';
            this.overlay.classList.add('active');
            document.body.classList.add('stop-scrolling');
        }
    }

    closeMenu() {
        if(window.getComputedStyle(this.isPhone).display === 'flex' && window.getComputedStyle(this.closeButton).display === 'block') {
            this.openButton.style.display = 'flex';
            this.closeButton.style.display = 'none';
            this.overlay.classList.remove('active');
            document.body.classList.remove('stop-scrolling');
        }
    }
}

export default MobileMenu;
