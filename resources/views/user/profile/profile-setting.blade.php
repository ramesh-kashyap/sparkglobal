
		
		
		
			
	
	


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
                                                <div class="setting-tab__title">Personal Profile</div>
                                            </div>
                                        </div>
                                        <div class="setting-tab-wrapper">
                                            <div class="setting-tab setting-tab--payment-pin">
                                                <div class="setting-tab__icon"></div>
                                                <div class="setting-tab__title">Password</div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>

                                <div class="setting-tabs-content-block">
                                    <div class="setting-tabs-content">
                                        <div class="setting-tab-content active">

                                            <div class="setting-form-block">
                                                <form action="{{route('user.update-profile')}}" class="form setting-password-form" method="post">
                                                    {{ csrf_field() }}
                                                    <div class="setting-form-title-block">
                                                        <div class="setting-form-title">
                                                            Personal Profile
                                                        </div>
                                                    </div>
                                                    <div class="setting-form-descr">
                                                        Set a profile, do your business safe. We highly recommend that you use a save details.
                                                    </div>

                                                    <div class="field-block">
                                                        <div class="field-title-block">
                                                            <div class="field-title">
                                                             Login Id<span class="text--purple">*</span>
                                                            </div>
                                                        </div>
                                                        <div class="field field--iconed field--input field--username">
                                                            <div class="field__icon"></div>
                                                            <input type="text" name="username" readonly maxlength="255" value="{{ $profile_data ? $profile_data->username : '' }}" placeholder="Name">
                                                            <div class="change-pswd-type-link-block">
                                                          
                                                            </div>
                                                                
                                                        </div>
                                                    </div>


                                                    <div class="field-block">
                                                        <div class="field-title-block">
                                                            <div class="field-title">
                                                             Name<span class="text--purple">*</span>
                                                            </div>
                                                        </div>
                                                        <div class="field field--iconed field--input field--username">
                                                            <div class="field__icon"></div>
                                                            <input type="text" name="name" maxlength="255" value="{{ $profile_data ? $profile_data->name : '' }}" placeholder="Name">
                                                            <div class="change-pswd-type-link-block">
                                                          
                                                            </div>
                                                                
                                                        </div>
                                                    </div>
                                                    <div class="field-block">
                                                        <div class="field-title-block">
                                                            <div class="field-title">
                                                                Email ID <span
                                                                    class="text--purple">*</span>
                                                            </div>
                                                        </div>
                                                        <div class="field field--iconed field--input field--email">
                                                            <div class="field__icon"></div>
                                                            <input type="text" autocomplete="off" name=""  readonly  value="{{ $profile_data ? $profile_data->email : '' }}" maxlength="255" placeholder="Email ID">
                                                            <div class="change-pswd-type-link-block">
                                                         
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="field-block">
                                                        <div class="field-title-block">
                                                            <div class="field-title">
                                                                Country <span class="text--purple">*</span>
                                                            </div>
                                                        </div>
                                                        <div class="field field--iconed field--input field--username">
                                                            <div class="field__icon"></div>
                                                            <select name="country" id="" >

                                                                <option>
                                                                    {{ $profile_data ? $profile_data->country : '' }}
                                                                </option>
                                                                <option value="AFGHANISTAN">
                                                                    AFGHANISTAN</option>
                                                                <option value="ALBANIA">ALBANIA
                                                                </option>
                                                                <option value="ALGERIA">ALGERIA
                                                                </option>
                                                                <option value="AMERICAN SAMOA">
                                                                    AMERICAN SAMOA</option>
                                                                <option value="ANDORRA">ANDORRA
                                                                </option>
                                                                <option value="ANGOLA">ANGOLA
                                                                </option>
                                                                <option value="ANGUILLA">ANGUILLA
                                                                </option>
                                                                <option value="ANTARCTICA">
                                                                    ANTARCTICA</option>
                                                                <option value="ANTIGUA AND BARBUDA">
                                                                    ANTIGUA AND BARBUDA</option>
                                                                <option value="ARGENTINA">
                                                                    ARGENTINA</option>
                                                                <option value="ARMENIA">ARMENIA
                                                                </option>
                                                                <option value="ARUBA">ARUBA
                                                                </option>
                                                                <option value="AUSTRALIA">
                                                                    AUSTRALIA</option>
                                                                <option value="AUSTRIA">AUSTRIA
                                                                </option>
                                                                <option value="AZERBAIJAN">
                                                                    AZERBAIJAN</option>
                                                                <option value="BAHAMAS">BAHAMAS
                                                                </option>
                                                                <option value="BAHRAIN">BAHRAIN
                                                                </option>
                                                                <option value="BANGLADESH">
                                                                    BANGLADESH</option>
                                                                <option value="BARBADOS">
                                                                    BARBADOS</option>
                                                                <option value="BELARUS">BELARUS
                                                                </option>
                                                                <option value="BELGIUM">BELGIUM
                                                                </option>
                                                                <option value="BELIZE">BELIZE
                                                                </option>
                                                                <option value="BENIN">BENIN
                                                                </option>
                                                                <option value="BERMUDA">BERMUDA
                                                                </option>
                                                                <option value="BHUTAN">BHUTAN
                                                                </option>
                                                                <option value="BOLIVIA">BOLIVIA
                                                                </option>
                                                                <option value="BOSNIA AND HERZEGOVINA">
                                                                    BOSNIA AND HERZEGOVINA
                                                                </option>
                                                                <option value="BOTSWANA">
                                                                    BOTSWANA</option>
                                                                <option value="BOUVET ISLAND">
                                                                    BOUVET ISLAND</option>
                                                                <option value="BRAZIL">BRAZIL
                                                                </option>
                                                                <option value="BRITISH INDIAN OCEAN TERRITORY">
                                                                    BRITISH INDIAN OCEAN
                                                                    TERRITORY</option>
                                                                <option value="BRUNEI DARUSSALAM">
                                                                    BRUNEI DARUSSALAM</option>
                                                                <option value="BULGARIA">
                                                                    BULGARIA</option>
                                                                <option value="BURKINA FASO">
                                                                    BURKINA FASO</option>
                                                                <option value="BURUNDI">BURUNDI
                                                                </option>
                                                                <option value="CAMBODIA">
                                                                    CAMBODIA</option>
                                                                <option value="CAMEROON">
                                                                    CAMEROON</option>
                                                                <option value="CANADA">CANADA
                                                                </option>
                                                                <option value="CAPE VERDE">CAPE
                                                                    VERDE</option>
                                                                <option value="CAYMAN ISLANDS">
                                                                    CAYMAN ISLANDS</option>
                                                                <option value="CENTRAL AFRICAN REPUBLIC">
                                                                    CENTRAL AFRICAN REPUBLIC
                                                                </option>
                                                                <option value="CHAD">CHAD
                                                                </option>
                                                                <option value="CHILE">CHILE
                                                                </option>
                                                                <option value="CHINA">CHINA
                                                                </option>
                                                                <option value="CHRISTMAS ISLAND">
                                                                    CHRISTMAS ISLAND</option>
                                                                <option value="COCOS (KEELING) ISLANDS">
                                                                    COCOS (KEELING) ISLANDS
                                                                </option>
                                                                <option value="COLOMBIA">
                                                                    COLOMBIA</option>
                                                                <option value="COMOROS">COMOROS
                                                                </option>
                                                                <option value="CONGO">CONGO
                                                                </option>
                                                                <option value="CONGO, THE DEMOCRATIC REPUBLIC OF THE">
                                                                    CONGO, THE DEMOCRATIC
                                                                    REPUBLIC OF THE</option>
                                                                <option value="COOK ISLANDS">
                                                                    COOK ISLANDS</option>
                                                                <option value="COSTA RICA">COSTA
                                                                    RICA</option>
                                                                <option value="COTE D'IVOIRE">
                                                                    COTE D'IVOIRE</option>
                                                                <option value="CROATIA">CROATIA
                                                                </option>
                                                                <option value="CUBA">CUBA
                                                                </option>
                                                                <option value="CYPRUS">CYPRUS
                                                                </option>
                                                                <option value="CZECH REPUBLIC">
                                                                    CZECH REPUBLIC</option>
                                                                <option value="DENMARK">DENMARK
                                                                </option>
                                                                <option value="DJIBOUTI">
                                                                    DJIBOUTI</option>
                                                                <option value="DOMINICA">
                                                                    DOMINICA</option>
                                                                <option value="DOMINICAN REPUBLIC">
                                                                    DOMINICAN REPUBLIC</option>
                                                                <option value="ECUADOR">ECUADOR
                                                                </option>
                                                                <option value="EGYPT">EGYPT
                                                                </option>
                                                                <option value="EL SALVADOR">EL
                                                                    SALVADOR</option>
                                                                <option value="EQUATORIAL GUINEA">
                                                                    EQUATORIAL GUINEA</option>
                                                                <option value="ERITREA">ERITREA
                                                                </option>
                                                                <option value="ESTONIA">ESTONIA
                                                                </option>
                                                                <option value="ETHIOPIA">
                                                                    ETHIOPIA</option>
                                                                <option value="FALKLAND ISLANDS (MALVINAS)">
                                                                    FALKLAND ISLANDS (MALVINAS)
                                                                </option>
                                                                <option value="FAROE ISLANDS">
                                                                    FAROE ISLANDS</option>
                                                                <option value="FIJI">FIJI
                                                                </option>
                                                                <option value="FINLAND">FINLAND
                                                                </option>
                                                                <option value="FRANCE">FRANCE
                                                                </option>
                                                                <option value="FRENCH GUIANA">
                                                                    FRENCH GUIANA</option>
                                                                <option value="FRENCH POLYNESIA">
                                                                    FRENCH POLYNESIA</option>
                                                                <option value="FRENCH SOUTHERN TERRITORIES">
                                                                    FRENCH SOUTHERN TERRITORIES
                                                                </option>
                                                                <option value="GABON">GABON
                                                                </option>
                                                                <option value="GAMBIA">GAMBIA
                                                                </option>
                                                                <option value="GEORGIA">GEORGIA
                                                                </option>
                                                                <option value="GERMANY">GERMANY
                                                                </option>
                                                                <option value="GHANA">GHANA
                                                                </option>
                                                                <option value="GIBRALTAR">
                                                                    GIBRALTAR</option>
                                                                <option value="GREECE">GREECE
                                                                </option>
                                                                <option value="GREENLAND">
                                                                    GREENLAND</option>
                                                                <option value="GRENADA">GRENADA
                                                                </option>
                                                                <option value="GUADELOUPE">
                                                                    GUADELOUPE</option>
                                                                <option value="GUAM">GUAM
                                                                </option>
                                                                <option value="GUATEMALA">
                                                                    GUATEMALA</option>
                                                                <option value="GUINEA">GUINEA
                                                                </option>
                                                                <option value="GUINEA-BISSAU">
                                                                    GUINEA-BISSAU</option>
                                                                <option value="GUYANA">GUYANA
                                                                </option>
                                                                <option value="HAITI">HAITI
                                                                </option>
                                                                <option value="HEARD ISLAND AND MCDONALD ISLANDS">
                                                                    HEARD ISLAND AND MCDONALD
                                                                    ISLANDS</option>
                                                                <option value="HOLY SEE (VATICAN CITY STATE)">
                                                                    HOLY SEE (VATICAN CITY STATE)
                                                                </option>
                                                                <option value="HONDURAS">
                                                                    HONDURAS</option>
                                                                <option value="HONG KONG">HONG
                                                                    KONG</option>
                                                                <option value="HUNGARY">HUNGARY
                                                                </option>
                                                                <option value="ICELAND">ICELAND
                                                                </option>
                                                                <option value="INDIA">INDIA
                                                                </option>
                                                                <option value="INDONESIA">
                                                                    INDONESIA</option>
                                                                <option value="IRAN, ISLAMIC REPUBLIC OF">
                                                                    IRAN, ISLAMIC REPUBLIC OF
                                                                </option>
                                                                <option value="IRAQ">IRAQ
                                                                </option>
                                                                <option value="IRELAND">IRELAND
                                                                </option>
                                                                <option value="ISRAEL">ISRAEL
                                                                </option>
                                                                <option value="ITALY">ITALY
                                                                </option>
                                                                <option value="JAMAICA">JAMAICA
                                                                </option>
                                                                <option value="JAPAN">JAPAN
                                                                </option>
                                                                <option value="JORDAN">JORDAN
                                                                </option>
                                                                <option value="KAZAKHSTAN">
                                                                    KAZAKHSTAN</option>
                                                                <option value="KENYA">KENYA
                                                                </option>
                                                                <option value="KIRIBATI">
                                                                    KIRIBATI</option>
                                                                <option value="KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF">
                                                                    KOREA, DEMOCRATIC PEOPLE'S
                                                                    REPUBLIC OF</option>
                                                                <option value="KOREA, REPUBLIC OF">
                                                                    KOREA, REPUBLIC OF</option>
                                                                <option value="KUWAIT">KUWAIT
                                                                </option>
                                                                <option value="KYRGYZSTAN">
                                                                    KYRGYZSTAN</option>
                                                                <option value="LAO PEOPLE'S DEMOCRATIC REPUBLIC">
                                                                    LAO PEOPLE'S DEMOCRATIC
                                                                    REPUBLIC</option>
                                                                <option value="LATVIA">LATVIA
                                                                </option>
                                                                <option value="LEBANON">LEBANON
                                                                </option>
                                                                <option value="LESOTHO">LESOTHO
                                                                </option>
                                                                <option value="LIBERIA">LIBERIA
                                                                </option>
                                                                <option value="LIBYAN ARAB JAMAHIRIYA">
                                                                    LIBYAN ARAB JAMAHIRIYA
                                                                </option>
                                                                <option value="LIECHTENSTEIN">
                                                                    LIECHTENSTEIN</option>
                                                                <option value="LITHUANIA">
                                                                    LITHUANIA</option>
                                                                <option value="LUXEMBOURG">
                                                                    LUXEMBOURG</option>
                                                                <option value="MACAO">MACAO
                                                                </option>
                                                                <option value="MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF">
                                                                    MACEDONIA, THE FORMER
                                                                    YUGOSLAV REPUBLIC OF</option>
                                                                <option value="MADAGASCAR">
                                                                    MADAGASCAR</option>
                                                                <option value="MALAWI">MALAWI
                                                                </option>
                                                                <option value="MALAYSIA">
                                                                    MALAYSIA</option>
                                                                <option value="MALDIVES">
                                                                    MALDIVES</option>
                                                                <option value="MALI">MALI
                                                                </option>
                                                                <option value="MALTA">MALTA
                                                                </option>
                                                                <option value="MARSHALL ISLANDS">
                                                                    MARSHALL ISLANDS</option>
                                                                <option value="MARTINIQUE">
                                                                    MARTINIQUE</option>
                                                                <option value="MAURITANIA">
                                                                    MAURITANIA</option>
                                                                <option value="MAURITIUS">
                                                                    MAURITIUS</option>
                                                                <option value="MAYOTTE">MAYOTTE
                                                                </option>
                                                                <option value="MEXICO">MEXICO
                                                                </option>
                                                                <option value="MICRONESIA, FEDERATED STATES OF">
                                                                    MICRONESIA, FEDERATED STATES
                                                                    OF</option>
                                                                <option value="MOLDOVA, REPUBLIC OF">
                                                                    MOLDOVA, REPUBLIC OF</option>
                                                                <option value="MONACO">MONACO
                                                                </option>
                                                                <option value="MONGOLIA">
                                                                    MONGOLIA</option>
                                                                <option value="MONTSERRAT">
                                                                    MONTSERRAT</option>
                                                                <option value="MOROCCO">MOROCCO
                                                                </option>
                                                                <option value="MOZAMBIQUE">
                                                                    MOZAMBIQUE</option>
                                                                <option value="MYANMAR">MYANMAR
                                                                </option>
                                                                <option value="NAMIBIA">NAMIBIA
                                                                </option>
                                                                <option value="NAURU">NAURU
                                                                </option>
                                                                <option value="NEPAL">NEPAL
                                                                </option>
                                                                <option value="NETHERLANDS">
                                                                    NETHERLANDS</option>
                                                                <option value="NETHERLANDS ANTILLES">
                                                                    NETHERLANDS ANTILLES</option>
                                                                <option value="NEW CALEDONIA">
                                                                    NEW CALEDONIA</option>
                                                                <option value="NEW ZEALAND">NEW
                                                                    ZEALAND</option>
                                                                <option value="NICARAGUA">
                                                                    NICARAGUA</option>
                                                            </select>
                                                            <div class="change-pswd-type-link-block">
                                                             
                                                            </div>
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
                                                            <input type="text"  autocomplete="off" name="phone" value="{{ $profile_data ? $profile_data->phone : '' }}" maxlength="255" placeholder="Repeat new password">
                                                            <div class="change-pswd-type-link-block">
                                                             
                                                            </div>
                                                        </div>
                                                    </div>
                                                    

                                                    <div class="field-block">
                                                        <div class="field-title-block">
                                                            <div class="field-title">
                                                                Registration Date<span class="text--purple">*</span>
                                                            </div>
                                                        </div>
                                                        <div class="field field--iconed field--input field--email">
                                                            <div class="field__icon"></div>
                                                            <input type="text"  autocomplete="off" name="" readonly disabled value="{{ date("D, d M Y", strtotime($profile_data->created_at))}}" maxlength="255" placeholder="Repeat new password">
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


                                            <div class="setting-form-block">
                                                <form action="{{ route('user.edit-password') }}"  method="post"  class="form setting-password-form">
                                                    {{ csrf_field() }}
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
                                                            <input type="password" name="old_password" maxlength="255" placeholder="Enter current password">
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
                                                            <input type="password" autocomplete="off" name="password" maxlength="255" placeholder="Enter new password">
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
                                                            <input type="password"  autocomplete="off" name="password_confirmation" maxlength="255" placeholder="Repeat new password">
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


<script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>


@if(session('PasswordCode'))
<div class="modal-backdrop fade"></div>
<script>
    $(document).ready(function() 
   {
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
                    <button type="button" class="modal-close"  id="closeEmailModel" ></button>
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
                            <form action="{{route('user.update-password')}}" class="form confirm-email-form" method="post">
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



