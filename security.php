<?php
$title = "Jaxx Liberty | Security";
include 'includes/header.php';
include 'copy.php';
?>

<!--banner-->

<div id="banner" role="banner" class="container-fluid p-0">
    <div class="row d-flex min-700-lg py-5 text-light relative">
       <img class="img-full absolute z-0 left-0 up up-med" src="/assets/img/jaxx-group-people.jpg" alt="We built Jaxx Liberty with security in mind.">
        <div class="col-lg-7 d-flex flex-column justify-content-end align-items-start text-left ts p-5">
            <h1 class="h4 mt-3 ds-black zoom">Jaxx Liberty Security</h1>
            <h2 class="site-title font-weight-bold ds-black zoom zoom-med">Your security is our priority.</h2><a href="#sec-1"><button class="p-btn orange ds-black bg-trans mb-1 border-0 p-0 zoom zoom-slow">Learn more <i class="fa fa-angle-right fa-btn orange"></i></button></a> 
        </div>
        <div class="offset-lg-5"></div>
    </div>
</div>

<!--main body-->

<main>
    <div id="sec-1" class="container-fluid p-0 text-secondary">

        <!--intro-->
        
        <section>
            <div id="sec-1" class="row d-flex min-500 relative bg-white p-5">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left right">
                    <h2 class="h4 slide-up">
                        <?php echo $security1Micro; ?>
                    </h2>
                    <h3 class="section-title text-dark mb-0 slide-up">
                        <?php echo $security1Title; ?>
                    </h3>
                    <p class="p-big pt-3 m-0 slide-up">
                        <?php echo $security1Desc1; ?>
                    </p>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 right right-med">
                    <p class="p-big pt-3 m-0 slide-up">
                        <?php echo $security1Desc2; ?>
                    </p>
                    <div class="right right-slow">
                        <a href="#sec-3"><p class="p-btn mt-3 slide-up">
                            <?php echo $security1CTA; ?> <i class="fa fa-angle-right fa-btn orange"></i></p></a>  
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 bottom-0 up up-med lazy" data-src="/assets/img/jaxx-ipad-desk-closeup-port.jpg" alt="Security is a priority from the design stage right through to development, including a rigorous and ongoing code review process. Security is in our DNA.">
                </div>
            </div>
        </section>
        
        <!--sec features-->
        
        <section>
            <div id="sec-3" class="row d-flex p-5 min-500 bg-white">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left right">
                    <h2 class="h4 slide-up">
                        <?php echo $security2Micro; ?>
                    </h2>
                    <h3 class="section-title text-dark mb-0 slide-up">
                        <?php echo $security2Title; ?>
                    </h3>
                    <p class="p-big pt-3 m-0 slide-up">
                        <?php echo $security2Desc1; ?>
                    </p>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 right right-med">
                    <p class="p-big pt-3 m-0 slide-up">
                        <?php echo $security2Desc2; ?>
                    </p>
                    <div class="right right-slow">
                        <a href="#sec-4"><p class="p-btn mt-3 slide-up">
                            <?php echo $security2CTA; ?> <i class="fa fa-angle-right fa-btn orange"></i></p></a>  
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 up up-med lazy" data-src="/assets/img/jaxx-ipad-iphone-X-password.jpg" alt="When you first launch the application, Jaxx Liberty creates a 12-word backup phrase, which is then used to generate and manage all of the private keys to your digital assets. Do not share these words with anyone, write them down on a piece of paper and keep them in a secure place, such as a safety deposit box.">
                </div>
            </div>
        </section>     

        <!--everything stays on device-->
        
        <!-- <section>
            <div id="sec-4" class="row d-flex p-5 min-500 bg-white">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left right">
                    <h2 class="h4 slide-up">You're in control</h2>
                    <h3 class="section-title text-dark mb-0 slide-up">Everything stays on-device.</h3>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 right right-med">
                    <p class="p-big pt-3 m-0 slide-up">Your 12-word backup phrase is encrypted and stored only on your device. We don’t have access to it nor is it stored on any server. We believe you should be in complete control.</p>
                    <div class="right right-slow">
                        <a href="#sec-5"><p class="p-btn mt-3 slide-up">Password protection <i class="fa fa-angle-right fa-btn orange"></i></p></a>  
                    </div>
                </div>
            </div>
        </section> -->

        <!-- <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-android-tablet-pc.jpg" alt="Your 12-word backup phrase is encrypted and stored only on your device. We don’t have access to it nor is it stored on any server.">
                </div>
            </div>
        </section> -->

        <!--Password-->
        
        <section>
            <div id="sec-4" class="row d-flex p-5 min-500 bg-white">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left right">
                    <h2 class="h4 slide-up">
                        <?php echo $security3Micro; ?>
                    </h2>
                    <h3 class="section-title text-dark mb-0 slide-up">
                        <?php echo $security3Title; ?>
                    </h3>
                    <p class="p-big pt-3 m-0 slide-up">
                        <?php echo $security3Desc1; ?>
                    </p>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 right right-med">
                    <p class="p-big pt-3 m-0 slide-up">
                        <?php echo $security3Desc2; ?>
                    </p>
                    <div class="right right-slow">
                        <a href="#sec-6"><p class="p-btn mt-3 mb-0 slide-up">
                            <?php echo $security3CTA; ?> <i class="fa fa-angle-right fa-btn orange"></i></p></a>  
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-laptop-hands.jpg" alt="Jaxx Liberty allows you to set a password to further enhance the security of your backup phrase, which encrypts everything within it. This gives you a second layer of security should your device ever be lost or stolen.">
                </div>
            </div>
        </section>

        <!--hot vs cold-->
        
        <section>
            <div id="sec-6" class="row d-flex p-5 min-500 bg-white">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left right">
                    <h2 class="h4 slide-up">
                        <?php echo $security4Micro; ?>
                    </h2>
                    <h3 class="section-title text-dark mb-0 slide-up">
                        <?php echo $security4Title; ?>
                    </h3>
                    <p class="p-big pt-3 m-0 slide-up">
                        <?php echo $security4Desc1; ?>
                    </p>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 right right-med">
                    <p class="p-big pt-3 m-0 slide-up">
                        <?php echo $security4Desc2; ?>
                    </p>
                    <div class="right right-slow">
                        <a href="#sec-7"><p class="p-btn mt-3 mb-0 slide-up">
                            <?php echo $security4CTA; ?> <i class="fa fa-angle-right fa-btn orange"></i></p></a>  
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-desk-paraphernalia.jpg" alt="Jaxx Liberty allows you to set a password to further enhance the security of your backup phrase, which encrypts everything within it. This gives you a second layer of security should your device ever be lost or stolen.">
                </div>
            </div>
        </section>

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

        <!--multidevice + download-->
        
        <section>
            <div id="sec-7" class="row bg-white min-500 py-5">
                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-start text-left p-5 right">
                    <h2 class="h4 slide-up">
                        <?php echo $security5Micro; ?>
                    </h2>
                    <div class="right right-med">
                        <h3 class="section-title font-weight-bold slide-up">
                            <?php echo $security5Title; ?>
                        </h3>
                    </div>
                    <div class="row downloads-badge-container pt-2 pl-3 slide-up">
                        <!--jaxx liberty google store-->
                        <a onclick="googleAnalyticsTrigger('Android/Tablet', 'Security_Page')" href="https://play.google.com/store/apps/details?id=com.liberty.jaxx" target="_blank"><img title="Play Play Button" class="store-badge mr-1 mt-1" src="/assets/img/jaxx-google-play.png" alt="Google Play Button"/></a>
                        <!--jaxx liberty itunes-->
                        <a onclick="googleAnalyticsTrigger('iOS', 'Security_Page')" href="https://itunes.apple.com/us/app/jaxx-liberty/id1435383184?ls=1&mt=8" target="_blank"><img title="iTunes App Store Button" class="store-badge mr-1 mt-1" src="/assets/img/jaxx-app-store.png" alt="iTunes App Store Button"/></a>
                        <!--jaxx liberty chrome-->
                        <a onclick="googleAnalyticsTrigger('iOS', 'Security_Page')" href="https://chrome.google.com/webstore/detail/jaxx-liberty/cjelfplplebdjjenllpjcblmjkfcffne" target="_blank"><img title="iTunes Store Button" class="store-badge mr-1 mt-1" src="/assets/img/jaxx-chrome-store.png" alt="Chrome Web Store"/></a>
                    </div><!--end button nest row--> 
                    <div id="desktop_download" class="right right-med">
                        <a href="/downloads" onclick="googleAnalyticsTrigger('Desktop', 'Security_Page')"><p class="p-btn pt-3 mt-2 slide-up">
                            <?php echo $security5CTA?> <i class="fa fa-angle-right fa-btn orange"></i></p></a> 
                    </div>
               </div>
               <div class="offset-lg-4"></div>
            </div>
        </section>

        <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" src="/assets/img/jaxx-ipad-black-wood-table.jpg" alt="Join thousands of users who already trust Jaxx Liberty. Download it for free on Android, iOS, Mac OS X, Windows, Linux, or Google Chrome extension.">
                </div>
            </div>
        </section>

    </div><!--end main container-->
</main>

<?php

include 'includes/footer.php';

?>