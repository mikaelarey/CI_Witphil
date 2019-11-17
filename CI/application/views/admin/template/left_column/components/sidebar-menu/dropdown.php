            <!-- Dropdown -->
            <li class="treeview">
              <a href="#">
                <i class="<?php echo $menu_icon; ?>"></i>
                <span><?php echo $menu_name; ?></span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <?php foreach ($sub_menu as $menu): ?>
                    <li><a href="<?php echo $menu['link'];?>">
                        <i class="<?php echo $menu['icon'];?>"></i> <?php echo $menu['name'];?></a></li>
                <?php endforeach; ?>
                <!-- 
                    <li><a href="#"><i class="fa fa-circle-o"></i> Morris</a></li>
                -->
              </ul>
            </li>