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
    <section id="container"
        class="">
       <!-- header start -->
   <div>
   @include('admin.include.header')
</div>
    <!--header end-->

    <!--sidebar start-->
    <div>
    @include('admin.include.slider')
</div>
    <!--sidebar end-->

    <!--main content start-->
    <section id="
        main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="icon_documents_alt"></i>Pages</li>
                        <li><i class="fa fa-plus-circle"></i>Add Appointment</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <!-- profile-widget -->
                <div class="text-center col-lg-12">
                    <h1>ADD APPOINTMENT</h1>
                </div>
            </div>
            <!-- page start-->

            <div class="modal-dialog" role="document">
                {{-- <div class="modal-content"> --}}

                <div class="modal-body col-12">
                    <form action="#">
                        <div class="form-group">
                            <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
                            <input type="text" class="form-control" id="appointment_name" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <!-- <label for="appointment_email" class="text-black">Email</label> -->
                            <input type="email" class="form-control" id="appointment_email" placeholder="Email">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- <label for="appointment_date" class="text-black">Date</label> -->
                                    <input type="date" class="form-control appointment_date" placeholder="Date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- <label for="appointment_time" class="text-black">Time</label> -->
                                    <input type="time" class="form-control appointment_time" placeholder="Time">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <!-- <label for="appointment_message" class="text-black">Message</label> -->
                            <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Make an Appointment" class="btn btn-primary">
                        </div>
                    </form>
                </div>

                {{-- </div> --}}
            </div>





            <!-- page end-->
        </section>
    </section>

    </section>
    <!-- container section end -->
    <!-- javascripts -->
    <script src="js_r/jquery.js"></script>
    <script src="js_r/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js_r/jquery.scrollTo.min.js"></script>
    <script src="js_r/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery knob -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <!--custome script for all page-->
    <script src="js_r/scripts.js"></script>

    <script>
        //knob
        $(".knob").knob();
    </script>


</body>

</html>
