<?php
$conn=mysqli_connect("localhost","mohamed","medtb21","pweb");

$query2="select faculte,count(*) from inscrits group by (faculte)";
$result2=$conn->query($query2);
$query3="select annee_etude,count(*) from inscrits group by (annee_etude)";
$result3=$conn->query($query3);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cairo:wght@600&family=Oswald:wght@200;400&family=Roboto:ital,wght@1,500&family=Titillium+Web:wght@600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>MC-Inscription</title>
</head>

<body>
    
    <section class="bodyins">
        <header>
            <a href="accueil.html"><img src="why.png"></a>
            <input type="checkbox" id="menu-bar">
            <label for="menu-bar"><i class="fa fa-bars"></i></i></label>
            <nav class="navscroll">

                <div class="nav-links" id="nav-links">

                    <ul>
                        <li><a href="accueil.html">Home</a></li>
                        <li><a href="presentation.html">Presentation ▼</a>
                            <ul>
                                <li><a href="presentation.html#whoare">who we are</a></li>
                                <li><a href="presentation.html#his">history</a></li>
                                <li><a href="presentation.html#even">activities</a></li>
                            </ul>
                        </li>
                        <li><a href="http://localhost/projetpweb/events1.php">Events</a></li>
                        <li><a href="http://localhost/projetpweb/form.php">Registration</a></li>
                        <li><a href="http://localhost/projetpweb/contact.php">Contact</a></li>
                    </ul>
                </div>


            </nav>

        </header>

        <div></div>
        <div class="inscription">
            <h1>Registration Form</h1>
        </div>
        <div class="main">
            <form action="" method="post">
                <div class="inputs">
                    <div id="name">
                        <div class="cardbox">
                            <h2 class="name">Matricul</h2>
                            <input class="matricul" type="text" name="mat" required>
                        </div>
                        <div class="cardbox">
                            <h2 class="name">Name</h2>
                            <input class="prenom" type="text" name="prenomN" required>
                            <label class="firstlabel">Prenom</label>
                        </div>
                        <div class="cardbox">
                            <h2 class="name">Surname</h2>
                            <input class="nom" type="text" name="nomN" required>
                            <label class="lastlabel">Nom</label>
                        </div>
                    </div>
                    <div class="cardbox">
                        <h2 class="name">Adresse mail</h2>
                        <input class="email" type="email" name="emailN" required>
                    </div>
                    <div class="cardbox">
                        <h2 class="name">Phone</h2>
                        <input class="number" type="text" name="telephoneN" required>
                        <label class="phone_number">Num Telephone</label>
                    </div>
                    <div class="cardbox">
                        <h2 class="name">Study year</h2>
                        <select class="option" name="etude" required>
                            <option disabled="disabled" selected="selected">Select your study year</option>
                            <option>L1</option>
                            <option>L2</option>
                            <option>L3</option>
                            <option>M1</option>
                            <option>M2</option>
                        </select>
                    </div>
                    <div class="cardbox">
                        <h2 class="name">Specialite</h2>
                        <input class="spec" type="text" name="specN" required>
                    </div>
                    <div class="cardbox">
                        <h2 class="name">Faculte</h2>
                        <input class="fac" type="text" name="facN" required>
                    </div>
                    <div class="cardbox">
                        <h2 class="name">Motif</h2>
                        <textarea name="motifN" class="motif" cols="50" rows="6" required></textarea>
                    </div>
                    <div class="cardbox">
                        <h2 class="nameO">Objective expected from the club</h2>
                        <textarea name="objN" class="objectif" cols="50" rows="6" required></textarea><br>
                    </div>
                    <button type="submit" class="reg">Register</button>
                </div>
            </form>
        </div>
        
    </section>
       
    

<div class="php">
   
    <?php
$servername = "localhost";
$username = "mohamed";
$password = "medtb21";
$dbname = "pweb";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $matricule=$_POST['mat'];
    $prenom=$_POST['prenomN'];
    $nom=$_POST['nomN'];
    $email=$_POST['emailN'];
    $telephone=$_POST['telephoneN'];
    $annee=$_POST['etude'];
    $specialite=$_POST['specN'];
    $faculte=$_POST['facN'];
    $motif=$_POST['motifN'];
    $objectif=$_POST['objN'];

$sql = "insert into inscrits(matricul, prenom, nom, email, telephone,annee_etude,specialite,faculte,motif,objectif) values($matricule,'$prenom','$nom','$email','$telephone','$annee','$specialite','$faculte','$motif','$objectif')";

if ($conn->query($sql) === TRUE) {
   
  echo ' <script> alert("Welcome \nyou are registered now ");</script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</div>
<center><h1>Some statistics about our participents</h1></center>

<div class="tables">
   
<?php
    if($result2->num_rows >0){
        echo"
            <table class='table1'>
            <tr>
              <th>faculte</th>
              <th>numbre</th>
            </tr>";
        while($data2=$result2->fetch_assoc()){
            echo"            
            <tr>
              <td>".$data2['faculte']."</td>
              <td>".$data2['count(*)']."</td>
            </tr>";
            
        }echo "</table>";
    }
?>
<?php
    if($result3->num_rows >0){
        echo"
            <table class='table2'>
            <tr>
              <th>year</th>
              <th>number</th>
            </tr>";
        while($data3=$result3->fetch_assoc()){
            echo"            
            <tr>
              <td>".$data3['annee_etude']."</td>
              <td>".$data3['count(*)']."</td>
            </tr>";
            
        }echo "</table>";
    }
?>
</div>
<footer >
        <div class="footer-content">
            
            <p> You can find and contact  <b>Micro club</b>  on </p>
            <ul class="socials">
            <li><a href="https://www.facebook.com/Micro.Club.USTHB/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/club_micro" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/microclub_usthb/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/in/micro-club-usthb/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                <li><a href="https://github.com/MicroClub-USTHB" target="_blank"><i class="fa fa-github"></i></a></li>
            </ul>
        </div>
        
     </footer>
 </body>

</html>  
