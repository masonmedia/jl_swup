<?php

$title = "Jaxx Liberty | Community";

$metaD = "Jaxx Liberty is a digital wallet that supports over 85 assets and is available on iOS, Android, Mac, Linux, Windows, and Google Chrome.";

include 'includes/header.php';

?>

<!--banner-->

<div id="banner" role="banner" class="container-fluid p-0">
    <div class="row d-flex min-700-lg py-5 text-light relative">
<!--       <img class="img-full absolute z-0 left-0 filter-dark up up-med lazy" src="/assets/img/jaxx-partners.jpeg" alt="Jaxx Liberty is your all-in-one digital asset wallet.">-->
       <img class="img-full absolute z-0 left-0 filter-dark up up-med lazy" data-src="/assets/img/jaxx-community-banner.jpg" alt="Jaxx Liberty is your all-in-one digital asset wallet.">
       <div class="offset-lg-2"></div>
        <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center ts p-5">
            <h1 class="h4 mt-3 zoom">Jaxx Liberty Ecosystem</h1>
            <h2 class="site-title font-weight-bold zoom zoom-med">Community is in our DNA.</h2>
            <a href="#sec-1"><button class="p-btn text-light bg-trans mb-1 border-0 p-0 zoom zoom-slow">Learn more <i class="fa fa-angle-right fa-btn text-light"></i></button></a> 
        </div>
        <div class="offset-lg-2"></div>
    </div>

<!--main body-->

<main>
    <div id="sec-1" class="container-fluid p-0 text-secondary">

        <!--intro-->
        
        <section>
            <div id="sec-1" class="row d-flex min-500 relative bg-white p-5 stagger-right">
               <div class="offset-lg-2"></div>
                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center right">
                    <h2 class="h4 slide-right">Connecting, informing, sharing</h2>
                    <h3 class="section-title text-dark mb-0 slide-right">Working together to unite blockchain projects around the globe.</h3>
<!--
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 right right-med">
-->
                    <p class="p-big pt-3 m-0 slide-right"><span class="font-weight-bold orange">Jaxx Liberty</span> connects more than 85 partners and friends — all working together to inform and empower people to take control of their digital lives and move toward the age of value.</p>
                    <div class="right right-slow">
                        <a href="#sec-2"><p class="p-btn mt-3 slide-right">Explore <i class="fa fa-angle-right fa-btn orange"></i></p></a>  
                    </div>
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>

        <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-partners.jpeg" alt="">
                </div>
            </div>
        </section>
        
        <!--social-->
        
        <section>
            <div class="row d-flex min-500 bg-white stagger-right">
                <div class="offset-lg-2"></div>
                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center text-secondary p-5 right">
                    <h2 class="h4 mt-4 slide-right">The Decentral Ecosystem</h2>
                    <h3 class="section-title font-weight-bold slide-right">Join the Decentral community today. Read the latest posts about Jaxx Liberty, integrations, blockchain news, our partners, and more.</h3>
                    <div class="container-fluid right right-med">
                        <div class="row">
                            <div class="col-lg-12 d-flex flex-wrap justify-content-center align-items-center py-3 px-0 slide-right">
                               <div class="col-xs-3 mr-2">
                                    <a href="https://www.facebook.com/JaxxWallet/" target="_blank">
                                    <i class="fa fa-facebook orange p-3"></i>
                                    </a>
                                </div>
                                <div class="col-xs-3 mr-2">
                                    <a href="https://twitter.com/jaxx_io?lang=en" target="_blank">
                                    <i class="fa fa-twitter orange p-3"></i>
                                    </a>
                                </div>
                                <div class="col-xs-3 mr-2">
                                    <a href="https://www.instagram.com/jaxx_io/" target="_blank">
                                    <i class="fa fa-instagram orange p-3"></i>
                                    </a>
                                </div>
                                <div class="col-xs-3 mr-2">
                                    <a href="https://www.youtube.com/user/decentralTV" target="_blank">
                                    <i class="fa fa-youtube orange p-3"></i>
                                    </a>
                                </div>
                                <div class="col-xs-3 mr-2">
                                    <a href="https://t.me/jaxxliberty" target="_blank">
                                    <i class="fa fa-telegram orange p-3"></i>
                                    </a>
                                </div>
                                <div class="col-xs-3">
                                    <a href="https://www.reddit.com/r/jaxx/" target="_blank">
                                    <i class="fa fa-reddit orange p-3"></i>
                                    </a>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-2"></div>
            </div>
        </section>

        <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-three-people-selfie.jpg" alt="Join the Decentral social media community today.">
                </div>
            </div>
        </section>   

        <!--everything stays on device-->
        
        <section>
            <div id="sec-4" class="row d-flex p-5 min-500 bg-white stagger-right">
                <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center text-left right">
                   <!--Blog API data pull-->
                    <div id="blogAPI" class="row">
                        <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center min-50 text-left">
                            <h2 class="section-title text-center">News from the Jaxx blog.</h2>
                            <hr class="hr-big border-0 bg-orange">
                            <div id="blog-button-container" class="container-fluid p-4 columns columns--blog"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg">
