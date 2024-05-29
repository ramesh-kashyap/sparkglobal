
<section class="section-transactions">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-block">
                    <h2 class="section-title">Withdrawals</h2>
                </div>
                <div class="section-descr">
					Withdraw your funds. Carefully check your wallet details before payment. The funds are guaranteed to be sent within 24 hours. Usually the transfer is done instantly
                </div>
                <div class="s-transactions-block">
                    <div class="row">
                        <div class="col-12 col-xl-2 d-none d-xl-block">
                            <div class="transactions-stats-block soleyTotalEarningsChart"
                                data-title="Total earnings">








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
                        </div>
                        <div class="col-12 col-lg-10 col-xl-8 offset-0 offset-lg-1 offset-xl-0">
                            <div class="transactions-block">

                                <div class="transactions-filter-block soleySearch">
                                    <div class="transactions-filter-heading">
                                        <div class="transactions-filter-heading-inner">
                                            <div class="transactions-filter-title-block">
                                                <div class="transactions-filter-title">
                                                    Transaction <span class="text--purple">Search</span>
                                                </div>
                                            </div>
                                            <div class="transactions-accepted-filters-block">
                                                <div class="transactions-accepted-filters">
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
                                        <div class="transactions-filter-heading-arrow"></div>
                                    </div>
                                    <div class="transactions-filter-body">
                                        <div class="transactions-filter-form-block">
                                            <form action="{{route('user.roi-bonus')}}" method="GET"
                                                class="form transactions-filter-form">
                                                <div class="transactions-filter-form-cols">

                                                    <div class="transactions-filter-form-col">

                                                        <div class="field-block">
                                                            <div class="field-title-block">
                                                                <div class="field-title">
                                                                Transactions
                                                                </div>
                                                                
                                                            </div>

                                                            <div class="field field--iconed field--select">
                                                                <select name="type" onchange="location = this.value;"
                                                                    class="select select--status">

                                                                    <option
                                                                        data-content='<div class="select-item"><div class="select-item__text">Algorithmic Profit</div></div>'
                                                                        value="{{route('user.roi-bonus')}}">Algorithmic Profit</option>
                                                                    <option
                                                                        data-content='<div class="select-item"><div class="select-item__text">Farming Profit</div></div>'
                                                                        value="{{route('user.level-income')}}" >Farming Profit</option>
                                                                        <option
                                                                        data-content='<div class="select-item"><div class="select-item__text">Reward Profit</div></div>'
                                                                        value="{{route('user.reward-bonus')}}" >Reward Profit</option>
                                                                    <option
                                                                        data-content='<div class="select-item"><div class="select-item__text">Deposits</div></div>'
                                                                        value="{{route('user.DepositHistory')}}">Deposits</option>

                                                                        <option
                                                                        data-content='<div class="select-item"><div class="select-item__text">Withdrawals</div></div>'
                                                                        value="{{route('user.Withdraw-History')}}" selected>Withdrawals</option>

																		<option
                                                                        data-content='<div class="select-item"><div class="select-item__text">Top Up Reports</div></div>'
                                                                        value="{{route('user.fundHistory')}}" >Top Up Reports</option>

                                                                        <option
                                                                        data-content='<div class="select-item"><div class="select-item__text">Transfer Reports</div></div>'
                                                                        value="{{route('user.transfer-report')}}" >Transfer Reports</option>

                                                                        


                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="transactions-filter-form-col">

                                                        <div class="field-block">
                                                            <div class="field-title-block">
                                                                <div class="field-title">
                                                                    Search
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
                                                                <input type="text" style="padding-left: 24px" Placeholder="Search" name="search"  value='{{@$search}}'>  
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
                                                <div class="transactions-filter-form-manage-panel-block">
                                                    <div class="transactions-filter-form-manage-panel">
                                                        <div
                                                            class="transactions-filter-form-manage-btn-wrapper">
                                                            <button type="submit"
                                                                class="purple-btn transactions-filter-submit-btn">Show</button>
                                                        </div>
                                                        <div
                                                            class="transactions-filter-form-manage-btn-wrapper">
                                                            <a href="{{route('user.roi-bonus')}}"
                                                                class="transactions-filter-reset-btn">Reset</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="transaction-items-block">
                                    <div class="transaction-items">
                                   
                                        @foreach ($withdraw_report as $value)
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

												   @if($value->status=="Approved")
												   <div
												   class="transaction-item-status transaction-item-status--success">
												   Success
											   </div>
												   @else
												   <div
												   class="transaction-item-status transaction-item-status--red">
												   {{$value->status}}
											   </div>
												   @endif
                                                    


                                                </div>
                                                <div class="transaction-item-type-block">
                                                    <div class="transaction-item-type">
                                                        <div class="transaction-item-type-title"
                                                            style="font-size:14px;">
                                                            {{"Withdrawals"}}
                                                        </div>
                                                        <div style="font-size:12px;text-transform: none"
                                                            class="transaction-item-type-subtitle">
                                                            {{$value->txn_id}}
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
                                                                {{number_format($value->amount,2)}} USDT
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



                                                                    Wallet: <strong>{{($value->walletType==1)?"Working Wallet":"Staking Wallet"}}
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
                                    <div class="pagination-block">

                                        <div class="pagination" style="    overflow-x: auto;">
                                        {{ $withdraw_report->withQueryString()->links() }}
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-lg-10 col-xl-2 offset-0 offset-lg-1 offset-xl-0">
                            <div class="deposits-help-block">
                                <div class="deposits-help">
                                    <div class="deposits-help-top">
                                        <div class="deposits-help-icon"></div>
                                        <div class="deposits-help-content">
                                            <div class="deposits-help-title">
                                                Any questions?
                                            </div>
                                            <div class="deposits-help-descr">
                                                Visit Soley Help center now, and you will find proper answers.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="deposits-help-btn-block">
                                        <a href="/help-center/" class="deposits-help-btn purple-btn">
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
</section>
