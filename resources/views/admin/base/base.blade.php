<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="format-detection" content="telephone=no">
        <meta charset="UTF-8">

        <meta name="description" content="Violate Responsive Admin Template">
        <meta name="keywords" content="Super Admin, Admin, Template, Bootstrap">

        <title>欢迎进入后台管理系统</title>
            
        <!-- CSS -->
        <link href="{{ asset ('admin/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset ('admin/css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset ('admin/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset ('admin/css/form.css') }}" rel="stylesheet">
        <link href="{{ asset ('admin/css/calendar.css') }}" rel="stylesheet">
        <link href="{{ asset ('admin/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset ('admin/css/icons.css') }}" rel="stylesheet">
        <link href="{{ asset ('admin/css/generics.css') }}" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="{{ asset ('css/bootstrap.min.css') }}">
        <script type="text/javascript">
                 //用户的删除
                function doDel(id){
                    // confirm():显示带有一段消息以及确认按钮和取消按钮的对话框;
                    if(confirm("确定要删除吗?")){
                        var form = document.myform;
                        form.action = '/admin/user/'+id;
                        form.submit();
                    }
                }
                // 导航条的删除
                function doDe(dd){
                    if(confirm("确定要删除吗?")){
                        var form = document.myfor;
                        form.action = '/plate/'+dd;
                        form.submit();
                    }

                }    
                function doD(dd){
                    if(confirm("确定要删除吗?")){
                        var form = document.myfo;
                        form.action = '/zizi/'+dd;
                        form.submit();
                    }
                }
                function doDD(dd){
                    if(confirm("确定要删除吗?")){
                        var form = document.myf;
                        form.action = '/shops/'+dd;
                        form.submit();
                    }
                }
                function dodf(dd){
                    if(confirm("确定要删除吗?")){
                        var form = document.qwer;
                        form.action = '/car/'+dd;
                        form.submit();
                    }
                }
                //订单
                function dan(dd){
                    if(confirm("确定要删除吗?")){
                        var form = document.ding;
                        form.action = '/admin/dingdan/'+dd;
                        form.submit();
                    }
                }              

                
                // 轮播图片的删除
                 function SC(tu){
                    if(confirm("确定要删除吗?")){
                        var form = document.mf;
                        form.action = '/admin/images/'+tu;
                        form.submit();
                    }
                } 
                // 友情链接的删除
                 function Del(sanc){
                    if(confirm("确定要删除吗?")){
                        var form = document.lj;
                        form.action = '/admin/blogroll/'+sanc;
                        form.submit();
                    }
                }        

        </script>
        <!-- <link rel="icon" type="text/css"> -->
    </head>
    <body id="skin-blur-violate">

        <header id="header" class="media">
            <a href="" id="menu-toggle"></a> 
            <a class="logo pull-left" href="index.html">SUPER ADMIN 1.0</a>
            
            <div class="media-body">
                <div class="media" id="top-menu">
                    <div class="pull-left tm-icon">
                        <a data-drawer="messages" class="drawer-toggle" href="">
                            <i class="sa-top-message"></i>
                            <i class="n-count animated">5</i>
                            <span>Messages</span>
                        </a>
                    </div>
                    <div class="pull-left tm-icon">
                        <a data-drawer="notifications" class="drawer-toggle" href="">
                            <i class="sa-top-updates"></i>
                            <i class="n-count animated">9</i>
                            <span>Updates</span>
                        </a>
                    </div>

                    <div id="time" class="pull-right">
                        <span id="hours"></span>
                        :
                        <span id="min"></span>
                        :
                        <span id="sec"></span>
                    </div>
                    
                    <div class="media-body">
                        <input type="text" class="main-search">
                    </div>
                </div>
            </div>
        </header>
        
        <div class="clearfix"></div>
        
        <section id="main" class="p-relative" role="main">
            
            <!-- Sidebar -->
            <aside id="sidebar">
                
                <!-- Sidbar Widgets -->
                <div class="side-widgets overflow">
                    <!-- Profile Menu -->
                    <div class="text-center s-widget m-b-25 dropdown" id="profile-menu">
                        <a href="" data-toggle="dropdown">
                            <!-- 用户的头像 -->
                          <img class="profile-pic animated" src="{{ asset('admin/img/profile-pic.jpg')}}" alt="">
                            
                        </a>
                        <ul class="dropdown-menu profile-menu">
                            <li><a href="">My Profile</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="">Messages</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="">Settings</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="{{ URL('admin/logout') }}">退出</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                        </ul>
                        <h4 class="m-0">你好:{{ session("adminuser")->name}}</h4>
                        管理员
                    </div>
                    
                    <!-- Calendar -->
                    <div class="s-widget m-b-25">
                        <div id="sidebar-calendar"></div>
                    </div>
                    
                    <!-- Feeds -->
                    <div class="s-widget m-b-25">
                        <h2 class="tile-title">
                           News Feeds
                        </h2>
                        
                        <div class="s-widget-body">
                            <div id="news-feed"></div>
                        </div>
                    </div>
                    
                    <!-- Projects -->
                    <div class="s-widget m-b-25">
                        <h2 class="tile-title">
                            Projects on going
                        </h2>
                        
                        <div class="s-widget-body">
                            <div class="side-border">
                                <small>Joomla Website</small>
                                <div class="progress progress-small">
                                     <a href="#" data-toggle="tooltip" title="" class="progress-bar tooltips progress-bar-danger" style="width: 60%;" data-original-title="60%">
                                          <span class="sr-only">60% Complete</span>
                                     </a>
                                </div>
                            </div>
                            <div class="side-border">
                                <small>Opencart E-Commerce Website</small>
                                <div class="progress progress-small">
                                     <a href="#" data-toggle="tooltip" title="" class="tooltips progress-bar progress-bar-info" style="width: 43%;" data-original-title="43%">
                                          <span class="sr-only">43% Complete</span>
                                     </a>
                                </div>
                            </div>
                            <div class="side-border">
                                <small>Social Media API</small>
                                <div class="progress progress-small">
                                     <a href="#" data-toggle="tooltip" title="" class="tooltips progress-bar progress-bar-warning" style="width: 81%;" data-original-title="81%">
                                          <span class="sr-only">81% Complete</span>
                                     </a>
                                </div>
                            </div>
                            <div class="side-border">
                                <small>VB.Net Software Package</small>
                                <div class="progress progress-small">
                                     <a href="#" data-toggle="tooltip" title="" class="tooltips progress-bar progress-bar-success" style="width: 10%;" data-original-title="10%">
                                          <span class="sr-only">10% Complete</span>
                                     </a>
                                </div>
                            </div>
                            <div class="side-border">
                                <small>Chrome Extension</small>
                                <div class="progress progress-small">
                                     <a href="#" data-toggle="tooltip" title="" class="tooltips progress-bar progress-bar-success" style="width: 95%;" data-original-title="95%">
                                          <span class="sr-only">95% Complete</span>
                                     </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side Menu -->
                <ul class="list-unstyled side-menu">
                    <li class="active">
                        <!--用户信息的页面-->
                        <a class="sa-side-home" href="/xianshi">
                            <span class="menu-item">显示用户信息</span>
                        </a>
                    </li>
                    <li>
                        <a class="sa-side-typography" href="/tianjia">
                            <span class="menu-item">用户添加</span>
                        </a>
                    </li>

                    <li>
                        <a class="sa-side-widget" href="/platee">
                            <span class="menu-item">导航板块</span>
                        </a>
                    </li>
                    <li>
                        <a class="sa-side-table" href="/childPlate">
                            <span class="menu-item">添加子版块</span>
                        </a>
                    </li>
                    <li>
                        <a class="sa-side-table" href="/shop">
                            <span class="menu-item">商品信息</span>
                        </a>
                    </li>
                    <!-- 图片轮播显示的后台页面,然后管理前台图片的轮播-->
                    <li>
                        <a class="sa-side-typography" href="/lunbo">
                            <span class="menu-item">图片轮播管理</span>
                        </a>
                    </li>
                    <li>
                        <a class="sa-side-chart" href="/admin/car">
                            <span class="menu-item">购物车</span>
                        </a>
                    </li>
                    <li>
                        <a class="sa-side-folder" href="/admin/buy">
                            <span class="menu-item">订单管理</span>
                        </a>
                    </li>
                    <li>
                        <a class="sa-side-calendar" href="/admin/pinglun">
                            <span class="menu-item">回复评论</span>
                        </a>
                    </li>
                    <!--后台的友情链接然后在前台进行遍历 -->
                    <li>
                        <a class="sa-side-calendar" href="/yq">
                            <span class="menu-item">友情链接</span>
                        </a>
                    </li>
                    <!-- 进入网站开关的页面 -->
                    <li>
                        <a class="sa-side-calendar" href="/pz">
                            <span class="menu-item">网站开关</span>
                        </a>
                    </li>

                </ul>

            </aside>
        
            <!-- Content -->
            <!-- {block name='content'}{/block} -->
            @yield('content')

            <!-- Older IE Message -->
            <!--[if lt IE 9]>
                <div class="ie-block">
                    <h1 class="Ops">Ooops!</h1>
                    <p>You are using an outdated version of Internet Explorer, upgrade to any of the following web browser in order to access the maximum functionality of this website. </p>
                    <ul class="browsers">
                        <li>
                            <a href="https://www.google.com/intl/en/chrome/browser/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Google Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Mozilla Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com/computer/windows">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://safari.en.softonic.com/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/downloads/ie-10/worldwide-languages">
                                <img src="img/browsers/ie.png" alt="">
                                <div>Internet Explorer(New)</div>
                            </a>
                        </li>
                    </ul>
                    <p>Upgrade your browser for a Safer and Faster web experience. <br/>Thank you for your patience...</p>
                </div>   
            <![endif]-->
        
         
        <!-- Javascript Libraries -->
        <!-- jQuery -->
        <script src="{{ asset ('admin/js/jquery.min.js') }}"></script> <!-- jQuery Library -->
        <script src="{{ asset ('admin/js/jquery-ui.min.js') }}"></script> <!-- jQuery UI -->
        <script src="{{ asset ('admin/js/jquery.easing.1.3.js') }}"></script> <!-- jQuery Easing - Requirred for Lightbox + Pie Charts-->

        <!-- Bootstrap -->
        <script src="{{ asset ('admin/js/bootstrap.min.js') }}"></script>

        <!-- Charts -->
        <script src="{{ asset ('admin/js/charts/jquery.flot.js') }}"></script> <!-- Flot Main -->
        <script src="{{ asset ('admin/js/charts/jquery.flot.time.js') }}"></script> <!-- Flot sub -->
        <script src="{{ asset ('admin/js/charts/jquery.flot.animator.min.js') }}"></script> <!-- Flot sub -->
        <script src="{{ asset ('admin/js/charts/jquery.flot.resize.min.js') }}"></script> <!-- Flot sub - for repaint when resizing the screen -->

        <script src="{{ asset ('admin/js/sparkline.miFn.js') }}"></script> <!-- Sparkline - Tiny charts -->
        <script src="{{ asset ('admin/js/easypiechart.js') }}"></script> <!-- EasyPieChart - Animated Pie Charts -->
        <script src="{{ asset ('admin/js/charts.js') }}"></script> <!-- All the above chart related functions -->

        <!-- Map -->
        <script src="{{ asset ('admin/js/maps/jvectormap.min.js') }}"></script> <!-- jVectorMap main library -->
        <script src="{{ asset ('admin/js/maps/usa.js') }}"></script> <!-- USA Map for jVectorMap -->

        <!--  Form Related -->
        <script src="{{ asset ('admin/js/select.min.js') }}"></script> <!-- Custom Select -->
        <script src="{{ asset ('admin/js/icheck.js') }}"></script> <!-- Custom Checkbox + Radio -->
        <script src="{{ asset ('admin/js/fileupload.min.js') }}"></script> <!-- File Upload -->
        <script src="{{ asset ('admin/js/autosize.min.js') }}"></script> <!-- Textare autosize -->

        <!-- UX -->
        <script src="{{ asset ('admin/js/scroll.min.js') }}"></script> <!-- Custom Scrollbar -->

        <!-- Other -->
        <script src="{{ asset ('admin/js/calendar.min.js') }}"></script> <!-- Calendar -->
        <script src="{{ asset ('admin/js/feeds.min.js') }}"></script> <!-- News Feeds -->
        

        <!-- All JS functions -->
        <script src="{{ asset ('admin/js/functions.js') }}"></script>
    </body>
</html>
