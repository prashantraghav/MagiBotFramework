<!DOCTYPE html>
<html>
    <head>
        <?php include 'inc/head.php';?>
    </head>
    <body class="skin-blue">
       <?php include 'inc/header.php';?>

         <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- left sidebar -->
            <?php include 'inc/left_sidebar.php';?>
           
             <!-- Right side column. Contains the navbar and content of the page -->
              <aside class="right-side">
              <!-- Content Header (Page header) -->
              <?php include 'inc/content_header.php';?>

              <!-- Main content -->
                <section class="content">
                    <div class="row">
                       <div class="col-lg-12">
                        <?php print $content;?>
                        </div>
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <?php include 'inc/footer.php';?>

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
                <script src="<?php echo THEME_PATH; ?>/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
                <script src="<?php echo THEME_PATH; ?>/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
                <script src="cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo THEME_PATH; ?>/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
                <script src="<?php echo THEME_PATH; ?>/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
                <script src="<?php echo THEME_PATH; ?>/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo THEME_PATH; ?>/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
                <script src="<?php echo THEME_PATH; ?>/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
                <script src="<?php echo THEME_PATH; ?>/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
                <script src="<?php echo THEME_PATH; ?>/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
                <script src="<?php echo THEME_PATH; ?>/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
                <script src="<?php echo THEME_PATH; ?>/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo THEME_PATH; ?>/js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo THEME_PATH; ?>/js/AdminLTE/dashboard.js" type="text/javascript"></script>     
        
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo THEME_PATH; ?>/js/AdminLTE/demo.js" type="text/javascript"></script>

    </body>
</html>
