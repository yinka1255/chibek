<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cares365 | Contact </title>
        <meta name="description" content="Healme.net contact page">
        <meta name="keywords" content="Contact, Charity, Donate online, Save lifes, Health foundation">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130639172-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-130639172-1');
        </script>
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="{{asset('public/customer/css/bootstrap.min.css')}}">
				<link rel="stylesheet" href="{{asset('public/customer/css/animate.css')}}">
				<link rel="stylesheet" href="{{asset('public/customer/css/meanmenu.css')}}">
				<link rel="stylesheet" href="{{asset('public/customer/css/magnific-popup.css')}}">
				<link rel="stylesheet" href="{{asset('public/customer/css/owl.carousel.min.css')}}">
				<link rel="stylesheet" href="{{asset('public/customer/css/font-awesome.min.css')}}">
				<link rel="stylesheet" href="{{asset('public/customer/css/et-line-icon.css')}}">
				<link rel="stylesheet" href="{{asset('public/customer/css/reset.css')}}">
				<link rel="stylesheet" href="{{asset('public/customer/css/ionicons.min.css')}}">
				<link rel="stylesheet" href="{{asset('public/customer/css/material-design-iconic-font.min.css')}}">
				<link rel="stylesheet" href="{{asset('public/customer/css/style.css')}}">
				<link rel="stylesheet" href="{{asset('public/customer/css/responsive.css')}}">

		
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
		
		<link rel="stylesheet" href="{{asset('public/css/custom.css')}}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
        <style>
            .white-text{
                color: #fff !important;
            }
        </style>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

				<!-- Header Area Start -->
				<script src="{{asset('public/js/jquery.js')}}"></script>
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
		<header class="top">
			<div class="header-area header-sticky fixed">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-6">
							<div class="logo">
								<a href="index.html"><img src="{{asset('public/customer/img/logo/logo.png')}}"  alt="eduhome" /></a>
							</div>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="content-wrapper one">
                                <!-- Main Menu Start -->
                                <div class="main-menu one text-right">
                                    <nav>
                                        <ul>
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li><a href="{{url('about')}}">About</a></li>
                                            <li><a href="{{url('contact')}}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="mobile-menu hidden-lg hidden-md one"></div>
                                <!-- Main Menu End -->
                            </div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header Area End -->
		<!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-area text-center">	
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>Contact</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <!-- Banner Area End -->
        <div class="contact-area pt-150 pb-140"> 
            <div class="container">     
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="contact-contents text-center">
                            <div class="single-contact mb-65">
                                <div class="contact-icon">
                                    <img src="{{asset('public/customer/img/contact/contact1.png')}}" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>ADDRESS</h3>
                                    <p>19b, Adeyemi Lawson St.</p>
                                    <p>Ikoyi, Lagos, Nigeria</p>
                                </div>
                            </div>
                            <div class="single-contact mb-65">
                                <div class="contact-icon">
                                    <img src="{{asset('public/customer/img/contact/contact2.png')}}" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>PHONE</h3>
                                    <p>+234 81 1948 7489</p>
                                    <p>01 1876663</p>
                                </div>
                            </div>
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <img src="{{asset('public/customer/img/contact/contact3.png')}}" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>EMAIL</h3>
                                    <p>info@cares365.com</p>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="reply-area">
                            <h3>LEAVE A message</h3>
                            <p>I must explain to you how all this a mistaken idea of ncing great explorer of the rut the is lder of human happinescias unde omnis iste natus error sit volptatem </p>
                            <form id="contact-form" action="mail.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Name</p>
                                        <input type="text" name="name" id="name">
                                    </div>
                                    <div class="col-md-12">
                                        <p>Email</p>
                                        <input type="text" name="email" id="email">
                                    </div>
                                    <div class="col-md-12">
                                        <p>Subject</p>
                                        <input type="text" name="subject" id="subject">
                                        <p>Massage</p>
                                        <textarea name="message" id="message" cols="15" rows="10"></textarea>
                                    </div>
                                </div>
                                <a class="reply-btn" href="#" data-text="send"><span>send message</span></a>
                                <p class="form-messege"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe Start -->
        <div class="subscribe-area pt-60 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="subscribe-content section-title text-center">
                            <h2>subscribe our newsletter</h2>
                            <p>Kindly submit your email address to get our news letter</p>
                        </div>
                        <div class="newsletter-form mc_embed_signup">
                            <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll" class="mc-form"> 
                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your e-mail address" required>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                    <button id="mc-embedded-subscribe" class="default-btn" type="submit" name="subscribe"><span>subscribe</span></button> 
                                </div>    
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe End -->
        
        <!-- Footer Start -->
        <footer class="footer-area">
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <p>Copyright © Cares365</a> 2018. All Right Reserved By Cares365.</p>
                        </div> 
                    </div>
                </div>    
            </div>
        </footer>
        <!-- Footer End -->

      <script src="{{asset('public/customer/js/vendor/jquery-1.12.0.min.js')}}"></script>
			<script src="{{asset('public/customer/js/bootstrap.min.js')}}"></script>
			<script src="{{asset('public/customer/js/jquery.meanmenu.js')}}"></script>
			<script src="{{asset('public/customer/js/jquery.magnific-popup.js')}}"></script>
			<script src="{{asset('public/customer/js/ajax-mail.js')}}"></script>
			<script src="{{asset('public/customer/js/owl.carousel.min.js')}}"></script>
			<script src="{{asset('public/customer/js/jquery.mb.YTPlayer.js')}}"></script>
			<script src="{{asset('public/customer/js/jquery.nicescroll.min.js')}}"></script>
			<script src="{{asset('public/customer/js/plugins.js')}}"></script>
			<script src="{{asset('public/customer/js/main.js')}}"></script>

		
			<script src="{{asset('public/js/custom.js')}}"></script>
			
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-localScroll/1.4.0/jquery.localScroll.js"></script>
			<script>
					$(document).ready(function() {
							$('.nav').localScroll({duration:800});
					});
			</script>

    </body>
</html>
