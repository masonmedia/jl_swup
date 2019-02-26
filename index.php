<?php

$title = "Jaxx Liberty | Home";

include 'includes/header.php';

?>

<!--banner-->

<div id="banner" role="banner" class="container-fluid p-0">
  <div class="row d-flex min-700-lg text-light py-5 stagger-right">
        <img class="img-full absolute z-0 left-0 up up-med lazy" data-src="/assets/img/jaxx-tablet-chair-right.jpg" alt="Welcome to Jaxx Liberty.">
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left p-5">
            <h1 class="h4 mt-5">Jaxx Liberty</h1>
            <h2 class="site-title knockout-gradient font-weight-bold zoom zoom-med">Your all-in-one digital asset wallet.</h2>
            <h3 class="h4 zoom zoom-med-slow">Securely manage and exchange more than 85 digital assets including Bitcoin, Ethereum, Litecoin, and Dash, all for free.</h3>
            <!--button container-->
            <div class="container-fluid pt-3">
                <div class="row d-flex">
                    <div class="col-xs-6 pr-3 zoom zoom-slow">
                       <a href="#sec-1"><p class="p-btn mb-1 border-0 p-0">Learn more <i class="fa fa-angle-right fa-btn"></i></p></a>
                    </div>
                    <div class="col-xs-6 zoom zoom-slow">
                        <a href="https://jaxx.io/downloads" target="_blank"><p class="p-btn mb-1 border-0 p-0">Download <i class="fa fa-angle-right fa-btn"></i></p></a> 
                    </div>
                </div>
            </div>
        </div>
        <div class="offset-lg-6"></div>
    </div>    
</div><!--end banner-->

<!--main body-->
   
<main id="main">
    <div class="container-fluid p-0 text-secondary">

        <section>
            <div id="sec-1" class="row d-flex p-5 min-500 bg-white relative stagger-down">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left down">
                    <h2 class="h4 slide-down">Send, receive, exchange, and learn</h2>
                    <h3 class="section-title text-dark slide-down">The leading multi-platform digital asset wallet.</h3>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 down down-med">
                    <p class="p-big pt-3 m-0 slide-down">Ranked among the top digital asset wallets, with thousands of users and over 3000 daily transactions, Jaxx Liberty is an industry leading investment tool that is reshaping the way people invest, learn about blockchain, and manage digital assets.</p>
                    <div class="down down-slow">
                        <a href="/features.php"><p class="p-btn mt-3 slide-down">Discover <i class="fa fa-angle-right fa-btn orange"></i></p></a>
                    </div>
                </div>
            </div><!--end row-->
        </section>

         <section>
             <div class="row d-flex bg-white">
                <div class="col-lg-12 min-700-lg d-flex flex-column justify-content-center align-items-center down down-med">
                   <img class="img-full absolute z-0 left-0 filter-dark up up-med lazy" data-src="/assets/img/jaxx-2-people-selfie.jpeg" alt="Welcome to Decentral Inc.">
<!--                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-imac-white.jpg" alt="Decentral is Canada's leading blockchain company." title="Decentral Inc.">-->
                </div>
            </div>
        </section>

        <!--features-->

        <section>
            <div class="row d-flex p-5 min-500 bg-white stagger-right">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left right">
                    <h2 class="h4 slide-right">Features</h2>
                    <h3 class="section-title text-dark mb-0 slide-right">See what Jaxx Liberty can do for you.</h3>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 right-med">
                    <p class="p-big pt-3 m-0 slide-right">Get the latest blockchain headline news, real-time market data, check your portfolio, and exchange between digital assets all in one convenient place.</p>
                    <div class="right-right-slow">
                        <a href="/features.php"><p class="p-btn mt-3 slide-right">Learn more <i class="fa fa-angle-right fa-btn orange"></i></p></a>  
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row d-flex bg-light">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-android-tablet-pc.jpg" alt="Jaxx Liberty is the leading multi-platform digital asset wallet." title="Jaxx Liberty">
                </div>
            </div>
        </section>

        <!--partnerships-->

        <section>
            <div class="row d-flex p-5 min-500 bg-white stagger-down">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left down">
                    <h2 class="h4 slide-down">Multi-platform</h2>
                    <h3 class="section-title text-dark slide-down">Use on your favourite device.</h3>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 down down-med">
                    <p class="p-big pt-3 m-0 slide-down">Join thousands of users who already trust Jaxx Liberty. Download it for free on Android, iOS, Mac OS X, Windows, Linux, or Google Chrome extension.</p>
                    <div class="slide-down">
                        <div class="btn-group dropright">
                            <p id="download" class="p-btn mt-3 orange" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Start Now <i class="fa fa-angle-right fa-btn orange"></i></p>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://play.google.com/store/apps/details?id=com.liberty.jaxx" target="_blank" onclick="googleAnalyticsTrigger('Android', 'Home_Section2')">Android</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" onclick="googleAnalyticsTrigger('iOS', 'Home_Section2')" href="https://itunes.apple.com/us/app/jaxx-liberty/id1435383184?ls=1&mt=8" target="_blank">iOS</a>
                            <div class="dropdown-divider"></div>
                            <!--chrome extension-->
                            <a class="dropdown-item" role="button" onclick="googleAnalyticsTrigger('Chrome', 'Home_Section2')" href="https://chrome.google.com/webstore/detail/jaxx-liberty/cjelfplplebdjjenllpjcblmjkfcffne" target="_blank">Chrome</a>
                            <div class="dropdown-divider"></div>
                            <!--desktop-->
                            <a class="dropdown-item" role="button" onclick="googleAnalyticsTrigger('Desktop', 'Home_Section2')" href="/downloads.php">Desktop</a>
                            </div>
                        </div>  
                    </div>
                </div>
            </div><!--end row-->
        </section>

        <section>
            <div class="row d-flex bg-light">
                <div class="col-lg-12 min-700-lg down down-med">
                   <img class="img-full absolute z-0 left-0 up up-med lazy" data-src="/assets/img/jaxx-iphone-here-look.jpg" alt="Welcome to Decentral Inc.">
