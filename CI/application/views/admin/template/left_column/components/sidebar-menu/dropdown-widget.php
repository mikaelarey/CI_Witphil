            <!-- Dropdown with widget-->
            <li class="treeview">
              <a href="#">
                <i class="<?php echo $menu_icon; ?>"></i>
                <span><?php echo $menu_name; ?></span>
                <span class="label label-danger pull-right"><?php echo $menu_number; ?></span>
              </a>
              <ul class="treeview-menu">
                <?php foreach($sub_menu as $menu):?>
                    <li><a href="<?php echo $menu['link'];?>">
                    <i class="<?php echo $menu['icon'];?>"></i> <?php echo $menu['name'];?>
                    <span class="label label-danger pull-right"><?php echo $menu['menu_number'];?></span>
                    </a></li>
                <?php endforeach; ?>
              </ul>
            </li>