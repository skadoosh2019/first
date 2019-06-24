<div class="crypto-sidenav">
	<nav class="crypto-navigation">
		<a href="index.html" class="crypto-navigation__logo">
			<!-- Image element or even SVG can be used here -->
			<img src="{{ asset('images/small-white-secuiritiif.png') }}" alt="Secuiritiif" class="crypto-navigation__logo-image" id = "logo_img"/>
			<!-- <svg height="40" viewBox="0 0 40 40" width="40"
				xmlns="http://www.w3.org/2000/svg">
				<g fill-rule="nonzero" transform="translate(22 22)">
					<path d="m0 3.64v14.26c9.44-.94 16.96-8.46 17.9-17.9h-14.26c-.62 1.7-1.94 3.02-3.64 3.64z" fill="var(--mdc-theme-primary-800)" />
					<path d="m-22-2c0 10.38 7.9 18.9 18 19.9v-14.26c-2.32-.84-4-3.04-4-5.64s1.68-4.8 4-5.64v-14.26c-10.1 1-18 9.52-18 19.9z" fill="var(--mdc-theme-primary-200)"/>
					<path d="m3.64-4h14.26c-.94-9.44-8.46-16.96-17.9-17.9v14.26c1.7.62 3.02 1.94 3.64 3.64z" fill="var(--mdc-theme-primary-600)"/>
				</g>
				navbar class need mdc-ripple-surface
			</svg> -->
		</a>
		<ul class="crypto-navigation__list ">
			<li class="crypto-navigation__list-item  ">
				<a href="{{route('dashboard')}}">
					<i class="material-icons crypto-navigation__list-item__icon" aria-hidden="true">timeline</i>
					<span class="crypto-navigation__list-item__label mdc-theme--on-surface mdc-typography--overline">
            Dashboard
          </span>
				</a>
			</li>

			<li class="crypto-navigation__list-item  ">
				<a href="{{route('wallet')}}">
					<i class="material-icons crypto-navigation__list-item__icon" aria-hidden="true">account_balance_wallet</i>
					<span class="crypto-navigation__list-item__badge">2</span>
					<span class="crypto-navigation__list-item__label mdc-theme--on-surface mdc-typography--overline">
            Wallet
          </span>
				</a>
			</li>
			<li class="crypto-navigation__list-item ">
				<a href="{{route('market')}}">
					<i class="material-icons crypto-navigation__list-item__icon" aria-hidden="true">bar_chart</i>
					<span class="crypto-navigation__list-item__label mdc-theme--on-surface mdc-typography--overline">
            Market
          </span>
				</a>
			</li>
			<li class="crypto-navigation__list-item  ">
				<a href="{{route('account')}}">
					<i class="material-icons crypto-navigation__list-item__icon" aria-hidden="true">person</i>
					<span class="crypto-navigation__list-item__label mdc-theme--on-surface mdc-typography--overline">
            Account
          </span>
				</a>
			</li>
			<li class="crypto-navigation__list-item  ">
				<a href="{{ route('login') }}">
					<i class="material-icons crypto-navigation__list-item__icon" aria-hidden="true">power_settings_new</i>
					<span class="crypto-navigation__list-item__label mdc-theme--on-surface mdc-typography--overline">
            Logout
          </span>
				</a>
			</li>
		</ul>
	</nav>
</div>
<script>
	
</script>
