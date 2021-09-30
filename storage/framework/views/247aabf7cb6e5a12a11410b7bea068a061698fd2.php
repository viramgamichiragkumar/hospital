<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Admin - R.J Hospital</title>

  <!-- Bootstrap CSS -->
  <link href="css_r/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css_r/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css_r/elegant-icons-style.css" rel="stylesheet" />
  <link href="css_r/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css_r/style.css" rel="stylesheet">
  <link href="css_r/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
      <!-- header start -->
   <div>
   <?php echo $__env->make('admin.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
    <!--header end-->
    <!--sidebar start-->
  
  <div>
    <?php echo $__env->make('admin.include.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
        <!-- sidebar menu end-->
   

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i>CONTACT</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-th-list"></i>Contact</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
      
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Content Table
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
   <?php echo e($data->render()); ?>

                  <tr>
            
                    <th><i class="icon_profile"></i></th>
                    <th><i class="icon_profile"></i> Full Name</th>
                    <th><i class="icon_mail_alt"></i> Email</th>
                    <th><i class="icon_pin_alt"></i>Subject</th>
                    <th><i class="icon_cogs"></i>message</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>

                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($data->id); ?></td>
                    <td><?php echo e($data->name); ?></td>
                    <td><?php echo e($data->email); ?></td>
                    <td><?php echo e($data->subject); ?></td>
                    <td><?php echo e($data->message); ?></td>
                    <td>
                      <div class="btn-group">
                        
                        <a class="btn btn-danger" href="delete/<?php echo e($data->id); ?>"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                 
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>

            </section>
          </div>
        </div>
        <!-- page end-->

      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          <a href=""></a>
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js_r/jquery.js"></script>
  <script src="js_r/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js_r/jquery.scrollTo.min.js"></script>
  <script src="js_r/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js_r/scripts.js"></script>


</body>

</html>
<?php /**PATH C:\xampp\htdocs\hospital\resources\views/admin/contactshow.blade.php ENDPATH**/ ?>