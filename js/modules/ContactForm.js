
class ContactForm {
    constructor() {
        this.openFormButton = document.querySelector('.contact-icon');
        this.closeFormButton = document.querySelector('.close-form');
        this.isFormOpen = document.querySelector('.form-container');
        this.events();
    }

    events() {
        this.openFormButton.addEventListener('click', this.openForm.bind(this));
        this.closeFormButton.addEventListener('click', this.closeForm.bind(this));
    }

    openForm() {
        this.isFormOpen.classList.add('show');
    }

    closeForm() {
        this.isFormOpen.classList.remove('show');
    }
}

export default ContactForm;

/* btn.addEventListener('click', function () {
  
    if (box.classList.contains('hidden')) {
      box.classList.remove('hidden');
      setTimeout(function () {
        box.classList.remove('visuallyhidden');
      }, 20);
    } else {
      box.classList.add('visuallyhidden');    
      box.addEventListener('transitionend', function(e) {
        box.classList.add('hidden');
      }, {
        capture: false,
        once: true,
        passive: false
      });
    }
    
  }, false); */
