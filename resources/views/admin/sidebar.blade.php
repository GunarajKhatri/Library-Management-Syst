<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('panel/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Gunaraj Khatri</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="/project/public/admin/home"><i class="fa fa-circle-o"></i>Home</a></li>
            <li><a href='{{route("category.create")}}'>
              <i class="fa fa-circle-o"></i>Add Category</a></li>
            <li><a href='{{route("category.index")}}'><i class="fa fa-circle-o"></i> Manage Category</a></li>
            <li><a href='{{route("book.create")}}'><i class="fa fa-circle-o"></i> Add Books</a></li>
            <li><a href='{{route("book.index")}}'><i class="fa fa-circle-o"></i> Manage Books</a></li>
            <li><a href='{{route("issuebook.create")}}'><i class="fa fa-circle-o"></i> Issue Books</a></li>
            <li><a href='{{route("issuebook.index")}}'><i class="fa fa-circle-o"></i> Manage IssuedBooks</a></li>
            <li><a href='{{route("panel.create")}}'><i class="fa fa-circle-o"></i> Add Admins</a></li>
            <li><a href='{{route("panel.index")}}'><i class="fa fa-circle-o"></i> Manage Admins</a></li>
            <li><a href='{{route("std.show")}}'><i class="fa fa-circle-o"></i>Students</a></li>
          </ul>
        </li>
        
              
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>