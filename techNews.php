
<?php

$array = array('Engadget' => array('engadget','https://s.blogsmithmedia.com/www.engadget.com/assets-h033a619364e150cdfa4e898cef336361/images/favicon-96x96.png?h=9680b5ecfb3de364248a4a98bf84664f','top','latest'),

    'Hacker News' => array('hacker-news','https://news.ycombinator.com/favicon.ico', 'top','latest'),

'Recode' =>array('recode','https://cdn3.vox-cdn.com/uploads/chorus_asset/file/6397039/recode_favicon-96.0.png','top'),

'TechCrunch' =>array('techcrunch','https://s0.wp.com/wp-content/themes/vip/techcrunch-2013/assets/images/homescreen_TCIcon_2x.png','top','latest') ,

    'TechRadar' =>array('techradar','http://cdn0.static.techradar.futurecdn.net/201611301/apple-touch-icon.png','top','latest'),

'The Next Web' => array('the-next-web','https://cdn1.tnwcdn.com/wp-content/themes/cyberdelia/assets/icons/favicon-96x96.png?v=1470647965','latest'),

 'The Verge' => array('the-verge','https://cdn2.vox-cdn.com/uploads/chorus_asset/file/7395365/favicon-96x96.0.png','top','latest') ,

   'ArsTechnica' => array('ars-technica','https://cdn.arstechnica.net/wp-content/themes/ars/assets/img/material-ars-db41652381.png','top'),

        'National Geographic' => array('national-geographic','http://www.logosquizwalkthrough.com/images/bubble/national-geographic.jpg','top'),

        'New Scientist' => array('new-scientist','http://www.mouthcancerfoundation.org/sites/mcfdev/files/styles/large/public/New%20Scientist%20Logo%20Large.jpg?itok=GBTt73By','top')

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

                  <?php include './contentOfTech.php'; ?>




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