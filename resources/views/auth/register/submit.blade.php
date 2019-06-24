@extends('layouts.register.layout')
@section('content')
    <div class="register-wrapper container" id="Submit">
        <!-- <form class=""> -->
        <div id="submit-application-wrapper">
            <div class="row">
                <div class="col-12 col-md-8">
                    <h3 class="header">Add E-Signature</h3>
                    <p class="header-message">By signing below, I certify all information is true and
                        correct to the best of my knowledge.</p>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="collapse-module_collapse__24uNq">
                                <div class=""
                                     style="transition: opacity 300ms ease-in-out 0s; opacity: 1;">
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
                        <div class="col-sm-12 col-lg-8">
                            <div class="full-name-group position-relative form-group">
                                <label for="fullName" class="mr-sm-2">Full Name:
                                    <span class="full-name">William E Schafer</span>
                                </label>
                                <a class="edit-link" href="/register/review-details?edit=pi">Edit</a>
                                <input required="" name="fullName" id="full-name" autocomplete="none"
                                       type="text" class="form-control-lg form-control" value="">
                                <div class="invalid-feedback">Full name must exactly match.</div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="position-relative form-check">
                                <label class="accept-terms form-check-label">
                                    <input type="checkbox" class="checkbox form-check-input"
                                           value="false">
                                    <div class="accept-text ">I authorize the use of an E-Signature as
                                        my
                                        legal electronic signature on my application.
                                    </div>
                                </label>
                                <div class="invalid-feedback">You must agree to the terms of service.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-col col-sm-12 col-md-4">
                    <button class="sign-in-btn btn btn-primary btn-lg btn-block" onclick="window.location.href='{{route('dashboard')}}'">Submit Application
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
                            <div class="collapse-module_collapse__24uNq" id="faq2_detail">Your contact info will not be
                                used
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
        $("#investor-data").addClass("complete");
        $("#investor-data-check").show();
        $("#accreditation").addClass("complete");
        $("#accreditation-check").show();
        $("#review").addClass("complete");
        $("#review-check").show();
        $("#review").removeClass("active");
        $("#submit").addClass("active");
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