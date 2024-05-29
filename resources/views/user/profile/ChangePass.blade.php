
		
		
		
			
	
	


<section class="section-setting">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title-block">
							<h2 class="section-title">Settings</h2>
						</div>
						<div class="section-descr">
							Customise your profile, make it efficient, convenient and safe. Do your comfortable business.
						</div>
						<div class="s-setting-block">
							<div class="row">
								<div class="col-12 col-md-10 col-lg-8 col-xl-6 offset-0 offset-md-1 offset-lg-2 offset-xl-3">
									<div class="setting-block">
										<div class="setting-tabs-block">

											<div class="setting-tabs">
												<div class="setting-tab-wrapper">
													<div class="setting-tab setting-tab--password active">
														<div class="setting-tab__icon"></div>
														<div class="setting-tab__title">Password</div>
													</div>
												</div>
												<div class="setting-tab-wrapper">
													<div class="setting-tab setting-tab--payment-pin">
														<div class="setting-tab__icon"></div>
														<div class="setting-tab__title">Payment password</div>
													</div>
												</div>
												<div class="setting-tab-wrapper">
													<div class="setting-tab setting-tab--2fa">
														<div class="setting-tab__icon"></div>
														<div class="setting-tab__title">2FA</div>
													</div>
												</div>
											</div>

										</div>

										<div class="setting-tabs-content-block">
											<div class="setting-tabs-content">
												<div class="setting-tab-content active">

													<div class="setting-form-block">
														<form action="/change_password/" class="form setting-password-form">

															<div class="setting-form-title-block">
																<div class="setting-form-title">
																	Password
																</div>
															</div>
															<div class="setting-form-descr">
																Set a new password, do your business safe. We highly recommend that you use a complex and unique password.
															</div>
															<div class="field-block">
																<div class="field-title-block">
																	<div class="field-title">
																		Current password <span class="text--purple">*</span>
																	</div>
																</div>
																<div class="field field--iconed field--input field--password">
																	<div class="field__icon"></div>
																	<input type="password" name="current_password" maxlength="255" placeholder="Enter current password">
																	<div class="change-pswd-type-link-block">
																		<a href="#" class="change-pswd-type-link"></a>
																	</div>
																		
																</div>
															</div>
															<div class="field-block">
																<div class="field-title-block">
																	<div class="field-title">
																		New password <span
																			class="text--purple">*</span>
																	</div>
																</div>
																<div class="field field--iconed field--input field--password">
																	<div class="field__icon"></div>
																	<input type="password" autocomplete="off" name="new_password" maxlength="255" placeholder="Enter new password">
																	<div class="change-pswd-type-link-block">
																		<a href="#" class="change-pswd-type-link"></a>
																	</div>
																</div>
															</div>
															<div class="field-block">
																<div class="field-title-block">
																	<div class="field-title">
																		Repeat new password <span class="text--purple">*</span>
																	</div>
																</div>
																<div class="field field--iconed field--input field--password">
																	<div class="field__icon"></div>
																	<input type="password"  autocomplete="off" name="repeat_new_password" maxlength="255" placeholder="Repeat new password">
																	<div class="change-pswd-type-link-block">
																		<a href="#" class="change-pswd-type-link"></a>
																	</div>
																</div>
															</div>
															<div class="btn-wrapper">
																<button type="submit" class="purple-btn continue-star-btn">
																	<div class="continue-star-btn__text">
																		Change password
																	</div>
																	<div class="continue-star-btn__icon"></div>
																</button>
															</div>

														</form>
													</div>
												</div>
												<div class="setting-tab-content">


													<div class="setting-form-block">
														<form action="/pin/" class="form setting-payment-form soleyPINs">

															<div class="setting-form-title-block">
																<div class="setting-form-title">
																	Payment password
																</div>
															</div>
															<div class="setting-form-descr">
																Set the payment password, and reliably protect your payments. The payment password will be requested when withdrawing funds and changing of wallet details.
															</div>
															
															
															<div class="field-block d-none">
																<div class="field-title-block">
																	<div class="field-title">
																		Current payment password <span class="text--purple">*</span>
																	</div>
																</div>
																<div class="field field--iconed field--input field--pin">
																	<div class="field__icon"></div>
																	<input type="password"  autocomplete="off" maxlength="255" placeholder="Enter current payment password" name="current_pin" />
																	<div class="change-pswd-type-link-block">
																		<a href="#" class="change-pswd-type-link"></a>
																	</div>
																</div>
															</div>
															
															
															<div class="field-block d-none">
																<div class="field-title-block">
																	<div class="field-title">
																		Status
																	</div>
																</div>
																<div class="radio-items-block">
																	<div class="radio-items">
																		<div class="radio-item-wrapper">
																			<label class="radio-item">
																				<input type="radio" name="status" value="on" class="radio" >
																				<div class="radio-item-inner">
																					<div class="radio-item__radio"></div>
																					<div class="radio-item__text">Active</div>
																				</div>
																			</label>
																		</div>
																		<div class="radio-item-wrapper">
																			<label class="radio-item">
																				<input type="radio" name="status" value="off" class="radio" checked="checked">
																				<div class="radio-item-inner">
																					<div class="radio-item__radio"></div>
																					<div class="radio-item__text">Not active</div>
																				</div>
																			</label>
																		</div>
																	</div>
																</div>
															</div>

															
															<div class="field-block">
																<div class="field-title-block">
																	<div class="field-title">
																		New payment password <span class="text--purple">*</span>
																	</div>
																</div>
																<div class="field field--iconed field--input field--pin">
																	<div class="field__icon"></div>
																	<input type="password"  autocomplete="off" maxlength="255" placeholder="Enter new payment password" name="new_pin" />
																	<div class="change-pswd-type-link-block">
																		<a href="#" class="change-pswd-type-link"></a>
																	</div>
																</div>
															</div>
															<div class="field-block">
																<div class="field-title-block">
																	<div class="field-title">
																		Repeat new payment password <span
																			class="text--purple">*</span>
																	</div>
																</div>
																<div class="field field--iconed field--input field--pin">
																	<div class="field__icon"></div>
																	<input type="password"  autocomplete="off" maxlength="255" placeholder="Repeat new payment password" name="repeat_pin" />
																	<div class="change-pswd-type-link-block">
																		<a href="#" class="change-pswd-type-link"></a>
																	</div>
																</div>
															</div>

															<div class="btn-wrapper">
																<button type="submit" data-activate="Activate" data-deactivate="Deactivate" data-change-pin="Change" class="purple-btn continue-star-btn">
																	<div class="continue-star-btn__text">
																		Activate																	</div>
																	<div class="continue-star-btn__icon"></div>
																</button>
															</div>

														</form>
													</div>

												</div>
												<div class="setting-tab-content">


													<div class="setting-form-block">
														<form action="/2fa/" class="form setting-2fa-form soleyAuthenticator">

															<div class="setting-form-title-block">
																<div class="setting-form-title">
																	Google Authenticator
																</div>
															</div>
															<div class="setting-form-descr">
																We strongly recommend to use 2FA Google Authenticator for protection of your account.
															</div>

															<div class="field-block">
																<div class="field-title-block">
																	<div class="field-title">
																		Download
																	</div>
																</div>
																<div class="download-app-items-block">
																	<div class="download-app-items">
																		<div class="download-app-item-wrapper">
																			<a target="_blank" href="https://apps.apple.com/us/app/google-authenticator/id388497605" class="download-app-item download-app-item--appstore">
																				<img class="image" src="/assets/eQPywYAlnPNuvenAX6Nb/images/svg/download-app/download-app-item-appstore.svg" alt="">
																			</a>
																		</div>
																		<div class="download-app-item-wrapper">
																			<a target="_blank" href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en_US&gl=US&pli=1" class="download-app-item download-app-item--google-play">
																				<img class="image" src="/assets/eQPywYAlnPNuvenAX6Nb/images/svg/download-app/download-app-item-google-play.svg" alt="">
																			</a>
																		</div>
																	</div>
																</div>
															</div>	
															
															
															
															
															
															
															<div class="field-block ">
																<div class="field-title-block">
																	<div class="field-title">
																		Scan QR code
																	</div>
																</div>
																<div class="scan-qr-code-block">
																	<div class="scan-qr-code">
																		<img class="image soleyAuthenticatorQr" src="https://chart.googleapis.com/chart?chs=200x200&chld=M|0&cht=qr&chl=otpauth%3A%2F%2Ftotp%2Friteshk%3Fsecret%3DZ6EXDZMSOBWUCOOE" alt="">
																	</div>
																</div>
															</div>

															<div class="field-block d-none">
																<div class="field-title-block">
																	<div class="field-title">
																		Status
																	</div>
																</div>
																<div class="radio-items-block">
																	<div class="radio-items">
																		<div class="radio-item-wrapper">
																			<label class="radio-item">
																				<input type="radio" name="status" value="on" class="radio" >
																				<div class="radio-item-inner">
																					<div class="radio-item__radio"></div>
																					<div class="radio-item__text">Status</div>
																				</div>
																			</label>
																		</div>
																		<div class="radio-item-wrapper">
																			<label class="radio-item">
																				<input type="radio" name="status" value="off" class="radio" checked="checked">
																				<div class="radio-item-inner">
																					<div class="radio-item__radio"></div>
																					<div class="radio-item__text">Status</div>
																				</div>
																			</label>
																		</div>
																	</div>
																</div>
															</div>
															
															
															
															<div class="field-block ">
																<div class="field-title-block">
																	<div class="field-title">
																		Secret code
																	</div>
																</div>
																<div class="field field--iconed field--input field--secret-code ">
																	<div class="field__icon"></div>
																	<input class="soleyAuthenticatorSecretCode" type="text" name="secret_code" autocomplete="off" readonly id="secret_code" value="Z6EXDZMSOBWUCOOE">
																</div>
															</div>
															
															
															
															<div class="field-block">
																<div class="field-title-block">
																	<div class="field-title">
																		Authenticator token <span class="text--purple">*</span>
																	</div>
																</div>
																<div class="field field--iconed field--input field--2fa">
																	<div class="field__icon"></div>
																	<input type="text" name="secret" autocomplete="off" placeholder="Enter token from app">
																</div>
															</div>
															
															<div class="btn-wrapper">
																<button type="submit" class="purple-btn continue-star-btn" data-activate="Activate 2FA" data-deactivate="Deactivate 2FA">
																	<div class="continue-star-btn__text">
																		Deactivate 2FA																	</div>
																	<div class="continue-star-btn__icon"></div>
																</button>
															</div>

														</form>
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



