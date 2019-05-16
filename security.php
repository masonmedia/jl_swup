<?php
$title = "Jaxx Liberty | Security";
include 'includes/header.php';
include 'copy.php';
include 'images.php';
?>

<!--banner-->

<div id="banner" role="banner" class="container-fluid p-0">
    <div class="row d-flex min-700-lg py-5 text-light relative">
       <img class="img-full absolute z-0 left-0 up up-med"
       src="/assets/img/jaxx-security-knight.jpg"
       alt="We built Jaxx Liberty with security in mind.">
       <div class="offset-lg-1"></div>
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left ts p-5">
            <h1 class="site-title font-weight-bold ds-black zoom zoom-med">Your <span class="d-table"> security</span> is our priority.</h1>
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
                <div class="col-lg-4 min-500 d-flex flex-column justify-content-center align-items-center o-12 right right-med">
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
                <div class="offset-lg-1"></div>
                <div class="col-lg-5 banner-left down">
                    <h3 class="section-title py-3 text-light">
                        <?php echo $homeDownload2; ?>
                    </h3>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 m-0">
                        <?php echo $homeDownload3; ?>
                    </p>
                </div>
                <div class="col-lg-5 d-flex flex-column justify-content-center align-items-center text-center p-5 o-12 down down-med">
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
                <div class="offset-lg-1"></div>
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