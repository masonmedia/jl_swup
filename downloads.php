<?php

$title = "Jaxx Liberty | Downloads";

$metaD = "Jaxx Liberty is a digital wallet that supports over 85 assets and is available on iOS, Android, Desktop, and for Google Chrome.";

include 'includes/header.php';

?>
    <!--banner-->

    <div id="downloads" role="banner" class="container-fluid p-0">
        <div class="row d-flex min-700-lg py-5 text-secondary relative">
            <img class="img-full absolute z-0 left-0 up up-med lazy" src="/assets/img/jaxx-phone-desk.jpg" alt="Jaxx Liberty is your all-in-one digital asset wallet.">
            <div class="offset-lg-2"></div>
            <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center p-5 m-0">
                <h1 class="page-title mt-5 right">Start your journey.</h1>
                <hr class="hr-big border-0 bg-orange right right-med"> 
                <p class="p-big pt-0 m-0 right right-slow">Download Jaxx Liberty for free on Android, iOS, Mac OS X, Windows, Linux, or Google Chrome extension.</p>                 
                <div class="row downloads-badge-container pt-3 down">
                    <!--jaxx liberty google store-->
                    <a onclick="googleAnalyticsTrigger('Android/Tablet', 'Downloads_Mobile')" href="https://play.google.com/store/apps/details?id=com.liberty.jaxx" target="_blank"><img title="Play Play Button" class="store-badge mr-1 mt-1" src="/assets/img/jaxx-google-play.png" alt="Google Play Button"/></a>
                    <!--jaxx liberty itunes-->
                    <a onclick="googleAnalyticsTrigger('iOS', 'Downloads_Mobile')" href="https://itunes.apple.com/us/app/jaxx-liberty/id1435383184?ls=1&mt=8" target="_blank"><img title="iTunes App Store Button" class="store-badge mr-1 mt-1" src="/assets/img/jaxx-app-store.png" alt="iTunes App Store Button"/></a>
                    <!--jaxx liberty chrome-->
                    <a onclick="googleAnalyticsTrigger('iOS', 'Downloads_Mobile')" href="https://chrome.google.com/webstore/detail/jaxx-liberty/cjelfplplebdjjenllpjcblmjkfcffne" target="_blank"><img title="iTunes Store Button" class="store-badge mr-1 mt-1" src="/assets/img/jaxx-chrome-store.png" alt="Chrome Web Store"/></a>
                </div><!--end button nest row--> 
                
                <!--desktop dropdown--> 
                <div class="btn-group">
                  <h4 class="dropdown-toggle mr-2 pt-4 down down-med" href="#" data-toggle="modal" data-target="#desktopModal">Desktop Versions</h4>
                </div><!--end button group-->
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
                                    <h5 class="pb-4 m-0 border-bottom">Jaxx requires OS X 10.9 (or later)</h5>
                                    <p class="pt-3 font-weight-bold">$ sha1sum Jaxx.Liberty-2.1.2.dmg</p>
                                    <p class="word-break">4ad55bf82ac997bee9e421fd7d326ac9102a764e</p>
                                    <a role="button" class="btn btn-orange mt-3" onclick="googleAnalyticsTrigger('Mac_Modal', 'Downloads_Desktop_Liberty_Mac')" href="https://download-liberty.jaxx.io/Jaxx.Liberty-2.1.2.dmg">Download Mac</a>
                               </div><!--end mac-->
                               
                               <!--windows desktop-->
                               
                               <div class="col-xl-6 d-flex flex-column justify-content-start align-items-start text-left p-3">
                                    <h3 class="h1 w-100 font-weight-light text-secondary py-3 mb-3 border-bottom border-top">Windows</h3>
                                    <h5 class="pb-4 m-0 border-bottom">Jaxx requires Windows 7 (or later)</h5>
                                    <p class="pt-3 font-weight-bold">$ sha1sum Jaxx.Liberty-setup-2.1.2.exe</p>
                                    <p class="word-break">efb7e4f10bc7aedefa4cbfb7bc208f93c02b47a3</p>
                                    <a role="button" class="btn btn-orange mt-3" onclick="googleAnalyticsTrigger('Windows_Modal', 'Downloads_Desktop_Liberty_Windows')" href="https://download-liberty.jaxx.io/Jaxx.Liberty-setup-2.1.2.exe">Download Windows</a>
                               </div><!--end windows-->
                               
                                <!--linux 32 desktop-->
                                
                               <div class="col-xl-6 d-flex flex-column justify-content-start align-items-start text-left p-3">
                                   <h3 class="h1 w-100 font-weight-light text-secondary py-3 mb-3 border-bottom border-top">Linux 32</h3>
                                    <h5 class="pb-4 m-0 border-bottom">Jaxx requires Ubuntu 12.04, Fedora 21, or Debian 8 (or later)</h5>
                                    <p class="pt-3 font-weight-bold">$ sha1sum com.liberty.jaxx-2.1.2-i386.AppImage</p>
                                    <p class="word-break">34d424d9f55495bf0febff9818049485e02606e4</p>
                                    <a role="button" class="btn btn-orange mt-3" onclick="googleAnalyticsTrigger('Linux_Modal', 'Downloads_Desktop_Liberty_32')" href="https://download-liberty.jaxx.io/com.liberty.jaxx-2.1.2-i386.AppImage">Download Linux 32</a>
                               </div><!--end linux 32-->
                               
                               <!--linux 64 desktop-->
                               
                               <div class="col-xl-6 d-flex flex-column justify-content-start align-items-start text-left p-3">
                                   <h3 class="h1 w-100 font-weight-light text-secondary py-3 mb-3 border-bottom border-top">Linux 64</h3>
                                    <h5 class="pb-4 m-0 border-bottom">Jaxx requires Ubuntu 12.04, Fedora 21, or Debian 8 (or later)</h5>
                                    <p class="pt-3 font-weight-bold">$ sha1sum com.liberty.jaxx-2.1.2-x86_64.AppImage</p>
                                    <p class="word-break">3f9abf59c01351ccc7e97f0b7101ebf00c35560c</p>
                                    <a role="button" class="btn btn-orange mt-3" onclick="googleAnalyticsTrigger('Linux_Modal', 'Downloads_Desktop_Liberty_64')" href="https://download-liberty.jaxx.io/com.liberty.jaxx-2.1.2-x86_64.AppImage">Download Linux 64</a>
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
