@extends('layouts.register.layout')
@section('content')
    <div class="register-wrapper container" id="PersonalData">
        <!-- <form class=""> -->
        <div id="user-address" class="row">
            <div class="col-sm-12 col-md-8">
                <h3 class="header">Personal Data</h3>
                <p class="header-message">Skip for now?
                    <a class="link" href="/portfolio">View Portfolio</a>
                </p>
                <div class="collapse-module_collapse__24uNq">
                    <div class="" style="transition: opacity 300ms ease-in-out 0s; opacity: 1;">
                        <div class="alert-module_alert__YNUvw alert-module_alert-danger__zr3Gm"
                             role="alert">
                            <div class="alert-module_alertInside__2M8ZD">
                                <button type="button" class="alert-module_close__2naWP"
                                        aria-label="Close Alert">
                                                    <span aria-hidden="true"
                                                          class="alert-module_close-icon__2Gm0N">×</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h3 class="section-title divider col-12 col-sm-12">Personal Information</h3>
                    <div class="legalDetails.tin-input col-12 col-sm-12 col-md-6">
                        <div class="position-relative form-group">
                            <label for="legalDetails.tin" class="mr-sm-2 legalDetails.tin-label">Tax ID
                                /
                                SSN</label>
                            <input autocomplete="new-password" id="legalDetails" name="legalDetails.tin"
                                   label="Tax ID / SSN" placeholder="--- -- ----" maxlength="11" sm="12"
                                   md="6" type="password" class="form-control-lg form-control" value="">
                        </div>
                    </div>
                    <div class="col-sm-6 no-tin position-relative form-check">
                        <label class="no-tin-label form-check-label">
                            <input name="noTin" type="checkbox" class="checkbox form-check-input">
                            <div class="checkbox-text">I do not have a US TIN/SSN</div>
                        </label>
                    </div>
                    <div class="month-input col-6 col-sm-6 col-md-1">
                        <div class="position-relative form-group">
                            <label for="month" class="mr-sm-2 month-label">Date of Birth</label>
                            <input autocomplete="new-password" name="month" id="month"
                                   label="Date of Birth"
                                   placeholder="MM" maxlength="2" max="12" xs="4" sm="6" md="1"
                                   type="text"
                                   class="form-control-lg form-control" value="">
                        </div>
                    </div>
                    <div class="day-input col-6 col-sm-6 col-md-1">
                        <div class="position-relative form-group">
                            <label for="day" class="mr-sm-2 day-label"></label>
                            <input autocomplete="new-password" name="day" id="day" label=" "
                                   placeholder="DD" maxlength="2" max="31" xs="4" sm="6" md="1"
                                   type="text"
                                   class="form-control-lg form-control" value="">
                        </div>
                    </div>
                    <div class="year-input col-12 col-sm-12 col-md-3">
                        <div class="position-relative form-group">
                            <label for="year" class="mr-sm-2 year-label"></label>
                            <input autocomplete="new-password" name="year" id="year" label=" "
                                   placeholder="YYYY" maxlength="4" xs="4" sm="12" md="3" type="text"
                                   class="form-control-lg form-control" value="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="position-relative form-group">
                            <label for="citizenshipCountryCode"
                                   class="mr-sm-2 citizenshipCountryCode-label">Country of
                                Citizenship</label>
                            <select autocomplete="none" label="Country of Citizenship"
                                    name="citizenshipCountryCode" id="citizenshipCountryCode"
                                    class="form-control-lg form-control">
                                <option></option>
                                <option value="US">United States of America</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Åland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia (Plurinational State of)</option>
                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="CV">Cabo Verde</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo (Democratic Republic of the)</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Côte d'Ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CW">Curaçao</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czechia</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="SZ">Eswatini</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard Island and McDonald Islands</option>
                                <option value="VA">Holy See</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran (Islamic Republic of)</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KP">Korea (Democratic People's Republic of)</option>
                                <option value="KR">Korea (Republic of)</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Lao People's Democratic Republic</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macao</option>
                                <option value="MK">Macedonia (the former Yugoslav Republic of)</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia (Federated States of)</option>
                                <option value="MD">Moldova (Republic of)</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestine, State of</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Réunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="BL">Saint Barthélemy</option>
                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="MF">Saint Martin (French part)</option>
                                <option value="PM">Saint Pierre and Miquelon</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome and Principe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SX">Sint Maarten (Dutch part)</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                <option value="SS">South Sudan</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syrian Arab Republic</option>
                                <option value="TW">Taiwan, Province of China</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania, United Republic of</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom of Great Britain and Northern Ireland
                                </option>
                                <option value="UM">United States Minor Outlying Islands</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela (Bolivarian Republic of)</option>
                                <option value="VN">Viet Nam</option>
                                <option value="VG">Virgin Islands (British)</option>
                                <option value="VI">Virgin Islands (U.S.)</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="position-relative form-group">
                            <label for="maritalStatus" class="mr-sm-2 maritalStatus-label">Marital
                                Status</label>
                            <select autocomplete="none" label="Marital Status" name="maritalStatus"
                                    id="maritalStatus" class="form-control-lg form-control">
                                <option></option>
                                <option value="eacb7f6b-8eab-4b11-a011-c72907bec2a0">Single</option>
                                <option value="d225a944-4e25-4060-9c9e-2a78aece7431">Married</option>
                                <option value="6471b2ae-b4ef-44a9-a4e6-3c875ea1a0d4">Divorced</option>
                                <option value="fcdf5953-fcd2-4577-9d45-31a02b97d5e5">Widowed</option>
                            </select>
                        </div>
                    </div>
                    <div class="legalDetails.dependentCount-input col-12 col-sm-12 col-md-6">
                        <div class="position-relative form-group">
                            <label for="legalDetails.dependentCount"
                                   class="mr-sm-2 legalDetails.dependentCount-label">Number of
                                Dependents</label>
                            <input autocomplete="new-password" sm="12" md="6"
                                   name="legalDetails.dependentCount" label="Number of Dependents"
                                   datacy="numberofDependents" placeholder="" min="0" max="50"
                                   type="number"
                                   class="form-control-lg form-control" value="0">
                        </div>
                    </div>
                    <h3 class="section-title divider col-12 col-sm-12">Physical Address</h3>
                </div>
                <div class="address-row-1 row">
                    <div class="col-sm-12 col-md-6">
                        <div class="position-relative form-group">
                            <label for="street" class="mr-sm-2">Address Line 1</label>
                            <input name="street" id="legalDetails.physicalAddress-street" type="text"
                                   class="form-control-lg form-control" value="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="position-relative form-group">
                            <label for="street2" class="mr-sm-2">Address Line 2</label>
                            <input name="street2" id="legalDetails.physicalAddress-street2" type="text"
                                   class="form-control-lg form-control" value="">
                        </div>
                    </div>
                </div>
                <div class="address-row-2 row">
                    <div class="col-sm-12 col-md-6">
                        <div class="position-relative form-group">
                            <label for="street3" class="mr-sm-2">Address Line 3</label>
                            <input name="street3" id="legalDetails.physicalAddress-street3" type="text"
                                   class="form-control-lg form-control" value="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="position-relative form-group">
                            <label for="street4" class="mr-sm-2">Address Line 4</label>
                            <input name="street4" id="legalDetails.physicalAddress-street4" type="text"
                                   class="form-control-lg form-control" value="">
                        </div>
                    </div>
                </div>
                <div class="city-region-row row">
                    <div class="col-sm-12 col-md-6">
                        <div class="position-relative form-group">
                            <label for="city" class="mr-sm-2">City</label>
                            <input name="city" id="legalDetails.physicalAddress-city" type="text"
                                   class="form-control-lg form-control" value="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="position-relative form-group">
                            <label for="region" class="mr-sm-2">Region</label>
                            <input name="region" id="legalDetails.physicalAddress-region" type="text"
                                   class="form-control-lg form-control" value="">
                        </div>
                    </div>
                </div>
                <div class="postal-code-country-row row">
                    <div class="col-sm-12 col-md-6">
                        <div class="position-relative form-group">
                            <label for="postalCode" class="mr-sm-2">Postal Code</label>
                            <input id="legalDetails.physicalAddress-postalCode" name="postalCode"
                                   type="text" class="form-control-lg form-control" value="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="position-relative form-group">
                            <label for="country" class="mr-sm-2">Country</label>
                            <select id="legalDetails.physicalAddress-country" name="country"
                                    autocomplete="none" class="form-control-lg form-control">
                                <option></option>
                                <option value="US" data-restricted="false" selected="">United States of
                                    America
                                </option>
                                <option value="AF" data-restricted="true">Afghanistan</option>
                                <option value="AX" data-restricted="false">Åland Islands</option>
                                <option value="AL" data-restricted="false">Albania</option>
                                <option value="DZ" data-restricted="false">Algeria</option>
                                <option value="AS" data-restricted="false">American Samoa</option>
                                <option value="AD" data-restricted="false">Andorra</option>
                                <option value="AO" data-restricted="false">Angola</option>
                                <option value="AI" data-restricted="false">Anguilla</option>
                                <option value="AQ" data-restricted="false">Antarctica</option>
                                <option value="AG" data-restricted="false">Antigua and Barbuda</option>
                                <option value="AR" data-restricted="false">Argentina</option>
                                <option value="AM" data-restricted="false">Armenia</option>
                                <option value="AW" data-restricted="false">Aruba</option>
                                <option value="AU" data-restricted="false">Australia</option>
                                <option value="AT" data-restricted="false">Austria</option>
                                <option value="AZ" data-restricted="true">Azerbaijan</option>
                                <option value="BS" data-restricted="false">Bahamas</option>
                                <option value="BH" data-restricted="false">Bahrain</option>
                                <option value="BD" data-restricted="true">Bangladesh</option>
                                <option value="BB" data-restricted="false">Barbados</option>
                                <option value="BY" data-restricted="true">Belarus</option>
                                <option value="BE" data-restricted="false">Belgium</option>
                                <option value="BZ" data-restricted="true">Belize</option>
                                <option value="BJ" data-restricted="true">Benin</option>
                                <option value="BM" data-restricted="false">Bermuda</option>
                                <option value="BT" data-restricted="false">Bhutan</option>
                                <option value="BO" data-restricted="true">Bolivia (Plurinational State
                                    of)
                                </option>
                                <option value="BQ" data-restricted="false">Bonaire, Sint Eustatius and
                                    Saba
                                </option>
                                <option value="BA" data-restricted="true">Bosnia and Herzegovina
                                </option>
                                <option value="BW" data-restricted="true">Botswana</option>
                                <option value="BV" data-restricted="false">Bouvet Island</option>
                                <option value="BR" data-restricted="false">Brazil</option>
                                <option value="IO" data-restricted="false">British Indian Ocean
                                    Territory
                                </option>
                                <option value="BN" data-restricted="false">Brunei Darussalam</option>
                                <option value="BG" data-restricted="false">Bulgaria</option>
                                <option value="BF" data-restricted="true">Burkina Faso</option>
                                <option value="BI" data-restricted="false">Burundi</option>
                                <option value="CV" data-restricted="false">Cabo Verde</option>
                                <option value="KH" data-restricted="true">Cambodia</option>
                                <option value="CM" data-restricted="true">Cameroon</option>
                                <option value="CA" data-restricted="false">Canada</option>
                                <option value="KY" data-restricted="false">Cayman Islands</option>
                                <option value="CF" data-restricted="true">Central African Republic
                                </option>
                                <option value="TD" data-restricted="false">Chad</option>
                                <option value="CL" data-restricted="false">Chile</option>
                                <option value="CN" data-restricted="false">China</option>
                                <option value="CX" data-restricted="false">Christmas Island</option>
                                <option value="CC" data-restricted="false">Cocos (Keeling) Islands
                                </option>
                                <option value="CO" data-restricted="false">Colombia</option>
                                <option value="KM" data-restricted="false">Comoros</option>
                                <option value="CG" data-restricted="true">Congo</option>
                                <option value="CD" data-restricted="true">Congo (Democratic Republic of
                                    the)
                                </option>
                                <option value="CK" data-restricted="false">Cook Islands</option>
                                <option value="CR" data-restricted="false">Costa Rica</option>
                                <option value="CI" data-restricted="true">Côte d'Ivoire</option>
                                <option value="HR" data-restricted="false">Croatia</option>
                                <option value="CU" data-restricted="true">Cuba</option>
                                <option value="CW" data-restricted="false">Curaçao</option>
                                <option value="CY" data-restricted="false">Cyprus</option>
                                <option value="CZ" data-restricted="false">Czechia</option>
                                <option value="DK" data-restricted="false">Denmark</option>
                                <option value="DJ" data-restricted="false">Djibouti</option>
                                <option value="DM" data-restricted="true">Dominica</option>
                                <option value="DO" data-restricted="true">Dominican Republic</option>
                                <option value="EC" data-restricted="false">Ecuador</option>
                                <option value="EG" data-restricted="true">Egypt</option>
                                <option value="SV" data-restricted="true">El Salvador</option>
                                <option value="GQ" data-restricted="false">Equatorial Guinea</option>
                                <option value="ER" data-restricted="false">Eritrea</option>
                                <option value="EE" data-restricted="false">Estonia</option>
                                <option value="SZ" data-restricted="false">Eswatini</option>
                                <option value="ET" data-restricted="true">Ethiopia</option>
                                <option value="FK" data-restricted="false">Falkland Islands (Malvinas)
                                </option>
                                <option value="FO" data-restricted="false">Faroe Islands</option>
                                <option value="FJ" data-restricted="false">Fiji</option>
                                <option value="FI" data-restricted="false">Finland</option>
                                <option value="FR" data-restricted="false">France</option>
                                <option value="GF" data-restricted="false">French Guiana</option>
                                <option value="PF" data-restricted="false">French Polynesia</option>
                                <option value="TF" data-restricted="false">French Southern Territories
                                </option>
                                <option value="GA" data-restricted="true">Gabon</option>
                                <option value="GM" data-restricted="false">Gambia</option>
                                <option value="GE" data-restricted="false">Georgia</option>
                                <option value="DE" data-restricted="false">Germany</option>
                                <option value="GH" data-restricted="true">Ghana</option>
                                <option value="GI" data-restricted="false">Gibraltar</option>
                                <option value="GR" data-restricted="false">Greece</option>
                                <option value="GL" data-restricted="false">Greenland</option>
                                <option value="GD" data-restricted="false">Grenada</option>
                                <option value="GP" data-restricted="false">Guadeloupe</option>
                                <option value="GU" data-restricted="false">Guam</option>
                                <option value="GT" data-restricted="true">Guatemala</option>
                                <option value="GG" data-restricted="false">Guernsey</option>
                                <option value="GN" data-restricted="false">Guinea</option>
                                <option value="GW" data-restricted="true">Guinea-Bissau</option>
                                <option value="GY" data-restricted="false">Guyana</option>
                                <option value="HT" data-restricted="true">Haiti</option>
                                <option value="HM" data-restricted="false">Heard Island and McDonald
                                    Islands
                                </option>
                                <option value="VA" data-restricted="false">Holy See</option>
                                <option value="HN" data-restricted="false">Honduras</option>
                                <option value="HK" data-restricted="false">Hong Kong</option>
                                <option value="HU" data-restricted="false">Hungary</option>
                                <option value="IS" data-restricted="false">Iceland</option>
                                <option value="IN" data-restricted="false">India</option>
                                <option value="ID" data-restricted="true">Indonesia</option>
                                <option value="IR" data-restricted="true">Iran (Islamic Republic of)
                                </option>
                                <option value="IQ" data-restricted="true">Iraq</option>
                                <option value="IE" data-restricted="false">Ireland</option>
                                <option value="IM" data-restricted="false">Isle of Man</option>
                                <option value="IL" data-restricted="false">Israel</option>
                                <option value="IT" data-restricted="false">Italy</option>
                                <option value="JM" data-restricted="false">Jamaica</option>
                                <option value="JP" data-restricted="false">Japan</option>
                                <option value="JE" data-restricted="false">Jersey</option>
                                <option value="JO" data-restricted="false">Jordan</option>
                                <option value="KZ" data-restricted="false">Kazakhstan</option>
                                <option value="KE" data-restricted="true">Kenya</option>
                                <option value="KI" data-restricted="true">Kiribati</option>
                                <option value="KP" data-restricted="true">Korea (Democratic People's
                                    Republic of)
                                </option>
                                <option value="KR" data-restricted="false">Korea (Republic of)</option>
                                <option value="KW" data-restricted="false">Kuwait</option>
                                <option value="KG" data-restricted="true">Kyrgyzstan</option>
                                <option value="LA" data-restricted="true">Lao People's Democratic
                                    Republic
                                </option>
                                <option value="LV" data-restricted="true">Latvia</option>
                                <option value="LB" data-restricted="true">Lebanon</option>
                                <option value="LS" data-restricted="false">Lesotho</option>
                                <option value="LR" data-restricted="true">Liberia</option>
                                <option value="LY" data-restricted="true">Libya</option>
                                <option value="LI" data-restricted="false">Liechtenstein</option>
                                <option value="LT" data-restricted="false">Lithuania</option>
                                <option value="LU" data-restricted="false">Luxembourg</option>
                                <option value="MO" data-restricted="false">Macao</option>
                                <option value="MK" data-restricted="true">Macedonia (the former Yugoslav
                                    Republic of)
                                </option>
                                <option value="MG" data-restricted="false">Madagascar</option>
                                <option value="MW" data-restricted="true">Malawi</option>
                                <option value="MY" data-restricted="true">Malaysia</option>
                                <option value="MV" data-restricted="false">Maldives</option>
                                <option value="ML" data-restricted="true">Mali</option>
                                <option value="MT" data-restricted="false">Malta</option>
                                <option value="MH" data-restricted="true">Marshall Islands</option>
                                <option value="MQ" data-restricted="false">Martinique</option>
                                <option value="MR" data-restricted="false">Mauritania</option>
                                <option value="MU" data-restricted="false">Mauritius</option>
                                <option value="YT" data-restricted="false">Mayotte</option>
                                <option value="MX" data-restricted="false">Mexico</option>
                                <option value="FM" data-restricted="false">Micronesia (Federated States
                                    of)
                                </option>
                                <option value="MD" data-restricted="true">Moldova (Republic of)</option>
                                <option value="MC" data-restricted="false">Monaco</option>
                                <option value="MN" data-restricted="false">Mongolia</option>
                                <option value="ME" data-restricted="false">Montenegro</option>
                                <option value="MS" data-restricted="false">Montserrat</option>
                                <option value="MA" data-restricted="false">Morocco</option>
                                <option value="MZ" data-restricted="true">Mozambique</option>
                                <option value="MM" data-restricted="true">Myanmar</option>
                                <option value="NA" data-restricted="true">Namibia</option>
                                <option value="NR" data-restricted="false">Nauru</option>
                                <option value="NP" data-restricted="true">Nepal</option>
                                <option value="NL" data-restricted="false">Netherlands</option>
                                <option value="NC" data-restricted="false">New Caledonia</option>
                                <option value="NZ" data-restricted="false">New Zealand</option>
                                <option value="NI" data-restricted="true">Nicaragua</option>
                                <option value="NE" data-restricted="true">Niger</option>
                                <option value="NG" data-restricted="true">Nigeria</option>
                                <option value="NU" data-restricted="false">Niue</option>
                                <option value="NF" data-restricted="false">Norfolk Island</option>
                                <option value="MP" data-restricted="false">Northern Mariana Islands
                                </option>
                                <option value="NO" data-restricted="false">Norway</option>
                                <option value="OM" data-restricted="true">Oman</option>
                                <option value="PK" data-restricted="true">Pakistan</option>
                                <option value="PW" data-restricted="false">Palau</option>
                                <option value="PS" data-restricted="false">Palestine, State of</option>
                                <option value="PA" data-restricted="false">Panama</option>
                                <option value="PG" data-restricted="false">Papua New Guinea</option>
                                <option value="PY" data-restricted="true">Paraguay</option>
                                <option value="PE" data-restricted="false">Peru</option>
                                <option value="PH" data-restricted="false">Philippines</option>
                                <option value="PN" data-restricted="false">Pitcairn</option>
                                <option value="PL" data-restricted="false">Poland</option>
                                <option value="PT" data-restricted="false">Portugal</option>
                                <option value="PR" data-restricted="false">Puerto Rico</option>
                                <option value="QA" data-restricted="false">Qatar</option>
                                <option value="RE" data-restricted="false">Réunion</option>
                                <option value="RO" data-restricted="false">Romania</option>
                                <option value="RU" data-restricted="true">Russian Federation</option>
                                <option value="RW" data-restricted="false">Rwanda</option>
                                <option value="BL" data-restricted="false">Saint Barthélemy</option>
                                <option value="SH" data-restricted="false">Saint Helena, Ascension and
                                    Tristan da Cunha
                                </option>
                                <option value="KN" data-restricted="false">Saint Kitts and Nevis
                                </option>
                                <option value="LC" data-restricted="false">Saint Lucia</option>
                                <option value="MF" data-restricted="false">Saint Martin (French part)
                                </option>
                                <option value="PM" data-restricted="false">Saint Pierre and Miquelon
                                </option>
                                <option value="VC" data-restricted="false">Saint Vincent and the
                                    Grenadines
                                </option>
                                <option value="WS" data-restricted="true">Samoa</option>
                                <option value="SM" data-restricted="false">San Marino</option>
                                <option value="ST" data-restricted="true">Sao Tome and Principe</option>
                                <option value="SA" data-restricted="false">Saudi Arabia</option>
                                <option value="SN" data-restricted="true">Senegal</option>
                                <option value="RS" data-restricted="true">Serbia</option>
                                <option value="SC" data-restricted="true">Seychelles</option>
                                <option value="SL" data-restricted="true">Sierra Leone</option>
                                <option value="SG" data-restricted="false">Singapore</option>
                                <option value="SX" data-restricted="false">Sint Maarten (Dutch part)
                                </option>
                                <option value="SK" data-restricted="false">Slovakia</option>
                                <option value="SI" data-restricted="false">Slovenia</option>
                                <option value="SB" data-restricted="true">Solomon Islands</option>
                                <option value="SO" data-restricted="true">Somalia</option>
                                <option value="ZA" data-restricted="false">South Africa</option>
                                <option value="GS" data-restricted="false">South Georgia and the South
                                    Sandwich Islands
                                </option>
                                <option value="SS" data-restricted="true">South Sudan</option>
                                <option value="ES" data-restricted="false">Spain</option>
                                <option value="LK" data-restricted="true">Sri Lanka</option>
                                <option value="SD" data-restricted="true">Sudan</option>
                                <option value="SR" data-restricted="true">Suriname</option>
                                <option value="SJ" data-restricted="false">Svalbard and Jan Mayen
                                </option>
                                <option value="SE" data-restricted="false">Sweden</option>
                                <option value="CH" data-restricted="false">Switzerland</option>
                                <option value="SY" data-restricted="true">Syrian Arab Republic</option>
                                <option value="TW" data-restricted="false">Taiwan, Province of China
                                </option>
                                <option value="TJ" data-restricted="true">Tajikistan</option>
                                <option value="TZ" data-restricted="true">Tanzania, United Republic of
                                </option>
                                <option value="TH" data-restricted="false">Thailand</option>
                                <option value="TL" data-restricted="false">Timor-Leste</option>
                                <option value="TG" data-restricted="false">Togo</option>
                                <option value="TK" data-restricted="false">Tokelau</option>
                                <option value="TO" data-restricted="true">Tonga</option>
                                <option value="TT" data-restricted="false">Trinidad and Tobago</option>
                                <option value="TN" data-restricted="false">Tunisia</option>
                                <option value="TR" data-restricted="true">Turkey</option>
                                <option value="TM" data-restricted="false">Turkmenistan</option>
                                <option value="TC" data-restricted="false">Turks and Caicos Islands
                                </option>
                                <option value="TV" data-restricted="false">Tuvalu</option>
                                <option value="UG" data-restricted="true">Uganda</option>
                                <option value="UA" data-restricted="true">Ukraine</option>
                                <option value="AE" data-restricted="true">United Arab Emirates</option>
                                <option value="GB" data-restricted="false">United Kingdom of Great
                                    Britain
                                    and Northern Ireland
                                </option>
                                <option value="UM" data-restricted="false">United States Minor Outlying
                                    Islands
                                </option>
                                <option value="UY" data-restricted="false">Uruguay</option>
                                <option value="UZ" data-restricted="false">Uzbekistan</option>
                                <option value="VU" data-restricted="true">Vanuatu</option>
                                <option value="VE" data-restricted="true">Venezuela (Bolivarian Republic
                                    of)
                                </option>
                                <option value="VN" data-restricted="false">Viet Nam</option>
                                <option value="VG" data-restricted="false">Virgin Islands (British)
                                </option>
                                <option value="VI" data-restricted="false">Virgin Islands (U.S.)
                                </option>
                                <option value="WF" data-restricted="false">Wallis and Futuna</option>
                                <option value="EH" data-restricted="false">Western Sahara</option>
                                <option value="YE" data-restricted="true">Yemen</option>
                                <option value="ZM" data-restricted="true">Zambia</option>
                                <option value="ZW" data-restricted="true">Zimbabwe</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="position-relative form-check">
                    <label class="different-billing form-check-label">
                        <input name="sameAddress" type="checkbox" class="checkbox form-check-input">
                        <div class="checkbox-text">Mailing address is same as physical address above
                        </div>
                    </label>
                </div>
                <div class="row divider">
                    <h3 class="section-title col-12 col-sm-12">Mailing Address</h3>
                </div>
                <div class="address-row-1 row">
                    <div class="col-sm-12 col-md-6">
                        <div class="position-relative form-group">
                            <label for="street" class="mr-sm-2">Address Line 1</label>
                            <input name="street" id="mailingAddress-street" type="text"
                                   class="form-control-lg form-control" value="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="position-relative form-group">
                            <label for="street2" class="mr-sm-2">Address Line 2</label>
                            <input name="street2" id="mailingAddress-street2" type="text"
                                   class="form-control-lg form-control" value="">
                        </div>
                    </div>
                </div>
                <div class="address-row-2 row">
                    <div class="col-sm-12 col-md-6">
                        <div class="position-relative form-group">
                            <label for="street3" class="mr-sm-2">Address Line 3</label>
                            <input name="street3" id="mailingAddress-street3" type="text"
                                   class="form-control-lg form-control" value="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="position-relative form-group">
                            <label for="street4" class="mr-sm-2">Address Line 4</label>
                            <input name="street4" id="mailingAddress-street4" type="text"
                                   class="form-control-lg form-control" value="">
                        </div>
                    </div>
                </div>
                <div class="city-region-row row">
                    <div class="col-sm-12 col-md-6">
                        <div class="position-relative form-group">
                            <label for="city" class="mr-sm-2">City</label>
                            <input name="city" id="mailingAddress-city" type="text"
                                   class="form-control-lg form-control" value="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="position-relative form-group">
                            <label for="region" class="mr-sm-2">Region</label>
                            <input name="region" id="mailingAddress-region" type="text"
                                   class="form-control-lg form-control" value="">
                        </div>
                    </div>
                </div>
                <div class="postal-code-country-row row">
                    <div class="col-sm-12 col-md-6">
                        <div class="position-relative form-group">
                            <label for="postalCode" class="mr-sm-2">Postal Code</label>
                            <input id="mailingAddress-postalCode" name="postalCode" type="text"
                                   class="form-control-lg form-control" value="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="position-relative form-group">
                            <label for="country" class="mr-sm-2">Country</label>
                            <select id="mailingAddress-country" name="country" autocomplete="none"
                                    class="form-control-lg form-control">
                                <option></option>
                                <option value="US" data-restricted="false">United States of America
                                </option>
                                <option value="AF" data-restricted="true">Afghanistan</option>
                                <option value="AX" data-restricted="false">Åland Islands</option>
                                <option value="AL" data-restricted="false">Albania</option>
                                <option value="DZ" data-restricted="false">Algeria</option>
                                <option value="AS" data-restricted="false">American Samoa</option>
                                <option value="AD" data-restricted="false">Andorra</option>
                                <option value="AO" data-restricted="false">Angola</option>
                                <option value="AI" data-restricted="false">Anguilla</option>
                                <option value="AQ" data-restricted="false">Antarctica</option>
                                <option value="AG" data-restricted="false">Antigua and Barbuda</option>
                                <option value="AR" data-restricted="false">Argentina</option>
                                <option value="AM" data-restricted="false">Armenia</option>
                                <option value="AW" data-restricted="false">Aruba</option>
                                <option value="AU" data-restricted="false">Australia</option>
                                <option value="AT" data-restricted="false">Austria</option>
                                <option value="AZ" data-restricted="true">Azerbaijan</option>
                                <option value="BS" data-restricted="false">Bahamas</option>
                                <option value="BH" data-restricted="false">Bahrain</option>
                                <option value="BD" data-restricted="true">Bangladesh</option>
                                <option value="BB" data-restricted="false">Barbados</option>
                                <option value="BY" data-restricted="true">Belarus</option>
                                <option value="BE" data-restricted="false">Belgium</option>
                                <option value="BZ" data-restricted="true">Belize</option>
                                <option value="BJ" data-restricted="true">Benin</option>
                                <option value="BM" data-restricted="false">Bermuda</option>
                                <option value="BT" data-restricted="false">Bhutan</option>
                                <option value="BO" data-restricted="true">Bolivia (Plurinational State
                                    of)
                                </option>
                                <option value="BQ" data-restricted="false">Bonaire, Sint Eustatius and
                                    Saba
                                </option>
                                <option value="BA" data-restricted="true">Bosnia and Herzegovina
                                </option>
                                <option value="BW" data-restricted="true">Botswana</option>
                                <option value="BV" data-restricted="false">Bouvet Island</option>
                                <option value="BR" data-restricted="false">Brazil</option>
                                <option value="IO" data-restricted="false">British Indian Ocean
                                    Territory
                                </option>
                                <option value="BN" data-restricted="false">Brunei Darussalam</option>
                                <option value="BG" data-restricted="false">Bulgaria</option>
                                <option value="BF" data-restricted="true">Burkina Faso</option>
                                <option value="BI" data-restricted="false">Burundi</option>
                                <option value="CV" data-restricted="false">Cabo Verde</option>
                                <option value="KH" data-restricted="true">Cambodia</option>
                                <option value="CM" data-restricted="true">Cameroon</option>
                                <option value="CA" data-restricted="false">Canada</option>
                                <option value="KY" data-restricted="false">Cayman Islands</option>
                                <option value="CF" data-restricted="true">Central African Republic
                                </option>
                                <option value="TD" data-restricted="false">Chad</option>
                                <option value="CL" data-restricted="false">Chile</option>
                                <option value="CN" data-restricted="false" selected="">China</option>
                                <option value="CX" data-restricted="false">Christmas Island</option>
                                <option value="CC" data-restricted="false">Cocos (Keeling) Islands
                                </option>
                                <option value="CO" data-restricted="false">Colombia</option>
                                <option value="KM" data-restricted="false">Comoros</option>
                                <option value="CG" data-restricted="true">Congo</option>
                                <option value="CD" data-restricted="true">Congo (Democratic Republic of
                                    the)
                                </option>
                                <option value="CK" data-restricted="false">Cook Islands</option>
                                <option value="CR" data-restricted="false">Costa Rica</option>
                                <option value="CI" data-restricted="true">Côte d'Ivoire</option>
                                <option value="HR" data-restricted="false">Croatia</option>
                                <option value="CU" data-restricted="true">Cuba</option>
                                <option value="CW" data-restricted="false">Curaçao</option>
                                <option value="CY" data-restricted="false">Cyprus</option>
                                <option value="CZ" data-restricted="false">Czechia</option>
                                <option value="DK" data-restricted="false">Denmark</option>
                                <option value="DJ" data-restricted="false">Djibouti</option>
                                <option value="DM" data-restricted="true">Dominica</option>
                                <option value="DO" data-restricted="true">Dominican Republic</option>
                                <option value="EC" data-restricted="false">Ecuador</option>
                                <option value="EG" data-restricted="true">Egypt</option>
                                <option value="SV" data-restricted="true">El Salvador</option>
                                <option value="GQ" data-restricted="false">Equatorial Guinea</option>
                                <option value="ER" data-restricted="false">Eritrea</option>
                                <option value="EE" data-restricted="false">Estonia</option>
                                <option value="SZ" data-restricted="false">Eswatini</option>
                                <option value="ET" data-restricted="true">Ethiopia</option>
                                <option value="FK" data-restricted="false">Falkland Islands (Malvinas)
                                </option>
                                <option value="FO" data-restricted="false">Faroe Islands</option>
                                <option value="FJ" data-restricted="false">Fiji</option>
                                <option value="FI" data-restricted="false">Finland</option>
                                <option value="FR" data-restricted="false">France</option>
                                <option value="GF" data-restricted="false">French Guiana</option>
                                <option value="PF" data-restricted="false">French Polynesia</option>
                                <option value="TF" data-restricted="false">French Southern Territories
                                </option>
                                <option value="GA" data-restricted="true">Gabon</option>
                                <option value="GM" data-restricted="false">Gambia</option>
                                <option value="GE" data-restricted="false">Georgia</option>
                                <option value="DE" data-restricted="false">Germany</option>
                                <option value="GH" data-restricted="true">Ghana</option>
                                <option value="GI" data-restricted="false">Gibraltar</option>
                                <option value="GR" data-restricted="false">Greece</option>
                                <option value="GL" data-restricted="false">Greenland</option>
                                <option value="GD" data-restricted="false">Grenada</option>
                                <option value="GP" data-restricted="false">Guadeloupe</option>
                                <option value="GU" data-restricted="false">Guam</option>
                                <option value="GT" data-restricted="true">Guatemala</option>
                                <option value="GG" data-restricted="false">Guernsey</option>
                                <option value="GN" data-restricted="false">Guinea</option>
                                <option value="GW" data-restricted="true">Guinea-Bissau</option>
                                <option value="GY" data-restricted="false">Guyana</option>
                                <option value="HT" data-restricted="true">Haiti</option>
                                <option value="HM" data-restricted="false">Heard Island and McDonald
                                    Islands
                                </option>
                                <option value="VA" data-restricted="false">Holy See</option>
                                <option value="HN" data-restricted="false">Honduras</option>
                                <option value="HK" data-restricted="false">Hong Kong</option>
                                <option value="HU" data-restricted="false">Hungary</option>
                                <option value="IS" data-restricted="false">Iceland</option>
                                <option value="IN" data-restricted="false">India</option>
                                <option value="ID" data-restricted="true">Indonesia</option>
                                <option value="IR" data-restricted="true">Iran (Islamic Republic of)
                                </option>
                                <option value="IQ" data-restricted="true">Iraq</option>
                                <option value="IE" data-restricted="false">Ireland</option>
                                <option value="IM" data-restricted="false">Isle of Man</option>
                                <option value="IL" data-restricted="false">Israel</option>
                                <option value="IT" data-restricted="false">Italy</option>
                                <option value="JM" data-restricted="false">Jamaica</option>
                                <option value="JP" data-restricted="false">Japan</option>
                                <option value="JE" data-restricted="false">Jersey</option>
                                <option value="JO" data-restricted="false">Jordan</option>
                                <option value="KZ" data-restricted="false">Kazakhstan</option>
                                <option value="KE" data-restricted="true">Kenya</option>
                                <option value="KI" data-restricted="true">Kiribati</option>
                                <option value="KP" data-restricted="true">Korea (Democratic People's
                                    Republic of)
                                </option>
                                <option value="KR" data-restricted="false">Korea (Republic of)</option>
                                <option value="KW" data-restricted="false">Kuwait</option>
                                <option value="KG" data-restricted="true">Kyrgyzstan</option>
                                <option value="LA" data-restricted="true">Lao People's Democratic
                                    Republic
                                </option>
                                <option value="LV" data-restricted="true">Latvia</option>
                                <option value="LB" data-restricted="true">Lebanon</option>
                                <option value="LS" data-restricted="false">Lesotho</option>
                                <option value="LR" data-restricted="true">Liberia</option>
                                <option value="LY" data-restricted="true">Libya</option>
                                <option value="LI" data-restricted="false">Liechtenstein</option>
                                <option value="LT" data-restricted="false">Lithuania</option>
                                <option value="LU" data-restricted="false">Luxembourg</option>
                                <option value="MO" data-restricted="false">Macao</option>
                                <option value="MK" data-restricted="true">Macedonia (the former Yugoslav
                                    Republic of)
                                </option>
                                <option value="MG" data-restricted="false">Madagascar</option>
                                <option value="MW" data-restricted="true">Malawi</option>
                                <option value="MY" data-restricted="true">Malaysia</option>
                                <option value="MV" data-restricted="false">Maldives</option>
                                <option value="ML" data-restricted="true">Mali</option>
                                <option value="MT" data-restricted="false">Malta</option>
                                <option value="MH" data-restricted="true">Marshall Islands</option>
                                <option value="MQ" data-restricted="false">Martinique</option>
                                <option value="MR" data-restricted="false">Mauritania</option>
                                <option value="MU" data-restricted="false">Mauritius</option>
                                <option value="YT" data-restricted="false">Mayotte</option>
                                <option value="MX" data-restricted="false">Mexico</option>
                                <option value="FM" data-restricted="false">Micronesia (Federated States
                                    of)
                                </option>
                                <option value="MD" data-restricted="true">Moldova (Republic of)</option>
                                <option value="MC" data-restricted="false">Monaco</option>
                                <option value="MN" data-restricted="false">Mongolia</option>
                                <option value="ME" data-restricted="false">Montenegro</option>
                                <option value="MS" data-restricted="false">Montserrat</option>
                                <option value="MA" data-restricted="false">Morocco</option>
                                <option value="MZ" data-restricted="true">Mozambique</option>
                                <option value="MM" data-restricted="true">Myanmar</option>
                                <option value="NA" data-restricted="true">Namibia</option>
                                <option value="NR" data-restricted="false">Nauru</option>
                                <option value="NP" data-restricted="true">Nepal</option>
                                <option value="NL" data-restricted="false">Netherlands</option>
                                <option value="NC" data-restricted="false">New Caledonia</option>
                                <option value="NZ" data-restricted="false">New Zealand</option>
                                <option value="NI" data-restricted="true">Nicaragua</option>
                                <option value="NE" data-restricted="true">Niger</option>
                                <option value="NG" data-restricted="true">Nigeria</option>
                                <option value="NU" data-restricted="false">Niue</option>
                                <option value="NF" data-restricted="false">Norfolk Island</option>
                                <option value="MP" data-restricted="false">Northern Mariana Islands
                                </option>
                                <option value="NO" data-restricted="false">Norway</option>
                                <option value="OM" data-restricted="true">Oman</option>
                                <option value="PK" data-restricted="true">Pakistan</option>
                                <option value="PW" data-restricted="false">Palau</option>
                                <option value="PS" data-restricted="false">Palestine, State of</option>
                                <option value="PA" data-restricted="false">Panama</option>
                                <option value="PG" data-restricted="false">Papua New Guinea</option>
                                <option value="PY" data-restricted="true">Paraguay</option>
                                <option value="PE" data-restricted="false">Peru</option>
                                <option value="PH" data-restricted="false">Philippines</option>
                                <option value="PN" data-restricted="false">Pitcairn</option>
                                <option value="PL" data-restricted="false">Poland</option>
                                <option value="PT" data-restricted="false">Portugal</option>
                                <option value="PR" data-restricted="false">Puerto Rico</option>
                                <option value="QA" data-restricted="false">Qatar</option>
                                <option value="RE" data-restricted="false">Réunion</option>
                                <option value="RO" data-restricted="false">Romania</option>
                                <option value="RU" data-restricted="true">Russian Federation</option>
                                <option value="RW" data-restricted="false">Rwanda</option>
                                <option value="BL" data-restricted="false">Saint Barthélemy</option>
                                <option value="SH" data-restricted="false">Saint Helena, Ascension and
                                    Tristan da Cunha
                                </option>
                                <option value="KN" data-restricted="false">Saint Kitts and Nevis
                                </option>
                                <option value="LC" data-restricted="false">Saint Lucia</option>
                                <option value="MF" data-restricted="false">Saint Martin (French part)
                                </option>
                                <option value="PM" data-restricted="false">Saint Pierre and Miquelon
                                </option>
                                <option value="VC" data-restricted="false">Saint Vincent and the
                                    Grenadines
                                </option>
                                <option value="WS" data-restricted="true">Samoa</option>
                                <option value="SM" data-restricted="false">San Marino</option>
                                <option value="ST" data-restricted="true">Sao Tome and Principe</option>
                                <option value="SA" data-restricted="false">Saudi Arabia</option>
                                <option value="SN" data-restricted="true">Senegal</option>
                                <option value="RS" data-restricted="true">Serbia</option>
                                <option value="SC" data-restricted="true">Seychelles</option>
                                <option value="SL" data-restricted="true">Sierra Leone</option>
                                <option value="SG" data-restricted="false">Singapore</option>
                                <option value="SX" data-restricted="false">Sint Maarten (Dutch part)
                                </option>
                                <option value="SK" data-restricted="false">Slovakia</option>
                                <option value="SI" data-restricted="false">Slovenia</option>
                                <option value="SB" data-restricted="true">Solomon Islands</option>
                                <option value="SO" data-restricted="true">Somalia</option>
                                <option value="ZA" data-restricted="false">South Africa</option>
                                <option value="GS" data-restricted="false">South Georgia and the South
                                    Sandwich Islands
                                </option>
                                <option value="SS" data-restricted="true">South Sudan</option>
                                <option value="ES" data-restricted="false">Spain</option>
                                <option value="LK" data-restricted="true">Sri Lanka</option>
                                <option value="SD" data-restricted="true">Sudan</option>
                                <option value="SR" data-restricted="true">Suriname</option>
                                <option value="SJ" data-restricted="false">Svalbard and Jan Mayen
                                </option>
                                <option value="SE" data-restricted="false">Sweden</option>
                                <option value="CH" data-restricted="false">Switzerland</option>
                                <option value="SY" data-restricted="true">Syrian Arab Republic</option>
                                <option value="TW" data-restricted="false">Taiwan, Province of China
                                </option>
                                <option value="TJ" data-restricted="true">Tajikistan</option>
                                <option value="TZ" data-restricted="true">Tanzania, United Republic of
                                </option>
                                <option value="TH" data-restricted="false">Thailand</option>
                                <option value="TL" data-restricted="false">Timor-Leste</option>
                                <option value="TG" data-restricted="false">Togo</option>
                                <option value="TK" data-restricted="false">Tokelau</option>
                                <option value="TO" data-restricted="true">Tonga</option>
                                <option value="TT" data-restricted="false">Trinidad and Tobago</option>
                                <option value="TN" data-restricted="false">Tunisia</option>
                                <option value="TR" data-restricted="true">Turkey</option>
                                <option value="TM" data-restricted="false">Turkmenistan</option>
                                <option value="TC" data-restricted="false">Turks and Caicos Islands
                                </option>
                                <option value="TV" data-restricted="false">Tuvalu</option>
                                <option value="UG" data-restricted="true">Uganda</option>
                                <option value="UA" data-restricted="true">Ukraine</option>
                                <option value="AE" data-restricted="true">United Arab Emirates</option>
                                <option value="GB" data-restricted="false">United Kingdom of Great
                                    Britain
                                    and Northern Ireland
                                </option>
                                <option value="UM" data-restricted="false">United States Minor Outlying
                                    Islands
                                </option>
                                <option value="UY" data-restricted="false">Uruguay</option>
                                <option value="UZ" data-restricted="false">Uzbekistan</option>
                                <option value="VU" data-restricted="true">Vanuatu</option>
                                <option value="VE" data-restricted="true">Venezuela (Bolivarian Republic
                                    of)
                                </option>
                                <option value="VN" data-restricted="false">Viet Nam</option>
                                <option value="VG" data-restricted="false">Virgin Islands (British)
                                </option>
                                <option value="VI" data-restricted="false">Virgin Islands (U.S.)
                                </option>
                                <option value="WF" data-restricted="false">Wallis and Futuna</option>
                                <option value="EH" data-restricted="false">Western Sahara</option>
                                <option value="YE" data-restricted="true">Yemen</option>
                                <option value="ZM" data-restricted="true">Zambia</option>
                                <option value="ZW" data-restricted="true">Zimbabwe</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-col col-sm-12 col-md-4">
                <button class="sign-in-btn btn btn-primary btn-lg btn-block"
                        onclick="window.location.href='{{route('investorData')}}'">Save &amp; Continue
                </button>
                <div class="faq-wrapper">
                    <div class="faq-question-wrapper">
                        <div id="faq-1" class="faq-question">
                            <span class="faq-text">How is my personal information handled?</span>
                            <svg
                                    xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24" class="">
                                <g class="down-caret" fill="#8a8f9c">
                                    <path fill="#8a8f9c"
                                          d="M12,18c-0.256,0-0.512-0.098-0.707-0.293L0.586,7L2,5.586l10,10l10-10L23.414,7L12.707,17.707 C12.512,17.902,12.256,18,12,18z"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="collapse-module_collapse__24uNq" id="faq1_detail">Please refer to our

                            <a href="//dinogroup.com/wp/privacy-policy/" target="_blank"
                               rel="noreferrer noopener">Privacy Policy.</a>
                        </div>
                    </div>
                    <div class="faq-question-wrapper">
                        <div id="faq-2" class="faq-question">
                            <span class="faq-text">Will my contact info be used for advertising?</span>
                            <svg
                                    xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24" class="">
                                <g class="down-caret" fill="#8a8f9c">
                                    <path fill="#8a8f9c"
                                          d="M12,18c-0.256,0-0.512-0.098-0.707-0.293L0.586,7L2,5.586l10,10l10-10L23.414,7L12.707,17.707 C12.512,17.902,12.256,18,12,18z"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="collapse-module_collapse__24uNq" id="faq2_detail">Your contact info will not be used
                            for advertising.
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- </form> -->
    </div>
@endsection
@section('js_after')
    <script>
        var flag_faq1 = 0;
        var flag_faq2 = 0;
        $("#create-account").addClass("complete");
        $("#create-account-check").show();
        $("#account-details").addClass("complete");
        $("#account-details-check").show();
        $("#account-details").removeClass("active");
        $("#personal-data").addClass("active");
        $("#faq-1").click(function(){
            if(flag_faq1 == 0){
                $("#faq1_detail").slideDown();
                flag_faq1 = 1;
            }
            else {
                $("#faq1_detail").slideUp();
                flag_faq1 = 0;
            }
        });
        $("#faq-2").click(function(){
            if(flag_faq2 == 0){
                $("#faq2_detail").slideDown();
                flag_faq2 = 1;
            }
            else {
                $("#faq2_detail").slideUp();
                flag_faq2 = 0;
            }
        });
    </script>
@endsection