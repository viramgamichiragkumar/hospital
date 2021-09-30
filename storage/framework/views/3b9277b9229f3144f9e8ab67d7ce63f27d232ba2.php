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

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


    <style type="text/css">
    .gallery
    {
        display: inline-block;
        margin-top: 20px;
    }
    .close-icon{
        border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
    }
    .form-image-upload{
        background: #e8e8e8 none repeat scroll 0 0;
        padding: 15px;
    }
    </style>

  <!--   image end -->
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

              <!-- asgg -->

                  <div class='list-group gallery'>

            <form action="<?php echo e(url('galleryshow')); ?>" class="form-image-upload" method="POST" enctype="multipart/form-data">



        <?php echo csrf_field(); ?>



        <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>


        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong><?php echo e($message); ?></strong>
        </div>
        <?php endif; ?>


        <div class="row">
            <div class="col-md-5">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col-md-5">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="col-md-2">
                <br/>
                <button type="submit" class="btn btn-success">Upload</button>
            </div>
        </div>


    </form> 

            <?php if($images->count()): ?>
                <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="images/<?php echo e($image->image); ?>">
                        <img class="img-responsive" alt="" src="images/<?php echo e($image->image); ?>" />
                        <div class='text-center'>
                            <small class='text-muted'><?php echo e($image->title); ?></small>
                        </div> <!-- text-center / end -->
                    </a>
                    <form action="<?php echo e(url('galleryshow',$image->id)); ?>" method="POST">
                    <input type="hidden" name="_method" value="delete">
                    <?php echo csrf_field(); ?>

                    <button type="submit" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
                    </form>
                </div> <!-- col-6 / end -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>


        </div> <!-- list-group / end -->
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
  <script type="text/javascript">
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>
  <!-- container section end -->
  <!-- javascripts -->
 
  <script src="js_r/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js_r/jquery.scrollTo.min.js"></script>
  <script src="js_r/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js_r/scripts.js"></script>


</body>

</html>
<?php /**PATH D:\xampp\htdocs\laravel\hospital\resources\views/admin/galleryshow.blade.php ENDPATH**/ ?>