<!--                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/decentral-toronto-flatiron.jpeg" alt="Decentral is a critical node in a growing network of companies using decentralized technologies." title="Decentral partnerships">-->
                </div>
            </div>
        </section>

        <!--team-->

        <section>
            <div class="row d-flex p-5 min-500 bg-white stagger-right">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left right">
                    <h2 class="h4 slide-right">Security</h2>
                    <h3 class="section-title text-dark mb-0 slide-right">Your security is our top priority.</h3>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 right-med">
                    <p class="p-big pt-3 m-0 slide-right">With Jaxx Liberty, you'll enjoy industry leading security features including a 12-word backup phrase, password protection, password strength checker, facial recognition, and state-of-the-art encryption.</p>
                    <div class="right-right-slow">
                        <a href="/features.php"><p class="p-btn mt-3 slide-right">Learn more <i class="fa fa-angle-right fa-btn orange"></i></p></a>  
                    </div>
                </div>
            </div>
        </section>

       <section>
            <div class="row d-flex bg-light">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-pc-coffee.png" alt="With Jaxx Liberty you'll enjoy industry leading security features including a 12-word backup phrase, password protection, password strength checker, facial recognition, and state-of-the-art encryption.">
                </div>
            </div>
        </section>
        
<!--
        <section>
            <div class="row d-flex bg-light">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-ipad-macbook-closeup-desk.jpg" alt="We champion the decentralized movement by building technology that empowers." title="Decentral team">
                </div>
            </div>
        </section>
-->

        <!--testimonials-->

        <section>
            <div class="row d-flex p-5 min-500 bg-white stagger-down">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left down">
                    <h2 class="h4 slide-down">Trusted by the best</h2>
                    <h3 class="section-title mb-0 slide-down">You're in good company.</h3>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 down-med">
