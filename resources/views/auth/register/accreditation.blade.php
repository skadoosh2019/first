@extends('layouts.register.layout')
@section('content')
    <div class="register-wrapper container" id="AccreditationData">
        <div id="accreditation-wrapper" class="row">
            <div class="col-sm-12 col-md-8">
                <h3 class="header">Accreditation</h3>
                <p class="header-message">You certify that you qualify as an accredited investor using the
                    method you select below.</p>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="divider">Choose the applicable method of verification:</h3>
                        <div>
                            <div class="position-relative form-check">
                                <label class="form-check-label">
                                    <input name="accreditation-type" type="radio" class="form-check-input"
                                           value="NOT ACCREDITED">
                                    <span class="accreditation-type">I am not an accredited investor. (Most Common)</span>
                                    <div class="description"></div>
                                </label>
                            </div>
                        </div>
                        <div>
                            <div class="position-relative form-check">
                                <label class="form-check-label">
                                    <input name="accreditation-type" type="radio" class="form-check-input"
                                           value="NOT ACCREDITED WITH OSTKP TOKENS">
                                    <span class="accreditation-type">I am an Securitief Preferred Stock holder, but I do not meet any of the other accreditation options.</span>
                                    <div class="description"></div>
                                </label>
                            </div>
                        </div>
                        <div>
                            <div class="position-relative form-check">
                                <label class="form-check-label">
                                    <input name="accreditation-type" type="radio" class="form-check-input"
                                           value="NOT ACCREDITED WITH TZROP TOKENS">
                                    <span class="accreditation-type">I am a TZROP token holder, but I do not meet any of the other accreditation options.</span>
                                    <div class="description"></div>
                                </label>
                            </div>
                        </div>
                        <div>
                            <div class="position-relative form-check">
                                <label class="form-check-label">
                                    <input name="accreditation-type" type="radio" class="form-check-input"
                                           value="PROOF OF INCOME">
                                    <span class="accreditation-type">Proof of Income</span>
                                    <div class="description">A natural person who had an individual income
                                        in
                                        excess of $200,000 in each of the two most recent calendar years or
                                        joint income with that person’s spouse in excess of $300,000 in each
                                        of
                                        those years and has a reasonable expectation of reaching the same
                                        income
                                        level in the current calendar year;
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div>
                            <div class="position-relative form-check">
                                <label class="form-check-label">
                                    <input name="accreditation-type" type="radio" class="form-check-input"
                                           value="PROOF OF NET WORTH">
                                    <span class="accreditation-type">Proof of Net Worth</span>
                                    <div class="description">A natural person whose individual net worth, or
                                        joint net worth with that person’s spouse, at the time of her
                                        purchase
                                        exceeds $1,000,000 (net worth includes total assets at fair market
                                        value, excluding one’s home, less total liabilities, including home
                                        mortgages to the extent they exceed the fair market value of one’s
                                        home);
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div>
                            <div class="position-relative form-check">
                                <label class="form-check-label">
                                    <input name="accreditation-type" type="radio" class="form-check-input"
                                           value="EXECUTIVE OF THE ISSUER">
                                    <span class="accreditation-type">Executive of the Issuer</span>
                                    <div class="description">Any director, executive officer, or general
                                        partner
                                        of the issuer whose securities being offered or sold, or any
                                        director,
                                        executive officer, or general partner of a general partner of such
                                        issuer;
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div>
                            <div class="position-relative form-check">
                                <label class="form-check-label">
                                    <input name="accreditation-type" type="radio" class="form-check-input"
                                           value="CORP LLC PARTNERSHIP">
                                    <span class="accreditation-type">Corp, LLC, Partnership</span>
                                    <div class="description">A corporation, limited liability company or
                                        partnership, with total assets in excess of $5,000,000, not formed
                                        for
                                        the specific purpose of acquiring the securities offered;
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div>
                            <div class="position-relative form-check">
                                <label class="form-check-label">
                                    <input name="accreditation-type" type="radio" class="form-check-input"
                                           value="TRUST">
                                    <span class="accreditation-type">Trust</span>
                                    <div class="description">A trust, with total assets in excess of
                                        $5,000,000,
                                        not formed for the specific purpose of acquiring the securities
                                        offered
                                        whose purchase is directed by a sophisticated person as described in
                                        Rule 506(b)(2)(ii) promulgated under the Securities Act;
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div>
                            <div class="position-relative form-check">
                                <label class="form-check-label">
                                    <input name="accreditation-type" type="radio" class="form-check-input"
                                           value="FIVE01C3">
                                    <span class="accreditation-type">501(c)3</span>
                                    <div class="description">Any organization described in Section 501(c)(3)
                                        of
                                        the Internal Revenue Code, corporation, Massachusetts or similar
                                        business trust, or partnership, not formed for the specific purpose
                                        of
                                        acquiring the securities offered, with total assets in excess of
                                        $5,000,000;
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div>
                            <div class="position-relative form-check">
                                <label class="form-check-label">
                                    <input name="accreditation-type" type="radio" class="form-check-input"
                                           value="STATE PLANS">
                                    <span class="accreditation-type">State Plans</span>
                                    <div class="description">Any plan established and maintained by a state,
                                        its
                                        political subdivisions, or any agency or instrumentality of a state
                                        or
                                        its political subdivisions, for the benefit of its employees, if
                                        such
                                        plan has total assets in excess of $5,000,000;
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div>
                            <div class="position-relative form-check">
                                <label class="form-check-label">
                                    <input name="accreditation-type" type="radio" class="form-check-input"
                                           value="ERISA">
                                    <span class="accreditation-type">ERISA</span>
                                    <div class="description">An employee benefit plan within the meaning of
                                        the
                                        Employee Retirement Income Security Act of 1974, as amended
                                        (“ERISA”),
                                        if the investment decision is made by a plan fiduciary, as defined
                                        in
                                        Section 3(21) of ERISA, which is either a bank, savings and loan
                                        association, insurance company, or registered investment adviser, or
                                        if
                                        the employee benefit plan has total assets in excess of $5,000,000
                                        or,
                                        if a self-directed plan, with investment decisions made solely by
                                        persons that are accredited investors;
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div>
                            <div class="position-relative form-check">
                                <label class="form-check-label">
                                    <input name="accreditation-type" type="radio" class="form-check-input"
                                           value="INVESTMENT COMPANY">
                                    <span class="accreditation-type">Investment Company (1940 Act)</span>
                                    <div class="description">An investment company registered under the
                                        Investment Company Act of 1940 or a business development company as
                                        defined in Section 2(a)(48) of that Act;
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div>
                            <div class="position-relative form-check">
                                <label class="form-check-label">
                                    <input name="accreditation-type" type="radio" class="form-check-input"
                                           value="INSURANCE COMPANY">
                                    <span class="accreditation-type">Insurance Company</span>
                                    <div class="description">An insurance company as defined in Section
                                        2(a)(13)
                                        of the Securities Act;
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div>
                            <div class="position-relative form-check">
                                <label class="form-check-label">
                                    <input name="accreditation-type" type="radio" class="form-check-input"
                                           value="SMALL BUS INVESTMENT CO">
                                    <span class="accreditation-type">Small Business Investment Company</span>
                                    <div class="description">Any Small Business Investment Company licensed
                                        by
                                        the U.S. Small Business Administration under Section 301(c) or (d)
                                        of
                                        the Small Business Investment Act of 1958;
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div>
                            <div class="position-relative form-check">
                                <label class="form-check-label">
                                    <input name="accreditation-type" type="radio" class="form-check-input"
                                           value="BROKER DEALER">
                                    <span class="accreditation-type">Broker or Dealer</span>
                                    <div class="description">A broker or dealer registered pursuant to
                                        Section
                                        15 of the Securities Exchange Act of 1934;
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div>
                            <div class="position-relative form-check">
                                <label class="form-check-label">
                                    <input name="accreditation-type" type="radio" class="form-check-input"
                                           value="BANK">
                                    <span class="accreditation-type">Bank</span>
                                    <div class="description">A bank as defined in Section 3(a)(2) of the
                                        Securities Act, or any savings and loan association or other
                                        institution
                                        as defined in Section 3(a)(5)(A) of the Securities Act whether
                                        acting in
                                        its individual or fiduciary capacity;
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div>
                            <div class="position-relative form-check">
                                <label class="form-check-label">
                                    <input name="accreditation-type" type="radio" class="form-check-input"
                                           value="INVESTMENT ADVISORY">
                                    <span class="accreditation-type">Investment Advisory</span>
                                    <div class="description">An investment company registered under the
                                        Investment Company Act of 1940 or a business development company as
                                        defined in Section 2(a)(48) of that Act;
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div>
                            <div class="position-relative form-check">
                                <label class="form-check-label">
                                    <input name="accreditation-type" type="radio" class="form-check-input"
                                           value="ALL OWNERS ACCREDITED">
                                    <span class="accreditation-type">All Owners Accredited</span>
                                    <div class="description">An entity in which all of the equity owners are
                                        accredited investors.
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-col col-sm-12 col-md-4">
                <button type="button"
                        class="sign-in-btn btn btn-primary btn-lg btn-block"
                        onclick="window.location.href='{{route('review')}}'">
                    Save &amp; Continue
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

                                <a href="//dinogroup.com/wp/privacy-policy/" target="_blank"
                                   rel="noreferrer noopener">Privacy Policy.</a>
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
        $("#investor-data").addClass("complete");
        $("#investor-data-check").show();
        $("#investor-data").removeClass("active");
        $("#accreditation").addClass("active");
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