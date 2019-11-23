          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">

            <li class="header">MAIN NAVIGATION</li>

            <!-- Dashboard -->
            <!-- standard -->
            <?php 
              $menu_data = [
                'menu_name' => 'Dashboard',
                'menu_icon' => 'fa fa-dashboard'
              ];

              $this->load->view('admin/template/left_column/components/sidebar-menu/standard', $menu_data); 
            ?>

            <!-- Profile -->
            <!-- dropdown --> 
            <?php

              $menu_data = [
                'menu_name' => 'Profile',
                'menu_icon' => 'fa fa-user',
                'sub_menu' => array(
                  [
                    'link' => '#',
                    'name' => 'View Profile',
                    'icon' => 'fa fa-male'
                  ],
                  [
                    'link' => '#',
                    'name' => 'Update Profile',
                    'icon' => 'fa fa-pencil-square-o'
                  ],
                  [
                    'link' => '#',
                    'name' => 'Security and Password',
                    'icon' => 'fa fa-wrench'
                  ],
                  [
                    'link' => '#',
                    'name' => 'Log Out',
                    'icon' => 'fa fa-sign-out'
                  ]  
                )
              ];

              $this->load->view('admin/template/left_column/components/sidebar-menu/dropdown', $menu_data); 
            
            ?>

            <!-- Post -->
            <!-- dropdown --> 
            <?php

              $menu_data = [
                'menu_name' => 'Posts',
                'menu_icon' => 'fa fa-clipboard',
                'sub_menu' => array(
                  [
                    'link' => '#',
                    'name' => 'View Posts',
                    'icon' => 'fa fa-file-powerpoint-o'
                  ],
                  [
                    'link' => '#',
                    'name' => 'Create New Posts',
                    'icon' => 'fa fa-plus-square'
                  ],
                  [
                    'link' => '#',
                    'name' => 'Update Posts',
                    'icon' => 'fa fa-pencil-square-o'
                  ],
                  [
                    'link' => '#',
                    'name' => 'Search Posts',
                    'icon' => 'fa fa-search'
                  ],
                  [
                    'link' => '#',
                    'name' => 'Delete Posts',
                    'icon' => 'fa fa-trash'
                  ]  
                )
              ];

              $this->load->view('admin/template/left_column/components/sidebar-menu/dropdown', $menu_data); 
            
            ?>

            <!-- Users -->
            <!-- dropdown --> 
            <?php

              $menu_data = [
                'menu_name' => 'Users',
                'menu_icon' => 'fa fa-users',
                'sub_menu' => array(
                  [
                    'link' => '#',
                    'name' => 'Manage Users',
                    'icon' => 'fa fa-male'
                  ],
                  [
                    'link' => '#',
                    'name' => 'Add User',
                    'icon' => 'fa fa-user-plus'
                  ],
                  [
                    'link' => '#',
                    'name' => 'Update User',
                    'icon' => 'fa fa-pencil-square-o'
                  ],
                  [
                    'link' => '#',
                    'name' => 'Search User',
                    'icon' => 'fa fa-search'
                  ],
                  [
                    'link' => '#',
                    'name' => 'Delete User',
                    'icon' => 'fa fa-trash'
                  ]  
                )
              ];

              $this->load->view('admin/template/left_column/components/sidebar-menu/dropdown', $menu_data); 
            
            ?>


            <li class="header">IMPORTANT</li>

            <!-- Mail -->
            <!-- dropdown-widget -->
            <?php 

              $menu_data = [
                'menu_number' => 12,
                'menu_name' => 'Mailbox',
                'menu_icon' => 'fa fa-envelope',
                'sub_menu' => array(
                  [
                    'menu_number' => 12,
                    'link' => '#',
                    'name' => 'Inbox',
                    'icon' => 'fa fa-inbox'
                  ],
                  [
                    'menu_number' => 12,
                    'link' => '#',
                    'name' => 'Sent',
                    'icon' => 'fa fa-paper-plane'
                  ],
                  [
                    'menu_number' => 12,
                    'link' => '#',
                    'name' => 'Drafts',
                    'icon' => 'fa fa-file'
                  ],
                  [
                    'menu_number' => '',
                    'link' => '#',
                    'name' => 'Trash',
                    'icon' => 'fa fa-trash'
                  ]  
                )
              ];
            
              $this->load->view('admin/template/left_column/components/sidebar-menu/dropdown-widget', $menu_data); 
              
            ?>

            <!-- Chat -->
            <!-- standard -->
            <?php 
              $menu_data = [
                'menu_name' => 'Chat',
                'menu_icon' => 'fa fa-comment'
              ];

              $this->load->view('admin/template/left_column/components/sidebar-menu/standard', $menu_data); 
            ?>

            <!-- Notification -->
            <!-- standard -->
            <?php 
              $menu_data = [
                'menu_name' => 'Notification',
                'menu_icon' => 'fa fa-bell'
              ];

              $this->load->view('admin/template/left_column/components/sidebar-menu/standard', $menu_data); 
            ?>

            <!-- Task -->
            <!-- standard -->
            <?php 
              $menu_data = [
                'menu_name' => 'Task',
                'menu_icon' => 'fa fa-flag'
              ];

              $this->load->view('admin/template/left_column/components/sidebar-menu/standard', $menu_data); 
            ?>


            <li class="header">PAGES</li>

            <!-- Home -->
            <!-- standard -->
            <?php 
              $menu_data = [
                'menu_name' => 'Home',
                'menu_icon' => 'fa fa-home'
              ];

              $this->load->view('admin/template/left_column/components/sidebar-menu/standard', $menu_data); 
            ?>


            <!-- Article -->
            <!-- standard -->
            <?php 
              $menu_data = [
                'menu_name' => 'Article',
                'menu_icon' => 'fa fa-pencil-square-o'
              ];

              $this->load->view('admin/template/left_column/components/sidebar-menu/standard', $menu_data); 
            ?>

            
            <!-- Dining -->
            <!-- standard -->
            <?php 
              $menu_data = [
                'menu_name' => 'Dining',
                'menu_icon' => 'fa fa-building'
              ];

              $this->load->view('admin/template/left_column/components/sidebar-menu/standard', $menu_data); 
            ?>

            <!-- Events -->
            <!-- standard -->
            <?php 
              $menu_data = [
                'menu_name' => 'Events',
                'menu_icon' => 'fa fa-file'
              ];

              $this->load->view('admin/template/left_column/components/sidebar-menu/standard', $menu_data); 
            ?>

            <!-- About -->
            <!-- standard -->
            <?php 
              $menu_data = [
                'menu_name' => 'About',
                'menu_icon' => 'fa fa-info-circle'
              ];

              $this->load->view('admin/template/left_column/components/sidebar-menu/standard', $menu_data); 
            ?>

            
  

            

            <!-- multi-level -->
            <?php //$this->load->view('admin/template/left_column/components/sidebar-menu/multi-level'); ?>

            
            <!-- Labels -->
            <!-- <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-danger"></i> Important</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-warning"></i> Warning</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-info"></i> Information</a></li> -->
          </ul>