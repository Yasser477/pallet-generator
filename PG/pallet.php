<?php 

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pallet.css">
    <title>ORHAN</title>
</head>
<body>

    

    <header>
        <img src="assets/R.png" id="logo">

        <h1 id="title" >ORHAN AUTOMOTIVE</h1>

        
    </header>
    <img src="assets/bk.png" bk="bk">

    <main>
        <div id="container">

        <form  method="POST">


        
     
            <div id="ref1" >

                <input type="text" id="inp1"  placeholder="Reference client" name="ReferenceClient">
                <input type="text" id="inp2" placeholder="Reference interne 1" name="ref_int">
                <input type="text" id="inp3" placeholder="Quantity" name="quantity">
                <input type="datetime-local" id="inp4" name="date" >
               

                <script>
                    document.getElementById("inp4").valueAsDate = new Date(); 
                           
                </script>
               

                <button  name="submit"> enter </button>

            </div>

            </form>


            <?php
                  include"connection.php";

                if (isset($_POST['submit'])) {

                  //data  info
                $ReferenceClient = $_POST['ReferenceClient'];
                $ref_int   = $_POST['ref_int'];
                $quantity = $_POST['quantity'];
                $date = $_POST['date'];
                                        
                $_SESSION["ReferenceClient"] = $ReferenceClient;
                $_SESSION["ref_int"] = $ref_int;
                $_SESSION["quantity"] = $quantity;
                $_SESSION["date"] = $date;                      

                //data info >> database >> opérateur
                $sql = "INSERT INTO pallets (`ReferenceClient`,`ref_int`,`quantity`,`date`) VALUES ('$ReferenceClient','$ref_int','$quantity','$date')";
                $query = mysqli_query($conn, $sql);

                header('location: secondPallet.php');

                mysqli_close($conn);
                die();

                
            
                }
                ?>



          
           
            <div id="ref2">

                <input type="text" placeholder="reference client 2" disabled id="ref2" name="reference_interne">
                <input type="datetime-local" id="date2"  disabled name="date2">
                
            <a href="secondPallet.php">    <button type="submit"> enter </button></a>

            
          


            

            </div>


            
        </div>
    </main>


              
</body>  
             
</html>