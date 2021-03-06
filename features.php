<?php
$title = "Jaxx Liberty | Features";
include 'includes/header.php';
include 'copy.php';
include 'images.php';
?>

<!--banner-->

<div id="banner" role="banner" class="container-fluid p-0">
    <div class="row d-flex min-700-lg py-5 text-light relative">
       <img class="img-full absolute z-0 left-0 up up-med" src="/assets/img/jaxx-pc-coffee.jpg" alt="Jaxx Liberty is your all-in-one digital asset wallet.">
        <div class="offset-lg-2"></div>
        <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center ts p-5">
            <h1 class="h4 mt-3 ds-black zoom">Jaxx Liberty Features</h1>
            <h2 class="site-title  ds-black zoom zoom-med">Wherever you go.</h2> 
            <a href="#features"><button class="p-btn text-light ds-black bg-trans mb-1 border-0 p-0 zoom zoom-slow">Discover <i class="fa fa-angle-right fa-btn text-light"></i></button></a> 
        </div>
        <div class="offset-lg-2"></div>
    </div>
</div>

<!--main body-->

<main>
    <div id="features" class="container-fluid p-0 text-secondary">

        <section>
           <div class="row d-flex relative bg-orange-gradient text-light">
                <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center text-center min-400 p-5 up">
                    <h2 class="section-title font-weight-bold text-light">It’s quick and easy to get started. And, it’s free.</h2>
                    <hr class="hr-big border-0 bg-light">
                    <h3 class="pt-2 font-weight-light">Putting you in control of your digital assets.</h3>
                </div>
            </div>
        </section>

        <!--easy to use-->
        
        <section>
            <div class="row d-flex min-500 bg-white py-3 border-bottom">
               <div class="offset-lg-2"></div>
                <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title py-3 up">
                        <?php echo $feature1Title; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 up up-slow">
                        <?php echo $feature1Desc; ?>
                    </p>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen">
                                <img class="w-100"
                                src="<?php echo $featuresImg1;?>"
                                alt="<?php echo $featuresImgAlt1;?>">
                            </div>
                        </div>
                    </div>
                    <!-- <img class="feat-phone m-auto up" src="/assets/img/jaxx-feat-phone-case-home.jpg" alt="Jaxx Liberty blends industry leading engineering with beautiful and intuitive user experience design."> -->
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>
        
        <!--portfolio-->
       
        <section>
            <div class="row d-flex min-500 bg-light pb-3 border-bottom">
               <div class="offset-lg-2"></div>
               <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen">
                                <img class="w-100" src="/assets/img/jaxx-iphone-X-portfolio.jpg" alt="Check out your asset balance, track individual coins and tokens, and follow value changes over the last hour, day, week and month.">
                            </div>
                        </div>
                    </div>
                    <!-- <img class="feat-phone m-auto up" src="/assets/img/jaxx-feat-phone-case-port.jpg" alt="Check out your asset balance, track individual coins and tokens, and follow value changes over the last hour, day, week and month."> -->
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
        
        <!--news-->
        
        <section>
            <div class="row d-flex min-500 bg-white pb-3 border-bottom">
               <div class="offset-lg-2"></div>
                <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title py-3 up">
                        <?php echo $feature3Title; ?>
                        
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 up up-slow">
                        <?php echo $feature3Desc; ?>
                    </p>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen">
                                <img class="w-100" src="/assets/img/jaxx-iphone-X-news.jpg" alt="Get daily blockchain headline news and updates from a range of trusted sources. All at your fingertips, in Jaxx Liberty's news module.">
                            </div>
                        </div>
                    </div>
                    <!-- <img class="feat-phone m-auto up" src="/assets/img/jaxx-feat-phone-case-news.jpg" alt="Get daily blockchain headline news and updates from a range of trusted sources. All at your fingertips, in Jaxx Liberty's news module."> -->
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>
        
        <!--markets-->
       
        <section>
            <div class="row d-flex min-500 bg-light pb-3 border-bottom">
               <div class="offset-lg-2"></div>
               <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen">
                                <img class="w-100"
                                src="/assets/img/jaxx-iphone-X-markets.jpg"
                                alt="<?php echo $feature4Desc; ?>">
                            </div>
                        </div>
                    </div>
                    <!-- <img class="feat-phone m-auto up" src="/assets/img/jaxx-feat-phone-case-markets.jpg" alt="Follow the top 100 assets, compare price changes, see market caps, and follow trends."> -->
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
        
        <!--customize wallets-->
        
        <section>
            <div class="row d-flex min-500 bg-white pb-3 border-bottom">
               <div class="offset-lg-2"></div>
                <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title py-3 up">
                        <?php echo $feature5Title; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 up up-slow">
                        <?php echo $feature5Desc; ?>
                    </p>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen">
                                <img class="w-100"
                                src="/assets/img/jaxx-iphone-X-wallets.jpg"
                                alt="Easily customize your Jaxx Liberty wallet module.">
                            </div>
                        </div>
                    </div>
                    <!-- <img class="feat-phone m-auto up" src="/assets/img/jaxx-feat-phone-case-wallets.jpg" alt="Easily customize your Jaxx Liberty wallet module."> -->
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>
        
        <!--block-->
       
        <section>
            <div class="row d-flex min-500 bg-light pb-3 border-bottom">
               <div class="offset-lg-2"></div>
               <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen">
                                <img class="w-100" src="/assets/img/jaxx-iphone-X-block-explorer.jpg" alt="Check balances and transaction data across multiple blockchains in Jaxx Liberty's easy-to-use block explorer.">
                            </div>
                        </div>
                    </div>
                    <!-- <img class="feat-phone m-auto up" src="/assets/img/jaxx-feat-phone-case-block.jpg" alt="Check balances and transaction data across multiple blockchains in Jaxx Liberty's easy-to-use block explorer."> -->
                </div>
                <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title py-3 up">
                        <?php echo $feature6Title; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 up up-slow">
                        <?php echo $feature6Desc; ?>
                    </p>
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>
        
        <!--security-->
        
        <section>
            <div class="row d-flex min-500 bg-white pb-3 border-bottom">
               <div class="offset-lg-2"></div>
                <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title py-3 up">
                        <?php echo $feature7Title; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 up up-slow">
                        <?php echo $feature7Desc; ?>
                    </p>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen">
                                <img class="w-100" src="/assets/img/jaxx-iphone-X-security-password.jpg" alt="Your private keys never leave your device, and with strong encryption protocols, you can enjoy peace of mind.">
                            </div>
                        </div>
                    </div>
                    <!-- <img class="feat-phone m-auto up" src="/assets/img/jaxx-feat-phone-case-password.jpg" alt="Your private keys never leave your device, and with strong encryption protocols, you can enjoy peace of mind."> -->
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>
        
        <!--exchange-->
       
        <section>
            <div class="row d-flex min-500 bg-light pb-3 border-bottom">
               <div class="offset-lg-2"></div>
               <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen">
                                <img class="w-100" src="/assets/img/jaxx-iphone-X-shapeshift.jpg" alt="Exchange between assets with Jaxx Liberty's exchange module.">
                            </div>
                        </div>
                    </div>
                    <!-- <img class="feat-phone m-auto up" src="/assets/img/jaxx-feat-phone-case-shapeshift.jpg" alt="Exchange between assets with Jaxx Liberty's exchange module."> -->
                </div>
                <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title py-3 up">
                        <?php echo $feature8Title; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 up up-slow">
                        <?php echo $feature8Desc; ?>
                    </p>
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>

        <!-- paper wallet -->

        <section>
            <div class="row d-flex min-500 bg-white pb-3 border-bottom">
               <div class="offset-lg-2"></div>
                <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title py-3 up">
                        <?php echo $feature9Title; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 up up-low">
                        <?php echo $feature9Desc; ?>
                    </p>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen">
                                <img class="w-100" src="/assets/img/jaxx-iphone-X-paper-wallet.jpg" alt="Jaxx Liberty enables you to transfer digital assets from a paper wallet to your current Jaxx Liberty Wallet">
                            </div>
                        </div>
                    </div>
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>

        <!--support-->
        
        <section>
            <div class="row d-flex min-500 bg-light pb-3 border-bottom">
               <div class="offset-lg-2"></div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen">
                                <img class="w-100" src="/assets/img/jaxx-iphone-X-support.jpg" alt="Get fast, friendly customer support from our User Success Team 7 days a week, via email or social media.">
                            </div>
                        </div>
                    </div>
                    <!-- <img class="feat-phone up" src="/assets/img/jaxx-feat-phone-case-support.jpg" alt="Get free, 24/7 world-class support from our User Success Team, via email or social media."> -->
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
        
        <!--ipad-->

        <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-ipad-palm-desk.jpg" alt="Jaxx Liberty has industry leading security features from facial recognition to qr-code support, a 12-word backup phrase, and password protection.">
                </div>
            </div>
        </section>
        
        <!--more features-->
               
        <section>
            <div class="row d-flex p-5 bg-light">
                <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center text-center p-3 up">
                    <h2 class="section-title py-3">More to explore.</h2>
                    <hr class="hr-big border-0 bg-orange m-0">
                </div>
                <div class="col-lg-3 col-md-6 d-flex flex-column justify-content-start align-items-start text-left px-3 pt-3 pb-0">
                    <h4 class="py-3">Customize your home screen.</h4>
                    <hr class="hr-big border-0 bg-orange m-0">
                    <p class="p-big py-3 pr-4 border-up">Drag and drop the homepage modules to create a personalized interface.</p>
                </div>
                <div class="col-lg-3 col-md-6 d-flex flex-column justify-content-start align-items-start text-left px-3 pt-3 pb-0">
                    <h4 class="py-3">Password strength checker.</h4>
                    <hr class="hr-big border-0 bg-orange m-0">
                    <p class="p-big py-3 pr-4 border-up">Having a strong password is crucial. In Jaxx Liberty you can see how strong or weak your password is in real time.</p>
                </div>
                <div class="col-lg-3 col-md-6 d-flex flex-column justify-content-start align-items-start text-left px-3 pt-3 pb-0">
                    <h4 class="py-3">Touch and face ID.</h4>
                    <hr class="hr-big border-0 bg-orange m-0">
                    <p class="p-big py-3 pr-4 border-up">We’ve added more ways for you to secure your digital assets: Face ID, Fingerprint and Pattern unlocking on iOS and Android.</p>
                </div>
                <div class="col-lg-3 col-md-6 d-flex flex-column justify-content-start align-items-start text-left px-3 pt-3 pb-0">
                    <h4 class="py-3">QR code support.</h4>
                    <hr class="hr-big border-0 bg-orange m-0">
                    <p class="p-big py-3">QR code support simplifies in-person transactions.</p>
                </div>
                <div class="col-lg-3 col-md-6 d-flex flex-column justify-content-start align-items-start text-left px-3 pt-3 pb-0">
                    <h4 class="py-3">Fast & convenient.</h4>
                    <hr class="hr-big border-0 bg-orange m-0">
                    <p class="p-big py-3 pr-4 border-up">Get the latest headline news, real-time market data, check your portfolio, and exchange between digital assets any time you want, almost instantly.</p>
                </div>
                <div class="col-lg-3 col-md-6 d-flex flex-column justify-content-start align-items-start text-left px-3 pt-3 pb-0">
                    <h4 class="py-3">Trusted.</h4>
                    <hr class="hr-big border-0 bg-orange m-0">
                    <p class="p-big py-3 pr-4 border-up">Jaxx Liberty builds on the success of Jaxx Classic, one of the most popular blockchain and digital asset wallets, with millions of downloads.</p>
                </div>
                <div class="col-lg-3 col-md-6 d-flex flex-column justify-content-start align-items-start text-left px-3 pt-3 pb-0">
                    <h4 class="py-3">Multi-asset.</h4>
                    <hr class="hr-big border-0 bg-orange m-0">
                    <p class="p-big py-3 pr-4 border-up">Enjoy support for more than 85 digital assets including Bitcoin, Ethereum, Litecoin, and Dash.</p>
                </div>
                <div class="col-lg-3 col-md-6 d-flex flex-column justify-content-start align-items-start text-left p-3">
                    <h4 class="py-3">100% free.</h4>
                    <hr class="hr-big border-0 bg-orange m-0">
                    <p class="p-big py-3">Jaxx Liberty is free and has no sign-up or registration, and requires no personal information to access your digital assets.</p>
                </div>
            </div><!--end row-->
        </section>
        
        <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-support-jump.jpeg" alt="Enjoy free 24/7 support from our world-class User Success Team.">
                </div>
            </div>
        </section>
        
        <!--download-->
       
        <section>
            <div class="row d-flex min-700-lg bg-white p-5">
              <div class="offset-lg-2"></div>
               <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center p-4 o-12 up">
                    <img class="w-75 up up-med" src="/assets/img/jaxx-macbook-air.jpg" alt="Take Jaxx Liberty wherever you go.">
                    <h2 class="section-title pb-3 pt-5">Wherever you are.</h2>
                    <hr class="hr-big border-0 bg-orange m-0">
                    <p class="p-big pt-3 mb-0">Jaxx Liberty is available for mobile, web, and desktop. Enjoy on iOS, Android, Mac OS X, Windows, Linux, and Google Chrome.</p>
                    <div class="slide-down">
                        <div class="row downloads-badge-container pt-3 pl-3">
                            <!--jaxx liberty google store-->
                            <a onclick="googleAnalyticsTrigger('Android/Tablet', 'Features_Page')" href="https://play.google.com/store/apps/details?id=com.liberty.jaxx" target="_blank"><img title="Play Play Button" class="store-badge mr-1 mt-1" src="/assets/img/jaxx-google-play.png" alt="Google Play Button"/></a>
                            <!--jaxx liberty itunes-->
                            <a onclick="googleAnalyticsTrigger('iOS', 'Features_Page')" href="https://itunes.apple.com/us/app/jaxx-liberty/id1435383184?ls=1&mt=8" target="_blank"><img title="iTunes App Store Button" class="store-badge mr-1 mt-1" src="/assets/img/jaxx-app-store.png" alt="iTunes App Store Button"/></a>
                            <!--jaxx liberty chrome-->
                            <a onclick="googleAnalyticsTrigger('Chrome', 'Features_Page')" href="https://chrome.google.com/webstore/detail/jaxx-liberty/cjelfplplebdjjenllpjcblmjkfcffne" target="_blank"><img title="iTunes Store Button" class="store-badge mr-1 mt-1" src="/assets/img/jaxx-chrome-store.png" alt="Chrome Web Store"/></a>
                        </div><!--end button nest row--> 
                        <div id="desktop_download" class="up up-med">
                            <a href="/downloads" onclick="googleAnalyticsTrigger('Desktop', 'Features_Page')"><p class="p-btn pt-3 mt-2">Desktop versions <i class="fa fa-angle-right fa-btn orange"></i></p></a> 
                        </div> 
                    </div>
                </div><!--end col-->
              <div class="offset-lg-2"></div>
            </div>
        </section>
    </div><!--end main container-->
</main>

<?php

include 'includes/footer.php';

?>