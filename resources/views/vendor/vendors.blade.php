@include("includes.header")
@include("includes.vendor_sidemenu")
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Vendor Users</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active">Vendor Users</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                
                <div class="row" style="margin-bottom: 5px;">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Photo</th>
                                                <th>Company</th>
                                                <th>State</th>
                                                <th>Address</th>
                                                <th>Contact Person</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($vendors as $key => $vendor)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>
                                                    @if($vendor->image != null)
                                                    <img src="{{asset('public/images/users/'.$vendor->image)}}" alt="vendor" class="img-circle"/>
                                                    @endif
                                                    @if($vendor->image == null)
                                                    <img src="{{asset('public/images/no-image.jpeg')}}" alt="vendor" class="img-circle"/>
                                                    @endif
                                                </td>
                                                <td>{{$vendor->brand_name}}</td>
                                                <td>{{$vendor->state}}</td>
                                                <td>{{$vendor->address}}</td>
                                                <td>{{$vendor->name}}</td>
                                                <td>{{$vendor->email}}</td>
                                                <td>{{$vendor->phone}}</td>'
                                                @if($vendor->user_status == 1)
                                                <td><span class="label label-success">Activated</span></td>
                                                @endif
                                                @if($vendor->user_status == 2)
                                                <td><span class="label label-danger">Deactivated</span></td>
                                                @endif
                                                <td class="d-flex">
                                                    <button><a href="{{url('admin/vendor_card_details/'.$vendor->id)}}"><i class="fa fa-binoculars"></i></a></button>
                                                    @if($vendor->user_status == 1)
                                                    <button><a href="{{url('vendor/deactivate_vendor/'.$vendor->user_id)}}"> <i class="fa fa-close"></i></a></button> 
                                                    @endif
                                                    @if($vendor->user_status == 2)
                                                    <button><a href="{{url('vendor/activate_vendor/'.$vendor->user_id)}}"> <i class="fa fa-check-circle"></i></a></button> 
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>        
                            </div>
                        </div>        
                    </div>        
                </div>
                <!-- ============================================================== -->
                <!-- End Campaign -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Info box -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Today's Schedule and sales overview -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green" id="myGreen" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                        </div>    
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->

       
        @include("includes.footer")
        <script>
            $("#myGreen").click();

        </script>    