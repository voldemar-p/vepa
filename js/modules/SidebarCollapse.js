
class SidebarCollapse {
    constructor() {
        this.sidebar = document.querySelector('#sidebar_primary');
        this.footer = document.querySelector('footer');
        this.events();
    }

    events() {
        window.addEventListener('scroll', this.collapse.bind(this));
    }

    collapse() {
        if((this.footer.offsetTop - document.body.scrollTop) <= (window.innerHeight -50)) {
        // kui footeri ülemise osa kaugus ekraani ülemisest osast on võrdväärne/väiksem, kui ekraani kõrgus - 50px, siis ->
            this.sidebar.classList.add('sidebar--bottom');
        } else {
            this.sidebar.classList.remove('sidebar--bottom');
        }
    }
}

export default SidebarCollapse;
