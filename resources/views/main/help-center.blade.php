@include('layouts.mainsite.header')





        <section class="section-faq soleyFaq">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="faq-top-block">
                            <div class="faq-top">
                                <div class="row">
                                    <div class="col-12 col-md-7 col-lg-8 col-xxl-9">
                                        <div class="faq-top-left">
                                            <div class="faq-top-content">
                                                <div class="faq-top-subtitle-block">
                                                    <div class="faq-top-subtitle">
                                                        <div class="faq-top-subtitle__icon"></div>
                                                        <div class="faq-top-subtitle__text">Help center</div>
                                                    </div>
                                                </div>
                                                <div class="faq-top-title-block">
                                                    <div class="h1 faq-top-title">
                                                        Help center
                                                    </div>
                                                </div>
                                                <div class="faq-top-descr">
                                                    {{siteName()}} is a sophisticated platform and to succeed, you need to have
                                                    some experience and knowledge. We have posted answers to the most
                                                    relevant questions.
                                                </div>
                                                <div class="faq-top-search-form-block">
                                                    <form action="#" class="faq-top-search-form form">
                                                        <div class="faq-top-search-form-field">
                                                            <div
                                                                class="field field--iconed field--input field--search">
                                                                <div class="field__icon"></div>
                                                                <input type="text" name="soley_search"
                                                                    autocomplete="off" placeholder="Question">
                                                            </div>

                                                        </div>
                                                        <div class="faq-top-search-form-btn">
                                                            <div class="btn-wrapper">
                                                                <button type="submit"
                                                                    class="purple-btn iconed-btn iconed-btn--stars">
                                                                    <div class="iconed-btn__text">
                                                                        Search
                                                                    </div>
                                                                    <div class="iconed-btn__icon"></div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-5 col-lg-4 col-xxl-3 d-none d-md-block">
                                        <div class="faq-top-right">
                                            <div class="ask-question-block">
                                                <div class="ask-question-descr">
                                                    If you have a problem working on the {{siteName()}} platform and you have not
                                                    found a suitable answer, please contact our support team, they will
                                                    surely help you.
                                                </div>
                                                <div class="ask-question-btn-block">
                                                    <a href="javascript:;"
                                                        onclick="tidioChatApi.display(true);tidioChatApi.open()"
                                                        class="ask-question-btn purple-tr-bd-btn">
                                                        Ask question
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-sort-block">
                            <div class="faq-sort-mobile-block soleyFaqMobileSections">
                                <div class="faq-sort-mobile-block-title">
                                    Categories
                                </div>
                                <div class="faq-sort-mobile-dropdown-menu-block">
                                    <a href="javascript:void(0)" class="faq-sort-mobile-dropdown-menu-btn"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        All questions
                                    </a>
                                    <div class="faq-sort-mobile-dropdown-menu dropdown-menu">
                                        <ul>
                                            <li class="faq-sort-mobile-dropdown-menu-item">
                                                <a href="javascript:void(0)"
                                                    class="faq-sort-mobile-dropdown-menu-link" data-type="all">
                                                    All questions
                                                </a>
                                            </li>
                                            <li class="faq-sort-mobile-dropdown-menu-item">
                                                <a href="javascript:void(0)"
                                                    class="faq-sort-mobile-dropdown-menu-link"
                                                    data-type="folder1">Company</a>
                                            </li>
                                            <li class="faq-sort-mobile-dropdown-menu-item">
                                                <a href="javascript:void(0)"
                                                    class="faq-sort-mobile-dropdown-menu-link"
                                                    data-type="folder2">Personal account</a>
                                            </li>
                                            <li class="faq-sort-mobile-dropdown-menu-item">
                                                <a href="javascript:void(0)"
                                                    class="faq-sort-mobile-dropdown-menu-link"
                                                    data-type="folder3">Investments</a>
                                            </li>
                                            <li class="faq-sort-mobile-dropdown-menu-item">
                                                <a href="javascript:void(0)"
                                                    class="faq-sort-mobile-dropdown-menu-link"
                                                    data-type="folder4">Withdrawals</a>
                                            </li>
                                            <li class="faq-sort-mobile-dropdown-menu-item">
                                                <a href="javascript:void(0)"
                                                    class="faq-sort-mobile-dropdown-menu-link"
                                                    data-type="folder5">Affiliate program</a>
                                            </li>
                                            <li class="faq-sort-mobile-dropdown-menu-item">
                                                <a href="javascript:void(0)"
                                                    class="faq-sort-mobile-dropdown-menu-link"
                                                    data-type="folder6">{{siteName()}} Premium</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-sort-items-block soleyFaqSections">
                                <div class="faq-sort-items">
                                    <div class="faq-sort-item-wrapper">
                                        <div class="faq-sort-item active" data-type="all">
                                            <div class="faq-sort-item__icon-block">
                                                <div class="faq-sort-item__icon faq-sort-item__icon--all"></div>
                                            </div>
                                            <div class="faq-sort-item__count">
                                                37 questions
                                            </div>
                                            <div class="faq-sort-item__title">
                                                All questions
                                            </div>
                                            <div class="faq-sort-item__descr">
                                                Full list of questions
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-sort-item-wrapper">
                                        <div class="faq-sort-item" data-type="folder1">
                                            <div class="faq-sort-item__icon-block">
                                                <div class="faq-sort-item__icon faq-sort-item__icon--module"></div>
                                            </div>
                                            <div class="faq-sort-item__count">
                                                6 questions
                                            </div>
                                            <div class="faq-sort-item__title" style="font-size:18px;">
                                                Company
                                            </div>
                                            <div class="faq-sort-item__descr" style="margin-top:6px;">
                                                Questions about {{siteName()}} Trading Group
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-sort-item-wrapper">
                                        <div class="faq-sort-item" data-type="folder2">
                                            <div class="faq-sort-item__icon-block">
                                                <div class="faq-sort-item__icon faq-sort-item__icon--user"></div>
                                            </div>
                                            <div class="faq-sort-item__count">
                                                7 questions
                                            </div>
                                            <div class="faq-sort-item__title" style="font-size:18px;">
                                                Personal account
                                            </div>
                                            <div class="faq-sort-item__descr" style="margin-top:6px;">
                                                Find out about Personal account features
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-sort-item-wrapper">
                                        <div class="faq-sort-item" data-type="folder3">
                                            <div class="faq-sort-item__icon-block">
                                                <div class="faq-sort-item__icon faq-sort-item__icon--money-cash"></div>
                                            </div>
                                            <div class="faq-sort-item__count">
                                                8 questions
                                            </div>
                                            <div class="faq-sort-item__title" style="font-size:18px;">
                                                Investments
                                            </div>
                                            <div class="faq-sort-item__descr" style="margin-top:6px;">
                                                Advice on investments in {{siteName()}} Trading
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-sort-item-wrapper">
                                        <div class="faq-sort-item" data-type="folder4">
                                            <div class="faq-sort-item__icon-block">
                                                <div class="faq-sort-item__icon faq-sort-item__icon--safe"></div>
                                            </div>
                                            <div class="faq-sort-item__count">
                                                3 questions
                                            </div>
                                            <div class="faq-sort-item__title" style="font-size:18px;">
                                                Withdrawals
                                            </div>
                                            <div class="faq-sort-item__descr" style="margin-top:6px;">
                                                How to withdraw funds from {{siteName()}} Trading
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-sort-item-wrapper">
                                        <div class="faq-sort-item" data-type="folder5">
                                            <div class="faq-sort-item__icon-block">
                                                <div class="faq-sort-item__icon faq-sort-item__icon--shield-done">
                                                </div>
                                            </div>
                                            <div class="faq-sort-item__count">
                                                11 questions
                                            </div>
                                            <div class="faq-sort-item__title" style="font-size:18px;">
                                                Affiliate program
                                            </div>
                                            <div class="faq-sort-item__descr" style="margin-top:6px;">
                                                Questions about {{siteName()}} Trading Affiliate Program
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-sort-item-wrapper">
                                        <div class="faq-sort-item" data-type="folder6">
                                            <div class="faq-sort-item__icon-block">
                                                <div class="faq-sort-item__icon faq-sort-item__icon--stars"></div>
                                            </div>
                                            <div class="faq-sort-item__count">
                                                2 questions
                                            </div>
                                            <div class="faq-sort-item__title" style="font-size:18px;">
                                                {{siteName()}} Premium
                                            </div>
                                            <div class="faq-sort-item__descr" style="margin-top:6px;">
                                                Learn how to use {{siteName()}} premium
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="faq-items-block">
                            <div class="faq-items soleyFaqItems">
                                <div class="faq-item soleyFaqItemsItem" data-type="folder1">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											What companies are included in the {{siteName()}} Trading Group? Currently {{siteName()}} Trading Group consists of three companies: 1. {{siteName()}} Investments Limited is a company incorporated in the Hong Kong Special Administrative Region. Date and number of state registration in the Registry of Legal Entities of the Hong Kong Special Administrative Region 0358506. 2. {{siteName()}} Investments PTY Ltd is a company incorporated in Australia. Date and number of state registration in the Australian Registry of Legal Entities 650 774 315. 3. {{siteName()}} Trading Limited is a company incorporated in the United Kingdom of Great Britain and Northern Ireland. Date and number of state registration in the United Kingdom of Great Britain and Northern Ireland Registry - 15286026
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            What companies are included in the {{siteName()}} Trading Group?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>Currently {{siteName()}} Trading Group consists of three companies:</p>
                                            <p>1. {{siteName()}} Investments Limited is a company incorporated in the Hong Kong
                                                Special Administrative Region. Date and number of state registration in
                                                the Registry of Legal Entities of the Hong Kong Special Administrative
                                                Region 0358506.</p>
                                            <p>2. {{siteName()}} Investments PTY Ltd is a company incorporated in Australia. Date
                                                and number of state registration in the Australian Registry of Legal
                                                Entities 650 774 315.</p>
                                            <p>3. {{siteName()}} Trading Limited is a company incorporated in the United Kingdom
                                                of Great Britain and Northern Ireland. Date and number of state
                                                registration in the United Kingdom of Great Britain and Northern Ireland
                                                Registry - 15286026</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder1">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											Where does {{siteName()}} Trading Group register its companies? The jurisdictions of Hong Kong (Hong Kong Special Administrative Region), Australia, and the United Kingdom of Great Britain and Northern Ireland (UK) have officially registered {{siteName()}} Trading Group companies. Therefore, companies and a group of companies are required to comply with the laws of their jurisdictions and the requirements of regulators. Legislation in Hong Kong, Australia, and the UK effectively protects investors' rights, therefore all investments made by users on the {{siteName()}} Trading platform are legally protected.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            Where does {{siteName()}} Trading Group register its companies?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>The jurisdictions of Hong Kong (Hong Kong Special Administrative Region),
                                                Australia, and the United Kingdom of Great Britain and Northern Ireland
                                                (UK) have officially registered {{siteName()}} Trading Group companies.
                                                Therefore, companies and a group of companies are required to comply
                                                with the laws of their jurisdictions and the requirements of regulators.
                                                Legislation in Hong Kong, Australia, and the UK effectively protects
                                                investors' rights, therefore all investments made by users on the Soley
                                                Trading platform are legally protected.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder1">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											How long has {{siteName()}} Trading Group been present on the market? The first company of {{siteName()}} Trading Group was incorporated in the 1992 year. This is when the history of {{siteName()}} Trading Group began. However, work on the cryptocurrency market began much earlier. {{siteName()}} Trading team specialists participated in the formation of blockchain technologies, work on the trading platform began in 2010 year.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            How long has {{siteName()}} Trading Group been present on the market?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>The first company of {{siteName()}} Trading Group was incorporated in the 1992
                                                year. This is when the history of {{siteName()}} Trading Group began. However,
                                                work on the cryptocurrency market began much earlier. {{siteName()}} Trading team
                                                specialists participated in the formation of blockchain technologies,
                                                work on the trading platform began in 2010 year.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder1">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											Who can use the {{siteName()}} Trading platform? Users can use {{siteName()}} Trading Platform without any restrictions on citizenship or residence. Users Should Not Have Legislative Restrictions on Using the {{siteName()}} Trading Platform. If local laws impose restrictions on use the {{siteName()}} Trading Platform, all the risks of such use lie with the User. Users must independently monitor the implementation of the legislation in their country of residence or citizenship.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            Who can use the {{siteName()}} Trading platform?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>Users can use {{siteName()}} Trading Platform without any restrictions on
                                                citizenship or residence. Users Should Not Have Legislative Restrictions
                                                on Using the {{siteName()}} Trading Platform. If local laws impose restrictions
                                                on use the {{siteName()}} Trading Platform, all the risks of such use lie with
                                                the User.</p>
                                            <p>Users must independently monitor the implementation of the legislation in
                                                their country of residence or citizenship.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder1">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											What age is required to use the {{siteName()}} Trading platform? Only mature users who have legal ownership of invested funds are permitted to use the {{siteName()}} Trading platform. The majority age in the countries where {{siteName()}} Trading Group is registered is 18 years. If local laws impose additional age restrictions on the use of {{siteName()}} Trading platform, all the risks of such use lie with the User. Users must independently monitor the implementation of the legislation in their country of residence or citizenship.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            What age is required to use the {{siteName()}} Trading platform?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>Only mature users who have legal ownership of invested funds are
                                                permitted to use the {{siteName()}} Trading platform. The majority age in the
                                                countries where {{siteName()}} Trading Group is registered is 18 years. If local
                                                laws impose additional age restrictions on the use of {{siteName()}} Trading
                                                platform, all the risks of such use lie with the User. Users must
                                                independently monitor the implementation of the legislation in their
                                                country of residence or citizenship.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder1">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											How risky trading on the {{siteName()}} Trading platform is? {{siteName()}} Trading takes all possible measures to minimize risks. User funds and all transactions are securely protected by the most advanced IT security systems. {{siteName()}} Trading Platform is committed to ensuring that transactions are carried out correctly and is doing its best to provide customers with maximum income. Note that business risks associated with trade and investment lie on Users. High yielding investments in cryptocurrency depend on the state of the market, which can quickly and unpredictably change. We strongly recommend careful risk assessment before any transactions and assume that investors correctly assess the risk level. {{siteName()}} Trading, like any investment company, cannot guarantee profit. The company has implemented a risk management system; all strategies are thoroughly analyzed and tested, only strategies with the best risk-return ratio are offered to Users.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            How risky trading on the {{siteName()}} Trading platform is?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>{{siteName()}} Trading takes all possible measures to minimize risks. User funds
                                                and all transactions are securely protected by the most advanced IT
                                                security systems. {{siteName()}} Trading Platform is committed to ensuring that
                                                transactions are carried out correctly and is doing its best to provide
                                                customers with maximum income.</p>
                                            <p>Note that business risks associated with trade and investment lie on
                                                Users. High yielding investments in cryptocurrency depend on the state
                                                of the market, which can quickly and unpredictably change. We strongly
                                                recommend careful risk assessment before any transactions and assume
                                                that investors correctly assess the risk level. {{siteName()}} Trading, like any
                                                investment company, cannot guarantee profit. The company has implemented
                                                a risk management system; all strategies are thoroughly analyzed and
                                                tested, only strategies with the best risk-return ratio are offered to
                                                Users.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder2">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											How to register an account on the {{siteName()}} Trading Platform? To register your personal account, go to "Sign Up» page. Fill out the registration form by entering your email address or mobile phone number, creating a username, and creating a password to log in to your account. Please note: Do not use simple names, dates or letters for password. We recommend using a password of at least 8 characters, consisting of letters, numbers and symbols. Never share your password with anyone. By pressing the “Create account” button, you automatically agree to the User Agreement. Before registering, we advise you to study the User Agreement thoroughly and only proceed if you agree. {{siteName()}} Trading is not responsible for the loss of Account funds due to the receipt of the password by third parties.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            How to register an account on the {{siteName()}} Trading Platform?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>To register your personal account, go to "Sign Up» page. Fill out the
                                                registration form by entering your email address or mobile phone number,
                                                creating a username, and creating a password to log in to your account.
                                                Please note: Do not use simple names, dates or letters for password. We
                                                recommend using a password of at least 8 characters, consisting of
                                                letters, numbers and symbols. Never share your password with anyone.</p>
                                            <p>By pressing the “Create account” button, you automatically agree to the
                                                User Agreement. Before registering, we advise you to study the User
                                                Agreement thoroughly and only proceed if you agree.</p>
                                            <p>{{siteName()}} Trading is not responsible for the loss of Account funds due to the
                                                receipt of the password by third parties.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder2">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											Is it possible to register several {{siteName()}} Trading Platform accounts? No, it is not possible. The registration of multiple accounts is not allowed. Please note that if your multiple accounts will be found, your funds may be blocked. It is possible that a third party will use the client’s IP address. In this case, we strongly recommend you to inform our support team about such transactions in order to avoid blocking. 
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            Is it possible to register several {{siteName()}} Trading Platform accounts?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>No, it is not possible. The registration of multiple accounts is not
                                                allowed. Please note that if your multiple accounts will be found, your
                                                funds may be blocked. It is possible that a third party will use the
                                                client’s IP address. In this case, we strongly recommend you to inform
                                                our support team about such transactions in order to avoid blocking.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder2">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											How to change your password? To change the password on the "Settings" page, log in to the "Password" tab. Enter the current password in the dialogue box. Create and enter a new password. We recommend using a password of at least 8 characters, consisting of letters, numbers and symbols. Never share your password with anyone.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            How to change your password?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>To change the password on the "Settings" page, log in to the "Password"
                                                tab. Enter the current password in the dialogue box. Create and enter a
                                                new password. We recommend using a password of at least 8 characters,
                                                consisting of letters, numbers and symbols. Never share your password
                                                with anyone.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder2">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											What is a payment password? To protect your account, any withdrawal transactions must be supported by a payment password. To set your payment password on the "Settings" page, log in to the "Payment password" tab. Create and enter a new password. We recommend using a password of at least 8 characters, consisting of letters, numbers and symbols. Never share your payment password with anyone.  {{siteName()}} Trading is not responsible for the loss of Account funds due to the receipt of the payment password by third parties.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            What is a payment password?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>To protect your account, any withdrawal transactions must be supported by
                                                a payment password.</p>
                                            <p>To set your payment password on the "Settings" page, log in to the
                                                "Payment password" tab. Create and enter a new password. We recommend
                                                using a password of at least 8 characters, consisting of letters,
                                                numbers and symbols. Never share your payment password with anyone. </p>
                                            <p>{{siteName()}} Trading is not responsible for the loss of Account funds due to the
                                                receipt of the payment password by third parties.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder2">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											What is a two-factor authentication? Two-factor authentication (2FA) is a technology designed to further protect your account and your funds. 2FA will not allow anyone to log into your account even if they know your passwords. We strongly recommend you ещ install the 2FA feature when you register your account. Download on your Android or iOS smartphone Google Authenticator app from GooglePlay or AppStore respectively.  Enter the "Google Authenticator" tab on the "Settings" page, and get your unique QR code. Using the Google Authenticator app, scan the QR code and get a digital token. Copy the token to the "Enter token from APP" field and click Activate 2FA. Done! Your personal account is protected by 2FA.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            What is a two-factor authentication?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>Two-factor authentication (2FA) is a technology designed to further
                                                protect your account and your funds. 2FA will not allow anyone to log
                                                into your account even if they know your passwords. We strongly
                                                recommend you ещ install the 2FA feature when you register your account.
                                            </p>
                                            <p>Download on your Android or iOS smartphone Google Authenticator app from
                                                GooglePlay or AppStore respectively. </p>
                                            <p>Enter the "Google Authenticator" tab on the "Settings" page, and get your
                                                unique QR code.</p>
                                            <p>Using the Google Authenticator app, scan the QR code and get a digital
                                                token.</p>
                                            <p>Copy the token to the "Enter token from APP" field and click Activate
                                                2FA.</p>
                                            <p>Done! Your personal account is protected by 2FA.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder2">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											How do I authorize new cryptocurrency wallets? To withdraw funds from the {{siteName()}} Trading platform we strongly recommend to authorize your cryptocurrency wallets. To do this, go to the page "Wallets". Fill in the forms on the page. Specify the cryptocurrency and the address of your cryptocurrency wallet.  Specify (if applicable to your wallet) Destination tag or Memo. After clicking the "Add" button, the wallet will be authorized and will appear in your list of available wallets. Now you will be able to withdraw your funds on a regular basis. If you enable 2FA, confirm the operation with the Google Authenticator app on your smartphone. If you change your wallet address, you will also need 2FA confirmation.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            How do I authorize new cryptocurrency wallets?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>To withdraw funds from the {{siteName()}} Trading platform we strongly recommend
                                                to authorize your cryptocurrency wallets. To do this, go to the page
                                                "Wallets".</p>
                                            <p>Fill in the forms on the page.</p>
                                            <p>Specify the cryptocurrency and the address of your cryptocurrency wallet.
                                            </p>
                                            <p>Specify (if applicable to your wallet) Destination tag or Memo.</p>
                                            <p>After clicking the "Add" button, the wallet will be authorized and will
                                                appear in your list of available wallets. Now you will be able to
                                                withdraw your funds on a regular basis.</p>
                                            <p>If you enable 2FA, confirm the operation with the Google Authenticator
                                                app on your smartphone.</p>
                                            <p>If you change your wallet address, you will also need 2FA confirmation.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder2">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											How do I restore access to my account? If you have forgotten your password, you can recover it on the "Restore access" page. You will need the email address or mobile phone number you used to register. Enter the current e-mail address and the password recovery data will be sent to it. In case of registration by phone, automatic recovery is impossible. You should contact support, where you will receive all the necessary instructions.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            How do I restore access to my account?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>If you have forgotten your password, you can recover it on the "Restore
                                                access" page. You will need the email address or mobile phone number you
                                                used to register.</p>
                                            <p>Enter the current e-mail address and the password recovery data will be
                                                sent to it.</p>
                                            <p>In case of registration by phone, automatic recovery is impossible. You
                                                should contact support, where you will receive all the necessary
                                                instructions.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder3">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											How {{siteName()}} Trading Platform Works? {{siteName()}} Trading Platform users register personal accounts, select investment strategies and investment plans and place deposits. The cryptocurrency available on the {{siteName()}} Trading platform is used to place deposits. Funds placed on deposits operate on high-yield exchange and over-the-counter cryptocurrency markets. Users receive the returns specified in the investment strategy and investment plan. Profits can be withdrawn into your cryptocurrency wallet or reinvested on the {{siteName()}} Trading platform.  {{siteName()}} Trading Platform ensures transaction security and safety of your funds
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            How {{siteName()}} Trading Platform Works?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>{{siteName()}} Trading Platform users register personal accounts, select
                                                investment strategies and investment plans and place deposits. The
                                                cryptocurrency available on the {{siteName()}} Trading platform is used to place
                                                deposits. Funds placed on deposits operate on high-yield exchange and
                                                over-the-counter cryptocurrency markets. Users receive the returns
                                                specified in the investment strategy and investment plan. Profits can be
                                                withdrawn into your cryptocurrency wallet or reinvested on the Soley
                                                Trading platform. </p>
                                            <p>{{siteName()}} Trading Platform ensures transaction security and safety of your
                                                funds</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder3">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											What investment strategies are available on the {{siteName()}} Trading platform? {{siteName()}} Trading is constantly working on improving investment strategies. Currently, the Algorithmic trading strategy is available on the platform:  Algorithmic trading. Trading is carried out by a special trading robot, according to the specified algorithms. Trading is conducted simultaneously on dozens of cryptocurrency exchanges, the most profitable transactions are selected, the decisions are made in a split second.  The following strategies will be available soon: Arbitrage trading. Arbitrage trading involves trading based on exchange rate differences. We simultaneously buy an asset on one exchange and sell the same asset on another. Your income is generated by the difference in exchange rates. Professional trading. Traditional exchange trading involves transactions made by professional traders. {{siteName()}} Trading traders are world-class professionals who have already earned millions of dollars for their customers. Customers benefit from their long-term experience and deep knowledge of the market. Cloud Mining. Mining is a basis of crypto business. Mining is a safe and profitable investment option. {{siteName()}} Trading's cloud mining is an efficient investment tool. By joining the {{siteName()}} Trading mining center through the cloud, you can earn your share of profits without spending on hardware and maintenance. SLY token. SLY token is a unique project by {{siteName()}} Trading, which is a native token of our platform. Working on our platform can be made easy with this versatile tool. You can buy and sell SLY tokens at any time. Investing in a token can lead to a boost in returns, commission discounts, and token appreciation.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            What investment strategies are available on the {{siteName()}} Trading platform?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>{{siteName()}} Trading is constantly working on improving investment strategies.
                                                Currently, the Algorithmic trading strategy is available on the
                                                platform: </p>
                                            <p>Algorithmic trading. Trading is carried out by a special trading robot,
                                                according to the specified algorithms. Trading is conducted
                                                simultaneously on dozens of cryptocurrency exchanges, the most
                                                profitable transactions are selected, the decisions are made in a split
                                                second. </p>
                                            <p>The following strategies will be available soon:</p>
                                            <p>Arbitrage trading. Arbitrage trading involves trading based on exchange
                                                rate differences. We simultaneously buy an asset on one exchange and
                                                sell the same asset on another. Your income is generated by the
                                                difference in exchange rates.</p>
                                            <p>Professional trading. Traditional exchange trading involves transactions
                                                made by professional traders. {{siteName()}} Trading traders are world-class
                                                professionals who have already earned millions of dollars for their
                                                customers. Customers benefit from their long-term experience and deep
                                                knowledge of the market.</p>
                                            <p>Cloud Mining. Mining is a basis of crypto business. Mining is a safe and
                                                profitable investment option. {{siteName()}} Trading's cloud mining is an
                                                efficient investment tool. By joining the {{siteName()}} Trading mining center
                                                through the cloud, you can earn your share of profits without spending
                                                on hardware and maintenance.</p>
                                            <p>SLY token. SLY token is a unique project by {{siteName()}} Trading, which is a
                                                native token of our platform. Working on our platform can be made easy
                                                with this versatile tool.</p>
                                            <p>You can buy and sell SLY tokens at any time. Investing in a token can
                                                lead to a boost in returns, commission discounts, and token
                                                appreciation.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder3">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											How to choose an investment strategy? All {{siteName()}} Trading investment strategies are safe and profitable. It all depends on your personal preferences and attitudes to various areas of the crypto business. Evaluate profitability of different strategies and plans, assess risks and make a choice. Regardless of your choice, we will do our best to ensure you get the maximum profit.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            How to choose an investment strategy?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>All {{siteName()}} Trading investment strategies are safe and profitable. It all
                                                depends on your personal preferences and attitudes to various areas of
                                                the crypto business.</p>
                                            <p>Evaluate profitability of different strategies and plans, assess risks
                                                and make a choice. Regardless of your choice, we will do our best to
                                                ensure you get the maximum profit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder3">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											What is the algorithmic trading? Algorithmic trading is a special type of cryptocurrency exchange trading carried out automatically by a specialized software complex called trading robot. The robot simultaneously trades in dozens of leading cryptocurrency exchanges. The program chooses the best options and makes deals in a split second.  The practice of successful exchange transactions for decades is the basis of our algorithms. The trading robot analyzes a variety of factors and makes business decisions based on precise calculations. Mistakes in the form of human factor, subjectivism are completely excluded here. Your profits are accrued every second. The term of the deposit is unlimited, you can withdraw it at any time. Once the corresponding request is received, the deposit will be returned within 8 hours. No deposit refund fee is charged. For more information on Algorithmic trading’s investment plans, see the "Algorithmic trading" tab.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            What is the algorithmic trading?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>Algorithmic trading is a special type of cryptocurrency exchange trading
                                                carried out automatically by a specialized software complex called
                                                trading robot. The robot simultaneously trades in dozens of leading
                                                cryptocurrency exchanges. The program chooses the best options and makes
                                                deals in a split second. </p>
                                            <p>The practice of successful exchange transactions for decades is the basis
                                                of our algorithms. The trading robot analyzes a variety of factors and
                                                makes business decisions based on precise calculations. Mistakes in the
                                                form of human factor, subjectivism are completely excluded here.</p>
                                            <p>Your profits are accrued every second. The term of the deposit is
                                                unlimited, you can withdraw it at any time.</p>
                                            <p>Once the corresponding request is received, the deposit will be returned
                                                within 8 hours. No deposit refund fee is charged.</p>
                                            <p>For more information on Algorithmic trading’s investment plans, see the
                                                "Algorithmic trading" tab.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder3">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											How to create an Algorithmic Trading deposit? To create an Algorithmic Trading deposit, choose an Algorithmic Trading investment strategy. Payment is made on the “New Investment” page.  Choose a cryptocurrency, check offers depending on the investment amount, specify your investment amount, and get a real-time profit calculation. Enter your deposit. if you have sufficient funds on your {{siteName()}} Trading account, the required amount will be written off from it, and the deposit will be automatically activated. In case of insufficient funds on your account, you will get a wallet address to top up your account from an external wallet. If necessary, specify Destination tag or Memo. Be sure to note the network to which payment is sent. If an incorrect network is selected, the funds will be lost.  The deposit will be activated after receiving the required number of confirmations.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            How to create an Algorithmic Trading deposit?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>To create an Algorithmic Trading deposit, choose an Algorithmic Trading
                                                investment strategy. Payment is made on the “New Investment” page. </p>
                                            <p>Choose a cryptocurrency, check offers depending on the investment amount,
                                                specify your investment amount, and get a real-time profit calculation.
                                            </p>
                                            <p>Enter your deposit. if you have sufficient funds on your {{siteName()}} Trading
                                                account, the required amount will be written off from it, and the
                                                deposit will be automatically activated.</p>
                                            <p>In case of insufficient funds on your account, you will get a wallet
                                                address to top up your account from an external wallet. If necessary,
                                                specify Destination tag or Memo. Be sure to note the network to which
                                                payment is sent. If an incorrect network is selected, the funds will be
                                                lost. </p>
                                            <p>The deposit will be activated after receiving the required number of
                                                confirmations.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder3">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											How to refund Algorithmic Trading deposit? To refund Algorithmic Trading deposit, press the button "return the deposit". The eight-hour timer started to count. After 8 hours. the funds will be returned to your account. During the refund process you can at any time click "Cancel”, and the funds will be returned to your deposit and continue to earn.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            How to refund Algorithmic Trading deposit?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>To refund Algorithmic Trading deposit, press the button "return the
                                                deposit". The eight-hour timer started to count. After 8 hours. the
                                                funds will be returned to your account. During the refund process you
                                                can at any time click "Cancel”, and the funds will be returned to your
                                                deposit and continue to earn.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder3">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											How to fund your account? Using the Top Up tab, select the cryptocurrency you intend to top up, enter the amount, and select the network.  Be sure to note the network to which payment to be sent. If an incorrect network is selected, the funds will be lost. If Destination Tag or Memo is required, please specify them, otherwise funds may be lost. Press the Continue button, and you will receive the payment details for funding your account. Copy it and use it in your crypto wallet. Funds will be transferred to your account after receiving the required number of confirmations to the network.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            How to fund your account?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>Using the Top Up tab, select the cryptocurrency you intend to top up,
                                                enter the amount, and select the network. </p>
                                            <p>Be sure to note the network to which payment to be sent. If an incorrect
                                                network is selected, the funds will be lost.</p>
                                            <p>If Destination Tag or Memo is required, please specify them, otherwise
                                                funds may be lost.</p>
                                            <p>Press the Continue button, and you will receive the payment details for
                                                funding your account. Copy it and use it in your crypto wallet.</p>
                                            <p>Funds will be transferred to your account after receiving the required
                                                number of confirmations to the network.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder3">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											What if the payment is made and the deposit is not activated? If you have made a payment, but the deposit is not activated, first of all, double check the payment details which you use for funding. The payment may be delayed due to the blockchain load. In most cases, payment failures are due to incorrect form filling and delays by payment systems. If the deposit has not been activated within 24 hours after payment, we recommend contact support. The problem is likely already being addressed by us.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            What if the payment is made and the deposit is not activated?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>If you have made a payment, but the deposit is not activated, first of
                                                all, double check the payment details which you use for funding.</p>
                                            <p>The payment may be delayed due to the blockchain load. In most cases,
                                                payment failures are due to incorrect form filling and delays by payment
                                                systems. If the deposit has not been activated within 24 hours after
                                                payment, we recommend contact support. The problem is likely already
                                                being addressed by us.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder4">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											How to withdraw funds from the {{siteName()}} Trading platform? Withdrawals from the platform are made on the Dashboard "Withdrawal" page. Choose cryptocurrency, enter the amount and specify the address of the wallet. If necessary, specify Destination tag or Memo. Be sure to note the network to which payment is sent. If an incorrect network is selected, the funds will be lost.  If you do not know how to choose the right network, please do not carry out experiments, contact technical support and get professional advice.  If you have Payment Password or Google Authenticator activated, the "Withdrawal confirmation" field will be active. Confirm the withdrawal, and the funds will credit to your account
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            How to withdraw funds from the {{siteName()}} Trading platform?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>Withdrawals from the platform are made on the Dashboard "Withdrawal"
                                                page. Choose cryptocurrency, enter the amount and specify the address of
                                                the wallet. If necessary, specify Destination tag or Memo. Be sure to
                                                note the network to which payment is sent. If an incorrect network is
                                                selected, the funds will be lost. </p>
                                            <p>If you do not know how to choose the right network, please do not carry
                                                out experiments, contact technical support and get professional advice.
                                            </p>
                                            <p>If you have Payment Password or Google Authenticator activated, the
                                                "Withdrawal confirmation" field will be active. Confirm the withdrawal,
                                                and the funds will credit to your account</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder4">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											Are there any fees for withdrawals from {{siteName()}} Trading account? {{siteName()}} Trading Platform sets limits on the funding and withdrawal of funds and fee for withdrawals. Current fees are given in the section "Fees". Before withdrawing, check out the fee set for your cryptocurrency. We don’t consider the withdrawal fee as a source of income, all fees are set at a minimum level, based on the policy of payment systems.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            Are there any fees for withdrawals from {{siteName()}} Trading account?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>{{siteName()}} Trading Platform sets limits on the funding and withdrawal of funds
                                                and fee for withdrawals. Current fees are given in the section "Fees".
                                                Before withdrawing, check out the fee set for your cryptocurrency. We
                                                don’t consider the withdrawal fee as a source of income, all fees are
                                                set at a minimum level, based on the policy of payment systems.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder4">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											How long does it take to withdraw funds from {{siteName()}} Trading platform? In most cases, funds are credited to your account instantly. {{siteName()}} Trading guarantees to send funds within 24 hours after withdrawal request. If you haven’t received funds within 72 hours, please contact our support team.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            How long does it take to withdraw funds from {{siteName()}} Trading platform?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>In most cases, funds are credited to your account instantly. Soley
                                                Trading guarantees to send funds within 24 hours after withdrawal
                                                request. If you haven’t received funds within 72 hours, please contact
                                                our support team.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder5">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											What is a {{siteName()}} Trading Affiliate Program? {{siteName()}} Trading Affiliate Program is a program that offers rewards and bonuses to attract new customers to the platform.  You attract a new user (partner) and receive a reward depending on the size of his deposit (Professional Trading, Cloud Mining) or profit (Algorithmic Trading, Arbitrage Trading).  You also get a reward if your partner also attracts new users (second level partners). Rewards is paid up to and including the seventh level. Detailed information of rewards and bonuses is available in Affiliate Program page.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            What is a {{siteName()}} Trading Affiliate Program?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>{{siteName()}} Trading Affiliate Program is a program that offers rewards and
                                                bonuses to attract new customers to the platform. </p>
                                            <p>You attract a new user (partner) and receive a reward depending on the
                                                size of his deposit (Professional Trading, Cloud Mining) or profit
                                                (Algorithmic Trading, Arbitrage Trading). </p>
                                            <p>You also get a reward if your partner also attracts new users (second
                                                level partners). Rewards is paid up to and including the seventh level.
                                            </p>
                                            <p>Detailed information of rewards and bonuses is available in Affiliate
                                                Program page.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder5">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											How to become a partner of {{siteName()}} Trading? In order to become a partner of {{siteName()}} Trading it is necessary to create an account on the platform. After creation of the account, you will be able to attract investors and earn partner bonuses. Go to the Dashboard menu in the Partners section. You will find there your personal Referral Link. Distribute links to your friends, colleagues, business partners and get a reward for each new client.  The section "Partners" provides full information about the investments of your referrals and the amount of your accrued reward. 
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            How to become a partner of {{siteName()}} Trading?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>In order to become a partner of {{siteName()}} Trading it is necessary to create
                                                an account on the platform. After creation of the account, you will be
                                                able to attract investors and earn partner bonuses.</p>
                                            <p>Go to the Dashboard menu in the Partners section. You will find there
                                                your personal Referral Link. Distribute links to your friends,
                                                colleagues, business partners and get a reward for each new client. </p>
                                            <p>The section "Partners" provides full information about the investments of
                                                your referrals and the amount of your accrued reward. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder5">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											How are partner bonuses calculated? You receive a reward depending on the structure of the first level.  For Algorithmic Trading and Arbitrage Trading you can get up to 50% of your partner’s profit. For Professional Trading you can get up to 30% of your partner’s deposit. For Professional Trading and Cloud Mining you can get up to 36% of your partner’s deposit.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            How are partner bonuses calculated?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>You receive a reward depending on the structure of the first level. </p>
                                            <p>For Algorithmic Trading and Arbitrage Trading you can get up to 50% of
                                                your partner’s profit.</p>
                                            <p>For Professional Trading you can get up to 30% of your partner’s deposit.
                                            </p>
                                            <p>For Professional Trading and Cloud Mining you can get up to 36% of your
                                                partner’s deposit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder5">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											How does the first level structure increase? For Algorithmic Trading structure increases every second by 3% per day while the deposit is active. For Arbitrage Trading the structure is increased by 1-3% of the deposit at the time of transaction creation. For Professional Trading and Cloud Mining structure increases by 100% from the deposit at the moment of creation of the deposit.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            How does the first level structure increase?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>For Algorithmic Trading structure increases every second by 3% per day
                                                while the deposit is active.</p>
                                            <p>For Arbitrage Trading the structure is increased by 1-3% of the deposit
                                                at the time of transaction creation.</p>
                                            <p>For Professional Trading and Cloud Mining structure increases by 100%
                                                from the deposit at the moment of creation of the deposit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder5">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											What are bonus payments for achievements? We have extra bonuses for partners to reach the levels. You can get up to $750000. Extra bonuses are paid for achieving levels of both personal and 1st level partner deposits. Personal deposits are calculated in the same way as deposits of 1st level partners. For example, you made deposits of $1,000 in professional trading and $500 in algorithmic trading. Your structure immediately after the activation of your deposit into professional trading will be $1,000 and will be added every day for $16.7 while your deposit on algorithmic trading is active. Detailed information of the bonuses is available in your account.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            What are bonus payments for achievements?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>We have extra bonuses for partners to reach the levels. You can get up to
                                                $750000.</p>
                                            <p>Extra bonuses are paid for achieving levels of both personal and 1st
                                                level partner deposits. Personal deposits are calculated in the same way
                                                as deposits of 1st level partners. For example, you made deposits of
                                                $1,000 in professional trading and $500 in algorithmic trading. Your
                                                structure immediately after the activation of your deposit into
                                                professional trading will be $1,000 and will be added every day for
                                                $16.7 while your deposit on algorithmic trading is active.</p>
                                            <p>Detailed information of the bonuses is available in your account.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder5">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											Where’s my referral link? You can find your personal link in the Partners section of the Dashboard menu. Copy the link and share it with your colleagues, friends, business partners. Every investor who comes through your link, becomes your referral, and you get bonuses for all the investments he makes.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            Where’s my referral link?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>You can find your personal link in the Partners section of the Dashboard
                                                menu. Copy the link and share it with your colleagues, friends, business
                                                partners. Every investor who comes through your link, becomes your
                                                referral, and you get bonuses for all the investments he makes.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder5">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											When are referral bonuses paid? As soon as you are credited, you can withdraw the bonus to your wallet. The bonus amounts are shown on the Dashboard menu in the Partners section. Control and plan your earnings in the affiliate program {{siteName()}} Trading.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            When are referral bonuses paid?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>As soon as you are credited, you can withdraw the bonus to your wallet.
                                                The bonus amounts are shown on the Dashboard menu in the Partners
                                                section.</p>
                                            <p>Control and plan your earnings in the affiliate program {{siteName()}} Trading.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder5">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											What trading strategies are involved in the partner program? {{siteName()}} Trading’s affiliate program includes all investment strategies presented on the platform. Only certain bonus accrual terms differ.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            What trading strategies are involved in the partner program?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>{{siteName()}} Trading’s affiliate program includes all investment strategies
                                                presented on the platform. Only certain bonus accrual terms differ.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder5">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											Will the referral bonus be awarded if the referral reinvests funds from the account balance? Referral bonuses are awarded for any investment of your referral, regardless of the source of funds, including investments paid from your partner’s account.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            Will the referral bonus be awarded if the referral reinvests funds from the
                                            account balance?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>Referral bonuses are awarded for any investment of your referral,
                                                regardless of the source of funds, including investments paid from your
                                                partner’s account.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder5">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											Can I change my upline? It is possible to change upline. Send a message to {{siteName()}} Trading Support, in a free form informing about upline change, specify a new name. When sending a message to a support email, use your email address that is linked to your account. Support will check your request and make a decision quickly.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            Can I change my upline?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>It is possible to change upline. Send a message to {{siteName()}} Trading Support,
                                                in a free form informing about upline change, specify a new name. When
                                                sending a message to a support email, use your email address that is
                                                linked to your account.</p>
                                            <p>Support will check your request and make a decision quickly.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder5">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											Is it possible to participate in an affiliate program without placing a deposit on the {{siteName()}} Trading platform? Yes, it is. Any user of {{siteName()}} Trading can participate in the affiliate program regardless of the investments made. The affiliate program is available immediately after registering and creating an account. Sign up and start earning.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            Is it possible to participate in an affiliate program without placing a
                                            deposit on the {{siteName()}} Trading platform?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>Yes, it is. Any user of {{siteName()}} Trading can participate in the affiliate
                                                program regardless of the investments made. The affiliate program is
                                                available immediately after registering and creating an account. Sign up
                                                and start earning.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder6">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											What is a {{siteName()}} Premium? {{siteName()}} Premium is the service offering a special business-support system for {{siteName()}} Trading VIP customers. {{siteName()}} Premium service is available for customers with active deposits from $100000.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            What is a {{siteName()}} Premium?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>{{siteName()}} Premium is the service offering a special business-support system
                                                for {{siteName()}} Trading VIP customers.</p>
                                            <p>{{siteName()}} Premium service is available for customers with active deposits
                                                from $100000.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item soleyFaqItemsItem" data-type="folder6">
                                    <textarea class="soleyFaqItemsItemInput d-none">
											What are the benefits of {{siteName()}} Premium? {{siteName()}} Premium member will be accompanied by a personal manager, he will answer any questions, and help to choose the best strategies, conduct deals and transactions. We will be happy to welcome {{siteName()}} Premium members in any of our offices. They can personally discuss your business issues with our leading experts. All services will work for {{siteName()}} Premium members as a priority.
										</textarea>
                                    <div class="faq-item-heading">
                                        <div class="faq-item-heading-title" style="font-size:18px">
                                            What are the benefits of {{siteName()}} Premium?
                                        </div>
                                        <div class="faq-item-heading-arrow"></div>
                                    </div>
                                    <div class="faq-item-body">
                                        <div class="faq-item-body-text">
                                            <p>{{siteName()}} Premium member will be accompanied by a personal manager, he will
                                                answer any questions, and help to choose the best strategies, conduct
                                                deals and transactions.</p>
                                            <p>We will be happy to welcome {{siteName()}} Premium members in any of our offices.
                                                They can personally discuss your business issues with our leading
                                                experts.</p>
                                            <p>All services will work for {{siteName()}} Premium members as a priority.</p>
                                        </div>
                                    </div>
                                </div>

                            </div </div>

                            <div class="ask-question-block d-md-none">
                                <div class="ask-question-descr">
                                    If you have a problem working on the {{siteName()}} platform and you have not found a
                                    suitable answer, please contact our support team, they will surely help you.
                                </div>
                                <div class="ask-question-btn-block">
                                    <a href="javascript:;" onclick="tidioChatApi.display(true);tidioChatApi.open()"
                                        class="ask-question-btn purple-tr-bd-btn">
                                        Ask question
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="section-soley-premium">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="soley-premium-block">
                            <div class="soley-premium-block-left">
                                <div class="soley-premium-content">
                                    <div class="soley-premium-subtitle-block">
                                        <div class="soley-premium-subtitle">{{siteName()}} premium</div>
                                    </div>
                                    <div class="soley-premium-title-block">
                                        <div class="soley-premium-title">
                                            {{siteName()}}<br />Premium Service and<br />Exclusive Privileges
                                        </div>
                                    </div>
                                    <div class="soley-premium-descr">
                                        We are pleased to present a unique business-support environment. {{siteName()}} Premium
                                        member will be served by a personal manager, he will professionally consult you,
                                        help to choose the best strategies, follow up deals and transactions.
                                    </div>
                                    <div class="soley-premium-buttons-block">
                                        <div class="soley-premium-buttons">
                                            <div class="soley-premium-btn-wrapper">
                                                <a href="#" class="soley-premium-btn purple-btn">
                                                    <div class="book-appointment-btn__text">Read more</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="soley-premium-block-right">
                                <div class="soley-premium-graph-block">
                                    <div class="soley-premium-graph">
                                        <div class="soley-premium-graph-img">
                                            <img class="image"
                                                src="/assets/eQPywYAlnPNuvenAX6Nb/images/svg/trading-type/soley-premium-graph-img.svg"
                                                alt="">
                                        </div>
                                        <div class="soley-premium-graph-items">
                                            <div class="soley-premium-graph-item soley-premium-graph-item--personal">
                                                <div class="soley-premium-graph-item__icon"></div>
                                                <div class="soley-premium-graph-item__text">
                                                    Personal <br /> manager
                                                </div>
                                            </div>
                                            <div class="soley-premium-graph-item soley-premium-graph-item--concierge">
                                                <div class="soley-premium-graph-item__icon"></div>
                                                <div class="soley-premium-graph-item__text">
                                                    Personal <br /> meetings
                                                </div>
                                            </div>
                                            <div class="soley-premium-graph-item soley-premium-graph-item--airport">
                                                <div class="soley-premium-graph-item__icon"></div>
                                                <div class="soley-premium-graph-item__text">
                                                    Priority <br /> service
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="soley-premium-sign">
                                <img class="image"
                                    src="/assets/eQPywYAlnPNuvenAX6Nb/images/svg/soley-premium-sign.svg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-cta">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cta-block">
                            <div class="cta-content">
                                <div class="cta-content-title">
                                    Join {{siteName()}} Trading now!
                                </div>
                                <div class="cta-content-descr">
                                    Discover {{siteName()}} Trading’s unique investment products. Invest and get your profit!
                                </div>
                                <div class="cta-content-btn-block">
                                    <a href="/deposit/" class="cta-content-btn purple-btn">
                                        Start earning
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@include('layouts.mainsite.footer')
