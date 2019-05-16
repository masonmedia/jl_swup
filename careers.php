<?php
$title = "Jaxx Liberty | Careers";
include 'includes/header.php';
?>

<!--banner-->

<div id="banner" role="banner" class="container-fluid p-0">
    <div class="row d-flex min-700-lg bg--careers-banner opacity py-5 mt-5 text-light relative">
       <div class="offset-lg-2"></div>
        <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center ts p-5">
            <h1 class="site-title font-weight-bold ds-black zoom zoom-med">Work with us.</h1>
            <a href="#sec-1"><button class="p-btn text-light ds-black bg-trans mb-1 border-0 p-0 zoom zoom-slow">See open positions <i class="fa fa-angle-right fa-btn text-light"></i></button></a> 
        </div>
        <div class="offset-lg-2"></div>
    </div>
</div>

<!--main body-->

<main>
    <div class="container-fluid p-0 text-secondary">

        <!--intro-->
        
        <section>
            <div class="row d-flex min-500 relative bg-white border-bottom">
                <div class="col-lg-6 min-300 d-flex flex-column justify-content-center align-items-start text-left p-4 right o-12">
                <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/decentral-hacker-expo.jpg" alt="Join the team.">
                </div>
                <div id="careersIntroList" class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary p-5 right right-med">
                    <h2 class="section-title text-dark mb-0">Why work at Decentral?</h2>
                    <p class="p-big py-3 m-0">At Decentral, we are building bleeding-edge, pro-privacy technologies at the core of the next Internet. A leading blockchain pioneer of Canada, we are the proud birthplace of Ethereum and, now, steward software at the interface of the cryptocurrency and distributed ledger revolution. To see if we’d make a good fit, send us your resume at <a href="mailto:careers@decentral.ca?subject=Applying for a Position" class="orange text-bold">maggie@decentral.ca</a>.</p>
                </div>
            </div>
        </section>

        <section>
            <div id="careersIntroList" class="row d-flex min-500 relative bg-white border-bottom">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-secondary p-5 right right-med">
                    <h3 class="section-title text-dark mb-3">What we offer</h3>
                    <ul class="list-unstyled font-weight-bold p-0 pl-4 border-left">
                        <li class="pb-1"><i class="fa fa-code p-0"></i> <code class="text-success">Work with the co-founder of Ethereum on cutting-edge decentralized technology</code></li>
                        <li class="pb-1"><i class="fa fa-code p-0"></i> <code class="text-success">Help build an app that 1,000,000+ have used around the world</code></li>
                        <li class="pb-1"><i class="fa fa-code p-0"></i> <code class="text-success">Hosted 100+ community events with an ecosystem of 200+ strategic partners</code></li>
                        <li class="pb-1"><i class="fa fa-code p-0"></i> <code class="text-success">Cool techy office in downtown Toronto</code></li>
                        <li class="pb-1"><i class="fa fa-code p-0"></i> <code class="text-success">Competitive salary</code></li>
                        <li class="pb-1"><i class="fa fa-code p-0"></i> <code class="text-success">Work life balance, seriously</code></li>
                        <li class="pb-1"><i class="fa fa-code p-0"></i> <code class="text-success">Fun culture! (Friday games, ping pong, present what you’ve worked on to the team)</code></li>
                    </ul>
                </div>
                <div class="col-lg-6 min-300 d-flex flex-column justify-content-center align-items-start text-left right o-12">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-android-tablet-pc.jpg" alt="Join the team.">
                </div>
            </div>
            <div id="sec-1"></div>
        </section>
        
        <!--position 1-->
        
        <section>
            <div class="row d-flex min-500 bg-white">
                <div class="col-lg-12 d-flex flex-column justify-content-center align-items-start text-left text-secondary p-5 right right-med">
                    <h3 class="section-title text-dark mb-0">Full Stack Developer</h3>
                    <p class="p-big py-3">Our flagship product is Jaxx Liberty, a multi-asset wallet software as a service that packages live market data with user portfolios, news, and third-party fintech integration, on top of high-performance indexing and data summarization in a cloud back-end.  Working closely with our Chief Technology Officer, help push the Jaxx Liberty architecture even further by diversifying our product line into enterprise and financial markets. Find out more below.</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-orange" data-toggle="modal" data-target="#careersModal">
                    Learn more
                    </button>
                </div>
            </div>
        </section>

    </div><!--end main container-->
