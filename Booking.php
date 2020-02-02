<?php

    function init()
    {
        $pdo = new PDO("mysql:host=localhost;dbname=dj_website", "root", "");
        $pdo->exec("set names utf8");
        if(isset($_POST["firstname"]) && $_POST["firstname"] != ""){
            if(isset($_POST["lastname"]) && $_POST["lastname"] != ""){
                if((isset($_POST["telephone"]) && $_POST["telephone"] != "") || (isset($_POST["email"]) && $_POST["email"] != "")){
                    if(isset($_POST["dateofshow"]) && $_POST["dateofshow"] != ""){
                        $stmt = $pdo->prepare("INSERT INTO bookings (firstname, lastname, telephone, email, dateofshow, message) 
                                                         VALUES (:firstname, :lastname, :telephone, :email, :dateofshow, :message)");
                        $stmt -> execute(["firstname"=>$_POST["firstname"], "lastname"=>$_POST["lastname"],
                            "telephone"=>$_POST["telephone"], "email"=>$_POST["email"], "dateofshow"=>$_POST["dateofshow"], "message"=>$_POST["message"]]);
                        booked();
                    }
                }
            }
        }

    }

    function booked(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo "Danke für deine Anfrage";
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Unknownbeaz | Official Website</title>
    <link rel="stylesheet" href="Home_Style.css">
    <link rel="stylesheet" href="Booking_Style.css">
    <link rel="shortcut icon" href="images/favicon-32x32.png" type="image/x-icon">
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
                <a href="https://www.instagram.com/julianmosi7/" class="fab fa-instagram" id = "it" target="_blank"></a>
            </li>

            <li>
                <a href="https://soundcloud.com/unknown_b3ats" class="fab fa-soundcloud" id = "sc" target="_blank"></a>
            </li>

            <li>
                <a href="https://www.facebook.com/profile.php?id=100009462600094" class="fab fa-facebook" id = "fb" target="_blank"></a>
            </li>

        </ul>
    </nav>
</header>

<main>
    <nav class = "booking">
        <h1>Booking</h1>
        <form action = "Booking.php" method = "post">
        <table>
            <tr>
                <td>
                    <p>Vorname:</p>
                    <p><input type = "text" name = "firstname"></p>
                </td>

                <td>
                    <p>Nachname:</p>
                    <p><input type = "text" name = "lastname"></p>
                </td>
            </tr>

            <tr>
                <td>
                    <p>Telefon:</p>
                    <p><input type = "text" name = "telephone"></p>
                </td>

                <td>
                    <p>E-Mail:</p>
                    <p><input type = "text" name = "email"></p>
                </td>

            </tr>

            <tr>
                <td>
                    <p>Auftrittsdatum:</p>
                    <p><input type = "text" name = "dateofshow"></p>
                </td>

                <td>
                <p>eventuell Nachricht:</p>
                <p><textarea type="text" name = "message"></textarea></p>
                <p><button type="submit">Booking</button></p>
                </td>
            </tr>


        </table>

            <div class = "booked"></div>
            <p><?php init()?></p>

        </form>
        <a id="fr">Bei Fragen oder Anregungen einfach eine Mail schreiben: <a id="fr" href="mailto:unknownbeaz.dj@gmail.com">unknownbeaz.dj@gmail.com</a></a>
    </nav>



</main>

<footer>
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