<?php
$title = "Jaxx Liberty | Your All-In-One Digital Asset Wallet.";
include 'includes/header.php';
include 'copy.php';
include 'images.php';
?>

<!--banner-->

<div id="banner" role="banner" class="container-fluid p-0">
    <div class="row d-flex min-100 min--100 mt-5 relative">
        <img class="img-full absolute z-0 left-0 up up-med"
        src="<?php echo $homeBannerImg;?>"
        alt="<?php echo $homeBannerImgAlt;?>">
        <div class="col-lg-8 d-flex flex-column justify-content-center align-items-start text-left p-5">
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
                    <h2 class="h4">
                        <?php echo $homeIntro1; ?>
                    </h2>
                    <h3 class="section-title text-dark">
                        <?php echo $homeIntro2; ?>
                    </h3>
                </div>
                <div
                    class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 down down-med">
                    <p class="p-big pt-3 m-0">
                        <?php echo $homeIntro3; ?>
                    </p>
                    <div class="down down-slow">
                        <a href="/features">
                            <p class="p-btn mt-3">
                                <?php echo $homeIntroCTA; ?> <i class="fa fa-angle-right fa-btn orange"></i>
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
                    <img class="img-full absolute z-0 left-0 lazy"
                    data-src="<?php echo $homeImg1; ?>"
                    alt="<?php echo $homeImgAlt1; ?>">
                </div>
            </div>
        </section>

        <!--features-->

        <section>
            <div class="row d-flex p-5 min-500 bg-white stagger-right">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left right">
                    <h2 class="h4">
                        <?php echo $homeFeat1; ?>
                    </h2>
                    <h3 class="section-title text-dark mb-0">
                        <?php echo $homeFeat2; ?>
                    </h3>
                </div>
                <div
                    class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 right right-med">
                    <p class="p-big pt-3 m-0">
                        <?php echo $homeFeat3; ?>
                    </p>
                    <div class="right right-slow">
                        <a href="/features">
                            <p class="p-btn mt-3">
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
                        data-src="<?php echo $homeImg2; ?>"
                        alt="<?php echo $homeImgAlt2; ?>">
                </div>
            </div>
        </section>

         <!--security-->

        <section>
            <div class="row d-flex p-5 min-500 bg-white stagger-right">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left right">
                    <h2 class="h4">
                        <?php echo $homeSecurity1; ?>
                    </h2>
                    <h3 class="section-title text-dark mb-0">
                        <?php echo $homeSecurity2; ?>
                    </h3>
                </div>
                <div
                    class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 right right-med">
                    <p class="p-big pt-3 m-0">
                        <?php echo $homeSecurity3; ?>
                    </p>
                    <div class="right right-slow">
                        <a href="/security">
                            <p class="p-btn mt-3">
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
                    <img class="img-full absolute z-0 left-0 lazy"
                    data-src="<?php echo $homeImg3; ?>"
                    alt="<?php echo $homeImgAlt3; ?>">
                </div>
            </div>
        </section>

        <!--multi-platform-->

        <section>
            <div class="row d-flex p-5 min-500 bg-white stagger-down">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left down">
                    <h2 class="h4">
                        <?php echo $homeDownload1; ?>
                    </h2>
                    <h3 class="section-title text-dark">
                        <?php echo $homeDownload2; ?>
                    </h3>
                </div>
                <div
                    class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 down down-med">
                    <p class="p-big pt-3 m-0">
                        <?php echo $homeDownload3; ?>
                    </p>
                    <div class="row d-flex d-sm-flex-column py-4 pl-3">
                            <!--jaxx liberty google store-->
                            <a onclick="googleAnalyticsTrigger('Android', 'Home_Section2')"
                                href="https://play.google.com/store/apps/details?id=com.liberty.jaxx"
                                target="_blank">
                                    <img class="store-badge mr-1 mt-1"
                                    src="/assets/img/jaxx-google-play.png"
                                    alt="Google Play Button" />
                            </a>
                            <!--jaxx liberty itunes-->
                            <a onclick="googleAnalyticsTrigger('iOS', 'Home_Section2')"
                                href="https://itunes.apple.com/us/app/jaxx-liberty/id1435383184?ls=1&mt=8"
                                target="_blank">
                                    <img class="store-badge mr-1 mt-1"
                                    src="/assets/img/jaxx-app-store.png"
                                    alt="iTunes App Store Button" />
                            </a>
                            <!--jaxx liberty chrome-->
                            <a onclick="googleAnalyticsTrigger('Chrome', 'Home_Section2')"
                                href="https://chrome.google.com/webstore/detail/jaxx-liberty/cjelfplplebdjjenllpjcblmjkfcffne"
                                target="_blank">
                                    <img class="store-badge mr-1 mt-1"
                                    src="/assets/img/jaxx-chrome-store.png"
                                    alt="Chrome Web Store" />
                            </a>
                        </div>
                        <!--end button nest row-->
                        <div id="desktop_download" class="right right-med p-0">
                            <a href="/downloads" onclick="googleAnalyticsTrigger('Desktop', 'Home_Section2')">
                                <p class="p-btn pl-0">
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
                    <img class="img-full absolute z-0 left-0 lazy"
                    data-src="<?php echo $homeImg4; ?>"
                    alt="<? echo $homeImgAlt4; ?>">
                </div>
            </div>
        </section>

         <!--Our friends-->

        <section>
            <div class="row d-flex p-5 min-500 text-secondary bg-white">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left up">
                    <h2 class="h4">
                        <?php echo $homeCoins1; ?>
                    </h2>
                    <h3 class="section-title m-0">
                        <?php echo $homeCoins2; ?>
                    </h3>
                </div>
                <div
                    class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left o-12 up up-med">
                    <p class="p-big pt-3 m-0">
                        <?php echo $homeCoins3; ?>
                    </p>
                    <div class="up up-slow">
                        <a href="/community" target="_blank">
                            <p class="p-btn mt-3">
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
                    <img class="img-full absolute z-0 left-0 lazy"
                    data-src="<?php echo $homeImg5; ?>"
                    alt="<?php echo $homeImgAlt5; ?>">
                </div>
            </div>
        </section>

        <!--testimonials-->

        <section>
            <div class="row d-flex p-5 min-500 text-secondary bg-white">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left down">
                    <h2 class="h4">
                        <?php echo $homeTestimonials1; ?>
                    </h2>
                    <h3 class="section-title mb-0">
                        <?php echo $homeTestimonials2; ?>
                    </h3>
                    <p class="p-big pt-3 m-0">
                        <?php echo $homeTestimonials3; ?>
                    </p>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-left text-secondary p-5 o-12 down down-med">
                    <div class="device-wrapper">
                    <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                        <div class="screen gradient-background">
                            
                            <!-- carousel -->
                            <div id="testimonials" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="card-body d-flex flex-column justify-content-center align-items-start text-left p-4">
                                            <img class="decentral-D rounded-circle shadow-lg mt-4 opacity-full fade-in-left" src="/assets/img/coin-logos/DigiByte.svg" alt="Jaxx Liberty + Digibyte">
                                            <hr class="w-50 bg-black border-0 mb-4 mt-3 fade-in-left">
                                            <p class="text-light font-weight-bold fade-in-top"><span class="bg-black py-2">"I look forward to seeing the new Jaxx Liberty and how the broader DigiByte community will use it."</span></p>
                                            <hr class="w-50 bg-dark border-0 my-3 fade-in-fwd">
                                            <p class="font-weight-bold py-2 mb-0 text-light fade-in-bottom">
                                                <span class="bg-black py-2">Josiah Spackman</span>
                                            </p>
                                            <footer class="blockquote-footer text-light ts font-weight-bold mb-3 fade-in">Ambassador, DigiByte Foundation</footer>
                                            <hr class="w-50 bg-dark border-0 mt-2 fade-in-left">
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="card-body d-flex flex-column justify-content-start align-items-start text-left p-4">
                                            <img class="decentral-D rounded-circle shadow-lg mt-4 opacity-full fade-in-fwd" src="/assets/img/coin-logos/Polymath.svg" alt="Jaxx Liberty + Polymath">
                                            <hr class="w-50 bg-dark border-0 mb-4 mt-3 fade-in">
                                            <p class="text-light font-weight-bold fade-in-left"><span class="bg-black py-2">"Polymath welcomes the launch of Jaxx Liberty. We chose Jaxx Liberty as our go-to wallet for the POLY token community."</span></p>
                                            <hr class="w-50 bg-dark border-0 my-3 fade-in">
                                            <p class="font-weight-bold py-2 mb-0 text-light fade-in-bottom">
                                                <span class="bg-black py-2">Trevor Koverko</span>
                                            </p>
                                            <footer class="blockquote-footer text-light ts font-weight-bold mb-3 fade-in-top">Co-Founder & CEO, Polymath</footer>
                                            <hr class="w-50 bg-dark border-0 mt-2 fade-in-left">
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="card-body d-flex flex-column justify-content-start align-items-start text-left p-4">
                                            <img class="decentral-D rounded-circle shadow-lg mt-4 opacity-full fade-in-top" src="/assets/img/coin-logos/rsk.png" alt="Jaxx Liberty + RSK">
                                            <hr class="w-50 bg-dark border-0 mb-4 mt-3 fade-in-left">
                                            <p class="text-light font-weight-bold fade-in-fwd">
                                                <span class="bg-black py-2">"We’re very happy to partner with Jaxx, a highly-secure and easy-to-use wallet that is the first to support RSK"</span>
                                            </p>
                                            <hr class="w-50 bg-dark border-0 my-3 fade-in-bottom">
                                            <p class="font-weight-bold py-2 mb-0 text-light fade-in">
                                                <span class="bg-black py-2">Diego Gutierrez Zaldivar</span>
                                            </p>
                                            <footer class="blockquote-footer text-light ts font-weight-bold mb-3 fade-in-fwd">CEO & Co-Founder, RSK Labs</footer>
                                            <hr class="w-50 bg-dark border-0 mt-2">
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="card-body d-flex flex-column justify-content-start align-items-start text-left p-4">
                                            <img class="decentral-D rounded-circle shadow-lg mt-4 opacity-full fade-in-top" src="/assets/img/coin-logos/Wax.svg" alt="Jaxx Liberty + RSK">
                                            <hr class="w-50 bg-dark border-0 mb-4 mt-3 fade-in-left">
                                            <p class="text-light font-weight-bold fade-in-fwd">
                                                <span class="bg-black py-2">“Jaxx is a partner we rely on. We can be sure Jaxx Liberty will serve and support our expanding ecosystem.”</span>
                                            </p>
                                            <hr class="w-50 bg-dark border-0 my-3 fade-in">
                                            <p class="font-weight-bold py-2 mb-0 text-light fade-in-bottom">
                                                <span class="bg-black py-2">Malcolm CasSelle</span>
                                            </p>
                                            <footer class="blockquote-footer text-light ts font-weight-bold mb-3 fade-in-top">President, WAX / CIO, OPSkins</footer>
                                            <hr class="w-50 bg-dark border-0 mt-2 fade-in-bottom">
                                        </div>
                                    </div><!--end slide-->
                                </div><!--end carousel-->
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row d-flex bg-light">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy"
                    data-src="<?php echo $homeImg6; ?>"
                    alt="<?php echo $homeImgAlt6; ?>">
                </div>
            </div>
        </section>

        <!--support-->

        <section>
            <div class="row d-flex p-5 min-500 text-secondary bg-white">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left up">
                    <h2 class="h4">
                        <?php echo $homeSupport1; ?>
                    </h2>
                    <h3 class="section-title m-0">
                        <?php echo $homeSupport2; ?>
                    </h3>
                </div>
                <div
                    class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left o-12 up up-med">
                    <p class="p-big pt-3 m-0">
                        <?php echo $homeSupport3; ?>
                    </p>
                    <div class="up up-slow">
                        <a href="https://support.decentral.ca/hc/en-us" target="_blank">
                            <p class="p-btn mt-3">
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
                    <img class="img-full absolute z-0 left-0 lazy"
                    data-src="<?php echo $homeImg7; ?>"
                    alt="<?php echo $homeImgAlt7; ?>">
                </div>
            </div>
        </section>

        <!--social-->

        <section>
            <div class="row d-flex p-5 min-500 text-secondary bg-white">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left up">
                    <h2 class="h4">
                        <?php echo $homeCommunity1; ?>
                    </h2>
                    <h3 class="section-title m-0">
                        <?php echo $homeCommunity2; ?>
                    </h3>
                </div>
                <div
                    class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left o-12 up up-med">
                    <p class="p-big pt-3 m-0">
                        <?php echo $homeCommunity3; ?>
                    </p>
                    <div class="up up-slow">
                        <a href="/community" onclick="googleAnalyticsTrigger('Community', 'Home_Page')">
                            <p class="p-btn mt-3">
                                <?php echo $homeCommunityCTA; ?> <i class="fa fa-angle-right fa-btn orange"></i>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <!--end row-->

            <div class="row d-flex bg-light">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy"
                    data-src="<?php echo $homeImg8; ?>"
                    alt="<?php echo $homeImgAlt8; ?>">
                </div>
            </div>
        </section>

    </div>
    <!--end container-->
</main>

<?php

include 'includes/footer.php';

?>