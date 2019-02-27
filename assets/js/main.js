//onload fade in
TweenMax.to($("body"), 1.3, {autoAlpha:1, ease: Power3.easeInOut});

//TweenMax.staggerFrom(".btn", 2, {scale:0.5, opacity:0, delay:0.5, ease:Elastic.easeOut, force3D:true}, 0.2);

$(document).ready(function() {
    //swup 
      const swup = new Swup({
        doScrollingRightAway: false,
        animateScroll: false,
        scrollFriction: .3,
        scrollAcceleration: .04
    });
    
    //GSAP menu timeline
    
    TweenMax.staggerFrom(".navbar-brand, .nav-item", 1, {autoAlpha:0, x: -50, ease: Back.easeInOut.config(1.7), force3D:true}, 0.1);
       
    //bs carousel
    $('.carousel').carousel({
      interval: 2000
    });
       
    //GSAP + Scroll Magic
    // init
    var controller = new ScrollMagic.Controller();
    
    // assign trigger class
    $(".stagger-up").each(function() {

      var stagger = TweenMax.staggerFrom($(this).find(".slide-up"), 1, {
          opacity:0,    
          delay:0,
          y: 50,
          ease: Back.easeInOut.config(1.7)
      },
      0.1);

        var fadeUp = new ScrollMagic.Scene({
                triggerElement: this,
                triggerHook: 'onEnter',
                reverse:true
            })
            .setTween(stagger)
            .addTo(controller);
    }); 
    
    $(".stagger-right").each(function() {

      var stagger2 = TweenMax.staggerFrom($(this).find(".slide-right"), 1, {
          opacity:0,    
          delay:0,
          x: -50,
          ease: Back.easeInOut.config(1.7)
      },
      0.1);

        var fadeRight = new ScrollMagic.Scene({
                triggerElement: this,
                triggerHook: 'onEnter',
                reverse: true
            })
            .setTween(stagger2)
            .addTo(controller);
    }); 
  
    $(".stagger-down").each(function() {

      var stagger3 = TweenMax.staggerFrom($(this).find(".slide-down"), 1, {
          opacity:0,    
          delay:0,
          y: -50,
          ease: Back.easeInOut.config(1.7)
      },
      0.1);

        var fadeDown = new ScrollMagic.Scene({
                triggerElement: this,
                triggerHook: 'onEnter',
                reverse: true
            })
            .setTween(stagger3)
            .addTo(controller);
    }); 
    
    $(".stagger-fade").each(function() {

      var stagger3 = TweenMax.staggerFrom($(this).find(".fade-in"), 1, {
          opacity:0,    
          delay:0,
          ease: Back.easeInOut.config(1.7)
      },
      0.1);

        var fadeDown = new ScrollMagic.Scene({
                triggerElement: this,
                triggerHook: 'onEnter',
                reverse: true
            })
            .setTween(stagger3)
            .addTo(controller);
    }); 
    
        $(".animate-out").click(function(){
          TweenMax.to("h1, h2, h3, .h4, li, p, i, hr", 0.5, {opacity:0, delay: 0, x:-100, ease:Back.easeIn}, 0.1);
          TweenMax.to("img", 2, {opacity:0, scale:0, delay: 0, ease:Back.easeIn}, 0.1);
        });

       //close mobile nav on click
       $('.nav-link, body').on('click',function() {
           $('.navbar-collapse').collapse('hide');
        });
       
        //toggle mobile menu animation
       $('.navbar-toggler, .nav-item').on('click',function() {
           $('.wrapper-menu').toggleClass('open');
        });
       
       //smooth scroll
        $('a').click(function(){
            var top = $('body').find($(this).attr('href')).offset().top;
            $('html, body').animate({
                scrollTop: top
            }, 1200, 'easeInOutExpo');
            return false;
        });
    
       //lazy load
        $(".lazy").recliner({
            attrib: "data-src", // selector for attribute containing the media src
            throttle: 0,      // millisecond interval at which to process events
            threshold: 5,     // scroll distance from element before its loaded
            printable: true,    // be printer friendly and show all elements on document print
            live: true          // auto bind lazy loading to ajax loaded elements
        });
       
});//end doc ready


//swup reinit plugins

document.addEventListener('swup:contentReplaced', function () {
    
    //GSAP menu timeline
    
    TweenMax.staggerFrom($(".navbar-brand, .nav-item"), 1, {autoAlpha:0, x: -50, ease: Back.easeInOut.config(1.7)}, 0.1);
    
    //scroll magic + gsap reinit
    
    var controller = new ScrollMagic.Controller();

    $(".stagger-up").each(function() {

      var stagger = TweenMax.staggerFrom($(this).find(".slide-up"), 1, {
          opacity:0,    
          delay:0,
          y: 50,
          ease: Back.easeInOut.config(1.7)
      },
      0.1);

        var fadeUp = new ScrollMagic.Scene({
                triggerElement: this,
                triggerHook: 'onEnter',
                reverse:true
            })
            .setTween(stagger)
            .addTo(controller);
    });     
    
    $(".stagger-right").each(function() {

      var stagger2 = TweenMax.staggerFrom($(this).find(".slide-right"), 1, {
          opacity:0,    
          delay:0,
          x: -50,
          ease: Back.easeInOut.config(1.7)
      },
      0.1);

        var fadeRight = new ScrollMagic.Scene({
                triggerElement: this,
                triggerHook: 'onEnter',
                reverse:true
            })
            .setTween(stagger2)
            .addTo(controller);
    }); 
    
    $(".stagger-down").each(function() {

      var stagger3 = TweenMax.staggerFrom($(this).find(".slide-down"), 1, {
          opacity:0,    
          delay:0,
          y: -50,
          ease: Back.easeInOut.config(1.7)
      },
      0.1);

        var fadeDown = new ScrollMagic.Scene({
                triggerElement: this,
                triggerHook: 'onEnter',
                reverse:true
            })
            .setTween(stagger3)
            .addTo(controller);
    }); 
    
    //lazyload reinit
    $(".lazy").recliner({
        attrib: "data-src", // selector for attribute containing the media src
        throttle: 0,      // millisecond interval at which to process events
        threshold: 5,     // scroll distance from element before its loaded
        printable: true,    // be printer friendly and show all elements on document print
        live: true          // auto bind lazy loading to ajax loaded elements
    });
    
    //init BS carousel and pass speed option

    $('.carousel').carousel({
      interval: 2000
    });

    //mobile menu animation

    //close mobile menu on nav link click
    $('.navbar-toggler, .nav-item').on('click',function() {
      $('.wrapper-menu').toggleClass('open');
    });

    //close mobile nav on click
    $('.nav-link, body').on('click',function() {
      $('.navbar-collapse').collapse('hide');
    });

    //smooth scroll https://www.taniarascia.com/smooth-scroll-to-id-with-jquery/
    //https://stackoverflow.com/questions/16680045/how-to-add-easing-to-animate-scrolltop

    $('a').click(function(){
        var top = $('body').find($(this).attr('href')).offset().top;
        $('html, body').animate({
            scrollTop: top
        }, 1000, 'easeInOutExpo');

        return false;
      });

    //lazy load
    $(".lazy").recliner({
        attrib: "data-src", // selector for attribute containing the media src
        throttle: 0,      // millisecond interval at which to process events
        threshold: 5,     // scroll distance from element before its loaded
        printable: true    // be printer friendly and show all elements on document print
    //    live: true          // auto bind lazy loading to ajax loaded elements
    });
    

});//end swup reinit

// API js display jaxx blog --> https://www.youtube.com/watch?v=rGObWtjxGBc
