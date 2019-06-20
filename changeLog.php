<?php
$title = "Jaxx Liberty | Changelog";
include 'includes/header.php';
include 'copy.php';
include 'images.php';
?>

<!--banner-->

    <div id="banner" role="banner" class="container-fluid p-0">
        <div class="row d-flex min-700-lg relative py-5 text-light">
           <img class="img-full absolute z-0 left-0 filter-dark up up-med" 
           src="<?php echo $changelogBannerImg; ?>"
           alt="<?php echo $changelogBannerImgAlt; ?>">
            <div class="offset-lg-2"></div>
            <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center ts p-5">
                <h1 class="h4 mt-3 ds-black zoom">Jaxx Liberty Change Log</h1>
                <h2 class="site-title font-weight-bold ds-black zoom zoom-med">Jaxx Liberty updates and improvements.</h2>
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
            <div class="row d-flex relative p-5 min-500 bg-white stagger-right">
                <div class="col-lg-12 d-flex flex-column justify-content-center align-items-start text-left p-3 right">
                        <div class="wrap border-bottom w-100 pb-3">
                            <h1 class="section-title font-weight-bold pb-2 m-0">Change Log</h1>
                        </div>
                        <!--content-->

                        <h3 class="orange border-bottom w-100 py-3 m-0">Jaxx Liberty 2.2.2:</h3>
                        <p class="font-weight-light border-bottom py-3 mb-2">[06/20/19]</p>
                        <h4 class="pt-2">Fixed:</h4>
                        <ul>
                            <li>Address generation failure when updating new wallets: users will no longer receive the TX-001 error when updating new wallets.</li>
                        </ul>

                        <!--  -->
                        <p class="font-weight-light border-bottom py-3 mb-2">[04/29/19]</p>
                        <h4 class="pt-2">Features:</h4>
                        <ul>
                            <li>Paper wallet import.</li>
                            <li>In-app notifications: upgrade prompt when new version is available.</li>
                            <li>Added animation for widget title on the home screen.</li>
                            <li>Keyboard shortcuts to minimize and hide app on macOS desktop edition.</li>
                        </ul>
                        <h4 class="pt-2">Fixed:</h4>
                        <ul>
                            <li>Refactored wallet core engine to make pair/restore workflow more fault-tolerant.</li>
                            <li>Refactored portfolio module and implemented caching for faster and smoother loading.</li>
                            <li>ETC consolidation bug.</li>
                            <li>Ticker display errors in token send page.</li>
                            <li>MyJaxx bug preventing resending confirmation email upon expiry. </li>
                            <li>Pricing inconsistencies between Markets module and Wallet info page.</li>
                            <li>False positive for offline banner notification.</li>
                            <li>Fault tolerance issues during offline events.</li>
                            <li>Crypto-to-fiat conversion calculation and fault tolerance during fiat reference data unavailability.</li>
                            <li>Accuracy gaps when wallet modules fetch balance and unconfirmed transactions.</li>
                            <li>“Copy all” button in private keys not formatting data in CSV format. 
                            <li>Wallet initialization failure from portfolio module.</li>
                            <li>UI touch up in backup-wallet page.</li>
                            <li>Removed alert to back wallet up after pair/restore.</li>
                            <li>Coin selection display text issue in block explorer module.</li>
                            <li>Missing asset for LOOM in Block Explorer drop-down menu.</li>
                            <li>Added padding to Block Explorer transaction list to avoid overflow for large values.</li>
                            <li>UI halting issue during workflow for creating new wallet.</li>
                            <li>Scrolling behaviour inconsistencies in Global Settings menu.</li>
                            <li>Text overflow issue in pair/restore orange screen for smaller viewports.</li>
                            <li>Loading icon and text alignment issue in widget loading animation.</li>
                            <li>Logo and text overlap issue in Markets module.</li>
                            <li>Daily percentage change formatting issue in Portfolio.</li>
                            <li>Missing balance for ETH, ETC, and RSK in display private keys dialogue.</li>
                            <li>Non-removal of promo banner call to action after action has been performed from Global Settings.</li>
                            <li>Issue where, selecting “max” does not activate button to advance to the next screen when connected to ShapeShift.</li>
                            <li>Missing asset ticker next to asset balance in Block Explorer lookup page and wallet list page.</li>
                            <li>Lack of truncation and text overflow issue for large fiat values in home-screen Wallet widget.</li>
                            <li>Set input type to numbers-only in send pages, to ensure invocation only of numeric keyboard.</li>
                            <li>Issue where pressing return key was clearing input field in pair/restore input form.</li>
                        </ul>

                        <!---->

                        <h3 class="orange border-bottom w-100 py-3 m-0">Jaxx Liberty 2.1.3:</h3>
                        <p class="font-weight-light border-bottom py-3 mb-2">[02/21/19]</p>
                        <h4 class="pt-2">Features:</h4>
                        <ul>
                            <li>Added BIP21 URI support for ZCash.</li>
                            <li>New Intellectual Property section in Global Settings menu.</li>
                            <li>Implemented user-side summarized data collection, with Terms of Service update (sections 3.2, 3.3) to document changes in personal information collection.</li>
                        </ul>
                        <h4 class="pt-2">Fixed:</h4>
                        <ul>
                            <li>Missing receive address issue for new wallet.</li>
                            <li>Pair/restore stalled after initializing first 10 coins when assets resulted from high number of small transactions (i.e. mining rewards).</li>
                            <li>Fiat price update failures.</li>
                            <li>Ability to set password if TouchID is removed via Settings.</li>
                            <li>SegWit address validation for DOGE and BTX.</li>
                            <li>Erroneous zero-balance display for new tokens after post-pair/restore initialization.</li>
                            <li>Unexpected “delete” key behaviour in input boxes.</li>
                            <li>Missing BSV logo in Markets module.</li>
                            <li>Potential reverse tabnabbing vulnerability--added security fix.</li>
                            <li>Missing information for certain coins in Wallets info tab.</li>
                        </ul>

                        <!---->

                        <h3 class="orange border-bottom w-100 py-3 m-0">Jaxx Liberty 2.1.2:</h3>
                        <p class="font-weight-light border-bottom py-3 mb-2">[01/17/19]</p>
                        <h4 class="pt-2">Fixed:</h4>
                        <ul>
                            <li>Incompatibility as between Shapeshift sign-in and Google OAuth.</li>
                            <li>Out-of-date error code on transaction failure.</li>
                            <li>Fiat reference price look-up improvement.</li>
                            <li>Log-out behaviour fix so that logging out of Jaxx in Chrome also disconnects third-party authorization.</li>
                        </ul>

                        <!---->

                        <h3 class="orange border-bottom w-100 py-3 m-0">Jaxx Liberty 2.1.1:</h3>
                        <p class="font-weight-light border-bottom py-3 mb-2">[12/21/18]</p>
                        <h4 class="pt-2">Features:</h4>
                        <ul>
                            <li>Updated Terms of Service: reorganization and renaming to foreground the most-requested topics; app store minimum EULA requirements; updated personal information collection, exposure, and retention descriptions; Jaxx Liberty naming convention.</li>
                        </ul>

                        <!---->

                        <h3 class="orange border-bottom w-100 py-3 m-0">Jaxx Liberty 2.1.0:</h3>
                        <p class="font-weight-light border-bottom py-3 mb-2">[12/07/18]</p>
                        <h4 class="pt-2">Features:</h4>
                        <ul>  
                            <li>Biometric Security: Use your phone’s native biometric security alongside Jaxx Liberty security password.</li>
                            <li>Sleep Mode: Hibernate feature after five minutes of inactivity: saves battery and bandwidth.</li>
                            <li>Password Strength Checker: Real-time visual feedback on password strength during selection.</li>
                            <li>Critical Alerts: Clearer notice before sensitive use cases like viewing private keys, setting password, etc.</li>
                            <li>Unconfirmed Balance and Transactions: optimization to check the last 20 addresses instead of just the current address, increasing responsiveness to incoming and past transactions.</li>
                            <li>Transaction History: Now displaying clickable link with transaction ID when expanding transactions in respective wallets. Also added better visibility for “Sent to self” and Pending transactions.</li>
                            <li>Market Module: Highlight digital assets listed in Jaxx Liberty; add quick-access link to each wallet.</li>
                            <li>Added rotating promo banner.</li>
                            <li>Updated Groestlcoin logo and added support for Groestlcoin URI.</li>
                        </ul>
                        <h4 class="pt-2">Fixed:</h4>
                        <ul class="pb-3 mb-0">
                            <li>Missing fiat value for certain tokens (eg: ZRX, OMX, BAT, etc).</li>
                            <li>Blue Screen of Death when navigating to Global Setting while offline.</li>
                            <li>Truncated receive address in confirmation screen.</li>
                            <li>Missing arrow for token “Sent to self” transactions in Block Explorer.</li>
                            <li>Portfolio value failure to update after new transaction.</li>
                            <li>Character encoding issue in the News module.</li>
                            <li>Zero-value display in Market Cap and 24h volume.</li>
                            <li>403 issue with Google OAuth 2.0 login for ShapeShift.</li>
                            <li>Bug where portfolio was showing infinite percent gain for “1 y” and “all”.</li>
                            <li>Animation absent from first module in home page following pair/restore.</li>
                            <li>Zero fiat value bug for ICN, DOGE and UCASH in Wallet Info page.</li>
                            <li>Crypto value substituted for fiat value for Block Explorer Transaction Hash lookup.</li>
                            <li>Portfolio failure after initializing BTX, DGB and GRS.</li>
                            <li>Non-chronological transactions ordering in Block Explorer address lookup.</li>
                            <li>Market data still in USD but native currency changed to something other than USD.</li>
                            <li>Multiple instance of the same wallets displayed in Wallet list.</li>
                            <li>Zero balance on sending out less than maximum number of tokens.</li>
                            <li>Display name filtering to allow letters, numbers and special characters for myJAXX.</li>
                            <li>Chrome extension icon title (to “Jaxx Liberty”, was “Jaxx Liberty Platform”).</li>
                        </ul>

                        <!---->

                        <h3 class="orange border-bottom w-100 py-3 m-0">Jaxx Liberty 2.0.6:</h3>
                        <p class="font-weight-light border-bottom py-3 mb-2">[11/08/18]</p>
                        <h4 class="pt-2">Features:</h4>
                        <ul>
                            <li>Third-party authorization: ShapeShift 2.0 (OAuth and KYC/AML integration).</li>
                            <li>Customize Interface option for mobile viewports.</li>
                        </ul>
                        <h4 class="pt-2">Bug Fixes:</h4>
                        <ul class="pb-3 mb-0">
                            <li>Missing insufficient gas error message.</li>
                            <li>Article description is missing for some articles.</li>
                            <li>Balance on home page for Wallets and Portfolio load infinite gains/loss.</li>
                            <li>Zero values for tokens with shiftCount shown in Block Explorer.</li>
                            <li>Back button on Block explorer is inactive.</li>
                            <li>Dead link on Transaction Hash link for coins in Block Explorer module.</li> 
                            <li>Other Block Explorer fixes: missing BTC logo for dropdown menu on homepage; negative values not trimmed well; no ERC20 token ticker at search bar; selecting dropdown changes app size and layout; send to self shown incorrectly as outgoing transactions; incorrect fiat balance on address lookup for altcoins.</li>
                            <li>Info icon distorted and requires padding on Wallets > Receive page in Chrome extension.</li>
                            <li>Scrolling disabled on all Chrome extension pages.</li>
                            <li>“Confirm” text not vertically aligned inside button on confirmation screen.</li>
                            <li>Create New Wallet: config file is not refreshing from server.</li>
                            <li>Backup Wallet success screen not vertically aligned, coin ticker cut off when balance has too many decimal places, draggable object invisible, enabling/disabling wallet doubles balance and coin list, all in desktop versions.</li>
                            <li>Desktop responsiveness issues.</li>
                            <li>myJaxx puzzle not resizable.</li>
                            <li>Portfolio widget text overlap.</li>
                            <li>Wallets module text overlap; Wallets module and myJaxx reduces in size when signed up for myJaxx.</li>
                            <li>Wallet Widget text overlap.</li>
                            <li>Empty red banner without any error message when transaction broadcast request times out on cloudflare.</li>
                            <li>ERC20 Wallet: Confirmation screen shows contract address as receiving address.</li>
                            <li>ETC red banner consolidation error.</li>
                            <li>Fiat currency shows default 0 values on pair restore wallet.</li>
                            <li>TokenCard fiat value missing.</li>
                            <li>Block explorer bottom line on the widget. It’s not aligned on Note 8.</li>
                            <li>Runtime error on Pair/Restore from Global Settings (stuck on 10/11).</li>
                            <li>Manage Wallets: # of Wallets enabled on Global Settings is wrong. </li>
                            <li>Manage Wallets: Enabling coin you searched brings it them to the top of the list after ;no search results if input value not lowercase.</li>
                            <li>Markets: Newer supported assets not always linked to Wallet > Info page; only second column scrollable (instead of the entire page).</li>
                            <li>Capacitive back button allows to go back to pair/restore page.</li>
                            <li>MyJaxx: with password enabled, info needs to be entered twice.</li>
                            <li>News: Missing description/summary/warning for some articles.</li>
                            <li>Pair/Restore wallet page is missing text “Scan QR Code”.</li>
                            <li>Portfolio: No Error message when Portfolio fails; Portfolio fails after initializing DGB,BTX and GRS; timestamp does not change after manual refresh.</li>
                            <li>Portfolio and MyJaxx shown scrolled down on Chrome.</li>
                            <li>Private Keys: Clicking “Copy” button before private keys finish loading gives a false positive; ETH “hide zero balances” failure.</li>
                            <li>Refresh icon is missing padding on the right.</li>
                            <li>Remove blue screen when pairing or restoring a wallet.</li>
                            <li>Send page: fiat value doesn’t change when it’s selected and overwritten; fiat value goes to default. amount after hitting “Cancel” on Confirmation page.</li>
                            <li>Various ShapeShift bug fixes: “Sign in again” link not working; DOGE Max shift value requires display improvements; Error TX-021 -  false negative on successful transaction; if ETH max is greater then spendable, max button does not fill input fields; incorrect token balance on exchange page; Min and Max unresponsive for some assets; minimum quantity only displayed after selecting another asset and re-selecting the first; no error message when balance is less then min or when amount entered is more than max; error TX-024 when selecting non ERC-20 assets; transaction broadcast even without Level 1 sign-on; TX-030 error instead of SS Integration page when not connected to ShapeShift.</li>
                            <li>Title UI: Desktop titles should read “Jaxx Liberty” instead of Liberty Platform.</li>
                            <li>Transactions don’t show for all coins because incorrect data structure is being passed to the transaction component.</li>
                            <li>Wallet: Coin balance displayed is more than fiat balance displayed; can’t send DCN.</li>
                            <li>When sending with Password enabled, fiat balance shown is zero after entering password.</li>
                            <li>TX history: Certain currency acronyms/abbreviations are added to prefix of sent values for certain tokens; Value Now is negative for many asset transactions.</li>
                            <li>Red snackbar “BigNumber Error” when sending SWC.</li>
                            <li>Transaction History cut off at the bottom of Chrome extension.</li>
                            <li>Customize Interface option not shown on Desktop version.</li>
                            <li>Balance not updating on screen when in home screen, even after “Payment Received” snackbar appears.</li>
                            <li>Zero balance shown after wallet initialized. Wallets list no longer says “Click to initialize” for wallets that have not been initialized.</li> 
                            <li>iPhone5/SE Layout of certain tokens incongruent with others in Wallets layout.</li>
                        </ul>

                        <!---->

                        <h3 class="orange border-bottom w-100 py-3 m-0">Jaxx Liberty 2.0.5:</h3>
                        <p class="font-weight-light border-bottom py-3 mb-2">[11/5/18]</p>
                        <h4 class="pt-2">Features:</h4>
                        <ul>
                            <li>ZCASH Sapling update.</li>
                            <li>Groestlcoin (GRS) integration.</li>
                        </ul>

                        <!---->

                        <h3 class="orange border-bottom w-100 py-3 m-0">Jaxx Liberty 2.0.4 (Windows and Linux Hotfix):</h3>
                        <p class="font-weight-light border-bottom py-3 mb-2">[10/26/18]</p>
                        <h4 class="pt-2">Features:</h4>
                        <ul>
                            <li>ShapeShift transaction component rework: app will now await ShapeShift order ID before signing transaction.</li>
                            <li>Add last updated timestamp to Portfolio Widget.</li>
                            <li>Portfolio optimization for low-powered devices.</li>
                            <li>Add app version number in the About menu header in Global Settings.</li>
                            <li>Add link to Changelog History below ToS in Global Settings.</li>
                        </ul>
                        <h4 class="pt-2">Bug Fixes:</h4>
                        <ul class="pb-3 mb-0">
                            <li>Unintended click to wallets while swiping through wallets in Chrome extension.</li>
                            <li>Incorrect crypto balance shown in some circumstances.</li>
                        </ul>

                        <!---->

                        <h3 class="orange border-bottom w-100 py-3 m-0">Jaxx Liberty 2.0.3:</h3>
                        <p class="font-weight-light border-bottom py-3 mb-2">[10/17/18]</p>
                        <h4 class="pt-2">Features:</h4>
                        <ul>
                            <li>ShapeShift transaction component rework: app will now await for the ShapeShift order ID before signing transaction.</li>
                            <li>Add last updated timestamp to Portfolio Widget.</li>
                            <li>Portfolio optimization for low powered devices.</li>
                            <li>Add app version number in the About menu header in Global Settings.</li>
                            <li>Add link to Changelog History below ToS in Global Settings.</li>
                        </ul>
                        <h4 class="pt-2">Bug Fixes:</h4>
                        <ul class="pb-3 mb-0">
                            <li>Unintended click to wallets while swiping through them in Chrome extension. 
                            <li>Incorrect crypto balance shown on “Exchange” prompt.</li>
                            <li>Native currency always in USD on market cap, supply, and volume, even when native currency set to other than USD in Settings.</li>
                            <li>Missing coin logos at summary page for Block Explorer address lookup (BTC, BCH, BTX, DGB).</li>
                            <li>Days of Jaxx tokens added to Pricing service for future potential uses.</li>
                            <li>For tokens with shiftCount (e.g. MGO, POE, DGD, STORJ), balance after initialization is 0 followed by payment received snackbar (false alert).</li>
                            <li>Missing fiat values for some newly-added tokens (intermittent issue).</li>
                            <li>False positive for failed ShapeShift transaction.</li>
                            <li>In ShapeShift connection, selection allowing asset to be exchanged for itself.</li>
                            <li>No balance displayed next to address when viewing private keys.</li>
                            <li>Private keys with balance not displayed for BTC, ETC, LTC and DOGE.</li>
                            <li>While performing Pair/Restore from Global Settings, app intermittently getting stuck at 10th coin.</li>
                            <li>False negative for Offline warning (when the device is actually online).</li>
                            <li>Fixed an issue with the app occasionally not showing the correct balance on the Home Screen Wallet widget.</li>
                            <li>When sending tokens: confirmation screen shows contract address as receiving address which can lead to sending to contract addresses.</li>
                        </ul>

                        <!---->

                        <h3 class="orange border-bottom w-100 py-3 m-0">Jaxx Liberty 2.0.1 (Hotfix):</h3>
                        <p class="font-weight-light  border-bottom py-3 mb-2">[10/11/18]</p>
                        <h4 class="pt-2">Bug Fixes:</h4>
                        <ul class="pb-3">
                            <li>Missing information (address panel) on Block Explorer address lookup.</li>
                            <li>Wrong coin color on Wallets widget in desktop version.</li>
                            <li>Empty blue page after Pair/Restore in desktop version.</li>
                            <li>Two of the same wallet shown on Wallets module, Portfolio module, and list of private keys.</li>
                            <li>Home screen background image is zoomed in (desktop version).</li>
                            <li>Can't scroll through wallet setup properly in desktop version.</li>
                            <li>Block Explorer icon is missing in some contexts.</li>
                            <li>Added assets for Tokens.</li>
                        </ul>

                        <!---->

                        <div class="wrap border-top border-bottom w-100 py-3">
                            <h1 class="section-title m-0">Jaxx Classic Change Log</h1>
                        </div>
                        <div>
                            <h3 class="orange border-bottom py-3">1.3.17</h3>
                            <p>
                                •  Asset Update<br>
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.3.15</h3>
                            <p>
                                •  Security Fixes<br>
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.3.14</h3>
                            <p>
                                •  Security Enhancements<br>
                                •  RSK (rootstock) support<br>
                                •  Address Book<br>
                                <a href="https://decentral.zendesk.com/hc/en-us/articles/360001997634-Jaxx-Address-Book-What-is-it-how-it-works-how-to-use-">https://decentral.zendesk.com/hc/en-us/articles/360001997634-Jaxx-Address-Book-What-is-it-how-it-works-how-to-use-</a> <br>
                                •  UI Enhancements and minor bug fixes
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.3.13</h3>
                            <p>
                                •  Feature Updates & Bug Fixes
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.3.12</h3>
                            <p>
                                •  More control of the initialization process <br>
                                •  Advance Jaxx custom data validation update <br>
                                •  Tips and Tricks is back <br>
                                •  Assets integration <br>
                                •  Update spendable algorithm <br>
                                •  UI and UX updates <br>
                                •  *Bug Fixes* <br>
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.3.11</h3>
                            <p>
                                •  ShapeShift UI major updates <br>
                                •  Mining fee algorithm changes <br>
                                •  Argentina Peso currency added <br>
                                •  Custom data on advance Jaxx update <br>
                                •  Security update for desktop builds <br>
                                •  Dynamic gas price for tokens <br>
                                •  Architecture changes and stable pricing data <br>
                                •  New infrastructure support for up to date information <br>
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.3.9</h3>
                            <p>
                                •  ShapeShift improvements <br>
                                •  Hot Fix <br>
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.3.8</h3>
                            <h6>New Features</h6>
                            <p>
                                •	ETH Gas Limit Control with limit maximums and minimums in Advance Jaxx <br>
                                •	Paper Wallet activation <br>
                                •	Pricing Data update <br>
                            </p>
                        </div>
                        <div>
                            <h6>Bug Fixes</h6>
                            <p>
                                •	BTC transaction histories display correct balances <br>
                                •	ETC spendable balance is checked before allowing a send-transaction <br>
                                •	ETH wallets now show accurate balances in transaction history <br>
                                •	ERC20 spendable balance is checked and verified before attempting a send transaction for all ERC20 tokens <br>
                                •	ShapeShift Unavailable Message is now available on all platforms <br>
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.3.7</h3>
                            <p>
                                •	Fixed Spendable Issues
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.3.6</h3>
                            <p>
                                •	BCH Integration <br>
                                •	Performance improvements <br>
                                •	BTC build transactions have been resolved <br>
                                •	Added jaxx config version <br>
                                •	Implemented general URI support for QR scanner validator <br>
                                •	Minor security updates <br>
                                •	Fixed UI issues <br>
                                •	ETC &amp; ZEC Updated for Transactions and Balances <br>
                                •	Send Confirmation Popup updated <br>
                                •	Fixed issue where Desktop application was not closing on close <br>
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.41</h3>
                            <p>•  Added BNT</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.40</h3>
                            <p>•  Added DAP</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.39</h3>
                            <p>•  Added EOS</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.38</h3>
                            <p>•  Added ANT</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.37</h3>
                            <p>•  Added SNT</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.36</h3>
                            <p>•  Added SAN</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.35</h3>
                            <p>•  Added WINGS</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.34</h3>
                            <p>•  Added EDG</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.33</h3>
                            <p>•  Added RLC</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.32</h3>
                            <p>•  Added BAT</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.31</h3>
                            <p>•  Added TenX</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.30</h3>
                            <p>•  Added Maecenas</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.29</h3>
                            <p>•  Added QTUM</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.28</h3>
                            <p>•  Added Musiconomi</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.27</h3>
                            <p>•  Added Cofound.it</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.26</h3>
                            <p>•  Added Po.et</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.25</h3>
                            <p>•  Added Stox</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.24</h3>
                            <p>•  BTC transactions (mining fees update) <br>•&nbsp;Change log update <br>•&nbsp;REP contract update <br>•&nbsp;Display private keys bug fixes</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.21</h3>
                            <p>• Added Civic Token</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.20</h3>
                            <p>• Bug fixes <br>•&nbsp;Roll back Civic token</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.19</h3>
                            <p>• Added Civic Token</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.18</h3>
                            <p>• LTC multisig support <br>•&nbsp;Doge private keys UI fix <br>•&nbsp;Bulletin updates <br>•&nbsp;ETH
                                warning message updated based on selecting fiat <br>•&nbsp;Default gas limit of ICOs updated
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.17</h3>
                            <p>• Added Slow mining fee pop up with warning message <br>•&nbsp;Added ETH warning message for
                                greater than 1000 ETH <br>•&nbsp;Pricing updates
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.16</h3>
                            <p>• Reduced ETH gas cost <br>• ETH and ETC gas price display issue in Transaction History fixed
                                <br>• ETH and ETC Replay Safe Split issue fixed
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.15</h3>
                            <p>• Added Pricing information for ICN, BCAP and DigixDAO <br>• Ethereum Balances updated <br>•
                                Bitcoin average mining fees updated
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.14</h3>
                            <p>• Added Doge <br>• Fixed Ethereum cache balances</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.13</h3>
                            <p>• Added BCAP <br>• Ethereum HD addresses no longer generated</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.12</h3>
                            <p>• Fixed Gnosis Pricing <br>• Fixed Golem Caching <br>• Instant unconfirmed with Dash, litecoin
                                and Zcash
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.11</h3>
                            <p>• Added DigixDAO</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.10</h3>
                            <p>• Added Iconomi</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.9</h3>
                            <p>• Added Golem</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.8</h3>
                            <p>• Added Gnosis <br>• Fixed minor carousel issue <br>• Biginteger issue resolved for small amounts</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.7</h3>
                            <p>• Added coin-specific Bulletin in Menu <br>• Sleep mode activates after 5 minutes of inactivity
                                <br>• Bug with incorrect version numbers fixed <br>• Terms of Service "Accept" button more
                                responsive <br>• Drop down arrow position fixed <br>• Zcash and LTC minor fixes <br>• Initializing
                                Wallet message centered <br>• Loading Wallet modal after Pair / Restore now opaque <br>•
                                Error message in Ethereum Private Keys removed <br>• REP icon now visible in Ethereum Private
                                Keys
                            </p>
                        </div>
                </div>
            </div>
        </section>
    </div><!--end main container-->
</main>
    
<?php

include 'includes/footer.php';

?>