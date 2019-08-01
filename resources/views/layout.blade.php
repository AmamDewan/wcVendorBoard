<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SheiDeal Vendor Dashboard</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>
<body>
	<nav id="navbar" class="navbar has-shadow is-spaced">
		<div class="container is-grouped-centered">
			<div class="navbar-brand">
				<a href="{{asset('/')}}" class="navbar-item">
					<img src="https://d2p6xhc5eyh2z0.cloudfront.net/wp-content/uploads/2019/04/06175721/SheiDea-logol.png" alt="SheiDeal Vendor Dashboard">
				</a>
			</div>

			<div class="navbar-end">
				<div class="navbar-item">
					@guest
						<div class="buttons">
							<a href="{{ route('login') }}" class="button is-light">{{ __('Login') }}</a>
							@if(Route::has('register'))
								<a href="{{ route('register') }}" class="button is-primary">{{ __('Register') }}</a>
							@endif
						</div>
					@else
						<div class="buttons">
							<a href="{{ route('logout') }}" class="button is-light" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
						</div>
					@endguest
				</div>
			</div>
		</div>
	</nav>
	<section class="section hero is-fullheight-with-navbar">
		<div class="container">
			@yield('content')
		</div>
	</section>
	<footer class="footer">
	  <div class="content has-text-centered">
	    <p>
	      <strong>vBoard</strong> developed by <a href="https://amam.me">Amam Dewan</a> | Copyright &copy; {{ date('Y') }} <a href="https://sheideal.com">SheiDeal</a> all rights reserved <br>
	      <span class="is-light"><i>Test version</i></span>
	    </p>
	  </div>
	</footer>
	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</body>
</html>