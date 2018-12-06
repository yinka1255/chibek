<!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                @if($loggedInUser->image == null)
                                <img class="avatar" src="{{asset('public/images/users/no-image.png')}}">
                                @endif
                                @if($loggedInUser->image != null)
                                <img class="avatar" src="{{asset('public/images/users/'.$loggedInUser->image)}}">
                                @endif
                            <span class="hide-menu">{{$loggedInUser->name}}</span>
                        </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{url('admin/profile')}}"><i class="ti-user"></i> My Profile</a></li>
                                <li><a href="{{url('logout')}}" ><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                        
                       {{--
                        <li> <a class="waves-effect waves-dark" href="{{url('admin/dashboard')}}"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a></li>
                        --}}
                        <li> <a class="waves-effect waves-dark" href="{{url('admin/feeds')}}"><i  class="fa fa-bookmark"></i><span class="hide-menu">Feeds</span></a></li>
                        {{--
                        <li> <a class="waves-effect waves-dark" href="{{url('admin/customers')}}" aria-expanded="false"><i class="fa fa-group"></i><span class="hide-menu">Customers</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="{{url('admin/admins')}}" aria-expanded="false"><i class="fa fa-group"></i><span class="hide-menu">Admin Users</span></a></li>
                        --}}
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->