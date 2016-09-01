          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>BLOG</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              {!! HTML::image('images/user.png', 'logo', ['class' => 'img-circle profile_img']) !!}
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>{{ \Auth::user()->name }}</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

                   <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="/admin/articles"><i class="fa fa-newspaper-o"></i> Article</a></li>
                <li><a href="/admin/category"><i class="fa fa-files-o"></i> Categories</a></li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->