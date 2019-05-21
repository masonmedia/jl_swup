<?php
$page = "community";
$title = "Jaxx Liberty | Community";
include 'includes/header.php';
include 'copy.php';
include 'images.php';
?>

<!--banner-->

<div id="banner" role="banner" class="container-fluid p-0">
    <div class="row d-flex min-700-lg py-5 text-light relative">
        <img class="img-full absolute z-0 left-0 filter-dark up up-med"
        src="<?php echo $communityBannerImg; ?>"
        alt="<?php echo $communityBannerImgAlt; ?>">
       <div class="offset-lg-2"></div>
        <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center ts p-5">
            <h1 class="site-title font-weight-bold ds-black zoom zoom-med">
                <?php echo $communityBannerTitle; ?>
            </h1>
            <a href="#sec-1">
                <button class="btn btn-lg btn-outline-light my-2 zoom zoom-med">
                    Learn more
                </button>
            </a> 
        </div>
        <div class="offset-lg-2"></div>
    </div>
</div>

<!--main body-->

<main>
    <div id="sec-1" class="container-fluid p-0 text-secondary">

        <!--intro-->
        
        <section>
            <div id="sec-1" class="row d-flex min-500 relative bg-navy-gradient text-light p-5">
               <div class="offset-lg-2"></div>
                <div class="col-lg-4 banner-left right py-3">
                    <h2 class="section-title text-light mb-0">
                        <?php echo $communityTitle1; ?>
                    </h2>
                    <hr class="hr-big border-0 bg-orange up up-med">
                    <p class="p-big py-3 m-0">
                        <?php echo $communityDesc1; ?>
                    </p>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center text-left right py-3">
                    <ul id="socialIcons" class="list-unstyled p-0">
                        <li class="h5 m-0">
                            <a href="https://twitter.com/jaxx_io?lang=en" target="_blank" onclick="googleAnalyticsTrigger('Twitter', 'Community_Page')">
                                <i class="fa fa-twitter p-2"></i> @jaxx_io
                            </a>
                        </li>
                        <li class="h5 m-0">
                            <a href="https://www.instagram.com/jaxx_io/" target="_blank" onclick="googleAnalyticsTrigger('Instagram', 'Community_Page')">
                                <i class="fa fa-instagram p-2"></i> @jaxx_io
                            </a>
                        </li>
                        <li class="h5 m-0">
                            <a href="https://www.reddit.com/r/jaxx/" target="_blank" onclick="googleAnalyticsTrigger('Reddit', 'Community_Page')">
                                <i class="fa fa-reddit p-2"></i> @/r/jaxx
                            </a>
                        </li>
                        <li class="h5 m-0">
                            <a href="https://www.youtube.com/user/decentralTV" target="_blank" onclick="googleAnalyticsTrigger('Youtube', 'Community_Page')">
                                <i class="fa fa-youtube p-2"></i> @decentralTV
                            </a>
                        </li>
                        <li class="h5 m-0">
                            <a href="https://t.me/jaxxliberty" target="_blank" onclick="googleAnalyticsTrigger('Telegram', 'Community_Page')">
                                <i class="fa fa-telegram p-2"></i> @t.me/jaxxliberty
                            </a>
                        </li>
                    </ul>
                </div>
               <div class="offset-lg-2"></div>
            </div>
        </section>

         <!--Our Asset Network-->
        
        <section>
            <div id="coinLogos" class="row bg-light px-3 py-5">
               <div class="offset-lg-2"></div>
                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center pt-0 px-5 pb-3 right">                    
                    <h2 class="section-title text-dark mb-0">Partners</h2>
                    <hr class="hr-big border-0 bg-orange">
                </div>
               <div class="offset-lg-2"></div>

                    <!--coin/token grid-->
                    <div class="container">
                        <!--row-->
                        <div class="row d-flex px-3 pb-5 pt-0">
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                               <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                   <a href="https://bitcoin.org" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Bitcoin.png" alt="Jaxx Liberty Partner Bitcoin">
                                        <h5>Bitcoin</h5>
                                   </a>
                                </div>
                            </div><!--end col-->

                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                               <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                   <a href="https://ethereum.org" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Ethereum.svg" alt="Jaxx Liberty Partner Ethereum">
                                        <h5>Ethereum</h5>
                                   </a>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                               <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                   <a href="https://www.bitcoincash.org/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Bitcoincash.svg" alt="Jaxx Liberty Partner Bitcoin Cash">
                                        <h5>BCH</h5>
                                   </a>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                               <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                   <a href="https://litecoin.org/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Litecoin.svg" alt="Jaxx Liberty Partner Litecoin">
                                        <h5>Litecoin</h5>
                                   </a>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://www.dash.org/" target="_blank">
                                        <img class="coin-logo bg-white rounded-circle shadow mb-3" src="/assets/img/coin-logos/Dash.svg" alt="Jaxx Liberty Partner Dash">
                                        <h5>Dash</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                               <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                   <a href="https://ethereumclassic.org/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/EthereumClassic.svg" alt="Jaxx Liberty Partner Ethereum Classic">
                                        <h5>ETC</h5>
                                   </a>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://z.cash/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/zCash.svg" alt="Jaxx Liberty Partner Zcash">
                                        <h5>Zcash</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://dogecoin.com/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Doge.svg" alt="Jaxx Liberty Partner Doge">
                                        <h5>Dogecoin</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://www.rsk.co/smart-bitcoin-rbtc/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Rootstock.svg" alt="Jaxx Liberty Partner RBTC">
                                        <h5>RBTC</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://www.digibyte.co/digibyte-global-blockchain" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/DigiByte.svg" alt="Jaxx Liberty Partner DigiByte">
                                        <h5>DigiByte</h5>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://www.groestlcoin.org/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Groestlcoin.svg" alt="Jaxx Liberty Partner Groestlcoin">
                                        <h5>GRS</h5>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://www.binance.com/en" target="_blank">
                                        <img class="coin-logo bg-white rounded-circle shadow mb-3" src="/assets/img/coin-logos/binance.svg" alt="Jaxx Liberty Partner Binance">
                                        <h5>Binance</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://www.huobi.com/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Huobi.svg" alt="Jaxx Liberty Partner Huobi">
                                        <h5>Huobi</h5>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://vanbex.com/labs" target="_blank">
                                        <img class="coin-logo bg-white rounded-circle shadow mb-3" src="/assets/img/coin-logos/Fuel.svg" alt="Jaxx Liberty Partner Fuel">
                                        <h5>Fuel</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://omisego.network/" target="_blank">
                                        <img class="coin-logo bg-white rounded-circle shadow mb-3" src="/assets/img/coin-logos/OmiseGo.svg" alt="Jaxx Liberty Partner OmiseGo">
                                        <h5>OmiseGo</h5>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://www.flixxo.com/#/" target="_blank">
                                        <img class="coin-logo bg-white rounded-circle shadow mb-3" src="/assets/img/coin-logos/Flixxo.svg" alt="Jaxx Liberty Partner Flixxo">
                                        <h5>Flixxo</h5>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://insureum.co/product" target="_blank">
                                        <img class="coin-logo bg-white rounded-circle shadow mb-3" src="/assets/img/coin-logos/Insureum.svg" alt="Jaxx Liberty Partner Insureum">
                                        <h5>Insureum</h5>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://crypto.com/en/token.html" target="_blank">
                                        <img class="coin-logo bg-white rounded-circle shadow mb-3" src="/assets/img/coin-logos/Crypto.com.svg" alt="Jaxx Liberty Partner Crypto.com">
                                        <h5>MCO</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://neo.org/" target="_blank">
                                        <img class="coin-logo bg-white rounded-circle shadow mb-3" src="/assets/img/coin-logos/Neo.svg" alt="Jaxx Liberty Partner NEO">
                                        <h5>NEO</h5>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://firstblood.io/" target="_blank">
                                        <img class="coin-logo bg-white rounded-circle shadow mb-3" src="/assets/img/coin-logos/FirstBlood.svg" alt="Jaxx Liberty Partner FirstBlood">
                                        <h5>FirstBlood</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                               <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                   <a href="https://www.augur.net/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Augur.svg" alt="Jaxx Liberty Partner Augur">
                                        <h5>Augur</h5>
                                   </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                               <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                   <a href="https://bitcore.cc/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Bitcore.svg" alt="Jaxx Liberty Partner Bitcore">
                                        <h5>Bitcore</h5>
                                   </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://golem.network/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Golem.svg" alt="Jaxx Liberty Partner Golem">
                                        <h5>Golem</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://dev.status.im/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Status.svg" alt="Jaxx Liberty Partner Status">
                                        <h5>Status</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                               <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://digix.global/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/DigiX.svg" alt="Jaxx Liberty Partner DigixDAO">
                                        <h5>DigixDAO</h5>
                                   </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://dentacoin.com/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Dentacoin.svg" alt="Jaxx Liberty Partner Dentacoin">
                                        <h5>Dentacoin</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://about.bancor.network/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Bancor.svg" alt="Jaxx Liberty Partner Bancor">
                                        <h5>Bancor</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Monaco.svg" alt="Jaxx Liberty Partner Monaco">
                                    <h5>Monaco</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://tenx.tech/en/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/TenX.svg" alt="Jaxx Liberty Partner TenX">
                                        <h5>TenX</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://wax.io/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Wax.svg" alt="Jaxx Liberty Partner WAX">
                                        <h5>WAX</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://www.iconomi.net/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Iconomi.svg" alt="Jaxx Liberty Partner Iconomi">
                                        <h5>Iconomi</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://www.civic.com/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Civic.svg" alt="Jaxx Liberty Partner Civic">
                                        <h5>Civic</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://polymath.network/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Polymath.svg" alt="Jaxx Liberty Partner Polymath">
                                        <h5>Polymath</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://santiment.net/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Santiment.svg" alt="Jaxx Liberty Partner Santiment">
                                        <h5>Santiment</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://gnosis.pm/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Gnosis.svg" alt="Jaxx Liberty Partner Gnosis">
                                        <h5>Gnosis</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                    <a href="https://aragon.org/" target="_blank">
                                        <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Aragon.svg" alt="Jaxx Liberty Partner aragon">
                                        <h5>Aragon</h5>
                                    </a>
                                </div>
                            </div>

                            <!--read more accordion-->

                            <div class="col-sm-12 d-flex flex-column justify-content-center align-items-center text-center p-0 moreBox" style="d-none">
                                <div class="accordion w-100 rounded" id="coinAccordion">
                                    <div class="card border-0">
                                        <!--collapse content-->
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#coinAccordion">
                                            <div class="card-body bg-light pt-0 px-0">
                                                <div class="container-fluid bg-light rounded">
                                                <!--row-->
                                                    <div class="row d-flex">

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                            <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://chain.link/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Link.svg" alt="Jaxx Liberty Partner Link">
                                                                    <h5>Link</h5>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                            <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://www.domraider.com/en/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Domraider.svg" alt="Jaxx Liberty Partner DomRaider">
                                                                    <h5>DomRaider</h5>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                            <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://loomx.io/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Loom.svg" alt="Jaxx Liberty Partner Loom">
                                                                    <h5>Loom</h5>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                            <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://enjincoin.io/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Enjin.svg" alt="Jaxx Liberty Partner Engine Coin">
                                                                    <h5>Enjin Coin</h5>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://bankex.com/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Bankex.svg" alt="Jaxx Liberty Partner Bankex">
                                                                    <h5>Bankex</h5>
                                                               </a>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="http://www.noblockno.party/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Blockparty.svg" alt="Jaxx Liberty Partner Blockparty">
                                                                    <h5>BOXX</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://tokencard.io/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Tokencard.svg" alt="Jaxx Liberty Partner Tokencard">
                                                                    <h5>Tokencard</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                            <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://iex.ec/rlc-token/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/iExec.svg" alt="Jaxx Liberty Partner iExec RLC">
                                                                    <h5>iExec RLC</h5>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                            <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://www.maecenas.co/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Maecenas.svg" alt="Jaxx Liberty Partner Maecenas">
                                                                    <h5>Maecenas</h5>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                            <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://www.matchpool.com/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Matchpool.svg" alt="Jaxx Liberty Partner Matchpool">
                                                                    <h5>Matchpool</h5>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                            <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://melonport.com/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Melonport.svg" alt="Jaxx Liberty Partner Melonport">
                                                                    <h5>Melonport</h5>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                            <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://www.metronome.io/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Metronome.svg" alt="Jaxx Liberty Partner Metronome">
                                                                    <h5>Metronome</h5>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                            <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://mith.io/en-US" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Mithril.svg" alt="Jaxx Liberty Partner Mithril">
                                                                    <h5>Mithril</h5>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                            <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://aion.network/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Aion.svg" alt="Jaxx Liberty Partner Aion">
                                                                    <h5>Aion</h5>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                            <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://www.mobilego.io/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/MobileGO.svg" alt="Jaxx Liberty Partner MobileGO">
                                                                    <h5>MobileGO</h5>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                            <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://0x.org/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Ox.svg" alt="Jaxx Liberty Partner Ox">
                                                                    <h5>Ox</h5>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://www.edgeless.io/token" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Edgeless.svg" alt="Jaxx Liberty Partner Edgeless">
                                                                    <h5>Edgeless</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://www.po.et/token" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/poet.svg" alt="Jaxx Liberty Partner Po.et">
                                                                    <h5>Po.et</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://sonm.com/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Sonm.svg" alt="Jaxx Liberty Partner SONM">
                                                                    <h5>SONM</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://www.wings.ai/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Wings.svg" alt="Jaxx Liberty Partner Wings">
                                                                    <h5>Wings</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://shivom.io/company/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Shivom.svg" alt="Jaxx Liberty Partner Shivom">
                                                                    <h5>Shivom</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://www.hbzcoin.com/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/HBZ.svg" alt="Jaxx Liberty Partner Helbiz">
                                                                    <h5>Helbiz</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://www.presearch.io/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Presearch.svg" alt="Jaxx Liberty Partner Presearch">
                                                                    <h5>Presearch</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://www.bitclave.com/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Bitclave.svg" alt="Jaxx Liberty Partner Bitclave">
                                                                    <h5>Bitclave</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://www.creditbit.org/creditBit.html" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Creditbit.svg" alt="Jaxx Liberty Partner Creditbit">
                                                                    <h5>Creditbit</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://www.paypie.com/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Paypie.svg" alt="Jaxx Liberty Partner Paypie">
                                                                    <h5>Paypie</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://musiconomi.com/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Musiconomi.svg" alt="Jaxx Liberty Partner Musiconomi">
                                                                    <h5>MCI</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://www.brickblock.io/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Brickblock.svg" alt="Jaxx Liberty Partner Brickblock">
                                                                    <h5>Brickblock</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="http://blockmason.io/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Blockmason.svg" alt="Jaxx Liberty Partner Blockmason">
                                                                    <h5>Blockmason</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://ripiocredit.network/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Ripio.svg" alt="Jaxx Liberty Partner Ripio Credit Network">
                                                                    <h5>RCN</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://swarm.city/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/SwarmCity.svg" alt="Jaxx Liberty Partner Swarm City">
                                                                    <h5>SWT</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://u.cash/tokens" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Ucash.svg" alt="Jaxx Liberty Partner Ucash">
                                                                    <h5>Ucash</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://unikoingold.com/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Unikoin.svg" alt="Jaxx Liberty Partner Unikoin">
                                                                    <h5>Unikoin</h5>
                                                               </a>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://redistribution.cofound.it/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Cofoundit.svg" alt="Jaxx Liberty Partner Cofoundit">
                                                                    <h5>Cofoundit</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://windingtree.com/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/WindingTree.svg" alt="Jaxx Liberty Partner Winding Tree">
                                                                    <h5>LIF</h5>
                                                               </a>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://www.dapowerplay.com/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/DAPowerPlay.svg" alt="Jaxx Liberty Partner DAPowerPlay">
                                                                    <h5>DPP</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://basicattentiontoken.org/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/BasicAttentionCoin.svg" alt="Jaxx Liberty Partner Basic Attention">
                                                                    <h5>Basic Attention</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://www.scanetchain.io/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Scanetchain.svg" alt="Jaxx Liberty Partner Scanetchain">
                                                                    <h5>Scanetchain</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://www.sense.chat/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Sense.svg" alt="Jaxx Liberty Partner Sense">
                                                                    <h5>Sense</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://shipchain.io/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/ShipChain.svg" alt="Jaxx Liberty Partner ShipChain">
                                                                    <h5>SHIP</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://storj.io/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Storj.svg" alt="Jaxx Liberty Partner Storj">
                                                                    <h5>Storj</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://www.stox.com/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Stox.svg" alt="Jaxx Liberty Partner Stox">
                                                                    <h5>Stox</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://www.viberate.io/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Viberate.svg" alt="Jaxx Liberty Partner Viberate">
                                                                    <h5>Viberate</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://worldcore.eu/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Worldcore.svg" alt="Jaxx Liberty Partner Worldcore">
                                                                    <h5>Worldcore</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://www.zap.org/" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Zap.svg" alt="Jaxx Liberty Partner Zap">
                                                                    <h5>Zap</h5>
                                                               </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center px-3 pb-3">
                                                           <div class="wrap w-100 bg-light-grey m-2 p-3 rounded shadow">
                                                                <a href="https://www.stormx.io/storm-token" target="_blank">
                                                                    <img class="coin-logo rounded-circle shadow mb-3" src="/assets/img/coin-logos/Storm.svg" alt="Jaxx Liberty Partner Storm">
                                                                    <h5>Storm</h5>
                                                               </a>
                                                            </div>
                                                        </div>
                                                        
                                                    </div><!--end accordion row-->
                                                </div><!--end nest container-->
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end accordion-->

                                <!-- load more -->

                                <div class="card-header bg-light border-0" id="headingOne">
                                    <button class="btn btn-lg btn-outline-orange mt-3" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="coinShow" onclick="showMore()">Show more</button>
                                </div>
                            </div><!--end accordion col-->
                        </div><!--end row-->
                    </div><!--end nest container-->
            </div><!--end our assets row-->
        </section>

        <!-- coin data mockup component] -->

        <!-- <section>
            <div id="sec-4" class="row d-flex p-5 min-500 bg-white">
                <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center text-left right">
                    <h2 class="section-title">Jaxx Liberty Partners</h2>
                    <hr class="hr-big border-0 bg-secondary">
                    <div id="marketData" class="list-unstyled columns--blog w-100">
                    </div>
                </div>
            </div>
        </section> -->

        <!-- <div class="row d-flex p-5 min-500 bg-white">
            <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center right">
                <div id="showData">
                    <button class="btn btn-lg" onclick="CreateTableFromJSON();">TRY ME</button>
                </div>
            </div>
        </div> -->

        <!--Jaxx blog API GET-->

         <!-- <section>
            <div id="sec-4" class="row d-flex p-5 min-500 bg-white">
                <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center text-left right">
                    <h2 class="section-title text-center">News from the Jaxx Blog</h2>
                    <hr class="hr-big border-0 bg-secondary">
                    <div id="authors" class="columns--blog w-100"></div>
                </div>
            </div>
        </section> -->

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
                <div class="col-lg-12 min-600 down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-girl-laptop-phone.jpg" alt="Join thousands of users who already trust Jaxx Liberty. Download it for free on Android, iOS, Mac OS X, Windows, Linux, or Google Chrome extension.">
                </div>
            </div>
        </section>

    </div><!--end main container-->
</main>
<?php

include 'includes/footer.php';

?>
