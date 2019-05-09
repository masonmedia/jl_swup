<?php
$title = "Jaxx Liberty | Your All-In-One Digital Asset Wallet.";
include 'includes/header.php';
include 'copy.php';
include 'images.php';
?>

<!--banner-->

<div id="banner" role="banner" class="container-fluid p-0">
    <div class="row d-flex min-700 mt-4 p-5 relative">
        <img class="img-full absolute z-0 left-0 up up-med"
        src="<?php echo $homeBannerImg;?>"
        alt="<?php echo $homeBannerImgAlt;?>">
        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-start text-left px-2 py-5">
            <h1 class="h4 mt-5 orange zoom">
                <?php echo $homeBanner1; ?>    
            </h1>
            <h2 class="site-title font-weight-bold py-2 zoom zoom-med">
                <?php echo $homeBanner2; ?>  
            </h2>
            <h3 class="h4 text-secondary font-weight-bold">
                <? echo $homeBanner3; ?>
            </h3>
            <a href="/downloads">
                <p class="p-btn mt-3 border-0 p-0" onclick="googleAnalyticsTrigger('Downloads_Page', 'Home_Banner')">
                    <? echo $homeBannerCTA1; ?> <i class="fa fa-angle-right fa-btn"></i>
                </p>
            </a>
        </div>
        <div class="offset-lg-5"></div>
        <!-- <div class="col-lg-12">
            <div class="container-fluid">
                <div class="row p-4 m-4">
                    <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center text-center p-0">
                        <div class="wrap p-5 bg-light rounded shadow">
                            <i class="fa fa-check-square-o icon mb-4 p-0"></i>
                            <h2 class="h4 font-weight-bold px-5">No login.</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center text-center p-0">
                        <div class="wrap p-5 bg-light rounded shadow">
                            <i class="fa fa-download icon mb-4 p-0"></i>
                            <h2 class="h4 font-weight-bold px-5">No login.</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center text-center p-0">
                        <div class="wrap p-5 bg-light rounded shadow">
                            <i class="fa fa-download icon mb-4 p-0"></i>
                            <h2 class="h4 font-weight-bold px-5">No login.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
<!--end banner-->

<!--main body-->

