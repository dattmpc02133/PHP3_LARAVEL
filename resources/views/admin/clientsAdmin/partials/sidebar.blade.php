<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="index.html" class="site_title"><span>ADMIN</span></a>
      </div>
      <div class="clearfix"></div>
      <!-- menu profile quick info -->
      <div class="profile clearfix">
        <div class="profile_pic">
          <img src="{{asset('images')}}/img.jpg" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
          <span>Xin chào</span>
          <h2>Minh Đạt</h2>
        </div>
      </div>
      <!-- /menu profile quick info -->

      <br />

      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>Mục chung</h3>
          <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Trang chủ <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="index.html">Dashboard</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> Loại hàng <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ url('admin/category') }}">Danh sách loại hàng</a></li>
                <li><a href="{{ url('admin/category/add') }}">Thêm loại hàng</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> Hàng hóa <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ url('admin/product') }}">Danh sách hàng hóa</a></li>
                <li><a href="{{ url('admin/product/add') }}">Thêm hang hóa</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> Khách hàng <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="form.html">Danh sách hàng hóa</a></li>
                <li><a href="form_advanced.html">Thêm hang hóa</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> Đơn hàng <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="form.html">Danh sách hàng hóa</a></li>
                <li><a href="form_advanced.html">Thêm hang hóa</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> Khuyến mãi <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="form.html">Danh sách hàng hóa</a></li>
                <li><a href="form_advanced.html">Thêm hang hóa</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> Bình luận <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="form.html">Danh sách hàng hóa</a></li>
                <li><a href="form_advanced.html">Thêm hang hóa</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> Tin tức <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="form.html">Danh sách hàng hóa</a></li>
                <li><a href="form_advanced.html">Thêm hang hóa</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> Thống kê <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="form.html">Danh sách hàng hóa</a></li>
                <li><a href="form_advanced.html">Thêm hang hóa</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="tables.html">Tables</a></li>
                <li><a href="tables_dynamic.html">Table Dynamic</a></li>
              </ul>
            </li>
           
          </ul>
        </div>
        

      </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
      <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
          <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
          <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
      </div>
      <!-- /menu footer buttons -->
    </div>
</div>
<!-- top navigation -->
<div class="top_nav">
<div class="nav_menu">
    <div class="nav toggle">
      <a id="menu_toggle"><i class="fa fa-bars"></i></a>
    </div>
    <nav class="nav navbar-nav">
    <ul class=" navbar-right">
      <li class="nav-item dropdown open" style="padding-left: 15px;">
        <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
          <img src="{{asset('images')}}/img.jpg" alt="">John Doe
        </a>
        <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="javascript:;"> Profile</a>
            <a class="dropdown-item"  href="javascript:;">
              <span class="badge bg-red pull-right">50%</span>
              <span>Settings</span>
            </a>
        <a class="dropdown-item"  href="javascript:;">Help</a>
          <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
        </div>
      </li>

      <li role="presentation" class="nav-item dropdown open">
        <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-envelope-o"></i>
          <span class="badge bg-green">6</span>
        </a>
        <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
          <li class="nav-item">
            <a class="dropdown-item">
              <span class="image"><img src="{{asset('images')}}/img.jpg" alt="Profile Image" /></span>
              <span>
                <span>John Smith</span>
                <span class="time">3 mins ago</span>
              </span>
              <span class="message">
                Film festivals used to be do-or-die moments for movie makers. They were where...
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="dropdown-item">
              <span class="image"><img src="{{asset('images')}}/img.jpg" alt="Profile Image" /></span>
              <span>
                <span>John Smith</span>
                <span class="time">3 mins ago</span>
              </span>
              <span class="message">
                Film festivals used to be do-or-die moments for movie makers. They were where...
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="dropdown-item">
              <span class="image"><img src="{{asset('images')}}/img.jpg" alt="Profile Image" /></span>
              <span>
                <span>John Smith</span>
                <span class="time">3 mins ago</span>
              </span>
              <span class="message">
                Film festivals used to be do-or-die moments for movie makers. They were where...
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="dropdown-item">
              <span class="image"><img src="{{asset('images')}}/img.jpg" alt="Profile Image" /></span>
              <span>
                <span>John Smith</span>
                <span class="time">3 mins ago</span>
              </span>
              <span class="message">
                Film festivals used to be do-or-die moments for movie makers. They were where...
              </span>
            </a>
          </li>
          <li class="nav-item">
            <div class="text-center">
              <a class="dropdown-item">
                <strong>See All Alerts</strong>
                <i class="fa fa-angle-right"></i>
              </a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</div>
</div>