<?php

// =============== Home page

$homeBanner1 = "Jaxx Liberty";
$homeBanner2 = "Your gateway to <span class='line-break-md'>all things crypto.</span>";
$homeBanner3 = "Portfolio, markets, <span class='line-break-sm'>news, exchange,</span> <span class='line-break-sm'>85 cryptocurrencies.</span> <span class='d-table'>All in 1 app.</span>";
$homeBannerCTA1 = "Download";

$homeWalletTitle = "Manage 80+ Cryptocurrencies";
$homeWalletDesc = "Easily store, send, receive and even exchange 80+ cryptocurrencies right in your wallet. View balance, see transaction history and view detailed coin information.";

$homePortTitle = "View your portfolio.";
$homePortDesc = "Check out your asset balance, track individual coins and tokens, and follow value changes over the last hour, day, week and month.";

$homeExchangeTitle = "Exchange between assets.";
$homeExchangeDesc = "Third-party apps like ShapeShift add seamless peer-to-peer exchange between supported assets like Bitcoin and Ethereum (Changelly coming soon).";

$homeMarketsTitle = "Track market data.";
$homeMarketsDesc = "Follow the top 100 assets, compare price changes, see market caps, and follow trends.";

$homeNewsTitle = "Follow blockchain news.";
$homeNewsDesc = "Get daily blockchain headline news and updates from a range of trusted sources. All at your fingertips, in Jaxx Liberty's news module.";

$homeSupportTitle = "Enjoy world-class support.";
$homeSupportDesc = "Get fast, friendly customer support from our User Success Team 7 days a week, via email or social media. We're here to help!";

$homeBlockTitle = "Search the blockchain.";
$homeBlockDesc = "Check balances and transaction data across multiple blockchains in Jaxx Liberty's easy-to-use block explorer.";

$homeDownload1 = "Download";
$homeDownload2 = "Use on your <span class='d-table'>favourite device.</span>";
$homeDownload3 = "<span class='font-weight-bold'>Jaxx Liberty</span> is available for Android, iOS, Mac OS X, Windows, Linux, and Google Chrome extension. It’s 100% free and is already trusted by thousands of users around the world. Start your journey.";
$homeDownloadCTA = "Desktop versions";

// =============== Security page

$security1Micro = "Security features";
$security1Title = "Secure by design.";
$security1Desc1 = "Jaxx Liberty is secure by design. We built it so that you are in full control of your digital assets. All of your confidential data (mnemonic, private keys) is generated and kept on the client side (your device).";
$security1Desc2 = "Decentral never has access to, or knowledge of, your confidential data — you remain in complete control of your digital assets at all times. While highly unlikely, should our server be compromised, your digital assets remain safe because there’s nothing to steal on our server. This reduces the risk of a large-scale security catastrophe that has been seen in some of the custodial wallet models. This also means that the fund security of Jaxx Liberty wallet lies with you.";
$security1CTA = "Explore";

$security2Micro = "12-word backup";
$security2Title = "It starts with a seed.";
$security2Desc1 = "Jaxx Liberty uses industrial standard wallet data generation and derivation processes. When a new wallet is being created, a random 12-word mnemonic or “back-up phrase” is generated using standard BIP39 library. This mnemonic is the root data of the entire wallet and Jaxx Liberty uses it to derive your public addresses and your private keys,";
$security2Desc2 = " and some meta-data for all supported crypto assets (Bitcoin, Ethereum, and more). This 12-word mnemonic is easy to write down, is a backup of the entire wallet, and difficult to guess. In the event that your device is lost or stolen, or the operating system has been corrupted, this 12-word mnemonic can recover the entire wallet in another device. Make sure your mnemonic is stored in a safe place as anyone who has access to this 12-word back-up phrase has access to your digital assets.";
$security2CTA = "You're in control";

// password 

