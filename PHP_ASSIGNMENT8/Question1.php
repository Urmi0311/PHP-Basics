<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSS FEED</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');
    .container{
        width :77%;
        margin-left: 13%;
        font-family: 'Ubuntu', sans-serif;
        text-align: center;
    }
    .item img{
        width:100%;
        height: 400px;
    }
</style>
<body>


<?php
class RssFeed {
    private $url;

    public function __construct($url) {
        $this->url = $url;
    }

    public function getFeed() {
        libxml_use_internal_errors(true);

        $rss_feed = simplexml_load_file($this->url);

        if ($rss_feed === false) {
            echo "Failed loading RSS feed\n";
            foreach(libxml_get_errors() as $error) {
                echo "\t", $error->message;
            }
        } else {
    
            echo "<div class='container' >";
            $title2= $rss_feed->channel-> title;
                echo "<h1>"."$title2"."</h1>";
                echo "<hr>";
            foreach ($rss_feed->channel->item as $item) {
                $title = (string) $item->title; 
                $link   = (string) $item->link; 
                $description =  $item->description;
                
         echo "<div class='item'";
        
             echo "<a href ='".$link."'><h2>".$title ."</a></h2>";
                echo "<div = 'description'>";
                 echo "<p>".$description."</p>";
                echo  "</div>";
                
         echo "</div>";
         echo "<hr>";
           
            
        }
        echo "</div>";
        
        
    }
}}

$url = $_POST['rssurl'];
$rss = new RssFeed($url);
$rss->getFeed();

?>

</body>
</html>