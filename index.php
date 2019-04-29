<?php
$title = "Jaxx Liberty | Your All-In-One Digital Asset Wallet.";
include 'includes/header.php';
include 'copy.php';
?>

<!--banner-->

<div id="banner" role="banner" class="container-fluid p-0">
    <div class="row d-flex min-100 min--100 mt-5 relative">
        <img class="img-full absolute z-0 right-0 up up-med" src="/assets/img/jaxx-iphone-X-4-gallery-right-min.jpg"
            alt="Welcome to Jaxx Liberty.">
        <!-- <img class="img-full absolute z-0 right-0 ds up up-med lazy" src="/assets/img/jaxx-macbook-coffee-notebook-right.png" alt="Welcome to Jaxx Liberty."> -->
        <div class="col-lg-8 d-flex flex-column justify-content-center align-items-start text-left p-5">
            <h1 class="h4 orange zoom">Jaxx Liberty</h1>
            <h2 class="site-title font-weight-bold py-2 zoom zoom-med">
            The leading all-in-one cryptocurrency wallet.
            <!-- <span class="knockout-gradient">The leading all-in-one cryptocurrency wallet.</span><br> -->
                <!-- <span class="knockout-gradient">Your multi-platform,</span><br>
                <span class="knockout-gradient">multi-currency</span><br>
                <span class="knockout-gradient">digital asset</span><br>
                <span class="knockout-gradient">wallet.</span> -->
            </h2>
            <h3 class="h4 font-weight-light">Securely send, receive, track & exchange your <br> blockchain assets all in one place.</h3>
            <a href="#sec-1">
                <p class="p-btn my-3 border-0 p-0">Learn more <i class="fa fa-angle-right fa-btn"></i></p>
            </a>
            <div class="row d-flex d-sm-flex-column pt-2 pb-4 pl-3 slide-right">
                <!--jaxx liberty google store-->
                <a onclick="googleAnalyticsTrigger('Android', 'Home_Section2')"
                    href="https://play.google.com/store/apps/details?id=com.liberty.jaxx"
                    target="_blank"><img class="banner-store-badge mr-1 mt-1"
                        src="/assets/img/jaxx-google-play.png" alt="Google Play Button" /></a>
                <!--jaxx liberty itunes-->
                <a onclick="googleAnalyticsTrigger('iOS', 'Home_Section2')"
                    href="https://itunes.apple.com/us/app/jaxx-liberty/id1435383184?ls=1&mt=8"
                    target="_blank"><img class="banner-store-badge mr-1 mt-1" src="/assets/img/jaxx-app-store.png"
                        alt="iTunes App Store Button" /></a>
                <!--jaxx liberty chrome-->
                <a onclick="googleAnalyticsTrigger('Chrome', 'Home_Section2')"
                    href="https://chrome.google.com/webstore/detail/jaxx-liberty/cjelfplplebdjjenllpjcblmjkfcffne"
                    target="_blank"><img class="banner-store-badge mr-1 mt-1"
                        src="/assets/img/jaxx-chrome-store.png" alt="Chrome Web Store" /></a>
            </div>
            <!--button container-->
            <!-- <div class="container-fluid pt-2">
                <div class="row d-flex d-sm-flex-column">
                    <div class="col-xs-6 pr-3 zoom zoom-slow">
                        <a href="#sec-1">
                            <p class="p-btn mb-1 border-0 p-0">Learn more <i class="fa fa-angle-right fa-btn"></i></p>
                        </a>
                    </div>
                    <div class="col-xs-6 zoom zoom-slow">
                        <a href="/downloads">
                            <p class="p-btn mb-1 border-0 p-0" onclick="googleAnalyticsTrigger('Downloads_Page', 'Home_Banner')">Download <i class="fa fa-angle-right fa-btn"></i></p>
                        </a>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="offset-lg-4"></div>
    </div>
</div>
<!--end banner-->

<!--main body-->