$security3Micro = "Password protection";
$security3Title = "Further encrypt your wallet data with a password.";
$security3Desc1 = "To further protect your data, we took extra security measures by encrypting core wallet data using military grade encryption after you set a password. In order to achieve maximum security without destroying usability, we used a special cryptocurrency data structure called xPub, which has the same address-generating capability of a key node, but without the ability to generate private keys.";
$security3Desc2 = "By using this architecture we are able to keep your mnemonic on the client in an encrypted state most of the time, and keep only less security-sensitive xPub in memory and local storage. With this minimized exposure of the mnemonic you are  only required to enter a password before critical operations such as send, view mnemonic, and view private keys. There are also processes running in Jaxx Liberty to check the integrity of critical data such as receiving addresses, and xPubs to minimize the risk of data tampering by malware.";
$security3CTA = "Hot vs. cold";

// hot vs cold

$security4Micro = "Security architecture";
$security4Title = "Hot wallet vs. cold wallet.";
$security4Desc1 = "Jaxx Liberty is a convenient, easy-to-use hot wallet with a unified user-experience across many supported platforms. A hot wallet is typically suited for frequent, casual, and fast crypto transactions, while a cold wallet (often referred to as a hardware wallet) is better suited for long-term storage of larger amounts, typically by using specialized hardware.";
$security4Desc2 = "While it's commonly suggested that users not store life-changing amounts in any hot wallet (including Jaxx Liberty), each user is still in the best position to maintain the security of their assets. Mnemonics and passwords never leave a user's device, they are never stored, never shared, and are never seen except if you yourself let your information be viewed. Security is our top priority, and we are continuously improving the security of both our product and operations. Knowing this difference between a hot wallet and a cold wallet is an important first step towards understanding potential risks.";
$security4CTA = "Evolution";

// Dev-ops accordion 

$securityDevOpsMainMicro = "Secure Dev-Op Processes ";
$securityDevOpsMainTitle = "Continuously Enhancing Product Security";
$securityDevOpsMainDesc1 = "At Decentral, we continuously work to enhance product security on every release. We are actively researching and performing due diligence on additional security features such as 2FA and hardware wallet integration. In addition to the security features found in Jaxx Liberty, at Decentral we take all aspects of security seriously. This includes our dev-op processes because it could impact product security as well. Our measures include the following, but are not limited to:";

$securityDevOpsTitle1 = "Strict access control to Jaxx Liberty code-repository";
$securityDevOpsDesc1 = "We periodically review access to Jaxx Liberty repository, developer privileges and remove developer accounts as soon as they left the project. We also perform due-diligence background checks to minimize the risks.";

$securityDevOpsTitle2 = "Rigid version-control processes";
$securityDevOpsDesc2 = "We use standard agile development processes and have very strict code-review process. All pull requests must be reviewed by at least two people before they are merged into the release branch, where additional security code review is also performed.";

$securityDevOpsTitle3 = "Third-party libraries";
$securityDevOpsDesc3 = "Modern software development relies heavily on third-party libraries, and we are no exception. We are fully aware of the potential risks and take a series of measures to minimize those risks, for example: enforcing third-party library evaluation and approval processes, actively morning security news, locking down library versions, and actively checking vulnerability databases.";

$securityDevOpsTitle4 = "Security testing";
$securityDevOpsDesc4 = "We use state-of-the-art static analysis security testing tool, dynamic analysis security testing tool, and network traffic analysis tool to perform due-diligence security testing for each of our releases.";

$securityDevOpsTitle5 = "Securing distribution channels";
$securityDevOpsDesc5 = "We release Jaxx Liberty on several different platforms. Apps platforms including Chrome Web Store, Google Play Store and Apple iOS store have application authentication measures to ensure released Jaxx Liberty apps are genuine. However, from time to time Jaxx Liberty impersonator apps may appear. In these instances, we immediately report the situation directly to the corresponding platform to have the imitating Jaxx Liberty apps removed.  We encourage our users to report any suspect apps pretending to be Jaxx Liberty. For desktop installers that are not distributed through app stores, we use download checksums and code-signing certificates to ensure the integrity of our installers.";

