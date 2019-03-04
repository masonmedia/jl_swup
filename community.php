<?php

$title = "Jaxx Liberty | Community";

$metaD = "Jaxx Liberty is a digital wallet that supports over 85 assets and is available on iOS, Android, Mac, Linux, Windows, and Google Chrome.";

include 'includes/header.php';

?>

<!--banner-->

<div id="banner" role="banner" class="container-fluid p-0">
    <div class="row d-flex min-700-lg py-5 text-light relative">
       <img class="img-full absolute z-0 left-0 filter-dark up up-med lazy" data-src="/assets/img/jaxx-community-banner.jpg" alt="Jaxx Liberty is your all-in-one digital asset wallet.">
       <div class="offset-lg-2"></div>
        <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center ts p-5">
            <h1 class="h4 mt-3 zoom">Jaxx Liberty Ecosystem</h1>
            <h2 class="site-title font-weight-bold zoom zoom-med">Community is in our DNA.</h2>
            <a href="#sec-1"><button class="p-btn text-light bg-trans mb-1 border-0 p-0 zoom zoom-slow">Learn more <i class="fa fa-angle-right fa-btn text-light"></i></button></a> 
        </div>
        <div class="offset-lg-2"></div>
    </div>
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
<!--                   <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-women-garage.jpg" alt="Jaxx Liberty is your all-in-one digital asset wallet.">-->
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-partners.jpeg" alt="">
                </div>
            </div>
        </section>
        
        <!--social-->
        
        <section>
            <div id="sec-2" class="row d-flex min-500 bg-white stagger-right">
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

        <!--Jaxx blog API GET-->
        
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
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-apple-4-iphones-min.jpg" alt="">
<!--                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-android-tablet-pc.jpg" alt="Jaxx Liberty has industry leading security features from facial recognition to qr-code support, a 12-word backup phrase, and password protection.">-->
                </div>
            </div>
        </section>

        <!--Password-->
        
        <section>
            <!--row 3 Our Asset Network-->
                <div id="coinLogos" class="row bg-light px-3 py-5">
                    <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center min-50 text-center px-5 pt-0 pb-5">
                       <h2 class="section-title">Our asset network.</h2>
                        <hr class="hr-big border-0 bg-orange">
                        <p class="p-big pt-3 pb-5 m-0">Jaxx Liberty supports over 85 digital assets.</p>
                        <!--carousel-->
                                    <div class="container-fluid rounded">
                                        <!--row-->
                                        <div class="row d-flex">
                                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                               <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                   <a href="https://www.augur.net/" target="_blank">
                                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Augur.svg" alt="Jaxx Liberty Partner Augur">
                                                        <h5>Augur</h5>
                                                   </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                               <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                   <a href="https://bitcore.cc/" target="_blank">
                                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Bitcore.svg" alt="Jaxx Liberty Partner Bitcore">
                                                        <h5>Bitcore</h5>
                                                   </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                    <a href="https://golem.network/" target="_blank">
                                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Golem.svg" alt="Jaxx Liberty Partner Golem">
                                                        <h5>Golem</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                    <a href="https://dev.status.im/" target="_blank">
                                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Status.svg" alt="Jaxx Liberty Partner Status">
                                                        <h5>Status</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                               <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                    <a href="https://digix.global/" target="_blank">
                                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/DigiX.svg" alt="Jaxx Liberty Partner DigixDAO">
                                                        <h5>DigixDAO</h5>
                                                   </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                    <a href="https://dentacoin.com/" target="_blank">
                                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Dentacoin.svg" alt="Jaxx Liberty Partner Dentacoin">
                                                        <h5>Dentacoin</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                    <a href="https://about.bancor.network/" target="_blank">
                                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Bancor.svg" alt="Jaxx Liberty Partner Bancor">
                                                        <h5>Bancor</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Monaco.svg" alt="Jaxx Liberty Partner Monaco">
                                                    <h5>Monaco</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                    <a href="https://tenx.tech/en/" target="_blank">
                                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/TenX.svg" alt="Jaxx Liberty Partner TenX">
                                                        <h5>TenX</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                    <a href="https://wax.io/" target="_blank">
                                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Wax.svg" alt="Jaxx Liberty Partner WAX">
                                                        <h5>WAX</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                    <a href="https://www.iconomi.net/" target="_blank">
                                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Iconomi.svg" alt="Jaxx Liberty Partner Iconomi">
                                                        <h5>Iconomi</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                    <a href="https://www.civic.com/" target="_blank">
                                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Civic.svg" alt="Jaxx Liberty Partner Civic">
                                                        <h5>Civic</h5>
                                                    </a>
                                                </div>
                                            </div>
              
                                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                    <a href="https://polymath.network/" target="_blank">
                                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Polymath.svg" alt="Jaxx Liberty Partner Polymath">
                                                        <h5>Polymath</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                    <a href="https://santiment.net/" target="_blank">
                                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Santiment.svg" alt="Jaxx Liberty Partner Santiment">
                                                        <h5>Santiment</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                    <a href="https://gnosis.pm/" target="_blank">
                                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Gnosis.svg" alt="Jaxx Liberty Partner Gnosis">
                                                        <h5>Gnosis</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                    <a href="https://aragon.org/" target="_blank">
                                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Aragon.svg" alt="Jaxx Liberty Partner aragon">
                                                        <h5>Aragon</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                    <a href="https://www.stormx.io/storm-token/" target="_blank">
                                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Storm.svg" alt="Jaxx Liberty Partner Storm">
                                                        <h5>Storm</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                   <a href="https://www.saltlending.com/?utm_source=icodrops" target="_blank">
                                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Salt.svg" alt="Jaxx Liberty Partner Salt">
                                                        <h5>Salt</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                   <a href="https://enjincoin.io/" target="_blank">
                                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Enjin.svg" alt="Jaxx Liberty Partner Engine Coin">
                                                        <h5>Enjin Coin</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                    <a href="https://iex.ec/rlc-token-1/" target="_blank">
                                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/iExec.svg" alt="Jaxx Liberty Partner iExec RLC">
                                                        <h5>iExec RLC</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            
                                            <!--read more accordion-->
                                            
                                            <div class="col-sm-12 d-flex flex-column justify-content-center align-items-center text-center">
                                                <div class="accordion w-100 rounded" id="coinAccordion">
                                                    <div class="card border-0">
                                                        <div class="card-header bg-light border-0" id="headingOne">
                                                            <button class="btn btn-lg btn-secondary mt-3" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">See More</button>
                                                        </div>
                                                        <!--collapse content-->
                                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#coinAccordion">
                                                            <div class="card-body bg-light pt-3">
                                                                <div class="container-fluid bg-light rounded">
                                                                <!--row-->
                                                                    <div class="row d-flex">
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://www.edgeless.io/token" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Edgeless.svg" alt="Jaxx Liberty Partner Edgeless">
                                                                                    <h5>Edgeless</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://www.po.et/token" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/poet.svg" alt="Jaxx Liberty Partner Po.et">
                                                                                    <h5>Po.et</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://sonm.com/" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Sonm.svg" alt="Jaxx Liberty Partner SONM">
                                                                                    <h5>SONM</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://www.wings.ai/" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Wings.svg" alt="Jaxx Liberty Partner Wings">
                                                                                    <h5>Wings</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://shivom.io/company/" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Shivom.svg" alt="Jaxx Liberty Partner Shivom">
                                                                                    <h5>Shivom</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://www.helbizcoin.io/" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/HBZ.svg" alt="Jaxx Liberty Partner Hellbiz">
                                                                                    <h5>Helbiz</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://www.presearch.io/" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Presearch.svg" alt="Jaxx Liberty Partner Presearch">
                                                                                    <h5>Presearch</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://www.bitclave.com/" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Bitclave.svg" alt="Jaxx Liberty Partner Bitclave">
                                                                                    <h5>Bitclave</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://www.creditbit.org/creditBit.html" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Creditbit.svg" alt="Jaxx Liberty Partner Creditbit">
                                                                                    <h5>Creditbit</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://www.paypie.com/" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Paypie.svg" alt="Jaxx Liberty Partner Paypie">
                                                                                    <h5>Paypie</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://musiconomi.com/" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Musiconomi.svg" alt="Jaxx Liberty Partner Musiconomi">
                                                                                    <h5>Musiconomi</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://www.brickblock.io/" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Brickblock.svg" alt="Jaxx Liberty Partner Brickblock">
                                                                                    <h5>Brickblock</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="http://blockmason.io/" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Blockmason.svg" alt="Jaxx Liberty Partner Blockmason">
                                                                                    <h5>Blockmason</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://ripiocredit.network/" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Ripio.svg" alt="Jaxx Liberty Partner Ripio Credit Network">
                                                                                    <h5>RCN</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://swarm.fund/" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Swarm.svg" alt="Jaxx Liberty Partner Swarm Fund">
                                                                                    <h5>Swarm Fund</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://u.cash/tokens" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Ucash.svg" alt="Jaxx Liberty Partner Ucash">
                                                                                    <h5>Ucash</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://unikoingold.com/" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Unikoin.svg" alt="Jaxx Liberty Partner Unikoin">
                                                                                    <h5>Unikoin</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://eos.io/" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/EOS.svg" alt="Jaxx Liberty Partner EOS">
                                                                                    <h5>EOS</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://lisk.io/" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Lisk.svg" alt="Jaxx Liberty Partner Lisk">
                                                                                    <h5>Lisk</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://windingtree.com/" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/WindingTree.svg" alt="Jaxx Liberty Partner Winding Tree">
                                                                                    <h5>Winding Tree</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://z.cash/" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/zCash.svg" alt="Jaxx Liberty Partner Zcash">
                                                                                    <h5>Zcash</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://funfair.io/" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Funfair.svg" alt="Jaxx Liberty Partner FunFair">
                                                                                    <h5>FunFair</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://basicattentiontoken.org/" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/BasicAttentionCoin.svg" alt="Jaxx Liberty Partner Basic Attention">
                                                                                    <h5>Basic Attention</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                                           <div class="wrap w-100 bg-light-grey m-2 p-4 rounded shadow">
                                                                                <a href="https://enigma.co/" target="_blank">
                                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Enigma.svg" alt="Jaxx Liberty Partner Enigma">
                                                                                    <h5>Enigma</h5>
                                                                               </a>
                                                                            </div>
                                                                        </div><!--end col-->
                                                                    </div><!--end accordion row-->
                                                                    
                                                                    <div class="modal-footer mt-3">
                                                                        <button type="button" class="btn btn-lg btn-secondary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Close</button>
                                                                    </div>
                                                               
                                                                </div><!--end nest container-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!--end accordion-->
                                            </div><!--end accordion col-->
                                            
                                        </div><!--end row-->
                                    </div><!--end nest container-->
                            </div>
                </div><!--end our assets row-->
        </section>

        <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-imac-white.jpg" alt="Decentral is Canada's leading blockchain company.">
                </div>
            </div>
        </section>

        <!--download-->
        
        <section>
            <div id="sec-7" class="row bg-white min-500 py-5 stagger-right">
                <div class="offset-lg-2"></div>
                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center p-5 right">
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
                        <a href="/downloads.php" target="_blank"><p class="p-btn pt-3 mt-2 slide-right">Desktop <i class="fa fa-angle-right fa-btn orange"></i></p></a> 
                    </div>
               </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>

        <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-girl-laptop-phone.jpg" alt="">
                </div>
            </div>
        </section>

    </div><!--end main container-->
</main>

<?php

include 'includes/footer.php';

?>