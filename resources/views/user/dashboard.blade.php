<section class="section-dashboard">
    
    <style>
        @media only screen and (max-width: 600px) {
 .earning-stats-chart-legend-item__deposit {
    color: #260B5F;
    font-size: 18px;
    font-weight: 700;
}
}
    </style>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-block">
                    <h2 class="section-title">Dashboard</h2>
                </div>
                <div class="section-descr">
                    Smart control of your account. Fund, invest in high-yield strategies, withdraw funds.
                </div>
                <div class="s-dashboard-block">
                    <div class="row">
                        <div class="col-12">
                            <div class="dashboard-top-block">
                                <div class="row">
                                    <div class="col-12 col-md-4 col-lg-3 col-xl-2 order-2 order-md-1">
                                        <div class="dashboard-top-left">

                                            <div class="earning-stats-block soleyTotalEarningsChart"
                                                data-title="Total earnings">
                                                <div class="earning-stats-chart-block">
                                                    <canvas class="earning-stats-chart"
                                                        id="soleyTotalEarningsChartCanvas"></canvas>
                                                    <div class="earning-stats-chart-info">
                                                        <div class="earning-stats-chart-info__deposit soleyDynamicAmount"
                                                            data-active="0" data-value="0" data-plus-minutely="0"
                                                            data-balance-mask="$[amount]" data-round="2">
                                                            {{ currency() }}
                                                            {{ number_format(Auth::user()->totalIncome->sum('comm'), 2) }}
                                                        </div>
                                                        <div class="earning-stats-chart-info__title">
                                                            Total earnings
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="earning-stats-chart-legend-block">
                                                    <div class="earning-stats-chart-legend-items">
                                                        <div class="earning-stats-chart-legend-item">
                                                            <div class="earning-stats-chart-legend-item__line"
                                                                style="background-color: rgba(129, 43, 224, 1);">
                                                            </div>
                                                            <div class="earning-stats-chart-legend-item__content">
                                                                <div data-chart-value="0"
                                                                    class="soleyTotalEarningsChartDeposits earning-stats-chart-legend-item__deposit soleyDynamicAmount"
                                                                    data-active="0" data-value="0.000000000000"
                                                                    data-plus-minutely="" data-balance-mask="$[amount]"
                                                                    data-round="2">
                                                                    {{ currency() }}
                                                                    {{ number_format(Auth::user()->investment->sum('amount'), 2) }}
                                                                </div>
                                                                <div class="earning-stats-chart-legend-item__currency">
                                                                    Deposits</div>
                                                            </div>
                                                        </div>
                                                        <div class="earning-stats-chart-legend-item">
                                                            <div class="earning-stats-chart-legend-item__line"
                                                                style="background-color: rgba(29, 160, 37, 1);">
                                                            </div>
                                                            <div class="earning-stats-chart-legend-item__content">
                                                                <div data-chart-value="0"
                                                                    class="soleyTotalEarningsChartPartners earning-stats-chart-legend-item__deposit soleyDynamicAmount"
                                                                    data-active="0" data-value="0"
                                                                    data-plus-minutely="0" data-balance-mask="$[amount]"
                                                                    data-round="2">
                                                                    {{ $total_team }}</div>
                                                                <div class="earning-stats-chart-legend-item__currency">
                                                                    Partners</div>
                                                            </div>
                                                        </div>
                                                        <div class="earning-stats-chart-legend-item">
                                                            <div class="earning-stats-chart-legend-item__line"
                                                                style="background-color: rgba(29, 160, 37, 1);">
                                                            </div>
                                                            <div class="earning-stats-chart-legend-item__content">
                                                                <div data-chart-value="0"
                                                                    class="soleyTotalEarningsChartPartners earning-stats-chart-legend-item__deposit soleyDynamicAmount"
                                                                    data-active="0" data-value="0"
                                                                    data-plus-minutely="0" data-balance-mask="$[amount]"
                                                                    data-round="2">
                                                                   {{currency()}} {{ number_format($totalBusiness,2) }}</div>
                                                                <div class="earning-stats-chart-legend-item__currency">
                                                                    Team Business</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>






                                            </div>



                                        </div>
                                    </div>
                                    <div class="col-12 col-md-8 col-lg-6 col-xl-8 order-1 order-md-2">

                                        <div class="dashboard-top-center">


                                            <div class="deposits-empty-slider-block">
                                                <div class="deposits-empty-slider swiper-slider">
                                                    <div class="swiper">
                                                        <div class="swiper-wrapper">
                                                            <div class="deposits-empty-slide swiper-slide">

                                                                <div class="deposits-empty-block">
                                                                    <div class="deposits-empty-inner">
                                                                        <div class="deposits-empty-title">
                                                                            Your Profit is Waiting for You
                                                                        </div>
                                                                        <div class="deposits-empty-descr">
                                                                            on {{ siteName() }} Trading platform.
                                                                            Discover your new investment opportunities
                                                                        </div>
                                                                        <div class="deposits-empty-btn-block">
                                                                            <a href="{{route('user.invest')}}"
                                                                                class="deposits-empty-btn purple-btn continue-star-btn">
                                                                                <div class="continue-star-btn__text">
                                                                                    Invest now
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="deposits-empty-slide swiper-slide">

                                                                <div class="deposits-empty-block">
                                                                    <div class="deposits-empty-inner">
                                                                        <div class="deposits-empty-title">
                                                                            Start Earning Now
                                                                        </div>
                                                                        <div class="deposits-empty-descr">
                                                                            investing in {{ siteName() }} Trading
                                                                            safe high-yield investment strategies
                                                                        </div>
                                                                        <div class="deposits-empty-btn-block">
                                                                            <a href="{{route('user.invest')}}"
                                                                                class="deposits-empty-btn purple-btn continue-star-btn">
                                                                                <div class="continue-star-btn__text">
                                                                                    Invest now
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="deposits-empty-slide swiper-slide">

                                                                <div class="deposits-empty-block">
                                                                    <div class="deposits-empty-inner">
                                                                        <div class="deposits-empty-title">
                                                                            Invest, Earn, Withdraw
                                                                        </div>
                                                                        <div class="deposits-empty-descr">
                                                                            with {{ siteName() }} Trading platform
                                                                            unique investment opportunities
                                                                        </div>
                                                                        <div class="deposits-empty-btn-block">
                                                                            <a href="{{route('user.invest')}}"
                                                                                class="deposits-empty-btn purple-btn continue-star-btn">
                                                                                <div class="continue-star-btn__text">
                                                                                    Invest now
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-pagination"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3 col-xl-2 order-3 order-lg-3  d-lg-block">

                                        <div class="dashboard-top-right">
                                            <div class="partners-help-block">
                                                <div class="partners-help">
                                                    <div class="partners-help-top">
                                                        <div class="partners-help-icon"></div>
                                                        <div class="partners-help-content">
                                                            <div class="partners-help-title">
                                                               Tokens
                                                               
                                                            </div>
                                                          
                                                            <br>
                                                            <div class="earning-stats-chart-legend-block">
                                                            <div  class="earning-stats-chart-legend-items">
                                                            <div class="earning-stats-chart-legend-item">
                                                                    <div class="earning-stats-chart-legend-item__line"
                                                                        style="background-color: rgba(129, 43, 224, 1);">
                                                                    </div>
                                                                    <div class="earning-stats-chart-legend-item__content">
                                                                        <div data-chart-value="0"
                                                                            class="soleyTotalEarningsChartDeposits earning-stats-chart-legend-item__deposit soleyDynamicAmount"
                                                                            data-active="0" data-value="0.000000000000"
                                                                            data-plus-minutely="" data-balance-mask="$[amount]"
                                                                            data-round="2">
                                                                          
                                                                            {{ number_format(Auth::user()->investment->sum('token'), 2) }}
                                                                        </div>
                                                                        <div class="earning-stats-chart-legend-item__currency">
                                                                            SGA</div>
                                                                    </div>
                                                                </div>
                                                                <div class="earning-stats-chart-legend-item">
                                                                    <div class="earning-stats-chart-legend-item__line"
                                                                        style="background-color: rgba(129, 43, 224, 1);">
                                                                    </div>
                                                                    <div class="earning-stats-chart-legend-item__content">
                                                                        <div data-chart-value="0"
                                                                            class="soleyTotalEarningsChartDeposits earning-stats-chart-legend-item__deposit soleyDynamicAmount"
                                                                            data-active="0" data-value="0.000000000000"
                                                                            data-plus-minutely="" data-balance-mask="$[amount]"
                                                                            data-round="2">
                                                                          
                                                                            {{ number_format(Auth::user()->investment->sum('token')*tokenPrice(), 2) }}
                                                                        </div>
                                                                        <div class="earning-stats-chart-legend-item__currency">
                                                                            USDT</div>
                                                                    </div>
                                                                </div>

                                                                <div class="earning-stats-chart-legend-item">
                                                                    <div class="earning-stats-chart-legend-item__line"
                                                                        style="background-color: rgba(29, 160, 37, 1);">
                                                                    </div>
                                                                    <div class="earning-stats-chart-legend-item__content">
                                                                        <div data-chart-value="0"
                                                                            class="soleyTotalEarningsChartPartners earning-stats-chart-legend-item__deposit soleyDynamicAmount"
                                                                            data-active="0" data-value="0"
                                                                            data-plus-minutely="0" data-balance-mask="$[amount]"
                                                                            data-round="2">
                                                                            {{ tokenPrice() }}</div>
                                                                        <div class="earning-stats-chart-legend-item__currency">
                                                                            Live Rate</div>
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
                                </div>
                            </div>
                            <div class="dashboard-balance-block">

                                <div class="db-content-block db-content-block--balance">

                                    <div class="db-content-block-title-block">
                                        <div class="db-content-block-title">Account balance</div>

                                    </div>
                                    <div class="db-content-block-descr">
                                        To earn a lot is a {{ siteName() }} Trading’s lifestyle. Stay with us!
                                    </div>
                                    <div class="balance-items-block">
                                        <div class="balance-items">
                                            <div class="balance-item-wrapper">
                                                <div class="balance-item">
                                                    <div class="balance-item__icon">
                                                        <div class="currency-item__icon currency-item__icon--tether">
                                                            <img class="image"
                                                                src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/polkadot.svg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="balance-item__title">
                                                        Working Wallet
                                                    </div>
                                                    <div data-currency="usdt"
                                                        class="balance-item__balance soleyBalance soleyDynamicAmount"
                                                        data-active="0" data-round="8" data-value="0"
                                                        data-plus-minutely="0" data-balance-mask="[amount]">
                                                        {{ currency() }}
                                                        {{ number_format(Auth::user()->workingBalance(), 2) }}
                                                    </div>
                                                    <div class="balance-item__currency">
                                                        {{ generalDetail()->cur_text }}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="balance-item-wrapper">
                                                <div class="balance-item">
                                                    <div class="balance-item__icon">
                                                        <div class="currency-item__icon currency-item__icon--tether">
                                                            <img class="image"
                                                                src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/polkadot.svg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="balance-item__title">
                                                        Withdrawal Wallet
                                                    </div>
                                                    <div data-currency="usdt"
                                                        class="balance-item__balance soleyBalance soleyDynamicAmount"
                                                        data-active="0" data-round="8" data-value="0"
                                                        data-plus-minutely="0" data-balance-mask="[amount]">
                                                        {{ currency() }}
                                                        {{ number_format(Auth::user()->stakingBalance(), 2) }}
                                                    </div>
                                                    <div class="balance-item__currency">
                                                        {{ generalDetail()->cur_text }}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="balance-item-wrapper">
                                                <div class="balance-item">
                                                    <div class="balance-item__icon">
                                                        <div class="currency-item__icon currency-item__icon--tether">
                                                            <img class="image"
                                                                src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/polkadot.svg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="balance-item__title">
                                                        Cash Wallet
                                                    </div>
                                                    <div data-currency="usdt"
                                                        class="balance-item__balance soleyBalance soleyDynamicAmount"
                                                        data-active="0" data-round="8" data-value="0"
                                                        data-plus-minutely="0" data-balance-mask="[amount]">
                                                        {{ currency() }}
                                                        {{ number_format(Auth::user()->FundBalance(), 2) }}
                                                    </div>
                                                    <div class="balance-item__currency">
                                                        {{ generalDetail()->cur_text }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="balance-item-wrapper">
                                                <div class="balance-item">
                                                    <div class="balance-item__icon">
                                                        <div class="currency-item__icon currency-item__icon--usd-">
                                                            <img class="image"
                                                                src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/8705691.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="balance-item__title">
                                                        Total Deposit
                                                    </div>
                                                    <div data-currency="usdc"
                                                        class="balance-item__balance soleyBalance soleyDynamicAmount"
                                                        data-active="0" data-round="8" data-value="0"
                                                        data-plus-minutely="0" data-balance-mask="[amount]">
                                                        {{ currency() }}
                                                        {{ number_format(Auth::user()->investment->sum('amount'), 2) }}
                                                    </div>
                                                    <div class="balance-item__currency">
                                                        {{ generalDetail()->cur_text }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="balance-item-wrapper">
                                                <div class="balance-item">
                                                    <div class="balance-item__icon">
                                                        <div class="currency-item__icon currency-item__icon">
                                                            <img class="image"
                                                                src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/6303173.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="balance-item__title">
                                                        ALGORITHMIC PROFIT
                                                    </div>
                                                    <div data-currency="btc"
                                                        class="balance-item__balance soleyBalance soleyDynamicAmount"
                                                        data-active="0" data-round="8" data-value="0"
                                                        data-plus-minutely="0" data-balance-mask="[amount]">
                                                        {{ currency() }}
                                                        {{ number_format(Auth::user()->dailyIncentive->sum('comm'), 2) }}
                                                    </div>
                                                    <div class="balance-item__currency">
                                                        {{ generalDetail()->cur_text }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="balance-item-wrapper">
                                                <div class="balance-item">
                                                    <div class="balance-item__icon">
                                                        <div class="currency-item__icon currency-item__icon--ethereum">
                                                            <img class="image"
                                                                src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/leadership.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="balance-item__title">
                                                        Farming Profit
                                                    </div>
                                                    <div data-currency="eth"
                                                        class="balance-item__balance soleyBalance soleyDynamicAmount"
                                                        data-active="0" data-round="8" data-value="0"
                                                        data-plus-minutely="0" data-balance-mask="[amount]">
                                                        {{ currency() }}
                                                        {{ number_format(Auth::user()->level_bonus->sum('amount'), 2) }}
                                                    </div>
                                                    <div class="balance-item__currency">
                                                        {{ generalDetail()->cur_text }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="balance-item-wrapper">
                                                <div class="balance-item">
                                                    <div class="balance-item__icon">
                                                        <div
                                                            class="currency-item__icon currency-item__icon--binance-">
                                                            <img class="image"
                                                                src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/6303173.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="balance-item__title">
                                                        REWARD PROFIT
                                                    </div>
                                                    <div data-currency="bnb"
                                                        class="balance-item__balance soleyBalance soleyDynamicAmount"
                                                        data-active="0" data-round="8" data-value="0"
                                                        data-plus-minutely="0" data-balance-mask="[amount]">
                                                        {{ currency() }}
                                                        {{ number_format(Auth::user()->reward_bonus->sum('comm'), 2) }}
                                                    </div>
                                                    <div class="balance-item__currency">
                                                        {{ generalDetail()->cur_text }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="balance-item-wrapper">
                                                <div class="balance-item">
                                                    <div class="balance-item__icon">
                                                        <div class="currency-item__icon currency-item__icon--">
                                                            <img class="image"
                                                                src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/team.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="balance-item__title">
                                                        PARTNERS
                                                    </div>
                                                    <div data-currency="sol"
                                                        class="balance-item__balance soleyBalance soleyDynamicAmount"
                                                        data-active="0" data-round="8" data-value="0"
                                                        data-plus-minutely="0" data-balance-mask="[amount]">
                                                        {{ $total_team }}
                                                    </div>
                                                    <div class="balance-item__currency">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="balance-item-wrapper">
                                                <div class="balance-item">
                                                    <div class="balance-item__icon">
                                                        <div class="currency-item__icon currency-item__icon--polkadot">
                                                            <img class="image"
                                                                src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/polkadot.svg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="balance-item__title">
                                                        Total Withdrawal
                                                    </div>
                                                    <div data-currency="dot"
                                                        class="balance-item__balance soleyBalance soleyDynamicAmount"
                                                        data-active="0" data-round="8" data-value="0"
                                                        data-plus-minutely="0" data-balance-mask="[amount]">
                                                        {{ currency() }}
                                                        {{ number_format(Auth::user()->withdraw(), 2) }}
                                                    </div>
                                                    <div class="balance-item__currency">
                                                        {{ generalDetail()->cur_text }}
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div>

                                </div>

                            </div>


                            <div class="dashboard-affiliate-block">
                                <div class="row">

                                    <div class="col-12 col-lg-6 order-1 order-lg-2">
                                        <div class="dashboard-affiliate-block-right">
                                            <div class="db-content-block db-content-block--promo">
                                                <div class="row">
                                                    <div class="col-12 col-md-4 col-lg-12">

                                                        <div class="db-content-block-title-block">
                                                            <div class="db-content-block-title">
                                                                Increase your profit
                                                            </div>
                                                        </div>
                                                        <div class="db-content-block-descr">
                                                            Share the referral link with your partners and use <a
                                                                href="#">our promotional materials</a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-8 col-lg-12">

                                                        <div class="referral-link-field-block">
                                                            <div class="field-block field-block--can-copy">
                                                                <div class="field-title-block">
                                                                    <div class="field-title">
                                                                        Your referral link
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="field field--iconed field--input field--referral-link field--can-copy">
                                                                    <div class="field__icon"></div>
                                                                    <input type="text" name="Referral Link"
                                                                        autocomplete="off" required=""
                                                                        id="referral-link"
                                                                        placeholder="{{ asset('') }}register?ref={{ Auth::user()->username }}"
                                                                        value="{{ asset('') }}register?ref={{ Auth::user()->username }}"
                                                                        readonly>
                                                                    <div class="field-copy-btn-block">
                                                                        <button type="button" class="field-copy-btn"
                                                                            data-clipboard-target="#referral-link"
                                                                            aria-label="Copied">
                                                                            Copy
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="field-block ">
                                                                <div class="field-title-block">
                                                                    <div class="field-title">
                                                                        Upline
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="field field--iconed field--input field--secret-code ">
                                                                    <div class="field__icon"></div>
                                                                    <input class="" type="text"
                                                                        name="secret_code" autocomplete="off" readonly
                                                                        id=""
                                                                        value="{{ Auth::user()->sponsor_detail ? Auth::user()->sponsor_detail->username : '0' }}">
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="affiliate-promo-items-block">
                                                    <div class="affiliate-promo-items">
                                                        <div class="affiliate-promo-item-wrapper">
                                                            <div class="affiliate-promo-item"
                                                                style="min-height:120px;">
                                                                <div class="affiliate-promo-item__icon">
                                                                    <img class="image"
                                                                        src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/affiliate/picture.svg"
                                                                        alt="">
                                                                </div>
                                                                <div class="affiliate-promo-item__title">Banners</div>
                                                                <div class="affiliate-promo-item__btn-block">
                                                                    <a href="#"
                                                                        class="affiliate-promo-item__btn purple-bd-btn purple-bd-btn--small">Get</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="affiliate-promo-item-wrapper">
                                                            <div class="affiliate-promo-item"
                                                                style="min-height:120px;">
                                                                <div class="affiliate-promo-item__icon">
                                                                    <img class="image"
                                                                        src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/affiliate/pdf.svg"
                                                                        alt="">
                                                                </div>
                                                                <div class="affiliate-promo-item__title">PDF
                                                                    Presentations</div>
                                                                <div class="affiliate-promo-item__btn-block">
                                                                    <a href="javascript:void(0)"
                                                                        class="affiliate-promo-item__btn purple-bd-btn purple-bd-btn--small">Soon</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="affiliate-promo-item-wrapper">
                                                            <div class="affiliate-promo-item"
                                                                style="min-height:120px;">
                                                                <div class="affiliate-promo-item__icon">
                                                                    <img class="image"
                                                                        src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/affiliate/video.svg"
                                                                        alt="">
                                                                </div>
                                                                <div class="affiliate-promo-item__title">Video
                                                                    presentations</div>
                                                                <div class="affiliate-promo-item__btn-block">
                                                                    <a href="#"
                                                                        class="affiliate-promo-item__btn purple-bd-btn purple-bd-btn--small">Get</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 order-2 order-lg-1">
                                        <div class="dashboard-affiliate-block-left">
                                            <div class="db-content-block db-content-block--affiliate-programm">
                                                <div class="db-content-block-title-block">
                                                    <div class="db-content-block-title">
                                                        Affiliate program
                                                    </div>
                                                </div>
                                                <div class="db-content-block-descr">
                                                    Welcome to one of the world's best affiliate programs. Discover the
                                                    way to rise your profit!
                                                </div>







                                                <style>
                                                    .affiliate-programm-t-col--next-level .affiliate-programm-t-item-title {
                                                        display: block;
                                                    }

                                                    .affiliate-programm-t-col--next-level .affiliate-programm-t-col-inner {
                                                        margin: -10px;
                                                        padding: 10px;
                                                        border: navajowhite;
                                                        border-radius: 24px;
                                                    }
                                                </style>







                                                <div class="affiliate-programm-table-block">
                                                    <div class="affiliate-programm-table">
                                                        <div class="affiliate-programm-t-cols">
                                                            <div
                                                                class="affiliate-programm-t-col affiliate-programm-t-col--current-level">
                                                                <div class="affiliate-programm-t-col-inner">

                                                                    <div class="affiliate-programm-t-items">

                                                                        @for ($i = 1; $i < 16; $i++)
                                                                            @php
                                                                                $bonus = \DB::table('incomes')
                                                                                    ->where('user_id', Auth::user()->id)
                                                                                    ->where('remarks', 'Farming Profit')
                                                                                    ->where('level', $i)
                                                                                    ->sum('comm');
                                                                            @endphp

                                                                            <div class="affiliate-programm-t-item">
                                                                                <div
                                                                                    class="affiliate-programm-t-item-title">
                                                                                    Level {{ $i }} Bonus
                                                                                </div>
                                                                                <div
                                                                                    class="affiliate-programm-t-item-content">
                                                                                    {{ number_format($bonus, 2) }}
                                                                                    {{ generalDetail()->cur_text }}
                                                                                </div>
                                                                            </div>
                                                                        @endfor






                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div
                                                                class="affiliate-programm-t-col affiliate-programm-t-col--current-level">
                                                                <div class="affiliate-programm-t-col-inner">

                                                                    <div class="affiliate-programm-t-items">

                                                                        @for ($i = 16; $i < 31; $i++)
                                                                            @php
                                                                                $bonus = \DB::table('incomes')
                                                                                    ->where('user_id', Auth::user()->id)
                                                                                    ->where('remarks', 'Farming Profit')
                                                                                    ->where('level', $i)
                                                                                    ->sum('comm');
                                                                            @endphp

                                                                            <div class="affiliate-programm-t-item">
                                                                                <div
                                                                                    class="affiliate-programm-t-item-title">
                                                                                    Level {{ $i }} Bonus
                                                                                </div>
                                                                                <div
                                                                                    class="affiliate-programm-t-item-content">
                                                                                    {{ number_format($bonus, 2) }}
                                                                                    {{ generalDetail()->cur_text }}
                                                                                </div>
                                                                            </div>
                                                                        @endfor
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
                            </div>
                            <div class="dashboard-transactions-block">


                                <div class="db-content-block db-content-block--transactions">

                                    <div class="dashboard-transactions-block-left">
                                        <div class="db-content-block-title-block">
                                            <div class="db-content-block-title">
                                                Last transactions
                                            </div>
                                            <div class="db-content-block-title-to-all-link-block">
                                                <a href="/transactions/" class="db-content-block-title-to-all-link">
                                                    View all
                                                </a>
                                            </div>
                                        </div>
                                        <div class="db-content-block-descr">
                                            Control your transactions. Make deposits and withdraw your profit.
                                        </div>

                                        <div class="transaction-items-block">
                                            <div class="transaction-items">

												@foreach ($transaction_data as $value)
												<div class="transaction-item">
                                                    <div class="transaction-item-left">
                                                        <div class="transaction-item-id-block">
                                                            <div class="transaction-item-id">
                                                                <div class="transaction-item-id-content">
                                                                    <div class="transaction-item-id-title">
                                                                        #
                                                                    </div>
                                                                    <div class="transaction-item-id-value">
                                                                        <strong>{{$value->orderId}}</strong>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="transaction-item-status-block">


                                                            <div
                                                                class="transaction-item-status transaction-item-status--success">
                                                                Success
                                                            </div>


                                                        </div>
                                                        <div class="transaction-item-type-block">
                                                            <div class="transaction-item-type">
                                                                <div class="transaction-item-type-title"
                                                                    style="font-size:14px;">
																	{{$value->remarks}}
                                                                </div>
                                                                <div style="font-size:12px;text-transform: none"
                                                                    class="transaction-item-type-subtitle">
																	{{$value->rname}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="transaction-item-right">
                                                        <div class="transaction-item-info-block">
                                                            <div class="transaction-item-info">
                                                                <div class="transaction-item-info-currency">
                                                                    <div
                                                                        class="currency-item__icon currency-item__icon--tether">
                                                                        <img class="image"
                                                                            src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/tether.svg"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="transaction-item-info-content">
                                                                    <div class="transaction-item-info-amount"
                                                                        style="font-size:14px;">
                                                                        {{number_format($value->comm,2)}} USDT
                                                                    </div>
                                                                    <div class="transaction-item-info-date"
                                                                        style="font-size:12px;">
                                                                        {{date("D, d M Y", strtotime($value->created_at))}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="transaction-item-manage-links-block">
                                                            <div class="transaction-item-manage-links">
                                                            </div>
                                                        </div>
                                                        <div class="transaction-item-more-info-link-block">
                                                            <div
                                                                class="transaction-item-more-info-link-wrapper dropend">
                                                                <button class="transaction-item-more-info-link"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">More</button>
                                                                <div class="transaction-item-more-info-tooltip dropdown-menu"
                                                                    style="">
                                                                    <div
                                                                        class="transaction-item-more-info-tooltip-inner">
                                                                        <div
                                                                            class="transaction-item-more-info-tooltip__content">



                                                                            Strategy: <strong>{{$value->remarks}}
                                                                                </strong>



                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												@endforeach

                                              



                                            </div>
                                        </div>


                                    </div>
                                    <div class="dashboard-transactions-block-right">
                                        <div class="dashboard-sly-token-block">
                                            <div class="dashboard-sly-token-block-top">
                                                <div class="dashboard-sly-token-title-block">
                                                    <div class="dashboard-sly-token-title">
                                                        {{ siteName() }} token
                                                    </div>
                                                </div>
                                                <div class="dashboard-sly-token-price-block">
                                                    <div class="dashboard-sly-token-price-block-left">
                                                        <div class="dashboard-sly-token-price">
                                                            Soon
                                                        </div>
                                                    </div>
                                                    <div class="dashboard-sly-token-price-block-right">
                                                        <div class="dashboard-sly-token-price-title">
                                                            Price
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dashboard-sly-token-btn-block">

                                                    <a href="javascript:void(0)" class="purple-btn continue-btn">
                                                        <div class="continue-btn__text">
                                                            Soon
                                                        </div>
                                                        <div class="continue-btn__icon"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="dashboard-sly-token-block-bottom">
                                                <div class="dashboard-sly-token-descr">
                                                    Buy our native {{ siteName() }} Token and use it for your
                                                    benefits.
                                                </div>
                                                <div class="dashboard-sly-token-check-list">
                                                    <div class="dashboard-sly-token-check-list-item">
                                                        Increase your profit
                                                    </div>
                                                    <div class="dashboard-sly-token-check-list-item">
                                                        Pay {{ siteName() }} discounted fees
                                                    </div>
                                                    <div class="dashboard-sly-token-check-list-item">
                                                        Get profit from {{ siteName() }} rising cost
                                                    </div>
                                                </div>
                                                <div class="dashboard-sly-token-btn-block">

                                                    <a href="javascript:void(0)" class="purple-btn continue-btn">
                                                        <div class="continue-btn__text">
                                                            Soon
                                                        </div>
                                                        <div class="continue-btn__icon"></div>
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
        </div>
    </div>
</section>
