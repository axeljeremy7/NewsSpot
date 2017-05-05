
<?php
$array = array('BBC Sports' => array('bbc-sport','http://www.blurrededge.co.uk/wp-content/uploads/2013/12/12_BBCSport_Logo.png', 'top'),
    'ESPN'=> array('espn','http://a.espncdn.com/wireless/mw5/r1/images/bookmark-icons/espn_icon-152x152.min.png','top',),
    'ESPN Cric Info' => array('espn-cric-info','http://i.imgci.com/espncricinfo/ci_apple_webclip.png','top','latest'),
    'Football Italia' => array('football-italia','http://www.favicon.cc/logo3d/78363.png','top','latest'),
    'FourFourTwo' => array('four-four-two','http://images.cdn.fourfourtwo.com/sites/fourfourtwo.com/themes/fourfourtwo/images/apple-icon-114x114px.png','top','latest'),
    'Fox Sports' => array('fox-sports','http://a.fssta.com/etc/designs/fsdigital/foxsports/styles/main/images/logo/favicons/152x152.png','top','latest'),
    'NFL' => array('nfl-news','http://i.nflcdn.com/static/site/7.4/img/apple/apple-touch-icon-114x114.png','top','latest'),
    'Sky Sports' => array('sky-sports-news','http://www.skysports.com/favicon.ico','top','latest'),
    'Talk Sports' => array('talksport','http://talksport.com/sites/default/files/ben/facebookLogo.jpg','top','latest'),
    'The Sport Bible'=> array('the-sport-bible','http://www.thesportbible.com/assets/images/theme/favicons/apple-touch-icon-180x180.png','top','latest')
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

                  <?php include './contentOfSports.php'; ?>




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