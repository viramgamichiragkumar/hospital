<!DOCTYPE html>
<html lang="en">

<head>
    <title>R.J Hospital</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- image -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    

    
    <!-- References: https://github.com/fancyapps/fancyBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


    <style type="text/css">
        .gallery {
            display: inline-block;
            margin-top: 20px;
        }

        .fade {
             opacity: 1;
        }

        .close-icon {
            border-radius: 50%;
            position: absolute;
            right: 5px;
            top: -10px;
            padding: 5px 8px;
        }

        .form-image-upload {
            background: #e8e8e8 none repeat scroll 0 0;
            padding: 15px;
        }

    </style>

    <!--   image end -->


</head>

<body>
    <!-- head section -->
    <div>
        <?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url('images/bg_1.jpg');"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span
                                class="mr-2"><a href="<?php echo e(url('/')); ?>">Home</a></span> <span>Gallery</span>
                        </p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Gallery
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="container">

        <br>
        <br>

        <div class="row">
            <div class='list-group gallery'>
                <?php echo e($images->render()); ?>


                <?php if($images->count()): ?>
                    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class='col-sm-4 col-xs- col-md-3 col-lg-3'>
                            <a class="thumbnail fancybox" rel="ligthbox" href="images/<?php echo e($image->image); ?>">
                                <img class="img-fluid" alt="" src="images/<?php echo e($image->image); ?>" />
                                <div class='text-center'>
                                    <small class='text-muted'><?php echo e($image->title); ?></small>
                                </div> <!-- text-center / end -->
                            </a>

                        </div> <!-- col-6 / end -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <br>
    <div>
        <?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    </div>
    <!--End pagewrapper-->


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <!-- Modal -->
    <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRequestLabel">Make an Appointment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group">
                            <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
                            <input type="text" class="form-control" id="appointment_name" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <!-- <label for="appointment_email" class="text-black">Email</label> -->
                            <input type="text" class="form-control" id="appointment_email" placeholder="Email">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- <label for="appointment_date" class="text-black">Date</label> -->
                                    <input type="text" class="form-control appointment_date" placeholder="Date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- <label for="appointment_time" class="text-black">Time</label> -->
                                    <input type="text" class="form-control appointment_time" placeholder="Time">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <!-- <label for="appointment_message" class="text-black">Message</label> -->
                            <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Make an Appointment" class="btn btn-lg btn-primary">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>




    <script type="text/javascript">
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });
        });
    </script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>


</body>

</html>
<?php /**PATH D:\xampp\htdocs\laravel\hospital\resources\views/gallery.blade.php ENDPATH**/ ?>