<main id="main">
    <div class="container-fluid p-0 text-secondary">

        <!--intro-->

        <section>
            <div id="sec-1" class="row d-flex p-5 min-500 bg-white relative stagger-down">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left down">
                    <h2 class="h4 slide-down">
                        <?php echo $homeIntro1; ?>
                    </h2>
                    <h3 class="section-title text-dark slide-down"><?php echo $homeIntro2; ?></h3>
                </div>
                <div
                    class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 down down-med">
                    <p class="p-big pt-3 m-0 slide-down"><?php echo $homeIntro3; ?></p>
                    <div class="down down-slow">
                        <a href="/features">
                            <p class="p-btn mt-3 slide-down"><?php echo $homeIntroCTA; ?> <i class="fa fa-angle-right fa-btn orange"></i>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <!--end row-->
        </section>

        <section>
            <div class="row d-flex bg-white relative">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-2-people-selfie-logo.jpg"
                        alt="Jaxx Liberty is the leading multi-platform digital asset wallet.">
                </div>
            </div>
        </section>

        <!--features-->

        <section>
            <div class="row d-flex p-5 min-500 bg-white stagger-right">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left right">
                    <h2 class="h4 slide-right">
                        <?php echo $homeFeat1; ?>
                    </h2>
                    <!-- <h3 class="section-title text-dark mb-0 slide-right">See what Jaxx Liberty <span class="line-break-sm">can do for you.</span></h3> -->
                    <h3 class="section-title text-dark mb-0 slide-right">
                        <?php echo $homeFeat2; ?>
                    </h3>
                </div>
                <div
                    class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 right right-med">
                    <p class="p-big pt-3 m-0 slide-right">
                        <?php echo $homeFeat3; ?>
                    </p>
                    <div class="right right-slow">
                        <a href="/features">
                            <p class="p-btn mt-3 slide-right">
                                <?php echo $homeFeatCTA; ?> <i class="fa fa-angle-right fa-btn orange"></i>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row d-flex bg-light">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 right-0 lazy"
                        data-src="/assets/img/jaxx-apple-multi-device-min.jpg"
                        alt="Get the latest blockchain headline news, real-time market data, check your portfolio, and exchange between digital assets all in one convenient place.">
                </div>
            </div>
        </section>

         <!--security-->

        <section>
            <div class="row d-flex p-5 min-500 bg-white stagger-right">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left right">
                    <h2 class="h4 slide-right">
                        <?php echo $homeSecurity1; ?>
                    </h2>
                    <h3 class="section-title text-dark mb-0 slide-right">
                        <?php echo $homeSecurity2; ?>
                    </h3>
                </div>
                <div
                    class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 right right-med">
                    <p class="p-big pt-3 m-0 slide-right">
                        <?php echo $homeSecurity3; ?>
                    </p>
                    <div class="right right-slow">
                        <a href="/security">
                            <p class="p-btn mt-3 slide-right">
                                <?php echo $homeSecurityCTA; ?> <i class="fa fa-angle-right fa-btn orange"></i>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row d-flex bg-light">
                <div class="col-lg-12 min-700-lg down down-med">
                    <!--<img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-pc-coffee.png" alt="">-->
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-android-wall-graffiti.jpg"
                        alt="We never hold your digital assets, you are in complete control.">
                </div>
            </div>
        </section>

        <!--multi-platform-->

        <section>
            <div class="row d-flex p-5 min-500 bg-white stagger-down">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left down">
                    <h2 class="h4 slide-down">
                        <?php echo $homeDownload1; ?>
                    </h2>
                    <h3 class="section-title text-dark slide-down">
                        <?php echo $homeDownload2; ?>
                    </h3>
                </div>
                <div
                    class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 down down-med">
                    <p class="p-big pt-3 m-0 slide-down">
                        <?php echo $homeDownload3; ?>
                    </p>
                    <div class="slide-down">
                        <div class="row d-flex d-sm-flex-column py-4 pl-3 slide-right">
                            <!--jaxx liberty google store-->
                            <a onclick="googleAnalyticsTrigger('Android', 'Home_Section2')"
                                href="https://play.google.com/store/apps/details?id=com.liberty.jaxx"
                                target="_blank"><img class="store-badge mr-1 mt-1"
                                    src="/assets/img/jaxx-google-play.png" alt="Google Play Button" /></a>
                            <!--jaxx liberty itunes-->
                            <a onclick="googleAnalyticsTrigger('iOS', 'Home_Section2')"
                                href="https://itunes.apple.com/us/app/jaxx-liberty/id1435383184?ls=1&mt=8"
                                target="_blank"><img class="store-badge mr-1 mt-1" src="/assets/img/jaxx-app-store.png"
                                    alt="iTunes App Store Button" /></a>
                            <!--jaxx liberty chrome-->
                            <a onclick="googleAnalyticsTrigger('Chrome', 'Home_Section2')"
                                href="https://chrome.google.com/webstore/detail/jaxx-liberty/cjelfplplebdjjenllpjcblmjkfcffne"
                                target="_blank"><img class="store-badge mr-1 mt-1"
                                    src="/assets/img/jaxx-chrome-store.png" alt="Chrome Web Store" /></a>
                        </div>
                        <!--end button nest row-->
                        <div id="desktop_download" class="right right-med p-0">
                            <a href="/downloads" onclick="googleAnalyticsTrigger('Desktop', 'Home_Section2')">
                                <p class="p-btn pl-0 slide-right">
                                    <?php echo $homeDownloadCTA; ?> <i class="fa fa-angle-right fa-btn orange"></i>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </section>

        <section>
            <div class="row d-flex bg-light">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-iphone-here-look.jpg"
                        alt="Download Jaxx Liberty for free on Android, iOS, Mac OS X, Windows, Linux, or Google Chrome extension.">
                </div>
            </div>
        </section>

        <!--testimonials-->

        <section>
            <div class="row d-flex p-5 min-500 bg-white">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left down">
                    <h2 class="h4 slide-down">Trusted by the best</h2>
                    <h3 class="section-title mb-0 slide-down">You're in <span class="line-break-sm">good company.</span></h3>
                    <p class="p-big pt-3 m-0 slide-down">Decentral is an innovator in the blockchain & cryptocurrency
                        space. With thousands of users and a wide range of partnerships, see what community leaders are saying about Jaxx Liberty.</p>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-left text-secondary o-12 down down-med">
                    <div class="device-wrapper">
                    <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                        <div class="screen">
                            <!-- carousel -->
                            <div id="testimonials" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="card-img-top border-0 opacity-full" src="/assets/img/jaxx-digibyte.jpeg" alt="Jaxx Liberty + Digibyte">
                                        <div class="card-body d-flex flex-column justify-content-start align-items-start text-left p-4">
                                            <i class="fa fa-quote-right p-0 pb-3 mb-3 fa--stroke fa--stroke-o border-bottom"></i>
                                            <p class="">"I look forward to seeing the new Jaxx Liberty and how the broader DigiByte community will use it."</p>
                                            <p class="font-weight-bold mb-0 text-light">Josiah Spackman</p>
                                            <footer class="blockquote-footer font-weight-bold mb-3">Ambassador, DigiByte Foundation</footer>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img class="card-img-top opacity-full" src="/assets/img/jaxx-polymath.png" alt="Card image cap">
                                        <div class="card-body d-flex flex-column justify-content-start align-items-start text-left p-4">
                                            <i class="fa fa-quote-right p-0 pb-3 mb-3 fa--stroke fa--stroke-o border-bottom"></i>
                                            <p class="">"Polymath welcomes the launch of Jaxx Liberty. We chose Jaxx Liberty as our go-to wallet for the POLY token community."</p>
                                            <p class="font-weight-bold mb-0 text-light">Trevor Koverko</p>
                                            <footer class="blockquote-footer font-weight-bold">Co-Founder & CEO, Polymath</footer>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img class="card-img-top opacity-full bg-white" src="assets/img/jaxx-rsk.png" alt="Card image cap">
                                        <div class="card-body d-flex flex-column justify-content-start align-items-start text-left p-4">
                                            <i class="fa fa-quote-right p-0 pb-3 mb-3 fa--stroke fa--stroke-o border-bottom"></i>
                                            <p class="text-light">"We’re very happy to partner with Jaxx, a highly-secure and easy-to-use wallet that is the first to support RSK"</p>
                                            <p class="font-weight-bold mb-0 text-light">Diego Gutierrez Zaldivar</p>
                                            <footer class="blockquote-footer font-weight-bold">CEO & Co-Founder, RSK Labs</footer>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img class="card-img-top opacity-full" src="assets/img/jaxx-wax.jpg" alt="Card image cap">
                                        <div class="card-body d-flex flex-column justify-content-start align-items-start text-left p-4">
                                            <i class="fa fa-quote-right p-0 pb-3 mb-3 fa--stroke fa--stroke-o border-bottom"></i>
                                            <p class="text-light">“Jaxx is a partner we rely on. We can be sure Jaxx Liberty will serve and support our expanding ecosystem.”</p>
                                            <p class="font-weight-bold mb-0 text-light">Malcolm CasSelle</p>
                                            <footer class="blockquote-footer font-weight-bold">President, WAX / CIO, OPSkins</footer>
                                        </div>
                                    </div><!--end slide-->
                                </div><!--end carousel-->
                            </div>
                        </div>
                        <div class="button">
                        <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

       <section>
            <div id="testimonials" class="row d-flex min-700-lg">
                <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/decentral-black-cubes.jpeg" alt="Decentral is an innovation hub for disruptive and decentralized technologies.">
                <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center text-center text-light min-500 p-5 o-12" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
                
                    <!--testimonial cards-->
                    
                    <div class="card-deck text-secondary">
                        <div class="card rounded-right-top border-0 mx-2 shadow-lg">
                            <img class="card-img-top rounded-right-top lazy" data-src="/assets/img/jaxx-digibyte.jpeg" alt="Jaxx Liberty + Digibyte">
                            <div class="card-body d-flex flex-column justify-content-start align-items-start text-left p-4">
                                <i class="fa fa-quote-right p-0 pb-3 mb-3 fa--stroke fa--stroke-o border-bottom"></i>
                                <p class="border-right border-orange pr-3">"I look forward to seeing the new Jaxx Liberty and how the broader DigiByte community will use it."</p>
                                <p  class="font-weight-bold">Josiah Spackman</p>
                                <footer class="blockquote-footer font-weight-bold orange mb-3">Ambassador, DigiByte Foundation</footer>
                            </div>
                        </div>
                        <div class="card rounded-right-top border-0 mx-2 shadow-lg">
                            <img class="card-img-top rounded-right-top lazy" data-src="/assets/img/jaxx-polymath.png" alt="Card image cap">
                            <div class="card-body d-flex flex-column justify-content-start align-items-start text-left p-4">
                                <i class="fa fa-quote-right p-0 pb-3 mb-3 fa--stroke fa--stroke-o border-bottom"></i>
                                <p class="border-right border-orange pr-3">"Polymath welcomes the launch of Jaxx Liberty. We chose Jaxx Liberty as our go-to wallet for the POLY token community."</p>
                                <p class="font-weight-bold">Trevor Koverko</p>
                                <footer class="blockquote-footer font-weight-bold orange mb-3">Co-Founder & CEO, Polymath</footer>
                            </div>
                        </div>
                        <div class="card rounded-right-top border-0 mx-2 shadow-lg">
                            <img class="card-img-top rounded-right-top lazy" data-src="assets/img/jaxx-rsk.png" alt="Card image cap">
                            <div class="card-body d-flex flex-column justify-content-start align-items-start text-left p-4">
                                <i class="fa fa-quote-right p-0 pb-3 mb-3 fa--stroke fa--stroke-o border-bottom"></i>
                                <p class="border-right border-orange pr-3">"We’re very happy to partner with Jaxx, a highly-secure and easy-to-use wallet that is the first to support RSK"</p>
                                <p class="font-weight-bold">Diego Gutierrez Zaldivar</p>
                                <footer class="blockquote-footer font-weight-bold orange mb-3">CEO & Co-Founder, RSK Labs</footer>
                            </div>
                        </div>
                        <div class="card rounded-right-top border-0 mx-2 shadow-lg">
                            <img class="card-img-top rounded-right-top lazy" data-src="assets/img/jaxx-wax.jpg" alt="Card image cap">
                            <div class="card-body d-flex flex-column justify-content-start align-items-start text-left p-4">
                                <i class="fa fa-quote-right p-0 pb-3 mb-3 fa--stroke fa--stroke-o border-bottom"></i>
                                <p class="border-right border-orange pr-3">“Jaxx is a partner we rely on. We can be sure Jaxx Liberty will serve and support our expanding ecosystem.”</p>
                                <p class="font-weight-bold">Malcolm CasSelle</p>
                                <footer class="blockquote-footer font-weight-bold orange mb-3">President, WAX / CIO, OPSkins</footer>
                            </div>
                        </div>
                    </div><!--end card deck-->
                </div>
            </div>
        </section>

        <!-- carousel-->

        <!-- <section>
            <div id="testimonials" class="carousel slide carousel-fade relative up up-med" data-ride="carousel"
                data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
                <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/decentral-black-cubes.jpeg"
                    alt="Decentral is an innovation hub for disruptive and decentralized technologies."
                    title="Decentral testimonials">
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
                                    <h3 class="section-title text-light font-weight-light">"In Jaxx, Presearch has a popular, well-respected wallet to offer its exponentially growing user base of over 300,000 members. We join Decentral in the mission of putting users first.”
                                    </h3>
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
                    </div>

                    <div class="carousel-item">
                        <div class="container-fluid">
                            <div class="row d-flex min-700-lg p-0">
                                <div class="col-lg-9 banner-left p-5 o-12">
                                    <h3 class="section-title text-light font-weight-light">"We’re very happy to partner with Jaxx, a highly-secure and easy-to-use wallet that is the first to support
                                        RSK"</h3>
                                    <h3 class="font-weight-bold orange mt-3">Diego Gutierrez Zaldivar</h3>
                                    <p class="p-big orange mb-3">&mdash; CEO & Co-Founder, RSK Labs</p>
                                </div>
                                <div class="offset-lg-3"></div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="carousel-item">
                        <div class="container-fluid">
                            <div class="row d-flex min-700-lg p-0">
                                <div class="col-lg-9 banner-left p-5 o-12">
                                    <h3 class="section-title text-light font-weight-light">“Jaxx is a partner we rely on. We can be sure Jaxx Liberty will serve and support our expanding ecosystem.”
                                    </h3>
                                    <h3 class="font-weight-bold orange mt-3">Malcolm CasSelle</h3>
                                    <p class="p-big orange mb-3">&mdash; President, WAX / CIO, OPSkins</p>
                                </div>
                                <div class="offset-lg-3"></div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
            end carousel
        </section> -->

        <!--Our friends-->

        <section>
            <div class="row d-flex p-5 min-500 bg-white stagger-up">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left up">
                    <h2 class="h4 slide-up">
                        <?php echo $homeCoins1; ?>
                    </h2>
                    <h3 class="section-title m-0">
                        <?php echo $homeCoins2; ?>
                    </h3>
                </div>
                <div
                    class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left o-12 up up-med">
                    <p class="p-big pt-3 m-0 slide-up">
                        <?php echo $homeCoins3; ?>
                    </p>
                    <div class="up up-slow">
                        <a href="/community" target="_blank">
                            <p class="p-btn mt-3 slide-up">
                                <?php echo $homeCoinsCTA; ?> <i class="fa fa-angle-right fa-btn orange"></i>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <!--end row-->
        </section>

        <section>
            <div class="row d-flex bg-light">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-apple-4-iphones-min.jpg"
                        alt="Jaxx Liberty brings together over 85 digital assets and communities including Bitcoin, Ethereum, Litecoin, Dash, Digibyte, Ripple, and more.">
                </div>
            </div>
        </section>

        <!--support-->

        <section>
            <div class="row d-flex p-5 min-500 bg-white stagger-up">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left up">
                    <h2 class="h4 slide-up">
                        <?php echo $homeSupport1; ?>
                    </h2>
                    <h3 class="section-title m-0 slide-up">
                        <?php echo $homeSupport2; ?>
                    </h3>
                </div>
                <div
                    class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left o-12 up up-med">
                    <p class="p-big pt-3 m-0 slide-up">
                        <?php echo $homeSupport3; ?>
                    </p>
                    <div class="up up-slow">
                        <a href="https://support.decentral.ca/hc/en-us" target="_blank">
                            <p class="p-btn mt-3 slide-up">
                                <?php echo $homeSupportCTA; ?> <i class="fa fa-angle-right fa-btn orange"></i>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <!--end row-->
        </section>

        <section>
            <div class="row d-flex bg-light">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-lap-laptop-coffee.jpg"
                        alt="Get 24/7 help from Jaxx Liberty's world class User Success Team.">
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
                <div
                    class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left o-12 up up-med">
                    <p class="p-big pt-3 m-0 slide-up">We consider ourselves part of extensive ecosystem, a large and
                        growing network of people, friends, users, and around the world. Join the Jaxx Liberty community
                        today.</p>
                    <div class="up up-slow">
                        <a href="/community" onclick="googleAnalyticsTrigger('Community', 'Home_Page')">
                            <p class="p-btn mt-3 slide-up">Join the adventure <i class="fa fa-angle-right fa-btn orange"></i></p>
                        </a>
                    </div>
                </div>
            </div>
            <!--end row-->

            <div class="row d-flex bg-light">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/decentral-community-red.jpeg" alt="Join the Decentral community">
                </div>
            </div>
        </section>

    </div>
    <!--end container-->
</main>

<?php

include 'includes/footer.php';

?>