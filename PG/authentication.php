<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/authentication.css">
    <title>ORHAN</title>
</head>
<body>



    <header>
        <img src="assets/R.png" id="logo">
        <h1 id="title">ORHAN AUTOMOTIVE</h1>
    </header>

    <img src="assets/bk.png" id="bk">



    <h1 id="si">SIGN IN </h1>


    <?php
      session_start();
            include 'connection.php';
    if(isset($_POST['submit'])){
      $nom = htmlspecialchars($_POST['nom']);
      $motDePass =  htmlspecialchars($_POST['motDePass']);
      //validation
      $valid = 0;
          //email validation
          $checkEmail = mysqli_query($conn, "SELECT * from opérateur WHERE nom = '$nom' AND motDePass = '$motDePass'");
          $result = $checkEmail->fetch_assoc();
     
          if (mysqli_num_rows($checkEmail) == 0) {
            $valid++;
          }

          //password validation
          
          if($valid != 0){
            echo  "<p>wrong email or password</p>";
          }else{
            $_SESSION["matrecule"]  = $result["matrecule"];
            $_SESSION["nom"] = $result["nom"];


            header( 'location: pallet-option.php');
           exit(); 
          }
        }
?>

    <form method="post">


 <div id="container">

        <img src="assets/blueP.png" id="bluep">
            <input type="text" placeholder="enter your name" id="inp1" name="nom">
            <input type="text" placeholder="enter your password" id="inp2" name="motDePass">
          
    <button type="submit" id="btn" name="submit" > submit </button>  
    </div>



    </form>
   

</body>
</html>