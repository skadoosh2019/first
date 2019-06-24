@extends('layouts.main')

@section('content')
    
<!-- Page Content -->
<div class="form-body">
	<div class="row">
		<div class="form-holder">
			<div class="form-content">
				<div class="form-items">
					<div class="website-logo-inside">
						<a href="index.html">
							<div class="logo">
								<img class="logo-size" src="{{ asset('images/small-white-secuiritiif.png') }}" alt="">
								</div>
							</a>
						</div>
						<h3>Password Reset</h3>
						<p>To reset your password, enter the email address you use to sign in to iofrm</p>
						<form>
							<input class="form-control" type="text" name="username" placeholder="E-mail Address" required>
								<div class="form-button full-width">
									<button id="submit" type="submit" class="ibtn btn-forget">Send Reset Link</button>
								</div>
							</form>
						</div>
						<div class="form-sent">
							<div class="website-logo-inside">
								<a href="index.html">
									<div class="logo">
										<img class="logo-size" src="{{ asset('images/small-white-secuiritiif.png') }}" alt="">
										</div>
									</a>
								</div>
								<div class="tick-holder">
									<div class="tick-icon"></div>
								</div>
								<h3>Password link sent</h3>
								<p>Please check your inbox iofrm@iofrmtemplate.io</p>
								<div class="info-holder">
									<span>Unsure if that email address was correct?</span>
									<a href="#">We can help</a>.
                        
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END Page Content -->
@endsection