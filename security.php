<?php
$title = "Jaxx Liberty | Security";
$metaD = "Your security is our priority. Jaxx Liberty is a non-custodial blockchain wallet. You own the keys. We never have access to, or knowledge of, your digital assets. Only you do.";
include 'includes/header.php';
include 'copy.php';
include 'images.php';
?>

<!--banner-->

<div id="banner" role="banner" class="container-fluid p-0">
    <div class="row d-flex min-700-lg py-5 text-light relative">
       <img class="img-full absolute z-0 left-0 up up-med"
       src="<?php echo $securityBannerImg; ?>"
       alt="<?php echo $securityBannerImgAlt; ?>">
       <div class="offset-lg-1"></div>
        <div class="col-lg-6 banner-left ts p-5">
            <h1 class="site-title font-weight-bold ds-black mt-5 zoom zoom-med">
                <?php echo $securityBannerTitle; ?>
            </h1>
            <a href="#sec-1">
                <button class="btn btn-lg btn-outline-light my-2 zoom zoom-med">
                    Learn more
                </button>
            </a> 
        </div>
        <div class="offset-lg-5"></div>
    </div>
</div>

<!--main body-->

<main>
    <div id="sec-1" class="container-fluid p-0 text-secondary">

        <!--intro-->
        
        <section>
            <div id="sec-1" class="row d-flex min-500 relative bg-navy-gradient text-light p-0">
                <div class="offset-lg-1"></div>
                <div class="col-lg-5 banner-left p-5 right">
                    <h2 class="section-title text-light mb-0">
                        <?php echo $security1Title; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange up up-med">
                    <p class="p-big pt-2 m-0">
                        <?php echo $security1Desc1; ?>
                    </p>
                </div>
                <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center o-12 right right-med">
                    <img class="img-portfolio-hand absolute z-0 bottom-0 opacity-full"
                        src="<?php echo $securityImgHandDevice; ?>" 
                        alt="<?php echo $securityImgHandDeviceAlt; ?>">
                </div>
                <div class="offset-lg-2"></div>
            </div>
        </section>
        
        <!--sec-->
        
        <section>
            <div id="sec-3" class="row d-flex p-5 min-500 bg-white">
                <div class="offset-lg-2"></div>
                <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center o-12 right right-med">
                    <img class="img-shield absolute z-0 opacity-full ds"
                        src="<?php echo $securityImgShield; ?>" 
                        alt="<?php echo $securityImgShieldAlt; ?>">
                </div>
                <div class="col-lg-5 banner-left right">
                    <h2 class="section-title text-dark mb-0">
                        <?php echo $security2Title; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange up up-med">
                    <p class="p-big pt-3 m-0">
                        <?php echo $security2Desc1; ?>
                    </p>
                </div>
                <div class="offset-lg-1"></div>
            </div>
        </section>  

        <!--Password-->
        
        <section>
            <div id="sec-4" class="row relative d-flex p-5 min-500 bg-light">
                <div class="offset-lg-1"></div>
                <div class="col-lg-5 banner-left right">
                    <h2 class="section-title text-dark mb-0">
                        <?php echo $security3Title; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange up up-med">
                    <p class="p-big pt-3 m-0">
                        <?php echo $security3Desc1; ?>
                    </p>
                </div>
                <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center o-12 right right-med">
                    <img class="img-iphone-password absolute z-0 top-0 left-0 opacity-full ds"
                    src="<?php echo $securityImgPassword; ?>"
                    alt="">
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
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center text-center py-3 o-12 down down-med">
                    <!--jaxx liberty google store-->
                    <a href="https://play.google.com/store/apps/details?id=com.liberty.jaxx"
                        target="_blank">
                            <img class="home-store-badge mt-2 right"
                            src="/assets/img/jaxx-google-play.png"
                            alt="Google Play Store button to download Jaxx Liberty" />
                    </a>
                    <!--jaxx liberty itunes-->
                    <a href="https://itunes.apple.com/us/app/jaxx-liberty/id1435383184?ls=1&mt=8"
                        target="_blank">
                            <img class="home-store-badge mt-2 right right-med"
                            src="/assets/img/jaxx-app-store.png"
                            alt="iTunes App Store button to download Jaxx Liberty" />
                    </a>
                    <!--jaxx liberty chrome-->
                    <a href="https://chrome.google.com/webstore/detail/jaxx-liberty/cjelfplplebdjjenllpjcblmjkfcffne"
                        target="_blank">
                            <img class="home-store-badge mt-2 right right-slow"
                            src="/assets/img/jaxx-chrome-store.png"
                            alt="Chrome Web Store button to download Jaxx Liberty" />
                    </a>
                    <!--end button nest row-->
                    <div id="desktop_download" class="right right-med p-0">
                        <a href="/downloads">
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
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-500 bg--ipad-wood-table down down-med"></div>
            </div>
        </section>

    </div><!--end main container-->
</main>

<?php

include 'includes/footer.php';

?>