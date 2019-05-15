<!-- jaxx.io redesign layout 1 | May 10.19 -->

<?php
$title = "Jaxx Liberty | Your All-In-One Digital Asset Wallet.";
include 'includes/header.php';
include 'copy.php';
include 'images.php';
?>

<!--banner-->

<div id="banner" role="banner" class="container-fluid p-0">
    <div class="row d-flex min-600 p-5 relative">
        <div style="height: 900px; width: 900px; max-width: 100%; transform: rotate(51deg); left: -100px; top: -300px; border-radius: 20px 20px 40% 20px;" class="absolute z-1 bg-navy-gradient shadow-lg"></div>
        <div style="height: 900px; width: 300px; max-width: 100%; left: -300px;" class="absolute z-1 bg-white"></div>
        <img class="img-full absolute z--1 left-0 up up-med"
        src="<?php echo $homeBannerImg;?>"
        alt="<?php echo $homeBannerImgAlt;?>">
        <div class="col-lg-7 relative z-2 d-flex flex-column justify-content-center align-items-start text-left px-2 py-5">
            <h1 class="h4 mt-5 orange zoom">
                <?php echo $homeBanner1; ?>    
            </h1>
            <h2 class="site-title text-light font-weight-bold py-2 zoom zoom-med">
                <?php echo $homeBanner2; ?>  
            </h2>
            <h3 class="h4 text-light font-weight-bold">
                <? echo $homeBanner3; ?>
            </h3>
            <a href="/downloads">
                <p class="btn btn-lg btn-outline-orange mt-3" onclick="googleAnalyticsTrigger('Downloads_Page', 'Home_Banner')">
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
           <div id="sec-1" class="row d-flex relative bg-white text-secondary p-3">
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
        
        <!--portfolio-->
       
        <section>
        <!-- row relative min-500 bg-white py-4 mx-5 mt-5 rounded-top border-bottom -->
            <div class="row relative min-500 bg-light px-5 pt-5 pb-0 border-bottom">
                <div class="wrap d-flex flex-wrap justify-content-center align-items-center bg-white shadow-lg rounded px-5 pb-0">
                <!--wrappper-->
                    <div class="offset-lg-2"></div>
                    <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                        <div class="device-wrapper absolute z-0">
                            <img class="feat-phone feat-phone--port m-auto up opacity-full"
                            src="<?php echo $homeImg1; ?>"
                            alt="<?php echo $homeImg1Alt; ?>">
                        </div>
                    </div>
                    <div class="col-lg-4 banner-left px-5 pt-5">
                        <h2 class="section-title py-3 up">
                            <?php echo $homeFeature1Title; ?>
                        </h2>
                        <hr class="hr-big border-0 bg-orange m-0 up up-med">
                        <p class="p-big py-3 up up-slow">
                            <?php echo $homeFeature1Desc; ?>
                        </p>
                    </div>
                    <div class="offset-lg-2"></div>
               </div><!--end wrap-->
            </div>
        </section>

         <!--exchange-->
       
         <section>
            <div class="row relative d-flex min-500 bg-navy-gradient text-light py-4 border-bottom">
               <div class="offset-lg-2"></div>
               <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title text-light py-3 up">
                        <?php echo $homeFeature2Title; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 up up-slow">
                        <?php echo $homeFeature2Desc; ?>
                    </p>
                </div>
               <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper absolute z-0">
                        <img class="feat-phone m-auto up opacity-full"
                        src="<?php echo $homeImg2;?>"
                        alt="<?php echo $homeImg2Alt;?>">
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
                        <img class="feat-phone m-auto up opacity-full"
                        src="<?php echo $homeImg3; ?>"
                        alt="<?php echo $homeImg3Alt; ?>">
                    </div>
                </div>
                <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title py-3 up">
                        <?php echo $homeFeature3Title; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 up up-slow">
                        <?php echo $homeFeature3Desc; ?>
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
                        <?php echo $homeFeature4Title; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 mb-0 up up-slow">
                        <?php echo $homeFeature4Desc; ?>
                    </p>
                </div>
                <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center p-0 px-3 o-12 up">
                    <img class="jazzy absolute z-0 bottom-0 px-3 ds up opacity-full"
                    src="<?php echo $homeImg4;?>"
                    alt="<?php echo $homeImg4Alt;?>">
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>

         <!--support-->
        
         <section>
            <div class="row relative d-flex min-500 bg-light py-4 border-bottom">
               <div class="offset-lg-1"></div>
                <div class="col-lg-5 min-400 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <img class="w-100 ds up opacity-full"
                    src="<?PHP echo $homeImg5; ?>"
                    alt="<?PHP echo $homeImg5Alt; ?>">
                </div>
                <div class="col-lg-4 banner-left px-5 pt-5">
                    <h2 class="section-title py-3 up">
                        <?php echo $homeFeature5Title; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 up up-low">
                        <?php echo $homeFeature5Desc; ?>
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
                        <?php echo $homeFeature6Title; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange m-0 up up-med">
                    <p class="p-big py-3 up up-slow">
                        <?php echo $homeFeature6Desc; ?>
                    </p>
                </div>
                <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
                    <div class="device-wrapper absolute z-0 top-0">
                        <img class="feat-phone m-auto up opacity-full"
                        src="<?php echo $homeImg6; ?>"
                        alt="<?php echo $homeImg6Alt; ?>">
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
                <div class="col-lg-12 min-600 down down-med">
                    <img class="img-full absolute z-0 bottom-0 left-0 opacity-full"
                    src="<?php echo $homeImg7; ?>"
                    alt="<?php echo $homeImg7Alt; ?>">
                </div>
            </div>
        </section>

    </div>
    <!--end container-->
