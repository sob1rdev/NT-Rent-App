<?php

declare(strict_types=1);
loadPartials('header');

?>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Tailwind CSS Saas & Software Landing Page Template">
<meta name="keywords" content="agency, application, business, clean, creative, cryptocurrency, it solutions, modern, multipurpose, nft marketplace, portfolio, saas, software, tailwind css">
<meta name="author" content="Shreethemes">
<meta name="website" content="https://shreethemes.in">
<meta name="email" content="support@shreethemes.in">
<meta name="version" content="2.2.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- favicon -->
<link rel="shortcut icon" href="/dashboard/assets/images/favicon.ico">

<!-- Css -->
<link href="/dashboard/assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
<!-- Main Css -->
<link href="/dashboard/assets/libs/simplebar/simplebar.min.css" rel="stylesheet">
<link href="/dashboard/assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/dashboard/assets/css/tailwind.min.css">

</head>

<body class="font-body text-base text-black dark:text-white dark:bg-slate-900">
<!-- Loader Start -->
<!-- <div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div> -->
<!-- Loader End -->


<div class="page-wrapper toggled">

<nav id="sidebar" class="sidebar-wrapper sidebar-dark">
        <div class="sidebar-content">
            <div class="sidebar-brand">
                <a href="/"><img src="/dashboard/assets/images/logo-light.png" alt=""></a>
            </div>

            <ul class="sidebar-menu border-t border-white/10" data-simplebar style="height: calc(100% - 70px);">
                <li>
                    <a href="/"><i class="mdi mdi-chart-bell-curve-cumulative me-2"></i>Bosh sahifaga o'tish</a>
                </li>

                <li>
                    <a href="explore-property.html"><i class="mdi mdi-home-city me-2"></i>Mening e'lonlarim</a>
                </li>

                <li>
                    <a href="/ads/create"><i class="mdi mdi-home-plus me-2"></i>E'lon qo'shish</a>
                </li>

                <li>
                    <a href="chat.html"><i class="mdi mdi-chat-outline me-2"></i>Chat</a>
                </li>

                <li>
                    <a href="/profile/setting"><i class="mdi mdi-account-edit me-2"> </i>Profil Sozlamalari</a>
                </li>

                <li class="sidebar-dropdown">
                    <a href="javascript:void(0)"><i class="mdi mdi-post-outline me-2"></i>Blog</a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li><a href="blog.html">Blogs</a></li>
                            <li><a href="blog-detail.html">Blog Detail</a></li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-dropdown">
                    <a href="javascript:void(0)"><i class="mdi mdi-login me-2"></i>Authentication</a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li><a href="/user/login">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                            <li><a href="signup-success.html">Signup Success</a></li>
                            <li><a href="/logout">Chiqish</a></li>
                            <li><a href="lock-screen.html">Lockscreen</a></li>
                        </ul>
                    </div>
                </li>

                <li class="relative lg:m-8 m-6 px-8 py-10 rounded-lg bg-gradient-to-b to-transparent from-slate-800 text-center">
                            <span class="relative z-10">
                                <span class="text-xl font-medium h5 text-white">Upgrade to Pro</span>

                                <span class="text-slate-400 mt-3 mb-5 block">Get one month free and subscribe to pro</span>

                                <a href="https://1.envato.market/hously" target="_blank" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-gray-500/5 hover:bg-gray-500 border-gray-500/10 hover:border-gray-500 text-white rounded-md">Subscribe</a>
                            </span>

                    <span class="mdi mdi-home-city-outline text-[160px] absolute top-1/2 -translate-y-1/2 start-0 end-0 mx-auto text-center opacity-[0.02] text-white z-0"></span>
                </li>
            </ul>
            <!-- sidebar-menu  -->
        </div>
    </nav>

    <!-- Start Page Content -->
    <main class="page-content bg-gray-50 dark:bg-slate-800">
        <!-- Top Header -->
        <div class="top-header">
            <div class="header-bar flex justify-between">
                <div class="flex items-center space-x-1">
                    <!-- Logo -->
                    <a href="#" class="xl:hidden block me-2">
                        <img src="/dashboard/assets/images/logo-icon-32.png" class="md:hidden block" alt="">
                        <span class="md:block hidden">
                                    <img src="/dashboard/assets/images/logo-dark.png" class="inline-block dark:hidden" alt="">
                                    <img src="/dashboard/assets/images/logo-light.png" class="hidden dark:inline-block" alt="">
                                </span>
                    </a>
                    <!-- Logo -->

                    <!-- show or close sidebar -->
                    <a id="close-sidebar" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md" href="javascript:void(0)">
                        <i data-feather="menu" class="size-4"></i>
                    </a>
                    <!-- show or close sidebar -->

                    <!-- Searchbar -->
                    <div class="ps-1.5">
                        <div class="form-icon relative sm:block hidden">
                            <i class="mdi mdi-magnify absolute top-1/2 -translate-y-1/2 mt-[1px] start-3"></i>
                            <input type="text" class="form-input w-56 ps-9 py-2 px-3 h-8 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-md outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 bg-white" name="s" id="searchItem" placeholder="Search...">
                        </div>
                    </div>
                    <!-- Searchbar -->
                </div>

                <ul class="list-none mb-0 space-x-1">
                    <!-- Country Dropdown -->
                    <li class="dropdown inline-block relative">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md" type="button">
                            <img src="/dashboard/assets/images/flags/usa.png" class="size-6 rounded-md" alt="">
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-36 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                            <ul class="list-none py-2 text-start">
                                <li class="my-1">
                                    <a href="" class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><img src="/dashboard/assets/images/flags/germany.png" class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt=""> German</a>
                                </li>
                                <li class="my-1">
                                    <a href="" class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><img src="/dashboard/assets/images/flags/italy.png" class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt=""> Italian</a>
                                </li>
                                <li class="my-1">
                                    <a href="" class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><img src="/dashboard/assets/images/flags/russia.png" class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt=""> Russian</a>
                                </li>
                                <li class="my-1">
                                    <a href="" class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><img src="/dashboard/assets/images/flags/spain.png" class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt=""> Spanish</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Country Dropdown -->

                    <!-- Notification Dropdown -->
                    <li class="dropdown inline-block relative">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md" type="button">
                            <i data-feather="bell" class="size-4"></i>
                            <span class="absolute top-0 end-0 flex items-center justify-center bg-red-600 text-white text-[10px] font-bold rounded-md size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-red-600 after:top-0 after:end-0 after:rounded-md after:animate-ping"></span>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-64 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                                    <span class="px-4 py-4 flex justify-between">
                                        <span class="font-semibold">Notifications</span>
                                        <span class="flex items-center justify-center bg-red-600/20 text-red-600 text-[10px] font-bold rounded-md w-5 max-h-5 ms-1">3</span>
                                    </span>
                            <ul class="py-2 text-start h-64 border-t border-gray-100 dark:border-gray-800" data-simplebar>
                                <li>
                                    <a href="#!" class="block font-medium py-1.5 px-4">
                                        <div class="flex items-center">
                                            <div class="size-10 rounded-md shadow shadow-green-600/10 dark:shadow-gray-700 bg-green-600/10 dark:bg-slate-800 text-green-600 dark:text-white flex items-center justify-center">
                                                <i data-feather="shopping-cart" class="size-4"></i>
                                            </div>
                                            <div class="ms-2">
                                                <span class="text-[15px] font-medium block">Order Complete</span>
                                                <small class="text-slate-400">15 min ago</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="block font-medium py-1.5 px-4">
                                        <div class="flex items-center">
                                            <img src="/dashboard/assets/images/client/04.jpg" class="size-10 rounded-md shadow dark:shadow-gray-700" alt="">
                                            <div class="ms-2">
                                                <span class="text-[15px] font-medium block"><span class="font-semibold">Message</span> from Luis</span>
                                                <small class="text-slate-400">1 hour ago</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="block font-medium py-1.5 px-4">
                                        <div class="flex items-center">
                                            <div class="size-10 rounded-md shadow shadow-green-600/10 dark:shadow-gray-700 bg-green-600/10 dark:bg-slate-800 text-green-600 dark:text-white flex items-center justify-center">
                                                <i data-feather="dollar-sign" class="size-4"></i>
                                            </div>
                                            <div class="ms-2">
                                                <span class="text-[15px] font-medium block"><span class="font-semibold">One Refund Request</span></span>
                                                <small class="text-slate-400">2 hour ago</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="block font-medium py-1.5 px-4">
                                        <div class="flex items-center">
                                            <div class="size-10 rounded-md shadow shadow-green-600/10 dark:shadow-gray-700 bg-green-600/10 dark:bg-slate-800 text-green-600 dark:text-white flex items-center justify-center">
                                                <i data-feather="truck" class="size-4"></i>
                                            </div>
                                            <div class="ms-2">
                                                <span class="text-[15px] font-medium block">Deliverd your Order</span>
                                                <small class="text-slate-400">Yesterday</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="block font-medium py-1.5 px-4">
                                        <div class="flex items-center">
                                            <img src="/dashboard/assets/images/client/05.jpg" class="size-10 rounded-md shadow dark:shadow-gray-700" alt="">
                                            <div class="ms-2">
                                                <span class="text-[15px] font-medium block"><span class="font-semibold">Cally</span> started following you</span>
                                                <small class="text-slate-400">2 days ago</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li><!--end dropdown-->
                    <!-- Notification Dropdown -->

                    <!-- User/Profile Dropdown -->
                    <li class="dropdown inline-block relative">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                            <span class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md"><img src="/dashboard/assets/images/client/07.jpg" class="rounded-md" alt=""></span>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                            <ul class="py-2 text-start">
                                <li>
                                    <a href="/profile" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-account-outline me-2"></i>Profile</a>
                                </li>
                                <li>
                                    <a href="chat.html" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-chat-outline me-2"></i>Chat</a>
                                </li>
                                <li>
                                    <a href="/profile/setting" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-cog-outline me-2"></i>Settings</a>
                                </li>
                                <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                                <li>
                                    <a href="lock-screen.html" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-lock-outline me-2"></i>Lockscreen</a>
                                </li>
                                <li>
                                    <a href="/user/login" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-logout me-2"></i>Logout</a>
                                </li>
                            </ul>
                        </div>
                    </li><!--end dropdown-->
                    <!-- User/Profile Dropdown -->
                </ul>
            </div>
        </div>
        <!-- Top Header -->

        <div class="container-fluid relative px-3">
            <div class="layout-specing">
                <div class="grid grid-cols-1">
                    <div class="profile-banner relative text-transparent rounded-md shadow dark:shadow-gray-700 overflow-hidden">
                        <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)">
                        <div class="relative shrink-0">
                            <img src="/dashboard/assets/images/bg.jpg" class="h-80 w-full object-cover" id="profile-banner" alt="">
                            <div class="absolute inset-0 bg-black/70"></div>
                            <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-12 grid-cols-1 gap-6 mt-6">
                    <div class="xl:col-span-3 lg:col-span-4 md:col-span-4">
                        <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <div class="profile-pic text-center">
                                <input id="pro-img" name="profile-image" type="file" class="hidden" onchange="loadFile(event)" />
                                <div>
                                    <div class="relative size-24 mx-auto">
                                        <img src="/dashboard/assets/images/client/07.jpg" class="rounded-full shadow dark:shadow-gray-700 ring-4 ring-slate-50 dark:ring-slate-800" id="profile-image" alt="">
                                        <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                    </div>

                                    <div class="mt-4">
                                        <h5 class="text-lg font-semibold"><?= (new \App\Session())->getName() ?></h5>
                                        <?php $userId=(new \App\Session())->getEmail() ?>
                                        <p class="text-slate-400"><?= $userId[0]['email'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="xl:col-span-9 lg:col-span-8 md:col-span-8">
                        <div class="grid grid-cols-1 gap-6">
                            <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <h5 class="text-lg font-semibold mb-4">Shaxsiy Ma'lumotlar :</h5>
                                <form>
                                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                                        <div>
                                            <label class="form-label font-medium">Foydalanuvchi nomi : <span class="text-red-600"></span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                                <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="Foydalanuvchi nomi:" id="username" name="username" required="">
                                            </div>
                                        </div>

                                        <div>
                                            <label class="form-label font-medium">Elektron pochta : <span class="text-red-600"></span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                                <input type="email" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="Elektron pochta" name="email" required="">
                                            </div>
                                        </div>

                                        <div>
                                            <label class="form-label font-medium">Lavozim : </label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="bookmark" class="size-4 absolute top-3 start-4"></i>
                                                <input name="name" id="occupation" type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="Lavozim :">
                                            </div>
                                        </div>

                                        <div>
                                            <label class="form-label font-medium">Tug'ilgan kun : </label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="gift" class="size-4 absolute top-3 start-4"></i>
                                                <input name="name" id="occupation" type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="Tug'ilgan kun :">
                                            </div>
                                        </div>

                                        <div>
                                            <label class="form-label font-medium">Ko'nikmalar : </label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="bookmark" class="size-4 absolute top-3 start-4"></i>
                                                <input name="name" id="occupation" type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="Ko'nikmalar :">
                                            </div>
                                        </div>
                                    </div><!--end grid-->

                                    <input type="submit" id="submit" name="send" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5" value="O'zgarishlarni saqlash">
                                </form><!--end form-->
                            </div>

                            <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                                    <div>
                                        <h5 class="text-lg font-semibold mb-4">Aloqa Ma'lumotlari :</h5>

                                        <form>
                                            <div class="grid grid-cols-1 gap-5">
                                                <div>
                                                    <label class="form-label font-medium">Telefon raqami :</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="phone" class="size-4 absolute top-3 start-4"></i>
                                                        <input id="phone" name="phone" type="tel" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="+998 (__) ___-__-__">
                                                    </div>
                                                </div>

                                                <div>
                                                    <label for="url" class="form-label font-medium">Telegram :</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="globe" class="size-4 absolute top-3 start-4"></i>
                                                        <input name="url" id="url" type="url" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="Telegramingiz :">
                                                    </div>
                                                </div>

                                            </div><!--end grid-->

                                            <button class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">Qo'shish</button>
                                        </form>
                                    </div><!--end col-->

                                    <div>
                                        <h5 class="text-lg font-semibold mb-4">Parolni Yangilash :</h5>
                                        <form>
                                            <div class="grid grid-cols-1 gap-5">
                                                <div>
                                                    <label class="form-label font-medium">Eski parol :</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="key" class="size-4 absolute top-3 start-4"></i>
                                                        <input type="password" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="Eski parolni kiriting" required="">
                                                    </div>
                                                </div>

                                                <div>
                                                    <label class="form-label font-medium">Yangi parol :</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="key" class="size-4 absolute top-3 start-4"></i>
                                                        <input type="password" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="Yangi parol kiriting" required="">
                                                    </div>
                                                </div>

                                                <div>
                                                    <label class="form-label font-medium">Yangi parolni qayta kiriting :</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="key" class="size-4 absolute top-3 start-4"></i>
                                                        <input type="password" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="Yangi parolni qayta kiriting" required="">
                                                    </div>
                                                </div>

                                                <input type="submit" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5" value="Saqlash">
                                            </div><!--end grid-->
                                        </form>
                                    </div><!--end col-->
                                </div><!--end grid-->
                            </div><!--end p-6-->
                        </div><!--end grid-->
                    </div><!--end col-->
                </div>
                <!-- End Content -->
            </div>
        </div><!--end container-->

        <!-- Footer Start -->
        <footer class="shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 px-6 py-4">
            <div class="container-fluid">
                <div class="grid grid-cols-1">
                    <div class="sm:text-start text-center mx-md-2">
                        <p class="mb-0 text-slate-400">© <script>document.write(new Date().getFullYear())</script> Hously. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- End -->
    </main>
    <!--End page-content" -->
</div>
<!-- page-wrapper -->

<!-- Switcher -->
<div class="fixed top-[30%] -end-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i data-feather="moon" class="size-[18px] text-yellow-500"></i>
                    <i data-feather="sun" class="size-[18px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] size-7"></span>
                </label>
            </span>
</div>
<!-- Switcher -->

<!-- LTR & RTL Mode Code -->
<div class="fixed top-[40%] -end-3 z-50">
    <a href="" id="switchRtl">
        <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-700 font-bold rtl:block ltr:hidden" >LTR</span>
        <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-700 font-bold ltr:block rtl:hidden">RTL</span>
    </a>
</div>
<!-- LTR & RTL Mode Code -->

<!-- JAVASCRIPTS -->
<script src="/dashboard/assets/libs/feather-icons/feather.min.js"></script>
<script src="/dashboard/assets/libs/simplebar/simplebar.min.js"></script>
<script src="/dashboard/assets/js/plugins.init.js"></script>
<script src="/dashboard/assets/js/app.js"></script>
<!-- JAVASCRIPTS -->
</body>
</html>

<?php
loadPartials(path: 'footer', loadFromPublic: false);
?>