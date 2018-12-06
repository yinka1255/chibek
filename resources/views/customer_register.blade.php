<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Cash Luck | Vendor Registration</title>
    <!-- page css -->
    <link href="{{asset('public/admin/node_modules/register-steps/steps.css')}}" rel="stylesheet">
    <link href="{{asset('public/admin/dist/css/pages/register3.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('public/admin/dist/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/css/custom.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <style>
        #eliteregister li {
            width: 50%;
        }    
        #wrapper{
            overflow-y: auto !important;
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
    body{
        background: #537195 !important;
    }
</style>
</head>

<body class="skin-default card-no-border">
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
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
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
    <section id="wrapper" class="step-register">
        <div class="register-box">
            <div class="">
                <a href="javascript:void(0)" class="text-center m-b-40"><img src="{{asset('public/admin/images/logo.png')}}" style="height: 100px; width: auto;" alt="Home" /></a>
                <!-- multistep form -->
                <form id="msform" method="post" action="{{url('register/customer')}}" >
                    <!-- progressbar -->
                    <ul id="eliteregister">
                        <li class="active">Account Setup</li>
                        <li>Personal</li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <h2 class="fs-title">Create your account</h2>
                        <h3 class="fs-subtitle">This is step 1</h3>
                        <input type="email" name="email" placeholder="Email"/>
                        <input type="password" name="password" placeholder="Password"/>
                        <input type="password" name="cpass" placeholder="Confirm Password"/>
                        <a href="{{url('/')}}" class="previous action-button light-text">Login</a>
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Personal</h2>
                        <h3 class="fs-subtitle">Personal</h3>
                        <input type="text" name="name" placeholder="Full name"/>
                        <input type="text" name="phone" placeholder="Phone"/>
                        
                        <select name="state"class="form-control m-b-20" id="state" onchange="getLgas()">
                            @foreach ($states as $state)
                                <option value="{{$state->id}}">{{$state->name}}</option>;
                            @endforeach
                        </select>  
                        <select name="lga" class="form-control" id="lga">
                                            
                        </select>    
                        <textarea name="address" placeholder="Address"></textarea>
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="submit" name="submit" class="action-button" value="Submit" />
                    </fieldset>
                    
                </form>
                <div class="clear"></div>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    
    <script src="{{asset('public/admin/node_modules/popper/popper.min.js')}}"></script>
    <script src="{{asset('public/admin/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('public/admin/node_modules/register-steps/jquery.easing.min.js')}}"></script>
    <script src="{{asset('public/admin/node_modules/register-steps/register-init.js')}}"></script>
    <script type="text/javascript">
    $(function() {
        $(".preloader").fadeOut();
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });

    function getLgas(){
        console.log(document.getElementById('state').value);
        $('#lga').empty();
            $.post("get_lgas",
            {
                state: document.getElementById('state').value
            },
            function(data, status){
            console.log(data);
            $.each(data.lgas, function(i, d) {
                $('#lga').append('<option value="' + d.id + '">' + d.lga + '</option>');
            });
        });
    }
    </script>

    
</body>

</html>