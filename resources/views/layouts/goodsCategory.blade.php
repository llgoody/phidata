
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <title>Phidata</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
@yield('head')
<!-- BEGIN GLOBAL MANDATORY STYLES -->
    {{--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />--}}
    <link href="{{ URL::asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ URL::asset('assets/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{ URL::asset('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/css/light.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{ URL::asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }} " /> </head>
<!-- END HEAD -->
<script src="{{ URL::asset('assets/scripts/jquery.min.js') }}" type="text/javascript"></script>

<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="/">
                <img src="{{ URL::asset('assets/img/logo-light.png') }}" alt="logo" class="logo-default" /> </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
    </div>
    <div class="page-top">
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li class="separator hide"> </li>
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
            {{--@if(!(--}}
            {{--\Auth::admin()->guest()--}}
            {{--&& \Auth::agent()->guest()--}}
            {{--&& \Auth::recycler()->guest()--}}
            {{--&& \Auth::commonuser()->guest()--}}
            {{--))--}}
            {{--<li class="dropdown dropdown-user dropdown-dark">--}}
            {{--<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">--}}
            {{--<span class="username username-hide-on-mobile">--}}
            {{--@if(!(\Auth::admin()->guest()))--}}
            {{--{{ \Auth::admin()->get()->name }}--}}
            {{--@elseif(!(\Auth::agent()->guest()))--}}
            {{--{{ \Auth::agent()->get()->name }}--}}
            {{--@elseif(!(\Auth::recycler()->guest()))--}}
            {{--{{ \Auth::recycler()->get()->name }}--}}
            {{--@elseif(!(\Auth::commonuser()->guest()))--}}
            {{--{{ \Auth::commonuser()->get()->name }}--}}
            {{--@endif--}}
            {{--</span>--}}
            {{--<!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->--}}
            {{--<img alt="" class="img-circle" src="{{ URL::asset('assets/img/avatar9.jpg') }}" /> </a>--}}
            {{--<ul class="dropdown-menu dropdown-menu-default">--}}
            {{--<!-- <li>--}}
            {{--<a href="#">--}}
            {{--<i class="icon-user"></i> My Profile </a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="#">--}}
            {{--<i class="icon-calendar"></i> My Calendar </a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="#">--}}
            {{--<i class="icon-envelope-open"></i> My Inbox--}}
            {{--<span class="badge badge-danger"> 3 </span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="#">--}}
            {{--<i class="icon-rocket"></i> My Tasks--}}
            {{--<span class="badge badge-success"> 7 </span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li class="divider"> </li>--}}
            {{--<li>--}}
            {{--<a href="#">--}}
            {{--<i class="icon-lock"></i> Lock Screen </a>--}}
            {{--</li> -->--}}
            {{--<li>--}}

            {{--<a href="{{ URL('/auth/logout') }}">--}}

            {{--<i class="icon-logout"></i> 注销 </a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--@else--}}
            {{--<li class="dropdown dropdown-quick-sidebar-toggler">--}}
            {{--<a href="/auth/login" class="dropdown-toggle">--}}
            {{--<i class="icon-key"></i>登录/注册--}}
            {{--</a>--}}
            {{--</li>--}}

            {{--@endif--}}
            <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
            {{--<li class="dropdown dropdown-extended quick-sidebar-toggler">--}}
            {{--<span class="sr-only">Toggle Quick Sidebar</span>--}}
            {{--<i class="icon-logout"></i>--}}
            {{--</li>--}}
            <!-- END QUICK SIDEBAR TOGGLER -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->

    </div>
    <!-- END PAGE TOP -->
</div>
<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->


    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <li class="nav-item start {{ Request::segment(1) === 'statis' ? 'active' : null }}">
                    <a href="{{url('/statis')}}" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">商品分类</span>
                        <span class="selected"></span>
                    </a>
                </li>

                @foreach($categorys as $category)
                   <li class="nav-item  {{ (Request::segment(1) === 'user' || Request::segment(1) === 'permission' || Request::segment(1) === 'role') ? 'active' : null }}">
                      <a href="javascript:;" class="nav-link nav-toggle">
                            <span class="title">{{$category->name}}</span>
                      </a>
                  </li>
                @endforeach

            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEAD-->
            <div class="page-head">
                <!-- BEGIN PAGE TITLE -->
                <!-- END PAGE TITLE -->
                <!-- BEGIN PAGE TOOLBAR -->
                <!-- END PAGE TOOLBAR -->
                @yield('pageHead')
            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE BREADCRUMB -->
        {{--<ul class="page-breadcrumb breadcrumb">--}}
        {{--@yield('breadcrumbs')--}}
        {{--<!-- <li>--}}
        {{--<a href="#">Home</a>--}}
        {{--<i class="fa fa-circle"></i>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<span class="active">Dashboard</span>--}}
        {{--</li> -->--}}
        {{--</ul>--}}
        <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE BASE CONTENT -->
            <!-- BEGIN DASHBOARD STATS 1-->

            @include('common.errors')
            @include('common.info')
            @yield('content')
            <div class="row">
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner"> 2016 &copy; LL Good Y.
        <a href="" title="Phidata" target="_blank">Phidata!</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!--[if lt IE 9]>
<!--<script src="{{ URL::asset('assets/plugins/respond.min.js') }}"></script>-->
<!--<script src="{{ URL::asset('assets/plugins/excanvas.min.js') }}"></script>-->
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/scripts/js.cookie.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/scripts/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- <script src="{{ URL::asset('assets/plugins/moment.min.js') }}" type="text/javascript"></script> -->
<!-- <script src="{{ URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}" type="text/javascript"></script> -->
<!-- <script src="{{ URL::asset('assets/plugins/morris/morris.min.js') }}" type="text/javascript"></script> -->
<!-- <script src="{{ URL::asset('assets/plugins/morris/raphael-min.js') }}" type="text/javascript"></script> -->
<!-- <script src="{{ URL::asset('assets/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script> -->
<!-- <script src="{{ URL::asset('assets/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script> -->
<!-- <script src="{{ URL::asset('assets/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script> -->
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->

<script src="{{ URL::asset('assets/scripts/app.min.js') }}" type="text/javascript"></script>

<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{--        <script src="{{ URL::asset('assets/scripts/dashboard.min.js') }}" type="text/javascript"></script>--}}
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{ URL::asset('assets/scripts/layout.min.js') }}" type="text/javascript"></script>


{{--<script src="{{ URL::asset('assets/layouts/layout4/scripts/demo.min.js') }}" type="text/javascript"></script>--}}
<!-- END THEME LAYOUT SCRIPTS -->
<script src="{{ URL::asset('assets/scripts/select2.min.js') }}" type="text/javascript"></script>

</body>
<script>
    $(document).ready(function() {
        if($(".select2")){
            $(".select2").select2();
        }

    });
</script>
</html>