// HELPERS

const domQuery = str => {
    const elements = document.querySelectorAll(str);
    if(elements.length === 0) return null;
    return elements.length === 1 ? elements[0] : elements
}

const only = (mediaQuery) => {
    const media = window.matchMedia(`(${mediaQuery})`)

    const mobile = callback => media.matches && callback()
    const desktop = callback => media.matches && callback()

    return { mobile, desktop }
}




// MAIN

window.addEventListener('DOMContentLoaded', e => {

    hideNavOnScroll();
    toggleMobileNav();

})





// Mobile nav toggle

function toggleMobileNav() {
    const toggleClass = 'alt-active';
    const navToggle = domQuery('header .nav-toggle');
    const links  = domQuery('header .links');



    navToggle.addEventListener('click', () => {
        links.classList.toggle(toggleClass);
        navToggle.classList.toggle(toggleClass);

        const linksIsActive = links.classList.contains('alt-active');
        const navToggleIsActive = navToggle.classList.contains('alt-active');
        
        if(linksIsActive && navToggleIsActive) {
            document.body.classList.add('alt-stop-scroll')
        } else {
            document.body.classList.remove('alt-stop-scroll')
        }
    })

    only().desktop(() => {
        if(linksIsActive && navToggleIsActive) {
            links.classList.remove(toggleClass);
            navToggle.classList.remove(toggleClass);
        }
    })
}





// Hide nav on scroll

function hideNavOnScroll() {
    let prevScroll = 0;
    const topToggleClass = 'alt-top';
    const scrollToggleClass = 'alt-hidden';
    const header = domQuery('header');

    window.addEventListener('scroll', function() {
        const currentScroll = this.scrollY;
        const scrollingDown = currentScroll > prevScroll
        const scrolledPastNav = currentScroll > header.offsetHeight

        if(currentScroll == 0) header.classList.add(topToggleClass);

        if(scrollingDown && scrolledPastNav) {
            header.classList.add(scrollToggleClass)
            header.classList.remove(topToggleClass)
        } else {
            header.classList.remove(scrollToggleClass)
        }

        prevScroll = currentScroll;
    })
}