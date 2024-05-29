@include('layouts.mainsite.header')


<section class="section-registration">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-block">
                    <h2 class="section-title">Restore access                    </h2>
                </div>
                <div class="section-descr">
                    To recover your lost password, use your email address and follow the instructions in the email.

                </div>
                <div class="s-registration-block">
                    <div class="s-registration-block-left">
                        <div class="features-items-block">
                            <div class="features-items-title">Spark Ai Features</div>
                            <div class="features-items">
                                <div class="features-items-item features-items-item--web-company">
                                    <div class="features-items-item__icon"></div>
                                    <div class="features-items-item__text">Worldwide <br /> company</div>
                                </div>
                                <div class="features-items-item features-items-item--protection">
                                    <div class="features-items-item__icon"></div>
                                    <div class="features-items-item__text">Strong protection <br /> of crypto assets
                                    </div>
                                </div>
                                <div class="features-items-item features-items-item--return">
                                    <div class="features-items-item__icon"></div>
                                    <div class="features-items-item__text">High yield <br /> strategies</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s-registration-block-center">

                        <div class="registration-block">

                            <form action="{{ route('forgot_submit') }}" method="POST" class="form registration-form">


                                {{ csrf_field() }}




                                <div class="registration-type-tabs-content-block">
                                    <div class="registration-type-tabs-content">
                                        <div class="registration-type-tab-content">

                                            <div class="field-block">
                                                <div class="field-title-block">
                                                    <div class="field-title">
                                                        Username <span class="text--purple">*</span>
                                                    </div>
                                                </div>
                                                <div class="field field--iconed field--input field--username">
                                                    <div class="field__icon"></div>
                                                    <input type="text" id="authLogin" name="username" maxlength="32"
                                                        class="form-control" placeholder="Enter your username"
                                                        data-inputmask-regex="^[A-Za-z.0-9_-]{1,32}$"
                                                        data-inputmask-placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>


                                <div class="field-block">
                                    <div class="field-title-block">
                                        <div class="field-title">
                                            Email ID
                                            <span class="text--purple">*</span>
                                        </div>
                                       
                                    </div>
                                    <div class="field field--iconed field--input field--email">
                                        <div class="field__icon"></div>
                                        <input type="email" name="email" maxlength="255" class="form-control"
                                            placeholder="Enter Email Id">
                                      
                                    </div>
                                </div>

								<div class="field-block">
                                    <div class="field-title-block">
                                        <div class="field-title">
											Enter Captcha
                                            <span class="text--purple">*</span>
                                        </div>
                                    </div>
                                    <div class="field field--iconed field--input field--pin">
                                        <div class="field__icon"></div>
                                        <input type="text" name="captcha" maxlength="255"
                                            class="form-control" placeholder="Enter Captcha ">
                                       
                                    </div>
                                </div>

								<div class="field-block">
									<div class="upline-block">
										{{-- <div class="upline-title">Captcha</div> --}}
										

										<div class="upline-user">
											<div class="upline-user__username">

												@php
                                                $captcha = getCustomCaptcha($height = 46, $width = '100%', $bgcolor = 'transparent');
                                                @endphp 

                                              @php echo  $captcha @endphp
                                            @if(reCaptcha())
                                            @php echo reCaptcha(); @endphp
                                            @endif
											</div>
										</div>
									</div>
								</div>



                                <div class="btn-wrapper">
                                    <button type="submit" class="purple-btn continue-btn">
                                        <div class="continue-btn__text">
                                        Reset
                                        </div>
                                        <div class="continue-btn__icon">

                                        </div>
                                    </button>
                                </div>

                            </form>


                        </div>

                    </div>
                    <div class="s-registration-block-right">

                        <div class="help-create-acc-block">
                            <div class="help-create-content">
                                <div class="help-create-acc-icon"></div>
                                <div class="help-create-acc-title">
                                    New to Spark Ai platform?
                                </div>
                            </div>
                            <div class="help-create-acc-btn-block">
                                <a href="{{ route('register') }}" class="help-create-acc-btn purple-btn">Create
                                    account</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('layouts.mainsite.footer')
