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
  <!-- external css -->
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
   @include('admin.include.header')
</div>
    <!--header end-->

    <!--sidebar start-->
  <div>
    @include('admin.include.slider')
</div>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="icon_genius"></i> Widgets</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_genius"></i>Widgets</li>

          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <section class="panel">
              <header class="panel-heading">
                Basic items
              </header>
              <ul class="list-group">
                <li class="list-group-item">Lorem ipsum dolor sit amet</li>
                <li class="list-group-item">Praesent tempus eleifend risus</li>
                <li class="list-group-item">Praesent tempus eleifend risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
            </section>
          </div>
          <div class="col-lg-4">
            <section class="panel">
              <header class="panel-heading">
                Linked items
              </header>
              <div class="list-group">
                <a class="list-group-item " href="#">
                                  Lorem ipsum dolor sit amet
                              </a>
                <a class="list-group-item active" href="javascript:;">Praesent tempus eleifend risus</a>
                <a class="list-group-item" href="javascript:;">Praesent tempus eleifend risus</a>
                <a class="list-group-item" href="javascript:;">Porta ac consectetur ac</a>
                <a class="list-group-item" href="javascript:;">Vestibulum at eros</a>
                <a class="list-group-item" href="javascript:;">Vestibulum at eros</a>
              </div>
            </section>
          </div>
          <div class="col-lg-4">
            <section class="panel">
              <header class="panel-heading">
                Custom content
              </header>
              <div class="list-group">
                <a class="list-group-item " href="javascript:;">
                  <h4 class="list-group-item-heading">List group item heading</h4>
                  <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
                <a class="list-group-item active" href="javascript:;">
                  <h4 class="list-group-item-heading">List group item heading</h4>
                  <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
                <a class="list-group-item" href="javascript:;">
                  <h4 class="list-group-item-heading">List group item heading</h4>
                  <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
              </div>
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
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
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
