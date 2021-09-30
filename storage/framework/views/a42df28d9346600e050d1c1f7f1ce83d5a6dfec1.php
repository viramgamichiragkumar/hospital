 <!--sidebar start-->
 <aside>
     <div id="sidebar" class="nav-collapse ">
         <!-- sidebar menu start-->
         <ul class="sidebar-menu">



             <li class="sub-menu">
                <a href="javascript:;" class="">
                         <i class="icon_globe-2"></i>
                    <span>Admin</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href=" <?php echo e(url('profile')); ?>">Profile</a></li>
                    <li><a class="" href=" <?php echo e(url('login')); ?>"><span>Login Page</span></a></li>
                    <li><a class="" href="contactshow"><span>Contact Page</span></a></li>
                </ul>
            </li>

            <li class="active">
                 <a class="" href=" /index">
                     <i class="icon_house_alt"></i>
                     <span>Dashboard</span>
                 </a>
             </li>

             <li>
                <a class="" href=" chart-chartjs">
                    <i class="icon_piechart"></i>
                    <span>Charts</span>
                </a>
            </li>

             <li class="sub-menu">
                 <a href="javascript:;" class="">
                          <i class=" icon_document_alt"></i>
                     <span>Forms</span>
                     <span class="menu-arrow arrow_carrot-right"></span>
                 </a>
                 <ul class="sub">
                     <li><a class="" href=" form_component">Form Elements</a></li>
                     <li><a class="" href=" form_validation">Form Validation</a></li>
                 </ul>
             </li>


             


             <li>
                 <a class="" href=" <?php echo e(url('contactshow')); ?>">
                     <i class="icon_contacts_alt"></i>
                     <span>contact</span>
                 </a>
             </li>

             <li>
                 <a class="" href=" <?php echo e(url('galleryshow')); ?>">
                     
                     <i class="fa fa-image"></i>
                     <span>gallery</span>
                 </a>
             </li>

             <li>
                 <a class="" href=" <?php echo e(url('/patients')); ?>">
                     
                     <i class="icon_id"></i>
                     <span>Patients</span>
                 </a>
             </li>

             <li>
                 <a class="" href=" <?php echo e(url('/addappoinment')); ?>">
                     
                     <i class="fa fa-plus-circle"></i>

                     <span>Add Appointment</span>
                 </a>
             </li>

         </ul>
         <!-- sidebar menu end-->
     </div>
 </aside>
 <!--sidebar end-->
<?php /**PATH D:\xampp\htdocs\laravel\hospital\resources\views/admin/include/slider.blade.php ENDPATH**/ ?>