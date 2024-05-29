<section class="section-setting">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-block">
                    <h2 class="section-title">fund transfer </h2>
                </div>
                <div class="section-descr">
                    transfer your funds. Carefully check your wallet details before payment

                </div>
                <div class="s-setting-block">
                    <div class="row">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-6 offset-0 offset-md-1 offset-lg-2 offset-xl-3">
                            <div class="setting-block">
                                <div class="setting-tabs-content-block">
                                    <div class="setting-tabs-content">
                                        <div class="setting-tab-content active" style="    padding-top: 0px;">

                                            <div class="setting-form-block">
                                                <form action="{{route('user.transfer_fund')}}"
                                                    class="form setting-password-form" method="post">
                                                    {{ csrf_field() }}
                                                    <div class="setting-form-title-block">
                                                        <div class="setting-form-title">
                                                          fund transfer

                                                        </div>
                                                    </div>
                                                    <div class="setting-form-descr">
                                                        transfer your funds. Carefully check your wallet details before payment
                                                    </div>

                                                    <div class="field-block">
                                                        <div class="field-title-block">
                                                            <div class="field-title">
                                                              Enter Amount<span class="text--purple">*</span>
                                                            </div>
                                                        </div>
                                                        <div class="field field--iconed field--input field--amount">
                                                            <div class="field__icon"></div>
                                                            <input type="text" name="amount" 
                                                                value=""
                                                                placeholder="Enter Amount">
                                                            <div class="change-pswd-type-link-block">

                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="field-block">
                                                        <div class="field-title-block">
                                                            <div class="field-title">
                                                               User Id<span class="text--purple">*</span>
                                                            </div>
                                                        </div>
                                                        <div class="field field--iconed field--input field--username">
                                                            <div class="field__icon"></div>
                                                            <input type="text" name="user_id" maxlength="255"
                                                                value=""
                                                                placeholder="User Id" data-response="sponsor_res" class="check_sponsor_exist">
                                                            <div class="change-pswd-type-link-block">
                                                                <span id="sponsor_res"></span>
                                                            </div>
                                                           

                                                        </div>
                                                    </div>
                                                    
                                                    <div class="btn-wrapper">
                                                        <button type="submit" class="purple-btn continue-star-btn">
                                                            <div class="continue-star-btn__text">
                                                                submit
                                                            </div>
                                                            <div class="continue-star-btn__icon"></div>
                                                        </button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="setting-tab-content">


                                          

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





<div class="modals">
    <div class="modal custom-modal fade" id="soleyModalConfirmationEmail" tabindex="-1" aria-model="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="modal-close" id="closeEmailModel"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-body-content">
                        <div class="modal-title-block">
                            <div class="modal-title h2">Confirmation</div>
                        </div>

                        <div class="modal-descr">
                            If you do not receive the verification code, wait for 5 - 15 minutes and check SPAM folder.
                        </div>

                        <div class="confirm-email-form-block">
                            <form action="{{route('user.wallet_change')}}" class="form confirm-email-form"
                                method="post">
                                {{ csrf_field() }}
                                <div class="field-block">
                                    <div class="field-title-block">
                                        <div class="field-title">
                                            Verification code from email <span class="text--purple">*</span>
                                        </div>
                                    </div>
                                    <div class="field field--iconed field--input field--email">
                                        <div class="field__icon"></div>
                                        <input type="text" name="code" autocomplete="off"
                                            placeholder="Enter code from email">
                                    </div>
                                </div>
                                <div class="btn-wrapper">
                                    <button type="submit" class="purple-btn continue-btn">
                                        <div class="continue-btn__text">
                                            Confirm
                                        </div>
                                        <div class="continue-btn__icon">

                                        </div>
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
