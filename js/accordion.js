/**
 * Accordion handler
 * @class Accordion
 * @typedef {Accordion}
 */
class Accordion {

    root = null;
    button = null;
    contentWrapper = null;

    isOpen = false;
    #changeHook = null;

    constructor(root = null) {
        this.root = root
        this.button = this.root.querySelector('button[aria-expanded]')
        this.contentWrapper = this.root.querySelector('.content-wrapper')
        this.isOpen = this.button.getAttribute('aria-expanded') === 'true';
        this.#init();
    }

    #init() {
        if(this.isOpen) this.open();
        this.button.addEventListener('click', () => {
            this.isOpen ? this.close() : this.open();
            if(this.#changeHook) this.#changeHook();
        })
    }

    open() {
        const content = this.contentWrapper.firstElementChild;
        this.contentWrapper.style.height = content.offsetHeight + "px";
        this.button.setAttribute("aria-expanded", "true");
        if(this.onOpen) this.onOpen();
        this.isOpen = true;
    }

    close() {
        this.contentWrapper.style.height = 0 + "px";
        this.button.setAttribute("aria-expanded", "false");
        this.isOpen = false;
    }

    onChange(callback) {
        this.#changeHook = callback;
    }

}