</main>

<!-- Modal -->
<div class="modal fade" id="careersModal" tabindex="-1" role="dialog" aria-labelledby="careersModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h4 class="modal-title code text-secondary font-weight-bold" id="careersModalTitle">// Full Stack Developer</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">X</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="careers" class="card-body code border p-3">
            <ul class="list-group list-group-flush">
                <h4 class="list-group-item font-weight-bold orange pb-4"> Responsibilities:</h4>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Analyze business and software requirements, propose and implement solutions.</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Develop of front-end Web applications.</li> 
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Design and develop APIs.</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Create servers and databases.</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Develop unit tests and actively participate in pull request peer review.</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Troubleshoot bug escalations from the Software Quality Assurance Manager.</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Meet with stakeholders to document requirements and suggest improvements.</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Stay abreast of developments in Web applications, programming languages and the cryptocurrency and blockchain communities.</li>
            </ul>
            <ul class="list-group list-group-flush">
                <h4 class="list-group-item font-weight-bold border-top-0 orange py-4">Requirements:</h4>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Excellent written and oral communication skills and documentation habits.</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Strong programming skills in Angular, TypeScript, HTML5, CSS, SASS/LESS and GULP.</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Highly experienced with back-end programming languages and environments like JavaScript, Python and Node.js.</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Experience writing applications that consume, and backends that support, REST APIs (working with WebSockets is a plus).</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Experience working with graphic designers and converting designs to visual elements.</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Experience working with code versioning tools such as Git (Github/Bitbucket).</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Strong troubleshooting skills.</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Good understanding of agile software development life cycle.</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Ability to maintain code integrity and organization.</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Understanding and implementation of security/data protection.</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Reliable personality, attention to detail and great team player.</li>
            </ul>
            <ul class="list-group list-group-flush">
                <h4 class="list-group-item font-weight-bold border-top-0 orange py-4">Nice-to-have:</h4>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Exposure to the Go Programming Language.</li> 
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Experience using Cordova or Electron.</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Knowledge of cryptocurrency ecosystems.</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Knowledge of AWS and cloud infrastructure tools such as Jenkins, Docker and Terraform.</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Strong research skills.</li>
            </ul>
            <ul class="list-group list-group-flush mt-3">
                <h4 class="list-group-item font-weight-bold border-top-0 orange py-4">What We Offer:</h4>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Making it big - Chance to work with visionaries and world-changing technologies that empower millions.</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Learn-by-doing opportunities on state-of-the-art blockchain, decentralization and fintech.</li> 
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Tons of opportunities to innovate.</li> 
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Competitive compensation package including group benefits.</li> 
                <li class="list-group-item"><i class="fa fa-code p-0"></i> A collaborative, open, respectful work environment with a strong “show up on time, leave on time” culture.</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Free Friday team lunch; free coffee; free Snacks, arcade games, foosball, and the opportunity to defeat one of Ethereum’s founders at ping-pong.</li>
                <li class="list-group-item"><i class="fa fa-code p-0"></i> Decentral Inc. is an equal opportunity employer.</li>
            </ul>
            <ul class="list-group list-group-flush">
                <h4 class="list-group-item font-weight-bold border-top-0 orange py-4">Apply:</h4>
                <a href="mailto:maggie@decentral.ca">
                    <button class="btn btn-orange mt-4 mb-3" type="button">maggie@decentral.ca</button>
                </a>
            </ul>
        </div>
        <div class="modal-footer border-bottom-0">
        <button type="button" class="btn btn-orange" data-dismiss="modal">Close</button>
      </div>
    </div><!--end modal body-->
    </div><!--modal content-->
    <!--modal dioalog--></div>
</div><!--modal-->

<?php

include 'includes/footer.php';

?>
