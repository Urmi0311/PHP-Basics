<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body{
            text-align: center;
            
            margin: 4% 10% 4% 10% ;

        }
        .description {
            width: 100%;

        }
        .item img{
            width: 100%;
            height: 500px;

        }
        
       
        

    </style>

</body>

</html>






<?php
class rssfeed
{
    public $url;
    function __construct()
    {
        $this->url = $_POST["url"];
    }
    function printrss()
    {
        $feedArr = simplexml_load_file($this->url);
        if (isset($feedArr->channel)) {
            $title = $feedArr->channel->title;
            echo "<div class='head'>";
            echo "<h1>".$title."</h1>";
            echo "<hr>";
            echo "</div>";
            foreach ($feedArr->channel->item as $item) {
                $link = (string)$item->link;
                $description = (string)$item->description;
                $title1= $item->title;

                echo "<div class='item'";
                echo "<a href ='" . $link . "'><h2>" . $title1 . "</a></h2>";
                echo "<hr>";
                echo "<div = 'description'>";
                echo "<p class='desimg'>" . $description . "</p>";
                echo "</div>";
                echo "</div>";
                echo "<hr>";
                
            }

        }
        else{
            echo "Invalid rss feed";
        }

    }

}


$url = new rssfeed;
$url->printrss();



?>