<!--                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-iphone-X-multiscreen.jpg" alt="Jaxx Liberty has industry leading security features from facial recognition to qr-code support, a 12-word backup phrase, and password protection.">-->
                    <img class="img-full absolute z-0 left-0 up up-med lazy" data-src="/assets/img/jaxx-android-tablet-pc.jpg" alt="Jaxx Liberty has industry leading security features from facial recognition to qr-code support, a 12-word backup phrase, and password protection.">
                </div>
            </div>
        </section>

        <!--Password-->
        
        <section>
            <div id="sec-5" class="row d-flex p-5 min-500 bg-white stagger-right">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left right">
                    <h2 class="h4 slide-right">Password protection</h2>
                    <h3 class="section-title text-dark mb-0 slide-right">Now add a second layer of encryption.</h3>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 right right-med">
                    <p class="p-big pt-3 m-0 slide-right">Jaxx Liberty allows you to set a password to further enhance the security of your backup phrase, which encrypts everything within it. This gives you a second layer of security should your device ever be lost or stolen.</p>
                    <div class="right right-slow">
                        <a href="#sec-6"><p class="p-btn mt-3 slide-right">Multi-platform <i class="fa fa-angle-right fa-btn orange"></i></p></a>  
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg">
<!--                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-imac-white.jpg" alt="Decentral is Canada's leading blockchain company.">-->
                    <img class="img-full absolute z-0 left-0 up up-med lazy" data-src="/assets/img/jaxx-laptop-hands.jpg" alt="">
                </div>
            </div>
        </section>

        <!--Password-->
        
        <section>
            <div id="sec-6" class="row d-flex p-5 min-500 bg-white stagger-right">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left right">
                    <h2 class="h4 slide-right">Multi-platform</h2>
                    <h3 class="section-title text-dark mb-0 slide-right">Secure across platforms.</h3>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 right right-med">
                    <p class="p-big pt-3 m-0 slide-right">Sync Jaxx Liberty across all platforms and devices. Your 12-word backup phrase is all you’ll need to manage your digital assets on all your devices. Whether it's iOS, Android, Mac, Windows, Linux or a Chrome Extension, we’ve got you covered.</p>
                    <div class="right right-slow">
                        <a href="#sec-7"><p class="p-btn mt-3 slide-right">Learn more <i class="fa fa-angle-right fa-btn orange"></i></p></a>  
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg">
                    <img class="img-full absolute z-0 left-0 up up-med lazy" data-src="/assets/img/jaxx-clay-iphone-ipad-myjaxx.jpg" alt="Join thousands of users who already trust Jaxx Liberty. Download it for free.">
                </div>
            </div>
        </section>

        <!--multidevice + download-->
        
        <section>
            <div id="sec-7" class="row bg-white min-500 py-5 stagger-right">
                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-start text-left p-5 right">
                    <h2 class="h4 slide-right">Download</h2>
                    
                    <div class="right right-med">
                        <h3 class="section-title font-weight-bold slide-right">Join thousands of users who already trust Jaxx Liberty. Download it for free on Android, iOS, Mac OS X, Windows, Linux, or Google Chrome extension.</h3>
                    </div>
                    <div class="row downloads-badge-container pt-2 pl-3 slide-right">
                        <!--jaxx liberty google store-->
                        <a onclick="googleAnalyticsTrigger('Android/Tablet', 'Decentral_JaxxLiberty')" href="https://play.google.com/store/apps/details?id=com.liberty.jaxx" target="_blank"><img title="Play Play Button" class="store-badge mr-1 mt-1" src="/assets/img/jaxx-google-play.png" alt="Google Play Button"/></a>
                        <!--jaxx liberty itunes-->
                        <a onclick="googleAnalyticsTrigger('iOS', 'Decentral_JaxxLiberty')" href="https://itunes.apple.com/us/app/jaxx-liberty/id1435383184?ls=1&mt=8" target="_blank"><img title="iTunes App Store Button" class="store-badge mr-1 mt-1" src="/assets/img/jaxx-app-store.png" alt="iTunes App Store Button"/></a>
                        <!--jaxx liberty chrome-->
                        <a onclick="googleAnalyticsTrigger('iOS', 'Decentral_JaxxLiberty')" href="https://chrome.google.com/webstore/detail/jaxx-liberty/cjelfplplebdjjenllpjcblmjkfcffne" target="_blank"><img title="iTunes Store Button" class="store-badge mr-1 mt-1" src="/assets/img/jaxx-chrome-store.png" alt="Chrome Web Store"/></a>
                    </div><!--end button nest row--> 
                    <div class="right right-med">
                        <a href="/downloads.php" target="_blank"><p class="p-btn pt-3 mt-2 slide-right">Desktop versions <i class="fa fa-angle-right fa-btn orange"></i></p></a> 
                    </div>
               </div>
               <div class="offset-lg-4"></div>
            </div>
        </section>

        <section>
            <div class="row d-flex bg-light">
                <div class="col-lg-12 min-700-lg">
                    <img class="img-full absolute z-0 left-0 up up-med lazy" src="/assets/img/jaxx-ipad-black-wood-table.jpg" alt="Jaxx Liberty brings together over 85 digital assets and communities including Bitcoin, Ethereum, Litecoin, Dash, Digibyte, Ripple, and more.">
                </div>
            </div>
        </section>

    </div><!--end main container-->
</main>

<?php

include 'includes/footer.php';

?>