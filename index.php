<?php
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
        <div class="col-lg-6 relative z-2 d-flex flex-column justify-content-center align-items-start text-left px-0 py-5">
            <h1 class="h4 mt-5 orange right">
                <?php echo $homeBanner1; ?>    
            </h1>
            <h2 class="site-title text-light font-weight-bold py-2 ts right right-med">
                <?php echo $homeBanner2; ?>  
            </h2>
            <h3 class="h4 site-subtitle text-light font-weight-medium py-2 ts right">
                <? echo $homeBanner3; ?>
            </h3>
            <a href="/downloads">
                <p class="btn btn-lg btn-orange mt-3 right right-slow"
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
                    <img
                    src="<?php echo $homeIconNoLogin; ?>"
                    class="jaxx-navbar-brand mt-3 px-3 mx-0b"
                    alt="<?php echo $homeIconNoLoginAlt; ?>">
                    <h2 class="h4 font-weight-bold">No login.</h2>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center text-center border-right border-bottom pb-2 up">
                    <img
                    src="<?php echo $homeIconFree; ?>"
                    class="jaxx-navbar-brand mt-3 px-2 mx-0"
                    alt="<?php echo $homeIconFreeAlt; ?>">
                    <h2 class="h4 font-weight-bold">Always free.</h2>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center text-center border-bottom border-right pb-2 up">
                    <img 
                    src="<?php echo $homeIconUsers; ?>" 
                    class="jaxx-navbar-brand mt-3 px-2 mx-0" 
                    alt="<?php echo $homeIconUsersAlt; ?>">
                    <h2 class="h4 font-weight-bold">Join millions of users.</h2>
                </div>
            </div>
        </section>
        
        <!--wallet-->
       
        <section id="wallet">
            <div class="row relative min-500 bg-light py-4 border-bottom m-0">
                <div class="offset-lg-2"></div>
                <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper absolute z-0 top-0">
                        <a href="/community">
                            <img class="feat-phone m-auto up opacity-full"
                            src="<?php echo $homeImgWallet; ?>"
                            alt="<?php echo $homeImgWalletAlt; ?>">
                        </a>
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
       
         <section id="exchange">
            <div class="row relative d-flex min-500 bg-navy-gradient text-light py-4 border-bottom m-0">
               <div class="offset-lg-2"></div>
               <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title text-light py-3 up">
                        <?php echo $homeExchangeTitle; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 mb-0 up up-slow relative z-1">
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
       
        <section id="portfolio">
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
       
         <section id="markets">
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
                        alt="<?php echo $homeImgMarketsAlt; ?>">
                    </div>
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>
        
        <!--news-->
        
        <section id="news">
            <div class="row relative d-flex min-500 bg-white p-0 border-bottom m-0">
               <div class="offset-lg-2"></div>
               <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center p-0 px-3 o-12 up">
                    <img class="jazzy absolute z-0 bottom-0 px-3 ds up opacity-full"
                    src="<?php echo $homeImgNews; ?>"
                    alt="<?php echo $homeImgNewsAlt; ?>">
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
                    <a href='https://support.decentral.ca' target='_blank'>
                        <img class="img-home-support ds up opacity-full"
                        src="<?php echo $homeImgSupport; ?>"
                        alt="<?php echo $homeImgSupportAlt; ?>">
                    </a>
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
                        alt="<?php echo $homeImgBlockAlt; ?>">
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
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center text-center py-3 o-12 down down-med">
                    <!--jaxx liberty google store-->
                    <a onclick="googleAnalyticsTrigger('Android', 'Home_Section2')"
                        href="https://play.google.com/store/apps/details?id=com.liberty.jaxx"
                        target="_blank">
                            <img class="home-store-badge mt-2 right"
                            src="/assets/img/jaxx-google-play.png"
                            alt="Google Play Store button to download Jaxx Liberty" />
                    </a>
                    <!--jaxx liberty itunes-->
                    <a onclick="googleAnalyticsTrigger('iOS', 'Home_Section2')"
                        href="https://itunes.apple.com/us/app/jaxx-liberty/id1435383184?ls=1&mt=8"
                        target="_blank">
                            <img class="home-store-badge mt-2 right right-med"
                            src="/assets/img/jaxx-app-store.png"
                            alt="iTunes App Store button to download Jaxx Liberty" />
                    </a>
                    <!--jaxx liberty chrome-->
                    <a onclick="googleAnalyticsTrigger('Chrome', 'Home_Section2')"
                        href="https://chrome.google.com/webstore/detail/jaxx-liberty/cjelfplplebdjjenllpjcblmjkfcffne"
                        target="_blank">
                            <img class="home-store-badge mt-2 right right-slow"
                            src="/assets/img/jaxx-chrome-store.png"
                            alt="Chrome Web Store button to download Jaxx Liberty" />
                    </a>
                    <!--end button nest row-->
                    <div id="desktop_download" class="right right-med p-0">
                        <a href="/downloads" onclick="googleAnalyticsTrigger('Desktop', 'Home_Section2')">
                            <button class="desktop-download-btn btn btn-lg btn-dark bg-black mt-2 text-light">
                                <i class="fa fa-desktop pl-3 pr-2 py-0 align-middle text-light"></i>
                                Desktop
                            </button>
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