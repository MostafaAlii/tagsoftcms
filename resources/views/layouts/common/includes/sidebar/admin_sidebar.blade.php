<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- Start Dashboard Link -->
                    <li>
                        <a href="{{route('admin.dashboard')}}">
                            <div class="pull-left">
                                <i class="ti-home"></i>
                                <span class="right-nav-text">Dashboard</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <!-- End Dashboard Link -->
                    <!-- Start Main Settings -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#settings">
                            <div class="pull-left"><i class="ti-panel"></i>
                                <span class="right-nav-text">Main-Settings</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="settings" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{--route('mainSettings.index')--}}">Main Settings</a></li>
                        </ul>
                    </li>
                    <!-- Start Main Settings -->
                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!-- ================================= -->
    </div>
</div>