<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ajouter-un-oprateur.css">
    <title>ORHAN</title>
</head>
<body>


    <div>
        <img src="assets/bk.png" alt="background" id="bk">
    </div>

    <header>
        
        <img src="assets/R.png" alt="logo" id="logo">
        <h1 id="name">ORHAN AUTOMOTIVE</h1>
    </header> 

    <main>

        <h1 id="title" >AJOUTER UN OPÉRATEUR </h1>

        <form  method="POST" >

       
             <div id="container" class="grid-container">

                <div id="cntr">                    
                
                 <img src="assets/blueP.png" id="bluep">   

                <input type="text" placeholder="le nom de l'opérateur" class="inps" name="nom">
                <input type="text" placeholder="la matricule" class="inps" name="matrecule" >
                <input type="password" placeholder="créer un mot de passe" class="inps" name="motDePass" >
                <input type="text" placeholder="Le ligne de travail " class="inps" name="ligne">

                
                </div>

                    <button id="btn" name="submit"> AJOUTER </button>

                </div>
                </form>
                        <?php
                                        include"connection.php";
                                if (isset($_POST['submit'])) {

                                        //data  info
                                        $nom = $_POST['nom'];
                                        $matrecule  = $_POST['matrecule'];
                                        $motDePass = $_POST['motDePass'];
                                        $ligne = $_POST['ligne'];
                                        

                                        

                                            //data info >> database >> opérateur
                                                $sql = "INSERT INTO opérateur (`nom`,`matrecule`,`motDePass`,`ligne`) VALUES ('$nom','$matrecule','$motDePass','$ligne')";
                                                $query = mysqli_query($conn, $sql);

                                                $bring = " SELECT * from opérateur where matrecule =  ''";

                                                

                                                

                                                mysqli_close($conn);
                                                die();

                                                // $select = mysqli_query($conn, "SELECT * FROM opérateur WHERE matrecule = '".$_POST['matrecule']."'");
                                                // if(mysqli_num_rows($select)) {
                                                //     exit('This username already exists');
                                                // }

                             }
                        ?>


                          
                      


                <div id="site"> <a href="https://www.orhanholding.com/"><h4 style="color: black  ; text-decoration: none;" >www.orhanholding.com</h4></a></div> 
                
  
             
    </main>

  
</body>
</html>