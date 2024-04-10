<?php

if(isset($_GET['nt'])){
    $url = explode("/", $_SERVER["REQUEST_URI"]);
    $dir = strtolower(end($url));

    echo "$dir is not found";
    die();
}

echo "<h1> Welcome, This is Homepage </h1>";
