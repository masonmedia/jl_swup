<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php 
    if(isset($title) && !empty($title)) { 
       echo $title; 
    } 
    else { 
       echo "Jaxx Liberty | Home"; 
    } ?></title>
    <!--core meta data-->
    <meta name="description" content="<?php

    if(isset($metaD) && !empty($metaD)) { 
       echo $metaD; 
    } 
    else { 
       echo "Jaxx Liberty is a digital wallet that supports over 85 assets and is available on iOS, Android, Desktop, and for Google Chrome."; 
    } ?>" />
    <meta name="keywords" content="Decentral,Jaxx Liberty,Blockchain,Cryptocurrency,Anthony Di Iorio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="manifest" href="site.webmanifest">
    <!--icons-->
    <link rel="apple-touch-icon" href="icon.png">
    <link rel="shortcut icon" href="/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- Open Graph Meta Data -->
    <meta property="og:description" content="Jaxx Liberty is a digital wallet that supports over 85 assets and is available on iOS, Android, Desktop, and for Google Chrome.">
    <!--<meta property="og:image" content="https://decentral.ca/assets/img/jaxx-android-tablet-pc.jpg">-->
    <meta property="og:image" content="https://jaxx.io/assets/img/jaxx-apple-multi-device-min.jpg">
    <meta property="og:site_name" content="jaxx.io">
    <meta property="og:title" content="Jaxx Liberty: Your trusted all-in-one multi-asset digital wallet.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://jaxx.io">
    <!-- Twitter Card Meta Data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="https://jaxx.io">
    <meta name="twitter:creator" content="Jaxx Liberty">
    <meta name="twitter:title" content="Jaxx Liberty: Your trusted all-in-one multi-asset digital wallet.">
    <meta name="twitter:description" content="Jaxx Liberty is a digital wallet that supports over 85 assets and is available on iOS, Android, Desktop, and for Google Chrome.">
    <meta name="twitter:image" content="https://jaxx.io/assets/img/jaxx-apple-multi-device-min.jpg">
    <!-- Styles -->
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <!--json.ld-->
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@graph": [
              {
              "@type": "SoftwareApplication",
              "operatingSystem": "All",
              "name": "Jaxx Liberty",
              "@id":"http://jaxx.io",
              "applicationCategory": "https://schema.org/DigitalWalletApplication",
              "url": "https://www.jaxx.io",
              "downloadUrl": "https://www.jaxx.io/downloads",
              "featureList": "https://www.jaxx.io/features",
              "sameAs": [
                "https://www.facebook.com/JaxxWallet",
                "https://twitter.com/jaxx_io",
                "https://twitter.com/Jaxx_Support",
                "https://www.instagram.com/jaxx_io/",
                "https://www.reddit.com/r/jaxx/"
              ],
              "image": [
                "https://jaxx.io/assets/img/jaxx-iphone-X-4-gallery.jpg",
                "https://jaxx.io/assets/img/jaxx-apple-multi-device-min.jpg",
                "https://jaxx.io/assets/img/jaxx-apple-4-iphones-min.jpg",
                "https://jaxx.io/assets/img/decentral-toronto-skyline.jpeg",
                "https://jaxx.io/assets/img/jaxx-iphones-clay-3-black.jpg"
               ],
              "offers": {
                "@type": "AggregateOffer",
                "lowPrice": "0.00",
                "highPrice": "0.00",
                "priceCurrency": "All"
                }
              },
              {
                "@context": "https://schema.org",
                "@type": "VideoObject",
                "name": "You've heard the news. Jaxx Liberty is out. Ready to make the move?",
                "description": "Jaxx users, you've heard the news -- Jaxx Liberty is out. Ready to make the move from Jaxx Classic to the new Jaxx Liberty? Here's how to do it in less than 2 minutes. Jaxx Liberty is a multi-platform, multi-currency digital asset wallet. Find out more at https://jaxx.io.",
                "thumbnailUrl": "https:/jaxx.io/assets/img/jaxx-multi-device-2-pair.jpg",
                 "uploadDate": "2018-10-31T00:00:00+00:00",
                 "contentUrl": "https://www.youtube.com/watch?v=A5WYbV7rDDU&t=1s",
                 "embedUrl": "https://www.youtube.com/embed/A5WYbV7rDDU"
              },
              {
              "@context":"https://schema.org",
              "@type":"ItemList",
              "itemListElement":[
                {
                  "@type":"ListItem",
                  "position":1,
                  "url":"https://blog.jaxx.io/bch/"
                },
                {
                  "@type":"ListItem",
                  "position":2,
                  "url":"https://blog.jaxx.io/all-in-on-jaxx-liberty/"
                },
                {
                  "@type":"ListItem",
                  "position":3,
                  "url":"https://blog.jaxx.io/jaxx-classic-and-jaxx-liberty-were-not-affected-by-the-npm-vulnerability/"
                }
              ]
            }
            ]
        }
    </script> 
<!--
"aggregateRating": {
    "@type": "AggregateRating",
    "applicationCategory": "FinanceApplication",
    "ratingValue": "4.4"
},  
-->
    <!--cookies banner-->
    <link rel="stylesheet" href="/assets/css/cookieconsent.min.css">
    <script>            
        window.addEventListener("load", function(){
        window.cookieconsent.initialise({
          "palette": {
            "popup": {
              "background": "#fff",
              "text": "#000"
            },
            "button": {
              "background": "transparent",
              "text": "#000",
              "border": "#000"
            }
          },
          "position": "bottom-left",
            "content": {
            "message": "Like most websites, we use analytics cookies to understand how this site is used — as long as your browser is set to accept them.",
            "dismiss": "Start exploring",
            "link": "Find out more.",
            "href": "https://jaxx.io/thirdparties-current.html"
          },
        })});
    </script>
    <!-- Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=1511d491-71d2-4a00-ab84-5d6b388b482d"></script>
</head>
<body>
    <div id="swup" class="transition-fade">
      
       <!--nav-->
        <nav id="menu" class="navbar fixed-top navbar-expand-lg down down-med">
            <a class="navbar-brand" href="/">
                <img class="jaxx-navbar-brand" src="/assets/img/JaxxLiberty_Logo_RGB_Screen%20(white%20Liberty%20white%20X).png" alt="Jaxx Liberty">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <div class="wrapper-menu">
                  <div class="line-menu half start"></div>
                  <div class="line-menu"></div>
                  <div class="line-menu half end"></div>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/features.php">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/downloads.php" onclick="googleAnalyticsTrigger('Downloads_Page', 'Menu')">Download</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/security.php">Security</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/community.php">Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://blog.jaxx.io/" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://support.decentral.ca/hc/en-us" target="_blank" onclick="googleAnalyticsTrigger('Support_Page', 'Menu')">Support</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--end nav-->        