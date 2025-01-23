 <!-- Start::main-header -->

 <header class="app-header sticky" id="header">

     <!-- Start::main-header-container -->
     <div class="main-header-container container-fluid">

         <!-- Start::header-content-left -->
         <div class="header-content-left">

             <!-- Start::header-element -->
             <div class="header-element">
                 <div class="horizontal-logo">
                     <a href="/" class="header-logo">
                         <img src="{{ asset('assets/images/brand-logos/desktop-logo.png') }}" alt="logo" class="desktop-logo">
                         <img src="{{ asset('assets/images/brand-logos/toggle-dark.png') }}" alt="logo" class="toggle-dark">
                         <img src="{{ asset('assets/images/brand-logos/desktop-dark.png') }}" alt="logo" class="desktop-dark">
                         <img src="{{ asset('assets/images/brand-logos/toggle-logo.png') }}" alt="logo" class="toggle-logo">
                         <img src="{{ asset('assets/images/brand-logos/toggle-white.png.png') }}" alt="logo" class="toggle-white">
                         <img src="{{ asset('assets/images/brand-logos/desktop-white.png') }}" alt="logo" class="desktop-white">
                     </a>
                 </div>
             </div>
             <!-- End::header-element -->

             <!-- Start::header-element -->
             <div class="header-element mx-lg-0 mx-2">
                 <a aria-label="Hide Sidebar"
                     class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                     data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
             </div>
             <!-- End::header-element -->

             <!-- Start::header-element -->
             <div class="header-element header-search d-md-block d-none my-auto auto-complete-search">
                 <!-- Start::header-link -->
                 <!-- <input type="text" class="header-search-bar form-control" id="header-search"
                     placeholder="Search anything here ..." spellcheck=false autocomplete="off" autocapitalize="off">
                 <a href="javascript:void(0);" class="header-search-icon border-0">
                     <i class="ri-search-line"></i>
                 </a> -->
                 <!-- End::header-link -->
             </div>
             <!-- End::header-element -->

         </div>
         <!-- End::header-content-left -->

         <!-- Start::header-content-right -->
         <ul class="header-content-right">

             <!-- Start::header-element -->
             <li class="header-element d-md-none d-block">
                 <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal"
                     data-bs-target="#header-responsive-search">
                     <!-- Start::header-link-icon -->
                     <i class="bi bi-search header-link-icon d-flex"></i>
                     <!-- End::header-link-icon -->
                 </a>
             </li>
             <!-- End::header-element -->

             <!-- Start::header-element -->
             <li class="header-element country-selector dropdown">
                 <!-- Start::header-link|dropdown-toggle -->
                 <!-- <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                     data-bs-toggle="dropdown">
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none"
                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round"
                             d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
                     </svg>

                 </a> -->
                 <!-- End::header-link|dropdown-toggle -->
                 <!-- <ul class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                     <li>
                         <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                             <div class="d-flex align-items-center justify-content-between">
                                 <div class="d-flex align-items-center">
                                     <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                         <img src="../assets/images/flags/us_flag.jpg" alt="img">
                                     </span>
                                     English
                                 </div>
                             </div>
                         </a>
                     </li>
                     <li>
                         <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                             <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                 <img src="../assets/images/flags/spain_flag.jpg" alt="img">
                             </span>
                             español
                         </a>
                     </li>
                     <li>
                         <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                             <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                 <img src="../assets/images/flags/french_flag.jpg" alt="img">
                             </span>
                             français
                         </a>
                     </li>
                     <li>
                         <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                             <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                 <img src="../assets/images/flags/uae_flag.jpg" alt="img">
                             </span>
                             عربي
                         </a>
                     </li>
                     <li>
                         <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                             <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                 <img src="../assets/images/flags/germany_flag.jpg" alt="img">
                             </span>
                             Deutsch
                         </a>
                     </li>
                     <li>
                         <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                             <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                 <img src="../assets/images/flags/china_flag.jpg" alt="img">
                             </span>
                             中国人
                         </a>
                     </li>
                     <li>
                         <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                             <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                 <img src="../assets/images/flags/italy_flag.jpg" alt="img">
                             </span>
                             Italiano
                         </a>
                     </li>
                     <li>
                         <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                             <span class="avatar avatar-rounded avatar-xs lh-1 me-2">
                                 <img src="../assets/images/flags/russia_flag.jpg" alt="img">
                             </span>
                             Русский
                         </a>
                     </li>
                 </ul> -->
             </li>
             <!-- End::header-element -->

             <!-- Start::header-element -->
             <li class="header-element header-theme-mode">
                 <!-- Start::header-link|layout-setting -->
                 <a href="javascript:void(0);" class="header-link layout-setting">
                     <span class="light-layout">
                         <!-- Start::header-link-icon -->
                         <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none"
                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round"
                                 d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                         </svg>
                         <!-- End::header-link-icon -->
                     </span>
                     <span class="dark-layout">
                         <!-- Start::header-link-icon -->
                         <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none"
                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round"
                                 d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                         </svg>
                         <!-- End::header-link-icon -->
                     </span>
                 </a>
                 <!-- End::header-link|layout-setting -->
             </li>
             <!-- End::header-element -->

             <!-- Start::header-element -->
             <li class="header-element notifications-dropdown d-xl-block d-none dropdown">
                 <!-- Start::header-link|dropdown-toggle -->
                 <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown"
                     data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none"
                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round"
                             d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                     </svg>
                     <span class="header-icon-pulse bg-primary2 rounded pulse pulse-secondary"></span>
                 </a>
                 <!-- End::header-link|dropdown-toggle -->
                 <!-- Start::main-header-dropdown -->
                 <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                     <div class="p-3">
                         <div class="d-flex align-items-center justify-content-between">
                             <p class="mb-0 fs-15 fw-medium">Notifications</p>
                             <span class="badge bg-secondary text-fixed-white" id="notifiation-data">5 Unread</span>
                         </div>
                     </div>
                     <div class="dropdown-divider"></div>
                     <ul class="list-unstyled mb-0" id="header-notification-scroll">
                         <li class="dropdown-item">
                             <div class="d-flex align-items-center">
                                 <div class="pe-2 lh-1">
                                     <span class="avatar avatar-md avatar-rounded bg-primary">
                                         <img src="../assets/images/faces/1.jpg" alt="user1">
                                     </span>
                                 </div>
                                 <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                     <div>
                                         <p class="mb-0 fw-medium"><a href="chat.php.html">New Messages</a></p>
                                         <div
                                             class="text-muted fw-normal fs-12 header-notification-text text-truncate">
                                             Jane Sam sent you a message.</div>
                                         <div class="fw-normal fs-10 text-muted op-8">Now</div>
                                     </div>
                                     <div>
                                         <a href="javascript:void(0);" class="min-w-fit-content dropdown-item-close1">
                                             <i class="ri-close-line"></i>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </li>
                         <li class="dropdown-item">
                             <div class="d-flex align-items-center">
                                 <div class="pe-2 lh-1">
                                     <span class="avatar avatar-md bg-primary avatar-rounded fs-20">
                                         <i class="fe fe-shopping-cart lh-1 "></i>
                                     </span>
                                 </div>
                                 <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                     <div>
                                         <p class="mb-0 fw-medium"><a href="chat.php.html">Order Updates</a></p>
                                         <div
                                             class="text-muted fw-normal fs-12 header-notification-text text-truncate">
                                             Order <span class="text-primary1">#54321</span> has been shipped.</div>
                                         <div class="fw-normal fs-10 text-muted op-8">2 hours ago</div>
                                     </div>
                                     <div>
                                         <a href="javascript:void(0);" class="min-w-fit-content dropdown-item-close1">
                                             <i class="ri-close-line"></i>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </li>
                         <li class="dropdown-item">
                             <div class="d-flex align-items-center">
                                 <div class="pe-2 lh-1">
                                     <span class="avatar avatar-md bg-orange avatar-rounded">
                                         <img src="../assets/images/faces/10.jpg" alt="user1">
                                     </span>
                                 </div>
                                 <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                     <div>
                                         <p class="mb-0 fw-medium"><a href="chat.php.html">Comment on Post</a></p>
                                         <div
                                             class="text-muted fw-normal fs-12 header-notification-text text-truncate">
                                             Reacted: <span class="text-primary3">John Richard</span> on your next
                                             purchase!</div>
                                         <div class="fw-normal fs-10 text-muted op-8">2 hours ago</div>
                                     </div>
                                     <div>
                                         <a href="javascript:void(0);" class="min-w-fit-content dropdown-item-close1">
                                             <i class="ri-close-line"></i>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </li>
                         <li class="dropdown-item">
                             <div class="d-flex align-items-center">
                                 <div class="pe-2 lh-1">
                                     <span class="avatar avatar-md bg-success avatar-rounded">
                                         <img src="../assets/images/faces/11.jpg" alt="user1">
                                     </span>
                                 </div>
                                 <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                     <div>
                                         <p class="mb-0 fw-medium"><a href="chat.php.html">Follow Request</a></p>
                                         <div
                                             class="text-muted fw-normal fs-12 header-notification-text text-truncate">
                                             <span class="text-info">Kelin Brown</span> has sent you the request.</div>
                                         <div class="fw-normal fs-10 text-muted op-8">1 Day ago</div>
                                     </div>
                                     <div>
                                         <a href="javascript:void(0);" class="min-w-fit-content dropdown-item-close1">
                                             <i class="ri-close-line"></i>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </li>
                         <li class="dropdown-item">
                             <div class="d-flex align-items-center">
                                 <div class="pe-2 lh-1">
                                     <span class="avatar avatar-md bg-primary2 avatar-rounded">
                                         <i class="ri-gift-line lh-1 fs-16"></i>
                                     </span>
                                 </div>
                                 <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                     <div>
                                         <p class="mb-0 fw-medium"><a href="chat.php.html">Exclusive Offers</a></p>
                                         <div
                                             class="text-muted fw-normal fs-12 header-notification-text text-truncate">
                                             Enjoy<span class="text-success">20% off</span> on your next purchase!
                                         </div>
                                         <div class="fw-normal fs-10 text-muted op-8">5 hours ago</div>
                                     </div>
                                     <div>
                                         <a href="javascript:void(0);" class="min-w-fit-content dropdown-item-close1">
                                             <i class="ri-close-line"></i>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </li>
                     </ul>

                     <div class="p-3 empty-header-item1 border-top">
                         <div class="d-grid">
                             <a href="javascript:void(0);" class="btn btn-primary btn-wave">View All</a>
                         </div>
                     </div>
                     <div class="p-5 empty-item1 d-none">
                         <div class="text-center">
                             <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                 <i class="ri-notification-off-line fs-2"></i>
                             </span>
                             <h6 class="fw-medium mt-3">No New Notifications</h6>
                         </div>
                     </div>
                 </div>
                 <!-- End::main-header-dropdown -->
             </li>
             <!-- End::header-element -->

             <!-- Start::header-element full screen-->
             {{-- <li class="header-element header-fullscreen">
                 <!-- Start::header-link -->
                 <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 full-screen-open header-link-icon"
                         fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round"
                             d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                     </svg>
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 full-screen-close header-link-icon d-none"
                         fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round"
                             d="M9 9V4.5M9 9H4.5M9 9 3.75 3.75M9 15v4.5M9 15H4.5M9 15l-5.25 5.25M15 9h4.5M15 9V4.5M15 9l5.25-5.25M15 15h4.5M15 15v4.5m0-4.5 5.25 5.25" />
                     </svg>
                 </a>
                 <!-- End::header-link -->
             </li> --}}
             <!-- End::header-element -->

             <!-- Start::header-element -->
             <li class="header-element dropdown">
                 <!-- Start::header-link|dropdown-toggle -->
                 <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile"
                     data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                     <div class="d-flex align-items-center">
                         <div>
                             <img src="../assets/images/faces/15.jpg" alt="img" class="avatar avatar-sm">
                         </div>
                     </div>
                 </a>
                 <!-- End::header-link|dropdown-toggle -->
                 <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                     aria-labelledby="mainHeaderProfile">
                     <li>
                         <div class="dropdown-item text-center border-bottom">
                             <span>
                                 Mr.Henry
                             </span>
                             <span class="d-block fs-12 text-muted">UI/UX Designer</span>
                         </div>
                     </li>
                     <li><a class="dropdown-item d-flex align-items-center" href="profile.php.html"><i
                                 class="fe fe-user p-1 rounded-circle bg-primary-transparent me-2 fs-16"></i>Profile</a>
                     </li>
                     <li><a class="dropdown-item d-flex align-items-center" href="mail.php.html"><i
                                 class="fe fe-mail p-1 rounded-circle bg-primary-transparent me-2 fs-16"></i>Mail
                             Inbox</a></li>
                     <li><a class="dropdown-item d-flex align-items-center" href="file-manager.php.html"><i
                                 class="fe fe-database p-1 rounded-circle bg-primary-transparent klist me-2 fs-16"></i>File
                             Manger<span class="badge bg-primary1 text-fixed-white ms-auto fs-9">2</span></a></li>
                     <li><a class="dropdown-item d-flex align-items-center" href="mail-settings.php.html"><i
                                 class="fe fe-settings p-1 rounded-circle bg-primary-transparent ings me-2 fs-16"></i>Settings</a>
                     </li>
                     <li class="border-top bg-light"><a class="dropdown-item d-flex align-items-center"
                             href="chat.php.html"><i
                                 class="fe fe-help-circle p-1 rounded-circle bg-primary-transparent set me-2 fs-16"></i>Help</a>
                     </li>
                     <li><a class="dropdown-item d-flex align-items-center" href="sign-in-cover.php.html"><i
                                 class="fe fe-lock p-1 rounded-circle bg-primary-transparent ut me-2 fs-16"></i>Log
                             Out</a></li>
                 </ul>
             </li>
             <!-- End::header-element -->

         </ul>
         <!-- End::header-content-right -->

     </div>
     <!-- End::main-header-container -->

 </header>
 <!-- End::main-header -->