<main id="main">
    <div class="container-fluid p-0 text-secondary">

        <section>
           <div id="sec-1" class="row d-flex relative bg-light text-secondary p-5">
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center text-center border-right border-box-navy p-3 my-3 up">
                    <i class="fa fa-check icon bg-box-navy text-success px-4 py-3 mb-4 border border-box-navy rounded shadow"></i>
                    <h2 class="h4 font-weight-bold">No login.</h2>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center text-center border-right border-box-navy p-3 my-3 up">
                    <i class="fa fa-download icon bg-box-navy text-warning px-4 py-3 mb-4 border border-box-navy rounded shadow"></i>
                    <h2 class="h4 font-weight-bold">Always free.</h2>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center text-center p-3 my-3 up">
                    <i class="fa fa-bitcoin icon bg-box-navy orange px-4 py-3 mb-4 border border-box-navy rounded shadow"></i>
                    <h2 class="h4 font-weight-bold">Join millions of users.</h2>
                </div>
            </div>
        </section>

        <!-- <section>
            <div class="row d-flex min-500 bg-white py-3 border-bottom">
                <div class="col-lg-7 banner-left px-5 pt-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2 class="section-title orange">3.4</h2>
                                <span>
                                    <span class="fa fa-star checked px-2 pt-0 pl-0"></span>
                                    <span class="fa fa-star checked px-2 pt-0"></span>
                                    <span class="fa fa-star checked px-2 pt-0"></span>
                                    <span class="fa fa-star-half-full checked px-2 pt-0"></span>
                                    <span class="fa fa-star px-2 pt-0"></span>
                                </span>
                                <hr class="m-0 up up-med">
                                <a onclick="googleAnalyticsTrigger('iOS', 'Security_Page')" href="https://itunes.apple.com/us/app/jaxx-liberty/id1435383184?ls=1&mt=8" target="_blank"><img class="home-store-badge mt-4" src="/assets/img/jaxx-app-store.png" alt="iTunes App Store Button"/></a>
                                <p class="p-big py-3 up up-slow">
                                    "My morning routing involves waking up, reaching fgor my phone, and checking the markets, the news, and my portfolio balance in this app"
                                    <span class="d-table small font-weight-bold pt-2">-- Ddxu547</span>
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <h2 class="section-title orange">3.9</h2>
                                <span>
                                    <span class="fa fa-star checked px-2 pt-0 pl-0"></span>
                                    <span class="fa fa-star checked px-2 pt-0"></span>
                                    <span class="fa fa-star checked px-2 pt-0"></span>
                                    <span class="fa fa-star checked px-2 pt-0"></span>
                                    <span class="fa fa-star px-2 pt-0"></span>
                                </span>
                                <hr class="m-0 up up-med">
                                <a onclick="googleAnalyticsTrigger('Android/Tablet', 'Security_Page')" href="https://play.google.com/store/apps/details?id=com.liberty.jaxx" target="_blank"><img title="Play Play Button" class="home-store-badge mt-4" src="/assets/img/jaxx-google-play.png" alt="Google Play Button"/></a>
                                <p class="p-big py-3 up up-slow">
                                    "Best wallet with the most hardworking and quick response support team I have ever experienced. No option for 1000 stars so I am just giving 5 stars."
                                    <span class="d-table small font-weight-bold pt-2">-- Tahir Khawaja</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-flex flex-column justify-content-center align-items-center p-5 border-left o-12 up">
                    <h2 class="section-title py-3 border-bottom up">
                        Securely send, receive, track and exchange your crypto all in one app.
                    </h2>
                    <p class="p-big py-3 up up-slow">
                        <?php echo $feature1Desc; ?>
                    </p>
                </div>
            </div>
        </section> -->

        <!-- here's what you get banner -->

        <!-- <section>
           <div class="row d-flex relative bg-black border-bottom p-5">
               <div class="offset-lg-2"></div>
                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center up">
                    <h2 class="section-title knockout-gradient py-3 up">
                        <?php echo $feature1Title; ?>
                    </h2>
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section> -->
        
        <!--portfolio-->
       
        <section>
            <div class="row relative d-flex min-500 bg-white py-4 mx-5 mt-5 shadow-lg rounded-top border-bottom">
               <div class="offset-lg-2"></div>
               <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper absolute z-0">
                    <img class="feat-phone feat-phone--port m-auto up opacity-full" src="/assets/img/jaxx-feat-phone-case-port.png" alt="Check out your asset balance, track individual coins and tokens, and follow value changes over the last hour, day, week and month.">
                        <!-- <div class="device" device="iPhoneX" orientation="portrait" color="black">
                            <div class="screen">
                                <img class="w-100 opacity-full"
                                src="<?php echo $featuresImg2; ?>"
                                alt="<?php echo $featuresImgAlt2; ?>">
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title py-3 up">
                        <?php echo $feature2Title; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 up up-slow">
                        <?php echo $feature2Desc; ?>
                    </p>
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>

         <!--exchange-->
       
         <section>
            <div class="row relative d-flex min-500 bg-navy-gradient text-light py-4 border-bottom">
               <div class="offset-lg-2"></div>
               <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title text-light py-3 up">
                        <?php echo $feature8Title; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 up up-slow">
                        <?php echo $feature8Desc; ?>
                    </p>
                </div>
               <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper absolute z-0">
                        <img class="feat-phone m-auto up opacity-full" src="/assets/img/jaxx-shapeshift-logo.png" alt="Exchange between assets with Jaxx Liberty's exchange module.">
                        <!-- <div class="device" device="iPhoneX" orientation="portrait" color="black">
                            <div class="screen">
                                <img class="w-100 opacity-full" src="/assets/img/jaxx-iphone-X-shapeshift.jpg" alt="Exchange between assets with Jaxx Liberty's exchange module.">
                            </div>
                        </div> -->
                    </div>
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>

         <!--markets-->
       
         <section>
            <div class="row relative d-flex min-500 bg-light py-4 border-bottom">
               <div class="offset-lg-2"></div>
               <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper absolute z-0 top-0">
                        <img class="feat-phone m-auto up opacity-full" src="/assets/img/jaxx-feat-phone-case-markets.jpg" alt="Follow the top 100 assets, compare price changes, see market caps, and follow trends.">
                        <!-- <div class="device" device="iPhoneX" orientation="portrait" color="black">
                            <div class="screen">
                                <img class="w-100 opacity-full"
                                src="<?php echo $featuresImg4; ?>"
                                alt="<?php echo $feature4Desc; ?>">
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title py-3 up">
                        <?php echo $feature4Title; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 up up-slow">
                        <?php echo $feature4Desc; ?>
                    </p>
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>
        
        <!--news-->
        
        <section>
            <div class="row relative d-flex min-500 bg-white p-0 border-bottom">
               <div class="offset-lg-2"></div>
                <div class="col-lg-4 banner-left p-5">
                    <h2 class="section-title py-3 up">
                        <?php echo $feature3Title; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 mb-0 up up-slow">
                        <?php echo $feature3Desc; ?>
                    </p>
                </div>
                <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center p-0 px-3 o-12 up">
                    <img class="jazzy absolute z-0 bottom-0 px-3 ds up opacity-full" src="/assets/img/jaxx-news-ipad-jazzy-min.png" alt="Get daily blockchain headline news and updates from a range of trusted sources. All at your fingertips, in Jaxx Liberty's news module.">
                    <!-- <div class="device-wrapper absolute z-0 top-0">
                        <img class="feat-phone m-auto up opacity-full" src="/assets/img/jaxx-news-ipad-jazzy.png" alt="Get daily blockchain headline news and updates from a range of trusted sources. All at your fingertips, in Jaxx Liberty's news module.">
                        <div class="device" device="iPhoneX" orientation="portrait" color="black">
                            <div class="screen">
                                <img class="w-100 opacity-full"
                                src="<?php echo $featuresImg3; ?>"
                                alt="<?php echo $featuresImgAlt3; ?>">
                            </div>
                        </div>
                    </div> -->
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>

         <!--support-->
        
         <section>
            <div class="row relative d-flex min-500 bg-light py-4 border-bottom">
               <div class="offset-lg-1"></div>
                <div class="col-lg-5 min-400 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <img class="w-100 ds up opacity-full" src="/assets/img/jaxx-customer-support.png" alt="Get free, 24/7 world-class support from our User Success Team, via email or social media.">
                    <!-- <div class="device-wrapper absolute z-0 top-0">
                        <img class="feat-phone up opacity-full" src="/assets/img/jaxx-customer-support.png" alt="Get free, 24/7 world-class support from our User Success Team, via email or social media.">
                        <div class="device" device="iPhoneX" orientation="portrait" color="black">
                            <div class="screen">
                                <img class="w-100 opacity-full" src="/assets/img/jaxx-iphone-X-support.jpg" alt="Get fast, friendly customer support from our User Success Team 7 days a week, via email or social media.">
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title py-3 up">
                        <?php echo $feature10Title; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 up up-low">
                        <?php echo $feature10Desc; ?>
                    </p>
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>
        
        <!--block-->
       
        <section>
            <div class="row relative d-flex min-500 bg-white py-4 border-bottom">
               <div class="offset-lg-2"></div>
               <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title py-3 up">
                        <?php echo $feature6Title; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 up up-slow">
                        <?php echo $feature6Desc; ?>
                    </p>
                </div>
                <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper absolute z-0 top-0">
                        <img class="feat-phone m-auto up opacity-full" src="/assets/img/jaxx-feat-phone-case-block.png" alt="Check balances and transaction across multiple blockchains in Jaxx Liberty's easy-to-use block explorer.">
                        <!-- <div class="device" device="iPhoneX" orientation="portrait" color="black">
                            <div class="screen">
                                <img class="w-100 opacity-full" src="/assets/img/jaxx-iphone-X-block-explorer.jpg" alt="Check balances and transaction across multiple blockchains in Jaxx Liberty's easy-to-use block explorer.">
                            </div>
                        </div> -->
                    </div>
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>

        <!-- download -->
        <section>
            <div id="homeDownload" class="row d-flex relative p-5 min-500 bg-navy-gradient text-light">
                <div class="offset-lg-2"></div>
                <div class="col-lg-4 banner-left down">
                    <h3 class="section-title py-3 text-light">
                        <?php echo $homeDownload2; ?>
                    </h3>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 m-0">
                        <?php echo $homeDownload3; ?>
                    </p>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center text-center p-5 o-12 down down-med">
                    <!--jaxx liberty google store-->
                    <a onclick="googleAnalyticsTrigger('Android', 'Home_Section2')"
                        href="https://play.google.com/store/apps/details?id=com.liberty.jaxx"
                        target="_blank">
                            <img class="home-store-badge mt-2"
                            src="/assets/img/jaxx-google-play.png"
                            alt="Google Play Button" />
                    </a>
                    <!--jaxx liberty itunes-->
                    <a onclick="googleAnalyticsTrigger('iOS', 'Home_Section2')"
                        href="https://itunes.apple.com/us/app/jaxx-liberty/id1435383184?ls=1&mt=8"
                        target="_blank">
                            <img class="home-store-badge mt-2"
                            src="/assets/img/jaxx-app-store.png"
                            alt="iTunes App Store Button" />
                    </a>
                    <!--jaxx liberty chrome-->
                    <a onclick="googleAnalyticsTrigger('Chrome', 'Home_Section2')"
                        href="https://chrome.google.com/webstore/detail/jaxx-liberty/cjelfplplebdjjenllpjcblmjkfcffne"
                        target="_blank">
                            <img class="home-store-badge mt-2"
                            src="/assets/img/jaxx-chrome-store.png"
                            alt="Chrome Web Store" />
                    </a>
                    <!--end button nest row-->
                    <div id="desktop_download" class="right right-med p-0">
                        <a href="/downloads" onclick="googleAnalyticsTrigger('Desktop', 'Home_Section2')">
                            <p class="p-btn mt-3">
                                <?php echo $homeDownloadCTA; ?> <i class="fa fa-angle-right fa-btn orange"></i>
                            </p>
                        </a>
                    </div>
                <div class="offset-lg-2"></div>
            </div>
            <!--end row-->
        </section>

        <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 bottom-0 opacity-full" src="/assets/img/jaxx-laptop-hands.jpg" alt="We consider ourselves part of extensive ecosystem, a large and growing network of people, friends, users, and partners around the world.  Join our community today.">
                </div>
            </div>
        </section>

    </div>
    <!--end container-->
</main>

<?php

include 'includes/footer.php';

?>