<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <title>Dashboard</title>
    <meta name="description"
        content="{{ siteName() }} is a unique crypto platform designed for comfortable high yield trading. It’s the future of investments, test it!">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="icon" href="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/favicon%EF%B9%96version=20.png">
    <meta property="og:image" content="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/preview.jpg?version=20">

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
  <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    <style>
        .swiper-wrapper.disabled {
            transform: translate3d(0px, 0, 0) !important;
        }
    </style>


    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#6714bf">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

</head>




<body class="page page--dashboard modal-open">

    <div class="page-loader-progress-block soleyProgress d-none">
        <div class="page-loader-progress soleyProgressBar" style="width: 50%"></div>
    </div>


    <div class="page-inner">












        <div class="mobile-panel-block">
            <div class="mobile-panel-top-block">





                <div class="mobile-panel-top">






                    <div class="db-top-mobile-menu-block">
                        <div class="db-top-mobile-menu">
                            <ul>


                                <li class="db-topmenu-item db-topmenu-item--dashboard {{menuActive('user.dashboard')}}">
                                    <a href="{{ route('user.dashboard') }}"
                                        class="db-topmenu-link db-topmenu-link--dashboard">
                                        <div class="db-topmenu-link__icon"></div>
                                        <div class="db-topmenu-link__text">Dashboard</div>
                                    </a>
                                </li>

                                <li class="db-topmenu-item db-topmenu-item--refill {{menuActive('user.AddFund')}}">
                                    <a href="{{route('user.AddFund')}}" class="db-topmenu-link db-topmenu-link--refill">
                                        <div class="db-topmenu-link__icon"></div>
                                        <div class="db-topmenu-link__text">Top up</div>
                                    </a>
                                </li>

                                <li class="db-topmenu-item db-topmenu-item--withdrawal {{menuActive('user.transfer-fund')}}">
                                    <a href="{{route('user.transfer-fund')}}" class="db-topmenu-link db-topmenu-link--withdrawal">
                                        <div class="db-topmenu-link__icon"></div>
                                        <div class="db-topmenu-link__text">Transfer</div>
                                    </a>
                                </li>
                                
                                <li class="db-topmenu-item db-topmenu-item--deposits {{menuActive('user.invest')}}">
                                    <a href="{{ route('user.invest') }}"
                                        class="db-topmenu-link db-topmenu-link--deposits">
                                        <div class="db-topmenu-link__icon"></div>
                                        <div class="db-topmenu-link__text">Deposits</div>
                                    </a>
                                </li>
                                <li class="db-topmenu-item db-topmenu-item--withdrawal {{menuActive('user.Withdraw')}}">
                                    <a href="{{ route('user.Withdraw') }}"
                                        class="db-topmenu-link db-topmenu-link--withdrawal">
                                        <div class="db-topmenu-link__icon"></div>
                                        <div class="db-topmenu-link__text">Withdraw</div>
                                    </a>
                                </li>
                                <li class="db-topmenu-item db-topmenu-item--transactions {{menuActive('user.all-income')}}">
                                    <a href="{{ route('user.all-income') }}"
                                        class="db-topmenu-link db-topmenu-link--transactions">
                                        <div class="db-topmenu-link__icon"></div>
                                        <div class="db-topmenu-link__text">Transactions</div>
                                    </a>
                                </li>
                                <li class="db-topmenu-item db-topmenu-item--affiliate {{menuActive('user.referral-team')}}">
                                    <a href="{{ route('user.referral-team') }}"
                                        class="db-topmenu-link db-topmenu-link--affiliate">
                                        <div class="db-topmenu-link__icon"></div>
                                        <div class="db-topmenu-link__text">Partners</div>
                                    </a>
                                </li> 
                                
                                <li class="db-topmenu-item db-topmenu-item--affiliate {{menuActive('user.reward-status')}}">
                                    <a href="{{ route('user.reward-status') }}"
                                        class="db-topmenu-link db-topmenu-link--affiliate">
                                        <div class="db-topmenu-link__icon"></div>
                                        <div class="db-topmenu-link__text">Rewards</div>
                                    </a>
                                </li>
                                <li class="db-topmenu-item db-topmenu-item--wallets {{menuActive('user.wallets')}}">
                                    <a href="{{ route('user.wallets') }}"
                                        class="db-topmenu-link db-topmenu-link--wallets">
                                        <div class="db-topmenu-link__icon"></div>
                                        <div class="db-topmenu-link__text">Wallets</div>
                                    </a>
                                </li>
                                <li class="db-topmenu-item db-topmenu-item--settings {{menuActive('user.profile')}}">
                                    <a href="{{ route('user.profile') }}"
                                        class="db-topmenu-link db-topmenu-link--settings">
                                        <div class="db-topmenu-link__icon"></div>
                                        <div class="db-topmenu-link__text">Settings</div>
                                    </a>
                                </li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                                <li class="db-topmenu-item db-topmenu-item--logout">
                                    <a href="{{ route('logout') }}" 
                                    onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" class="db-topmenu-link db-topmenu-link--logout">
                                        <div class="db-topmenu-link__icon"></div>
                                        <div class="db-topmenu-link__text">Logout</div>
                                    </a>
                                </li>
                            </ul>
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
                                <a href="{{route('ai-trading')}}"
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

                            <li class="func-menu-item func-menu-item--affiliate-program">
                                <a href="{{route('team')}}"
                                    class="func-menu-link func-menu-link--affiliate-program">
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
               
            </div>
            <div class="mobile-panel-bottom">
                <div class="topline-soc-block">
                    <div class="topline-soc">
                        <a href="https://t.me" target="_blank"
                            class="topline-soc-link topline-soc-link--telegram"></a>
                        <a href="https://youtu.be/iY7gTFiB6G4" target="_blank"
                            class="topline-soc-link topline-soc-link--youtube"></a>
                        <a href="https://twitter.com/" target="_blank"
                            class="topline-soc-link topline-soc-link--twitter"></a>
                    </div>
                </div>
            </div>
        </div>

      
        <header>
           
            <div class="db-topline-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="db-topline">
                                <div class="db-topline-left">

                                    <div class="logo-wrapper">
                                        <a href="{{ route('Index') }}" class="logo">
                                            <div class="logo-img">
                                                <img src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/logo.png"
                                                    style="width:181px;  ">
                                            </div>
                                        </a>
                                    </div>

                                    <div class="mobile-panel-btn-block">
                                        <a href='#' class="mobile-panel-btn"></a>
                                    </div>




                                </div>
                                <div class="db-topline-center">




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
                                                    <a href="/account/?lang=default"
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
                                </div>
                                <div class="db-topline-right">

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
                                                    <a href="/account/?lang=default"
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
                                    <div class="topline-logout-btn-block">
                                        <a href="{{ route('logout') }}" 
                                        onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"  class="topline-logout-btn">
                                            <div class="topline-logout-btn__text">
                                                Logout
                                            </div>
                                            <div class="topline-logout-btn__icon"></div>
                                        </a>
                                    </div>
                                    <div class="db-top-new-dep-btn-block">
                                        <a href="{{route('user.invest')}}" class="db-top-btn db-top-new-dep-btn purple-btn">
                                            <div class="db-top-new-dep-btn__title">Invest now</div>
                                            <div class="db-top-new-dep-btn__icon"></div>
                                        </a>
                                    </div>
                                    <div class="mobile-panel-btn-block">
                                        <a href='#' class="mobile-panel-btn"></a>
                                    </div>

                                </div>
                            </div>





                        </div>
                    </div>
                </div>
            </div>



            </br>

            <div class="db-toppanel-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="db-toppanel">
                                <div class="db-toppanel-left">
                                    <div class="db-topmenu-block">
                                        <div class="db-topmenu">
                                            <ul>
                                                <li class="db-topmenu-item db-topmenu-item--dashboard {{menuActive('user.dashboard')}}">
                                                    <a href="{{ route('user.dashboard') }}"
                                                        class="db-topmenu-link db-topmenu-link--dashboard">
                                                        <div class="db-topmenu-link__icon"></div>
                                                        <div class="db-topmenu-link__text">Dashboard</div>
                                                    </a>
                                                </li>

                                                <li class="db-topmenu-item db-topmenu-item--refill {{menuActive('user.AddFund')}}">
													<a href="{{route('user.AddFund')}}" class="db-topmenu-link db-topmenu-link--refill">
														<div class="db-topmenu-link__icon"></div>
														<div class="db-topmenu-link__text">Top up</div>
													</a>
												</li>

                                                <li class="db-topmenu-item db-topmenu-item--withdrawal {{menuActive('user.transfer-fund')}}">
													<a href="{{route('user.transfer-fund')}}" class="db-topmenu-link db-topmenu-link--withdrawal">
														<div class="db-topmenu-link__icon"></div>
														<div class="db-topmenu-link__text">Transfer</div>
													</a>
												</li>
                                                
                                                <li class="db-topmenu-item db-topmenu-item--deposits {{menuActive('user.invest')}}">
                                                    <a href="{{ route('user.invest') }}"
                                                        class="db-topmenu-link db-topmenu-link--deposits">
                                                        <div class="db-topmenu-link__icon"></div>
                                                        <div class="db-topmenu-link__text">Deposits</div>
                                                    </a>
                                                </li>
                                                <li class="db-topmenu-item db-topmenu-item--withdrawal {{menuActive('user.Withdraw')}}">
                                                    <a href="{{ route('user.Withdraw') }}"
                                                        class="db-topmenu-link db-topmenu-link--withdrawal">
                                                        <div class="db-topmenu-link__icon"></div>
                                                        <div class="db-topmenu-link__text">Withdraw</div>
                                                    </a>
                                                </li>
                                                <li class="db-topmenu-item db-topmenu-item--transactions {{menuActive('user.all-income')}}">
                                                    <a href="{{ route('user.all-income') }}"
                                                        class="db-topmenu-link db-topmenu-link--transactions">
                                                        <div class="db-topmenu-link__icon"></div>
                                                        <div class="db-topmenu-link__text">Transactions</div>
                                                    </a>
                                                </li>
                                                
                                                 <li class="db-topmenu-item db-topmenu-item--affiliate {{menuActive('user.reward-status')}}">
                                                    <a href="{{ route('user.reward-status') }}"
                                                        class="db-topmenu-link db-topmenu-link--affiliate">
                                                        <div class="db-topmenu-link__icon"></div>
                                                        <div class="db-topmenu-link__text">Rewards</div>
                                                    </a>
                                                </li>
                                
                                                <li class="db-topmenu-item db-topmenu-item--affiliate {{menuActive('user.referral-team')}}">
                                                    <a href="{{ route('user.referral-team') }}"
                                                        class="db-topmenu-link db-topmenu-link--affiliate">
                                                        <div class="db-topmenu-link__icon"></div>
                                                        <div class="db-topmenu-link__text">Partners</div>
                                                    </a>
                                                </li>
                                                <li class="db-topmenu-item db-topmenu-item--wallets {{menuActive('user.wallets')}}">
                                                    <a href="{{ route('user.wallets') }}"
                                                        class="db-topmenu-link db-topmenu-link--wallets">
                                                        <div class="db-topmenu-link__icon"></div>
                                                        <div class="db-topmenu-link__text">Wallets</div>
                                                    </a>
                                                </li>
                                                <li class="db-topmenu-item db-topmenu-item--settings {{menuActive('user.profile')}}">
                                                    <a href="{{ route('user.profile') }}"
                                                        class="db-topmenu-link db-topmenu-link--settings">
                                                        <div class="db-topmenu-link__icon"></div>
                                                        <div class="db-topmenu-link__text">Settings</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="db-toppanel-right">
                                    <div class="db-top-buttons-panel-block">
                                        <div class="db-top-buttons-panel">
                                            <div class="db-top-buttons">
                                                <div class="db-top-btn-wrapper">
                                                    <a href="{{ route('user.invest') }}"
                                                        class="db-top-btn db-top-new-dep-btn purple-btn">
                                                        <div class="db-top-new-dep-btn__title">Invest now</div>
                                                        <div class="db-top-new-dep-btn__icon"></div>
                                                    </a>
                                                </div>
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
