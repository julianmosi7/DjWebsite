<?php

function init(){
    getGigs();
}

function getGigs()
{
    //"mysql:host=localhost;dbname=id7152399_dj_website", "id7152399_julianmosi7", "julianselina"
    $pdo = new PDO('mysql:host=localhost;dbname=dj_website', 'root', '');
    $pdo->exec("set names utf8");
    $result = $pdo->query("SELECT * FROM gigs");
    foreach ($result as $row)
    {
        echo "<table>";
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["location"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "</tr>";
        echo "</table>";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Unknownbeaz | Official Website</title>
    <link rel="stylesheet" href="button.css">
    <link rel="stylesheet" href="Home_Style.css">
    <link rel="shortcut icon" href="images/favicon-32x32.png" type="image/x-icon">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
          integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
<header>

    <nav class = "menu">

        <ul>

            <li>
                <div class = "logo">
                    <a href = "index.php"><img src="images/Logo_neuer_Entwurf_2.png" height="30" width="250" id = "img"></a>
                </div>
            </li>


            <li>
                <a href = "Biography.php" id = "bio">Biography</a>
            </li>

            <li>
                <a href = "Booking.php" id = "book">Booking</a>
            </li>

            <li>
                <a href = "Photos.php" id = "photos">Photos</a>
            </li>



            <li>
                <a href="https://www.instagram.com/unknownbeaz/" class="fab fa-instagram" id = "it" target="_blank"></a>
            </li>

            <li>
                <a href="https://soundcloud.com/unknownbeaz" class="fab fa-soundcloud" id = "sc" target="_blank"></a>
            </li>

            <li>
                <a href="https://www.facebook.com/unknownbeaz/" class="fab fa-facebook" id = "fb" target="_blank"></a>
            </li>

        </ul>
    </nav>
</header>


<main>
    <img id="big_picture" src="images/website_img_expand.png"/>
<!--    <iframe width="100%" height="20" scrolling="no" frameborder="no" allow="autoplay"
src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/613207242&color=%23ff5500&inverse=true&auto_play=true&show_user=true"></iframe>-->
<!--    <h3>Unknown Mix out now!</h3>-->

    <h3>Upcoming Gigs</h3>

<!--    <div id = "box1" style="position: absolute; width:100%;
height:500px;background-image:url(images/kisscc0-blue-color-powder-explosion-5b33bd28c8a269.262863741530117416821822.png);
background-repeat: no-repeat;background-position: center"></div>-->
    <nav class = "gigs">
<!--        <br>-->
<!--        <br>-->
<!--        <br>-->
        <?php init()?>

    </nav>

<!--    <br>-->
<!--    <br>-->
<h3>Music</h3>
        <iframe style="margin-left: 4rem" width="500" height="300" scrolling="no" frameborder="no" allow="autoplay"
                src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/613207242&color=%23ff5500&auto_play=true&hide_related
                =false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
        <iframe style="margin-left: 3rem" width="500" height="300" scrolling="no" frameborder="no" allow="autoplay"
                src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/606289104&color=%23ff5500&auto_play=false&hide_related
                =false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
        <iframe style="margin-left: 4rem" width="500" height="300" scrolling="no" frameborder="no" allow="autoplay"
                src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/600983943&color=%23ff5500&auto_play=false&hide_related
                =false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
    <br>
    <br>




   <h3>Interessiert?</h3>
    <div class="c" style="text-align: center;">
    <a href="Booking.php"><button>Booking</button></a>
    </div>
    <br>
    <br>


</main>


<<footer>
    <nav class = "menu_footer">

        <ul>
            <li>
                <a href = "Hilfe.html">Hilfe</a>
            </li>

            <li>
                <a href = "Kontakt.html">Kontakt</a>
            </li>
        </ul>
    </nav>
</footer>

</body>
</html>