</main>

<?php

include 'includes/footer.php';

?>


<!-- Home page -- security + iphoneX testimonials carousel -->

<!-- iphoneX liberty code rebuild for future animation -->

    <div class="device-wrapper absolute z-0">
        <div class="device " data-device="iPhoneX" data-orientation="portrait" data-color="black">
            <div class="screen bg-box-navy">
            <div class="col-sm-12 p-3 bg-white">
                <img src="/assets/img/JaxxLiberty_Logo_RGB_Screen.png" class="opacity-full m-0 p-0" style="width: 40px;" alt="">
            </div>
                <div class="container-fluid">
                    <div class="row pt-0 p-3">
                        <div class="col-sm-12 p-2">
                            <span class="text-light float-left p-0 small">Portfolio ></span>
                            <span class="text-light float-right p-0 small">1 min ago &#8635;</span>
                        </div>
                        <div class="col-sm-12 text-center px-3 py-5 border rounded border-box-navy">
                            <p class="text-light m-0 p-0 small">Total portfolio value:</p>
                            <h3 class="orange font-weight-light m-0">$132.98 USD</h3>
                            <p class="text-light m-0 p-0 small"><span class="text-success">+10%</span> (843.52 USD)</p>
                        </div>
                        <div class="col-sm-12 p-2 my-2 border rounded border-box-navy bg-primary">
                                <p class="small float-left text-light align-middle mb-0 mt-2">Shapeshift</p>
                                <p class="float-right text-light p-2 rounded bg-orange m-0 small">Exchange Now</p>
                        </div>
                        <div class="col-sm-12 p-0">
                        <table class="table border-box-navy table-responsive text-light font-weight-light">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                            
                    </div>
                </div>

            </div>
        </div>
    </div>


<!--security-->

<section>
    <div class="row relative d-flex min-500 bg-white py-4 border-bottom">
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
        <div class="col-lg-4 min-400 d-flex flex-column justify-content-center align-items-center p-4 o-12 up">
            <div class="device-wrapper absolute z-0 top-0">
                <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                    <div class="screen">
                        <img class="w-100 lazy" data-src="/assets/img/jaxx-iphone-X-security-password.jpg"
                            alt="Your private keys never leave your device, and with strong encryption protocols, you can enjoy peace of mind.">
                    </div>
                </div>
            </div>
            <img class="feat-phone m-auto up" src="/assets/img/jaxx-feat-phone-case-password.jpg"
                alt="Your private keys never leave your device, and with strong encryption protocols, you can enjoy peace of mind.">
        </div>
        <div class="offset-lg-2"></div>
    </div>
</section>

