          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">

            <li class="header">MAIN NAVIGATION</li>

            <!-- standard -->
            <?php $this->load->view('admin/template/left_column/components/sidebar-menu/standard'); ?>
            
            <!-- dropdown-widget -->
            <?php $this->load->view('admin/template/left_column/components/sidebar-menu/dropdown-widget'); ?>

            <!-- dropdown --> 
            <?php $this->load->view('admin/template/left_column/components/sidebar-menu/dropdown'); ?>

            <!-- multi-level -->
            <?php $this->load->view('admin/template/left_column/components/sidebar-menu/multi-level'); ?>

            

            

            
            
            <!-- Labels -->
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-danger"></i> Important</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-warning"></i> Warning</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-info"></i> Information</a></li>
          </ul>