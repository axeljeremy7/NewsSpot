<?php

/**
*
*/
//class GetWeb
//{




    function getArticles($source,$sortBy)
    {
            $apiKey =  "4a772ea145d74b7a93f45032411c27e0";
            $page = file_get_contents("https://newsapi.org/v1/articles?source=$source&sortBy=$sortBy&apiKey=$apiKey");
            $objson = json_decode($page,true);
            $arr =$objson['articles'];
            $c=0;
            foreach ($arr as $key => $value) {
                $c++;
            }

            $arrayArticles = array();
            for ($i=0; $i < $c ; $i++) {
                foreach ($arr[$i] as $key => $value) {
                    $arrayArticles[$i][$key] = $value;
                }
            }
            return $arrayArticles;
    }

    function displayArticles($arr)
    {

        for ($i=0; $i < sizeof($arr); $i++) {
            foreach ($arr[$i] as $key => $value) {
                    if ($key == 'url' || $key == 'urlToImage') {
                        echo "<br/> $key - <a href='$value'> $value </a>";
                    }else{
                         echo '<br/>'. $key .' - '. $value;
                    }


            }
            echo '<br/>';
        }

    }






//}
//?>