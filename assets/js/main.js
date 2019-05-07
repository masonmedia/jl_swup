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

  // api calls
  blogPosts();
  coinData();
  // marketData();

  // https://medium.freecodecamp.org/here-is-the-most-popular-ways-to-make-an-http-request-in-javascript-954ce8c95aaa
  // const url = "https://jsonplaceholder.typicode.com/todos";
  // fetch(url)
  //   .then(data=>{return data.json()})
  //   .then(res=>{console.log(res)})
  //   .catch(error => console.error('Error:', error));
    

  // fetch('https://jsonplaceholder.typicode.com/todos')
  // .then(response => response.json())
  // .then(data => console.log(JSON.stringify(data))
  

  // API blog call
  // if (window.location.pathname === '/community.php') {
  //   // console.error('oncommunity main - check for community page direct load');
  //   //if remove .php the window.location.pathname will NOT work -- they have to match
  //   displayNewsFeeds();
  // }

}); //end doc ready

//swup reinit plugins *************************

document.addEventListener('swup:contentReplaced', function () {

  blogPosts();
  coinData();
  // marketData();
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
  // if (window.location.pathname === '/community.php') {
  //   // console.error('oncommunity navigate - check for community page navigate-to load');
  //   displayNewsFeeds();
  // }

}); //end swup reinit

// API js display jaxx blog --> https://www.youtube.com/watch?v=rGObWtjxGBc

// functions

function fade() {
  TweenMax.to($("body"), 1.5, {
    autoAlpha: 1,
    ease: Power3.easeInOut
  });
}

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
    interval: 2500
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

function marketData() {

    function createNode(element) {
      return document.createElement(element);
    }
  
    function append(parent, el) {
      return parent.appendChild(el);
    }
  
    // const ul = document.getElementById('marketData'); //doesn't seem to be needed
    // const dataURL = 'https://min-api.cryptocompare.com/data/pricemultifull?fsyms=BTC,ETH,XRP,BCH,EOS,LTC,ADA,XMR,DASH,TRX,ETC,BNB,XLM,ADA,ZEC,UDST&tsyms=USD';
  
    fetch('https://min-api.cryptocompare.com/data/pricemultifull?fsyms=BTC,ETH,XRP,BCH,EOS,LTC,ADA,XMR,DASH,TRX,ETC,BNB,XLM,ADA,ZEC,UDST&tsyms=USD')
    .then(response => { return response.json() }) // Transform the data into json
    .then(data => {
          // Work with JSON data here
          console.log(data)
        })
      .then(function appendData(data) {
        var mainContainer = document.getElementById("marketData");
        for (var i = 0; i < data.length; i++) {
          var title = document.createElement("h2");
          var content = document.createElement("p");
          var a = document.createElement('a');
          var linkText = document.createTextNode("Read more");
  
          title.innerHTML =  data[i].id;
          content.innerHTML =  data[i].name;
          a.href = data[i].link;
          a.classList.add('btn', 'btn-orange');
  
          mainContainer.appendChild(title);
          mainContainer.appendChild(content);
          mainContainer.appendChild(a).target = "_blank";
          a.appendChild(linkText);
        }
      })
    .catch(function(error) {
      // If there is any error you will catch them here
      getError((err) => console.log(err))
    });  
}


// fetch('https://min-api.cryptocompare.com/data/pricemultifull?fsyms=BTC,ETH,XRP,BCH,EOS,LTC,ADA,XMR,DASH,TRX,ETC,BNB,XLM,ADA,ZEC,UDST&tsyms=USD')
fetch('https://min-api.cryptocompare.com/data/pricemultifull?fsyms=BTC,ETH,XRP,BCH,EOS,LTC,ADA,XMR,DASH,TRX,ETC,BNB,XLM,ADA,ZEC,UDST&tsyms=USD')
    .then(response => { return response.json() }) // Transform the data into json
    .then(data => {
          // Work with JSON data here

          // for ( var i = 0; i < data.length; i++) {
          //   var obj = data[i];
          //   console.log(obj);
          // }

          // console.log(data);
          
          var mainContainer = document.getElementById("marketData");
          // var output = Object.entries(data.RAW).map(([key, value]) => ({key,value})); 
          // console.log(output);

          for ( var i in data ) {
            // convert object to array
            const keys = Object.entries(data.RAW).map(([key, value]) => ({key,value})) 
           
              for (const key of keys) {
                var title = document.createElement("h2");
                var content = document.createElement("p");
    
                title.innerHTML =  key.key;
                content.innerHTML =  key.value;  
                mainContainer.appendChild(title);
                mainContainer.appendChild(content);
                console.log(key)
              }
          }
        })
      .catch(err => {
            // Do something for an error here
          })

 

    
