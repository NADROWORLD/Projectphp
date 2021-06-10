<?php

$url = "https://www.30millionsdamis.fr/actualites/rss.xml";

if (@simplexml_load_file($url)) {
    $feeds = simplexml_load_file($url);
}

$i = 0;

include "App/templates/blogView.php";