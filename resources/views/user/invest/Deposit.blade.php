
        <section class="section-new-deposit">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-block">
                            <h2 class="section-title">New investment</h2>
                        </div>
                        <div class="section-descr">
                            Open new deposits. Choose your investment strategy, investment plan and convenient
                            cryptocurrency and invest on profitable conditions.
                        </div>
                        <div class="s-new-deposit-block">
                            <div class="row">
                                <div class="col-12 col-lg-10 col-xl-8 offset-0 offset-lg-1 offset-xl-2">
                                    <div class="new-deposit-block">
                                        <div class="new-deposit-form-block">
                                            <form action="{{route('user.confirm-deposit')}}" method="post"
                                                class="form new-deposit-form soleyDepositForm">
                                                {{ csrf_field() }}

                                                <div class="new-dep-fieldset-block">
                                                    <div class="new-dep-fieldset-title">1. Investment Strategy: <span
                                                            class="text--purple soleyDepositStrategy">Algorithmic
                                                            trading</span></div>
                                                    <div class="new-dep-fieldset">
                                                        <div class="new-dep-strat-radio-items-block">
                                                            <div class="new-dep-strat-radio-items">

                                                                <div class="new-dep-strat-radio-item-wrapper">
                                                                    <label class="new-dep-strat-radio-item">
                                                                        <input data-strategy="Algorithmic trading"
                                                                            type="radio" name="strategy"
                                                                            value="algo" class="radio"
                                                                            checked="checked">
                                                                        <div class="new-dep-strat-radio-item-inner">
                                                                            <div
                                                                                class="new-dep-strat-radio-item__icon">
                                                                                <img class="image"
                                                                                    src="{{asset('')}}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/func-menu/func-menu-link-icon-algorithmic-trading.svg"
                                                                                    alt="">
                                                                            </div>
                                                                            <div
                                                                                class="new-dep-strat-radio-item__title">
                                                                                Algorithmic <br /> trading
                                                                            </div>
                                                                            <div
                                                                                class="new-dep-strat-radio-item__radio-block">
                                                                                <div
                                                                                    class="new-dep-strat-radio-item__radio">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                </div>


                                                                <div class="new-dep-strat-radio-item-wrapper">
                                                                    <label class="new-dep-strat-radio-item disabled">
                                                                        <input data-strategy="Arbitrage trading"
                                                                            type="radio" name="strategy"
                                                                            value="arbitrage" class="radio"
                                                                            disabled='disabled'>
                                                                        <div class="new-dep-strat-radio-item-inner">
                                                                            <div
                                                                                class="new-dep-strat-radio-item__icon">
                                                                                <img class="image"
                                                                                    src="{{asset('')}}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/func-menu/func-menu-link-icon-arbitrage-trading.svg"
                                                                                    alt="">
                                                                            </div>
                                                                            <div
                                                                                class="new-dep-strat-radio-item__title">
                                                                                Arbitrage <br /> trading
                                                                            </div>
                                                                            <div
                                                                                class="new-dep-strat-radio-item__soon-block">
                                                                                <div
                                                                                    class="new-dep-strat-radio-item__soon">
                                                                                    Soon
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                </div>


                                                                <div class="new-dep-strat-radio-item-wrapper">
                                                                    <label class="new-dep-strat-radio-item disabled">
                                                                        <input data-strategy="Professional trading"
                                                                            type="radio" name="strategy"
                                                                            value="prof" class="radio"
                                                                            disabled='disabled'>
                                                                        <div class="new-dep-strat-radio-item-inner">
                                                                            <div
                                                                                class="new-dep-strat-radio-item__icon">
                                                                                <img class="image"
                                                                                    src="{{asset('')}}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/func-menu/func-menu-link-icon-professional-trading.svg"
                                                                                    alt="">
                                                                            </div>
                                                                            <div
                                                                                class="new-dep-strat-radio-item__title">
                                                                                Professional <br /> trading
                                                                            </div>
                                                                            <div
                                                                                class="new-dep-strat-radio-item__soon-block">
                                                                                <div
                                                                                    class="new-dep-strat-radio-item__soon">
                                                                                    Soon
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                                <div class="new-dep-strat-radio-item-wrapper">
                                                                    <label class="new-dep-strat-radio-item disabled">
                                                                        <input data-strategy="Cloud mining"
                                                                            type="radio" name="strategy"
                                                                            value="cloud" class="radio"
                                                                            disabled='disabled'>
                                                                        <div class="new-dep-strat-radio-item-inner">
                                                                            <div
                                                                                class="new-dep-strat-radio-item__icon">
                                                                                <img class="image"
                                                                                    src="{{asset('')}}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/func-menu/func-menu-link-icon-cloud-mining.svg"
                                                                                    alt="">
                                                                            </div>
                                                                            <div
                                                                                class="new-dep-strat-radio-item__title">
                                                                                Cloud <br /> mining
                                                                            </div>
                                                                            <div
                                                                                class="new-dep-strat-radio-item__soon-block">
                                                                                <div
                                                                                    class="new-dep-strat-radio-item__soon">
                                                                                    Soon
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>











                                                <div class="new-dep-fieldset-block">
                                                    <div class="new-dep-fieldset-title">2. Currency: <span
                                                            class="text--purple soleyDepositCurrency">Tether</span>
                                                    </div>
                                                    <div class="new-dep-fieldset">
                                                        <div class="currency-radio-items-block">
                                                            <div class="currency-radio-items">
                                                                <div class="currency-radio-item-wrapper">
                                                                    <label class="currency-radio-item">
                                                                        <input type="radio" name="currency"
                                                                            value="USDT_BSC" class="radio"
                                                                            checked="checked"
                                                                            data-balance="50.175235">
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
                                                                            <div
                                                                                class="currency-radio-item__radio-block">
                                                                                <div
                                                                                    class="currency-radio-item__radio">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                                <div class="currency-radio-item-wrapper">
                                                                    <label class="currency-radio-item">
                                                                        <input type="radio" name="currency"
                                                                            value="USDT_TRX" class="radio"
                                                                            data-balance="0">
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
                                                                            <div
                                                                                class="currency-radio-item__radio-block">
                                                                                <div
                                                                                    class="currency-radio-item__radio">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                             
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="new-dep-fieldset-block">
                                                    <div class="new-dep-fieldset-title">Deposit <span
                                                            class="text--purple">Settings</span></div>
                                                    <div class="new-dep-fieldset">
                                                        <div class="field-block field-block--deposit">
                                                            <div class="field-title-block">
                                                                <div class="field-title">
                                                                    Investment amount <span
                                                                        class="text--purple">*</span>
                                                                </div>
                                                                <div class="field-title-min-max-block">
                                                                    <div class="field-title-max">
                                                                        <span
                                                                            class="field-title-max__title soleyDepositMinMax">100
                                                                            USDT - Unlimited</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="field field--iconed field--input field--amount">
                                                                <div class="field__icon"></div>
                                                               

																<select name="amount" id="" required>

																<option value="100">100 {{generalDetail()->cur_text}}</option>
																<option value="250">250 {{generalDetail()->cur_text}}</option>
																<option value="500">500 {{generalDetail()->cur_text}}</option>
																<option value="501">501 {{generalDetail()->cur_text}}</option>
																<option value="750">750 {{generalDetail()->cur_text}}</option>
																<option value="1000">1000 {{generalDetail()->cur_text}}</option>
																<option value="1001">1001 {{generalDetail()->cur_text}}</option>
																<option value="2500">2500 {{generalDetail()->cur_text}}</option>
																<option value="5000">5000 {{generalDetail()->cur_text}}</option>
																<option value="5001">5001 {{generalDetail()->cur_text}}</option>
																<option value="10000">10000 {{generalDetail()->cur_text}}</option>
																<option value="15000">15000 {{generalDetail()->cur_text}}</option>
																<option value="15001">15001 {{generalDetail()->cur_text}}</option>
																<option value="30000">30000 {{generalDetail()->cur_text}}</option>
																<option value="45000">45000 {{generalDetail()->cur_text}}</option>
																</select>
                                                                
                                                            </div>
                                                            
                                                                <div class="field-block">
                                                        <div class="field-title-block">
                                                            <div class="field-title">
                                                               Username<span class="text--purple">*</span>
                                                            </div>
                                                        </div>
                                                        <div class="field field--iconed field--input field--username">
                                                            <div class="field__icon"></div>
                                                            <input type="text" name="username" maxlength="255"
                                                                value=""
                                                                placeholder="Username" data-response="sponsor_res" class="check_sponsor_exist">
                                                            <div class="change-pswd-type-link-block">
                                                                <span id="sponsor_res"></span>
                                                            </div>
                                                           

                                                        </div>
                                                    </div>
                                                        </div>




                                                        <div
                                                            class="field-block field-block--amount soleyDepositPayments">
                                                            <div class="field-title-block">
                                                                <div class="field-title">
                                                                    Payment from <span class="text--purple">*</span>
                                                                </div>
                                                            </div>
                                                            <div class="radio-items-block ">
                                                                <div class="radio-items">


                                                                    <div class="radio-item-wrapper">
                                                                        <label class="radio-item">
                                                                            <input type="radio" name="payment"
                                                                                value="crypto"
                                                                                class="radio" checked="checked">
                                                                            <div class="radio-item-inner">
                                                                                <div class="radio-item__radio"></div>
                                                                                <div class="radio-item__text">Crypto
                                                                                </div>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio-item-wrapper">
                                                                        <label class="radio-item">
                                                                            <input type="radio" name="payment"
                                                                                value="cash"
                                                                                class="radio">
                                                                            <div class="radio-item-inner">
                                                                                <div class="radio-item__radio"></div>
                                                                                <div class="radio-item__text">Cash Wallet
                                                                                </div>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                   
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>



                                                    </div>
                                                </div>






                                                <div class="btn-wrapper">
                                                    <button type="submit" class="purple-btn continue-star-btn submit-btn">
                                                        <div class="continue-star-btn__text">
                                                            Continue
                                                        </div>
                                                        <div class="continue-star-btn__icon">

                                                        </div>
                                                    </button>
                                                </div>
                                                <input type="hidden" name="old_currency" value="usdt">
                                                <input type="hidden" name="plan" value="1">
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
    $('.check_sponsor_exist').keyup(function(e) {
        var ths = $(this);
        var res_area = $(ths).attr('data-response');
        var sponsor = $(this).val();
        // alert(sponsor); 
        $.ajax({
            type: "POST",
            url: "{{ route('getUserName') }}",
            data: {
                "user_id": sponsor,
                "_token": "{{ csrf_token() }}",
            },
            success: function(response) {
                // alert(response);      
                if (response != 1) {
                    // alert("hh");
                    $(".submit-btn").prop("disabled", false);
                    $('#' + res_area).html(response).css('color', '#000').css('font-weight', '800')
                        .css('margin-buttom', '10px');
                } else {
                    // alert("hi");
                    $(".submit-btn").prop("disabled", true);
                    $('#' + res_area).html("User ID Not exists!").css('color', 'red').css(
                        'margin-buttom', '10px');
                }
            }
        });
    });
</script>
