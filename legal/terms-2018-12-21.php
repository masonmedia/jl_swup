 <?php 
    $title = "Jaxx Liberty | Terms of Service";
    $metaD = "Jaxx Liberty is a digital wallet that supports over 85 assets and is available on iOS, Android, Desktop, and for Google Chrome.";
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/includes/header.php";
    include_once($path);
?>          

    <!--banner-->

    <div role="banner" class="container-fluid p-0">
        <div class="row d-flex min-700-lg py-5 text-light relative">
           <img class="img-full absolute z-0 left-0 filter-dark up up-med lazy" data-src="/assets/img/jaxx-terms.jpeg" alt="Jaxx Liberty changes, updates, and improvements.">
           <div class="offset-lg-2"></div>
            <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center ts p-5">
                <h1 class="h4 mt-3 zoom">Jaxx Liberty Terms of Service</h1>
                <h2 class="site-title font-weight-bold zoom zoom-med">This is our agreement with you.</h2>
                <a href="#sec-1"><button class="p-btn text-light bg-trans mb-1 border-0 p-0 zoom zoom-slow">Learn more <i class="fa fa-angle-right fa-btn text-light"></i></button></a> 
            </div>
            <div class="offset-lg-2"></div>
        </div>
    </div>
    
    <main id="terms" role="main">
        <!--container-->
        <div class="container-fluid bg-light">
            <div class="row d-flex">
                <!--last updated-->
                <div id="intro" class="col-xl-12 d-flex flex-column justify-content-center align-items-center p-4 pt-5">
                    <div class="wrap d-flex flex-column justify-content-center align-items-start text-left w-100 border rounded bg-white-op bg-dots p-5">
                        <h2 class="section-title x-bold border-bottom pb-3">Last updated</h2>
                        <!--1 basics-->
                        <h5 class="font-weight-bold font-italic pt-2">December 21, 2018 [Expired]</h5>
                    </div>
                </div>
                <!--table of contents-->
                <div id="contents" class="col-xl-12 d-flex flex-column justify-content-center align-items-center min-50 rounded rounded px-4 pb-4 pt-0">
                    <div class="wrap d-flex flex-column justify-content-center align-items-start text-left n w-100 h-100 border rounded bg-white bg-dots p-5 shadow">
                        <h2 class="section-title x-bold py-3">Table of Contents</h2>
                        <h5 class="mb-0 font-weight-bold py-2"><a href="#basics">1. Background</a></h5>
                        <ul class="list-unstyled">
                            <li class="py-2 ml-2"><a href="#basics">1.1 What</a></li>
                            <li class="py-2 ml-2"><a href="#b-2">1.2 How</a></li>
                            <li class="py-2 ml-2"><a href="#b-3">1.3 Who</a></li>
                        </ul>
                        <h5 class="mb-0 font-weight-bold py-2"><a href="#privacy">2. Privacy</a></h5>
                        <ul class="list-unstyled">
                            <li class="py-2 ml-2"><a href="#privacy">2.1 Collection</a></li>
                            <li class="py-2 ml-2"><a href="#p-1">2.2 Retention</a></li>
                            <li class="py-2 ml-2"><a href="#p-2">2.3 Identifiers</a></li>
                            <li class="py-2 ml-2"><a href="#p-3">2.4 Permissions</a></li>
                        </ul>
                        <h5 class="mb-0 font-weight-bold py-2"><a href="#obligations">3. Obligations</a></h5>
                        <ul class="list-unstyled">
                            <li class="py-2 ml-2"><a href="#ob-1">3.1 Take responsibility</a></li>
                            <li class="py-2 ml-2"><a href="#ob-2">3.2 Act prudently</a></li>
                            <li class="py-2 ml-2"><a href="#ob-3">3.3 Play nicely</a></li>
                            <li class="py-2 ml-2"><a href="#ob-4">3.4 Respect others’ work</a></li>
                        </ul>
                        <h5 class="mb-0 font-weight-bold py-2"><a href="#constraints">4. Constraints</a></h5>
                        <ul class="list-unstyled">
                            <li class="py-2 ml-2"><a href="#c-1">4.1 No guarantees</a></li>
                            <li class="py-2 ml-2"><a href="#c-2">4.2 Moving parts</a></li>
                            <li class="py-2 ml-2"><a href="#c-3">4.3 Blockchain interaction</a></li>
                        </ul>
                        <h5 class="mb-0 font-weight-bold py-2"><a href="#i-1">5. Interpretation</a></h5>
                        <ul class="list-unstyled">
                            <li class="py-2 ml-2"><a href="#i-1">5.1 Enforcing selectively</a></li>
                            <li class="py-2 ml-2"><a href="#i-2">5.2 Dispute resolution</a></li>
                            <li class="py-2 ml-2"><a href="#i-3">5.3 Nailing down our agreement</a></li>
                            <li class="py-2 ml-2">5.4 Third parties</li>
                        </ul>
                    </div>
                    <div id="basics"></div>
                </div>
                <!--col 1-->
                <div class="col-xl-12 d-flex flex-column justify-content-center align-items-center min-50 p-4">
                    <div class="wrap d-flex flex-column justify-content-center align-items-start text-left w-100 h-100 border rounded bg-white bg-dots p-5">
                        <h2 class="section-title x-bold pb-3">1. Background</h2>
                        <!--1 basics-->
                        <!--1.1-->
                        <h4 class="text-secondary border-bottom w-100 mb-3 pb-3">(1.1 What - 1.2 How - 1.3 Who)</h4>
                        <h5 class="font-weight-bold text-secondary py-2 border-bottom">1.1. What</h5>
                        <p>Jaxx Liberty is non-custodial blockchain software for people. Its tools help users interact with third-party blockchain coins, tokens, and cryptocurrencies (together, <em>"digital assets"</em>), and organize information about them.</p>
                        <div id="b-2"></div>
                        <p>Software should help protect human rights, like privacy. Jaxx Liberty is designed to respect your privacy. We avoid collecting personal information. We have no access to your 12-word <a href="https://github.com/bitcoin/bips/blob/master/bip-0039.mediawiki" target="_blank"><span class="orange">mnemonic phrase</span></a> or the private keys derived from it. That means we can't help recover them if lost, so install your mnemonic phrase on a second device. At the very least, write it down.</p>
                        <!--1.2-->
                        <h5 class="font-weight-bold text-secondary py-2 border-bottom">1.2. How</h5>
                        <p>You can use Jaxx Liberty software, services, and support at no charge, as long as you abide by these terms. You're free to terminate the agreement by stopping to use Jaxx Liberty; we're free to stop providing it.</p>
                        <div id="b-3"></div>
                        <p>Our agreement doesn't apply to third-party information, including the news headlines Jaxx Liberty integrates, market rates and data we include, and external services to which we help you connect. Nor does this agreement cover your relationship with the digital assets with which Jaxx Liberty lets you interact -- but which Decentral neither created nor can influence. Third parties apply their own terms and policies. Review them.</p>
                        <!--1.3-->
                        <h5 class="font-weight-bold text-secondary py-2 border-bottom">1.3. Who</h5>
                        <p>We're Decentral Inc. (decentral.ca), a Canadian corporation (info@jaxx.io; P.O. Box P. O. Box 292, Station B, Toronto ON, M5T 2W2), which makes and maintains the Jaxx Liberty software, and can assign it only to someone who takes over the software or our company.</p>
                        <p>You're at least 18 years old, at least the age of majority where you reside, and control or own the device running Jaxx Liberty. No Canadian or U.S. governments has embargoed, designated as "terrorist supporting", or prohibited or restricted you or the place you live. You can't assign the agreement to anyone.</p>
                        <p>This agreement is between you and us: it binds no one else. The app store or other download intermediary where you obtained Jaxx Liberty does have the right to enforce this agreement's terms as a third-party beneficiary. But no download intermediary has any responsibility for Jaxx Liberty -- not its content, not its maintenance or support, not product liability or consumer law or regulatory compliance, not intellectual property infringement.</p>
                        <h5 style="font-weight: bold; padding: 5px 0"><a href="#contents">Return to table of contents</a></h5>
                    </div><!--end wrap-->
                    <div id="privacy"></div>
                </div>
                <!--end col-->

                <!--col-->
                <div class="col-xl-12 d-flex flex-column justify-content-center align-items-center min-50 p-4">
                    <div class="wrap d-flex flex-column justify-content-center align-items-start text-left w-100 h-100 border rounded bg-white bg-dots p-5">
                        <h2 class="section-title x-bold pb-3">2. Privacy</h2>
                        <!--1 basics-->
                        <!--2.1-->
                        <h4 class="text-secondary border-bottom w-100 mb-3 pb-3">(2.1 Collection - 2.2 Retention - 2.3 Identifiers - 2.4 Permissions)</h4>
                        <h5 class="font-weight-bold text-secondary py-2 border-bottom">2.1. Collection</h5>
                        <p>The best way to respect your privacy is to avoid snooping. Our pro-privacy stance requires us to avoid collecting or exposing, "personal information": anything that could identify you, whether on its own or when combined with other information. Your mnemonic phrase is stored, and your private keys derived, on your device only. We can't access them. You can always take them elsewhere. You're never locked into Jaxx Liberty.</p>
                        <div id="p-1"></div>
                        <p>Jaxx Liberty does build in pseudonymous identifiers. Decentral is exposed to limited personal information from Jaxx Liberty users. But we: avoid retaining personal information we're exposed to; minimize the identifiers we have to generate; and will provide and erase any holdings on request: legal@jaxx.io.  We bind our staff and seek to bind <a href="https://jaxx.io/thirdparties-current.html"><span class="orange">every relevant contractor</span></a> to confidentiality agreements. We use only encrypted connections between our own servers, and insist on them with third-party servers.</p>
                        <!--1.2-->
                        <h5 class="font-weight-bold text-secondary py-2 border-bottom">2.2. Minimizing what we retain</h5>
                        <p>Using the Internet means <a href="https://panopticlick.eff.org/" target="_blank"><span class="orange">leaking personal information</span></a>. When your Jaxx Liberty establishes an encrypted connection to our <a href="https://aws.amazon.com/privacy/" target="_blank"><span class="orange">AWS-hosted</span></a> virtual servers, your Internet Protocol address, device type,  operating system language, and monthly-regenerated Client Pseudonym are logged.</p>
                        <p>We parse each log, increment relevant non-personal statistics counters -- some linked with Client Pseudonym -- and delete the log itself within 24 hours. But there are three circumstances where we're required to go beyond that:</p>
                        <div id="p-2"></div>
                        <ul>
                            <li><p>We're not able to offer Jaxx Liberty in every region, so we first check whether your IP address is associated with somewhere we can't offer service. It's an inexact science.</p></li>
                            <li><p>We're not allowed to relay transactions if they include blockchain addresses designated by lawful authorities, so we check each transaction against mandated blocklists.</p></li>
                            <li><p>We may have been legally compelled to preserve the log. Where we can, we'll say when.</p></li>
                        </ul>
                        <p>We don't provide the limited personal information we do have to anyone unless legally compelled and, to the extent  we're allowed and it's possible, we notify the affected parties. </p>
                        <!--2.3-->
                        <h5 class="font-weight-bold text-secondary py-2 border-bottom">2.3. Decoupled identifiers</h5>
                        <p>Jaxx Liberty has no accounts, because your mnemonic phrase and private keys are none of our business. But Jaxx Liberty does <em>(i)</em> generate a temporary Client Pseudonym for pseudonymous metrics collection; <em>(ii)</em> provide user support; and <em>(iii)</em> derive a persistent "Unity" blockchain address from your mnemonic, and allow you to pair it with an optional "MyJaxx" display name and email address.</p>
                        <ul>
                            <li><p>Client Pseudonym, a temporary identifier regenerated regularly with no carry-over, is used for security and metrics. For security, back-end access is limited to checksum-matching Client Pseudonyms. For metrics, a Client Pseudonym is matched with limited data points to develop unique-user aggregates across a period, then discarded.</p></li>

                            <li><p>User support is run separately from the Jaxx Liberty systems, therefore decoupled from Client Pseudonym, Unity address, and display name or email address. Providing personal information within user support -- like an email address -- exposes it to a <a href="https://jaxx.io/thirdparties-current.html"><span class="orange">third party bound contractually to respect your privacy</span></a>. If you reach out to our support teams on uncontracted social media platforms, they may respond on the same platform -- to which you will therefore have exposed the information you've chosen to disclose.</p></li>
                            <div id="p-3"></div>
                            <li><p>Unity address, a persistent pseudonym, is decoupled from your Internet Protocol address, blockchain activity, and device information. We can't deduce your mnemonic phrase from it, don't have information about whose it is, and don't expose it outside our systems -- but hope to use it down the road for in-app gamification.</p></li>

                            <li><p>Your display name and email address -- if you opt in -- gives us a way to provide you with updates and interact with your display name. You can always withdraw consent for email subscriptions by clicking on the link at the bottom of the email.</p></li>
                        </ul>
                        <!--2.4-->
                        <h5 class="font-weight-bold text-secondary py-2 border-bottom">2.4. App permissions</h5>
                        <p>Jaxx Liberty's mobile editions seek camera permissions. This is to read a QR code, and store it on-device, in order to pair another Jaxx Liberty instance or scan a blockchain address. Jaxx Liberty uses those permissions carefully: it uses the camera only for those purposes and only at your prompting, and never sends anything off-device.</p>
                        <h5 style="font-weight: bold; padding: 5px 0"><a href="#contents">Return to table of contents</a></h5>
                    </div><!--end wrap-->
                    <div id="obligations"></div>
                </div>
                <!--end col-->

                <!--col-->
                <div id="ob-1" class="col-xl-12 d-flex flex-column justify-content-center align-items-center min-50 p-4">
                    <div class="wrap d-flex flex-column justify-content-center align-items-start text-left w-100 h-100 border rounded bg-white bg-dots p-5">
                        <h2 class="section-title x-bold pb-3">3. Obligations</h2>
                        <!--<h5 class="font-weight-bold border-bottom pb-3">2. OBLIGATIONS</h5>-->
                        <!--2.1-->
                        <h4 class="text-secondary border-bottom w-100 mb-3 pb-3">(3.1 Take responsibility - 3.2 Act prudently - 3.3 Play nicely - 3.4 Respect others' work)</h4>
                        <h5 class="font-weight-bold text-secondary py-2 border-bottom">3.1. Take Responsibility</h5>
                        <p>We can provide Jaxx Liberty because you take responsibility for what you do with it. So the following are fundamental to our agreement:</p>
                        <p>a) We can't recover your mnemonic phrase. We have no access to it. If you don't install it on a second device, or keep a physical copy in a safe place, you may lose access to your digital assets forever. Don't do that.</p>
                        <p>b) Decentral isn't liable for any loss or damage that result from providing you with Jaxx Liberty software, services, and support. Nor shall our liability to you exceed, under any circumstances, the greater of the Canadian dollar value of 0.01 bitcoins, and C$50.</p>
                        <div id="ob-2"></div>
                        <p>c) You indemnify Decentral against any claims, damages, losses, and legal fees incurred due to your use of Jaxx Liberty, including support services. If someone sues us about what you do, you pay.</p>
                        <!--2.2-->
                        <h5 class="font-weight-bold text-secondary py-2 border-bottom">3.2. Act Prudently</h5>
                        <p>Decentral doesn't create, and has no control over, digital assets you interact with through Jaxx Liberty -- so it's up to you to interact with them prudently by doing these three things.</p>
                        <p>a) Learn the basics about digital assets you're considering interacting with. Search for them online. Vet them carefully. Find someone who knows more; ask them.</p>
                        <p>b) Your mnemonic phrase, private keys, and passwords live only on-device. Losing them is no harder than dropping your phone in a lake, experiencing a bad software update, or other events of modern digital life -- and networks, devices, and software environments are rife with viruses and malware. Back up to a safe, private place, or install on another device. Secure them. <a href="https://securityplanner.org" target="_blank"><span class="orange">Learn about</span></a> improving your online safety.</p>
                        <div id="ob-3"></div>
                        <p>c) Even if you delete Jaxx Liberty software from a device, data may remain behind -- like on a shared device or public computer. Take care where you install Jaxx Liberty, and extra care to eradicate every trace when you delete it.</p>
                        <!--2.3-->
                        <h5 class="font-weight-bold text-secondary py-2 border-bottom">3.3. Play Nicely</h5>
                        <p>Decentral has a strong commitment to user autonomy. But there are some things either Jaxx isn't designed to support, or Decentral isn't allowed to. You agree not to:</p>
                        <p>a) use Jaxx Liberty in a way likely to interfere with other users or servers, such as excessive API calls, network spam, or rewards faucets; or</p>
                        <div id="ob-4"></div>
                        <p>b) use Jaxx Liberty in a manner contrary to laws -- of Canada, and where you live.</p>
                        <p>Do ensure your transactions with a digital asset conform to its rules, especially with smart contract systems.</p>
                        <!--4.4-->
                        <h5 class="font-weight-bold text-secondary py-2 border-bottom">4.4. Respect Others’ Work</h5>
                        <p>Jaxx Liberty is made up of intellectual property held by Decentral, like copyright in Jaxx Liberty's code and in our text, images, and sounds; and trademarks in the distinctive words, symbols, and designs that identify Decentral and Jaxx.</p>
                        <p>We licence Jaxx Liberty to you, royalty-free, on a non-exclusive, worldwide, but personal and non-transferable basis. We don't licence the right to re-distribute Jaxx Liberty, modify its code, or use its content or Decentral's trademarks in other software or projects. Those require Decentral's written permission first. </p>
                        <p>You may, yourself, choose to give us feedback. We'll assume you've allowed us to use and keep your feedback, incorporate it, and hold a non-exclusive perpetual licence in it without royalty or obligation.</p>
                        <p>Third parties provide information, software libraries, and services that Jaxx Liberty uses or is partly built on. We assert no copyright in the RSS feeds we pass through, market data we parse, or third-party software libraries. Please refer to and respect relevant third-party licenses.</p>
                        <h5 style="font-weight: bold; padding: 5px 0"><a href="#contents">Return to table of contents</a></h5>
                    </div><!--end wrap-->
                    <div id="constraints"></div>
                </div>
                <!--end col-->
                <!--col 3-->
                <div id="c-1" class="col-xl-12 d-flex flex-column justify-content-center align-items-center min-50 p-4">
                    <div class="wrap d-flex flex-column justify-content-center align-items-start text-left w-100 h-100 border rounded bg-white bg-dots p-5">
                        <h2 class="section-title x-bold pb-3">4. Constraints</h2>
                        <!--4.1-->
                        <h4 class="text-secondary border-bottom w-100 mb-3 pb-3">(4.1 No guarantees - 4.2 Moving parts - 4.3 Blockchain interaction)</h4>
                        <h5 class="font-weight-bold text-secondary py-2 border-bottom">4.1. No Guarantees</h5>
                        <p id="c-2">Jaxx Liberty software, services, and support are provided at no cost, as is and, to the greatest extent laws allow, without any warranty at all. We don't warrant Jaxx Liberty is of merchantable quality or fit for your purpose, even if you've notified us of the purpose. Nor can we warrant that Jaxx Liberty is bug-free: bugs are inevitable. We work hard to rank and squash them.</p>
                        <!--4.2-->
                        <h5 class="font-weight-bold text-secondary py-2 border-bottom">4.2. Moving Parts</h5>
                        <p>Using software to interact with digital assets is risky. It depends on a complex chain of moving parts working together, and working properly.</p>
                        <p>For instance, your connectivity, hardware, cloud or local software, or operating system (mobile or desktop) may fail or prove incompatible with each other, or with a version of Jaxx Liberty. Your backup software may upload your private files or information to third-party services. Malware, viruses, or other malicious software on your device may interfere with your Jaxx Liberty install. Communication delays may creep in between your Jaxx Liberty and a node or relay service for a digital asset. </p>
                        <div id="c-3"></div>
                        <p>We've described basic steps we expect you to take to act prudently, and set out the extent of our liability and your indemnity to us. For the same reasons, we can't be liable to you for, and disclaim the risks involved in, moving parts like those listed here. It's provided on a best-efforts basis. You get what you pay for.</p>
                        <!--4.3-->
                        <h5 class="font-weight-bold text-secondary py-2 border-bottom">4.3. Blockchain Interaction</h5>
                        <p>Jaxx Liberty provides functions for sending digital assets' transfer instructions. Jaxx Liberty doesn't control the blockchains to which the instructions are sent: the only authentic transaction record is the blockchain.</p>
                        <p>We can't guarantee transfer instructions will be acted on and your transactions stored on a blockchain -- nor that, once stored, they remain there. Many blockchain networks require transaction fees, like mining fees, which if set too low or high may result in your incurring losses. We can't be responsible for these.</p>
                        <p>Jaxx Liberty's market information reflects a point in time for underlying data fluctuating constantly. Sending transfer instructions involves a longer period: the data values reflected in your transactions will differ accordingly. We're not responsible for that difference.</p>
                        <h5 style="font-weight: bold; padding: 5px 0"><a href="#contents">Return to table of contents</a></h5>
                    </div><!--end wrap-->
                </div>
                <!--end col-->

                <!--col 5-->
                <div id="i-1" class="col-xl-12 col-md-12 d-flex flex-column justify-content-center align-items-center p-4 pb-5 mb-4">
                    <div class="wrap d-flex flex-column justify-content-center align-items-start border rounded w-100 h-100 border rounded bg-white bg-dots p-5">
                        <h2 class="section-title x-bold pb-3">5. Interpretation</h2>
                        <!--5.1-->
                        <h4 class="text-secondary border-bottom w-100 mb-3 pb-3">(5.1 Enforcing selectively - 5.2 Dispute resolution - 5.3 Nailing down our agreement)</h4>
                        <h5 id="i-2" class="font-weight-bold text-secondary py-2 border-bottom">5.1. Enforcing Selectively</h5>
                        <p>Failing to assert a right under this agreement doesn't waive the right to assert another right, or the same right, next time.</p>
                        <!--5.2-->
                        <h5 class="font-weight-bold text-secondary py-2 border-bottom">5.2. Dispute resolution</h5>
                        <p id="i-3">Other than conflicts of law principles, this agreement is governed by the laws applicable in Toronto, Ontario, Canada, to whose courts we both agree to submit disputes we haven't been able to resolve between us. The Convention for the International Sale of Goods doesn't apply.</p>
                        <!--5.3-->
                        <h5 class="font-weight-bold text-secondary py-2 border-bottom">5.3. Nailing Down our Agreement</h5>
                        <p id="i-4">This is the whole agreement between you and Decentral. We'll push any updates to Jaxx Liberty, identify them in release notes, show the change date, and archive the previous version online. Unless the change is immaterial or to your clear advantage, we'll propose it 30 days in advance, so you have time to reject the change by ceasing use.</p>
                        <p>This agreement supersedes any other agreement or representation, however communicated, and can be amended only if both parties agree, in writing, with copy to <a href="mailto:legal@decentral.ca"><span class="orange">legal@decentral.ca</span></a>. Where we provide this agreement in more than one language and they don't precisely agree, the English-language version takes precedent. Les parties aux présentes conviennent que cette entente soit rédigée en anglais.</p>
                        <h5 class="font-weight-bold"><a href="#contents">Return to table of contents</a></h5>
                    </div>
                    <!--end wrap-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!-- end container --> 
    </main>
       
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/footer.php";
   include_once($path);
?>