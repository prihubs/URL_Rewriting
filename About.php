<?php 

if(isset($_GET['id'])){
    
    $id = $_GET['id'];
    $name = $_GET['name'];
    $addr = $_GET['addr'];

    echo "Hey ".$name." your id is: $id, Note: $addr";

}else{
    echo "<h1> You havent made any Request </h1>";
}

