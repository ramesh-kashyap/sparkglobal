@include('layouts.mainsite.header')
<section class="section-registration">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-block">
                    <h2 class="section-title">Sign up</h2>
                </div>
                <div class="section-descr">
                    Register a new account on the Spark Ai Trading platform. Once you register you get access to all the
                    features of the platform and you can start making money.
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

                            <form action="{{ route('registers') }}" method="POST" class="form registration-form">

                                {{ csrf_field() }}




                                <div class="field-block">
                                    <div class="field-title-block">
                                        <div class="field-title">
                                            Name <span class="text--purple">*</span>
                                        </div>
                                    </div>
                                    <div class="field field--iconed field--input field--username">
                                        <div class="field__icon"></div>
                                        <input type="text" id="authLogin" name="name" maxlength="32"
                                            class="form-control" placeholder="Your Name"
                                            data-inputmask-regex="^[A-Za-z.0-9_-]{1,32}$" data-inputmask-placeholder="">
                                    </div>
                                </div>
                                <div class="field-block">
                                    <div class="field-title-block">
                                        <div class="field-title">
                                            Email <span class="text--purple">*</span>
                                        </div>
                                    </div>
                                    <div class="field field--iconed field--input field--email">
                                        <div class="field__icon"></div>
                                        <input type="text" id="authLogin" name="email" maxlength="32"
                                            class="form-control" placeholder="Your email"
                                            data-inputmask-regex="^[A-Za-z.0-9_-]{1,32}$" data-inputmask-placeholder="">
                                    </div>
                                </div>
                                <div class="field-block">
                                    <div class="field-title-block">
                                        <div class="field-title">
                                            Mobile No <span class="text--purple">*</span>
                                        </div>
                                    </div>
                                    <div class="field field--iconed field--input field--username">
                                        <div class="field__icon"></div>
                                        <input type="text" id="authLogin" name="phone" maxlength="32"
                                            class="form-control" placeholder="your Mobile no"
                                            data-inputmask-regex="^[A-Za-z.0-9_-]{1,32}$" data-inputmask-placeholder="">
                                    </div>
                                </div>


                                <div class="field-block">
                                    <div class="field-title-block">
                                        <div class="field-title">
                                            Password
                                            <span class="text--purple">*</span>
                                        </div>
                                    </div>
                                    <div class="field field--iconed field--input field--password">
                                        <div class="field__icon"></div>
                                        <input type="password" name="password" maxlength="255" class="form-control"
                                            placeholder="Enter your password">
                                        <div class="change-pswd-type-link-block">
                                            <a href="#" class="change-pswd-type-link"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="field-block">
                                    <div class="field-title-block">
                                        <div class="field-title">
                                            Repeat password
                                            <span class="text--purple">*</span>
                                        </div>
                                    </div>
                                    <div class="field field--iconed field--input field--password">
                                        <div class="field__icon"></div>
                                        <input type="password" name="password_confirmation" maxlength="255"
                                            class="form-control" placeholder="Enter your password">
                                        <div class="change-pswd-type-link-block">
                                            <a href="#" class="change-pswd-type-link"></a>
                                        </div>
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




								@php
								$sponsor = @$_GET['ref'];
								$name = \App\Models\User::where('username', $sponsor)->first();
								@endphp
								 @if ($name)
								 
								<div class="field-block">
									<div class="upline-block">
										<div class="upline-title">Upline</div>
										<input type="hidden"
                                            name="sponsor" value="{{$name->username}}" readonly >

										<div class="upline-user">
											<div class="upline-user__username">{{$name->username}} - {{$name->name}}</div>
										</div>
									</div>
								</div>

								@else
								<div class="field-block">
									<div class="upline-block">
										<div class="upline-title">Upline</div>
										<div class="upline-user">
											<div class="upline-user__username" style="color: red">use a referral link</div>
										</div>
									</div>
								</div>

								@endif





                                <div class="btn-wrapper">
                                    <button type="submit" class="purple-btn continue-btn">
                                        <div class="continue-btn__text">
                                            Create account
                                        </div>
                                        <div class="continue-btn__icon">

                                        </div>
                                    </button>
                                </div>

                                <div class="form-agreement">
                                    By clicking "Create account", you agree to <a
                                        href="#" >Terms of Service</a>
                                </div>

                            </form>


                        </div>

                    </div>
                    <div class="s-registration-block-right">

                        <div class="help-create-acc-block">
                            <div class="help-create-content">
                                <div class="help-create-acc-icon"></div>
                                <div class="help-create-acc-title">
                                    Already have an account?
                                </div>
                            </div>
                            <div class="help-create-acc-btn-block">
                                <a href="{{ route('login') }}" class="help-create-acc-btn purple-btn">Sign in</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.notify')

@include('layouts.mainsite.footer')
