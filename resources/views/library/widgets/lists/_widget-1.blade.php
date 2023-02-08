<style>
	.select2-container--bootstrap5 .select2-dropdown {
    border: 0;
    box-shadow: 0 0 50px 0 rgb(82 63 105 / 15%);
    border-radius: 0.475rem;
    padding: 1rem 0;
    background-color: #fff;
	}
	.select2-container--bootstrap5 .select2-dropdown .select2-results__options {
    max-height: 250px;
    overflow-y: auto;
}

.select2-results__options {
    list-style: none;
    margin: 0;
    padding: 0;
}
.select2-container--bootstrap5 .select2-dropdown .select2-results__option.select2-results__option--selected {
    background-repeat: no-repeat;
    background-position: center;
    background-color: transparent;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 14 11'%3e%3cpath fill='%23FFFFFF' d='M4.89557 6.49823L2.79487 4.26513C2.26967 3.70683 1.38251 3.70683 0.857309 4.26513C0.375593 4.77721 0.375593 5.57574 0.857309 6.08781L4.74989 10.2257C5.14476 10.6455 5.81176 10.6455 6.20663 10.2257L13.1427 2.85252C13.6244 2.34044 13.6244 1.54191 13.1427 1.02984C12.6175 0.471537 11.7303 0.471536 11.2051 1.02984L6.06096 6.49823C5.74506 6.83403 5.21146 6.83403 4.89557 6.49823Z'/%3e%3c/svg%3e");
    background-size: 0.8rem;
    background-position: center right 1.25rem;
    background-color: #009ef7;
    color: #fff;
    transition: color .2s ease,background-color .2s ease;
}
.select2-container--bootstrap5 .select2-dropdown .select2-results__option {
    color: #5e6278;
    transition: color .2s ease,background-color .2s ease;
    padding: 0.75rem 1.25rem;
    margin: 0 0;
}
.select2-container--bootstrap5 .select2-dropdown .select2-results__option.select2-results__option--highlighted {
    background-color: #f1faff;
    color: #009ef7;
    transition: color .2s ease,background-color .2s ease;
}

