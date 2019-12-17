<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Code Aider</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class=""><a href="{!! url('/dashboard') !!}"><i class="fa fa-circle-o"></i> Dashboard </a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>Books</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{!! url('/new_book') !!}"><i class="fa fa-circle-o"></i> Add Books</a></li>
                    <li><a href="{!! url('/search_book') !!}"><i class="fa fa-circle-o"></i> Search Books</a></li>
                    <li><a href="{!! url('/details_book') !!}"><i class="fa fa-circle-o"></i> Details</a></li>
                </ul>
            </li>
           
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Book Lending</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{!! url('/issue_book') !!}"><i class="fa fa-circle-o"></i>Issue Books</a></li>
                    <li><a href="{!! url('/return_book') !!}"><i class="fa fa-circle-o"></i> Retun Books</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Members</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{!! url('/new_member') !!}"><i class="fa fa-circle-o"></i>New Member</a></li>
                    <li><a href="{!! url('/search_member') !!}"><i class="fa fa-circle-o"></i> Search Menber</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Member Account</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Support</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Books Category</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Members Category</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Barcode Genarete</a></li>
                    <li><a href="{!! url('importExportView') !!}"><i class="fa fa-circle-o"></i> Import And Export</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Reports</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Book Lending Report</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Books Details Report</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Books Summary Report</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Members Details Report</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Members Summary Report</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Fine Report</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> User Details Report</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Users</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{!! url('/new_user') !!}"><i class="fa fa-circle-o"></i> Register User</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> User Accounts</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> User Management</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> Settings </a>
            </li>
            
            <li>
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
                </a>
            </li>
            


        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li><a href="#"><i class="fa fa-sign-out text-red"></i> <span>LogOut</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>