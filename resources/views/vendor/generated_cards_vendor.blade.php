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
                        <h4 class="text-themecolor">Generated Cards </h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{url('admin/vendors')}}">Vendors</a></li>
                                <li class="breadcrumb-item">Vendor Card Details</li>
                                <li class="breadcrumb-item active">Cards generated for vendor </li>
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
                
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="">{{$generated_cards[0]->unit}} Units</h3>
                                <h6 class="card-subtitle">Amount: <span style="color:#00c292">N{{$generated_cards[0]->amount}}</span></h6>
                                <h6 class="card-subtitle">Quantity: <span style="color:#00c292">{{$generated_cards[0]->quantity}}</span></h6>
                                <h6 class="card-subtitle">Total: <span style="color:#00c292">N{{$generated_cards[0]->amount * $generated_cards[0]->quantity}}</span></h6>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="white-box text-center"> 
                                                @if($generated_cards[0]->image != null)
                                                <img src="{{asset('public/images/cards/'.$generated_cards[0]->image)}}"  class="img-responsive" alt="card 100 unit"/>
                                                @endif
                                                @if($generated_cards[0]->image == null)
                                                <img src="{{asset('public/images/no-image.jpeg')}}" alt="card" class="img-responsive"/>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-6">
                                        
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <h3 class="box-title m-t-40">Generated Cards</h3>
                                        <div class="table-responsive">
                                            <table class="table" id="example23" >
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Company</th>
                                                        <th>Unit</th>
                                                        <th>Amount</th>
                                                        <th>Pin</th>
                                                        <th>Serial Number</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($generated_cards as $key => $generated_card)
                                                    <tr>
                                                        <td>{{$key + 1}}</td>
                                                        <td>{{$generated_card->brand_name}}</td>
                                                        <td>{{$generated_card->unit}}</td>
                                                        <td>{{$generated_card->amount}}</td>
                                                        <td>{{$generated_card->pin}}</td>
                                                        <td>{{$generated_card->serial_number}}</td>
                                                        @if($generated_card->status == 1)
                                                        <td><span class="label label-info">New</span></td>
                                                        @endif
                                                        @if($generated_card->status == 2)
                                                        <td><span class="label label-success">Unused</span></td>
                                                        @endif
                                                        
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>            
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    
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
        <script src="{{asset('public/admin/node_modules/datatables/jquery.dataTables.min.js')}}"></script>
        <!-- start - This is for export functionality only -->
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
       
       <script>
            $("#myGreen").click();

            function clickImageInput(){
                $("#photo").click();
            }
            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            
        </script>    