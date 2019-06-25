@extends('layouts.simple')
@section('content')


    <div id="app">
        <div id="app-wrapper">
            <div class="app-container public light">
                <header id="header" class="light" style="background-color: #0093FF;border: none">
                    <div class="header-desktop container">
                        <div class="header-row row">
                            <div class="logo-wrapper">
                                <a class="logo-container" href="{{route('dashboard')}}">
                                    <div class="dino-group-logo-wrapper">
                                        <img id="dino-group-logo" src="{{ asset('images/sec--white-logo.png') }}"
                                             alt="Securitief Logo">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </header>

                {{--Progress Bar--}}
                <div class="progress-bar-wrapper">
                    <div class="container-fluid">
                        <div id="step-0" class="menu-wrapper" >
                            <div id="create-account" class="menu-item active">Create Account</div>
                            <div id="account-details" class="menu-item">Account Details</div>
                            <div id="personal-data" class="menu-item">Personal Data</div>
                            <div id="investor-data" class="menu-item">Investor Data</div>
                            <div id="accreditation" class="menu-item">Accreditation</div>
                            <div id="review" class="menu-item">Review</div>
                            <div id="submit" class="menu-item">Submit</div>
                        </div>
                    </div>
                </div>

                {{--Create Account--}}
               

                {{--Account Detail Progress--}}
               

                {{--Personal Data Details--}}
             

                {{--Investor Data Progress--}}
                

                {{--Accreditation Data Progress--}}
                

                {{--Review Progress--}}
               

                {{--Submit progress--}}
               
                <footer class="footer-wrapper">
                    <div class="footer-desktop container">
                        <a class="logo-container" href="{{route('dashboard')}}">
                            <div class="dino-group-logo-wrapper">
                                <img id="dino-group-logo-footer" src="{{ asset('images/sec-logo.png') }}"
                                     alt="Securitief Logo">
                            </div>
                        </a>
                        <div class="footer-disclosures-container">
                            <p class="footer-text-muted dino-disclosure">© 2019 Dinosaur Financial Group, LLC is
                                registered with the SEC and a member of FINRA, SIPC, and NFA. Dinosaur Merchant Bank
                                Limited is Authorised and Regulated by the Financial Conduct Authority. Market
                                volatility and volume may delay systems access and trade execution.</p>
                            <div class="bottom-disclosures">
                                <p class="footer-text-muted copyright">© 2019 Securitief Group, INC. All Rights Reserved.&nbsp;</p>
                                <a class="footer-text-muted support-email"
                                   href="mailto:SecurityTokenSupport@dinogroup.com">Email Support</a>
                            </div>
                        </div>
                        <div class="footer-social-container">
                            <a class="social-link" href="//twitter.com/Securitief-453653825439636">
                                <i class="fa fa-twitter" style="font-size:24px"></i>
                            </a>
                            <a class="social-link" href="//www.facebook.com/securitief/">
                                <i class="fa fa-facebook" style="font-size:24px"></i>
                            </a>
                            <a class="social-link" href="//www.instagram.com">
                                <i class="fa fa-instagram" style="font-size:24px"></i>
                            </a>
                        </div>
                    </div>
                    <div class="footer-bottom-container">
                        <div class="bottom-link-items">
                            <a class="link-item" href="https://finra.org/" rel="noopener noreferrer" target="_blank">FINRA</a>
                            <a class="link-item" href="https://www.sipc.org/" rel="noopener noreferrer" target="_blank">SIPC</a>
                            <a class="link-item" href="/disclosures/privacy-policy/" rel="noopener noreferrer"
                               target="_blank">Privacy Policy</a>
                            <a class="link-item" href="/disclosures/business-continuity/" rel="noopener noreferrer"
                               target="_blank">Business Continuity</a>
                            <a class="link-item" href="/disclosures/customer-identification-program/"
                               rel="noopener noreferrer" target="_blank">Customer Identification Program</a>
                            <a class="link-item" href="/disclosures/legal-order-routing/" rel="noopener noreferrer"
                               target="_blank">Legal/Order Routing</a>
                            <a class="link-item" href="https://brokercheck.finra.org/" rel="noopener noreferrer"
                               target="_blank">BrokerCheck</a>
                            <a class="link-item" href="/disclosures/disclaimer/" rel="noopener noreferrer"
                               target="_blank">Disclaimer</a>
                            <a class="link-item" href="/disclosures/terms-and-conditions/" rel="noopener noreferrer"
                               target="_blank">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </footer>
                <!-- <div class="toaster-wrapper bottom_center gdpr-wrapper" style="bottom: 0px;"><div class="toaster toast-primary gdpr-wrapper" style="background-color: rgb(56, 155, 255); color: rgb(255, 255, 255);"><div class="container"><div class="set-gdpr-cookie"><div class="gdpr-message"><p>We use cookies to personalize content and ads, to provide social media features and to analyse our traffic. We also share information about your use of our site with our social media, advertising and analytics partners. For objecting to such cookies, please consult our
                                <a class="policy-link" href="/disclosures/privacy-policy">Cookie Policy</a></p></div><button type="button" class="accept-gdpr-button btn btn-link btn-lg">Accept</button></div></div></div></div> -->
            </div>
        </div>
    </div>
<script>
    function createAccount() {
        document.getElementById('CreatAccount').style.display = "none";
        document.getElementById('AccountDetail').style.display = "block";
    }
    function accountDetail(){
        document.getElementById('AccountDetail').style.display = "none";
        document.getElementById('PersonalData').style.display = "block";
    }
    function personalData() {
        document.getElementById('PersonalData').style.display = "none";
        document.getElementById('InvestorData').style.display = "block";
    }
    function investorData() {
        document.getElementById('InvestorData').style.display = "none";
        document.getElementById('AccreditationData').style.display = "block";
    }
    function accreditationData() {
        document.getElementById('AccreditationData').style.display = "none";
        document.getElementById('Review').style.display = "block";
    }
    function Review() {
        document.getElementById('Review').style.display = "none";
        document.getElementById('Submit').style.display = "block";
    }
    function Submit() {
        
    }

</script>
@endsection