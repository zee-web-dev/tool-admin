const tabElements = [
    {
        id: 'skill',
        triggerEl: document.querySelector('#skill-tab'),
        targetEl: document.querySelector('#skill')
    },
    {
        id: 'education',
        triggerEl: document.querySelector('#education-tab'),
        targetEl: document.querySelector('#education')
    },
    {
        id: 'experience',
        triggerEl: document.querySelector('#experience-tab'),
        targetEl: document.querySelector('#experience')
    }
];

// options with default values
const options = {
    defaultTabId: 'skill',
    activeClasses: 'bg-white rounded-lg shadow text-theme',
    inactiveClasses: 'text-gray-600 drop-shadow',
    onShow: () => {
        // console.log('tab is shown');
    }
};

/*
* tabElements: array of tab objects
* options: optional
*/
const tabs = new Tabs(tabElements, options);


document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("navbar");
    const navLinks = document.querySelectorAll(".nav-links");

    // Function to handle scroll events
    function handleScroll() {
        const scrollY = window.scrollY;
        const section1 = document.getElementById("about");

        navbar.classList.toggle("fixed", scrollY >= section1.offsetTop);
        navbar.classList.toggle("border-b", scrollY >= section1.offsetTop);
        navbar.classList.toggle("shadow", scrollY >= section1.offsetTop);

        // Function to update the active link when scrolling
        navLinks.forEach((link) => {
            const targetId = link.getAttribute("href").substring(1);
            const targetSection = document.getElementById(targetId);

            link.classList.toggle("text-theme",
                targetSection.offsetTop <= scrollY &&
                targetSection.offsetTop + targetSection.offsetHeight > scrollY
            );

            link.classList.toggle("text-black",
                !(targetSection.offsetTop <= scrollY &&
                    targetSection.offsetTop + targetSection.offsetHeight > scrollY)
            );
        });

        navLinks[0].classList.toggle("text-theme", scrollY <= section1.offsetTop);
    }

    // Listen for scroll events
    window.addEventListener("scroll", handleScroll);

    // Function to scroll smoothly to target sections when a link is clicked
    navLinks.forEach((link) => {
        link.addEventListener("click", (e) => {
            e.preventDefault();
            const targetId = link.getAttribute("href").substring(1);
            const targetSection = document.getElementById(targetId);

            window.scrollTo({
                top: targetSection.offsetTop,
                behavior: "smooth", // Smooth scroll animation
            });
        });
    });


    const rotateElements = document.querySelectorAll('.txt-rotate');

    rotateElements.forEach((element) => {
        console.log(element);
        new TxtRotate(element);
    });

    // INJECT CSS
    const css = document.createElement('style');
    css.type = 'text/css';
    css.innerHTML = '.txt-rotate > .wrap { border-right: 0.08em solid #666 }';
    document.body.appendChild(css);
});


class TxtRotate {
    constructor(el) {
        this.el = el;
        this.toRotate = JSON.parse(el.getAttribute('data-rotate'));
        this.period = parseInt(el.getAttribute('data-period'), 10) || 2000;
        this.loopNum = 0;
        this.txt = '';
        this.isDeleting = false;
        this.tick();
    }

    tick() {
        const i = this.loopNum % this.toRotate.length;
        const fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">' + this.txt + '</span';

        const that = this;
        let delta = 300 - Math.random() * 100;

        if (this.isDeleting) {
            delta /= 2;
        }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(() => {
            that.tick();
        }, delta);
    }
}

