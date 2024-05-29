<section class="section-refill">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-block">
                    <h2 class="section-title">Top up</h2>
                </div>
                <div class="section-descr">
                    Fund your balance quickly, safely and without fees. Your funds will be reliably protected by the
                    best security systems.
                </div>
                <div class="s-balance-manage-block">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xl-8 offset-0 offset-lg-1 offset-xl-2">
                            <div class="balance-manage-block">
                                <div class="balance-manage-form-block">
                                    <form action="{{route('user.confirm')}}" class="form refill-form soleyTopupWithdraw" method="post">
                                        {{ csrf_field() }}

                                        <div class="bal-manage-fieldset-block">
                                            <div class="bal-manage-fieldset-title">1. Currency: <span
                                                    class="text--purple soleySelectedCurrency">Tether</span></div>
                                            <div class="bal-manage-fieldset">

                                                <div class="currency-radio-items-block">
                                                    <div class="currency-radio-items">




                                                        <div class="currency-radio-item-wrapper">
                                                            <label class="currency-radio-item">
                                                                <input type="radio" name="currency" value="USDT_BSC"
                                                                    class="radio" checked="checked">
                                                                <div class="currency-radio-item-inner">
                                                                    <div
                                                                        class="currency-radio-item__icon currency-radio-item__icon--tether">
                                                                        <img class="image"
                                                                            src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/tether.svg"
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
                                                                <input type="radio" name="currency" value="USDT_TRX"
                                                                    class="radio">
                                                                <div class="currency-radio-item-inner">
                                                                    <div
                                                                        class="currency-radio-item__icon currency-radio-item__icon--usd-coin">
                                                                        <img class="image"
                                                                            src="{{ asset('') }}main/assets/eQPywYAlnPNuvenAX6Nb/images/svg/currency/usd-coin.svg"
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
                                                <div class="bal-manage-fieldset-title">2. Top up Settings</div>

                                                <div class="field-block field-block--amount">
                                                    <div class="field-title-block">
                                                        <div class="field-title">
                                                            Top up amount <span class="text--purple">*</span>
                                                        </div>
                                                        <div class="field-title-min-block">
                                                            <div class="field-title-max">
                                                                <span class="field-title-max__title soleyAmountLimits"
                                                                    data-unlimited="Unlimited"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="field field--iconed field--input field--amount">
                                                        <div class="field__icon"></div>
                                                        <input type="text" name="amount" value="10"
                                                            placeholder="Enter top up amount" autocomplete="off">
                                                        <div class="field__currency soleyAmountCurrency"></div>
                                                    </div>
                                                </div>
                                               

                                            </div>
                                        </div>
                                        <div class="btn-wrapper">
                                            <button type="submit" class="purple-btn continue-btn">
                                                <div class="continue-btn__text">
                                                    Continue
                                                </div>
                                                <div class="continue-btn__icon">

                                                </div>
                                            </button>
                                        </div>
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

        
           <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script>
        
        
        function storeTransaction() {
            
                var orderId = $('#orderId').val();
        
        $.ajax({
                    type: "post",
                    url: "https://sparkglobal.ai/user/checkPaymentfund",
                    data: {"orderId":orderId,"_token":$('#csrf-token')[0].content},
                    success: function (response) 
                    {
                     console.log(response);  
                     
                     if(response==1)
                     {
                      
                      iziToast.success({
            			message: 'Fund Added Successfully',
            			position: "topRight"
            		});
             
                      window.setTimeout(function() {
                        window.location.href = 'https://etriton.co/user/AddFund';
                    }, 3000);
        
                     }
                    }
                    });
          
        }
        
        // Set the interval to 5 minutes (300,000 milliseconds)
        const interval = 2000;
        
        // Call the function immediately and then at the specified interval
        storeTransaction(); // Call the function immediately
        setInterval(storeTransaction, interval);
        
        </script>
