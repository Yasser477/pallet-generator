<?php
session_start()
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/secondPallet.css">
    <title>Document</title>
</head>
<body>
    <img src="assets/bk.png" id="bk">

    <header>
        <form methode="POST">
        <img src="assets/R.png" id="logo">
        <h1 id="title">ORHAN AUTOMOTIVE</h1>

        <h4 id="nom">  
        <?php
          if ($_SESSION["nom"]){
          ?>
           <a href="#"> <button name="logout"> <span  class="fspans" style="position: absolute;  top:10px; font-family:'oswald' ; text-transform: uppercase; color :black; width : 190px; display: inline;"> user : <?php echo  $_SESSION["nom"];?> </span></button></a>  
            <?php
          }      
            ?>
        
        <?php 
         if(isset($_POST['logout'])) {
            session_destroy();
          
        header('location:authentication.php');    
        }
        
        
        ?>
        
        
        
        
        
        </h4>
</form>

    </header>

    <main>
        <div id="container">
    <div>

    
            <div id="inp1">
                <p id="refEx" > Ref-Client : <?php echo  $_SESSION["ReferenceClient"];?> </p>
            </div>

            <div id="inp2">
                <p id="refEx" > Ref-interne 1 : <?php echo  $_SESSION["ref_int"];?> </p>
            </div>

            <div id="inp3">
                <p id="refEx" > Quantity : <?php echo  $_SESSION["quantity"];?> </p>
            </div>

            <div id="inp4">
                <p id="refEx" > <?php echo  $_SESSION["date"];?> </p>
            </div>
    </div>

    
            <div id="rightDiv">

            <form method="POST">

            <input type="text" placeholder="reference client 2" id="refe2" name="reference_interne" >
            <input type="datetime-local" placeholder="date 2" id="date2" name="date2">
            
           <button id="btn" name="submit" > ajouter </button>
         </form>

         <?php
                                        include"connection.php";
                                if (isset($_POST['submit'])) {

                                        //data  info
                                        $reference_interne = $_POST['reference_interne'];
                                        $date2  = $_POST['date2'];
            

                                            //data info >> database >> opérateur
                                                $sql = "INSERT INTO machine (`reference_interne`,`date2`) VALUES ('$reference_interne','$date2')";
                                                $query = mysqli_query($conn, $sql);

                                                mysqli_close($conn);
                                                die();

                             }
                        ?>



            </div>
            
            
            <div id="scaned">

                  <p> scanned : <h6></h6> </p>           

            </div>





        </div>
    </main>


</body>
</html>