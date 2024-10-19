<?php 

require 'lang.php';

?>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="dropdown">
   	<a href="./" class="brand-link">
        <h3 class="text-center p-0 m-0"><b><?= __('Admin Dashbord')?></b></h3>

    </a>
      
    </div>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
         <li class="nav-item dropdown">
            <a href="./" class="nav-link nav-home">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               <?= __('Dashbord')?>
              </p>
            </a>
          </li>
		  
		  <li class="nav-item">
            <a href="#" class="nav-link nav-edit_">
               <i class="nav-icon fas fa-list-alt"></i>
              <p>
                <?= __('Language')?>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./?lang=en" class="nav-link nav-new_ tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('English')?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./?lang=or" class="nav-link nav-_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('Oromiffa')?></p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="./?lang=am" class="nav-link nav-new_ tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('አማርኛ')?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./?lang=ha" class="nav-link nav-_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('ሀረሪ')?></p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item">
            <a href="#" class="nav-link nav-edit_faculty">
             <i class="nav-icon fas fa-list-alt"></i>
              <p>
                <?= __('Plan')?>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=planingD" class="nav-link nav-new_ tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('plan D')?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=planingC" class="nav-link nav-_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('plan C')?></p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="./index.php?page=planingA" class="nav-link nav-new_ tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('plan A')?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=planingS" class="nav-link nav-_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('plan S')?></p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item">
            <a href="#" class="nav-link nav-edit_faculty">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                <?= __('Report')?>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_" class="nav-link nav-new_ tree-item">
            <a href="#" class="nav-link nav-edit_">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                <?= __('Quarter One Report')?>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=Qone_reportingd" class="nav-link nav-new_ tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('Qone Report D')?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=Qone_reportingc" class="nav-link nav-_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('Qone Report C')?></p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="./index.php?page=Qone_reportingA" class="nav-link nav-new_ tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('Qone Report A')?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=Qone_reportingS" class="nav-link nav-_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('Qone Report S')?></p>
                </a>
              </li>
            </ul>
          </li>

                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link nav-_list tree-item">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                <?= __('Quarter Two Report')?>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=Qtwo_reportingd" class="nav-link nav-new_ tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('Qtwo Report D')?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=Qtwo_reportingc" class="nav-link nav-_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('Qtwo Report C')?></p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="./index.php?page=Qtwo_reportingA" class="nav-link nav-new_ tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('Qtwo Report A')?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=Qtwo_reportingA" class="nav-link nav-_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('Qtwo Report S')?></p>
                </a>
              </li>
            </ul>
          </li>

                </a>
              </li>
			  <li class="nav-item">
                <a href="#" class="nav-link nav-new_ tree-item">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                <?= __('Quarter Three Report')?>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=Qthree_reportingd" class="nav-link nav-new_ tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('Qthree Report D')?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=Qthree_reportingc" class="nav-link nav-_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('Qthree Report C')?></p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="./index.php?page=Qthree_reportingA" class="nav-link nav-new_ tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('Qthree Report A')?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=Qthree_reportingA" class="nav-link nav-_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('Qthree Report S')?></p>
                </a>
              </li>
            </ul>
          </li>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link nav-_list tree-item">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                <?= __('Quarter Four Report')?>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=Qfour_reportingd" class="nav-link nav-new_ tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('Qfour Report D')?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=Qfour_reportingc" class="nav-link nav-_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('Qfour Report C')?></p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="./index.php?page=Qfour_reportingA" class="nav-link nav-new_ tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('Qfour Report A')?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=Qfour_reportingA" class="nav-link nav-_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('Qfour Report S')?></p>
                </a>
              </li>
            </ul>
          </li>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item">
            <a href="#" class="nav-link nav-edit_faculty">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                <?= __('approval')?>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_approval" class="nav-link nav-new_approval tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('Add New')?></p></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=approval_list" class="nav-link nav-approval_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('List')?></p></p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_student">
              <i class="nav-icon fa ion-ios-people-outline"></i>
              <p>
                 <?= __('Experts')?>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_Experts" class="nav-link nav-new_Experts tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('Add New')?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=Experts_list" class="nav-link nav-Experts_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('List')?></p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_user">
              <i class="nav-icon fas fa-users"></i>
              <p>
                <?= __('Users')?>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_user" class="nav-link nav-new_user tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('Add New')?></p></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=user_list" class="nav-link nav-user_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('List')?></p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item">
            <a href="#" class="nav-link nav-edit_">
               <i class="nav-icon fas fa-cog"></i>
              <p>
                <?= __('Settings')?>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link nav-new_ tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('library')?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link nav-_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('categorie')?></p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link nav-new_ tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p><?= __('About us')?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link nav-_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p> <?= __('Contact us')?></p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
  <script>
  	$(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
  		var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
      if(s!='')
        page = page+'_'+s;
  		if($('.nav-link.nav-'+page).length > 0){
             $('.nav-link.nav-'+page).addClass('active')
  			if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
  				$('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
  			}
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

  		}
     
  	})
  </script>