@extends('layouts.register.layout')
@section('content')
    <div class="register-wrapper container" id="CreatAccount">
        <!-- <form novalidate="" class=""> -->
        <div id="create-profile" class="row">
            <div class="col-sm-12 col-md-8">
                <h3 class="header">Create Account
                    <p class="header-message">Already have an account?
                        <a class="link" href="{{ route('login') }}">Sign In</a>
                    </p>
                </h3>
                <div class="divider"></div>
                <div class="row">
                    <div class="col-sm-12">
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
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="position-relative form-group">
                            <label for="email" class="mr-sm-2">Email Address</label>
                            <input required="" id="email" name="email" maxlength="50"
                                   autocomplete="none" type="email" class="form-control-lg form-control"
                                   value="">
                            <div class="" style="display: none;">Email address is already registered.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="position-relative form-group">
                            <label for="password" class="mr-sm-2">Password</label>
                            <input required="" id="password" name="password" autocomplete="none"
                                   type="password" class="form-control-lg form-control" value="" data-toggle="popover"
                                   data-trigger="hover"
                                   data-content="My popover content.My popover content.My popover content.My popover content.">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="position-relative form-group">
                            <label for="verifyPassword" class="mr-sm-2">Confirm Password</label>
                            <input required="" id="verifyPassword" autocomplete="none"
                                   name="verifyPassword" type="password"
                                   class="form-control-lg form-control" value="" data-toggle="popover"
                                   title="Popover title"
                                   data-content="And here's some amazing content. It's very engaging. Right?">
                        </div>
                    </div>
                </div>
                <div class="divider line"></div>
                <h3 class="header">Securitief Account Creation</h3>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="position-relative form-group">
                            <label for="policy-acceptance" class="message">Do you agree to creating a
                                brokerage account with Securitief DSTPfor secondary token trading? When
                                signing up for an account please be aware that you are agreeing to all
                                of our terms (
                                <a href="/disclosures/privacy-policy/" target="_blank"
                                   rel="noopener noreferrer">Privacy Policy</a>,&nbsp;


                                <a href="/disclosures/business-continuity/" target="_blank"
                                   rel="noopener noreferrer">Business Continuity</a>,&nbsp;


                                <a href="/disclosures/customer-identification-program/" target="_blank"
                                   rel="noopener noreferrer">Customer Identification Program</a>,&nbsp;


                                <a href="/disclosures/legal/" target="_blank" rel="noopener noreferrer">Legal</a>,&nbsp;


                                <a href="/disclosures/disclaimer/" target="_blank"
                                   rel="noopener noreferrer">Disclaimer</a> and&nbsp;


                                <a href="/disclosures/terms-and-conditions/" target="_blank"
                                   rel="noopener noreferrer">Terms and Conditions</a>) and account
                                opening documents provided at the end of the sign-up process.


                            </label>
                            <div class="radio-wrappers position-relative form-check">
                                <label class="form-check-label">
                                    <input name="policy-acceptance" type="radio"
                                           class="form-check-input" checked="">
                                    <span class="input-text">Yes</span>
                                </label>
                            </div>
                            <div class="radio-wrappers position-relative form-check">
                                <label class="form-check-label">
                                    <input name="policy-acceptance" type="radio"
                                           class="form-check-input">
                                    <span class="input-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="divider line col-12"></div>
                        <h3 class="header">Accreditation</h3>
                        <div class="position-relative form-group">
                            <label for="certified-accredited" class="message">Do you certify that you
                                already own DSTO tokens, Securitief Fund Preferred Stock OR meet an
                                allowed
                                accreditation option?
                                <span class="see-options link-btn" id="accreditation-info" onclick="infoDetail()">See allowed accreditation options.</span>
                            </label>
                            <div class="collapse-module_show__171rS" id="accreditation-options "
                                 style="display: none">
                                <div><span class="accreditation-type">I am an Overstock Preferred Stock holder, but I do not meet any of the other accreditation options.</span>
                                    <div class="description"></div>
                                </div>
                                <div><span class="accreditation-type">I am a TZROP token holder, but I do not meet any of the other accreditation options.</span>
                                    <div class="description"></div>
                                </div>
                                <div><span class="accreditation-type">Proof of Income</span>
                                    <div class="description">A natural person who had an individual
                                        income in excess of $200,000 in each of the two most recent
                                        calendar years or joint income with that person’s spouse in
                                        excess of $300,000 in each of those years and has a reasonable
                                        expectation of reaching the same income level in the current
                                        calendar year;
                                    </div>
                                </div>
                                <div><span class="accreditation-type">Proof of Net Worth</span>
                                    <div class="description">A natural person whose individual net
                                        worth, or joint net worth with that person’s spouse, at the time
                                        of her purchase exceeds $1,000,000 (net worth includes total
                                        assets at fair market value, excluding one’s home, less total
                                        liabilities, including home mortgages to the extent they exceed
                                        the fair market value of one’s home);
                                    </div>
                                </div>
                                <div><span class="accreditation-type">Executive of the Issuer</span>
                                    <div class="description">Any director, executive officer, or general
                                        partner of the issuer whose securities being offered or sold, or
                                        any director, executive officer, or general partner of a general
                                        partner of such issuer;
                                    </div>
                                </div>
                                <div><span class="accreditation-type">Corp, LLC, Partnership</span>
                                    <div class="description">A corporation, limited liability company or
                                        partnership, with total assets in excess of $5,000,000, not
                                        formed for the specific purpose of acquiring the securities
                                        offered;
                                    </div>
                                </div>
                                <div><span class="accreditation-type">Trust</span>
                                    <div class="description">A trust, with total assets in excess of
                                        $5,000,000, not formed for the specific purpose of acquiring the
                                        securities offered whose purchase is directed by a sophisticated
                                        person as described in Rule 506(b)(2)(ii) promulgated under the
                                        Securities Act;
                                    </div>
                                </div>
                                <div><span class="accreditation-type">501(c)3</span>
                                    <div class="description">Any organization described in Section
                                        501(c)(3) of the Internal Revenue Code, corporation,
                                        Massachusetts or similar business trust, or partnership, not
                                        formed for the specific purpose of acquiring the securities
                                        offered, with total assets in excess of $5,000,000;
                                    </div>
                                </div>
                                <div><span class="accreditation-type">State Plans</span>
                                    <div class="description">Any plan established and maintained by a
                                        state, its political subdivisions, or any agency or
                                        instrumentality of a state or its political subdivisions, for
                                        the benefit of its employees, if such plan has total assets in
                                        excess of $5,000,000;
                                    </div>
                                </div>
                                <div><span class="accreditation-type">ERISA</span>
                                    <div class="description">An employee benefit plan within the meaning
                                        of the Employee Retirement Income Security Act of 1974, as
                                        amended (“ERISA”), if the investment decision is made by a plan
                                        fiduciary, as defined in Section 3(21) of ERISA, which is either
                                        a bank, savings and loan association, insurance company, or
                                        registered investment adviser, or if the employee benefit plan
                                        has total assets in excess of $5,000,000 or, if a self-directed
                                        plan, with investment decisions made solely by persons that are
                                        accredited investors;
                                    </div>
                                </div>
                                <div>
                                    <span class="accreditation-type">Investment Company (1940 Act)</span>
                                    <div class="description">An investment company registered under the
                                        Investment Company Act of 1940 or a business development company
                                        as defined in Section 2(a)(48) of that Act;
                                    </div>
                                </div>
                                <div><span class="accreditation-type">Insurance Company</span>
                                    <div class="description">An insurance company as defined in Section
                                        2(a)(13) of the Securities Act;
                                    </div>
                                </div>
                                <div>
                                    <span class="accreditation-type">Small Business Investment Company</span>
                                    <div class="description">Any Small Business Investment Company
                                        licensed by the U.S. Small Business Administration under Section
                                        301(c) or (d) of the Small Business Investment Act of 1958;
                                    </div>
                                </div>
                                <div><span class="accreditation-type">Broker or Dealer</span>
                                    <div class="description">A broker or dealer registered pursuant to
                                        Section 15 of the Securities Exchange Act of 1934;
                                    </div>
                                </div>
                                <div><span class="accreditation-type">Bank</span>
                                    <div class="description">A bank as defined in Section 3(a)(2) of the
                                        Securities Act, or any savings and loan association or other
                                        institution as defined in Section 3(a)(5)(A) of the Securities
                                        Act whether acting in its individual or fiduciary capacity;
                                    </div>
                                </div>
                                <div><span class="accreditation-type">Investment Advisory</span>
                                    <div class="description">An investment company registered under the
                                        Investment Company Act of 1940 or a business development company
                                        as defined in Section 2(a)(48) of that Act;
                                    </div>
                                </div>
                                <div><span class="accreditation-type">All Owners Accredited</span>
                                    <div class="description">An entity in which all of the equity owners
                                        are accredited investors.
                                    </div>
                                </div>
                            </div>
                            <div class="collapse-module_collapse__24uNq" id="accreditation-options">
                                <div>
                                    <span class="accreditation-type">I am an Overstock Preferred Stock holder, but I do not meet any of the other accreditation options.</span>
                                    <div class="description"></div>
                                </div>
                                <div>
                                    <span class="accreditation-type">I am a TZROP token holder, but I do not meet any of the other accreditation options.</span>
                                    <div class="description"></div>
                                </div>
                                <div>
                                    <span class="accreditation-type">Proof of Income</span>
                                    <div class="description">A natural person who had an individual
                                        income in excess of $200,000 in each of the two most recent
                                        calendar years or joint income with that person’s spouse in
                                        excess of $300,000 in each of those years and has a reasonable
                                        expectation of reaching the same income level in the current
                                        calendar year;
                                    </div>
                                </div>
                                <div>
                                    <span class="accreditation-type">Proof of Net Worth</span>
                                    <div class="description">A natural person whose individual net
                                        worth, or joint net worth with that person’s spouse, at the time
                                        of her purchase exceeds $1,000,000 (net worth includes total
                                        assets at fair market value, excluding one’s home, less total
                                        liabilities, including home mortgages to the extent they exceed
                                        the fair market value of one’s home);
                                    </div>
                                </div>
                                <div>
                                    <span class="accreditation-type">Executive of the Issuer</span>
                                    <div class="description">Any director, executive officer, or general
                                        partner of the issuer whose securities being offered or sold, or
                                        any director, executive officer, or general partner of a general
                                        partner of such issuer;
                                    </div>
                                </div>
                                <div>
                                    <span class="accreditation-type">Corp, LLC, Partnership</span>
                                    <div class="description">A corporation, limited liability company or
                                        partnership, with total assets in excess of $5,000,000, not
                                        formed for the specific purpose of acquiring the securities
                                        offered;
                                    </div>
                                </div>
                                <div>
                                    <span class="accreditation-type">Trust</span>
                                    <div class="description">A trust, with total assets in excess of
                                        $5,000,000, not formed for the specific purpose of acquiring the
                                        securities offered whose purchase is directed by a sophisticated
                                        person as described in Rule 506(b)(2)(ii) promulgated under the
                                        Securities Act;
                                    </div>
                                </div>
                                <div>
                                    <span class="accreditation-type">501(c)3</span>
                                    <div class="description">Any organization described in Section
                                        501(c)(3) of the Internal Revenue Code, corporation,
                                        Massachusetts or similar business trust, or partnership, not
                                        formed for the specific purpose of acquiring the securities
                                        offered, with total assets in excess of $5,000,000;
                                    </div>
                                </div>
                                <div>
                                    <span class="accreditation-type">State Plans</span>
                                    <div class="description">Any plan established and maintained by a
                                        state, its political subdivisions, or any agency or
                                        instrumentality of a state or its political subdivisions, for
                                        the benefit of its employees, if such plan has total assets in
                                        excess of $5,000,000;
                                    </div>
                                </div>
                                <div>
                                    <span class="accreditation-type">ERISA</span>
                                    <div class="description">An employee benefit plan within the meaning
                                        of the Employee Retirement Income Security Act of 1974, as
                                        amended (“ERISA”), if the investment decision is made by a plan
                                        fiduciary, as defined in Section 3(21) of ERISA, which is either
                                        a bank, savings and loan association, insurance company, or
                                        registered investment adviser, or if the employee benefit plan
                                        has total assets in excess of $5,000,000 or, if a self-directed
                                        plan, with investment decisions made solely by persons that are
                                        accredited investors;
                                    </div>
                                </div>
                                <div>
                                    <span class="accreditation-type">Investment Company (1940 Act)</span>
                                    <div class="description">An investment company registered under the
                                        Investment Company Act of 1940 or a business development company
                                        as defined in Section 2(a)(48) of that Act;
                                    </div>
                                </div>
                                <div>
                                    <span class="accreditation-type">Insurance Company</span>
                                    <div class="description">An insurance company as defined in Section
                                        2(a)(13) of the Securities Act;
                                    </div>
                                </div>
                                <div>
                                    <span class="accreditation-type">Small Business Investment Company</span>
                                    <div class="description">Any Small Business Investment Company
                                        licensed by the U.S. Small Business Administration under Section
                                        301(c) or (d) of the Small Business Investment Act of 1958;
                                    </div>
                                </div>
                                <div>
                                    <span class="accreditation-type">Broker or Dealer</span>
                                    <div class="description">A broker or dealer registered pursuant to
                                        Section 15 of the Securities Exchange Act of 1934;
                                    </div>
                                </div>
                                <div>
                                    <span class="accreditation-type">Bank</span>
                                    <div class="description">A bank as defined in Section 3(a)(2) of the
                                        Securities Act, or any savings and loan association or other
                                        institution as defined in Section 3(a)(5)(A) of the Securities
                                        Act whether acting in its individual or fiduciary capacity;
                                    </div>
                                </div>
                                <div>
                                    <span class="accreditation-type">Investment Advisory</span>
                                    <div class="description">An investment company registered under the
                                        Investment Company Act of 1940 or a business development company
                                        as defined in Section 2(a)(48) of that Act;
                                    </div>
                                </div>
                                <div>
                                    <span class="accreditation-type">All Owners Accredited</span>
                                    <div class="description">An entity in which all of the equity owners
                                        are accredited investors.
                                    </div>
                                </div>
                            </div>
                            <div class="radio-wrappers position-relative form-check">
                                <label class="form-check-label">
                                    <input data-cy="certified-accredited" name="accreditation"
                                           type="radio" class="form-check-input" value="1" onclick="handleClick(this);"
                                           checked="">
                                    <span class="input-text">Yes</span>
                                    <span class="text-success">(You must meet the accreditation criteria to sign up at this time.)</span>
                                </label>
                            </div>
                            <div class="radio-wrappers position-relative form-check">
                                <label class="form-check-label">
                                    <input name="accreditation" type="radio"
                                           class="form-check-input" value="0" onclick="handleClick(this);">
                                    <span class="input-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="error-message col-sm-12" style="display: none" id="accreditaion_alert">
                        <div class="alert-module_alert__YNUvw alert-module_alert-danger__zr3Gm col-12"
                             role="alert">
                            <div class="alert-module_alertInside__2M8ZD">You must be accredited or
                                already own tokens.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="divider line col-12"></div>
                        <h3 class="header">General Data Protection Regulation (GDPR)</h3>
                        <p class="sub-header">The General Data Protection Regulation (GDPR) implements
                            new data protection regulations which require us to obtain additional
                            consents to process and use information for those who are in the European
                            Union.</p>
                    </div>
                    <div class="col-sm-12">
                        <div class="position-relative form-group">
                            <label for="european-union" class="message">Are you a citizen or resident of
                                the European Union, or will you use our service while you are in the
                                European Union?</label>
                            <div class="radio-wrappers position-relative form-check">
                                <label class="form-check-label">
                                    <input name="european-union" type="radio" class="form-check-input"
                                           onclick="gdpr(this)" value="1">
                                    <span class="input-text">Yes</span>
                                </label>
                            </div>
                            <div class="radio-wrappers position-relative form-check">
                                <label class="form-check-label">
                                    <input name="european-union" type="radio" class="form-check-input"
                                           onclick="gdpr(this)" value="0" checked="">
                                    <span class="input-text">No</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12" style="display: none" id="gdpr_section">
                        <div class="position-relative form-group">
                            <label for="gdpr-acceptance" class="message">Do you consent to our use, as
                                well as our reviewing attorneys, of the information you provide to
                                Dinosaur Financial Group during registration and use of our service in
                                order to provide you with and to communicate with you regarding the
                                accredited investor verification service and such other services as you
                                may agree to? Storage and handling of your information will be on
                                servers which may be located outside of the European Union (currently
                                using Google Cloud Services). If you have any questions prior to
                                providing this consent or to withdraw this consent in the future, please
                                contact us.</label>
                            <div class="radio-wrappers position-relative form-check">
                                <label class="form-check-label">
                                    <input name="gdpr-acceptance" type="radio" class="form-check-input"
                                           onclick="acceptance_agree(this)" value="1">
                                    <span class="input-text">Yes</span>
                                </label>
                            </div>
                            <div class="radio-wrappers position-relative form-check">
                                <label class="form-check-label">
                                    <input name="gdpr-acceptance" type="radio" class="form-check-input"
                                           checked="" onclick="acceptance_agree(this)" value="0">
                                    <span class="input-text">No</span>
                                </label>
                            </div>
                        </div>

                        <div class="error-message col-sm-12" id="error_section">
                            <div class="alert-module_alert__YNUvw alert-module_alert-danger__zr3Gm col-12"
                                 role="alert">
                                <div class="alert-module_alertInside__2M8ZD">We apologize for the
                                    inconvenience, but we are unable to provide you with the accredited
                                    investor verification service or other services at this time because we
                                    do not have the necessary consents from you to do so.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row"><div class="col-sm-12 col-md-8"><span class="label">ReCAPTCHA Verification</span><div id="g-recaptcha" class="g-recaptcha" data-sitekey="6LfSF34UAAAAAM7I_8gmaQ8W6th6cVVrCMUKpRJO" data-theme="light" data-type="image" data-size="normal" data-badge="bottomright" data-tabindex="0"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfSF34UAAAAAM7I_8gmaQ8W6th6cVVrCMUKpRJO&amp;co=aHR0cHM6Ly9kaW5vLnR6ZXJvLmNvbTo0NDM.&amp;hl=en&amp;type=image&amp;v=v1559543665173&amp;theme=light&amp;size=normal&amp;badge=bottomright&amp;cb=pakbw7nvujtj" width="304" height="78" role="presentation" name="a-e2n3cq838zs6" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div></div></div> -->
                </div>
            </div>
            <div class="right-col col-sm-12 col-md-4">
                <button type="button" class="sign-in-btn btn btn-primary btn-lg btn-block"
                        id="save_continue_btn" onclick="window.location.href='{{route('accountDetail')}}'">Save &amp
                    Continue
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
        var flag = 0;
        var flag_faq1 = 0;
        var flag_faq2 = 0;

        function handleClick(accreditation) {
            if (accreditation.value == 1) {
                document.getElementById("accreditaion_alert").style.display = "none";
            } else {
                document.getElementById("accreditaion_alert").style.display = "block";
            }
        }
        function gdpr(flag) {
            if (flag.value == 1) {
                document.getElementById("gdpr_section").style.display = "block";
            } else {
                document.getElementById("gdpr_section").style.display = "none";
            }
        }

        function acceptance_agree(flag) {
            if (flag.value == 1) {
                document.getElementById("error_section").style.display = "none";
            } else {
                document.getElementById("error_section").style.display = "block";
            }
        }

        function infoDetail() {
            if (flag == 0) {
                document.getElementById("accreditation-info").innerText = " Close accreditation options.";
                document.getElementById("accreditation-options").style.display = "block";
                flag = 1;
            } else if (flag == 1) {
                document.getElementById("accreditation-info").innerText = " See allowed accreditation options.";
                document.getElementById("accreditation-options").style.display = "none";
                flag = 0;
            }
        }
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

        $("#create-account").addClass("active");

    </script>
@endsection