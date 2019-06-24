@extends('layouts.register.layout')
@section('content')
    <div class="register-wrapper container" id="Review">
        <div class="review-details row">
            <div class="col-sm-12 col-md-8">
                <h3 class="header">Review Details</h3>
                <p class="header-message">Please review your information below and continue to next step if
                    it
                    is accurate.</p>
                <div>
                    <div sm="12" id="mailing-address" class="editable-table-wrapper row">
                        <div class="col-10">
                            <h3>
                                <span class="section-title">Mailing Address</span>
                                <small class="edit-btn">Edit</small>
                            </h3>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="street" class="mr-sm-2">Address Line 1</label>
                                <input name="street" autocomplete="none" disabled="" placeholder="-"
                                       type="text"
                                       class="form-control-lg form-control" value="955  Red Dog Road">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="street2" class="mr-sm-2">Address Line 2</label>
                                <input name="street2" autocomplete="none" disabled="" placeholder="-"
                                       type="text" class="form-control-lg form-control" value="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="city" class="mr-sm-2">City</label>
                                <input name="city" autocomplete="none" disabled="" placeholder="-"
                                       type="text"
                                       class="form-control-lg form-control" value="Charlotte">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="region" class="mr-sm-2">State</label>
                                <input name="region" autocomplete="none" disabled="" placeholder="-"
                                       type="text"
                                       class="form-control-lg form-control" value="NC">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="postalCode" class="mr-sm-2">ZIP Code</label>
                                <input name="postalCode" autocomplete="none" disabled="" placeholder="-"
                                       type="text" class="form-control-lg form-control" value="28202">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="countryCode" class="mr-sm-2">Country</label>
                                <input name="countryCode" autocomplete="none" disabled="" placeholder="-"
                                       type="text" class="form-control-lg form-control" value="US">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div sm="12" id="physical-address" class="editable-table-wrapper row">
                        <div class="col-10">
                            <h3>
                                <span class="section-title">Physical Address</span>
                                <small class="edit-btn">Edit</small>
                            </h3>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="street" class="mr-sm-2">Address Line 1</label>
                                <input name="street" autocomplete="none" disabled="" placeholder="-"
                                       type="text"
                                       class="form-control-lg form-control" value="955  Red Dog Road">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="street2" class="mr-sm-2">Address Line 2</label>
                                <input name="street2" autocomplete="none" disabled="" placeholder="-"
                                       type="text" class="form-control-lg form-control" value="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="city" class="mr-sm-2">City</label>
                                <input name="city" autocomplete="none" disabled="" placeholder="-"
                                       type="text"
                                       class="form-control-lg form-control" value="Charlotte">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="region" class="mr-sm-2">State</label>
                                <input name="region" autocomplete="none" disabled="" placeholder="-"
                                       type="text"
                                       class="form-control-lg form-control" value="NC">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="postalCode" class="mr-sm-2">ZIP Code</label>
                                <input name="postalCode" autocomplete="none" disabled="" placeholder="-"
                                       type="text" class="form-control-lg form-control" value="28202">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="countryCode" class="mr-sm-2">Country</label>
                                <input name="countryCode" autocomplete="none" disabled="" placeholder="-"
                                       type="text" class="form-control-lg form-control" value="US">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div sm="12" id="personal-information" class="editable-table-wrapper row">
                        <div class="col-10">
                            <h3>
                                <span class="section-title">Personal Information</span>
                                <small class="edit-btn">Edit</small>
                            </h3>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="firstName" class="mr-sm-2">First Name</label>
                                <input name="firstName" autocomplete="none" disabled="" placeholder="-"
                                       type="text" class="form-control-lg form-control" value="William">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="middleName" class="mr-sm-2">Middle Name</label>
                                <input name="middleName" autocomplete="none" disabled="" placeholder="-"
                                       type="text" class="form-control-lg form-control" value="E">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="lastName" class="mr-sm-2">Last Name</label>
                                <input name="lastName" autocomplete="none" disabled="" placeholder="-"
                                       type="text" class="form-control-lg form-control" value="Schafer">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="birthdate" class="mr-sm-2">Date of Birth</label>
                                <div class="disabled-text">06/29/1997</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="tin" class="mr-sm-2">Tax ID / SSN</label>
                                <input name="tin" autocomplete="none" disabled="" placeholder="-"
                                       type="text"
                                       class="form-control-lg form-control" value="***-**-****">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="citizenshipCountryCode" class="mr-sm-2">Citizenship</label>
                                <input name="citizenshipCountryCode" autocomplete="none" disabled=""
                                       placeholder="-" type="text" class="form-control-lg form-control"
                                       value="US">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="identification-wrapper row">
                    <div class="col-12 col-sm-6">
                        <p class="image-label">Front of ID</p>
                        <div class="image-wrapper">
                            <img src="https://gateway-web.tzero.com/document/user/documents/1387624941198880864"
                                 alt="Front of ID">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <p class="image-label">Back of ID</p>
                        <div class="image-wrapper">
                            <img src="https://gateway-web.tzero.com/document/user/documents/124946960863509989"
                                 alt="Back of ID">
                        </div>
                    </div>
                </div>
                <div>
                    <div sm="12" id="employment-information" class="editable-table-wrapper row">
                        <div class="col-10">
                            <h3>
                                <span class="section-title">Employment Information</span>
                                <small class="edit-btn">Edit</small>
                            </h3>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="employmentStatus" class="mr-sm-2">Employment Status</label>
                                <input name="employmentStatus" autocomplete="none" disabled=""
                                       placeholder="-"
                                       type="text" class="form-control-lg form-control" value="Unemployed">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div sm="12" id="investment-information" class="editable-table-wrapper row">
                        <div class="col-10">
                            <h3>
                                <span class="section-title">Investment Information</span>
                                <small class="edit-btn">Edit</small>
                            </h3>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="investmentExperience" class="mr-sm-2">Investment
                                    Experience</label>
                                <input name="investmentExperience" autocomplete="none" disabled=""
                                       placeholder="-" type="text" class="form-control-lg form-control"
                                       value="I know what I'm doing">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="investorPurpose" class="mr-sm-2">Investment Purpose</label>
                                <input name="investorPurpose" autocomplete="none" disabled=""
                                       placeholder="-"
                                       type="text" class="form-control-lg form-control"
                                       value="Capital appreciation">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="annualIncome" class="mr-sm-2">Annual Income</label>
                                <input name="annualIncome" autocomplete="none" disabled="" placeholder="-"
                                       type="text" class="form-control-lg form-control"
                                       value="$200,000 - $500,000">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative form-group">
                                <label for="netWorth" class="mr-sm-2">Net Worth</label>
                                <input name="netWorth" autocomplete="none" disabled="" placeholder="-"
                                       type="text" class="form-control-lg form-control"
                                       value="$0 - $49,999">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-col col-sm-12 col-md-4">
                <button type="button" class="sign-in-btn btn btn-primary btn-lg btn-block"
                        onclick="window.location.href='{{route('submit')}}'">Save &amp;
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
        $("#accreditation").addClass("complete");
        $("#accreditation-check").show();
        $("#accreditation").removeClass("active");
        $("#review").addClass("active");
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