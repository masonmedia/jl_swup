<?php 
    $title = "Jaxx Liberty | Third Party Agreements";
    $metaD = "Jaxx Liberty is a digital wallet that supports over 85 assets and is available on iOS, Android, Desktop, and for Google Chrome.";
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/includes/header.php";
    include_once($path);
?> 

<!--banner-->

    <div id="banner" role="banner" class="container-fluid p-0">
        <div class="row d-flex min-700-lg relative py-5 text-light">
           <img class="img-full absolute z-0 left-0 filter-dark up up-med" src="/assets/img/jaxx-terms.jpeg" alt="Jaxx Liberty changes, updates, and improvements.">
           <div class="offset-lg-2"></div>
            <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center ts p-5">
                <h1 class="h4 mt-3 ds-black zoom">Jaxx Liberty</h1>
                <h2 class="site-title ds-black font-weight-bold zoom zoom-med">Third Party Integrations & Contractors</h2>
                <a href="#sec-1"><button class="p-btn orange bg-trans mb-1 border-0 p-0 zoom zoom-slow">Learn more <i class="fa fa-angle-right fa-btn orange"></i></button></a> 
            </div>
            <div class="offset-lg-2"></div>
        </div>
    </div>

<!--main body-->

<main>
    <div id="sec-1" class="container-fluid p-0 text-secondary">

        <!--intro-->
        
        <section>
            <div id="sec-4" class="row d-flex relative p-5 min-500 bg-white stagger-right">
                <div class="col-lg-12 d-flex flex-column justify-content-center align-items-start text-left p-3 right">
                    <h2 class="section-title w-100 border-bottom pb-4">Third Party Integrations & Contractors</h2>
                    <p class="pt-3"><span class="orange font-weight-bold">Jaxx Liberty</span> is a service built around minimizing personal information requirements. We build in privacy by design. We have no sign-up. We conduct no registration. Managing your digital assets requires no personal information. We're commited to safeguarding your privacy rights.</p>
                    <p>But <span class="orange font-weight-bold">Jaxx Liberty</span> also operates on the Internet, where we interoperate with third parties. While we never ask for your name or a log-in, we -- and the third-party data processors we contract with -- are exposed to persistent identifiers like Internet Protocol addresses.</p>
                    <p class="pb-4 border-bottom">We encrypt wherever we can. We build strong security and privacy requirements into our contracting process. But we also believe in transparency and accountability for our data flows. This page provides you with information about that data processor ecosystem both for the <span class="orange font-weight-bold">Jaxx Liberty</span> service, and for this website.</p>
                    <div class="table-responsive-sm py-4">
                        <table class="table table-striped table-bordered w-100">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Party (Jurisdiction)</th>
                                    <th scope="col">Functionality</th>
                                    <th scope="col">Data Exposed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3" class="font-weight-bold">1. Jaxx integrations</td>
                                </tr>
                                <tr>
                                    <td>ShapeShift AG (Switzerland)</td>
                                    <td>Application transferring digital assets between coin and token types.</td>
                                    <td>IP address; public blockchain addresses; transaction information.</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="font-weight-bold">2. User communications</td>
                                </tr>
                                <tr>
                                    <td>Zendesk Inc. (United States)</td>
                                    <td>Track, prioritize, and solve customer support tickets.</td>
                                    <td>Optionally, and as presented, name and email address: they're not tied to your Jaxx Liberty instance. Ticket information (free text).</td>
                                </tr>
                                <tr>
                                    <td>SendGrid Inc. (United States)</td>
                                    <td>Store and send emails to myJaxx users.</td>
                                    <td>myJaxx display name; email address as presented; IP address in use at time of subscription.</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="font-weight-bold">3. Cloud platform</td>
                                </tr>
                                <tr>
                                    <td>Amazon Web Services Inc. (United States).</td>
                                    <td>Cloud hosting for the Jaxx service.</td>
                                    <td>Jaxx data flows (always encrypted).</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="font-weight-bold">4. Web site</td>
                                </tr>
                                <tr>
                                    <td>Cloudflare Inc. (United States)</td>
                                    <td><a href="https://en.wikipedia.org/wiki/HTTP_cookie" class="orange font-weight-bold" target="_blank">Pseudonymous cookie</a> for Web security.</td>
                                    <td>Browsing activity.</td>
                                </tr>
                                <tr>
                                    <td>Google Inc. (United States)</td>
                                    <td><a href="https://en.wikipedia.org/wiki/HTTP_cookie" class="font-weight-bold orange" target="_blank">Pseudonymous cookies</a> for Web analytics.</td>
                                    <td>Browsing habits by pseudonymous User ID.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--end table-->
                </div>
            </div>
        </section>

    </div><!--end main container-->
</main>

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/footer.php";
   include_once($path);
?>