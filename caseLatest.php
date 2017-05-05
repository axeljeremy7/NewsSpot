

<?php
for ($j=0; $j< sizeof($articlesArray); $j++) {
    if ($j==1 || $j ==6) {
      echo '<div class = "col-md-12">';

      for($i=$j-1;$i<$j+1;$i++){
        $author = $articlesArray[$i]['author'];
        if(strpos($author, "by")){
          $author=substr($author, strpos($author, "by")+2,strlen($author));
        }
        if($author==null || empty($author)){
          $author=$id;
        }
        $title=$articlesArray[$i]['title'];
        $description=$articlesArray[$i]['description'];
        $url=$articlesArray[$i]['url'];
        $image=$articlesArray[$i]['urlToImage'];
        if($image==null || empty($image)){
          $image=$array[$id][1];
        }
        $publish = $articlesArray[$i]['publishedAt'];

        $publish1 = $publish;
        $publish1 = str_replace("T", " ", $publish1);
        $publish1 = str_replace("Z", " ", $publish1);
        $date = new DateTime($publish1);
        $date->sub(new DateInterval('P0Y0M0DT5H0M0S'));
        $publish1 = $date->format('Y-m-d H:i');
        $publish1 = substr($publish1, 11, strlen($publish1));

      $hour = substr($publish1, 0, 2);
        $minute=substr($publish1, 2, strlen($publish1) );
        if ($hour < 12) {
         $publish1 = "Posted at: $hour$minute AM";
        }else {
          $hour = 24 - $hour;
          $publish1 = "Posted at: $hour$minute PM";
        }



        $textForTwitter= "@NewsSpot $title ";
        $linkedin="https://www.linkedin.com/shareArticle?mini=true&url=$url&title=$title&summary=$description";
        $twitter= "https://twitter.com/intent/tweet?text=$textForTwitter&url=$url";
        $facebook = "https://www.facebook.com/sharer/sharer.php?u=$url";




        echo '
        <div class="col-md-6">
            <div class="card" ">
              <div class="card-header">
              <a id="articleColor"  href="./includes/php/news/nyt.php">
              <img src="'.$array[$id][1].'" width="20" height="20" alt=""> '.$id.'
              </a>
              <div id="fecha" class="pull-right">'.$publish1.'</div>
              </div>

              <div class="card-block">
                <blockquote class="card-blockquote">
                  <div class="hovereffect">
                      <a href='.$url.'><img src="'.$image.'" class="img-responsive"  alt="img"></a>
                      <div class="overlay">

                        <p class="icon-links">
                        <a href="'.$linkedin.'"><i class="fa fa-linkedin" style="font-size:40px;color:white"></i></a>
                        <a href="'.$twitter.'">

                        <i class="fa fa-twitter" style="font-size:40px;color:white"></i></a>

                        <a href="'.$facebook.'"><i class="fa fa-facebook" style="font-size:40px;color:white"></i></a>

                    </p>
                    </div>

                  </div>
                  <a id="porfaTitulo" href='.$url.'><h2 id="porfaTitulo" >'.$title.'</h2></a>

                  <p id="porfacambia" >'.$description.'</p>
                  <footer id="author" >by <cite title="Source Title">'.$author.'</cite></footer>
                </blockquote>
              </div>
            </div>
        </div>';
     }
      echo '</div>';
    }
    elseif ($j==4 || $j==9) {
      echo '<div class = "col-md-12">';

      for($i=$j-2;$i<$j+1;$i++){
        $author = $articlesArray[$i]['author'];
        if(strpos($author, "by")){
          $author=substr($author, strpos($author, "by")+2,strlen($author));
        }
        if($author==null || empty($author)){
          $author=$id;
        }
        $title=$articlesArray[$i]['title'];
        $description=$articlesArray[$i]['description'];
        $url=$articlesArray[$i]['url'];
        $image=$articlesArray[$i]['urlToImage'];
        if($image==null || empty($image)){
          $image=$techArray[$id][1];
        }
        $publish = $articlesArray[$i]['publishedAt'];

          $publish1 = $publish;
        $publish1 = str_replace("T", " ", $publish1);
        $publish1 = str_replace("Z", " ", $publish1);
        $date = new DateTime($publish1);
        $date->sub(new DateInterval('P0Y0M0DT5H0M0S'));
        $publish1 = $date->format('Y-m-d H:i');
        $publish1 = substr($publish1, 11, strlen($publish1));

      $hour = substr($publish1, 0, 2);
        $minute=substr($publish1, 2, strlen($publish1));
        if ($hour < 12) {
         $publish1 = "Posted at: $hour$minute AM";
        }else {
          $hour = 24 - $hour;
          $publish1 = "Posted at: $hour$minute PM";
        }





        $textForTwitter= "@NewsSpot $title ";
        $linkedin="https://www.linkedin.com/shareArticle?mini=true&url=$url&title=$title&summary=$description";
        $twitter= "https://twitter.com/intent/tweet?text=$textForTwitter&url=$url";
        $facebook = "https://www.facebook.com/sharer/sharer.php?u=$url";


        echo '
        <div class="col-md-4">
            <div class="card" ">
              <div class="card-header">
              <a id="articleColor"  href="./includes/php/news/nyt.php">
              <img src="'.$array[$id][1].'" width="20" height="20" alt=""> '.$id.'
              </a>
              <div id="fecha" class="pull-right">'.$publish1.'</div>
              </div>

              <div class="card-block">
                <blockquote class="card-blockquote">
                  <div class="hovereffect">
                      <a href='.$url.'><img src="'.$image.'" class="img-responsive"  alt="img"></a>
                      <div class="overlay">

                        <p class="icon-links">
                        <a href="'.$linkedin.'"><i class="fa fa-linkedin" style="font-size:40px;color:white"></i></a>
                        <a href="'.$twitter.'">

                        <i class="fa fa-twitter" style="font-size:40px;color:white"></i></a>

                        <a href="'.$facebook.'"><i class="fa fa-facebook" style="font-size:40px;color:white"></i></a>

                    </p>
                    </div>

                  </div>
                  <a id="porfaTitulo" href='.$url.'><h2 id="porfaTitulo" >'.$title.'</h2></a>

                  <p id="porfacambia" >'.$description.'</p>
                  <footer id="author" >by <cite title="Source Title">'.$author.'</cite></footer>
                </blockquote>
              </div>
            </div>
        </div>';
     }



    echo '</div>';
    }


}
?>


