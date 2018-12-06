<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
    <meta name="author" content="Yinka Adeniran" />
		<meta name="robots" content="index, follow" />
		<title>CashLuck | Cashout</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="{{asset('public/customer/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('public/customer/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('public/customer/css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/customer/css/font-awesome.min.css')}}" />
    <link href="{{asset('public/customer/css/emoji.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
  </head>
  <style>
    .timeline-cover{
      background: url("{{asset('public/images/2.jpg')}}") no-repeat;
    }
  </style>
  <body>

    <!-- Header
    ================================================= -->
		<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="padding: 0 !important;" href="{{url('/')}}"><img src="{{asset('public/images/logo.png')}}" style="height: 50px;" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right main-menu">
                  <li class="dropdown">
                    <a href="{{url('customer/dashboard')}}">Home </a>
                  </li>
                  <li class="dropdown">
                    <a href="{{url('customer/redeem')}}">Redeem </a>
                  </li>
                  <li class="dropdown">
                    <a href="{{url('customer/cashout')}}">Cashout </a>
                  </li>
                  <li class="dropdown">
                      <a href="{{url('customer/raffles')}}">Raffle Draw</a>
                    </li>
                  <li class="dropdown">
                    <a href="{{url('logout')}}">Logout </a>
                  </li>
                </ul>
            
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <div class="timeline-cover">

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                  @if($loggedInUser->image == null)
                    <img src="{{asset('public/images/users/no-image.png')}}" alt="user" class="img-responsive profile-photo" />
                  @else
                    <img src="{{asset('public/images/users/'.$loggedInUser->image)}}" alt="user" class="img-responsive profile-photo" />
                  @endif
                  <h3>{{$loggedInUser->name}}</h3>
                  <p class="text-muted">{{$loggedInUser->email}}</p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="#">Total amount paid to you: ₦{{$redeemed}}</a></li>
                  
                </ul>
                <ul class="follow-me list-inline">
                  <li>Total unit redeemed by you: ₦{{$unredeemed}}</li>
                  
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
                @if($loggedInUser->image == null)
                <img src="{{asset('public/images/users/no-image.png')}}" alt="user" class="img-responsive profile-photo" />
              @else
                <img src="{{asset('public/images/users/'.$loggedInUser->image)}}" alt="user" class="img-responsive profile-photo" />
              @endif
              <h4>{{$loggedInUser->name}}</h4>
              <p class="text-muted">{{$loggedInUser->email}}</p>
            </div>
            
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3">
              
              
            </div>
            <div class="col-md-7">

              <!-- Change Password
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-locked-outline"></i>Profile</h4>
                  <div class="line"></div>
                  <form method="post" action="{{url('customer/update_profile')}}" style="margin-bottom: 20px;" id="education" class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="name">Name</label>
                        <input id="name" class="form-control input-group-lg" type="test" name="name" value="{{$loggedInUser->name}}"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                          <label for="phone">Phone</label>
                          <input id="phonr" class="form-control input-group-lg" type="test" name="phone" value="{{$loggedInUser->phone}}"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>Email</label>
                        <input class="form-control input-group-lg" type="email" value="{{$loggedInUser->email}}" name="email"/>
                      </div>
                    </div>
                    <button class="btn btn-primary" style="margin-top: 20px; width: 100%;">Update Profile</button>
                  </form>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form method="post" action="{{url('customer/update_password')}}" id="education" class="form-inline">
                    
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label>New password</label>
                        <input class="form-control input-group-lg" type="password" name="password" title="Enter password" required placeholder="New password"/>
                      </div>
                    </div>
                    <div class="row">  
                      <div class="form-group col-xs-12">
                        <label>Confirm password</label>
                        <input class="form-control input-group-lg" type="password" name="cpassword" title="Enter password"  required placeholder="Confirm password"/>
                      </div>
                    </div>
                    <button class="btn btn-primary">Update Password</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-2 static">
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer
    ================================================= -->
    <footer id="footer">
      <div class="copyright">
        <p>Powered by Oprisoft. All rights reserved</p>
      </div>
		</footer>
    
    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>

    <!-- Scripts
    ================================================= -->
    <script src="{{asset('public/customer/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('public/customer/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/customer/js/jquery.sticky-kit.min.js')}}"></script>
    <script src="{{asset('public/customer/js/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('public/customer/js/script.js')}}"></script>
    
  </body>
</html>