$securityDevOpsTitle6 = "IT and on-premise Security";
$securityDevOpsDesc6 = "We are very cautious  at Decentral and follow rigid processes to secure our devices, network and physical locations.";

$securityDevOpsTitle7 = "Security Education";
$securityDevOpsDesc7 = "We constantly remind the team the importance of security and host internal seminars and training sessions to boost security awareness.";

$securityDevOpsTitle7 = "Fraud Prevention";
$securityDevOpsDesc7 = "Our support team is constantly monitoring communities and calls out and report fraudulent activities related to Jaxx Liberty.";

$securityDevOpsTitle8 = "Best Security Practices for Jaxx Liberty Users";

$securityDevOpsTitle9 = "Use Jaxx Liberty as a hot wallet, do not store life-changing amount of funds in it.";
$securityDevOpsDesc9 = "Jaxx Liberty is designed as a hot wallet that maximize usability and convenience, never use it to store more than you can lose. A general rule of thumb is that if losing all the funds in the wallet is affecting your day-to-day life (for example, paying bills, ) in anyway, it is probably a life-changing amount.";

$securityDevOpsTitle10 = "Backup your wallet as soon as possible.";
$securityDevOpsDesc10 = "We recommend writing down your 12-word backup phrase (mnemonic) and store it in a secure place. You can do this easily by going to Global Settings -> Security ->Backup Wallet wizard. The wizard will verify your backup by asking you to input it again to validate. By backing up your mnemonic , you can restore your wallet any time by regenerating a new wallet in Jaxx Liberty. Why is this important? What if  you lose your device, or the system is corrupted or you want to sync your wallet to a new device -- what do you do? Simply choose pair/restore wallet and input your 12-word backup phrase (mnemonic) and let Jaxx Liberty do the rest.";

$securityDevOpsTitle11 = "Set a password to fully encrypt the wallet.";
$securityDevOpsDesc11 = "We strongly recommend setting up a password to further enhance security (consider a password as a 2FA for your wallet). As mentioned earlier, setting a password enables Jaxx Liberty to fully encrypt the wallet and minimize exposure. You will only be asked to input a password before critical operations such as send, view backup phrase or pair/restore wallet.";

$securityDevOpsTitle12 = "Be careful when viewing sensitive information.";
$securityDevOpsDesc12 = "Jaxx Liberty provides several functions to allow you to view your wallet data conveniently, such as view backup phrase and display private keys. However, be mindful when are displaying this sensitive data.  Whoever knows your 12-word backup phrase (mnemonic) can control your entire wallet, regardless if you set a password to encrypt the wallet or not. A malicious user can simply restore your wallet in another device and transfer out all of your funds. However, if a malicious user knows your password, he/she still needs to access your device in order to get access to your wallet.";

$securityDevOpsTitle13 = "Secure the environment that Jaxx Liberty is running on.";
$securityDevOpsDesc13 = "No wallet can be secured if the operating system it is running on is compromised. For example, if a malware infects your system and gains capability of logging keypad, capturing screens or modifying data in the clipboard, no in-wallet security features will be sufficient to stop user from losing funds. Update your operating system and browser often with latest security patches, do not install unknown softwares and be vigilant about latest vulnerability trends.";

$securityDevOpsTitle14 = "Always double-check receiving addresses.";
$securityDevOpsDesc14 = "There are more and more malwares that temper receiving addresses. These malwares target clipboard, which is an unprotected area of memory (for conveniently sharing data between programs), and generally outside of a wallet’s control. Therefore, it is important to  double-check receiving addresses especially after copy and paste it. Check at least the starting and ending characters (to avoid incomplete copies), but the more the better (Malware can be sophisticated and generate similar addresses on the fly).";

//download

$security5Micro = "Download";
$security5Title = "Join thousands of users who already trust Jaxx Liberty. Download it for free on Android, iOS, Mac OS X, Windows, Linux, or Google Chrome extension.";
$security5CTA = "Desktop versions"

?>