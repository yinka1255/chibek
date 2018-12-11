<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cares365 | {{$feed->title}} </title>
        <meta name="description" content="Help {{$feed->title}}">
        <meta name="keywords" content="About us, Charity, Donate online, Save lifes, Health foundation">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:url"           content="https://www.cares365.com/details/{{$feed->title}}/{{$feed->id}}" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="{{$feed->title}}" />
        <meta property="og:description"   content="Kindly visit https://www.cares365.com to donate the bit you can. Help save life today" />
        <meta property="og:image"         content="https://www.cares365.com/public/images/feeds/{{$feed->image}}" />
        <style>
            .m-t-10{
                margin-top: 10px;
            }
            .share-text{
                font-family: Helvetica, Arial, sans-serif;
                font-size: 11px;
            }
        </style>
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
        <script src="https://js.paystack.co/v1/inline.js"></script>
        <style>
            .white-text{
                color: #fff !important;
            }
        </style>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
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
                                    <h2>Help save life today</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <!-- Banner Area End -->
        <!-- About Start -->
        <div class="about-area pt-145 pb-155">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="about-img">
                            <img class="full-width" style="width: 100%;" src="{{asset('public/images/feeds/'.$feed->image)}}" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="about-content">
                            <h2>{{$feed->title}}</h2>
                            
                            <p style="text-align: justify;">{!! $feed->body !!}</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="fb-share-button" data-href="https://www.cares365.com/details/{{$feed->title}}/{{$feed->id}}" data-type="button"></div> <span class="share-text">Kindly share, an helper might be on your timeline.</span>
                                </div>
                            </div>
                            <div class="row m-t-10">
                                <div class="col-md-12">
                                    <div class="fb-like" data-href="https://www.facebook.com/Cares365-978112969039591/?modal=admin_todo_tour" data-layout="standard" data-action="like" data-size="small" data-show-faces="true"></div>
                                </div>
                            </div>
                            <a class="default-btn pull-right white-text"  href="#" data-toggle="modal" data-target="#donation-modal" >DONATE NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
               
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
                <script>
                        $(document).ready(function() {
                                $('.nav').localScroll({duration:800});
                        });
                        $("#dButton").click(function() {
                            $('html, body').animate({
                                scrollTop: $("#donate").offset().top   }, 2000);
                        });
    
                        
                </script>
                
                <form>
                    <script>
                        
                        function payWithPaystack(){
                            var name = $("#name_input").val();
                            var email = $("#email_input").val();
                            var amount = $("#amount_input").val();
                            if(amount.length < 1){
                                getError("Kindly select an amount you'd like to donate");
                                return;
                            }
                            var handler = PaystackPop.setup({
                                key: "pk_live_44879993078226bd019febc572062f2cafc95db5",
                                email: email,
                                amount: amount+"00",
                                ref: Date.now(),
                                currency: "USD",
                                metadata: {
                                    custom_fields: [
                                    { display_name: "Name", variable_name: "name", value: name },
                                    { display_name: "Email", variable_name: "email", value: email },
                                    
                                    ]
                                },
                                callback: function(response){
                                    getSuccess('Thank you for the donation. Its good to know lives are getting saved through us');
                                    document.getElementById("donation-form").submit();
                                    
                                },
                                onClose: function(){
                                    getError('Transaction Cancelled');
                                    
                                }
                            });
                            handler.openIframe();
                        }
    
                    </script>
                </form>
    </body>
    <div class="modal model-sign fade" id="donation-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h6>Donate</h6>
                </div>
                <div class="modal-body">
                    <div class="register-form">
                        <form class="mb-0" method="POST" id="donation-form" action="{{url("save_donation")}}">
                                <input type="hidden" id="feed_id_input" value="{{$feed_id}}" name="feed_id" /> 
                            <div class="form-group">
                                <label>We'd like to know your name</label>
                                <input type="text" class="form-control" id="name_input" name="name" placeholder="Name" >
                            </div>
                            <div class="form-group">
                                <label>We'd also like to contact you later</label>
                                <input type="email" class="form-control" id="email_input" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Amount you'd like to donate</label>
                                <input type="number" class="form-control" id="amount_input" name="amount" min="5" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" placeholder="Amount ($)" required>
                            </div>
                            
                            <button type="button" onclick="payWithPaystack()" class="btn btn-primary btn-block mt-30">DONATE NOW</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
</html>

<script type="application/ld+json">
    {
      "@context": "http://schema.org/",
      "@type": "Online donation",
      "name": "Help {{$feed->title}}",
      "author": "Cares365",
      "image": "https://cares365.com/public/images/feeds/{{$feed->image}}",
      "description": "Help {{$feed->title}} Help donate online now.",
      "amountNeeded": "{{$feed->amount}}",
      
    }
</script>
