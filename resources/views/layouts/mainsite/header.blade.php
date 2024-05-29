<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <title>{{siteName()}} - Home</title>
    <meta name="description"
        content="{{siteName()}} is a unique crypto platform designed for comfortable high yield trading. It’s the future of investments, test it!">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="icon" href="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/favicon%EF%B9%96version=20.png">
    <meta property="og:image" content="/{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/preview.jpg?version=20">

    <link rel="stylesheet"
        href="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/libs/bootstrap/css/bootstrap.min%EF%B9%96version=20.css">

    <link rel="stylesheet"
        href="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/libs/priority-navigation-master/dist/priority-nav-core%EF%B9%96version=20.css">
    <link rel="stylesheet"
        href="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/libs/swiper/swiper.min%EF%B9%96version=20.css">
    <link rel="stylesheet"
        href="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/libs/bootstrap-select-1.14.0/dist/css/bootstrap-select.min%EF%B9%96version=20.css">
    <link rel="stylesheet"
        href="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/libs/plyr/dist/plyr%EF%B9%96version=20.css">
    <link rel="stylesheet"
        href="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/libs/ion.rangeSlider-master/css/ion.rangeSlider.min%EF%B9%96version=20.css">

    <link rel="stylesheet" href="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/css/main%EF%B9%96version=20.css">
    <link rel="stylesheet" href="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/css/media%EF%B9%96version=20.css">

    <style>
        .swiper-wrapper.disabled {
            transform: translate3d(0px, 0, 0) !important;
        }
    </style>



    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest.txt">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#6714bf">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

</head>




