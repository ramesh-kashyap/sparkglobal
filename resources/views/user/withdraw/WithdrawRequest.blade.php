<section class="section-withdrawal">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-block">
                    <h2 class="section-title">Withdrawal of funds</h2>
                </div>
                <div class="section-descr">
                    Withdraw your funds. Carefully check your wallet details before payment. The funds are guaranteed to
                    be sent within 24 hours. Usually the transfer is done instantly.
                </div>
                <div class="s-balance-manage-block">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xl-8 offset-0 offset-lg-1 offset-xl-2">
                            <div class="balance-manage-block">
                                <div class="balance-manage-form-block">
                                    <form action="{{route('user.Withdraw-Request')}}"  method="post" class="form withdrawal-form soleyTopupWithdraw">

                                        {{ csrf_field() }}
                                        <div class="bal-manage-fieldset-block">
                                            <div class="bal-manage-fieldset-title">1. Currency: <span
                                                    class="text--purple soleySelectedCurrency">Tether</span></div>
                                            <div class="bal-manage-fieldset">
                                                <div class="currency-radio-items-block">
                                                    <div class="currency-radio-items">
                                                        <div class="currency-radio-item-wrapper">
                                                            <label class="currency-radio-item">
                                                                <input data-balance="0" type="radio" id="currency_bep20" name="currency"
                                                                    value="USDT_BSC" class="radio" checked="checked">
                                                                <div class="currency-radio-item-inner">
                                                                    <div
                                                                        class="currency-radio-item__icon currency-radio-item__icon--tether">
                                                                        <img class="image"
                                                                            src="{{asset('')}}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/tether.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="currency-radio-item__title">
                                                                        Tether BEP20
                                                                    </div>
                                                                    <div class="currency-radio-item__value"
                                                                        style="color:#260B5F">
                                                                     USDT
                                                                    </div>
                                                                    <div class="currency-radio-item__radio-block">
                                                                        <div class="currency-radio-item__radio"></div>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                        <div class="currency-radio-item-wrapper">
                                                            <label class="currency-radio-item">
                                                                <input data-balance="0" type="radio" id="currency_trc20" name="currency"
                                                                    value="USDT_TRX" class="radio">
                                                                <div class="currency-radio-item-inner">
                                                                    <div
                                                                        class="currency-radio-item__icon currency-radio-item__icon--usd-coin">
                                                                        <img class="image"
                                                                            src="{{asset('')}}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/usd-coin.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="currency-radio-item__title">
                                                                        Tether TRC20
                                                                    </div>
                                                                    <div class="currency-radio-item__value"
                                                                        style="color:#260B5F">
                                                                      USDT
                                                                    </div>
                                                                    <div class="currency-radio-item__radio-block">
                                                                        <div class="currency-radio-item__radio"></div>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                       
                                                       
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bal-manage-fieldset-block">
                                            <div class="bal-manage-fieldset">
                                                <div class="bal-manage-fieldset-title">2. Withdrawal Settings</div>
                                                <div class="field-block field-block--amount">
                                                    <div class="field-title-block">
                                                        <div class="field-title">
                                                            Withdrawal amount <span class="text--purple">*  {{ currency() }}
                                                        {{ number_format(Auth::user()->stakingBalance(), 2) }} </span>
                                                        </div>
                                                        <div class="field-title-min-block">
                                                            <div class="field-title-min">
                                                                <span class="field-title-max__title soleyAmountLimits"
                                                                    data-unlimited="Unlimited"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="field field--iconed field--input field--amount">
                                                        <div class="field__icon"></div>
                                                        <input type="text" name="amount" id="withdrawal_amount" value=""
                                                            placeholder="Enter withdrawal amount" autocomplete="off">
                                                        <div class="field__currency soleyAmountCurrency"></div>
                                                    </div>
                                                </div>

                                                <span  style="padding-top: 10px" class="cashback-info-label"></span>


                                                <div class="field-block field-block--amount">
                                                    <div class="field-title-block">
                                                        <div class="field-title">
                                                            Wallet From <span class="text--purple">*</span>
                                                        </div>
                                                    </div>
                                                    <div class="radio-items-block">
                                                        <div class="radio-items">
                                                            <div class="radio-item-wrapper">
                                                                <label class="radio-item">
                                                                    <input type="radio" name="payment"
                                                                        value="2" class="radio"
                                                                        checked="checked">
                                                                    <div class="radio-item-inner">
                                                                        <div class="radio-item__radio"></div>
                                                                        <div class="radio-item__text">Swap USDT</div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="radio-item-wrapper">
                                                                <label class="radio-item">
                                                                    <input type="radio" name="payment"
                                                                        value="1" class="radio">
                                                                    <div class="radio-item-inner">
                                                                        <div class="radio-item__radio"></div>
                                                                        <div class="radio-item__text">Swap Wallet</div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                         
                                                            
                                                        </div>
                                                    </div>
                                                </div>





                                            </div>

                                            <div class="bal-manage-fieldset">
                                                <div class="field-block">
                                                    <div class="field-title-block">
                                                        <div class="field-title">
                                                           USDT address <span class="text--purple">*</span>
                                                        </div>
                                                    </div>
                                                    <div class="field field--iconed field--input field--pin">
                                                        <div class="field__icon"></div>
                                                        <input  type="text"
                                                            name="wallet" id="wallet" value="{{Auth::user()->usdtBep20}}" readonly autocomplete="off"
                                                            placeholder="Enter your wallet">
                                                    </div>
                                                </div>
                                               

                                            </div>
                                        </div>
                                      
                                        <div class="bal-manage-fieldset-block">
                                            <div
                                                class="bal-manage-fieldset-title soleyWithdrawFees soleyWithdrawFees4 d-none">
                                                4. Withdrawal Fees</div>
                                            <div
                                                class="bal-manage-fieldset-title soleyWithdrawFees soleyWithdrawFees3 ">
                                                3. Withdrawal Fees</div>
                                            <div class="bal-manage-fieldset">
                                                <div class="conf-withdrawal-block">
                                                    <div class="conf-withdrawal-items">
                                                        <div class="conf-withdrawal-item">
                                                            <div class="conf-withdrawal-item__title">
                                                                You will receive
                                                            </div>
                                                            <div
                                                                class="conf-withdrawal-item__value soleyWithdrawReceive">
                                                                0 USDT
                                                            </div>
                                                        </div>
                                                        <div class="conf-withdrawal-item">
                                                            <div class="conf-withdrawal-item__title">
                                                                Fee
                                                            </div>
                                                            <div class="conf-withdrawal-item__value soleyWithdrawFee">
                                                                        0 USDT
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="btn-wrapper">
                                            <button type="submit" class="purple-btn continue-btn">
                                                <div class="continue-btn__text">
                                                    Continue
                                                </div>
                                                <div class="continue-btn__icon"></div>
                                            </button>
                                        </div>
                                        <input type="hidden" name="withdraw" value="1">
                                        <input type="hidden" name="old_currency" value="usdt">
                                    </form>
                                </div>
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

        $('#currency_bep20').on('change keyup',function () {
			let str = $(this).val();
			str = str.replace(',','.');
		//  alert(str);
            if (str=="USDT_TRX") 
            {
                $('#wallet').val('{{Auth::user()->usdtTrc20}}'); 
            }
            else
            {
                $('#wallet').val('{{Auth::user()->usdtBep20}}');     
            }
              
         
		
			//console.log(summ_usd);
		});

        $('#currency_trc20').on('change keyup',function () {
			let str = $(this).val();
			str = str.replace(',','.');
		//  alert(str);
            if (str=="USDT_TRX") 
            {
                $('#wallet').val('{{Auth::user()->usdtTrc20}}'); 
            }
            else
            {
                $('#wallet').val('{{Auth::user()->usdtBep20}}');     
            }
              
         
		
			//console.log(summ_usd);
		});


        $('#withdrawal_amount').on('change keyup',function () {
			let str = $(this).val();
			str = str.replace(',','.');


            if (str>=20) 
            {
            
            $(".continue-btn").prop("disabled", false);
            $(".continue-btn").css('cursor','pointer').css('opacity',1);
            $('.cashback-info-label').html('');

        
            let  walletType = $('input[name="payment"]:checked').val();

        //    alert(walletType);
            
            if (walletType==1) 
            {
         
                $('.soleyWithdrawReceive').html(str-str*5/100+" USDT");
                $('.soleyWithdrawFee').html(str*5/100+" USDT");
               
            }
            else
            {
                $('.soleyWithdrawReceive').html(str-str*10/100+" USDT");
                $('.soleyWithdrawFee').html(str*10/100+" USDT");
            } 

            }
            else
            {
               
            $(".continue-btn").prop("disabled", true);
            $(".continue-btn").css('cursor','not-allowed').css('opacity','0.5');
            $('.cashback-info-label').html("Minimum  withdrawal is 20 USDT !").css('color', 'red');


            }

		 
          
              
         
		
			//console.log(summ_usd);
		});


        $('input[type=radio][name=payment]').on('change keyup',function () {
			let str = $(this).val();
			let walletType = str.replace(',','.');

          let  withdraw_amount = $('#withdrawal_amount').val();
            if (withdraw_amount>=20) 
            {
            
            $(".continue-btn").prop("disabled", false);
            $(".continue-btn").css('cursor','pointer').css('opacity',1);
            $('.cashback-info-label').html('');

        
          

        //    alert(walletType);
            
            if (walletType==1) 
            {
              

                $('.soleyWithdrawReceive').html(withdraw_amount-withdraw_amount*5/100+" USDT");
                $('.soleyWithdrawFee').html(withdraw_amount*5/100+" USDT");
               
            }
            else
            {
              
                $('.soleyWithdrawReceive').html(withdraw_amount-withdraw_amount*10/100+" USDT");
                $('.soleyWithdrawFee').html(withdraw_amount*10/100+" USDT");
            } 

            }
            else
            {
               
            $(".continue-btn").prop("disabled", true);
            $(".continue-btn").css('cursor','not-allowed').css('opacity','0.5');
            $('.cashback-info-label').html("Minimum  withdrawal is 20 USDT !").css('color', 'red');


            }

		 
          
              
         
		
			//console.log(summ_usd);
		});



    })(jQuery);
</script>

