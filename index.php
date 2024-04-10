<?php

if(isset($_GET['nt'])){
    $url = explode("/", $_SERVER["REQUEST_URI"]);
    $dir = strtolower(end($url));

    if(empty($dir)){
        $dir = "Page";
    }

    $break = "<p>";
    $mainHome = "http://localhost/live/Js%20path/WritingURL/";
    $home = "home?rd=";

    header("Location: ".$mainHome."".$home."".$dir);
    die();
}

if(isset($_GET['ne'])){
    $url = explode("/", $_SERVER["REQUEST_URI"]);
    $dir = strtolower(end($url));

    if(empty($dir)){
        $dir = "Page";
    }

    echo $dir." is not found! <p> 
    <a href='#' class'btn'> Go Home </a>";
    die();

}

if(isset($_GET['rd'])){
    echo $_GET['rd']." is not found <p> 
    <a href='#' class'btn'> Go Home </a>";

}else{
    echo "<h1> Welcome, This is Homepage </h1>";
}

