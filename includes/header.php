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
       echo "Decentral Inc. | Canada's Leading Blockchain Startup"; 
    } ?></title>
    <!--core meta data-->
    <!--<meta name="description" content="Decentral is a Toronto-based innovation hub and software development company focused on decentralized technologies. We are home to Canada’s first two-way Bitcoin ATM and host to community-driven events in the domains of fintech, blockchain, cryptocurrencies and decentralized technologies.">-->
    <meta name="description" content="<?php

    if(isset($metaD) && !empty($metaD)) { 
       echo $metaD; 
    } 
    else { 
       echo "Decentral is a Toronto-based innovation hub and software development company focused on decentralized technologies. We are home to Canada’s first two-way Bitcoin ATM and host to community-driven events in the domains of fintech, blockchain, cryptocurrencies and decentralized technologies."; 
    } ?>" />
    <meta name="keywords" content="Decentral,Jaxx Liberty,Blockchain,Cryptocurrency,Anthony Di Iorio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="manifest" href="site.webmanifest">
    <!--icons-->
    <link rel="apple-touch-icon" href="icon.png">
    <link rel="shortcut icon" href="/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- Open Graph Meta Data -->
    <meta property="og:description" content="Decentral is a Toronto-based innovation hub and software development company focused on decentralized technologies. We are home to Canada’s first two-way Bitcoin ATM and host to community-driven events in the domains of fintech, blockchain, cryptocurrencies and decentralized technologies.">
    <meta property="og:image" content="https://decentral.ca/assets/img/jaxx-android-tablet-pc.jpg">
    <meta property="og:site_name" content="decentral.ca">
    <meta property="og:title" content="Decentral Inc. is Canada's leading blockchain company.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://decentral.ca">
    <!-- Twitter Card Meta Data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="https://decentral.ca">
    <meta name="twitter:creator" content="Decentral">
    <meta name="twitter:title" content="Decentral Inc. is Canada's leading blockchain company.">
    <meta name="twitter:description" content="Decentral is a Toronto-based innovation hub and software development company focused on decentralized technologies. We are home to Canada’s first two-way Bitcoin ATM and host to community-driven events in the domains of fintech, blockchain, cryptocurrencies and decentralized technologies.">
    <meta name="twitter:image" content="https://decentral.ca/assets/img/jaxx-android-tablet-pc.jpg">
    <!-- Styles -->
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.min.css">
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
</head>
<body>
    <div id="swup" class="transition-fade">
       <!--nav-->
        <nav id="menu" class="navbar fixed-top navbar-expand-lg down down-med">
            <a class="navbar-brand" href="/">
                <img class="decentral-navbar-brand" src="/assets/img/decentral_D_logo_white.png" alt="Decentral Inc.">
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
                        <a class="nav-link" href="/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/features.php">Jaxx Liberty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/partner-network.php">Partner Network</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://blog.jaxx.io/" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--end nav-->        