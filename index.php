<?php

$title = "Jaxx Liberty | Home";

include 'includes/header.php';

?>

<!--banner-->

<div id="banner" role="banner" class="container-fluid p-0">
  <div class="row d-flex min-100 min--100 relative">
        <img class="img-full absolute z-0 right-0 up up-med lazy" src="/assets/img/jaxx-iphone-X-4-gallery-right-2.jpg" alt="Welcome to Jaxx Liberty.">
        <!-- <img class="img-full absolute z-0 right-0 ds up up-med lazy" src="/assets/img/jaxx-macbook-coffee-notebook-right.png" alt="Welcome to Jaxx Liberty."> -->
            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-start text-left p-5">
            <h1 class="h4 orange zoom">Jaxx Liberty</h1>
            <h2 class="site-title font-weight-bold py-2 zoom zoom-med">
                <span class="knockout-gradient">Your multi-platform,</span><br>
                <span class="knockout-gradient">multi-currency</span><br>
                <span class="knockout-gradient">digital asset</span><br>
                <span class="knockout-gradient">wallet.</span>
            </h2>
            <!--button container-->
            <div class="container-fluid pt-2">
                <div class="row d-flex d-sm-flex-column">
                    <div class="col-xs-6 pr-3 zoom zoom-slow">
                       <a href="#sec-1"><p class="p-btn mb-1 border-0 p-0">Learn more <i class="fa fa-angle-right fa-btn"></i></p></a>
                    </div>
                    <div class="col-xs-6 zoom zoom-slow">
                        <a href="/downloads.php"><p class="p-btn mb-1 border-0 p-0" onclick="googleAnalyticsTrigger('Downloads_Page', 'Home_Banner')">Download <i class="fa fa-angle-right fa-btn"></i></p></a> 
                    </div>
                </div>
            </div>
        </div>
        <div class="offset-lg-5"></div>
    </div>    
</div><!--end banner-->

<!--main body-->
   
