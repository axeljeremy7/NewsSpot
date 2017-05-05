
<?php
$array = array(
    'Buzzfeed' => array('buzzfeed','https://webappstatic.buzzfeed.com/static/favicon.ico?v=1480597456', 'top','latest'),

    'Daily Mail'=> array('daily-mail','http://www.pinknews.co.uk/images/2013/03/Daily-Mail-logo-1.jpg','top','latest'),

    'Entertainment Weekly' => array('entertainment-weekly','http://www.ew.com/sites/all/themes/ew_com/img/ew-touch-icon-ipad-retina.png','top'),

    'Mashable' => array('mashable','http://mashable.com/android-chrome-192x192.png?v=m2Pmw8zNwl','top','latest'),

    'The Lad Bible' => array('the-lad-bible','http://www.theladbible.com/assets/images/theme/favicons/android-chrome-192x192.png','top','latest'),

    'MTV' => array('mtv-news','http://www.oberholtzer-creative.com/visualculture/wp-content/uploads/2009/07/mtv_logo.jpg','top','latest')
    );

?>


<?php
$id;
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if(isset($_GET['id'])){
    $id= $_GET['id'];

  }

 }

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>News Spot</title>
        <!-- Favicon icon-->
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <!-- Bootstrap core CSS -->

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="bootstrap/js/dropdown.js"></script>
        <!--  CSS -->
        <link href="includes/css/hover-effect.css" rel="stylesheet">
        <link href="includes/css/textp.css" rel="stylesheet">

        <link href="bootstrap/theme.css" rel="stylesheet">
        <!--  Java scripts -->
        <stript type="text/javascript" src="includes/css/navbar.js"></script>




    </head>

    <body>
        <br></br>
        <?php include 'includes/php/header.php' ?>
        <hr>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                  <?php include './contentOfEntertain.php'; ?>




                </div>
            </div><!--end row class-->
        </div> <!--end container class-->

            <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/assets/js/jquery.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
    <?php echo '<hr>'; include "includes/php/footer.php"; ?>

</html>