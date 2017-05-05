
<?php
$array = array(
    'Business Insider' => array('business-insider','http://static3.businessinsider.com/assets/images/us/favicons/apple-touch-icon-180x180.png?v=BI-US-2016-03-31', 'top','latest'),

    'Business Insider-UK'=> array('business-insider-uk','http://static3.businessinsider.com/assets/images/us/favicons/apple-touch-icon-180x180.png?v=BI-US-2016-03-31','top','latest'),

    'Bloomberg' => array('bloomberg','https://assets.bwbx.io/business/public/images/favicons/favicon-192x192-3621dae772.png','top'),



    'Fortune' => array('fortune','http://1.gravatar.com/blavatar/dab01945b542bffb69b4f700d7a35f8f?s=114','top','latest'),

    'CNBC' => array('cnbc','http://fm.cnbc.com/applications/cnbc.com/staticcontent/img/mobile/touch/cnbc-logo-sharing-114.jpg','top'),

    'The Wall Street Journal' => array('the-wall-street-journal','http://www.wsj.com/android-chrome-192x192.png','top')
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

                  <?php include './contentOfBusiness.php'; ?>




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