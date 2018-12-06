<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Cash Luck | Frequently asked questions</title>

		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Adeniran Adeyinka">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<!-- animate -->
		<link rel="stylesheet" href="{{asset('public/css/animate.min.css')}}">
		<!-- bootstrap -->
		<link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
		<!-- font-awesome -->
		<link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
		<!-- custom -->
		<link rel="stylesheet" href="{{asset('public/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('public/css/custom.css')}}">
		<link rel="stylesheet" href="{{asset('public/css/faq/style.css')}}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">

	</head>
	<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
	<script src="{{asset('public/admin/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    <script>
        function getSuccess(data){
            $.confirm({
                    title: 'Success',
                    content: data,
                    type: 'green',
                    typeAnimated: true,
                    buttons: {
                            Ok: function () {
                            }
                    }
            });
        }

    function getError(data){
            $.confirm({
                    title: 'Error!',
                    content: data,
                    type: 'red',
                    typeAnimated: true,
                    buttons: {
                            Ok: function () {
                            }
                    }
            });
        }
	</script>
	@if(Session::has('error'))
    <script>
        getError("{{Session::get('error')}}");
    </script>
    @endif	
    @if(Session::has('success'))
    <script>
        getSuccess("{{Session::get('success')}}");
    </script>
    @endif	
		<!-- start navigation -->
		<div class="navbar navbar-fixed-top navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand"><img src="{{asset('public/images/logo.png')}}" style="height:50px;" class="img-responsive" alt="logo"></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="{{url('/')}}#home" class="smoothScroll">HOME</a></li>
						<li><a href="{{url('/')}}#about" class="smoothScroll">ABOUT</a></li>
						<!--<li><a href="#team" class="smoothScroll">TEAM</a></li>-->
						<li><a href="{{url('/')}}#portfolio" class="smoothScroll">CLIENT</a></li>
						<li><a href="{{url('/')}}{{url('faqs')}}">FAQs</a></li>
						<li><a href="{{url('/')}}#contact" class="smoothScroll">CONTACT</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SIGN UP <span></a>
							<ul class="dropdown-menu newsfeed-home">
								<li><a href="{{url('customer_register')}}">Customer</a></li>
								<li><a href="{{url('register')}}">Vendor</a></li>
							</ul>
						</li>
                    </ul>
				</div>
			</div>
		</div>

		<section class="cd-faq" style="margin: 100px 0 0 0 !important;">
			<div class="cd-faq-items">
				<ul id="basics" class="cd-faq-group">
					<li>
						<a class="cd-faq-trigger" href="#0">How do I win cashluck units</a>
						<div class="cd-faq-content">
							<p>You can win credit units by simply patronizing one of our partner vendors and based on their terms and conditions, you might be rewarded with a credit unit. Kindly contact individual vendor for more information</p>
						</div> <!-- cd-faq-content -->
					</li>
		
					<li>
						<a class="cd-faq-trigger" href="#0">How can I redeem my cashluck units</a>
						<div class="cd-faq-content">
							<p>You can redeem your credit units by simply signing up on our portal. Scratch the card, go to redeem and click on the particular card that bears the same unit value as the one you have and input the pin to redeem your credit unit</p>
						</div> <!-- cd-faq-content -->
					</li>
		
					<li>
						<a class="cd-faq-trigger" href="#0">What do you mean by cashluck unit? How do I earn it</a>
						<div class="cd-faq-content">
							<p>Credit unit is the value of the card you redeem. Its the value you get when you choose to cashout.</p>
						</div> <!-- cd-faq-content -->
					</li>
		
					<li>
						<a class="cd-faq-trigger" href="#0">Can my cashluck unit expire</a>
						<div class="cd-faq-content">
							<p>No It cant</p>
						</div> <!-- cd-faq-content -->
					</li>
					<li>
						<a class="cd-faq-trigger" href="#0">Can I transfer my cashluck unit</a>
						<div class="cd-faq-content">
							<p>No, Cashluck unit cant be transfered</p>
						</div> <!-- cd-faq-content -->
					</li>
					<li>
						<a class="cd-faq-trigger" href="#0">Is there a limit to the amount of cashluck unit I can redeem</a>
						<div class="cd-faq-content">
							<p>No, there is absolutely no Limit to the amount of Cashluck unit that can be redeemed</p>
						</div> <!-- cd-faq-content -->
					</li>
					<li>
						<a class="cd-faq-trigger" href="#0">How can I cashout</a>
						<div class="cd-faq-content">
							<p>You can cashout simply by by requesting for a cashout. You can select either of our two options.</p>
						</div> <!-- cd-faq-content -->
					</li>
					<li>
						<a class="cd-faq-trigger" href="#0">What are the cashout options</a>
						<div class="cd-faq-content">
							<p>Bank transfer and airtime topup.</p>
						</div> <!-- cd-faq-content -->
					</li>
				</ul> <!-- cd-faq-group -->
		
				
				</ul> <!-- cd-faq-group -->
			</div> <!-- cd-faq-items -->
			<a href="#0" class="cd-close-panel">Close</a>
		</section> <!-- cd-faq -->
		
		<!-- start home -->
		<!-- start footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-7">
						<p>Copyright &copy; 2016 Cash Luck ltd.</p>
						<small>Powered by <a rel="nofollow" href="http://www.optisoft.ng" target="_parent">Optisoft</a></small>
					</div>
					<div class="col-md-4 col-sm-5">
						<ul class="social-icon">
							<li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-instagram"></a></li>
							<li><a href="#" class="fa fa-pinterest"></a></li>
							<li><a href="#" class="fa fa-google"></a></li>
							<li><a href="#" class="fa fa-github"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->


		<!-- jQuery -->
		<script src="{{asset('public/js/jquery.js')}}"></script>
		<!-- bootstrap -->
		<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
		<!-- isotope -->
		<script src="{{asset('public/js/isotope.js')}}"></script>
		<!-- images loaded -->
   		<script src="{{asset('public/js/imagesloaded.min.js')}}"></script>
   		<!-- wow -->
		<script src="{{asset('public/js/wow.min.js')}}"></script>
		<!-- smoothScroll -->
		<script src="{{asset('public/js/smoothscroll.js')}}"></script>
		<!-- jquery flexslider -->
		<script src="{{asset('public/js/jquery.flexslider.js')}}"></script>
		<!-- custom -->
		<script src="{{asset('public/js/custom.js')}}"></script>

		<script src="{{asset('public/js/faq/main.js')}}"></script>
		<script src="{{asset('public/js/faq/modernizr.js')}}"></script>
		
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-localScroll/1.4.0/jquery.localScroll.js"></script>
        <script>
            $(document).ready(function() {
               $('.nav').localScroll({duration:800});
            });
        </script>

	</body>
</html>