<!--testimonials-->

<section>
    <div class="row relative d-flex p-5 min-500 text-light bg-box-navy">
        <div class="offset-lg-2"></div>
        <div class="col-lg-4 d-flex flex-column justify-content-center align-items-start text-left down">
            <h3 class="section-title text-light py-3 up">
                <?php echo $homeTestimonials1; ?>
            </h3>
            <hr class="hr-big border-0 bg-orange m-0 up up-med">
            <p class="p-big py-3 up up-low">
                <?php echo $homeTestimonials3; ?>
            </p>
        </div>
        <div
            class="col-lg-4 d-flex flex-column justify-content-center align-items-center text-left text-secondary p-5 o-12 down down-med">
            <div class="device-wrapper">
                <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                    <div class="screen gradient-background">

                        <!-- carousel -->
                        <div id="testimonials" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div
                                        class="card-body d-flex flex-column justify-content-center align-items-start text-left p-4">
                                        <img class="decentral-D rounded-circle shadow-lg mt-4 opacity-full fade-in-left"
                                            src="/assets/img/coin-logos/DigiByte.svg" alt="Jaxx Liberty + Digibyte">
                                        <hr class="w-50 bg-black border-0 mb-4 mt-3 fade-in-left">
                                        <p class="text-light font-weight-bold fade-in-top">
                                            <span class="bg-black py-2">
                                                "I look forward to seeing the new Jaxx Liberty and how the broader
                                                DigiByte community will use it."
                                            </span>
                                        </p>
                                        <hr class="w-50 bg-dark border-0 my-3 fade-in-fwd">
                                        <p class="font-weight-bold py-2 mb-0 text-light fade-in-bottom">
                                            <span class="bg-black py-2">Josiah Spackman</span>
                                        </p>
                                        <footer class="blockquote-footer text-light ts font-weight-bold mb-3 fade-in">
                                            Ambassador, DigiByte Foundation
                                        </footer>
                                        <hr class="w-50 bg-dark border-0 mt-2 fade-in-left">
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div
                                        class="card-body d-flex flex-column justify-content-start align-items-start text-left p-4">
                                        <img class="decentral-D rounded-circle shadow-lg mt-4 opacity-full fade-in-fwd"
                                            src="/assets/img/coin-logos/Polymath.svg" alt="Jaxx Liberty + Polymath">
                                        <hr class="w-50 bg-dark border-0 mb-4 mt-3 fade-in">
                                        <p class="text-light font-weight-bold fade-in-left">
                                            <span class="bg-black py-2">
                                                "Polymath welcomes the launch of Jaxx Liberty. We chose Jaxx Liberty as
                                                our go-to wallet for the POLY token community."
                                            </span>
                                        </p>
                                        <hr class="w-50 bg-dark border-0 my-3 fade-in">
                                        <p class="font-weight-bold py-2 mb-0 text-light fade-in-bottom">
                                            <span class="bg-black py-2">
                                                Trevor Koverko
                                            </span>
                                        </p>
                                        <footer
                                            class="blockquote-footer text-light ts font-weight-bold mb-3 fade-in-top">
                                            Co-Founder & CEO, Polymath
                                        </footer>
                                        <hr class="w-50 bg-dark border-0 mt-2 fade-in-left">
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div
                                        class="card-body d-flex flex-column justify-content-start align-items-start text-left p-4">
                                        <img class="decentral-D rounded-circle shadow-lg mt-4 opacity-full fade-in-top"
                                            src="/assets/img/coin-logos/rsk.png" alt="Jaxx Liberty + RSK">
                                        <hr class="w-50 bg-dark border-0 mb-4 mt-3 fade-in-left">
                                        <p class="text-light font-weight-bold fade-in-fwd">
                                            <span class="bg-black py-2">
                                                "We’re very happy to partner with Jaxx, a highly-secure and easy-to-use
                                                wallet that is the first to support RSK"
                                            </span>
                                        </p>
                                        <hr class="w-50 bg-dark border-0 my-3 fade-in-bottom">
                                        <p class="font-weight-bold py-2 mb-0 text-light fade-in-top">
                                            <span class="bg-black py-2">
                                                Diego Gutierrez Zaldivar
                                            </span>
                                        </p>
                                        <footer
                                            class="blockquote-footer text-light ts font-weight-bold mb-3 fade-in-fwd">
                                            CEO & Co-Founder, RSK Labs
                                        </footer>
                                        <hr class="w-50 bg-dark border-0 mt-2">
                                    </div>
                                </div>
                                <!--END SLIDE-->

                                <div class="carousel-item">
                                    <div
                                        class="card-body d-flex flex-column justify-content-start align-items-start text-left p-4">
                                        <img class="decentral-D mt-4 opacity-full fade-in-top"
                                            src="/assets/img/Jaxx_Icon_Reversed_Large_RGB_Screen.png"
                                            alt="Jaxx Liberty + RSK">
                                        <hr class="w-50 bg-dark border-0 mb-4 mt-3 fade-in-left">
                                        <p class="text-light font-weight-bold fade-in-bottom">
                                            <span class="bg-black py-2">
                                                “I've used Jaxx Liberty for almost 2 years now, but really appreciated
                                                the updated version. Interface improved significantly...Great work
                                                guys!”
                                            </span>
                                        </p>
                                        <hr class="w-50 bg-dark border-0 my-3 fade-in">
                                        <p class="font-weight-bold py-2 mb-0 text-light fade-in-left">
                                            <a href="https://wallets.com/jaxx-review/" target="_blank">
                                                <span class="bg-black py-2">
                                                    Stac1969
                                                </span>
                                            </a>
                                        </p>
                                        <footer
                                            class="blockquote-footer text-light ts font-weight-bold mb-3 fade-in-top">
                                            Jaxx Liberty User
                                        </footer>
                                        <hr class="w-50 bg-dark border-0 mt-2 fade-in-bottom">
                                    </div>
                                </div>
                                <!--end slide-->

                                <div class="carousel-item">
                                    <div
                                        class="card-body d-flex flex-column justify-content-start align-items-start text-left p-4">
                                        <img class="decentral-D rounded-circle shadow-lg mt-4 opacity-full fade-in-top"
                                            src="/assets/img/coin-logos/Wax.svg" alt="Jaxx Liberty + RSK">
                                        <hr class="w-50 bg-dark border-0 mb-4 mt-3 fade-in-left">
                                        <p class="text-light font-weight-bold fade-in-fwd">
                                            <span class="bg-black py-2">
                                                “Jaxx is a partner we rely on. We can be sure Jaxx Liberty will serve
                                                and support our expanding ecosystem.”
                                            </span>
                                        </p>
                                        <hr class="w-50 bg-dark border-0 my-3 fade-in">
                                        <p class="font-weight-bold py-2 mb-0 text-light fade-in-bottom">
                                            <span class="bg-black py-2">
                                                Malcolm CasSelle
                                            </span>
                                        </p>
                                        <footer
                                            class="blockquote-footer text-light ts font-weight-bold mb-3 fade-in-top">
                                            President, WAX / CIO, OPSkins
                                        </footer>
                                        <hr class="w-50 bg-dark border-0 mt-2 fade-in-bottom">
                                    </div>
                                </div>
                                <!--end slide-->

                                <div class="carousel-item">
                                    <div
                                        class="card-body d-flex flex-column justify-content-start align-items-start text-left p-4">
                                        <img class="decentral-D mt-4 opacity-full fade-in-top"
                                            src="/assets/img/Jaxx_Icon_Reversed_Large_RGB_Screen.png"
                                            alt="Jaxx Liberty + RSK">
                                        <hr class="w-50 bg-dark border-0 mb-4 mt-3 fade-in-left">
                                        <p class="text-light font-weight-bold fade-in-bottom">
                                            <span class="bg-black py-2">
                                                “Jaxx Liberty is a crypto wallet worth your attention. [It] allows full
                                                control of your wealth [and] don’t get me started on the easy-to-use
                                                clear-cut interface...”
                                                <!-- “ Jaxx Liberty is a crypto wallet worth your attention. Its system allows full control of your wealth, including fee adjustments and private key control. Don’t get me started on the easy to use clear-cut interface, which leads to every button and option in no time. Let’s not neglect the prime and competent support team awaiting your question 24/7.” -->
                                            </span>
                                        </p>
                                        <hr class="w-50 bg-dark border-0 my-3 fade-in">
                                        <p class="font-weight-bold py-2 mb-0 text-light fade-in-left">
                                            <a href="https://wallets.com/jaxx-review/" target="_blank">
                                                <span class="bg-black py-2">
                                                    William Carter
                                                </span>
                                            </a>
                                        </p>
                                        <footer
                                            class="blockquote-footer text-light ts font-weight-bold mb-3 fade-in-top">
                                            wallets.com
                                        </footer>
                                        <hr class="w-50 bg-dark border-0 mt-2 fade-in-bottom">
                                    </div>
                                </div>
                                <!--end slide-->

                            </div>
                            <!--end carousel-->
                            <div class="offset-lg-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- home page star/ratings div -->

