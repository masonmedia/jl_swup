//GSAP onload fade in
fade();

$(document).ready(function () {
  //swup 
  const swup = new Swup({
    doScrollingRightAway: false,
    animateScroll: false,
    scrollFriction: .3,
    scrollAcceleration: .04
  });

  //GSAP menu timeline
  // gsapMenuTimeline();

  //smooth scroll
  smoothScroll();

  //GSAP + Scroll Magic
  // gsapScrollAnimations();

  //lazy load
  lazyLoad();

  //close mobile nav on click
  navClose();

  //zendesk widget options
  zendesk();

  //bs carousel
  carousel();

  // API blog call
  if (window.location.pathname === '/community.php') {
    // console.error('oncommunity main - check for community page direct load');
    //if remove .php the window.location.pathname will NOT work -- they have to match
    displayNewsFeeds();
  }

}); //end doc ready

//swup reinit plugins *************************

document.addEventListener('swup:contentReplaced', function () {

  //GSAP menu timeline
  // gsapMenuTimeline();

  //smooth scroll
  smoothScroll();

  //scroll magic + gsap reinit
  // gsapScrollAnimations();

  //lazy load
  lazyLoad();

  //close mobile menu on nav link click
  navClose();

  //zendesk widget options
  zendesk();

  //init BS carousel and pass speed option
  carousel();

  // api call function
  if (window.location.pathname === '/community.php') {
    // console.error('oncommunity navigate - check for community page navigate-to load');
    displayNewsFeeds();
  }

}); //end swup reinit

// API js display jaxx blog --> https://www.youtube.com/watch?v=rGObWtjxGBc

// functions

function fade() {
  TweenMax.to($("body"), 1.5, {
    autoAlpha: 1,
    ease: Power3.easeInOut
  });
}

// function gsapMenuTimeline() {
//   TweenMax.staggerFrom($(".navbar-brand, .nav-item"), 1, {
//     autoAlpha: 0,
//     x: -50,
//     ease: Back.easeInOut.config(1.7)
//   }, 0.1);
// }

function smoothScroll() {
  $('a[href*="#"]').on('click', function (e) {
    e.preventDefault()

    $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top,
      },
      1200, 'easeInOutExpo');
    return false;
  });
}

function zendesk() {
  //zendesk widget options
  window.zESettings = {
    webWidget: {
      launcher: {
        label: {
          'en-US': 'Help',
          'fr': 'Besoin d\'aide'
        }
      },
      helpCenter: {
        title: {
          'en-US': 'Jaxx Liberty Support',
          'fr': 'Recherche d\'aide'
        },
        messageButton: {
          '*': 'Get in touch'
        }
      },
      color: {
        theme: '#fff',
        launcher: '#264277',
        launcherText: '#fff',
        button: '#ff6902',
        resultLists: '#ff6902',
        header: '#ff6902',
        title: '#fff',
        articleLinks: '#ff6902'
      }
    }
  };
}

function lazyLoad() {
  $(".lazy").recliner({
    attrib: "data-src", // selector for attribute containing the media src
    throttle: 0, // millisecond interval at which to process events
    threshold: 5, // scroll distance from element before its loaded
    printable: true, // be printer friendly and show all elements on document print
    live: true // auto bind lazy loading to ajax loaded elements
  });
}

function gsapScrollAnimations() {
  var controller = new ScrollMagic.Controller();

  $(".stagger-up").each(function () {

    var stagger = TweenMax.staggerFrom($(this).find(".slide-up"), 1, {
        opacity: 0,
        delay: 0,
        y: 50,
        ease: Back.easeInOut.config(1.7)
      },
      0.1);

    var fadeUp = new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: 'onEnter',
        reverse: true
      })
      .setTween(stagger)
      .addTo(controller);
  });

  $(".stagger-right").each(function () {

    var stagger2 = TweenMax.staggerFrom($(this).find(".slide-right"), 1, {
        opacity: 0,
        delay: 0,
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

  $(".stagger-down").each(function () {

    var stagger3 = TweenMax.staggerFrom($(this).find(".slide-down"), 1, {
        opacity: 0,
        delay: 0,
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
}

function carousel() {
  $('.carousel').carousel({
    interval: 2000
  });
}

function navClose() {
  //close mobile nav on click
  $('.nav-link').on('click', function () {
    $('.navbar-collapse').collapse('hide');
  });

  //toggle mobile menu animation
  $('.navbar-toggler, .nav-item').on('click', function () {
    $('.wrapper-menu').toggleClass('open');
  });
}

function displayNewsFeeds() {
  // already had the if statement in the initial API script so ddidn't need it again here
  if (window.location.pathname === '/community.php') {

    //jaxx blog API call
    var blogButtonContainer = document.getElementById("blog-button-container");

    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET', 'https://blog.jaxx.io/wp-json/wp/v2/posts?per_page=3');
    ourRequest.onload = function () {
      if (ourRequest.status >= 200 && ourRequest.status < 400) {
        var data = JSON.parse(ourRequest.responseText);
        createHTML(data);
      } else {
        console.log("We connected to the server, but it returned an error.");
      }
    };

    ourRequest.onerror = function () {
      console.log("Connection error");
    };

    ourRequest.send();

    function createHTML(postsContent) {
      var jaxxBlogString = '';
      var blogButtonContainer = document.getElementById("blog-button-container");
      for (i = 0; i < postsContent.length; i++) {

        // heading
        const blogHeading = document.createElement('h2');
        blogHeading.append(postsContent[i].title.rendered);

        // blog content
        const blogContent = document.createElement('div');
        blogContent.innerHTML = postsContent[i].content.rendered.substring(0, 700) + '...';

        // read more button
        const ellipsis = document.createElement('a');
        ellipsis.className = 'btn btn-outline-orange';
        ellipsis.textContent = 'Read More';
        ellipsis.href = postsContent[i].link;
        ellipsis.target = '_blank';

        blogButtonContainer.appendChild(blogHeading);
        blogButtonContainer.appendChild(blogContent);
        blogButtonContainer.appendChild(ellipsis);

      }
    }
  }
}