// https://www.taniarascia.com/how-to-use-the-javascript-fetch-api-to-get-json-data/
// fetch('https://min-api.cryptocompare.com/data/pricemultifull?fsyms=BTC,ETH,XRP,BCH,EOS,LTC,ADA,XMR,DASH,TRX,ETC,BNB,XLM,ADA,ZEC,UDST&tsyms=USD')
//   .then(response => {
//     return response.json()
//   })
//   .then(data => {
//     // Work with JSON data here
//     console.log(data)
//   })
//   .catch(err => {
//     // Do something for an error here
//   })

function blogPosts() {

  function createNode(element) {
    return document.createElement(element);
  }

  function append(parent, el) {
    return parent.appendChild(el);
  }

  // const ul = document.getElementById('authors'); //doesn't seem to be needed
  const url = 'https://blog.jaxx.io/wp-json/wp/v2/posts?per_page=8';
  // https://blog.jaxx.io/wp-json/wp/v2/posts?filter[category_name]=security

  fetch(url)
  .then((resp) => resp.json()) // Transform the data into json
    .then(function appendData(data) {
      var mainContainer = document.getElementById("authors");
      for (var i = 0; i < data.length; i++) {
        var h2 = document.createElement("h2");
        var content = document.createElement("p");
        var a = document.createElement('a');
        var linkText = document.createTextNode("Read more");

        h2.innerHTML =  data[i].title.rendered;
        content.innerHTML =  data[i].excerpt.rendered;
        a.href = data[i].link;
        a.classList.add('btn', 'btn-orange');

        mainContainer.appendChild(h2);
        mainContainer.appendChild(content);
        mainContainer.appendChild(a).target = "_blank";
        a.appendChild(linkText);
      }
    })
  .catch(function(error) {
    // If there is any error you will catch them here
    getError((err) => console.log(err))
  });  
  
  // fetch(url)
  // .then((resp) => resp.json()) // Transform the data into json
  //   .then(function appendData(data) {
  //     var mainContainer = document.getElementById("authors");
  //     for (var i = 0; i < data.length; i++) {
  //       var div = document.createElement("div");
  //       div.innerHTML =  data[i].title.rendered;
  //       mainContainer.appendChild(div);
  //     }
  //   })
  // .catch(function(error) {
  //   // If there is any error you will catch them here
  // });

}

// Object.values(somedata)


// https://dev.to/dev_amaz/using-fetch-api-to-get-and-post--1g7d
// fetch('https://jsonplaceholder.typicode.com/users')
//         .then((res) => { return res.json() })
//         .then((data) => {
//             let result = `<h2> Random User Info From Jsonplaceholder API</h2>`;
//             data.forEach((user) => {
//                 const { id, name, email, address: { city, street } } = user
//                 result +=
//                     `<div>
//                      <h5> User ID: ${id} </h5>
//                          <ul class="">
//                              <li> User Full Name : ${name}</li>
//                              <li> User Email : ${email} </li>
//                              <li> User Address : ${city}, ${street} </li>
//                          </ul>
//                       </div>`;
//                         document.getElementById('result').innerHTML = result;
//                     });
//                 })


// function createNode(element) {
//   return document.createElement(element);
// }

// function append(parent, el) {
//   return parent.appendChild(el);
// }

// const ul = document.getElementById('authors');
// const url = 'https://blog.jaxx.io/wp-json/wp/v2/posts?per_page=4';

// fetch(url)
// .then((resp) => resp.json()) // Transform the data into json
//   .then(function(data) {
//     console.log(data);
//     let authors = data.results;
//     return authors.map(function(author) { // Map through the results and for each run the code below
//       let li = createNode('li'), //  Create the elements we need
//         img = createNode('img'),
//         span = createNode('span');
//         h2 = createNode('h2');
          
//         img.classList.add('opacity-full'); // Add class to img [mason edit]
//         img.src = author.picture.medium;  // Add the source of the image to be the src of the img element
//         li.innerHTML = `${author.title.rendered}`;
//         span.innerHTML = `${author.id} ${author.date}`; // Make the HTML of our span to be the first and last name of our author
//         // h2.innerHTML = `${author.gender}`;
//         append(li, h2);
//         append(ul, li);
//         append(li, span);
//         append(li, img); // Append all our elements
      
//     })
//   })
// .catch(function(error) {
//   // If there is any error you will catch them here
// }); 


// reduce() tut --> https://medium.freecodecamp.org/a-practical-guide-to-fetch-reduce-and-formatting-data-from-an-external-api-283ddd9bfdcb
// const cityJobsData = fetch('https://data.cityofnewyork.us/resource/swhp-yxa4.json');
// cityJobsData
//   .then(data => data.json())
//   .then(data => {
//     const agencyFrequency = data.reduce((agencies, value) => {
//       agencies[value.agency] = agencies[value.agency] ? agencies[value.agency] + 1 : 1;
//       return agencies;
//     }, {});
//     console.log(agencyFrequency);
//   })
//   .catch(err => console.log(err));
