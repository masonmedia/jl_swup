<?php
$title = "Jaxx Liberty | Your All-In-One Digital Asset Wallet.";
include 'includes/header.php';
include 'copy.php';
include 'images.php';
?>

<!--banner-->

<div id="banner" role="banner" class="container-fluid p-0">
    <div class="row d-flex min-700-lg w-100 p-5 relative m-0">
        <!-- bg navy gradient shape -->
        <div class="banner-gradient bg-navy-gradient ds"></div> 
        <!-- bg white cover for max-width navy gradient shape -->
        <div class="banner-gradient-cover absolute z-2 bg-white"></div> 
        <img class="img-full absolute z--1 left-0 up up-med"
        src="<?php echo $homeBannerImg;?>"
        alt="<?php echo $homeBannerImgAlt;?>">
        <div class="col-lg-6 relative z-2 d-flex flex-column justify-content-center align-items-start text-left px-2 py-5">
            <h1 class="h4 mt-5 orange">
                <?php echo $homeBanner1; ?>    
            </h1>
            <h2 class="site-title text-light font-weight-bold py-2">
                <?php echo $homeBanner2; ?>  
            </h2>
            <h3 class="h4 text-light font-weight-medium py-2">
                <? echo $homeBanner3; ?>
            </h3>
            <a href="/downloads">
                <p class="btn btn-lg btn-orange mt-3"
                onclick="googleAnalyticsTrigger('Downloads_Page', 'Home_Banner')">
                    <? echo $homeBannerCTA1; ?> <i class="fa fa-angle-right fa-btn"></i>
                </p>
            </a>
        </div>
        <div class="offset-lg-6"></div>
    </div>
</div>
<!--end banner-->

<!--main body-->

<main id="main">
    <div class="container-fluid p-0 text-secondary">

        <section>
           <div class="row d-flex relative bg-white text-secondary m-0">
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center text-center border-right border-left border-bottom p-2 up">
                    <img src="/assets/img/icon-profile.svg" class="jaxx-navbar-brand mt-3 px-3 mx-0b" alt="">
                    <h2 class="h4 font-weight-bold">No login.</h2>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center text-center border-right border-bottom pb-2 up">
                    <img src="/assets/img/icon-free.svg" class="jaxx-navbar-brand mt-3 px-2 mx-0" alt="">
                    <h2 class="h4 font-weight-bold">Always free.</h2>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center text-center border-bottom border-right pb-2 up">
                    <img src="/assets/img/icon-doorway.svg" class="jaxx-navbar-brand mt-3 px-2 mx-0" alt="">
                    <h2 class="h4 font-weight-bold">Join millions of users.</h2>
                </div>
            </div>
        </section>
        
        <!--wallet-->
       
        <section>
            <div id="sec-1" class="row relative min-500 bg-light py-4 border-bottom m-0">
                <div class="offset-lg-2"></div>
                <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper absolute z-0 top-0">
                        <img class="feat-phone m-auto up opacity-full"
                        src="<?php echo $homeImgWallet; ?>"
                        alt="<?php echo $homeImgWalletAlt; ?>">
                    </div>
                </div>
                <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title py-3 up">
                        <?php echo $homeWalletTitle; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 mb-0 up up-slow">
                        <?php echo $homeWalletDesc; ?>
                    </p>
                </div>
                <div class="offset-lg-2"></div>
            </div>
        </section>

         <!--exchange-->
       
         <section>
            <div class="row relative d-flex min-500 bg-navy-gradient text-light py-4 border-bottom m-0">
               <div class="offset-lg-2"></div>
               <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title text-light py-3 up">
                        <?php echo $homeExchangeTitle; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 mb-0 up up-slow">
                        <?php echo $homeExchangeDesc; ?>
                    </p>
                </div>
               <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper absolute z-0">
                        <img class="feat-phone m-auto up opacity-full"
                        src="<?php echo $homeImgExchange; ?>"
                        alt="<?php echo $homeImgExchangeAlt; ?>">
                    </div>
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>

        <!--port-->
       
        <section>
            <div class="row relative d-flex min-500 bg-white py-4 border-bottom m-0">
               <div class="offset-lg-2"></div>
               <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <img class="img-port-desktop absolute z-0 opacity-full ds"
                    src="<?php echo $homeImgPort; ?>" 
                    alt="<?php echo $homeImgPortAlt; ?>">
                </div>
               <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title py-3 up">
                        <?php echo $homePortTitle; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 mb-0 up up-slow">
                        <?php echo $homePortDesc; ?>
                    </p>
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>

         <!--markets-->
       
         <section>
            <div class="row relative d-flex min-500 bg-light py-4 border-bottom m-0">
               <div class="offset-lg-2"></div>
               <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title py-3 up">
                        <?php echo $homeMarketsTitle; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 mb-0 up up-slow">
                        <?php echo $homeMarketsDesc; ?>
                    </p>
                </div>
               <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper absolute z-0 top-0">
                        <img class="feat-phone m-auto up opacity-full"
                        src="<?php echo $homeImgMarkets; ?>"
                        alt="<?php echo $homeImgAltMarkets; ?>">
                    </div>
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>
        
        <!--news-->
        
        <section>
            <div class="row relative d-flex min-500 bg-white p-0 border-bottom m-0">
               <div class="offset-lg-2"></div>
               <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center p-0 px-3 o-12 up">
                    <img class="jazzy absolute z-0 bottom-0 px-3 ds up opacity-full"
                    src="<?php echo $homeImgNews;?>"
                    alt="<?php echo $homeImgAltNews;?>">
                </div>
                <div class="col-lg-4 banner-left px-5 pt-5 pb-3"">
                    <h2 class="section-title py-3 up">
                        <?php echo $homeNewsTitle; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 mb-0 up up-slow">
                        <?php echo $homeNewsDesc; ?>
                    </p>
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>

         <!--support-->
        
         <section>
            <div class="row relative d-flex min-500 bg-light py-4 border-bottom m-0">
               <div class="offset-lg-2"></div>
                <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title py-3 up">
                        <?php echo $homeSupportTitle; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 mb-0 up up-low">
                        <?php echo $homeSupportDesc; ?>
                    </p>
                </div>
                <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center p-0 o-12 up">
                    <img class="img-home-support ds up opacity-full"
                    src="<?PHP echo $homeImgSupport; ?>"
                    alt="<?PHP echo $homeImgAltSupport; ?>">
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>
        
        <!--block-->
       
        <section>
            <div class="row relative d-flex min-500 bg-white py-4 border-bottom m-0">
               <div class="offset-lg-2"></div>
               <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper absolute z-0 top-0">
                        <img class="feat-phone m-auto up opacity-full"
                        src="<?php echo $homeImgBlock; ?>"
                        alt="<?php echo $homeImgAltBlock; ?>">
                    </div>
                </div>
               <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title py-3 up">
                        <?php echo $homeBlockTitle; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 mb-0 up up-slow">
                        <?php echo $homeBlockDesc; ?>
                    </p>
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>

        <!-- download -->
        <section>
            <div id="homeDownload" class="row d-flex relative p-5 min-500 bg-navy-gradient text-light m-0">
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
            <div class="row d-flex bg-light relative m-0">
                <div class="col-lg-12 min-600 down down-med">
                    <img class="img-full absolute z-0 bottom-0 left-0 opacity-full"
                    src="<?php echo $homeImgLaptop; ?>"
                    alt="<?php echo $homeImgAltLaptop; ?>">
                </div>
            </div>
        </section>

    </div>
    <!--end container-->
</main>

<?php

include 'includes/footer.php';

?>