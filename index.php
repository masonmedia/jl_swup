<?php
$title = "Jaxx Liberty | Your All-In-One Digital Asset Wallet.";
include 'includes/header.php';
include 'copy.php';
include 'images.php';
?>

<!--banner-->

<div id="banner" role="banner" class="container-fluid p-0">
    <div class="row d-flex min-700-lg mt-5 relative">
        <img class="img-full absolute z-0 left-0 up up-med"
        src="<?php echo $homeBannerImg;?>"
        alt="<?php echo $homeBannerImgAlt;?>">
        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-start text-left p-5">
                <h1 class="h4 orange zoom">
                    <?php echo $homeBanner1; ?>    
                </h1>
                <h2 class="site-title font-weight-bold py-2 zoom zoom-med">
                    <?php echo $homeBanner2; ?>  
                </h2>
                <h3 class="h4 font-weight-light">
                    <? echo $homeBanner3; ?>
                </h3>
                <!--download button row-->
                <div class="container-fluid pt-2">
                    <div class="row d-flex d-sm-flex-column">
                        <div class="col-xs-6 pr-3 zoom zoom-slow">
                            <a href="#sec-1">
                                <p class="p-btn mb-1 border-0 p-0">
                                    <? echo $homeBannerCTA1; ?> <i class="fa fa-angle-right fa-btn"></i>
                                </p>
                            </a>
                        </div>
                        <div class="col-xs-6 zoom zoom-slow">
                            <a href="/downloads">
                                <p class="p-btn mb-1 border-0 p-0" onclick="googleAnalyticsTrigger('Downloads_Page', 'Home_Banner')">
                                    <? echo $homeBannerCTA2; ?> <i class="fa fa-angle-right fa-btn"></i>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <div class="offset-lg-5"></div>
    </div>
</div>
<!--end banner-->

<!--main body-->

<main id="main">
    <div class="container-fluid p-0 text-secondary">

        <section>
           <div class="row d-flex relative bg-dark-navy text-light p-5">
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center text-center border-right border-box-navy p-3 up">
                    <i class="fa fa-check icon bg-box-navy text-success px-4 py-3 mb-3 border border-box-navy rounded"></i>
                    <h2 class="h4 font-weight-bold">No login.</h2>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center text-center border-right border-box-navy p-3 up">
                    <i class="fa fa-download icon bg-box-navy text-warning px-4 py-3 mb-3 border border-box-navy rounded"></i>
                    <h2 class="h4 font-weight-bold">Always free.</h2>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center text-center p-3 up">
                    <i class="fa fa-bitcoin icon bg-box-navy orange px-4 py-3 mb-3 border border-box-navy rounded"></i>
                    <h2 class="h4 font-weight-bold">Join thousands of users.</h2>
                    
                </div>
            </div>
        </section>

        <!--intro + easy to use-->
        
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
                                <img class="w-100 lazy"
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
                                <img class="w-100 lazy"
                                data-src="<?php echo $featuresImg2; ?>"
                                alt="<?php echo $featuresImgAlt2; ?>">
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
                                <img class="w-100 lazy"
                                data-src="<?php echo $featuresImg3; ?>"
                                alt="<?php echo $featuresImgAlt3; ?>">
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
                                <img class="w-100 lazy"
                                data-src="/assets/img/jaxx-iphone-X-markets.jpg"
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
        
        <!--block-->
       
        <section>
            <div class="row d-flex min-500 bg-white pb-3 border-bottom">
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
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen">
                                <img class="w-100 lazy" data-src="/assets/img/jaxx-iphone-X-block-explorer.jpg" alt="Check balances and transaction data across multiple blockchains in Jaxx Liberty's easy-to-use block explorer.">
                            </div>
                        </div>
                    </div>
                    <!-- <img class="feat-phone m-auto up" src="/assets/img/jaxx-feat-phone-case-block.jpg" alt="Check balances and transaction data across multiple blockchains in Jaxx Liberty's easy-to-use block explorer."> -->
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
                                <img class="w-100 lazy" data-src="/assets/img/jaxx-iphone-X-shapeshift.jpg" alt="Exchange between assets with Jaxx Liberty's exchange module.">
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
                                <img class="w-100 lazy" data-src="/assets/img/jaxx-iphone-X-security-password.jpg" alt="Your private keys never leave your device, and with strong encryption protocols, you can enjoy peace of mind.">
                            </div>
                        </div>
                    </div>
                    <!-- <img class="feat-phone m-auto up" src="/assets/img/jaxx-feat-phone-case-password.jpg" alt="Your private keys never leave your device, and with strong encryption protocols, you can enjoy peace of mind."> -->
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>

        <!-- paper wallet -->

        <!-- <section>
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
                                <img class="w-100 lazy" data-src="/assets/img/jaxx-iphone-X-paper-wallet.jpg" alt="Jaxx Liberty enables you to transfer digital assets from a paper wallet to your current Jaxx Liberty Wallet">
                            </div>
                        </div>
                    </div>
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section> -->

        <!--support-->
        
        <section>
            <div class="row d-flex min-500 bg-light pb-3 border-bottom">
               <div class="offset-lg-2"></div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen">
                                <img class="w-100 lazy" data-src="/assets/img/jaxx-iphone-X-support.jpg" alt="Get fast, friendly customer support from our User Success Team 7 days a week, via email or social media.">
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

    </div>
    <!--end container-->
</main>

<?php

include 'includes/footer.php';

?>