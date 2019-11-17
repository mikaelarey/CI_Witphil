        <nav class="navbar navbar-static-top" role="navigation">

          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

              <!-- nav-message -->
              <?php $this->load->view('admin/template/header/components/nav/nav-message'); ?>

              <!-- nav-chat -->
              <?php $this->load->view('admin/template/header/components/nav/nav-chat'); ?>

              <!-- nav-notification -->
              <?php $this->load->view('admin/template/header/components/nav/nav-notification'); ?>

              <!-- nav-task -->
              <?php $this->load->view('admin/template/header/components/nav/nav-task'); ?>

              <!-- nav-user -->
              <?php $this->load->view('admin/template/header/components/nav/nav-user'); ?>
            
              
            </ul>

          </div>

        </nav>