<?php

$title = "Jaxx Liberty | Downloads";

include 'includes/header.php';

?>
    <!--banner-->

    <div id="banner" role="banner" class="container-fluid p-0">
        <div class="row d-flex min-700-lg py-5 text-secondary relative">
            <img 
            class="img-full absolute z-0 left-0 bottom-0 up up-med" src="/assets/img/jaxx-phone-desk.jpg"
            alt="Jaxx Liberty is 100% free and is available for Android, iOS, Mac OS X, Windows, Linux, and Google Chrome extension.">
            <div class="offset-lg-2"></div>
            <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center p-5 m-0">
                <img 
                src="/assets/img/JaxxLiberty_Logo_Grouped_copy.svg" class="jaxx-liberty-logo mt-5"
                alt="Jaxx Liberty logo">
                <h1 class="page-title pt-1 right">Start your journey.</h1>
                <hr class="hr-big border-0 bg-orange right right-med"> 
                <p class="p-big pt-0 m-0 right right-slow">Available for Android, iOS, Mac OS X, Windows, Linux, or Google Chrome extension.</p> 
                <!--store badges-->
                <div class="row downloads-badge-container pt-3 down">
                    <!--jaxx liberty google store-->
                    <a onclick="googleAnalyticsTrigger('Android/Tablet', 'Downloads_Mobile')" href="https://play.google.com/store/apps/details?id=com.liberty.jaxx" target="_blank">
                        <img 
                        class="store-badge mr-1 mt-1" src="/assets/img/jaxx-google-play.png"
                        alt="Google Play Store button to download Jaxx Liberty"/></a>
                    <!--jaxx liberty itunes-->
                    <a onclick="googleAnalyticsTrigger('iOS', 'Downloads_Mobile')" href="https://itunes.apple.com/us/app/jaxx-liberty/id1435383184?ls=1&mt=8" target="_blank">
                        <img 
                        class="store-badge mr-1 mt-1" src="/assets/img/jaxx-app-store.png"
                        alt="iTunes App Store button to download Jaxx Liberty"/></a>
                    <!--jaxx liberty chrome-->
                    <a onclick="googleAnalyticsTrigger('Chrome Extension', 'Downloads_Chrome')" href="https://chrome.google.com/webstore/detail/jaxx-liberty/cjelfplplebdjjenllpjcblmjkfcffne" target="_blank">
                        <img 
                        class="store-badge mr-1 mt-1" src="/assets/img/jaxx-chrome-store.png"
                        alt="Chrome Web Store button to download Jaxx Liberty"/></a>
                </div><!--end button nest row--> 
                <!--desktop modal trigger--> 
                <button id="desktop_download" class="bg-trans border-0 p-0 down down-slow" data-toggle="modal" data-target="#desktopModal"><p class="p-btn text-secondary mt-4 slide-down">Desktop versions <i class="fa fa-angle-right fa-btn"></i></p></button>                
            </div><!--end col-->
            <div class="offset-lg-2"></div>
        </div><!--end row-->
    </div><!--end container-->
        
    <div class="container-fluid p-0">
       <div class="row p-0">
        <!--nested container for modals-->
            <div class="modal fade" id="desktopModal" tabindex="-1" role="dialog" aria-labelledby="desktopModal" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header bg-light border-bottom-0 p-0">
                    <button type="button" class="close font-weight-light ml-auto mt-2 mr-2" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">X</span>
                    </button>
                  </div>
                   
                  <!--modal-->
                    
                  <div class="modal-body bg-light px-5 pb-5">
                       <div class="container-fluid">
                           <div class="row">
                                <div class="col-sm-12 d-flex flex-column justify-content-start align-items-start text-left w-100">
                                    <h2 class="section-title orange m-0 font-weight-bold">Jaxx Liberty for Desktop</h2>
                                </div>
                                <div class="col-sm-12 d-flex flex-column justify-content-start align-items-start text-left p-3">
                                    <p class="pt-4 m-0 border-top">The checksums below are a simple way for you to double-check the copy of Jaxx you are installing is genuine. You can match the checksum in your instance of Jaxx with the data below.</p>
                               </div>

                              <!--mac desktop-->
                            
                               <div class="col-xl-6 d-flex flex-column justify-content-start align-items-start text-left p-3">
                                    <h3 class="h1 w-100 font-weight-light text-secondary py-3 mb-3 border-bottom border-top">*Mac OSX</h3>
                                    <h5 class="pb-4 m-0 border-bottom">Jaxx Liberty requires OS X 10.9 (or later)</h5>
                                    <p class="pt-3 font-weight-bold">$ shasum -a 256 Jaxx.Liberty-2.2.0.dmg</p>
                                    <p class="word-break">30b70ced0b60e78c973c63e4b415aa866eee4739763b76c52a0422c66d34bd40</p>
                                    <a role="button" class="btn btn-orange mt-3" onclick="googleAnalyticsTrigger('Mac_Modal', 'Downloads_Desktop_Liberty_Mac')" href="https://download-liberty.jaxx.io/Jaxx.Liberty-2.2.0.dmg">Download for Mac</a>
                               </div><!--end mac-->
                               
                               <!--windows desktop-->
                               
                               <div class="col-xl-6 d-flex flex-column justify-content-start align-items-start text-left p-3">
                                    <h3 class="h1 w-100 font-weight-light text-secondary py-3 mb-3 border-bottom border-top">Windows</h3>
                                    <h5 class="pb-4 m-0 border-bottom">Jaxx Liberty requires Windows 8 (or later)</h5>
                                    <p class="pt-3 font-weight-bold">$ certutil -hashfile Jaxx.Liberty-setup-2.2.0.exe sha256</p>
                                    <p class="word-break">6a3b6126d9069aa0a6c7d8c293317151cefd7d8cd910ab29a9d68bf096ee789b</p>
                                    <a role="button" class="btn btn-orange mt-3" onclick="googleAnalyticsTrigger('Windows_Modal', 'Downloads_Desktop_Liberty_Windows')" href="https://download-liberty.jaxx.io/Jaxx.Liberty-setup-2.2.0.exe">Download for Windows</a>
                               </div><!--end windows-->
                               
                                <!--linux 32 desktop-->
                                
                               <div class="col-xl-6 d-flex flex-column justify-content-start align-items-start text-left p-3">
                                   <h3 class="h1 w-100 font-weight-light text-secondary py-3 mb-3 border-bottom border-top">Linux 32</h3>
                                    <h5 class="pb-4 m-0 border-bottom">Jaxx Liberty requires Ubuntu 12.04, Fedora 21, or Debian 8 (or later)</h5>
                                    <p class="pt-3 font-weight-bold">$ shasum -a 256 com.liberty.jaxx-2.2.0-i386.AppImage</p>
                                    <p class="word-break">d828a11855d67af1041c07471c73a214cf7c7e03914561694853b7eb0f32b533</p>
                                    <a role="button" class="btn btn-orange mt-3" onclick="googleAnalyticsTrigger('Linux_Modal', 'Downloads_Desktop_Liberty_32')" href="https://download-liberty.jaxx.io/com.liberty.jaxx-2.2.0-i386.AppImage">Download for Linux 32</a>
                               </div><!--end linux 32-->
                               
                               <!--linux 64 desktop-->
                               
                               <div class="col-xl-6 d-flex flex-column justify-content-start align-items-start text-left p-3">
                                   <h3 class="h1 w-100 font-weight-light text-secondary py-3 mb-3 border-bottom border-top">Linux 64</h3>
                                    <h5 class="pb-4 m-0 border-bottom">Jaxx Liberty requires Ubuntu 12.04, Fedora 21, or Debian 8 (or later)</h5>
                                    <p class="pt-3 font-weight-bold">$ shasum -a 256 com.liberty.jaxx-2.2.0-x86_64.AppImage</p>
                                    <p class="word-break">32eb2aa0dbc364dfa9674c79d4a579c126ec5ca884c289eb5f2f951ad2b19778</p>
                                    <a role="button" class="btn btn-orange mt-3" onclick="googleAnalyticsTrigger('Linux_Modal', 'Downloads_Desktop_Liberty_64')" href="https://download-liberty.jaxx.io/com.liberty.jaxx-2.2.0-x86_64.AppImage">Download for Linux 64</a>
                               </div><!--end linux 64-->
                                <div class="col-sm-12 d-flex flex-column justify-content-start align-items-start text-left p-3">
                                    <p class="pt-4 m-0 border-top"><b>*Mac OS X Note: </b>Depending on your system settings, the system might warn you that "Jaxx can't be opened because it comes from an unidentified developer." You can either change your system settings to allow apps from unknown developers in your "Security & Privacy" settings, or simply right click Jaxx &#8594; Open (as administrator), which will prompt you with a warning.</p>
                               </div><!--end Mac desktop note-->
                           </div><!--end row-->
                       </div><!--end container-->
                    </div><!--end modal body-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
              </div>
            </div><!--end desktop modal-->
          </div><!--end row-->
        </div><!--end container-->

<?php

include 'includes/footer.php';

?> 
