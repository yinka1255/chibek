@include("includes.header")
@include("includes.sidemenu")
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
                        <h4 class="text-themecolor">Feeds </h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active">Feeds </li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15" href="#" data-toggle="modal" data-target="#newFeed"><i class="fa fa-plus-circle"></i> Create New</button>
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
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Location</th>
                                                <th>Created</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($feeds as $key => $feed)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td><img src="{{asset('public/images/feeds/'.$feed->image)}}"  class="border" height="80px" width="auto"/></td>
                                                <td>{{$feed->title}}</td>
                                                <td>{{$feed->created_at}}</td>
                                                
                                                <td>
                                                    <button><a href="{{url('admin/feed_details/'.$feed->id)}}"> <i class="fa fa-binoculars"></i></a></button> 
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

       
        <div class="modal fade" id="newFeed" tabindex="-1" role="dialog" aria-labelledby="newFeed"
      aria-hidden="true" animate="animate" modal-animation="true">
          <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">
                        Create New Feed   
                      </h4>
                    </div>
                    <div class="modal-body modal-body-sub">
                        <form class="form-group" method="post"  enctype="multipart/form-data" action="{{url('admin/save_feed')}}">    
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <input type="text" name="title" placeholder="Title" class="form-control" required/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <textarea class="form-control textarea_editor" name="body" id="body" rows="3" placeholder="Type here..."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="product-img">
                                            <img src="{{asset('public/images/upload.png')}}" id="img" alt=""/>
                                    </div>    
                                    <button type="button" style="margin: auto;" class="btn btn-info d-none d-lg-block m-l-15 myButton" onclick="clickImageInput()">Upload Photo</button>
                                    <input type="file" style="visibility: hidden;" id="photo" name="photo" onchange="readNewFile(this)">
                                </div>    
                                <input type="submit" name="submit" class="action-button" value="Submit" />
                            </div>    
                        </form>    
                    </div>  
                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default d-none d-lg-block m-l-15 pull-right" data-dismiss="modal" aria-hidden="true">Close</button>
                    </div>
              </div>
          </div>      
        </div>   
        @include("includes.footer")
        <script src="{{asset('public/admin/node_modules/html5-editor/wysihtml5-0.3.0.js')}}"></script>
        <script src="{{asset('public/admin/node_modules/html5-editor/bootstrap-wysihtml5.js')}}"></script>
        <script>

            $(document).ready(function() {

                $('.textarea_editor').wysihtml5();


            });
            $("#myGreen").click();

            function clickImageInput(){
                $("#photo").click();
            }

            function readNewFile($event){
                if(event.target.files.length > 0) {
                    let file = event.target.files[0];
                    
                    var myReader = new FileReader();

                    myReader.onloadend = (e) => {
                        var img = myReader.result;
                        $("#img").attr('src',img);
                    }
                    myReader.readAsDataURL(file);
                }	
            }
            function getLgas(){
                console.log(document.getElementById('state').value);
                $('#lga').empty();
                    $.post("../get_lgas",
                    {
                        state: document.getElementById('state').value
                    },
                    function(data, status){
                        $('#lga').append('<option value="0">All</option>');
                    $.each(data.lgas, function(i, d) {
                        $('#lga').append('<option value="' + d.id + '">' + d.lga + '</option>');
                    });
                });
            }
        </script>    