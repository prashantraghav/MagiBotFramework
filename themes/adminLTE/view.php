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
    </body>
</html>
