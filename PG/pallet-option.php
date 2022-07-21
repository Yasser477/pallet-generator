<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pallet-option.css">
    <style>
        @font-face {
            font-family: 'oswald';
            src: url(font/Oswald-Medium.ttf);
        }
    </style>
    <title>Document</title>
</head>
<body >
    

<img src="assets/bk.png" id="bk">
    <header>
        <img src="assets/R.png" id="logo">

        <h1 id="title">ORHAN AUTOMOTIVE</h1>

        <?php
          if ($_SESSION["nom"]){
          ?>
           <a href="#"><span name="logout" class="fspans" style="position: absolute; left:1200px; top:38px; font-family:'oswald' ;"> <?php echo  $_SESSION["nom"];?> </span></a>  
            <?php
          }
          
          if(isset(['submit'])){

            session_destroy();
            
            header( 'location : authentication.php');
          }
          
            ?>
       
    </header>
    
<main>

    <div id="container">

        <img src="assets/pallet.png" id="pll">
        
        <button class="button-two"><span>new pallet</span></button>

        <button class="button-three"><span>old pallet</span></button>

    </div>

</main>


</body>
</html>
