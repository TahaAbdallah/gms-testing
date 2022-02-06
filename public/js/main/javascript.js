// SCROLL TO TOP BUTTON --------------------------

//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}





// ------------- FIRST CAROUSEL ------------- 

new SimpleSlider('.simple-slider', {
    slidesPerView: {
        320: 1,
        768: 2,
        1024: 3
    }
});


// CUSTOMERS SECTION -------------

$(document).ready(function () {
    $('.customer-logos').slick({
        slidesToShow: 10,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});



// PROJECTS CAROUSELL ---------------

// Hover-Carousel component
// By Yair Even-Or
// written in jQuery 2013 -> refactored to vanilla 2020
// https://github.com/yairEO/hover-carousel

function HoverCarousel(elm, settings) {
    this.DOM = {
        scope: elm,
        wrap: elm.querySelector('ul').parentNode
    }

    this.containerWidth = 0;
    this.scrollWidth = 0;
    this.posFromLeft = 0;    // Stripe position from the left of the screen
    this.stripePos = 0;    // When relative mouse position inside the thumbs stripe
    this.animated = null;
    this.callbacks = {}

    this.init()
}

HoverCarousel.prototype = {
    init() {
        this.bind()
    },

    destroy() {
        this.DOM.scope.removeEventListener('mouseenter', this.callbacks.onMouseEnter)
        this.DOM.scope.removeEventListener('mousemove', this.callbacks.onMouseMove)
    },

    bind() {
        this.callbacks.onMouseEnter = this.onMouseEnter.bind(this)
        this.callbacks.onMouseMove = e => {
            if (this.mouseMoveRAF)
                cancelAnimationFrame(this.mouseMoveRAF)

            this.mouseMoveRAF = requestAnimationFrame(this.onMouseMove.bind(this, e))
        }

        this.DOM.scope.addEventListener('mouseenter', this.callbacks.onMouseEnter)
        this.DOM.scope.addEventListener('mousemove', this.callbacks.onMouseMove)
    },

    // calculate the thumbs container width
    onMouseEnter(e) {
        this.nextMore = this.prevMore = false // reset

        this.containerWidth = this.DOM.wrap.clientWidth;
        this.scrollWidth = this.DOM.wrap.scrollWidth;
        // padding in percentage of the area which the mouse movement affects
        this.padding = 0.2 * this.containerWidth;
        this.posFromLeft = this.DOM.wrap.getBoundingClientRect().left;
        var stripePos = e.pageX - this.padding - this.posFromLeft;
        this.pos = stripePos / (this.containerWidth - this.padding * 2);
        this.scrollPos = (this.scrollWidth - this.containerWidth) * this.pos;

        // temporary add smoothness to the scroll 
        this.DOM.wrap.style.scrollBehavior = 'smooth';

        if (this.scrollPos < 0)
            this.scrollPos = 0;

        if (this.scrollPos > (this.scrollWidth - this.containerWidth))
            this.scrollPos = this.scrollWidth - this.containerWidth

        this.DOM.wrap.scrollLeft = this.scrollPos
        this.DOM.scope.style.setProperty('--scrollWidth', (this.containerWidth / this.scrollWidth) * 100 + '%');
        this.DOM.scope.style.setProperty('--scrollLleft', (this.scrollPos / this.scrollWidth) * 100 + '%');

        // lock UI until mouse-enter scroll is finihsed, after aprox 200ms
        clearTimeout(this.animated)
        this.animated = setTimeout(() => {
            this.animated = null
            this.DOM.wrap.style.scrollBehavior = 'auto';
        }, 200)

        return this
    },

    // move the stripe left or right according to mouse position
    onMouseMove(e) {
        // don't move anything until inital movement on 'mouseenter' has finished
        if (this.animated) return

        this.ratio = this.scrollWidth / this.containerWidth

        // the mouse X position, "normalized" to the carousel position
        var stripePos = e.pageX - this.padding - this.posFromLeft

        if (stripePos < 0)
            stripePos = 0

        // calculated position between 0 to 1
        this.pos = stripePos / (this.containerWidth - this.padding * 2)

        // calculate the percentage of the mouse position within the carousel
        this.scrollPos = (this.scrollWidth - this.containerWidth) * this.pos

        this.DOM.wrap.scrollLeft = this.scrollPos

        // update scrollbar
        if (this.scrollPos < (this.scrollWidth - this.containerWidth))
            this.DOM.scope.style.setProperty('--scrollLleft', (this.scrollPos / this.scrollWidth) * 100 + '%');

        // check if element has reached an edge
        this.prevMore = this.DOM.wrap.scrollLeft > 0
        this.nextMore = this.scrollWidth - this.containerWidth - this.DOM.wrap.scrollLeft > 5

        this.DOM.scope.setAttribute('data-at',
            (this.prevMore ? 'left ' : ' ')
            + (this.nextMore ? 'right' : '')
        )
    }
}

var carouselElm = document.querySelector('.carousel-desk')
new HoverCarousel(carouselElm)





// NAVBAR TOOGLE
function myFunction() {
    document.getElementById("main-nav").style.setProperty("display", "none", "important");
    document.getElementById("big-nav").style.display = "block";
    document.getElementById("big-nav-bg").style.display = "block";
}

function myFunction2() {
    document.getElementById("main-nav").style.display = "flex";
    document.getElementById("main-nav").style.backgroundColor = "white";
    document.getElementById("big-nav").style.display = "none";
    document.getElementById("big-nav-bg").style.display = "none";
}

// OUR SERVICES SECTION 4 LOGO GRAPHIC TOOGLE

function section4designtoogle1() {
    document.getElementById("our-services-section4-package").style.display = "none";
    document.getElementById("our-services-section4-graphic").style.display = "none";
    document.getElementById("our-services-section4-design").style.display = "block";

    var design = document.getElementById("design-link");
    var graphic = document.getElementById("graphic-link");
    var package = document.getElementById("package-link");

    design.classList.add("active");
    package.classList.remove("active");
    graphic.classList.remove("active");

}

function section4designtoogle2() {
    document.getElementById("our-services-section4-package").style.display = "none";
    document.getElementById("our-services-section4-design").style.display = "none";
    document.getElementById("our-services-section4-graphic").style.display = "block";

    var design = document.getElementById("design-link");
    var graphic = document.getElementById("graphic-link");
    var package = document.getElementById("package-link");


    graphic.classList.add("active");
    package.classList.remove("active");
    design.classList.remove("active");
}

function section4designtoogle3() {
    document.getElementById("our-services-section4-design").style.display = "none";
    document.getElementById("our-services-section4-graphic").style.display = "none";
    document.getElementById("our-services-section4-package").style.display = "block";

    var design = document.getElementById("design-link");
    var graphic = document.getElementById("graphic-link");
    var package = document.getElementById("package-link");


    package.classList.add("active");
    design.classList.remove("active");
    graphic.classList.remove("active");
}


// OUR SERVICES SECTION 4 WEB TOOGLE

function section4webtoogle1() {
    document.getElementById("our-services-section4-web3").style.display = "none";
    document.getElementById("our-services-section4-web2").style.display = "none";
    document.getElementById("our-services-section4-web1").style.display = "block";

    var web1 = document.getElementById("web1-link");
    var web2 = document.getElementById("web2-link");
    var web3 = document.getElementById("web3-link");

    web1.classList.add("active");
    web2.classList.remove("active");
    web3.classList.remove("active");

}

function section4webtoogle2() {
    document.getElementById("our-services-section4-web2").style.display = "none";
    document.getElementById("our-services-section4-web1").style.display = "none";
    document.getElementById("our-services-section4-web3").style.display = "block";

    var web1 = document.getElementById("web1-link");
    var web2 = document.getElementById("web2-link");
    var web3 = document.getElementById("web3-link");

    web2.classList.add("active");
    web1.classList.remove("active");
    web3.classList.remove("active");
}

function section4webtoogle3() {
    document.getElementById("our-services-section4-web2").style.display = "none";
    document.getElementById("our-services-section4-web1").style.display = "none";
    document.getElementById("our-services-section4-web3").style.display = "block";

    var web1 = document.getElementById("web1-link");
    var web2 = document.getElementById("web2-link");
    var web3 = document.getElementById("web3-link");

    web3.classList.add("active");
    web1.classList.remove("active");
    web2.classList.remove("active");
}

// OUR SERVICES SECTION 4 MARKETING TOOGLE

function section4marketingtoogle1() {
    document.getElementById("our-services-section4-marketing3").style.display = "none";
    document.getElementById("our-services-section4-marketing2").style.display = "none";
    document.getElementById("our-services-section4-marketing1").style.display = "block";

    var marketing1 = document.getElementById("marketing1-link");
    var marketing2 = document.getElementById("marketing2-link");
    var marketing3 = document.getElementById("marketing3-link");

    marketing1.classList.add("active");
    marketing2.classList.remove("active");
    marketing3.classList.remove("active");

}

function section4marketingtoogle2() {
    document.getElementById("our-services-section4-marketing3").style.display = "none";
    document.getElementById("our-services-section4-marketing1").style.display = "none";
    document.getElementById("our-services-section4-marketing2").style.display = "block";

    var marketing1 = document.getElementById("marketing1-link");
    var marketing2 = document.getElementById("marketing2-link");
    var marketing3 = document.getElementById("marketing3-link");

    marketing2.classList.add("active");
    marketing1.classList.remove("active");
    marketing3.classList.remove("active");
}

function section4marketingtoogle3() {
    document.getElementById("our-services-section4-marketing2").style.display = "none";
    document.getElementById("our-services-section4-marketing1").style.display = "none";
    document.getElementById("our-services-section4-marketing3").style.display = "block";

    var marketing1 = document.getElementById("marketing1-link");
    var marketing2 = document.getElementById("marketing2-link");
    var marketing3 = document.getElementById("marketing3-link");

    marketing3.classList.add("active");
    marketing1.classList.remove("active");
    marketing2.classList.remove("active");
}


