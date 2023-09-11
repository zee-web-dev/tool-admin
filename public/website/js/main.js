
// Rotate Text
var TxtRotate = function (el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtRotate.prototype.tick = function () {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

    var that = this;
    var delta = 300 - Math.random() * 100;

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

    setTimeout(function () {
        that.tick();
    }, delta);
};

window.onload = function () {
    var elements = document.getElementsByClassName('txt-rotate');
    for (var i = 0; i < elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-rotate');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
            new TxtRotate(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
    document.body.appendChild(css);
};
// Rotate text

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
