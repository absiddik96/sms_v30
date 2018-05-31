<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>{{ config('app.name', 'IM&RPS') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="{{ asset('images/logo/favicon.png') }}" type="image/x-icon" />


	<!-- //for-mobile-apps -->
	<link href="{{ asset('student/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('student/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!-- js -->
	<script type="text/javascript" src="{{ asset('student/js/jquery-2.1.4.min.js') }}"></script>
	<!-- //js -->
	<!-- fonts -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'><!-- //fonts -->




	<script type="text/javascript" src="{{ asset('student/js/numscroller-1.0.js') }}"></script>

</head>
<body>
	<!-- banner -->
	<div class="header-top hidden-print">
		<div class="container">
			<ul>
				<li><a href="javascript:window.print()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>Print Profile</a></li>
				<li class="pull-right">

          <div class="" data-sound="alert" id="mb-signout">

                            <a class="" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>  Logout
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>

          </div>

        </li>
				</ul>
			</div>
		</div>
		<div class="header">
			@yield('content')
		</div>
		<!-- //banner -->
		<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
		<!-- //for bootstrap working -->
		<div class="portfolio-modal modal fade slideanim" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-content port-modal">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2 text-center">
							<div class="modal-body">
								<img src="images/pic1.jpg" class="img-responsive img-centered" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



</body>
</html>