<!--                     <p class="p-big pt-0 m-0 slide-down">Decentral is an innovator in the blockchain space, having diverse partnerships with a variety of companies, in addition to a base of thousands currently using Jaxx Liberty. See what industry leaders are saying.</p>-->
                     <p class="p-big pt-0 m-0 slide-down">With thousands of users and a wide range of partnerships, Decentral is an innovator in the blockchain space. See what industry leaders are saying about Jaxx Liberty.</p>
                </div>
            </div>
        </section>

        <!-- carousel-->

        <section>
            <div id="testimonials" class="carousel slide carousel-fade relative" data-ride="carousel" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
              <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/decentral-black-cubes.jpeg" alt="Decentral is an innovation hub for disruptive and decentralized technologies." title="Decentral testimonials">
              <ol class="carousel-indicators">
                <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                <li data-target="#testimonials" data-slide-to="1"></li>
                <li data-target="#testimonials" data-slide-to="2"></li>
                <li data-target="#testimonials" data-slide-to="3"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div role="banner" class="container-fluid">
                    <div class="row d-flex min-700-lg p-0">        
                        <div class="col-lg-9 banner-left p-5 o-12">
                            <h3 class="section-title text-light font-weight-light">"In Jaxx, Presearch has a popular, well-respected wallet to offer its exponentially growing user base of over 300,000 members. We join Decentral in the mission of putting users first.”</h3>
                            <h3 class="font-weight-bold orange mt-3">Colin Paper</h3>
                            <p class="p-big orange mb-3">&mdash; Founder, Presearch</p>
                        </div>
                        <div class="offset-lg-3"></div>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                  <div role="banner" class="container-fluid">
                    <div class="row d-flex min-700-lg p-0">        
                        <div class="col-lg-9 banner-left p-5 o-12">
                            <h3 class="section-title text-light font-weight-light">"I look forward to seeing the new Jaxx Liberty and how the broader DigiByte community will use it."</h3>
                            <h3 class="font-weight-bold orange mt-3">Josiah Spackman</h3>
                            <p class="p-big orange mb-3">&mdash; Ambassador, DigiByte Foundation</p>
                        </div>
                        <div class="offset-lg-3"></div>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                  <div class="container-fluid">
                    <div class="row d-flex min-700-lg p-0 bg--slide-3">
                        <div class="col-lg-9 banner-left p-5 o-12">
                            <h3 class="section-title text-light font-weight-light">"Polymath welcomes the launch of Jaxx Liberty. We chose Jaxx Liberty as our go-to wallet for the POLY token community."</h3>
                            <h3 class="font-weight-bold orange mt-3">Trevor Koverko</h3>
                            <p class="p-big orange mb-3">&mdash; Co-Founder & CEO, Polymath</p>
                        </div>
                        <div class="offset-lg-3"></div>
                    </div>
                </div>
                </div><!--end slide-->
                <div class="carousel-item">
                  <div class="container-fluid">
                    <div class="row d-flex min-700-lg p-0 bg--slide-3">    
                        <div class="col-lg-9 banner-left p-5 o-12">
                            <h3 class="section-title text-light font-weight-light">"We’re very happy to partner with Jaxx, a highly-secure and easy-to-use wallet that is the first to support RSK"</h3>
                            <h3 class="font-weight-bold orange mt-3">Diego Gutierrez Zaldivar</h3>
                            <p class="p-big orange mb-3">&mdash; CEO & Co-Founder, RSK Labs</p>
                        </div>
                        <div class="offset-lg-3"></div>
                    </div>
                </div>
                </div><!--end slide-->
                <div class="carousel-item">
                  <div class="container-fluid">
                    <div class="row d-flex min-700-lg p-0 bg--slide-3">
                        <div class="col-lg-9 banner-left p-5 o-12">
                            <h3 class="section-title text-light font-weight-light">“Jaxx is a partner we rely on. We can be sure Jaxx Liberty will serve and support our expanding ecosystem.”</h3>
                            <h3 class="font-weight-bold orange mt-3">Malcolm CasSelle</h3>
                            <p class="p-big orange mb-3">&mdash; President, WAX / CIO, OPSkins</p>
                        </div>
                        <div class="offset-lg-3"></div>
                    </div>
                </div>
                </div><!--end slide-->
              </div>
            </div><!--end carousel-->
        </section>       

        <!--support-->

        <section>
            <div class="row d-flex p-5 min-500 bg-white stagger-up">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left up">
                    <h2 class="h4 slide-up">Support</h2>
                    <h3 class="section-title m-0 slide-up">World class user support.<span class="d-table">24/7, 365.</span></h3>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left o-12 up-med">
                    <p class="p-big pt-3 m-0 slide-up">Jaxx Liberty's User Success Team is available to answer all of your questions through our written channels, 24/7.</p>
                    <div class="up up-slow">
                        <a href="https://support.decentral.ca/hc/en-us" target="_blank" class="animate-link"><p class="p-btn mt-3 slide-up">Here for you <i class="fa fa-angle-right fa-btn orange"></i></p></a>  
                    </div>
                </div>
            </div><!--end row-->
        </section>

        <section>
            <div class="row d-flex bg-light">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-lap-laptop-coffee.jpg" alt="Get help from the world class Jaxx Liberty User Success Team.">
                </div>
            </div>
        </section>
        
        <!--social-->

        <section>
            <div class="row d-flex p-5 min-500 bg-white stagger-up">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left up">
                    <h2 class="h4 slide-up">Stay connected</h2>
                    <h3 class="section-title m-0 slide-up">Become a part of the Decentral ecosystem.</h3>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left o-12 up-med">
                    <p class="p-big pt-3 m-0 slide-up">We consider ourselves part of extensive ecosystem, a large and growing network of people, friends, users, and <a href="/partnerships.php"><span class="orange">partners</span></a> around the world. Join the Jaxx Liberty community today.</p>
                    <div class="up up-slow">
                        <a href="/contact.php" class="animate-link"><p class="p-btn mt-3 slide-up">Join the adventure <i class="fa fa-angle-right fa-btn orange"></i></p></a>  
                    </div>
                </div>
            </div><!--end row-->

             <div class="row d-flex bg-light">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/decentral-community-red.jpeg" alt="Join the Decentral community" title="Decentral ecosystem">
                </div>
            </div>
        </section>

    </div><!--end container-->
</main>

<?php

include 'includes/footer.php';

?>