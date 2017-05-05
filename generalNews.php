
<?php
$array = array(
    'The Washington Post' => array('the-washington-post','http://casinotrends.info/assets/washingtonpost-99789f724402daf3de50f86076f4405f43b2cc5c829ad70c049ed9a12adb3e0a.png', 'top'),
    'The New York Times'=> array('the-new-york-times','https://static01.nyt.com/images/icons/ios-iphone-114x144.png','top'),
    'The Huffington Post' => array('the-huffington-post','http://s.m.huffpost.com/assets/favicon-db51f692ca19533517299040c4ae3dd5.ico','top'),
    'USA Today' => array('usa-today','http://www.gannett-cdn.com/sites/usatoday/images/favicon.png','top','latest'),
    'Time' => array('time','https://s0.wp.com/wp-content/themes/vip/time2014/img/time-touch_icon_76.png','top','latest'),
    'Associated Press' => array('associated-press','http://bigstory.ap.org/profiles/ap/themes/ap_vertical/touch-icon.png','top','latest'),
    'Reuters' => array('reuters','http://s3.reutersmedia.net/resources_v2/images/favicon/favicon-96x96.png','top','latest'),
    'NewsWeek' => array('newsweek','http://s.newsweek.com/sites/www.newsweek.com/themes/newsweek/favicons/favicon-96x96.png','top'),
    'Independent' => array('independent','http://www.independent.co.uk/sites/all/themes/ines_themes/independent_theme/img/apple-icon-72x72.png','top'),
    'The Guardian UK' => array('the-guardian-uk','https://assets.guim.co.uk/images/favicons/b5050517955e7cf1e493ccc53e64ca05/72x72.png','top','latest'),
    'The Telegraph' => array('the-telegraph','http://www.telegraph.co.uk/etc/designs/telegraph/core/clientlibs/themes/cars/img/favicon/apple-touch-icon-72x72.png','top','latest'),
    'BBC News' => array('bbc-news','http://static.bbci.co.uk/news/1.164.01103/apple-touch-icon-72x72-precomposed.png','top'),
    'CNN' => array('cnn','http://i.cdn.turner.com/cnn/.e/img/3.0/global/misc/apple-touch-icon.png','top')
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