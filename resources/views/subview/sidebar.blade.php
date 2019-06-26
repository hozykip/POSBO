<ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="orders">
          <i class="fas fa-fw fa-list"></i>
          <span>Orders</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-th"></i>
          <span>Inventory</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <!-- <h6 class="dropdown-header">Login Screens:</h6> -->
          <a class="dropdown-item" href="login.html">Departments</a>
          <a class="dropdown-item" href="register.html">Categories</a>
          <a class="dropdown-item" href="products">Products</a>
          <a class="dropdown-item" href="forgot-password.html">PO Receiving</a>
          <a class="dropdown-item" href="404.html">Inventory adjustment</a>
        </div>
      </li>      
      <li class="nav-item">
        <a class="nav-link" href="customers">
          <i class="fas fa-fw fa-users"></i>
          <span>Customers</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vendors">
        <i class="fas fa-fw fa-truck-moving"></i>
          <span>Vendors</span></a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Employees</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="employees">Employee list</a>
            <a class="dropdown-item" href="register.html">Permissions</a>
            <a class="dropdown-item" href="register.html">Time clock</a>
          </div>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-chart-area"></i>
            <span>Reporting</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown" style="overflow-x: auto;">
            <a class="dropdown-item" href="login.html">Adjustment Report</a>
            <a class="dropdown-item" href="register.html">Inventory Aging</a>
            <a class="dropdown-item" href="register.html">PO Receiving Report</a>
            <a class="dropdown-item" href="register.html">Product Mix Report</a>
            <a class="dropdown-item" href="register.html">Serial Item Tracking Report</a>
          </div>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-cog"></i>
            <span>Settings</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="login.html">Company settings</a>
            <a class="dropdown-item" href="register.html">Store settings</a>
            <a class="dropdown-item" href="register.html">Register settings</a>
          </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <!-- <i class="fas fa-fw fa-chart-area"></i> -->
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>
    </ul>
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">{{ isset($title) ? $title : 'Dashboard' }}</a>
          </li>
          <li class="breadcrumb-item active">{{ isset($subtitle) ? $subtitle : 'Overview' }}</li>
        </ol>