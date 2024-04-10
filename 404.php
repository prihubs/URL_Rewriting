<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Error</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <div class="errbx">
            <h1 class="t404err">Oops...Your Search 
                <?php if(isset($_GET['error'])){ $error = $_GET['error']; echo $error; } ?>  
                returned no result(s)</h1> <br/>
            <a class="link" href="#"> <button class="btn"> Return to homepage </button></a>
        </div>
    </div>
    
</body>
</html>