<!DOCTYPE html>
<html lang="en">
	<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsraffle, Profile Page" />
    <meta name="author" content="Yinka Adeniran" />
		<meta name="robots" content="index, follow" />
		<title>Raffle Draw | Cash luck</title>

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
    <style>
      .profile-card {
        padding: 10px 10px !important;
        text-align: left !important;
      }
      .play{
        color: #7ccc0f;
        border: 1px solid #7ccc0f;
        border-radius: 25px;
        padding: 7px 20px;
        margin-bottom: 15px;
      }
      .active{
        color: #7ccc0f !important;
        /*padding-left: 5px;*/
      }

      .play-issue{
        color: brown;
        border: 1px solid brown;
        border-radius: 25px;
        padding: 7px 20px;
        margin-bottom: 15px;
      }
    </style>  
	</head>
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
            <a class="navbar-brand" style="padding: 0 !important;" href="{{url('/')}}"><img src="{{asset('public/images/logo.png')}}" style="height: 50px" alt="logo" /></a>
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
                <a class="active" href="{{url('customer/raffles')}}">Raffle Draw</a>
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

    <div id="page-contents">
    	<div class="container">
    		<div class="row">

          <!-- Newsraffle Common Side Bar Left
          ================================================= -->
    			<div class="col-md-3 static" id="chat-block">
            <div class="profile-card">
              @if($loggedInUser->image == null)
            	  <img src="{{asset('public/images/users/no-image.png')}}" alt="user" class="profile-photo" />
              @else
                <img src="{{asset('public/images/users/'.$loggedInUser->image)}}" alt="user" class="profile-photo" />
              @endif
                <h5><a href="{{url('customer/profile')}}" class="text-white">{{$loggedInUser->name}}</a></h5>
                <a href="#" class="text-white">Paid: ₦{{$redeemed}} </a><br/>
                <a href="#" class="text-green" style="color: #7ccc0f;">Unredeemed: ₦{{$unredeemed}} </a>
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
              <li><i class="icon ion-ios-paper"></i><div><a href="{{url('customer/dashboard')}}">My Newsfeed</a></div></li>
              <li><i class="icon ion-card"></i><div><a href="{{url('customer/redeem')}}">Redeem</a></div></li>
              <li><i class="icon ion-cash"></i><div><a href="{{url('customer/cashout')}}">Cashout</a></div></li>
              <li><i class="icon ion-cash"></i><div><a class="active" href="{{url('customer/raffles')}}">Raffle Draw</a></div></li>
              <li><i class="icon ion-power" style="color:brown;"></i><div><a href="{{url('logout')}}">Logout</a></div></li>
            </ul><!--news-feed links ends-->
              
            
          </div>
          
    			<div class="col-md-7">

            <!-- Post Content
            ================================================= -->
            @foreach($raffles as $raffle)
              <div class="post-content">
                <img src="{{asset('public/images/raffles/'.$raffle->image)}}" alt="post-image" class="img-responsive post-image" />
                <div class="post-container">
                  <img src="{{asset('public/images/raffles/'.$raffle->image)}}" alt="user" class="profile-photo-md pull-left" />
                  <div class="post-detail">
                    <div class="user-info">
                      <h5><a href="timeline.html" class="profile-link">{{$raffle->title}}</a> <span class="following">{{$raffle->state_name}}</span></h5>
                      <p style="color:brown;margin-bottom: 0 !important;">Starts: {{date('d-m-Y', $raffle->start_date)}}</p>
                      <p style="color:brown;">Ends: {{date('d-m-Y', $raffle->end_date)}} </p>
                      <p class="pull-right"><span style="color:brown;">Play with: </span>{{$raffle->price}} units</p>
                    </div>
                    
                    <div class="line-divider" style="margin-top: 40px;"></div>
                    <div class="post-text">
                      <p>
                        {!! $raffle->body !!} {{--<i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i>--}}
                      </p>
                      @if($raffle->game_id > 0 && $raffle->game_prize == null && time() > $raffle->end_date)
                      <a class="play-issue pull-right" href="javascript:void(0)"  >Sorry! You were not among winners</a>
                      @endif
                      @if($raffle->game_id > 0 && $raffle->game_prize == null && time() < $raffle->end_date)
                      <a class="play-issue pull-right" href="javascript:void(0)"  >Kindly check back for result</a>
                      @endif
                      @if($raffle->game_id > 0 && $raffle->game_prize != null && time() > $raffle->end_date)
                      <a class="play pull-right" href="javascript:void(0)"  >Congratulations! You won {{$raffle->game_prize}}</a>
                      @endif
                      @if($raffle->game_id == null && time() > $raffle->end_date)
                      <a class="play-issue pull-right" href="javascript:void(0)"  >Sorry! You didnt participate in this draw</a>
                      @endif
                      @if($raffle->price > $unredeemed && time() < $raffle->end_date)
                      <a class="play-issue pull-right" href="javascript:void(0)" >Not enough balance</a>
                      @endif
                      @if($raffle->price <= $unredeemed && $raffle->game_id == null && time() < $raffle->end_date)
                      <a class="play pull-right" href="javascript:void(0)" onclick="checkQualification('{{$raffle->id}}')" >Play now</a>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

          </div>

          <!-- Newsraffle Common Side Bar Right
          ================================================= -->
    			<div class="col-md-2 static">
            
          </div>
    		</div>
    	</div>
    </div>

    <!-- Footer
    ================================================= -->
    <footer id="footer">
      <div class="container">
      	
      </div>
      <div class="copyright">
        <p>Powered by Oprisoft. All rights reserved</p>
      </div>
		</footer>
    
    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    <form class="form-group" method="post" id="raffle-form" enctype="multipart/form-data" action="{{url('customer/play_raffle')}}">    
      <input type="hidden" id="raffle-form-id" name="id"/>
      <input type="submit" name="submit" id="mySubmit" style="display: none" class="action-button" value="Submit" />
    </form>  
    <!-- Scripts
    ================================================= -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&callback=initMap"></script>
    <script src="{{asset('public/customer/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('public/customer/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/customer/js/jquery.sticky-kit.min.js')}}"></script>
    <script src="{{asset('public/customer/js/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('public/customer/js/script.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    <script>
        function checkQualification(id){
          $("#raffle-form-id").val(id);
          $("#mySubmit").click();
        }
    </script>
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
  </body>  
       
</html>
