<?php
$title = "Jaxx Liberty | Security";
include 'includes/header.php';
include 'copy.php';
include 'images.php';
?>

<!--banner-->

<!-- <div id="brandAssets" role="banner" class="container-fluid p-0">
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
</div> -->

<!--main body-->

<main>
    <div id="brandAssets" class="container-fluid p-0 text-secondary">

        <!--intro-->
        
        <section>
            <div class="row min-500 relative bg-light border-bottom p-0">
                <div class="offset-lg-2"></div>
                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center p-5 mt-5 right">
                    <h2 class="section-title mb-0 mt-5">
                        Marketing Resources and Identity Guidelines
                    </h2>
                    <hr class="hr-big border-0 bg-orange up up-med">
                    <p class="p-big pt-2 m-0">
                        We believe that powerful marketing will help bring continued success for your apps. Use App Store badges, Apple product images, and these identity guidelines to effectively promote your app’s availability on the App Store in all marketing communications.
                    </p>
                </div>
                <div class="offset-lg-2"></div>
                <div class="container-fluid">
                    <div class="row pb-5 d-flex justify-content-center align-items-center text-center">
                        <div class="offset-sm-2"></div>
                        <div class="col-sm-2">
                            <a href="#logos">
                                <figure>
                                    <i class="fa fa-photo p-2"></i>
                                    <!-- <img class="w-25 p-2" src="/assets/img/Jaxx_Primary_Icon_RGB_Screeen.svg" alt=""> -->
                                    <p>Logos + Branding</p>
                                </figure>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#photos">
                                <figure>
                                    <i class="fa fa-camera p-2"></i>
                                    <p>Photography + Video</p>
                                </figure>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#messaging">
                                <figure>
                                    <i class="fa fa-pencil p-2"></i>
                                    <p>Messaging + Style</p>
                                </figure>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#legal">
                                <figure>
                                    <i class="fa fa-copyright p-2"></i>
                                    <p>Legal requirements</p>
                                </figure>
                            </a>
                        </div>
                        <div class="offset-sm-2"></div>
                    </div>
                </div><!--end nest container-->
            </div><!--end row-->
        </section>
        
        <!--logos-->
        
        <section class="bg-white bg-light border-bottom">
            <div id="logos" class="container">
                <div class="row d-flex p-5 min-400">
                    <div class="col-lg-12 banner-left right">
                        <h2 class="section-title text-dark mb-0">
                            Our logo
                        </h2>
                        <hr class="hr-big border-0 bg-orange up up-med">
                        <p class="p-big pt-3 m-0">
                            This is the logo that should always be used. There are two versions to ensure optimum legibility.
                        </p>
                        <!-- nested logos grid -->
                        <div class="row pt-5">
                            <div class="col-md-6 p-0">
                                <figure>
                                    <img class="w-100 bg-lightgrey p-5 opacity-full" src="/assets/img/JaxxLiberty_Logo_RGB_Screen.png" alt="Jaxx Liberty primary logo">
                                    <figcaption class="p-3">
                                        <h5 class="font-weight-bold">Logo</h5>
                                        <p>This is the main Jaxx Liberty logo. It should be used in this form whenever possible.</p>  
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-md-6 p-0">
                                <figure>
                                    <img class="w-100 bg-navy p-5 opacity-full" src="/assets/img/JaxxLiberty_Logo_RGB_Screen (white Liberty white X).png" alt="">
                                    <figcaption class="p-3">
                                        <h5 class="font-weight-bold">Inverted logo</h5>
                                        <p>This version with the white wordmark works well on dark and busy backgrounds.</p>  
                                    </figcaption>
                                </figure>
                            </div>
                        </div><!--nest logo row-->
                    <button class="btn btn-lg btn-orange shadow">Download assets</button>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section>  

        <!--glyph-->
        
        <section class="bg-light border-bottom">
            <div class="container">
                <div class="row d-flex p-5 min-400 bg-light">
                    <div class="col-lg-12 banner-left right">
                        <h2 class="section-title text-dark mb-0">
                            Glyph
                        </h2>
                        <hr class="hr-big border-0 bg-orange up up-med">
                        <p class="p-big pt-3 m-0">
                            This is our logo stripped of its wordmark. Use it only when and where space is limited.
                        </p>
                        <!-- nested logos grid -->
                        <div class="row pt-5">
                            <div class="col-md-6 lightgrey p-0">
                                <figure>
                                    <img class="w-50 d-block m-auto p-5 opacity-full" src="/assets/img/Jaxx_Primary_Icon.png" alt="Jaxx Liberty primary icon">
                                    <figcaption class="p-3">
                                        <h5 class="font-weight-bold">Logo</h5>
                                        <p>This is the main Jaxx Liberty logo. It should be used in this form whenever possible.</p>  
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-md-6 p-0">
                                <figure>
                                    <img class="w-100 bg-navy p-5 opacity-full" src="/assets/img/JaxxLiberty_Logo_RGB_Screen (white Liberty white X).png" alt="">
                                    <figcaption class="p-3">
                                        <h5 class="font-weight-bold">Inverted logo</h5>
                                        <p>This version with the white wordmark works well on dark and busy backgrounds.</p>  
                                    </figcaption>
                                </figure>
                            </div>
                        </div><!--nest logo row-->
                    <button class="btn btn-lg btn-orange shadow">Download assets</button>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
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
                    <a onclick="googleAnalyticsTrigger('Android', 'Home_Section2')"
                        href="https://play.google.com/store/apps/details?id=com.liberty.jaxx"
                        target="_blank">
                            <img class="home-store-badge mt-2 right"
                            src="/assets/img/jaxx-google-play.png"
                            alt="Google Play Button" />
                    </a>
                    <!--jaxx liberty itunes-->
                    <a onclick="googleAnalyticsTrigger('iOS', 'Home_Section2')"
                        href="https://itunes.apple.com/us/app/jaxx-liberty/id1435383184?ls=1&mt=8"
                        target="_blank">
                            <img class="home-store-badge mt-2 right right-med"
                            src="/assets/img/jaxx-app-store.png"
                            alt="iTunes App Store Button" />
                    </a>
                    <!--jaxx liberty chrome-->
                    <a onclick="googleAnalyticsTrigger('Chrome', 'Home_Section2')"
                        href="https://chrome.google.com/webstore/detail/jaxx-liberty/cjelfplplebdjjenllpjcblmjkfcffne"
                        target="_blank">
                            <img class="home-store-badge mt-2 right right-slow"
                            src="/assets/img/jaxx-chrome-store.png"
                            alt="Chrome Web Store" />
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
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-500 bg--ipad-wood-table down down-med"></div>
            </div>
        </section>

    </div><!--end main container-->
</main>

<?php

include 'includes/footer.php';

?>