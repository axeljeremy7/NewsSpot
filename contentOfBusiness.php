<?php
    include_once 'GettingInfoWeb.php';

     $makePossible=false;
     $specialCase=false;
     if (sizeof($array[$id]) > 2) {
        $makePossible=true;
     }
     if($array[$id][2] == 'latest'){
        $specialCase=true;
     }


?>
<div class = "row">
  <?php
    if ($specialCase == false) {
      $articlesArray = getArticles($array[$id][0], "top");
      if (sizeof($array[$id]) > 3) {

        include "caseTop.php";

       $articlesArray = getArticles($array[$id][0], "latest");
        include "caseLatest.php";

      }else{
        include "caseTop.php";
      }

    }else {
      $articlesArray = getArticles($array[$id][0], "latest");
      include "caseLatest.php";
    }

    $article=$id;

  ?>

</div>