<section>
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
                        <a onclick="googleAnalyticsTrigger('iOS', 'Security_Page')"
                            href="https://itunes.apple.com/us/app/jaxx-liberty/id1435383184?ls=1&mt=8"
                            target="_blank"><img class="home-store-badge mt-4" src="/assets/img/jaxx-app-store.png"
                                alt="iTunes App Store Button" /></a>
                        <p class="p-big py-3 up up-slow">
                            "My morning routing involves waking up, reaching fgor my phone, and checking the markets,
                            the news, and my portfolio balance in this app"
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
                        <a onclick="googleAnalyticsTrigger('Android/Tablet', 'Security_Page')"
                            href="https://play.google.com/store/apps/details?id=com.liberty.jaxx" target="_blank"><img
                                title="Play Play Button" class="home-store-badge mt-4"
                                src="/assets/img/jaxx-google-play.png" alt="Google Play Button" /></a>
                        <p class="p-big py-3 up up-slow">
                            "Best wallet with the most hardworking and quick response support team I have ever
                            experienced. No option for 1000 stars so I am just giving 5 stars."
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
</section>

<!-- security page "devOPs" accordion concept -->

<!--dev-ops security-->
        
<section>
            <div id="sec-7" class="row d-flex p-5 min-500 bg-white">
                <div class="col-lg-12 d-flex flex-column justify-content-center align-items-start text-left right">
                    <h2 class="h4 mt-3 slide-up">
                        <?php echo $securityDevOpsMainMicro; ?>
                    </h2>
                    <h3 class="section-title text-dark mb-0 slide-up">
                        <?php echo $securityDevOpsMainTitle; ?>
                    </h3>
                    <p class="p-big pt-3 m-0 slide-up">
                        <?php echo $securityDevOpsMainDesc1; ?>
                    </p>
                   
                </div>
               
                <!-- accordion -->
                <div class="col-lg-12 d-flex flex-column justify-content-center align-items-start text-left right">
                    <div class="accordion w-100 py-5" id="accordionExample">
                        <div class="card border-0 border-bottom">
                            <div class="card-header" id="headingOne">
                                <h2 class="h4 btn-link mb-0 p-3 orange" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <code class="text-secondary font-weight-bold">>> <?php echo $securityDevOpsTitle1; ?></code>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body border-bottom border-right border-left px-4 py-5">
                                    <p class="pl-3 border-left">
                                        <?php echo $securityDevOpsDesc1; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 border-bottom">
                            <div class="card-header" id="headingTwo">
                                <h2 class="h4 btn-link mb-0 p-3 orange collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <code class="text-secondary font-weight-bold">>> <?php echo $securityDevOpsTitle2; ?></code>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body border-bottom border-right border-left px-4 py-5">
                                    <p class="pl-3 border-left">
                                        <?php echo $securityDevOpsDesc2; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 border-bottom">
                            <div class="card-header" id="headingThree">
                                <h2 class="h4 btn-link mb-0 p-3 orange collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <code class="text-secondary font-weight-bold">>> <?php echo $securityDevOpsTitle3; ?></code>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body border-bottom border-right border-left  px-4 py-5">
                                    <p class="pl-3 border-left">
                                        <?php echo $securityDevOpsDesc3; ?>
                                    </p>
                                </div>
                            </div>
                        </div><!--end card-->
                        <div class="card border-0 border-bottom">
                            <div class="card-header" id="headingFour">
                                <h2 class="h4 btn-link mb-0 p-3 orange collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <code class="text-secondary font-weight-bold">>> <?php echo $securityDevOpsTitle4; ?></code>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body border-bottom border-right border-left px-4 py-5">
                                    <p class="pl-3 border-left">
                                        <?php echo $securityDevOpsDesc4; ?>
                                    </p>
                                </div>
                            </div>
                        </div><!--end card-->
                        <div class="card border-0 border-bottom">
                            <div class="card-header" id="headingFive">
                                <h2 class="h4 btn-link mb-0 p-3 orange collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <code class="text-secondary font-weight-bold">>> <?php echo $securityDevOpsTitle5; ?></code>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="card-body border-bottom border-right border-left px-4 py-5">
                                    <p class="pl-3 border-left">
                                        <?php echo $securityDevOpsDesc5; ?>
                                    </p>
                                </div>
                            </div>
                        </div><!--end card-->
                        <div class="card border-0 border-bottom">
                            <div class="card-header" id="headingSix">
                                <h2 class="h4 btn-link mb-0 p-3 orange collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <code class="text-secondary font-weight-bold">>> <?php echo $securityDevOpsTitle6; ?></code> 
                                </h2>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                <div class="card-body border-bottom border-right border-left px-4 py-5">
                                    <p class="pl-3 border-left">
                                        <?php echo $securityDevOpsDesc6; ?>
                                    </p>
                                </div>
                            </div>
                        </div><!--end card-->
                        <div class="card border-0 border-bottom">
                            <div class="card-header" id="headingSeven">
                                <h2 class="h4 btn-link mb-0 p-3 orange collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    <code class="text-secondary font-weight-bold">>> <?php echo $securityDevOpsTitle7; ?></code> 
                                </h2>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                <div class="card-body border-bottom border-right border-left px-4 py-5">
                                    <p class="pl-3 border-left">
                                        <?php echo $securityDevOpsDesc7; ?>
                                    </p>
                                </div>
                            </div>
                        </div><!--end card-->
                        <div class="card border-0 border-bottom">
                            <div class="card-header" id="headingEight">
                                <h2 class="h4 btn-link mb-0 p-3 orange collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    <code class="text-secondary font-weight-bold">>> <?php echo $securityDevOpsTitle8; ?></code> 
                                </h2>
                            </div>
                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                                <div class="card-body border-bottom border-right border-left p-4">
                                    <hr>
                                    <h4><?php echo $securityDevOpsTitle9; ?></h4>
                                    <hr>
                                    <p><?php echo $securityDevOpsDesc9; ?></p>
                                    <hr>
                                    <h4><?php echo $securityDevOpsTitle10; ?></h4>
                                    <hr>
                                    <p><?php echo $securityDevOpsDesc10; ?></p>
                                    <hr>
                                    <h4><?php echo $securityDevOpsTitle11; ?></h4>
                                    <hr>
                                    <p><?php echo $securityDevOpsDesc11 ?></p>
                                    <hr>
                                    <h4><?php echo $securityDevOpsTitle12; ?></h4>
                                    <hr>
                                    <p><?php echo $securityDevOpsDesc12; ?></p>
                                    <hr>
                                    <h4><?php echo $securityDevOpsTitle13; ?></h4>
                                    <hr>
                                    <p><?php echo $securityDevOpsDesc13; ?></p>
                                    <hr>
                                    <h4><?php echo $securityDevOpsTitle14; ?></h4>
                                    <hr>
                                    <p><?php echo $securityDevOpsDesc14; ?></p>
                                    <a href="https://support.decentral.ca/hc/en-us/search?utf8=%E2%9C%93&query=security" target="_blank" class="btn btn-lg btn-orange">Read more</a>
                                </div>
                            </div>
                        </div><!--end card-->

                    </div><!--end accordion-->
                </div>
            </div><!--end row-->
        </section>
        
        <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-android-tablet-pc.jpg" alt="Your 12-word backup phrase is encrypted and stored only on your device. We don’t have access to it nor is it stored on any server.">
                </div>
            </div>
        </section>