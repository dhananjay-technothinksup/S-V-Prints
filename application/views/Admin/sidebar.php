<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo base_url(); ?>Admin/dashboard" class="brand-link">
    <!-- <img src="" alt="" class="brand-image img-circle elevation-3"
         style="opacity: .8"> -->
    <span class="brand-text font-weight-light">S V Prints</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

      <div class="info">
        <a href="#" class="d-block">Admin</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>Admin/dashboard" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Admin/company_information" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Company Information
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Admin/party_information_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Party Information
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Admin/add_user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    User Information
                  </p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Transaction
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">

                <!-- <li class="nav-item">
                  <a href="<?php echo base_url(); ?>Transactional/delivery_challan" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                    Delivery Challan Information
                    </p>
                  </a>
                </li> -->
                <li class="nav-item">
                  <a href="<?php echo base_url(); ?>Transactional/delivery_challan_list" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                    Delivery Challan List
                    </p>
                  </a>
                </li>

                <!-- <li class="nav-item">
                  <a href="<?php echo base_url(); ?>Transactional/sale_bill" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                  Sale Bill
                    </p>
                  </a>
                </li> -->

                <li class="nav-item">
                  <a href="<?php echo base_url(); ?>Transactional/sale_bill_list" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                  Sale Bill List
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url(); ?>Transactional/sale_invoice_receipt" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                  Sale Bill print
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo base_url(); ?>Transactional/delivery_challan_receipt" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                  D C  print
                    </p>
                  </a>
                </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
