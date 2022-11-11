<?php

$conn=mysqli_connect("localhost","mohamed","medtb21","pweb");

$query="select * from events where id<=3 order by date";
$result=$conn->query($query);

$query1="select * from events where id>3 order by date";
$result1=$conn->query($query1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MC-Events</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cairo:wght@600&family=Oswald:wght@200;400&family=Roboto:ital,wght@1,500&family=Titillium+Web:wght@600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <section class="events">

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

        <h1><br><br> Our Events </h1>
        <p>Micro Club has a tradition of organizing,
            each year, a series of events
            exclusives who have been able to win a great
            student and media popularity.
        </p>
        <div class="ligne">
            <?php
            if($result->num_rows >0){
                while($data=$result->fetch_assoc()){
                    echo"<div class='eventLigne'>
                    <h3>".$data['titre']."</h3>
                        <h5>date : ".$data['date']."</h5>
                        <h5>type : ".$data['type']."</h5>
                        <p>".$data['description']."</p>
                    </div>";
                }
            }
            
            ?>

        </div>
        <div class="ligne">
        <?php
            if($result1->num_rows >0){
                while($data1=$result1->fetch_assoc()){
                    echo"<div class='eventLigne'>
                    <h3>".$data1['titre']."</h3>
                        <h5>date : ".$data1['date']."</h5>
                        <h5>type : ".$data1['type']."</h5>
                        <p>".$data1['description']."</p>
                    </div>";
                }
            }
            ?>
        </div>
        
    </section>
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