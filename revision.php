<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
    <?php
      //This includes the topnavbar
      include ('nav.php');
      //This includes the side menu
      include ('menu.php');
     ?>
  <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Team name </h3>
          	<div class="row mt">
          		<div class="col-lg-5">
          		<p>Add the info for your team.</p>
            <br>
              <div class="form-panel">
                <form method="post">
                  <div class="form-group">
                  <h3> Contact Info </h3><br>
                  <h5> Person 1 </h5>
                  Name:<input type="text" class="form-control" name="name1" size="5"><br>
                  Sex:<input type="text" class="form-control" name="sex1"><br>
                  <h5> Person 2 </h5>
                  Name:<input type="text" class="form-control" name="name1"><br>
                  Sex:<input type="text" class="form-control" name="sex1"><br>
                  <h5> Person 3 </h5>
                  Name:<input type="text" class="form-control" name="name1"><br>
                  Sex:<input type="text" class="form-control" name="sex1"><br>
                  <h5> Person 4 </h5>
                  Name:<input type="text" class="form-control" name="name1"><br>
                  Sex:<input type="text" class="form-control" name="sex1"><br>
                  <h5> Person 5 </h5>
                  Name:<input type="text" class="form-control" name="name1"><br>
                  Sex:<input type="text" class="form-control" name="sex1"><br>
                  <input type="submit" class="btn btn-success"></button>
                </form>
                <br>
              </div>
          	</div>
          </div>
          </div>

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->

  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
