<?php
$conn = mysqli_connect('localhost', 'root','', 'volontaire');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    if($_POST){
        $nom = $_POST['nom'];
        
        $email = $_POST['email'];
        $date = $_POST['date'];
        $insert_contact = 
        "INSERT INTO vol VALUES( '$nom', '$email', '$date')";
        $resultat = mysqli_query($conn, $insert_contact);
        echo "information subimted secessfully" ;
        header("Location:index.html");
        if (!$resultat) {
          $m = "Error insert_contact: \n". mysqli_error($conn);
          
        }
        }else{
          $m = "Error missing formulaire info\n";
        }
        ?>