<main id="main">
    <div class="container-fluid p-0 text-secondary">

        <!--intro-->
        
        <section>
            <div id="sec-1" class="row d-flex p-5 min-500 bg-white relative stagger-down">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left down">
                    <h2 class="h4 slide-down">Jaxx Liberty</h2>
                    <h3 class="section-title text-dark slide-down">The leading all-in-one digital asset wallet. </h3>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 down down-med">
                    <p class="p-big pt-3 m-0 slide-down">Jaxx Liberty builds on the success of Jaxx Classic, one of the most popular blockchain and digital asset wallets, with millions of downloads. With thousands of users and over 3000 daily transactions, Jaxx Liberty is reshaping the way people manage their digital assets.</p>
                    <div class="down down-slow">
                        <a href="/features.php"><p class="p-btn mt-3 slide-down">Discover <i class="fa fa-angle-right fa-btn orange"></i></p></a>
                    </div>
                </div>
            </div><!--end row-->
        </section>

         <section>
             <div class="row d-flex bg-white relative">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-2-people-selfie-logo.jpg" alt="Jaxx Liberty is the leading multi-platform digital asset wallet.">
                    <!--<img class="img-full d-flex m-auto absolute z-0 right-0 up up-med lazy" src="/assets/img/jaxx-black-macbook-mockup-og.jpg" alt="Welcome to Jaxx Liberty.">-->
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
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 right right-med">
                    <p class="p-big pt-3 m-0 slide-right">Get the latest blockchain headline news, real-time market data, check your portfolio, and exchange between digital assets all in one convenient place.</p>
                    <div class="right right-slow">
                        <a href="/features.php"><p class="p-btn mt-3 slide-right">Learn more <i class="fa fa-angle-right fa-btn orange"></i></p></a>  
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row d-flex bg-light">
                <div class="col-lg-12 min-700-lg down down-med">
                   <img class="img-full absolute z-0 right-0 lazy" data-src="/assets/img/jaxx-apple-multi-device-min.jpg" alt="Get the latest blockchain headline news, real-time market data, check your portfolio, and exchange between digital assets all in one convenient place.">
                </div>
            </div>
        </section>

        <!--multi-platform-->

        <section>
            <div class="row d-flex p-5 min-500 bg-white stagger-down">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left down">
                    <h2 class="h4 slide-down">Multi-platform</h2>
                    <h3 class="section-title text-dark slide-down">Use on your favourite device.</h3>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 down down-med">
                    <p class="p-big pt-3 m-0 slide-down">Join thousands of users who already trust Jaxx Liberty. Download it for free on Android, iOS, Mac OS X, Windows, Linux, or Google Chrome extension.</p>
                    <div class="slide-down">
                        <div class="row d-flex d-sm-flex-column py-4 pl-3 slide-right">
                            <!--jaxx liberty google store-->
                            <a onclick="googleAnalyticsTrigger('Android', 'Home_Section2')" href="https://play.google.com/store/apps/details?id=com.liberty.jaxx" target="_blank"><img class="store-badge mr-1 mt-1" src="/assets/img/jaxx-google-play.png" alt="Google Play Button"/></a>
                            <!--jaxx liberty itunes-->
                            <a onclick="googleAnalyticsTrigger('iOS', 'Home_Section2')" href="https://itunes.apple.com/us/app/jaxx-liberty/id1435383184?ls=1&mt=8" target="_blank"><img class="store-badge mr-1 mt-1" src="/assets/img/jaxx-app-store.png" alt="iTunes App Store Button"/></a>
                            <!--jaxx liberty chrome-->
                            <a onclick="googleAnalyticsTrigger('Chrome', 'Home_Section2')" href="https://chrome.google.com/webstore/detail/jaxx-liberty/cjelfplplebdjjenllpjcblmjkfcffne" target="_blank"><img class="store-badge mr-1 mt-1" src="/assets/img/jaxx-chrome-store.png" alt="Chrome Web Store"/></a>
                        </div><!--end button nest row--> 
                        <div class="right right-med p-0">
                            <a href="/downloads.php" onclick="googleAnalyticsTrigger('Desktop', 'Home_Section2')"><p class="p-btn pl-0 slide-right">Desktop versions <i class="fa fa-angle-right fa-btn orange"></i></p></a> 
                        </div>  
                    </div>
                </div>
            </div><!--end row-->
        </section>

        <section>
            <div class="row d-flex bg-light">
                <div class="col-lg-12 min-700-lg down down-med">
                   <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-iphone-here-look.jpg" alt="Download Jaxx Liberty for free on Android, iOS, Mac OS X, Windows, Linux, or Google Chrome extension.">
                </div>
            </div>
        </section>

        <!--security-->

        <section>
            <div class="row d-flex p-5 min-500 bg-white stagger-right">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left right">
                    <h2 class="h4 slide-right">Security</h2>
                    <h3 class="section-title text-dark mb-0 slide-right">Putting you in control.</h3>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 right right-med">
                    <p class="p-big pt-3 m-0 slide-right">We never hold your digital assets, you are in complete control. Your 12-word mnemonic and private keys are never stored on our server. They are securely stored on your device  using state-of-the-art encryption including password protection, password strength checker, and facial recognition.</p>
                    <div class="right right-slow">
                        <a href="/security.php"><p class="p-btn mt-3 slide-right">Learn more <i class="fa fa-angle-right fa-btn orange"></i></p></a>  
                    </div>
                </div>
            </div>
        </section>

       <section>
            <div class="row d-flex bg-light">
                <div class="col-lg-12 min-700-lg down down-med">
                    <!--<img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-pc-coffee.png" alt="">-->
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-android-wall-graffiti.jpg" alt="We never hold your digital assets, you are in complete control.">
                </div>
            </div>
        </section>

        <!--testimonials-->

        <section>
            <div class="row d-flex p-5 min-500 bg-white stagger-down">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left down">
                    <h2 class="h4 slide-down">Trusted by the best</h2>
                    <h3 class="section-title mb-0 slide-down">You're in good company.</h3>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 down down-med">
                     <p class="p-big pt-0 m-0 slide-down">Decentral is an innovator in the blockchain & cryptocurrency space. With thousands of users and a wide range of partnerships, see what community leaders are saying about Jaxx Liberty.</p>
                </div>
            </div>
        </section>

        <!-- carousel-->

        <section>
            <div id="testimonials" class="carousel slide carousel-fade relative up up-med" data-ride="carousel" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
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
                    <div class="row d-flex min-700-lg p-0">
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
                    <div class="row d-flex min-700-lg p-0">    
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
                    <div class="row d-flex min-700-lg p-0">
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
        
        <!--Our friends-->

        <section>
            <div class="row d-flex p-5 min-500 bg-white stagger-up">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left up">
                    <h2 class="h4 slide-up">Our friends</h2>
                    <h3 class="section-title m-0 slide-up">Home to the top digital assets.</h3>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left o-12 up up-med">
                    <p class="p-big pt-3 m-0 slide-up">Jaxx Liberty brings together over 85 digital assets and communities including Bitcoin, Ethereum, Litecoin, Dash, Digibyte, Ripple, and more.</p>
                    <div class="up up-slow">
                        <a href="/community.php" target="_blank"><p class="p-btn mt-3 slide-up">Learn more <i class="fa fa-angle-right fa-btn orange"></i></p></a>  
                    </div>
                </div>
            </div><!--end row-->
        </section>

        <section>
            <div class="row d-flex bg-light">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-apple-4-iphones-min.jpg" alt="Jaxx Liberty brings together over 85 digital assets and communities including Bitcoin, Ethereum, Litecoin, Dash, Digibyte, Ripple, and more.">
                </div>
            </div>
        </section>             

        <!--support-->

        <section>
            <div class="row d-flex p-5 min-500 bg-white stagger-up">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left up">
                    <h2 class="h4 slide-up">World class support</h2>
                    <h3 class="section-title m-0 slide-up">We’re here to help 24/7.</span></h3>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left o-12 up up-med">
                    <p class="p-big pt-3 m-0 slide-up">Jaxx Liberty's User Success Team is available to answer all of your questions through our written channels, 24/7.</p>
                    <div class="up up-slow">
                        <a href="https://support.decentral.ca/hc/en-us" target="_blank"><p class="p-btn mt-3 slide-up">Here for you <i class="fa fa-angle-right fa-btn orange"></i></p></a>  
                    </div>
                </div>
            </div><!--end row-->
        </section>

        <section>
            <div class="row d-flex bg-light">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-lap-laptop-coffee.jpg" alt="Get 24/7 help from Jaxx Liberty's world class User Success Team.">
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
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left o-12 up up-med">
                    <p class="p-big pt-3 m-0 slide-up">We consider ourselves part of extensive ecosystem, a large and growing network of people, friends, users, and <a href="/partnerships.php"><span class="orange">partners</span></a> around the world. Join the Jaxx Liberty community today.</p>
                    <div class="up up-slow">
                        <a href="/community.php" onclick="googleAnalyticsTrigger('Community', 'Home_Page')"><p class="p-btn mt-3 slide-up">Join the adventure <i class="fa fa-angle-right fa-btn orange"></i></p></a>  
                    </div>
                </div>
            </div><!--end row-->

             <div class="row d-flex bg-light">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/decentral-community-red.jpeg" alt="Join the Decentral community">
                </div>
            </div>
        </section>

    </div><!--end container-->
</main>

<?php

include 'includes/footer.php';

?>