.select2-container--bootstrap5 .select2-dropdown .select2-search .select2-search__field {
    background-color: #ffffff;
    padding: 0.55rem 0.75rem;
    color: var(--bs-input-color);
    font-size: 0.95rem;
    border: 1px solid #e1e3ea;
    border-radius: 0.425rem;
    outline: 0 !important;
}
</style>
<div class="card mb-5 mb-xl-10">
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Form Elements</h3>
        </div>
    </div>
    <div id="kt_account_profile_details" class="collapse show">
        <form id="kt_account_profile_details_form" class="form" method="POST" action="http://localhost:8000/account/settings" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="zv55EPPpI5kkUx0kRVwcGZE9mCvuKLl1LqBwbYlP">        <input type="hidden" name="_method" value="PUT">        <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <div class="row mb-0">
					<label class="col-lg-4 col-form-label fw-semibold fs-6">Status</label>
					<div class="col-lg-8 d-flex align-items-center">
						<div class="form-check form-check-solid col-form-label pt-2 form-switch fv-row">
							<input class="form-check-input w-45px h-30px" type="checkbox" name="up_fdns" id="up_fdns">
							<label class="form-check-label" for="up_fdns"></label>
						</div>
					</div>
				</div>
				<div class="row mb-6 mt-4">
					<label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
					<div class="col-lg-8">
						<div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url({{ image('misc/blank-image.svg')}})">
							<div class="image-input-wrapper w-125px h-125px" style="background-image: none;"></div>
							<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
							<i class="bi bi-pencil-fill fs-7"></i>
							<input type="file" name="avatar" accept=".png, .jpg, .jpeg">
							<input type="hidden" name="avatar_remove" value="1">
							</label>
							<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
							<i class="bi bi-x fs-2"></i>
							</span>
							<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
							<i class="bi bi-x fs-2"></i>
							</span>
						</div>
						<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
					</div>
				</div>
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6 fv-row">
                                <input type="text" name="first_name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="Velda"/>
                            </div>
                            <div class="col-lg-6 fv-row">
                                <input type="text" name="last_name" class="form-control form-control-lg form-control-solid" placeholder="Last name" value="Bins"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Company</label>
                    <div class="col-lg-8 fv-row">
                        <input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="Shields, Goodwin and Heaney"/>
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="required">Contact Phone</span>
                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
                    </label>
                    <div class="col-lg-8 fv-row">
                        <input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="(725) 445-2624"/>
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Company Site</label>
                    <div class="col-lg-8 fv-row">
                        <input type="text" name="website" class="form-control form-control-lg form-control-solid" placeholder="Company website" value="http://www.macejkovic.com/praesentium-incidunt-placeat-ut"/>
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="required">Country</span>
                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
                    </label>
                    <div class="col-lg-8 fv-row">
                        <select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country..." class="form-select form-select-solid form-select-lg fw-bold form-control-lg">
                            <option value="">Select a Country...</option>
							<option value="AF" >Afghanistan</option>
							<option value="AX" >Aland Islands</option>
							<option value="AL" >Albania</option>
							<option value="DZ" >Algeria</option>
							<option value="AS" >American Samoa</option>
							<option value="AD" >Andorra</option>
							<option value="AO" >Angola</option>
							<option value="AI" >Anguilla</option>
							<option value="AG" >Antigua and Barbuda</option>
							<option value="AR" >Argentina</option>
							<option value="AM" >Armenia</option>
							<option value="AW" >Aruba</option>
							<option value="AU" >Australia</option>
							<option value="AT" >Austria</option>
							<option value="AZ" >Azerbaijan</option>
							<option value="BS" >Bahamas</option>
							<option value="BH" >Bahrain</option>
							<option value="BD" >Bangladesh</option>
							<option value="BB" >Barbados</option>
							<option value="BY" >Belarus</option>
							<option value="BE" >Belgium</option>
							<option value="BZ" >Belize</option>
							<option value="BJ" >Benin</option>
							<option value="BM" >Bermuda</option>
							<option value="BT" >Bhutan</option>
							<option value="BO" >Bolivia, Plurinational State of</option>
							<option value="BQ" >Bonaire, Sint Eustatius and Saba</option>
							<option value="BA" >Bosnia and Herzegovina</option>
							<option value="BW" >Botswana</option>
							<option value="BR" >Brazil</option>
							<option value="IO" >British Indian Ocean Territory</option>
							<option value="BN" >Brunei Darussalam</option>
							<option value="BG" >Bulgaria</option>
							<option value="BF" >Burkina Faso</option>
							<option value="BI" >Burundi</option>
							<option value="KH" >Cambodia</option>
							<option value="CM">Cameroon</option>
							<option value="CA" >Canada</option>
							<option value="CV" >Cape Verde</option>
							<option value="KY" >Cayman Islands</option>
							<option value="CF" >Central African Republic</option>
							<option value="TD" >Chad</option>
							<option value="CL" >Chile</option>
							<option value="CN" >China</option>
							<option value="CX" >Christmas Island</option>
							<option value="CC" >Cocos (Keeling) Islands</option>
							<option value="CO" >Colombia</option>
							<option value="KM" >Comoros</option>
							<option value="CK" >Cook Islands</option>
							<option value="CR" >Costa Rica</option>
							<option value="CI" >Côte d&#039;Ivoire</option>
							<option value="HR" >Croatia</option>
							<option value="CU" >Cuba</option>
							<option value="CW" >Curaçao</option>
							<option value="CZ" >Czech Republic</option>
							<option value="DK" >Denmark</option>
							<option value="DJ" >Djibouti</option>
							<option value="DM" >Dominica</option>
							<option value="DO" >Dominican Republic</option>
							<option value="EC" >Ecuador</option>
							<option value="EG" >Egypt</option>
							<option value="SV" >El Salvador</option>
							<option value="GQ" >Equatorial Guinea</option>
							<option value="ER" >Eritrea</option>
							<option value="EE" >Estonia</option>
							<option value="ET" >Ethiopia</option>
							<option value="FK" >Falkland Islands (Malvinas)</option>
							<option value="FJ" >Fiji</option>
							<option value="FI" >Finland</option>
							<option value="FR" >France</option>
							<option value="PF" >French Polynesia</option>
							<option value="GA" >Gabon</option>
							<option value="GM" >Gambia</option>
							<option value="GE" >Georgia</option>
							<option value="DE" >Germany</option>
							<option value="GH" >Ghana</option>
							<option value="GI" >Gibraltar</option>
							<option value="GR" >Greece</option>
							<option value="GL" >Greenland</option>
							<option value="GD" >Grenada</option>
							<option value="GU" >Guam</option>
							<option value="GT" >Guatemala</option>
							<option value="GG" >Guernsey</option>
							<option value="GN" >Guinea</option>
							<option value="GW" >Guinea-Bissau</option>
							<option value="HT" >Haiti</option>
							<option value="VA" >Holy See (Vatican City State)</option>
							<option value="HN" >Honduras</option>
							<option value="HK" >Hong Kong</option>
							<option value="HU" >Hungary</option>
							<option value="IS" >Iceland</option>
							<option value="IN" >India</option>
							<option value="ID" >Indonesia</option>
							<option value="IR" >Iran, Islamic Republic of</option>
							<option value="IQ" >Iraq</option>
							<option value="IE" >Ireland</option>
							<option value="IM" >Isle of Man</option>
							<option value="IL" >Israel</option>
							<option value="IT" >Italy</option>
							<option value="JM" >Jamaica</option>
							<option value="JP" >Japan</option>
							<option value="JE" >Jersey</option>
							<option value="JO" >Jordan</option>
							<option value="KZ" >Kazakhstan</option>
							<option value="KE" >Kenya</option>
							<option value="KI" >Kiribati</option>
							<option value="KP" >Korea, Democratic People&#039;s Republic of</option>
							<option value="KW" >Kuwait</option>
							<option value="KG" >Kyrgyzstan</option>
							<option value="LA" >Lao People&#039;s Democratic Republic</option>
							<option value="LV" >Latvia</option>
							<option value="LB" >Lebanon</option>
							<option value="LS" >Lesotho</option>
							<option value="LR" >Liberia</option>
							<option value="LY" >Libya</option>
							<option value="LI" >Liechtenstein</option>
							<option value="LT" >Lithuania</option>
							<option value="LU" >Luxembourg</option>
							<option value="MO" >Macao</option>
							<option value="MG" >Madagascar</option>
							<option value="MW" >Malawi</option>
							<option value="MY" >Malaysia</option>
							<option value="MV" >Maldives</option>
							<option value="ML" >Mali</option>
							<option value="MT" >Malta</option>
							<option value="MH" >Marshall Islands</option>
							<option value="MQ" >Martinique</option>
							<option value="MR" >Mauritania</option>
							<option value="MU" >Mauritius</option>
							<option value="MX" >Mexico</option>
							<option value="FM" >Micronesia, Federated States of</option>
							<option value="MD" >Moldova, Republic of</option>
							<option value="MC" >Monaco</option>
							<option value="MN" >Mongolia</option>
							<option value="ME" >Montenegro</option>
							<option value="MS" >Montserrat</option>
							<option value="MA" >Morocco</option>
							<option value="MZ" >Mozambique</option>
							<option value="MM" >Myanmar</option>
							<option value="NA" >Namibia</option>
							<option value="NR" >Nauru</option>
							<option value="NP" >Nepal</option>
							<option value="NL" >Netherlands</option>
							<option value="NZ" >New Zealand</option>
							<option value="NI" >Nicaragua</option>
							<option value="NE" >Niger</option>
							<option value="NG" >Nigeria</option>
							<option value="NU" >Niue</option>
							<option value="NF" >Norfolk Island</option>
							<option value="MP" >Northern Mariana Islands</option>
							<option value="NO" >Norway</option>
							<option value="OM" >Oman</option>
							<option value="PK" >Pakistan</option>
							<option value="PW" >Palau</option>
							<option value="PS" >Palestinian Territory, Occupied</option>
							<option value="PA" >Panama</option>
							<option value="PG" >Papua New Guinea</option>
							<option value="PY" >Paraguay</option>
							<option value="PE" >Peru</option>
							<option value="PH" >Philippines</option>
							<option value="PL" >Poland</option>
							<option value="PT" >Portugal</option>
							<option value="PR" >Puerto Rico</option>
							<option value="QA" >Qatar</option>
							<option value="RO" >Romania</option>
							<option value="RU" >Russian Federation</option>
							<option value="RW" >Rwanda</option>
							<option value="BL" >Saint Barthélemy</option>
							<option value="KN" >Saint Kitts and Nevis</option>
							<option value="LC" >Saint Lucia</option>
							<option value="MF" >Saint Martin (French part)</option>
							<option value="VC" >Saint Vincent and the Grenadines</option>
							<option value="WS" >Samoa</option>
							<option value="SM" >San Marino</option>
							<option value="ST" >Sao Tome and Principe</option>
							<option value="SA" >Saudi Arabia</option>
							<option value="SN" >Senegal</option>
							<option value="RS" >Serbia</option>
							<option value="SC" >Seychelles</option>
							<option value="SL" >Sierra Leone</option>
							<option value="SG" >Singapore</option>
							<option value="SX" >Sint Maarten (Dutch part)</option>
							<option value="SK" >Slovakia</option>
							<option value="SI" >Slovenia</option>
							<option value="SB" >Solomon Islands</option>
							<option value="SO" >Somalia</option>
							<option value="ZA" >South Africa</option>
							<option value="KR" >South Korea</option>
							<option value="SS" >South Sudan</option>
							<option value="ES" >Spain</option>
							<option value="LK" >Sri Lanka</option>
							<option value="SD" >Sudan</option>
							<option value="SR" >Suriname</option>
							<option value="SZ" >Swaziland</option>
							<option value="SE" >Sweden</option>
							<option value="CH" >Switzerland</option>
							<option value="SY" >Syrian Arab Republic</option>
							<option value="TW" >Taiwan, Province of China</option>
							<option value="TJ" >Tajikistan</option>
							<option value="TZ" >Tanzania, United Republic of</option>
							<option value="TH" >Thailand</option>
							<option value="TG" >Togo</option>
							<option value="TK" >Tokelau</option>
							<option value="TO" >Tonga</option>
							<option value="TT" >Trinidad and Tobago</option>
							<option value="TN" >Tunisia</option>
							<option value="TR" >Turkey</option>
							<option value="TM" >Turkmenistan</option>
							<option value="TC" >Turks and Caicos Islands</option>
							<option value="TV" >Tuvalu</option>
							<option value="UG" >Uganda</option>
							<option value="UA" >Ukraine</option>
							<option value="AE" >United Arab Emirates</option>
							<option value="GB" >United Kingdom</option>
							<option value="US" >United States</option>
							<option value="UY" >Uruguay</option>
							<option value="UZ" >Uzbekistan</option>
							<option value="VU" >Vanuatu</option>
							<option value="VE" >Venezuela, Bolivarian Republic of</option>
							<option value="VN" >Vietnam</option>
							<option value="VI" >Virgin Islands</option>
							<option value="YE" >Yemen</option>
							<option value="ZM" >Zambia</option>
							<option value="ZW" >Zimbabwe</option>
						</select>
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Language</label>
                    <div class="col-lg-8 fv-row">
                        <select name="language" aria-label="Select a Language" data-control="select2" data-placeholder="Select a language..." class="form-select form-select-solid form-select-lg form-control-lg">
                            <option value="">Select a Language...</option>
							<option value="id" >Bahasa Indonesia - Indonesian</option>
							<option value="msa" >Bahasa Melayu - Malay</option>
							<option value="ca" >Català - Catalan</option>
							<option value="cs" >Čeština - Czech</option>
							<option value="da" >Dansk - Danish</option>
							<option value="de" >Deutsch - German</option>
							<option value="en" >English</option>
							<option value="en-gb" >English UK - British English</option>
							<option value="es" >Español - Spanish</option>
							<option value="fil" >Filipino</option>
							<option value="fr" >Français - French</option>
							<option value="ga" >Gaeilge - Irish (beta)</option>
							<option value="gl" >Galego - Galician (beta)</option>
							<option value="hr" >Hrvatski - Croatian</option>
							<option value="it" >Italiano - Italian</option>
							<option value="hu" >Magyar - Hungarian</option>
							<option value="nl" >Nederlands - Dutch</option>
							<option value="no" >Norsk - Norwegian</option>
							<option value="pl" >Polski - Polish</option>
							<option value="pt" >Português - Portuguese</option>
							<option value="ro" >Română - Romanian</option>
							<option value="sk" >Slovenčina - Slovak</option>
							<option value="fi" >Suomi - Finnish</option>
							<option value="sv" >Svenska - Swedish</option>
							<option value="vi" >Tiếng Việt - Vietnamese</option>
							<option value="tr" >Türkçe - Turkish</option>
							<option value="el" >Ελληνικά - Greek</option>
							<option value="bg" >Български език - Bulgarian</option>
							<option value="ru" >Русский - Russian</option>
							<option value="sr" >Српски - Serbian</option>
							<option value="uk" >Українська мова - Ukrainian</option>
							<option value="he" >עִבְרִית - Hebrew</option>
							<option value="ur" >اردو - Urdu (beta)</option>
							<option value="ar" >العربية - Arabic</option>
							<option value="fa" >فارسی - Persian</option>
							<option value="mr" >मराठी - Marathi</option>
							<option value="hi" >हिन्दी - Hindi</option>
							<option value="bn" >বাংলা - Bangla</option>
							<option value="gu" >ગુજરાતી - Gujarati</option>
							<option value="ta" >தமிழ் - Tamil</option>
							<option value="kn" >ಕನ್ನಡ - Kannada</option>
							<option value="th" >ภาษาไทย - Thai</option>
							<option value="ko" >한국어 - Korean</option>
							<option value="ja" >日本語 - Japanese</option>
							<option value="zh-cn" >简体中文 - Simplified Chinese</option>
							<option value="zh-tw" >繁體中文 - Traditional Chinese</option>
						</select>
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Time Zone</label>
                    <div class="col-lg-8 fv-row">
                        <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="Select a timezone.." class="form-select form-select-solid form-select-lg form-control-lg">
                            <option value="">Select a Timezone..</option>
							<option data-bs-offset="-39600" value="International Date Line West" >(GMT-11:00) International Date Line West</option>
							<option data-bs-offset="-39600" value="Midway Island" >(GMT-11:00) Midway Island</option>
							<option data-bs-offset="-39600" value="Samoa" >(GMT-11:00) Samoa</option>
							<option data-bs-offset="-36000" value="Hawaii" >(GMT-10:00) Hawaii</option>
							<option data-bs-offset="-28800" value="Alaska" >(GMT-08:00) Alaska</option>
							<option data-bs-offset="-25200" value="Pacific Time (US &amp; Canada)" >(GMT-07:00) Pacific Time (US &amp; Canada)</option>
							<option data-bs-offset="-25200" value="Tijuana" >(GMT-07:00) Tijuana</option>
							<option data-bs-offset="-25200" value="Arizona" >(GMT-07:00) Arizona</option>
							<option data-bs-offset="-21600" value="Mountain Time (US &amp; Canada)" >(GMT-06:00) Mountain Time (US &amp; Canada)</option>
							<option data-bs-offset="-21600" value="Chihuahua" >(GMT-06:00) Chihuahua</option>
							<option data-bs-offset="-21600" value="Mazatlan" >(GMT-06:00) Mazatlan</option>
							<option data-bs-offset="-21600" value="Saskatchewan" >(GMT-06:00) Saskatchewan</option>
							<option data-bs-offset="-21600" value="Central America" >(GMT-06:00) Central America</option>
							<option data-bs-offset="-18000" value="Central Time (US &amp; Canada)" >(GMT-05:00) Central Time (US &amp; Canada)</option>
							<option data-bs-offset="-18000" value="Guadalajara" >(GMT-05:00) Guadalajara</option>
							<option data-bs-offset="-18000" value="Mexico City" >(GMT-05:00) Mexico City</option>
							<option data-bs-offset="-18000" value="Monterrey" >(GMT-05:00) Monterrey</option>
							<option data-bs-offset="-18000" value="Bogota" >(GMT-05:00) Bogota</option>
							<option data-bs-offset="-18000" value="Lima" >(GMT-05:00) Lima</option>
							<option data-bs-offset="-18000" value="Quito" >(GMT-05:00) Quito</option>
							<option data-bs-offset="-14400" value="Eastern Time (US &amp; Canada)" >(GMT-04:00) Eastern Time (US &amp; Canada)</option>
							<option data-bs-offset="-14400" value="Indiana (East)" >(GMT-04:00) Indiana (East)</option>
							<option data-bs-offset="-14400" value="Caracas" >(GMT-04:00) Caracas</option>
							<option data-bs-offset="-14400" value="La Paz" >(GMT-04:00) La Paz</option>
							<option data-bs-offset="-14400" value="Georgetown" >(GMT-04:00) Georgetown</option>
							<option data-bs-offset="-10800" value="Atlantic Time (Canada)" >(GMT-03:00) Atlantic Time (Canada)</option>
							<option data-bs-offset="-10800" value="Santiago" >(GMT-03:00) Santiago</option>
							<option data-bs-offset="-10800" value="Brasilia" >(GMT-03:00) Brasilia</option>
							<option data-bs-offset="-10800" value="Buenos Aires" >(GMT-03:00) Buenos Aires</option>
							<option data-bs-offset="-9000" value="Newfoundland" >(GMT-02:30) Newfoundland</option>
							<option data-bs-offset="-7200" value="Greenland" >(GMT-02:00) Greenland</option>
							<option data-bs-offset="-7200" value="Mid-Atlantic" >(GMT-02:00) Mid-Atlantic</option>
							<option data-bs-offset="-3600" value="Cape Verde Is." >(GMT-01:00) Cape Verde Is.</option>
							<option data-bs-offset="0" value="Azores" >(GMT) Azores</option>
							<option data-bs-offset="0" value="Monrovia" >(GMT) Monrovia</option>
							<option data-bs-offset="0" value="UTC" >(GMT) UTC</option>
							<option data-bs-offset="3600" value="Dublin" >(GMT+01:00) Dublin</option>
							<option data-bs-offset="3600" value="Edinburgh" >(GMT+01:00) Edinburgh</option>
							<option data-bs-offset="3600" value="Lisbon" >(GMT+01:00) Lisbon</option>
							<option data-bs-offset="3600" value="London" >(GMT+01:00) London</option>
							<option data-bs-offset="3600" value="Casablanca" >(GMT+01:00) Casablanca</option>
							<option data-bs-offset="3600" value="West Central Africa" >(GMT+01:00) West Central Africa</option>
							<option data-bs-offset="7200" value="Belgrade" >(GMT+02:00) Belgrade</option>
							<option data-bs-offset="7200" value="Bratislava" >(GMT+02:00) Bratislava</option>
							<option data-bs-offset="7200" value="Budapest" >(GMT+02:00) Budapest</option>
							<option data-bs-offset="7200" value="Ljubljana" >(GMT+02:00) Ljubljana</option>
							<option data-bs-offset="7200" value="Prague" >(GMT+02:00) Prague</option>
							<option data-bs-offset="7200" value="Sarajevo" >(GMT+02:00) Sarajevo</option>
							<option data-bs-offset="7200" value="Skopje" >(GMT+02:00) Skopje</option>
							<option data-bs-offset="7200" value="Warsaw" >(GMT+02:00) Warsaw</option>
							<option data-bs-offset="7200" value="Zagreb" >(GMT+02:00) Zagreb</option>
							<option data-bs-offset="7200" value="Brussels" >(GMT+02:00) Brussels</option>
							<option data-bs-offset="7200" value="Copenhagen" >(GMT+02:00) Copenhagen</option>
							<option data-bs-offset="7200" value="Madrid" >(GMT+02:00) Madrid</option>
							<option data-bs-offset="7200" value="Paris" >(GMT+02:00) Paris</option>
							<option data-bs-offset="7200" value="Amsterdam" >(GMT+02:00) Amsterdam</option>
							<option data-bs-offset="7200" value="Berlin" >(GMT+02:00) Berlin</option>
							<option data-bs-offset="7200" value="Bern" >(GMT+02:00) Bern</option>
							<option data-bs-offset="7200" value="Rome" >(GMT+02:00) Rome</option>
							<option data-bs-offset="7200" value="Stockholm" >(GMT+02:00) Stockholm</option>
							<option data-bs-offset="7200" value="Vienna" >(GMT+02:00) Vienna</option>
							<option data-bs-offset="7200" value="Cairo" >(GMT+02:00) Cairo</option>
							<option data-bs-offset="7200" value="Harare" >(GMT+02:00) Harare</option>
							<option data-bs-offset="7200" value="Pretoria" >(GMT+02:00) Pretoria</option>
							<option data-bs-offset="10800" value="Bucharest" >(GMT+03:00) Bucharest</option>
							<option data-bs-offset="10800" value="Helsinki" >(GMT+03:00) Helsinki</option>
							<option data-bs-offset="10800" value="Kiev" >(GMT+03:00) Kiev</option>
							<option data-bs-offset="10800" value="Kyiv" >(GMT+03:00) Kyiv</option>
							<option data-bs-offset="10800" value="Riga" >(GMT+03:00) Riga</option>
							<option data-bs-offset="10800" value="Sofia" >(GMT+03:00) Sofia</option>
							<option data-bs-offset="10800" value="Tallinn" >(GMT+03:00) Tallinn</option>
							<option data-bs-offset="10800" value="Vilnius" >(GMT+03:00) Vilnius</option>
							<option data-bs-offset="10800" value="Athens" >(GMT+03:00) Athens</option>
							<option data-bs-offset="10800" value="Istanbul" >(GMT+03:00) Istanbul</option>
							<option data-bs-offset="10800" value="Minsk" >(GMT+03:00) Minsk</option>
							<option data-bs-offset="10800" value="Jerusalem" >(GMT+03:00) Jerusalem</option>
							<option data-bs-offset="10800" value="Moscow" >(GMT+03:00) Moscow</option>
							<option data-bs-offset="10800" value="St. Petersburg" >(GMT+03:00) St. Petersburg</option>
							<option data-bs-offset="10800" value="Volgograd" >(GMT+03:00) Volgograd</option>
							<option data-bs-offset="10800" value="Kuwait" >(GMT+03:00) Kuwait</option>
							<option data-bs-offset="10800" value="Riyadh" >(GMT+03:00) Riyadh</option>
							<option data-bs-offset="10800" value="Nairobi" >(GMT+03:00) Nairobi</option>
							<option data-bs-offset="10800" value="Baghdad" >(GMT+03:00) Baghdad</option>
							<option data-bs-offset="14400" value="Abu Dhabi" >(GMT+04:00) Abu Dhabi</option>
							<option data-bs-offset="14400" value="Muscat" >(GMT+04:00) Muscat</option>
							<option data-bs-offset="14400" value="Baku" >(GMT+04:00) Baku</option>
							<option data-bs-offset="14400" value="Tbilisi" >(GMT+04:00) Tbilisi</option>
							<option data-bs-offset="14400" value="Yerevan" >(GMT+04:00) Yerevan</option>
							<option data-bs-offset="16200" value="Tehran" >(GMT+04:30) Tehran</option>
							<option data-bs-offset="16200" value="Kabul" >(GMT+04:30) Kabul</option>
							<option data-bs-offset="18000" value="Ekaterinburg" >(GMT+05:00) Ekaterinburg</option>
							<option data-bs-offset="18000" value="Islamabad" >(GMT+05:00) Islamabad</option>
							<option data-bs-offset="18000" value="Karachi" >(GMT+05:00) Karachi</option>
							<option data-bs-offset="18000" value="Tashkent" >(GMT+05:00) Tashkent</option>
							<option data-bs-offset="19800" value="Chennai" >(GMT+05:30) Chennai</option>
							<option data-bs-offset="19800" value="Kolkata" >(GMT+05:30) Kolkata</option>
							<option data-bs-offset="19800" value="Mumbai" >(GMT+05:30) Mumbai</option>
							<option data-bs-offset="19800" value="New Delhi" >(GMT+05:30) New Delhi</option>
							<option data-bs-offset="19800" value="Sri Jayawardenepura" >(GMT+05:30) Sri Jayawardenepura</option>
							<option data-bs-offset="20700" value="Kathmandu" >(GMT+05:45) Kathmandu</option>
							<option data-bs-offset="21600" value="Astana" >(GMT+06:00) Astana</option>
							<option data-bs-offset="21600" value="Dhaka" >(GMT+06:00) Dhaka</option>
							<option data-bs-offset="21600" value="Almaty" >(GMT+06:00) Almaty</option>
							<option data-bs-offset="21600" value="Urumqi" >(GMT+06:00) Urumqi</option>
							<option data-bs-offset="23400" value="Rangoon" >(GMT+06:30) Rangoon</option>
							<option data-bs-offset="25200" value="Novosibirsk" >(GMT+07:00) Novosibirsk</option>
							<option data-bs-offset="25200" value="Bangkok" >(GMT+07:00) Bangkok</option>
							<option data-bs-offset="25200" value="Hanoi" >(GMT+07:00) Hanoi</option>
							<option data-bs-offset="25200" value="Jakarta" >(GMT+07:00) Jakarta</option>
							<option data-bs-offset="25200" value="Krasnoyarsk" >(GMT+07:00) Krasnoyarsk</option>
							<option data-bs-offset="28800" value="Beijing" >(GMT+08:00) Beijing</option>
							<option data-bs-offset="28800" value="Chongqing" >(GMT+08:00) Chongqing</option>
							<option data-bs-offset="28800" value="Hong Kong" >(GMT+08:00) Hong Kong</option>
							<option data-bs-offset="28800" value="Kuala Lumpur" >(GMT+08:00) Kuala Lumpur</option>
							<option data-bs-offset="28800" value="Singapore" >(GMT+08:00) Singapore</option>
							<option data-bs-offset="28800" value="Taipei" >(GMT+08:00) Taipei</option>
							<option data-bs-offset="28800" value="Perth" >(GMT+08:00) Perth</option>
							<option data-bs-offset="28800" value="Irkutsk" >(GMT+08:00) Irkutsk</option>
							<option data-bs-offset="28800" value="Ulaan Bataar" >(GMT+08:00) Ulaan Bataar</option>
							<option data-bs-offset="32400" value="Seoul" >(GMT+09:00) Seoul</option>
							<option data-bs-offset="32400" value="Osaka" >(GMT+09:00) Osaka</option>
							<option data-bs-offset="32400" value="Sapporo" >(GMT+09:00) Sapporo</option>
							<option data-bs-offset="32400" value="Tokyo" >(GMT+09:00) Tokyo</option>
							<option data-bs-offset="32400" value="Yakutsk" >(GMT+09:00) Yakutsk</option>
							<option data-bs-offset="34200" value="Darwin" >(GMT+09:30) Darwin</option>
							<option data-bs-offset="34200" value="Adelaide" >(GMT+09:30) Adelaide</option>
							<option data-bs-offset="36000" value="Canberra" >(GMT+10:00) Canberra</option>
							<option data-bs-offset="36000" value="Melbourne" >(GMT+10:00) Melbourne</option>
							<option data-bs-offset="36000" value="Sydney" >(GMT+10:00) Sydney</option>
							<option data-bs-offset="36000" value="Brisbane" >(GMT+10:00) Brisbane</option>
							<option data-bs-offset="36000" value="Hobart" >(GMT+10:00) Hobart</option>
							<option data-bs-offset="36000" value="Vladivostok" >(GMT+10:00) Vladivostok</option>
							<option data-bs-offset="36000" value="Guam" >(GMT+10:00) Guam</option>
							<option data-bs-offset="36000" value="Port Moresby" >(GMT+10:00) Port Moresby</option>
							<option data-bs-offset="36000" value="Solomon Is." >(GMT+10:00) Solomon Is.</option>
							<option data-bs-offset="39600" value="Magadan" >(GMT+11:00) Magadan</option>
							<option data-bs-offset="39600" value="New Caledonia" >(GMT+11:00) New Caledonia</option>
							<option data-bs-offset="43200" value="Fiji" >(GMT+12:00) Fiji</option>
							<option data-bs-offset="43200" value="Kamchatka" >(GMT+12:00) Kamchatka</option>
							<option data-bs-offset="43200" value="Marshall Is." >(GMT+12:00) Marshall Is.</option>
							<option data-bs-offset="43200" value="Auckland" >(GMT+12:00) Auckland</option>
							<option data-bs-offset="43200" value="Wellington" >(GMT+12:00) Wellington</option>
							<option data-bs-offset="46800" value="Nuku&#039;alofa" >(GMT+13:00) Nuku&#039;alofa</option>
						</select>
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label  fw-bold fs-6">Currency</label>
                    <div class="col-lg-8 fv-row">
                        <select name="currency" aria-label="Select a Currency" data-control="select2" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg form-control-lg">
                            <option value="">Select a currency..</option>
							<option value="USD" ><b>USD</b>&nbsp;-&nbsp;USA dollar</option>
							<option value="GBP" ><b>GBP</b>&nbsp;-&nbsp;British pound</option>
							<option value="AUD" ><b>AUD</b>&nbsp;-&nbsp;Australian dollar</option>
							<option value="JPY" ><b>JPY</b>&nbsp;-&nbsp;Japanese yen</option>
							<option value="SEK" ><b>SEK</b>&nbsp;-&nbsp;Swedish krona</option>
							<option value="CAD" ><b>CAD</b>&nbsp;-&nbsp;Canadian dollar</option>
							<option value="CHF" ><b>CHF</b>&nbsp;-&nbsp;Swiss franc</option>
						</select>
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Communication</label>
                    <div class="col-lg-8 fv-row">
                        <div class="d-flex align-items-center mt-3">
                            <label class="form-check form-check-inline form-check-solid me-5">
                                <input type="hidden" name="communication[email]" value="0">
                                <input class="form-check-input" name="communication[email]" type="checkbox" value="1" />
                                <span class="fw-bold ps-2 fs-6">
                                    Email
                                </span>
                            </label>
                            <label class="form-check form-check-inline form-check-solid">
                                <input type="hidden" name="communication[phone]" value="0">
                                <input class="form-check-input" name="communication[phone]" type="checkbox" value="1" />
                                <span class="fw-bold ps-2 fs-6">
                                    Phone
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row mb-0">
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Allow Marketing</label>
                    <div class="col-lg-8 d-flex align-items-center">
                        <div class="form-check form-check-solid form-check-custom form-switch fv-row">
                            <input type="hidden" name="marketing" value="0">
                            <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" name="marketing" value="1" />
                            <label class="form-check-label" for="allowmarketing"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="reset" class="btn btn-white btn-active-light-primary me-2">Discard</button>
                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">
				<span class="indicator-label">
					Save Changes
				</span>
				<span class="indicator-progress">
					Please wait...
					<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
				</span>
                </button>
            </div>
        </form>
    </div>
</div>