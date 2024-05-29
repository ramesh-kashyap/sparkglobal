<section class="section-affiliate">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-block">
                    <h2 class="section-title">Partners</h2>
                </div>
                <div class="section-descr">
                    Monitor your affiliates' activities and track your progress through the affiliate program.
                </div>
                <div class="s-affiliate-block">
                    <div class="row">

                        <div class="col-12 col-lg-6 order-1 order-lg-2">
                            <div class="s-affiliate-top-right">
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
                                                <div class="affiliate-promo-item" style="min-height:120px;">
                                                    <div class="affiliate-promo-item__icon">
                                                        <img class="image"
                                                            src="{{asset('')}}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/affiliate/picture.svg"
                                                            alt="">
                                                    </div>
                                                    <div class="affiliate-promo-item__title">Banners</div>
                                                    <div class="affiliate-promo-item__btn-block">
                                                        <a href="/promo/"
                                                            class="affiliate-promo-item__btn purple-bd-btn purple-bd-btn--small">Get</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="affiliate-promo-item-wrapper">
                                                <div class="affiliate-promo-item" style="min-height:120px;">
                                                    <div class="affiliate-promo-item__icon">
                                                        <img class="image"
                                                            src="{{asset('')}}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/affiliate/pdf.svg"
                                                            alt="">
                                                    </div>
                                                    <div class="affiliate-promo-item__title">PDF Presentations</div>
                                                    <div class="affiliate-promo-item__btn-block">
                                                        <a href="javascript:void(0)"
                                                            class="affiliate-promo-item__btn purple-bd-btn purple-bd-btn--small">Soon</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="affiliate-promo-item-wrapper">
                                                <div class="affiliate-promo-item" style="min-height:120px;">
                                                    <div class="affiliate-promo-item__icon">
                                                        <img class="image"
                                                            src="{{asset('')}}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/affiliate/video.svg"
                                                            alt="">
                                                    </div>
                                                    <div class="affiliate-promo-item__title">Video presentations</div>
                                                    <div class="affiliate-promo-item__btn-block">
                                                        <a href="/promo/"
                                                            class="affiliate-promo-item__btn purple-bd-btn purple-bd-btn--small">Get</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-8 col-lg-6 order-2 order-lg-1">
                            <div class="s-affiliate-top-left">
                                <div class="db-content-block db-content-block--affiliate-programm">
                                    <div class="db-content-block-title-block">
                                        <div class="db-content-block-title">
                                            Affiliate program
                                        </div>
                                    </div>
                                    <div class="db-content-block-descr">
                                        Welcome to one of the world's best affiliate programs. Discover the way to rise
                                        your profit!
                                    </div>
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
                        <div class="col-12 col-md-4 col-lg-2 col-xl-2 order-3 order-lg-3">
                            <div class="s-affiliate-bottom-left">
                                <div class="partners-stats-block soleyTotalEarningsChart" data-title="Total earnings">



                                    <div class="earning-stats-chart-block">
                                        <canvas class="earning-stats-chart"
                                            id="soleyTotalEarningsChartCanvas"></canvas>
                                        <div class="earning-stats-chart-info">
                                            <div class="earning-stats-chart-info__deposit soleyDynamicAmount"
                                                data-active="0" data-value="0.175235" data-plus-minutely="0"
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
                                                    <div data-chart-value="0.175235"
                                                        class="soleyTotalEarningsChartDeposits earning-stats-chart-legend-item__deposit soleyDynamicAmount"
                                                        data-active="0" data-value="0.175235000000"
                                                        data-plus-minutely="0" data-balance-mask="$[amount]"
                                                        data-round="2">
                                                        {{ currency() }}
                                                        {{ number_format(Auth::user()->investment->sum('amount'), 2) }}
                                                    </div>
                                                    <div class="earning-stats-chart-legend-item__currency">
                                                        Deposits</div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>












                                </div>

                                <div class="partners-help-block">
                                    <div class="partners-help">



                                        <div class="partners-help-top">
                                            <div class="partners-help-icon"></div>
                                            <div class="partners-help-content">
                                                <div class="partners-help-title">
                                                    Any questions?
                                                </div>
                                                <div class="partners-help-descr">
                                                    Visit Soley Help center now, and you will find proper answers.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="partners-help-btn-block">
                                            <a href="/help-center/"
                                                class="partners-help-btn purple-btn purple-btn--small">
                                                Help center
                                            </a>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-lg-10 col-xl-8 order-4 order-lg-4">

                            <div class="s-affiliate-bottom-center">

                                <div class="partners-block myPartners">

                                    <div class="partners-filter-block soleySearch">
                                        <div class="partners-filter-heading">
                                            <div class="partners-filter-heading-inner">
                                                <div class="partners-filter-title-block">
                                                    <div class="partners-filter-title">
                                                        Partner <span class="text--purple">Search</span>
                                                    </div>
                                                </div>
                                                <div class="partners-accepted-filters-block">
                                                    <div class="partners-accepted-filters">
                                                        <div class="transactions-accepted-filter-wrapper">
                                                            <div class="transactions-accepted-filter "
                                                                style="padding-right:12px;">
                                                                <div class="transactions-accepted-filter__title ">
                                                                    All
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="partners-filter-heading-arrow"></div>
                                        </div>
                                        <div class="partners-filter-body">
                                            <div class="partners-filter-form-block">
                                                <form action="{{route('user.referral-team')}}" method="GET"
                                                    class="form partners-filter-form soleySearch">
                                                    <div class="partners-filter-form-cols">
                                                        <div class="partners-filter-form-col">

                                                            <div class="field-block">
                                                                <div class="field-title-block">
                                                                    <div class="field-title">
                                                                        Search
                                                                    </div>
                                                                    <div class="field-reset-link-block">
                                                                        <a href="javascript:void(0)"
                                                                            class="field-reset-link soleySearchReset">
                                                                            <div class="field-reset-link__icon">
                                                                            </div>
                                                                            <div class="field-reset-link__text">
                                                                                Reset</div>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                                <div class="field field--iconed field--select">
                                                                    <input type="text" style="padding-left: 24px"  Placeholder="Search" name="search"  value='{{@$search}}'>  
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="partners-filter-form-col">

                                                            <div class="field-block">
                                                                <div class="field-title-block">
                                                                    <div class="field-title">
                                                                        Level
                                                                    </div>
                                                                    <div class="field-reset-link-block">
                                                                        <a href="javascript:void(0)"
                                                                            class="field-reset-link soleySearchReset">
                                                                            <div class="field-reset-link__icon">
                                                                            </div>
                                                                            <div class="field-reset-link__text">
                                                                                Reset</div>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                                <div class="field field--iconed field--select">
                                                                    <select name="selected_level"
                                                                        class="select select--partners-status">
                                                                        @for ($l=1;$l<=$max_lenght;$l++)

                                                                        <option
                                                                            data-content='<div class="select-item"><div class="select-item__text">Level {{$l}}</div></div>'
                                                                            value="{{$l}}" <?php echo  (Session::get('selected_level')==$l)?"selected":""?>>Level {{$l}}</option>
                                                                   

                                                                            @endfor

                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="transactions-filter-form-col">

                                                            <div class="field-block">
                                                                <div class="field-title-block">
                                                                    <div class="field-title">
                                                                        Limit
                                                                    </div>
                                                                    <div class="field-reset-link-block">
                                                                        <a href="javascript:void(0);"
                                                                            class="soleySearchReset field-reset-link">
                                                                            <div class="field-reset-link__icon">
                                                                            </div>
                                                                            <div class="field-reset-link__text">
                                                                                Reset</div>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                                <div class="field field--iconed field--select">
                                                                    <select name="limit"
                                                                        class="select select--status">

                                                                        <option
                                                                            data-content='<div class="select-item"><div class="select-item__text">10</div></div>'
                                                                            value="10">10</option>
                                                                        <option
                                                                            data-content='<div class="select-item"><div class="select-item__text">25</div></div>'
                                                                            value="25">25</option>
                                                                        <option
                                                                            data-content='<div class="select-item"><div class="select-item__text">50</div></div>'
                                                                            value="50">50</option>
                                                                        <option
                                                                            data-content='<div class="select-item"><div class="select-item__text">100</div></div>'
                                                                            value="100">100</option>


                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="partners-filter-form-manage-panel-block">
                                                        <div class="partners-filter-form-manage-panel">
                                                            <div class="partners-filter-form-manage-btn-wrapper">
                                                                <button type="submit"
                                                                    class="purple-btn partners-filter-submit-btn">Show</button>
                                                            </div>
                                                            <div class="partners-filter-form-manage-btn-wrapper">
                                                                <a href="/partners/"
                                                                    class="partners-filter-reset-btn">Reset</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="partner-items-block">
                                        <div class="cab-title">Level {{Session::get('selected_level')}} Referrals:</div>
                                        <br>
                                        <div class="partner-items">

                                            <?php if(is_array($direct_team) || is_object($direct_team)){ ?>

                                                <?php
                                                   date_default_timezone_set('UTC');
                                                $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
                                                @foreach ($direct_team as $value)


                                            <div class="partner-item">
                                                <div class="partner-item-heading">
                                                    <div class="partner-item-h-left">
                                                        <div class="partner-item-h-left-inner">
                                                            <div class="partner-item-h-info-block">
                                                                <div class="partner-item-h-info">
                                                                    <div class="partner-item-h-info-level">
                                                                        <div class="partner-item-h-info-level__count">
                                                                            {{Session::get('selected_level')}}</div>
                                                                        <div class="partner-item-h-info-level__title">
                                                                            Level</div>
                                                                    </div>
                                                                    <div class="partner-item-h-info-content">
                                                                        <div class="partner-item-h-info-name">
                                                                            {{$value->name}}  
                                                                        </div>
                                                                        <div class="partner-item-h-info-date">
                                                                            {{date("D, d M Y", strtotime($value->created_at))}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="partner-item-h-status-block">
                                                                <div
                                                                    class="partner-item-h-status partner-item-h-status--{{ $value->active_status == 'Active' ? 'active' : 'inactive' }}">
                                                                    {{ $value->active_status == 'Active' ? 'Active' : 'Inactive' }}</div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="partner-item-h-right">
                                                        <div class="partner-item-h-right-inner">
                                                            <div class="partner-item-h-structure-block">
                                                                <div class="partner-item-h-structure">
                                                                    <div class="partner-item-h-structure-value">
                                                                        {{$value->username}}
                                                                    </div>
                                                                    <div class="partner-item-h-structure-title">
                                                                        User ID
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="partner-item-h-invested-block">
                                                                <div class="partner-item-h-invested">
                                                                    <div class="partner-item-h-invested-value soleyDynamicAmount"
                                                                        data-active="0" data-round="4" data-value="0"
                                                                        data-plus-minutely="0"
                                                                        data-balance-mask="$[amount]">
                                                                        {{currency()}} {{ $value->investment->sum('amount') }}
                                                                    </div>
                                                                    <div class="partner-item-h-invested-title">
                                                                        Investment
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="partner-item-h-total-profit-block">
                                                                <div class="partner-item-h-total-profit">
                                                                    <div class="partner-item-h-total-profit-icon">
                                                                    </div>
                                                                    <div class="partner-item-h-total-profit-content">
                                                                        <div class="partner-item-h-total-profit-value">
                                                                            <div class="partner-item-h-total-profit-value-amount soleyDynamicAmount"
                                                                                data-active="0" data-round="4"
                                                                                data-value="0.000000000000"
                                                                                data-plus-minutely="0"
                                                                                data-balance-mask="$[amount]">{{ $value->email }}</div>
                                                                            <div
                                                                                class="partner-item-h-total-profit-value-percent">
                                                                            </div>
                                                                        </div>
                                                                        <div class="partner-item-h-total-profit-title">
                                                                           Email ID
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="partner-item-h-view-more-btn-block">
                                                    </div>
                                                </div>
                                                <div class="partner-item-body">
                                                    <div class="partner-item-body-inner">
                                                        <div class="partner-item-profit-table-block">
                                                            <div class="partner-item-profit-table">
                                                                <div class="pip-t-heading">
                                                                    <div class="pip-t-h-col pip-t-h-col--currency">
                                                                        Currency
                                                                    </div>
                                                                    <div class="pip-t-h-col pip-t-h-col--invested">
                                                                        Investments
                                                                    </div>
                                                                    <div class="pip-t-h-col pip-t-h-col--structure">
                                                                        My structure
                                                                    </div>
                                                                    <div class="pip-t-h-col pip-t-h-col--earned">
                                                                        My earnings
                                                                    </div>
                                                                </div>
                                                                <div class="pip-t-items">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach

                                            <?php }?>

                                        </div>





                                        <div class="pagination-block">
                                            <div class="pagination" style="overflow-x: auto">
                                                 {{ $direct_team->withQueryString()->links() }}
                                            </div>
                                        </div>


                                    </div>




















                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-lg-10 col-xl-2 d-block d-lg-none d-xl-block order-5 order-lg-5">

                            <div class="s-affiliate-bottom-right">
                                <div class="partners-help-block">
                                    <div class="partners-help">





                                        <div class="partners-help-top">
                                            <div class="partners-help-icon"></div>
                                            <div class="partners-help-content">
                                                <div class="partners-help-title">
                                                    Any questions?
                                                </div>
                                                <div class="partners-help-descr">
                                                    Visit Soley Help center now, and you will find proper answers.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="partners-help-btn-block">
                                            <a href="/help-center/"
                                                class="partners-help-btn purple-btn purple-btn--small">
                                                Help center
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
</section>