<body class="page page--trading-type ">

    <div class="page-loader-progress-block soleyProgress d-none">
        <div class="page-loader-progress soleyProgressBar" style="width: 50%"></div>
    </div>


    <div class="page-inner">












        <div class="mobile-panel-block">
            <div class="mobile-panel-top-block">





                <div class="mobile-panel-top">







                    <div class="mobile-auth-panel-block">
                        <div class="mobile-auth-panel">
                            <div class="mobile-auth-login-btn-block">
                                <a href="{{route('login')}}" class="mobile-auth-login-btn purple-btn">Sign in</a>
                            </div>
                            <div class="mobile-auth-registration-btn-block">
                                <a href="{{route('register')}}" class="mobile-auth-registration-btn purple-btn">Sign
                                    Up</a>
                            </div>
                        </div>
                    </div>


                    <div class="logo-wrapper">
                        <div class="logo-text">Products</div>
                    </div>

                </div>

                <a href="#" class="mobile-panel-close-btn"></a>
            </div>
            <div class="mobile-panel-content">
                <div class="func-mobile-menu-block">
                    <div class="func-mobile-menu">
                        <ul>
                            <li class="func-menu-item func-menu-item--algorithmic-trading" style="order:1">
                                <a href="{{route('login')}}" class="func-menu-link func-menu-link--algorithmic-trading">
                                    <div class="func-menu-link__icon">
                                        <img class="image"
                                            src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/func-menu/func-menu-link-icon-algorithmic-trading.svg"
                                            alt="">
                                    </div>
                                    <div class="func-menu-link__title">
                                        Algorithmic <br /> trading
                                    </div>
                                </a>
                            </li>

                            <li class="func-menu-item func-menu-item--affiliate-program">
                                <a href="{{route('team')}}" class="func-menu-link func-menu-link--affiliate-program">
                                    <div class="func-menu-link__icon">
                                        <img class="image"
                                            src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/func-menu/func-menu-link-icon-affiliate-program.svg"
                                            alt="">
                                    </div>
                                    <div class="func-menu-link__title">
                                        Affiliate <br /> program
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-menu-block">

                    <div class="mobile-menu">
                        <ul>
                            <li><a href="{{ route('about-us') }}">Company</a></li>

                            <li class="d-none"><a href="javascript:void(0)">Academy</a></li>
                            <li><a href="help-center">Help center</a></li>

                            <li><a href="{{route('contact-us')}}">Contact us</a></li>

                            {{-- <li><a href="javascript:void(0)">Token <div class="func-menu-link__soon">Soon</div></a>
                                --}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mobile-panel-bottom">
                <div class="topline-soc-block">
                    <div class="topline-soc">
                        <a href="https://t.me/sparkglobalai" target="_blank"
                            class="topline-soc-link topline-soc-link--telegram"></a>
                        <a href="https://www.youtube.com/@sparkglobalai" target="_blank"
                            class="topline-soc-link topline-soc-link--youtube"></a>
                        <a href="https://twitter.com/sparkglobalai" target="_blank"
                            class="topline-soc-link topline-soc-link--twitter"></a>
                        <a href="https://twitter.com/sparkglobalai" target="_blank"
                            class="topline-soc-link topline-soc-link--twitter"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-info-block soleyInfoBlock d-none">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-info">
                            <div class="page-info-text">Our official domains are <strong>sparkglobal.ai</strong></div>
                            <a href="javascript:void(0);" onclick="closeSoleyInfo();"
                                class="page-info-close soleyInfoBlockClose"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <header>

            <div class="topline-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12">




                            <div class="topline">
                                <div class="topline-left">
                                    <div class="topmenu-block">

                                    </div>
                                </div>
                                <div class="topline-center">
                                    <div class="topline-soc-block">
                                        <div class="topline-soc">
                                            <a href="https://t.me/sparkglobalai" target="_blank"
                                                class="topline-soc-link topline-soc-link--telegram"></a>
                                            <a href="https://www.youtube.com/@sparkglobalai" target="_blank"
                                                class="topline-soc-link topline-soc-link--youtube"></a>
                                            <a href="https://twitter.com/sparkglobalai" target="_blank"
                                                class="topline-soc-link topline-soc-link--twitter"></a>
                                            <a href="https://www.facebook.com/SparkGlobalAi/" target="_blank"
                                                class="topline-soc-link topline-soc-link--fb"></a>
                                            <a href="https://www.instagram.com/your_instagram_username/" target="_blank"
                                                class="topline-soc-link topline-soc-link--insta"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="topline-right">



                                    <div class="topline-lang-panel-block">
                                        <div class="topline-lang-panel">
                                            <a href="javascript:void(0)" class="topline-current-lang">
                                                <div class="topline-current-lang__arrow">
                                                </div>
                                                <?php 
                                                
                                                  $selectedLanguage = \DB::table('languages')->where('code',session()->get('lang'))->first();
                                                  $langName = $selectedLanguage?$selectedLanguage->name:"English";
                                                  $langImage = $selectedLanguage?$selectedLanguage->icon:"flag-UnitedStates.svg";
                                                ?>
                                                <div class="topline-current-lang__flag">
                                                    <img class="image"
                                                        src="{{ asset('') }}main/assets/language/{{$langImage}}"
                                                        alt="">
                                                </div>
                                                <div class="topline-current-lang__text">{{$langName}}</div>
                                            </a>
                                          
                                            <div class="topline-lang-dropdown">
                                                @foreach($language as $item)
                                                <div class="topline-lang-link-item ">
                                                 
                                                    <a href="{{url('/')}}/change/{{$item->code}}" 
                                                        class="topline-lang-link  @if(session('lang') == $item->code) active  @endif langSel">
                                                        <div class="topline-lang-link__flag">
                                                            <img class="image"
                                                                src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/flags/flag-UnitedStates.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="topline-lang-link__text-block">
                                                            <div class="topline-lang-link__text">{{ __($item->name) }}</div>
                                                        </div>
                                                    </a>
                                                 
                                                </div>
                                                @endforeach
                                            </div>
                                           
                                        </div>
                                    </div>


                                </div>
                            </div>







                        </div>
                    </div>
                </div>
            </div>

            <div class="toppanel-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="toppanel">
                                <div class="toppanel-left">
                                    <div class="logo-wrapper">
                                        <a href="{{ asset('') }}" class="logo">
                                            <div class="logo-img">
                                                <img src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/logo.png"
                                                    style="height: 71px;
													width: 201px;">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="topline-lang-panel-block">
                                        <div class="topline-lang-panel">
                                            <a href="javascript:void(0)" class="topline-current-lang">
                                                <div class="topline-current-lang__arrow">
                                                </div>
                                                <div class="topline-current-lang__flag">
                                                    <img class="image"
                                                        src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/flags/flag-UnitedStates.svg"
                                                        alt="">
                                                </div>
                                                <div class="topline-current-lang__text">English</div>
                                            </a>
                                            <div class="topline-lang-dropdown">
                                                <div class="topline-lang-link-item">
                                                    <a href="index%EF%B9%96lang=default.html"
                                                        class="topline-lang-link  active">
                                                        <div class="topline-lang-link__flag">
                                                            <img class="image"
                                                                src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/flags/flag-UnitedStates.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="topline-lang-link__text-block">
                                                            <div class="topline-lang-link__text">English</div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mobile-panel-btn-block">
                                        <a href='#' class="mobile-panel-btn"></a>
                                    </div>
                                </div>
                                <div class="toppanel-center">
                                    <div class="func-menu-block">
                                        <div class="func-menu">
                                            <ul>
                                                <li class="func-menu-item func-menu-item--algorithmic-trading"
                                                    style="order:1">
                                                    <a href="{{ route('ai-trading') }}"
                                                        class="func-menu-link func-menu-link--algorithmic-trading">
                                                        <div class="func-menu-link__icon">
                                                            <img class="image"
                                                                src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/func-menu/func-menu-link-icon-algorithmic-trading.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="func-menu-link__title">
                                                            Algorithmic <br /> trading
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="func-menu-item func-menu-item--algorithmic-trading"
                                                    style="order:1">
                                                    <a href="{{ route('team') }}"
                                                        class="func-menu-link func-menu-link--algorithmic-trading">
                                                        <div class="func-menu-link__icon">
                                                            <img class="image"
                                                                src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/func-menu/func-menu-link-icon-algorithmic-trading.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="func-menu-link__title">
                                                            Affiliate <br /> program
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="func-menu-item func-menu-item--algorithmic-trading"
                                                    style="order:1">
                                                    <a href="{{ route('about-us') }}"
                                                        class="func-menu-link func-menu-link--algorithmic-trading">
                                                        <div class="func-menu-link__icon">
                                                            <img class="image"
                                                                src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/func-menu/func-menu-link-icon-algorithmic-trading.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="func-menu-link__title">
                                                            Company
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="func-menu-item func-menu-item--algorithmic-trading"
                                                    style="order:1">
                                                    <a href="{{ route('contact-us') }}"
                                                        class="func-menu-link func-menu-link--algorithmic-trading">
                                                        <div class="func-menu-link__icon">
                                                            <img class="image"
                                                                src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/func-menu/func-menu-link-icon-algorithmic-trading.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="func-menu-link__title">
                                                            Contacts
                                                        </div>
                                                    </a>
                                                </li>



                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="toppanel-right">
                                    <div class="top-auth-panel-block">
                                        <div class="top-auth-panel">
                                            <div class="top-registration-btn-block" style="padding-left:0px;">
                                                <a href="{{ route('register') }}"
                                                    class="top-registration-btn purple-btn"
                                                    style="min-width:120px;">Sign Up</a>
                                            </div>
                                            <div class="top-login-btn-block" style="padding-left:14px;">
                                                @guest

                                                <a href="{{ route('login') }}" class="top-login-btn purple-tr-bd-btn">
                                                    <div class="top-login-btn__text">Sign in</div>
                                                </a>

                                                @else

                                                <a href="{{ route('user.dashboard') }}"
                                                    class="top-login-btn purple-tr-bd-btn">
                                                    <div class="top-login-btn__text">Dashboard</div>
                                                </a>

                                                @endguest

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>









        </header>