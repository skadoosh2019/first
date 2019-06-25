@extends('layouts.register.layout')
@section('content')
    <div class="register-wrapper container" id="InvestorData">
        <div id="investor-data" class="register-container">
            <!-- <form novalidate="" class=""> -->
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <h3 class="header">Investor Data</h3>
                    <p class="header-message">Skip this for now?
                        <a class="link" href="{{route('dashboard')}}">View Portfolio</a>
                    </p>
                    <div class="row">
                        <div class="col-sm-12"></div>
                    </div>
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
                        <h3 class="section-title divider col-12 col-sm-12">Employment Information</h3>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="employmentStatus" class="mr-sm-2 employmentStatus-label">Employment
                                    Status</label>
                                <select id="employmentStatus" autocomplete="none"
                                        label="Employment Status"
                                        name="employmentStatus" class="form-control-lg form-control">
                                    <option></option>
                                    <option value="65108a3b-5eb8-487f-a736-3ebe852423a8">Employed
                                    </option>
                                    <option value="29bbb67b-6624-4374-bb5f-bac5439f861b">Unemployed
                                    </option>
                                    <option value="9912bd65-07df-47c2-8edc-f6ba1829f9da">Retired
                                    </option>
                                    <option value="fdb6d67b-9abd-4b4e-bc58-cc4e13968164">Student
                                    </option>
                                </select>
                            </div>
                        </div>
                        <h3 class="section-title divider col-12 col-sgm-12">Investor Information</h3>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="investmentExperience"
                                       class="mr-sm-2 investmentExperience-label">Investment
                                    Experience</label>
                                <select id="investmentExperience" autocomplete="none"
                                        label="Investment Experience" name="investmentExperience"
                                        class="form-control-lg form-control">
                                    <option></option>
                                    <option value="d187de1f-206d-493a-bddf-48e1ac58bc7f">None</option>
                                    <option value="85755589-cbd0-41dd-ad80-f841fa0eb267">Not Much
                                    </option>
                                    <option value="758e3327-85c8-4d5e-9416-d44f7020d6e4">I know what I'm
                                        doing
                                    </option>
                                    <option value="99d6af24-0a7b-4a87-b1c4-ade7c777fa35">I'm an expert
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="investorPurpose" class="mr-sm-2 investorPurpose-label">Investor
                                    Purpose</label>
                                <select id="investorPurpose" autocomplete="none"
                                        label="Investor Purpose"
                                        name="investorPurpose" class="form-control-lg form-control">
                                    <option></option>
                                    <option value="7e8c6798-f94c-4443-bb86-314113fcb0bf">Preservation of
                                        capital
                                    </option>
                                    <option value="cdf4bad3-ec50-4a27-a301-fe903d0bb4c9">Income</option>
                                    <option value="2e12b9d6-1e2e-4dcc-8479-552c89ac10e9">Capital
                                        appreciation
                                    </option>
                                    <option value="b26f3fde-7de2-49c8-bacc-e8eefe77dc4e">Speculation
                                    </option>
                                    <option value="aa11630a-7b11-4c0b-ae45-f1095f1a5e97">Trading Profits
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="investmentInfo.allowIlliquidInvestments"
                                       class="mr-sm-2 investmentInfo.allowIlliquidInvestments-label">Are
                                    you
                                    willing to be invested in illiquid assets?</label>
                                <select id="investmentInfo.allowIlliquidInvestments" autocomplete="none"
                                        datacy="illiquidasset"
                                        label="Are you willing to be invested in illiquid assets?"
                                        name="investmentInfo.allowIlliquidInvestments"
                                        class="form-control-lg form-control">
                                    <option></option>
                                    <option value="true">Yes</option>
                                    <option value="false">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="risk-tolerance-wrapper col-sm-6">
                            <div class="position-relative form-group">
                                <label class="risk-tolerance-label mr-sm-2">Risk Tolerance
                                    <span class="tooltip-wrapper" id="risk-tolerance-faq">
														<svg
                                                                xmlns="http://www.w3.org/2000/svg" id="info-icon"
                                                                width="16" height="16" viewBox="0 0 16 16">
															<g class="info-icon-wrapper" fill="#AFB3BA">
																<path fill="#AFB3BA"
                                                                      d="M8,0C3.6,0,0,3.6,0,8s3.6,8,8,8s8-3.6,8-8S12.4,0,8,0z M8,14c-3.3,0-6-2.7-6-6s2.7-6,6-6s6,2.7,6,6 S11.3,14,8,14z"></path>
																<rect data-color="color-2" x="7" y="7" width="2"
                                                                      height="5"></rect>
																<circle data-color="color-2" cx="8" cy="5"
                                                                        r="1"></circle>
															</g>
														</svg>
													</span>
                                </label>
                                <select id="riskTolerance" name="riskTolerance"
                                        class="form-control-lg form-control">
                                    <option></option>
                                    <option value="13e49e80-5706-4460-abc4-50c5b616ffa2">Low:
                                        Conservative
                                    </option>
                                    <option value="5391be30-6da0-44d7-8d6b-434c055f95c8">Medium:
                                        Moderate
                                    </option>
                                    <option value="94223839-1b79-4166-bd76-7df8993d761d">High:
                                        Significant
                                        Risk
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12"></div>
                        <div class="annualIncome-input col-12 col-sm-12 col-md-12">
                            <div class="annualIncome position-relative form-group">
                                <label for="annualIncome" class="mr-sm-2 annualIncome-label">Annual
                                    Income</label>
                                <div class="col-sm-6">
                                    <div class="position-relative form-check">
                                        <label class="form-check-label">
                                            <input id="annualIncome" name="annualIncome" type="radio"
                                                   class="form-check-input"
                                                   value="1658fc63-faac-4b88-9596-a675b158b7d5">
                                            <span class="input-text">$0 - $50,000</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="position-relative form-check">
                                        <label class="form-check-label">
                                            <input id="annualIncome" name="annualIncome" type="radio"
                                                   class="form-check-input"
                                                   value="b3d8c598-c657-428f-8628-da15a5d52ee9">
                                            <span class="input-text">$50,000 - $200,000</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="position-relative form-check">
                                        <label class="form-check-label">
                                            <input id="annualIncome" name="annualIncome" type="radio"
                                                   class="form-check-input"
                                                   value="9c739402-974c-4e7c-8957-129a9ec5cf5d">
                                            <span class="input-text">$200,000 - $500,000</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="position-relative form-check">
                                        <label class="form-check-label">
                                            <input id="annualIncome" name="annualIncome" type="radio"
                                                   class="form-check-input"
                                                   value="040a73bf-a66a-407b-8299-ef1e8ed82eef">
                                            <span class="input-text">$500,000 - $1,000,000</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="position-relative form-check">
                                        <label class="form-check-label">
                                            <input id="annualIncome" name="annualIncome" type="radio"
                                                   class="form-check-input"
                                                   value="09130146-72c0-41bb-88d7-65d091384bb8">
                                            <span class="input-text">Over $1,000,000</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="netWorth-input col-12 col-sm-12 col-md-12">
                            <div class="netWorth position-relative form-group">
                                <label for="netWorth" class="mr-sm-2 netWorth-label">Liquid Net Worth
                                    <span class="tooltip-wrapper" id="net-worth-info">
																			<svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    id="info-icon" width="16"
                                                                                    height="16" viewBox="0 0 16 16">
																				<g class="info-icon-wrapper"
                                                                                   fill="#AFB3BA">
																					<path fill="#AFB3BA"
                                                                                          d="M8,0C3.6,0,0,3.6,0,8s3.6,8,8,8s8-3.6,8-8S12.4,0,8,0z M8,14c-3.3,0-6-2.7-6-6s2.7-6,6-6s6,2.7,6,6 S11.3,14,8,14z"></path>
																					<rect data-color="color-2" x="7"
                                                                                          y="7" width="2"
                                                                                          height="5"></rect>
																					<circle data-color="color-2" cx="8"
                                                                                            cy="5" r="1"></circle>
																				</g>
																			</svg>
																		</span>
                                </label>
                                <div class="col-sm-6">
                                    <div class="position-relative form-check">
                                        <label class="form-check-label">
                                            <input id="netWorth" name="netWorth" type="radio"
                                                   class="form-check-input"
                                                   value="7dd7a43a-074f-4c7d-8578-62df908ac1b3">
                                            <span class="input-text">$0 - $49,999</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="position-relative form-check">
                                        <label class="form-check-label">
                                            <input id="netWorth" name="netWorth" type="radio"
                                                   class="form-check-input"
                                                   value="401c47af-51cf-41ad-b54f-265e29efa7d9">
                                            <span class="input-text">$50,000 - $249,999</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="position-relative form-check">
                                        <label class="form-check-label">
                                            <input id="netWorth" name="netWorth" type="radio"
                                                   class="form-check-input"
                                                   value="05b5294d-751c-41c2-a7f8-95ebd60b4212">
                                            <span class="input-text">$250,000-$999,999</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="position-relative form-check">
                                        <label class="form-check-label">
                                            <input id="netWorth" name="netWorth" type="radio"
                                                   class="form-check-input"
                                                   value="1ec76052-8f15-4259-893b-5150eb39311f">
                                            <span class="input-text">$1,000,000+</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="divider col-12 col-sm-12">
                            <span class="section-title">Proof of Identity</span>
                            <p class="section-message">In order to comply with government regulations,
                                please provide proof of identity. Accepted documents include a driver’s
                                license, state issued ID card, passport, or Federally issued INS
                                Permanent
                                Resident Alien card.
                                <span class="allowed-file-types">Allowed file types: .jpeg, .jpg, .png, .gif</span>
                            </p>
                        </h3>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="identificationType"
                                       class="mr-sm-2 identificationType-label">Identification
                                    Type</label>
                                <select id="identificationType" autocomplete="none"
                                        label="Identification Type" name="identificationType"
                                        class="form-control-lg form-control">
                                    <option></option>
                                    <option value="11b35fbd-ab46-4abf-a67a-2d09761e6106">Passport
                                    </option>
                                    <option value="9d5cd3b5-5ad5-4c9e-906f-e21ccb9fe178">Driver's
                                        License
                                    </option>
                                    <option value="d0c68eeb-8eb6-4878-bd4a-af5f03c543a9">Other
                                        Government
                                        ID
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="identificationNumber-input col-12 col-sm-12 col-md-6">
                            <div class="position-relative form-group">
                                <label for="identificationNumber"
                                       class="mr-sm-2 identificationNumber-label">ID Number</label>
                                <input required="" autocomplete="new-password"
                                       name="identificationNumber"
                                       label="ID Number" placeholder="" maxlength="256" sm="12" md="6"
                                       type="text" class="form-control-lg form-control" value="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="countryOfIssuance" class="mr-sm-2 countryOfIssuance-label">Place/Country
                                    of Issuance</label>
                                <select id="countryOfIssuance" autocomplete="none"
                                        label="Place/Country of Issuance" name="countryOfIssuance"
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
                                    <option value="MK">Macedonia (the former Yugoslav Republic of)
                                    </option>
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
                                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha
                                    </option>
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
                                    <option value="GS">South Georgia and the South Sandwich Islands
                                    </option>
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
                                    <option value="GB">United Kingdom of Great Britain and Northern
                                        Ireland
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
                        <div class="expDate_month-input col-6 col-sm-6 col-md-1">
                            <div class="position-relative form-group">
                                <label for="expDate_month" class="mr-sm-2 expDate_month-label">Expiration
                                    Date</label>
                                <input required="" autocomplete="new-password" name="expDate_month"
                                       id="expDate_month" label="Expiration Date" placeholder="MM"
                                       maxlength="2" xs="4" sm="6" md="1" type="text"
                                       class="form-control-lg form-control" value="">
                            </div>
                        </div>
                        <div class="expDate_day-input col-6 col-sm-6 col-md-1">
                            <div class="position-relative form-group">
                                <label for="expDate_day" class="mr-sm-2 expDate_day-label"></label>
                                <input required="" autocomplete="new-password" name="expDate_day"
                                       id="expDate_day" label=" " placeholder="DD" maxlength="2" xs="4"
                                       sm="6" md="1" type="text" class="form-control-lg form-control"
                                       value="">
                            </div>
                        </div>
                        <div class="expDate_year-input col-12 col-sm-12 col-md-3">
                            <div class="position-relative form-group">
                                <label for="expDate_year" class="mr-sm-2 expDate_year-label"></label>
                                <input required="" autocomplete="new-password" name="expDate_year"
                                       id="expDate_year" label=" " placeholder="YYYY" maxlength="4"
                                       xs="4"
                                       sm="12" md="3" type="text" class="form-control-lg form-control"
                                       value="">
                            </div>
                        </div>
                        <div class="image-upload-wrapper col-sm-12">
                            <div class="front-image">
                                <p>Upload Front of ID</p>
                                <div tabindex="0" class="image-upload">
                                    <input accept="image/jpeg, image/jpg, image/png, image/gif, .jpg, .jpeg, .png, .gif"
                                           type="file" multiple="" autocomplete="off" tabindex="-1"
                                           style="display: none;">
                                    <p>
                                        <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24"
                                                viewBox="0 0 24 24">
                                            <g class="nc-icon-wrapper" stroke-linecap="square"
                                               stroke-linejoin="miter" stroke-width="2" fill="#545658"
                                               stroke="#545658">
                                                <line data-cap="butt" data-color="color-2" fill="none"
                                                      stroke-miterlimit="10" x1="12" y1="17.998" x2="12"
                                                      y2="9.998" stroke-linecap="butt"></line>
                                                <polyline data-color="color-2" fill="none"
                                                          stroke-miterlimit="10"
                                                          points=" 9,12.998 12,9.998 15,12.998 "></polyline>
                                                <path fill="none" stroke="#545658"
                                                      stroke-miterlimit="10"
                                                      d="M17,19h2 c2.209,0,4-1.793,4-4.002c0-2.197-1.782-4.013-4.025-3.997c-0.257-3.909-3.501-7.003-7.475-7.003c-4.019,0-7.29,3.164-7.482,7.136 C2.287,11.573,1,13.129,1,14.998C1,17.207,2.791,19,5,19h2"></path>
                                            </g>
                                        </svg>
                                        Upload Image
                                    </p>
                                </div>
                                <small class="image-name"></small>
                            </div>
                            <div class="back-image">
                                <p>Upload Back of ID</p>
                                <div tabindex="0" class="image-upload">
                                    <input accept="image/jpeg, image/jpg, image/png, image/gif, .jpg, .jpeg, .png, .gif"
                                           type="file" multiple="" autocomplete="off" tabindex="-1"
                                           style="display: none;">
                                    <p>
                                        <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24"
                                                viewBox="0 0 24 24">
                                            <g class="nc-icon-wrapper" stroke-linecap="square"
                                               stroke-linejoin="miter" stroke-width="2" fill="#545658"
                                               stroke="#545658">
                                                <line data-cap="butt" data-color="color-2" fill="none"
                                                      stroke-miterlimit="10" x1="12" y1="17.998" x2="12"
                                                      y2="9.998" stroke-linecap="butt"></line>
                                                <polyline data-color="color-2" fill="none"
                                                          stroke-miterlimit="10"
                                                          points=" 9,12.998 12,9.998 15,12.998 "></polyline>
                                                <path fill="none" stroke="#545658"
                                                      stroke-miterlimit="10"
                                                      d="M17,19h2 c2.209,0,4-1.793,4-4.002c0-2.197-1.782-4.013-4.025-3.997c-0.257-3.909-3.501-7.003-7.475-7.003c-4.019,0-7.29,3.164-7.482,7.136 C2.287,11.573,1,13.129,1,14.998C1,17.207,2.791,19,5,19h2"></path>
                                            </g>
                                        </svg>
                                        Upload Image
                                    </p>
                                </div>
                                <small class="image-name"></small>
                            </div>
                        </div>
                        <h3 class="divider col-12 col-sm-12">
                            <span class="section-title">Investor Association</span>
                            <p class="section-message">Please read the options below and check the boxes
                                that apply. After checking a box, please provide all the additional
                                information that is requested.</p>
                        </h3>
                        <div class="col-sm-12">
                            <div class="position-relative form-check">
                                <label class="public-disclosure form-check-label">
                                    <input name="hasPublicDisclosure" type="checkbox"
                                           class="checkbox form-check-input">
                                    <div class="checkbox-text">I am (or member of my immediate family
                                        is) a
                                        director, 10% shareholder, or a senior officer of a publicly
                                        traded
                                        company.
                                        <span class="tooltip-wrapper" id="interested-party-info">
																															<svg
                                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                                    id="info-icon"
                                                                                                                                    width="16"
                                                                                                                                    height="16"
                                                                                                                                    viewBox="0 0 16 16">
																																<g class="info-icon-wrapper"
                                                                                                                                   fill="#AFB3BA">
																																	<path fill="#AFB3BA"
                                                                                                                                          d="M8,0C3.6,0,0,3.6,0,8s3.6,8,8,8s8-3.6,8-8S12.4,0,8,0z M8,14c-3.3,0-6-2.7-6-6s2.7-6,6-6s6,2.7,6,6 S11.3,14,8,14z"></path>
																																	<rect data-color="color-2"
                                                                                                                                          x="7"
                                                                                                                                          y="7"
                                                                                                                                          width="2"
                                                                                                                                          height="5"></rect>
																																	<circle data-color="color-2"
                                                                                                                                            cx="8"
                                                                                                                                            cy="5"
                                                                                                                                            r="1"></circle>
																																</g>
																															</svg>
																														</span>
                                    </div>
                                </label>
                            </div>
                            <div class="position-relative form-check">
                                <label class="stock-disclosure form-check-label">
                                    <input name="hasStockDisclosure" type="checkbox"
                                           class="checkbox form-check-input">
                                    <div class="checkbox-text">I am (or member of my immediate family
                                        is)
                                        employed by or associated with a member firm of a stock exchange
                                        or
                                        FINRA.
                                    </div>
                                </label>
                            </div>
                            <div class="position-relative form-check">
                                <label class="politician form-check-label">
                                    <input name="isPublicFigure" type="checkbox"
                                           class="checkbox form-check-input">
                                    <div class="checkbox-text">Are any principals or authorized
                                        individuals
                                        a politically exposed person (
                                        <q>PEP</q>)?
                                        <span class="tooltip-wrapper" id="public-figure-faq">
																																	<svg
                                                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                                                            id="info-icon"
                                                                                                                                            width="16"
                                                                                                                                            height="16"
                                                                                                                                            viewBox="0 0 16 16">
																																		<g class="info-icon-wrapper"
                                                                                                                                           fill="#AFB3BA">
																																			<path fill="#AFB3BA"
                                                                                                                                                  d="M8,0C3.6,0,0,3.6,0,8s3.6,8,8,8s8-3.6,8-8S12.4,0,8,0z M8,14c-3.3,0-6-2.7-6-6s2.7-6,6-6s6,2.7,6,6 S11.3,14,8,14z"></path>
																																			<rect data-color="color-2"
                                                                                                                                                  x="7"
                                                                                                                                                  y="7"
                                                                                                                                                  width="2"
                                                                                                                                                  height="5"></rect>
																																			<circle data-color="color-2"
                                                                                                                                                    cx="8"
                                                                                                                                                    cy="5"
                                                                                                                                                    r="1"></circle>
																																		</g>
																																	</svg>
																																</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <h3 class="divider col-12 col-sm-12 supporting-documents-header">
                            <span class="section-title">Supporting Documents</span>
                            <p class="section-message">Please upload documentation to verify your
                                <span class="account-type">individual</span> account (e.g. Bank
                                Reference,
                                Tax Documents, etc). Full list of Document Types are listed below (you
                                do
                                not need to provide all of them).
                                <span class="allowed-file-types">Allowed file types: .jpeg, .jpg, .png, .img, .pdf, .gif, text/*, .txt, .rtf, .csv, .doc, .docx, .xls, .xlsx</span>
                            </p>
                        </h3>
                        <div class="document-faq-wrapper">
                            <div class="collapse-module_show__171rS document-faq-question-wrapper">
                                <h3>Document Types</h3>
                                <span class="document-list-item">W8 or W9 Form (One per person) [Most Common]</span>
                                <span class="document-list-item">Certified Copy of Passport(s) for Beneficial Owner(s)</span>
                                <span class="document-list-item">Certificate of Beneficial Interest</span>
                                <span class="document-list-item">Individual Questionnaire (One per person)</span>
                                <span class="document-list-item">Barrington Agreement</span>
                                <span class="document-list-item">Customer Agreement</span>
                                <span class="document-list-item">Trading Authorization form (if applicable)</span>
                                <span class="document-list-item">Passport of trading authority (if applicable)</span>
                                <span class="document-list-item">P.O. Box form (if applicable)</span>
                                <span class="document-list-item">Bank Reference</span>
                                <span class="document-list-item">Copy of Utility Bill</span>
                                <span class="document-list-item">Tax Letter (if applicable)</span>
                                <p>If you have any questions about what is required, you can reach out
                                    to
                                    <a href="mailto:SecurityTokenSupport@securitief.com"
                                       class="support-email">SecurityTokenSupport@securitief.com</a>.
                                </p>
                            </div>
                        </div>
                        <div class="document-upload-wrapper">
                            <div class="document-section">
                                <div class="document-upload-section">
                                    <div class="file-upload">
                                        <div tabindex="0" class="add-file-wrapper">
                                            <input accept="image/jpeg, image/jpg, image/png, .jpg, .jpeg, .png, .img, .pdf, .gif, text/*, .txt, .rtf, .csv, .doc, .docx, application/msword, application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
                                                   type="file" multiple="" autocomplete="off"
                                                   tabindex="-1"
                                                   style="display: none;">
                                            <div class="add-file-text">
                                                <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24">
                                                    <g class="nc-icon-wrapper" stroke-linecap="square"
                                                       stroke-linejoin="miter" stroke-width="2"
                                                       fill="#545658" stroke="#545658">
                                                        <line data-cap="butt" data-color="color-2"
                                                              fill="none" stroke-miterlimit="10" x1="12"
                                                              y1="17.998" x2="12" y2="9.998"
                                                              stroke-linecap="butt"></line>
                                                        <polyline data-color="color-2" fill="none"
                                                                  stroke-miterlimit="10"
                                                                  points=" 9,12.998 12,9.998 15,12.998 "></polyline>
                                                        <path fill="none" stroke="#545658"
                                                              stroke-miterlimit="10"
                                                              d="M17,19h2 c2.209,0,4-1.793,4-4.002c0-2.197-1.782-4.013-4.025-3.997c-0.257-3.909-3.501-7.003-7.475-7.003c-4.019,0-7.29,3.164-7.482,7.136 C2.287,11.573,1,13.129,1,14.998C1,17.207,2.791,19,5,19h2"></path>
                                                    </g>
                                                </svg>
                                                Upload File
                                            </div>
                                        </div>
                                    </div>
                                    <div class="file-upload">
                                        <div tabindex="0" class="add-doc-wrapper">
                                            <div class="plus-wrapper">
                                                <span class="plus">+</span>
                                            </div>
                                            <input accept="image/jpeg, image/jpg, image/png, .jpg, .jpeg, .png, .img, .pdf, .gif, text/*, .txt, .rtf, .csv, .doc, .docx, application/msword, application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
                                                   type="file" multiple="" autocomplete="off"
                                                   tabindex="-1"
                                                   style="display: none;">
                                            <div class="add-doc-text">Add Additional Document</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-col col-sm-12 col-md-4">
                    <button class="sign-in-btn btn btn-primary btn-lg btn-block"
                            onclick="window.location.href='{{route('accreditation')}}'">Save &amp; Continue
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
                            <div class="collapse-module_collapse__24uNq" id = "faq1_detail">Please refer to our

                                <a href="javascript:void(0)"  rel="noreferrer noopener">Privacy Policy.</a>
                            </div>
                        </div>
                        <div class="faq-question-wrapper">
                            <div id="faq-2" class="faq-question" >
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
                            <div class="collapse-module_collapse__24uNq" id = "faq2_detail">Your contact info will not be used
                                for advertising.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- </form> -->
        </div>
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
        $("#personal-data").addClass("complete");
        $("#personal-data-check").show();
        $("#personal-data").removeClass("active");
        $("#investor-data").addClass("active");
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