<section class="section-setting">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-block">
                    <h2 class="section-title">My wallets</h2>
                </div>
                <div class="section-descr">
                    Safe control of your crypto wallets. When withdrawing funds, the authorized wallets will be specified by default.

                </div>
                <div class="s-setting-block">
                    <div class="row">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-6 offset-0 offset-md-1 offset-lg-2 offset-xl-3">
                            <div class="setting-block">
                                <div class="setting-tabs-content-block">
                                    <div class="setting-tabs-content">
                                        <div class="setting-tab-content active" style="    padding-top: 0px;">

                                            <div class="setting-form-block">
                                                <form action="{{route('user.update-wallet')}}"
                                                    class="form setting-password-form" method="post">
                                                    {{ csrf_field() }}
                                                    <div class="setting-form-title-block">
                                                        <div class="setting-form-title">
                                                            Add new wallet

                                                        </div>
                                                    </div>
                                                    <div class="setting-form-descr">
                                                        Carefully check your new wallet details before adding to your personal account

                                                    </div>

                                                    <div class="field-block">
                                                        <div class="field-title-block">
                                                            <div class="field-title">
                                                                USDT BEP20 address<span class="text--purple">*</span>
                                                            </div>
                                                        </div>
                                                        <div class="field field--iconed field--input field--pin">
                                                            <div class="field__icon"></div>
                                                            <input type="text" name="usdtBep20" 
                                                                maxlength="255"
                                                                value="{{ $profile_data ? $profile_data->usdtBep20 : '' }}"
                                                                placeholder="USDT BEP20 address">
                                                            <div class="change-pswd-type-link-block">

                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div class="field-block">
                                                        <div class="field-title-block">
                                                            <div class="field-title">
                                                                USDT TRC20 address<span class="text--purple">*</span>
                                                            </div>
                                                        </div>
                                                        <div class="field field--iconed field--input field--pin">
                                                            <div class="field__icon"></div>
                                                            <input type="text" name="usdtTrc20" maxlength="255"
                                                                value="{{ $profile_data ? $profile_data->usdtTrc20 : '' }}"
                                                                placeholder="USDT TRC20 address">
                                                            <div class="change-pswd-type-link-block">

                                                            </div>

                                                        </div>
                                                    </div>
                                                    

                                                    <div class="btn-wrapper">
                                                        <button type="submit" class="purple-btn continue-star-btn">
                                                            <div class="continue-star-btn__text">
                                                                Save
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


@if (session('WalletCode'))
    <div class="modal-backdrop fade"></div>
    <script>
        $(document).ready(function() {
            $('#soleyModalConfirmationEmail').toggle();
            $("#soleyModalConfirmationEmail").addClass("show");
            $(".modal-backdrop").addClass("show");



            $('#closeEmailModel').click(function() {

                $('#soleyModalConfirmationEmail').toggle();
                $("#soleyModalConfirmationEmail").removeClass("show");
                $(".modal-backdrop").removeClass("show");
            });
        });
    </script>
@endif





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
