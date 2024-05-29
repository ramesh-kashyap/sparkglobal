
		
		
		
		
			
	
	






		<section class="section-transactions">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title-block">
							<h2 class="section-title">Transactions</h2>
						</div>
						<div class="section-descr">
							Transactions on your account. Track and monitor the movement of your crypto assets.
						</div>
						<div class="s-transactions-block">
							<div class="row">
								<div class="col-12 col-xl-2 d-none d-xl-block">
									<div class="transactions-stats-block soleyTotalEarningsChart" data-title="Total earnings">
										
										
										
										
										
										
										
										
										<div class="earning-stats-chart-block">
															<canvas class="earning-stats-chart"
																id="soleyTotalEarningsChartCanvas"></canvas>
															<div class="earning-stats-chart-info">
																<div class="earning-stats-chart-info__deposit soleyDynamicAmount"  data-active="0"  data-value="0" data-plus-minutely="0" data-balance-mask="$[amount]" data-round="2">
																	$0
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
																	<div
																		class="earning-stats-chart-legend-item__content">
																		<div data-chart-value="0"
																			class="soleyTotalEarningsChartDeposits earning-stats-chart-legend-item__deposit soleyDynamicAmount"  data-active="0"  data-value="0.000000000000" data-plus-minutely="" data-balance-mask="$[amount]" data-round="2">
																			$0
																			</div>
																		<div
																			class="earning-stats-chart-legend-item__currency">
																			Deposits</div>
																	</div>
																</div>
																<div class="earning-stats-chart-legend-item">
																	<div class="earning-stats-chart-legend-item__line"
																		style="background-color: rgba(29, 160, 37, 1);">
																	</div>
																	<div
																		class="earning-stats-chart-legend-item__content">
																		<div data-chart-value="0"
																			class="soleyTotalEarningsChartPartners earning-stats-chart-legend-item__deposit soleyDynamicAmount"  data-active="0"  data-value="0" data-plus-minutely="0" data-balance-mask="$[amount]" data-round="2">
																			$0</div>
																		<div
																			class="earning-stats-chart-legend-item__currency">
																			Partners</div>
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
																<div class="transactions-accepted-filter " style="padding-right:12px;">
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
													<form action="/transactions/" class="form transactions-filter-form">
														<div class="transactions-filter-form-cols">
															<div class="transactions-filter-form-col">

																<div class="field-block">
																	<div class="field-title-block">
																		<div class="field-title">
																			Transaction
																		</div>
																		<div class="field-reset-link-block">
																			<a href="javascript:void(0);" class="soleySearchReset field-reset-link">
																				<div class="field-reset-link__icon">
																				</div>
																				<div class="field-reset-link__text">
																					Reset</div>
																			</a>
																		</div>
																	</div>

																	<div class="field field--iconed field--select">
																		<select name="type"
																			class="select select--type">
																				
																				<option 
																				data-content='<div class="select-item"><div class="select-item__text">All</div></div>'
																				 value="">All</option>
																																																																																																																														<option 
																					data-content='<div class="select-item"><div class="select-item__text">Refill</div></div>'
																					 value="balance_and_payed_prebalance" >Refill</option>
																																																																																																									<option 
																					data-content='<div class="select-item"><div class="select-item__text">Deposit</div></div>'
																					 value="deposit" >Deposit</option>
																																																																																																									<option 
																					data-content='<div class="select-item"><div class="select-item__text">Withdrawal</div></div>'
																					 value="withdraw" >Withdrawal</option>
																																																																																																									<option 
																					data-content='<div class="select-item"><div class="select-item__text">Affiliate reward</div></div>'
																					 value="partner" >Affiliate reward</option>
																																																																																																									<option 
																					data-content='<div class="select-item"><div class="select-item__text">Affiliate bonus</div></div>'
																					 value="career_bonus" >Affiliate bonus</option>
																																																																																																									<option 
																					data-content='<div class="select-item"><div class="select-item__text">Bonus</div></div>'
																					 value="bonus" >Bonus</option>
																																																																																																									<option 
																					data-content='<div class="select-item"><div class="select-item__text">Earning</div></div>'
																					 value="percent" >Earning</option>
																																																																																																									<option 
																					data-content='<div class="select-item"><div class="select-item__text">Principal back</div></div>'
																					 value="return" >Principal back</option>
																																																														
																				
																		</select>
																	</div>


																</div>
															</div>
															<div class="transactions-filter-form-col">

																<div class="field-block">
																	<div class="field-title-block">
																		<div class="field-title">
																			Currency
																		</div>
																		<div class="field-reset-link-block">
																			<a href="javascript:void(0);" class="soleySearchReset field-reset-link">
																				<div class="field-reset-link__icon">
																				</div>
																				<div class="field-reset-link__text">
																					Reset</div>
																			</a>
																		</div>
																	</div>

																	<div class="field field--select">
																		<select name="currency"
																			class="select-currency">
																			<option
																				data-content='<div class="select-currency-list-item"><div class="select-currency-list-item__content" style="max-width:none;"><div class="select-currency-list-item__title">All</div></div></div>'
																				value="">All</option>
																			
																																						<option
																																						
																				data-content='<div class="select-currency-list-item"><div class="select-currency-list-item__icon select-currency-list-item__icon--tether"><img class="image" src="/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/tether.svg" alt=""></div><div class="select-currency-list-item__content"><div class="select-currency-list-item__title">Tether</div></div></div>'
																				value="usdt">Tether</option>
																																						<option
																																						
																				data-content='<div class="select-currency-list-item"><div class="select-currency-list-item__icon select-currency-list-item__icon--usd-coin"><img class="image" src="/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/usd-coin.svg" alt=""></div><div class="select-currency-list-item__content"><div class="select-currency-list-item__title">USD Coin</div></div></div>'
																				value="usdc">USD Coin</option>
																																						<option
																																						
																				data-content='<div class="select-currency-list-item"><div class="select-currency-list-item__icon select-currency-list-item__icon--bitcoin"><img class="image" src="/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/bitcoin.svg" alt=""></div><div class="select-currency-list-item__content"><div class="select-currency-list-item__title">Bitcoin</div></div></div>'
																				value="btc">Bitcoin</option>
																																						<option
																																						
																				data-content='<div class="select-currency-list-item"><div class="select-currency-list-item__icon select-currency-list-item__icon--ethereum"><img class="image" src="/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/ethereum.svg" alt=""></div><div class="select-currency-list-item__content"><div class="select-currency-list-item__title">Ethereum</div></div></div>'
																				value="eth">Ethereum</option>
																																						<option
																																						
																				data-content='<div class="select-currency-list-item"><div class="select-currency-list-item__icon select-currency-list-item__icon--binance-coin"><img class="image" src="/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/binance-coin.svg" alt=""></div><div class="select-currency-list-item__content"><div class="select-currency-list-item__title">BNB</div></div></div>'
																				value="bnb">BNB</option>
																																						<option
																																						
																				data-content='<div class="select-currency-list-item"><div class="select-currency-list-item__icon select-currency-list-item__icon--solana"><img class="image" src="/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/solana.svg" alt=""></div><div class="select-currency-list-item__content"><div class="select-currency-list-item__title">Solana</div></div></div>'
																				value="sol">Solana</option>
																																						<option
																																						
																				data-content='<div class="select-currency-list-item"><div class="select-currency-list-item__icon select-currency-list-item__icon--polkadot"><img class="image" src="/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/polkadot.svg" alt=""></div><div class="select-currency-list-item__content"><div class="select-currency-list-item__title">Polkadot</div></div></div>'
																				value="dot">Polkadot</option>
																																						<option
																																						
																				data-content='<div class="select-currency-list-item"><div class="select-currency-list-item__icon select-currency-list-item__icon--litecoin"><img class="image" src="/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/litecoin.svg" alt=""></div><div class="select-currency-list-item__content"><div class="select-currency-list-item__title">Litecoin</div></div></div>'
																				value="ltc">Litecoin</option>
																																						<option
																																						
																				data-content='<div class="select-currency-list-item"><div class="select-currency-list-item__icon select-currency-list-item__icon--dogecoin"><img class="image" src="/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/dogecoin.svg" alt=""></div><div class="select-currency-list-item__content"><div class="select-currency-list-item__title">Dogecoin</div></div></div>'
																				value="doge">Dogecoin</option>
																																						<option
																																						
																				data-content='<div class="select-currency-list-item"><div class="select-currency-list-item__icon select-currency-list-item__icon--polygon"><img class="image" src="/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/polygon.svg" alt=""></div><div class="select-currency-list-item__content"><div class="select-currency-list-item__title">Polygon</div></div></div>'
																				value="matic">Polygon</option>
																																						<option
																																						
																				data-content='<div class="select-currency-list-item"><div class="select-currency-list-item__icon select-currency-list-item__icon--tron"><img class="image" src="/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/tron.svg" alt=""></div><div class="select-currency-list-item__content"><div class="select-currency-list-item__title">TRON</div></div></div>'
																				value="trx">TRON</option>
																																						<option
																																						
																				data-content='<div class="select-currency-list-item"><div class="select-currency-list-item__icon select-currency-list-item__icon--stellar"><img class="image" src="/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/stellar.svg" alt=""></div><div class="select-currency-list-item__content"><div class="select-currency-list-item__title">Stellar</div></div></div>'
																				value="xlm">Stellar</option>
																																						<option
																																						
																				data-content='<div class="select-currency-list-item"><div class="select-currency-list-item__icon select-currency-list-item__icon--xrp"><img class="image" src="/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/xrp.svg" alt=""></div><div class="select-currency-list-item__content"><div class="select-currency-list-item__title">XRP</div></div></div>'
																				value="xrp">XRP</option>
																																						<option
																																						
																				data-content='<div class="select-currency-list-item"><div class="select-currency-list-item__icon select-currency-list-item__icon--cardano"><img class="image" src="/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/cardano.svg" alt=""></div><div class="select-currency-list-item__content"><div class="select-currency-list-item__title">Cardano</div></div></div>'
																				value="ada">Cardano</option>
																																						
																			
																		</select>
																	</div>

																</div>
															</div>
															<div class="transactions-filter-form-col">

																<div class="field-block">
																	<div class="field-title-block">
																		<div class="field-title">
																			Status
																		</div>
																		<div class="field-reset-link-block">
																			<a href="javascript:void(0);" class="soleySearchReset field-reset-link">
																				<div class="field-reset-link__icon">
																				</div>
																				<div class="field-reset-link__text">
																					Reset</div>
																			</a>
																		</div>
																	</div>

																	<div class="field field--iconed field--select">
																		<select name="status"
																			class="select select--status">
																			
																			<option data-content='<div class="select-item"><div class="select-item__text">All</div></div>' value="">All</option>
													<option data-content='<div class="select-item"><div class="select-item__text">Completed</div></div>' value="success" >Completed</option>
													<option data-content='<div class="select-item"><div class="select-item__text">Pending</div></div>' value="pending" >Pending</option>
													<option data-content='<div class="select-item"><div class="select-item__text">Сanceled</div></div>' value="error" >Сanceled</option>
																			
																			
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
																	<a href="/transactions/"
																		class="transactions-filter-reset-btn">Reset</a>
																</div>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
										
										
										
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
																					on {{siteName()}} Trading platform. Discover your new investment opportunities
																				</div>
																				<div class="deposits-empty-btn-block">
																					<a href="{{route('user.investment')}}"
																						class="deposits-empty-btn purple-btn continue-star-btn">
																						<div
																							class="continue-star-btn__text">
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
																					investing in {{siteName()}} Trading safe high-yield investment strategies
																				</div>
																				<div class="deposits-empty-btn-block">
																					<a href="{{route('user.investment')}}"
																						class="deposits-empty-btn purple-btn continue-star-btn">
																						<div
																							class="continue-star-btn__text">
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
																					with {{siteName()}} Trading platform unique investment opportunities
																				</div>
																				<div class="deposits-empty-btn-block">
																					<a href="{{route('user.investment')}}"
																						class="deposits-empty-btn purple-btn continue-star-btn">
																						<div
																							class="continue-star-btn__text">
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
													</div>																			</div>
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
														Visit {{siteName()}} Help center now, and you will find proper answers.
													</div>
												</div>
											</div>
											<div class="deposits-help-btn-block">
												<a href="{{route('user.dashboard')}}"
																	class="deposits-help-btn purple-btn">
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


