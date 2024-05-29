<section class="section-new-deposit">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-block">
                    <h2 class="section-title">Deposit using Spot
					</h2>
                </div>
                <div class="section-descr">
                    Deposit your account. Carefully check the network to which funds to be sent. Specify Destination Tag
                    or Memo if required.
                </div>
                <div class="s-new-deposit-block">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xl-6 offset-0 offset-lg-1 offset-xl-3">
							<form action="{{route('user.fundActivation')}}" class="" method="POST">
								{{ csrf_field() }}
                            <div class="new-deposit-block">

							
									<input type="hidden" name="amount" id="id_amount" value="{{$amount}}"> 
									<input type="hidden" name="paymentMode" value="{{$paymentMode}}"> 
									<input type="hidden" name="orderId" value="{{$orderId}}"> 
									<input type="hidden" name="payment" value="{{$payment}}"> 
									<input type="hidden" name="username" value="{{$username}}"> 
									

                                <div class="new-deposit-activation-block">
                                    <div class="iconed-title-block">
                                        <div class="iconed-title iconed-title--attention">Attention </div>
                                    </div>

                                    <div class="form-descr-block">
                                        <div class="form-descr">
                                            <p>Send cryptocurrency with consideration of blockchain and exchange fees.
                                            </p>
                                            <p>
                                                Do not send tokens and coins other than <strong>USDT</strong>, you may
                                                lose them.  it will be automatically activated</p>
                                        </div>
                                    </div>
                                    <div class="new-deposit-activation-fields-block">
                                        <div class="new-deposit-activation-fields">


                                            <div class="field-block">
                                                <div class="field-title-block">
                                                    <div class="field-title">
														Your Wallet Balance: {{ currency() }}
                                                        {{ number_format(Auth::user()->workingBalance(), 2) }}
                                                    </div>

												
                                                </div>
												<br>
												<div class="field-title-block">
													<div class="field-title">
														<span style="color: red">You can Pay max 50% from Working Wallet ${{$amount*50/100}} for {{currency()}} {{$amount}}  package</span>
														</div>
												</div>
												<div
												class="field field--iconed field--input field--amount field--can-copy">
												<div class="field__icon"></div>
												<input type="text" id="amount-due" name="working_wallet" readonly
													autocomplete="off" value="{{$amount*50/100}}">
												<div class="field-copy-btn-block">
													
												</div>
                                            </div>



                                             <div class="field-block">
                                                <div class="field-title-block">
                                                    <div class="field-title">
														Your Spot Balance:  {{ currency() }}
                                                        {{ number_format(Auth::user()->FundBalance(), 2) }}
                                                    </div>

                                                    <input type="hidden" name="" value="{{$amount*50/100}}" id="minimum_amount">
                                                    <input type="hidden" name="" value="{{$amount}}" id="maximum_amount">
												
                                                </div>
												<br>
												<div class="field-title-block">
													<div class="field-title">
														<span style="color: red">You have to Pay min. 50% from Cash Wallet ${{$amount*50/100}} for {{currency()}} {{$amount}} package</span>
														</div>
												</div>
												<div
												class="field field--iconed field--input field--amount field--can-copy">
												<div class="field__icon"></div>
												<input type="text"  class="invest-amount" name="cash_wallet" id="amount" 
													autocomplete="off" value="{{$amount*50/100}}">
												
                                            </div>

                                     
                                                <span  style="padding-top: 10px" class="cashback-info-label"></span>
                                           


                                            <div class="btn-wrapper">
                                              <button type="submit"  class="purple-btn continue-btn">
                                                    <div class="continue-btn__text">
                                                        Submit
                                                    </div>
                                                    <div class="continue-btn__icon"></div>
                                                </button>
                                            </div>



                                        </div>
                                    </div>

                                </div>

							  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
<script>
    "use strict";
    (function ($) {

        $('.invest-amount').on('change keyup',function () {
			let str = $(this).val();
			str = str.replace(',','.');
		//  alert(str);
           let min =  $('#minimum_amount').val();
           let max =  $('#maximum_amount').val();
           let id_amount =  $('#id_amount').val();
           
			let amount = parseFloat(str);
            if (amount==min || amount==max) 
            {
                $(".continue-btn").prop("disabled", false);
                $(".continue-btn").css('cursor','pointer');
                $('.cashback-info-label').html('');
                $('#amount-due').val(id_amount-amount);
            }
            else
            {

            $(".continue-btn").prop("disabled", true);
            $(".continue-btn").css('cursor','not-allowed');
            $('.cashback-info-label').html("use deposit is "+min+" USDT and  "+max+" USDT !").css('color', 'red');

            }
		
			//console.log(summ_usd);
		});

    })(jQuery);
</script>


