<?php
$title = "Jaxx Liberty | About Us";
$metaD = "Decentral is Canada's leading blockchain company and the maker of Jaxx and Jaxx Liberty, two of the most popular blockchain wallets with millions of users.";
include 'includes/header.php';
include 'copy.php';
include 'images.php';
?>

    <!--jumbotron-->
       
       <div id="banner" role="banner" class="container-fluid bg-black p-0">
        <div class="row d-flex min-700-lg relative py-5 ts stagger-right">
            <img 
            class="img-full absolute z-0 left-0 filter-dark up up-med" 
            src="<?php echo $aboutBannerImg; ?>" 
            alt="<?php echo $aboutBannerImgAlt; ?>">
            <div class="col-lg-9 d-flex flex-column justify-content-end align-items-start text-left text-light p-5">
                <h1 class="h4 mt-5 zoom">
                    <?php echo $aboutBannerTitle; ?>
                </h1>
                <h2 class="site-title text-light ds-black font-weight-bold zoom zoom-med">
                    <?php echo $aboutBannerSubtitle; ?>
                </h2>
                <a href="#sec-1">
                    <button class="p-btn bg-trans orange border-0 mb-1 p-0 zoom zoom-slow">
                        Learn more <i class="fa fa-angle-right fa-btn orange"></i>
                    </button>
                </a>
            </div>
             <div class="offset-lg-3"></div>
        </div>
    </div>
    
    <main id="main">
    
    <div class="container-fluid p-0 relative">

       <!--intro-->
       
       <section id="sec-1">
           <div class="row d-flex p-5 min-500 text-secondary bg-white stagger-down">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left down">
                    <h2 class="h4 orange slide-down">
                        <?php echo $aboutSection1Title; ?>
                    </h2>
                    <h3 class="section-title text-dark mb-0 slide-down">
                        <?php echo $aboutSection1Subtitle; ?>
                    </h3>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left o-12 down down-med">
                    <p class="p-big pt-3 m-0 slide-down">
                        <?php echo $aboutSection1Desc2; ?>
                    </p>
                    <!-- Button trigger modal -->
                    <button class="bg-trans border-0 p-0 down down-slow" data-toggle="modal" data-target="#values">
                        <p class="p-btn mt-3 slide-down">
                            <?php echo $aboutSection1CTA; ?> <i class="fa fa-angle-right fa-btn orange"></i>
                        </p>
                    </button>
                </div>
            </div><!--end row-->

            <!-- values modal -->
            <div class="modal fade" id="values" tabindex="-1" role="dialog" aria-labelledby="values" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content bg-black text-light">
                  <div class="modal-header border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <!-- Rounded switch -->
                    <label aria-hidden="true" class="switch">
                      <input type="checkbox checked">
                      <span class="slider round"></span>
                    </label>
                    </button>
                  </div>
                  <div class="modal-body px-4 pt-0">
                   <h2 class="section-title knockout-gradient text-center pb-5 pt-0 border-bottom w-100">Our Values</h2>
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-center align-items-start text-left p-5 border-right border-bottom">
                                <h3 class="h2 font-weight-bold pt-2">1. Think big. Be bold.</h3>
                           </div>

                           <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-center align-items-start text-left p-5 border-right border-bottom">
                                <h3 class="h2 font-weight-bold pt-2">2. Challenge equals opportunity.</h3>
                           </div>

                           <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-center align-items-start text-left p-5 border-bottom">
                                <h3 class="h2 font-weight-bold pt-2">3. Normal sucks. Be strange.</h3>
                           </div>

                           <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-center align-items-start text-left p-5 border-right border-bottom">
                                <h3 class="h2 font-weight-bold pt-2">4. Perfect for some. Not for everyone.</h3>
                           </div>

                           <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-center align-items-start text-left p-5 border-right border-bottom">
                                <h3 class="h2 font-weight-bold pt-2">5. Improve, improve, improve. Waste is a villain.</h3>
                           </div>

                           <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-center align-items-start text-left p-5 border-bottom">
                                <h3 class="h2 font-weight-bold pt-2">6. Question everything. There's a solution to every problem.</h3>
                           </div>

                            <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-center align-items-start text-left p-5 border-right border-bottom">
                                <h3 class="h2 font-weight-bold pt-2">7. Present minded. Future driven. Long term focused.</h3>
                           </div>

                           <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-center align-items-start text-left p-5 border-right border-bottom">
                                <h3 class="h2 font-weight-bold pt-2">8. Come and say hi. We've got nothing to hide.</h3>
                           </div>

                           <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-center align-items-start text-left p-5 border-bottom">
                               <h3 class="h2 font-weight-bold pt-2">9. We're sidekicks in a world of Heroes.</h3>
                           </div>

                           <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-center align-items-start text-left p-5 border-right">
                                <h3 class="h2 font-weight-bold pt-2">10. Life's a game. Keep leveling up.</h3>
                           </div>

                           <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-center align-items-start text-left p-5 border-right">
                                <h3 class="h2 font-weight-bold pt-2">11. Change happens. Embrace it.</h3>
                           </div>

                           <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-center align-items-center text-left p-5">
                               <img src="/assets/img/decentral_D_logo_white.png" class="decentral-D" alt="">
                           </div>
                       </div>
                       
                   </div><!--end container-->
                  </div><!--end modal body-->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-orange" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div><!--end modal-->
        </section>

        <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img 
                    class="img-full absolute z-0 left-0 lazy" 
                    data-src="<?php echo $aboutImg1; ?>" 
                    alt="<?php echo $aboutImg1Alt; ?>">
                </div>
            </div>
        </section>
        
        <!--anthony message-->     
        
        <section>  
            <div class="row d-flex p-5 min-500 text-secondary bg-white relative z-1 stagger-right">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left right">
                    <h2 class="h4 orange slide-right">
                        <?php echo $aboutSection2Title; ?>
                    </h2>
                    <h3 class="section-title text-dark mb-0 slide-right">
                        <?php echo $aboutSection2Subtitle; ?>
                    </h3>
                    <p class="p-big pt-3 m-0 slide-right">
                        <?php echo $aboutSection2Desc1; ?>
                    </p>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left o-12 right right-med">
                    <p class="p-big pt-3 m-0 slide-right">
                        <?php echo $aboutSection2Desc2; ?>
                    </p>
                    <div class="right right-slow">
                        <a href="#decentralHistory">
                            <p class="p-btn mt-3 slide-right">
                                <?php echo $aboutSection2CTA; ?> <i class="fa fa-angle-right fa-btn orange"></i>
                            </p>
                        </a>
                    </div>
                </div>
            </div><!--end row-->
        </section>
        
        <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img 
                    class="img-full absolute z-0 left-0 top-0 lazy" 
                    data-src="<?php echo $aboutImg2; ?>" 
                    alt="<?php echo $aboutImg2Alt; ?>">
                </div>
            </div>
        </section>
        
        <!--history-->   
        
        <section id="decentralHistory">   
            <div class="row d-flex p-5 min-500 text-secondary bg-white stagger-down">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left down">
                    <h2 class="h4 orange slide-down">
                        <?php echo $aboutSection3Title; ?>
                    </h2>
                    <h3 class="section-title text-dark mb-0 slide-down">
                        <?php echo $aboutSection3Subtitle; ?>
                    </h3>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left o-12 down down-med">
                    <p class="p-big pt-3 m-0 slide-down">
                        <?php echo $aboutSection3Desc1; ?>
                    </p>
                    <!-- Button trigger modal -->
                    <button class="bg-white border-0 p-0 down down-slow" data-toggle="modal" data-target="#history">
                        <p class="p-btn mt-3 slide-down"> 
                            <?php echo $aboutSection3CTA; ?> <i class="fa fa-angle-right fa-btn orange"></i>
                        </p>
                    </button>
                </div>
            </div><!--end row-->
            
            <!-- history Modal -->
            <div class="modal fade" id="history" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content bg-black text-light">
                  <div class="modal-header border-0">
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                       <!-- Rounded switch -->
                        <label aria-hidden="true" class="switch">
                          <input type="checkbox checked">
                          <span class="slider round"></span>
                        </label>
                    </button>
                  </div>
                  <div class="modal-body px-5 pt-0">
                    <h2 class="section-title knockout-gradient pb-4 pt-0">The History of Decentral</h2>
                    <div class="timeline-item">
                        <!--date-is='1' -->
                        <h2 class="h5 orange pb-2">1</h2>
                        <h3 class="h1">Early 2012</h3>
                        <p>Anthony Di Iorio organizes a variety of Bitcoin meetups in the Toronto area. BTC trades under $10. Anthony starts the Toronto Bitcoin Group.</p>
                        <hr class="mb-0 mt-4">
                    </div>

                    <div class="timeline-item">
                        <h2 class="h5 orange pb-2">2</h2>
                        <h3 class="h1">Early 2013</h3>
                        <p>Anthony Di Iorio founds and is elected first Executive Director of the Bitcoin Alliance of Canada (now <a href="https://digitalchamber.org/canada/" target="_blank"><span class="orange">“Chamber of Digital Commerce Canada”</span>)</a></p>
                        <p>Kryptokit is conceived and development begins. Kryptokit becomes the first Bitcoin wallet browser extension on release.</p>
                        <hr class="mb-0 mt-4">
                    </div>

                    <div class="timeline-item">
                        <h2 class="h5 orange pb-2">3</h2>
                        <h3 class="h1">Late 2013</h3>
                        <p>Vitalik Buterin shows Anthony a project he has been working on: Anthony is the first reader of what will become the Ethereum Whitepaper. Anthony dedicates funds and his full attention to building a team to pursue the Ethereum Project and becomes co-founder of Ethereum.</p>
                        <p>Ethereum is born: Decentral gives the Ethereum Project its first home. Anthony Di Iorio, Mihai Alisie, Vitalik Buterin, Charles Hoskinson and Amir Chetrit co-found the project to develop the platform laid out in the whitepaper. (Joseph Lubin, Gavin Wood, and Jeffrey Wilke are added as founders a few months later).</p>
                        <hr class="mb-0 mt-4">
                    </div>
                    <div class="timeline-item">
                        <h2 class="h5 orange pb-2">4</h2>
                        <h3 class="h1">Early 2014</h3>
                        <p>New Year’s Day: <span class="orange font-weight-bold">Decentral</span> opens its doors at 64 Spadina Ave. The Bitcoin ATM in this new office is the first in Toronto and second in the country.</p>
                        <p>Decentral organizes and runs the Bitcoin Expo 2014 (bitcoinexpo.ca), attended by thousands and the biggest cryptocurrency event in Canada at the time.</p>
                        <hr class="mb-0 mt-4">
                    </div>

                    <div class="timeline-item">
                        <h2 class="h5 orange pb-2">5</h2>
                        <h3 class="h1">Summer 2014</h3>
                        <p>Ethereum global crowdsale begins and eventually leads to $18m in ether sales (now worth over $44 billion).</p>
                        <p>Rushwallet by KryptoKit launches in beta as a simple HTML5 Bitcoin wallet.</p>
                        <hr class="mb-0 mt-4">
                    </div>

                    <div class="timeline-item">
                        <h2 class="h5 orange pb-2">6</h2>
                        <h3 class="h1">Late 2014</h3>
                        <p>Decentral hosts its 100th event. Seeks new event space to accommodate demand and crowd size.</p>
                        <hr class="mb-0 mt-4">
                    </div>

                    <div class="timeline-item">
                        <h2 class="h5 orange pb-2">7</h2>
                        <h3 class="h1">Early 2015</h3>
                        <p>Decentral partners with <a href="https://www.marsdd.com/facilities/event-space/" target="_blank"><span class="orange">MaRS</span></a> to host events in 2015.</p>
                        <hr class="mb-0 mt-4">
                    </div>

                    <div class="timeline-item">
                        <h2 class="h5 orange pb-2">8</h2>
                        <h3 class="h1">Early 2016</h3>
                        <p>Jaxx 1.0 released. Additional platforms supported.</p>
                        <hr class="mb-0 mt-4">
                    </div>

                    <div class="timeline-item">
                        <h2 class="h5 orange pb-2">9</h2>
                        <h3 class="h1">Late 2016</h3>
                        <p>Jaxx passes 100,000 users; Android is the most popular of the 9 platforms Jaxx supports.</p>
                        <p>In-app cryptocurrency swapping features go live; Jaxx users are able to exchange a variety of cryptocurrencies for each other, instantly.</p>
                        <hr class="mb-0 mt-4">
                    </div>

                    <div class="timeline-item">
                        <h2 class="h5 orange pb-2">10</h2>
                        <h3 class="h1">Early 2017</h3>
                        <p>Jaxx hits 300,000 users; users can pair their Jaxx masterseeds across iOS, Android, Chrome Browser, Linux, Mac, and Windows.</p>
                        <hr class="mb-0 mt-4">
                    </div>

                    <div class="timeline-item">
                        <h2 class="h5 orange pb-2">11</h2>
                        <h3 class="h1">Spring 2017</h3>
                        <p>Decentral announces upwards of 70 industry partnerships; companies include Coinbase, RSK, BitPay, Bittrex, Blockchain Capital, QTUM, Bancor, MonaCoin, Omni, Lisk, Stratus and others.</p>
                        <hr class="mb-0 mt-4">
                    </div>

                    <div class="timeline-item">
                        <h2 class="h5 orange pb-2">12</h2>
                        <h3 class="h1">Summer 2017</h3>
                        <p>Decentral Grand Odyssey Boat Cruise - hit blockchain event celebrates 4 years of Decentral events.</p>
                        <hr class="mb-0 mt-4">
                    </div>

                    <div class="timeline-item">
                        <h2 class="h5 orange pb-2">13</h2>
                        <h3 class="h1">November 2017</h3>
                        <p>Jaxx exceeds 400,000 users around the world.</p>
                        <p>Decentral Inc. begins construction for 5-floor, 15,000 square foot office and event space in the heart Toronto’s financial district.</p>
                        <hr class="mb-0 mt-4">
                    </div>

                    <div class="timeline-item">
                        <h2 class="h5 orange pb-2">14</h2>
                        <h3 class="h1">December 2017</h3>
                        <p><p>Bitcoin prices hits $20,000 CAD. 2000x higher than when Decentral’s founder, Anthony Di Iorio, started building the Toronto cryptocurrency community.</p>
                        <hr class="mb-0 mt-4">
                    </div>	
                  </div><!--end modal content-->
                  <div class="modal-footer border-0">
                    <button type="button" class="btn btn-orange" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div><!--end modal-->
        </section>
        
        <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" 
                    data-src="<?php echo $aboutImg3; ?>"
                    alt="<?php echo $aboutImg3Alt; ?>">
                </div>
            </div>
        </section>
        
        <!--Innovation-->
        
        <section>
            <div class="row d-flex p-5 min-500 bg-white stagger-right">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left right">
                    <h2 class="h4 orange slide-right">
                        <?php echo $aboutSection4Title; ?>
                    </h2>
                    <h3 class="section-title text-dark mb-0 slide-right">
                        <?php echo $aboutSection4Subtitle; ?>
                    </h3>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary o-12 right right-med">
                    <p class="p-big pt-3 m-0 slide-right">
                        <?php echo $aboutSection4Desc1; ?>
                    </p>
                    <div class="right right-slow">
                        <a href="https://decentral.ca" target="_blank">
                            <p class="p-btn mt-3 slide-right">
                                <?php echo $aboutSection4CTA; ?> <i class="fa fa-angle-right fa-btn orange"></i>
                            </p>
                        </a>
                    </div>
                </div>
            </div><!--end row-->
        </section>

        <section>
            <div class="row d-flex bg-light relative down-down-med">
                <div class="col-lg-12 min-700-lg">
                    <img class="img-full absolute z-0 left-0 lazy" 
                    data-src="<?php echo $aboutImg4; ?>" 
                    alt="<?php echo $aboutImg4Alt; ?>">
                </div>
            </div>
        </section>
        
        <!--careers--> 
        
        <section>  
            <div class="row d-flex p-5 min-500 text-secondary bg-white stagger-down">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left down">
                    <h2 class="h4 orange slide-down">
                        <?php echo $aboutSection5Title; ?>
                    </h2>
                    <h3 class="section-title text-dark mb-0 slide-down">
                        <?php echo $aboutSection5Subtitle; ?>
                    </h3>
                    <p class="p-big pt-3 m-0 slide-down">
                        <?php echo $aboutSection5Desc1; ?>
                    </p>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left o-12 down down-med">
                    <p class="p-big pt-3 m-0 slide-down">
                        <?php echo $aboutSection5Desc2; ?>
                    </p>
                    <div class="down down-slow">
                        <a href="/careers">
                            <p class="p-btn mt-3 slide-down">
                                <?php echo $aboutSection5CTA; ?> <i class="fa fa-angle-right fa-btn orange"></i>
                            </p>
                        </a>  
                    </div>
                </div>
            </div><!--end row-->
        </section>
        
        <section>
            <div class="row d-flex bg-light relative down down-med">
                <div class="col-lg-12 min-700-lg">
                    <img 
                    class="img-full absolute z-0 left-0 lazy" 
                    data-src="<?php echo $aboutImg5; ?>" 
                    alt="<?php echo $aboutImg5Alt; ?>">
                </div>
            </div>
        </section>
        
    </div><!--end container-->   
</main>
    
<?php

include 'includes/footer.php';

?>