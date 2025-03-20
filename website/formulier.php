<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/nav.css">
    <link rel="stylesheet" href="styles/formulier.css">
    <title>FORMULIER</title>
</head>
<body>
<header>
<?php
include "include/navformulier.php";
?>
</header>

    <main>


        <div class="container">
            <h1>Formulierpagina</h1>

            <form action="verwerk_formulier.php" method="POST">

                <div class="vraag">
                    <h2>1) Wat is je naam?</h2>
                    <input type="text" name="naam" required>
                </div>

                <div class="vraag">
                    <h2>2) Hoe snel moet het gewenste voertuig zijn?</h2>
                    <label><input type="radio" name="snelheid" value="40" required> 40 km/u</label><br>
                    <label><input type="radio" name="snelheid" value="30"> 30 km/u</label><br>
                    <label><input type="radio" name="snelheid" value="20"> 20 km/u</label>
                </div>

                <div class="vraag">
                    <h2>3) Hoeveel bepantsering moet het hebben?</h2>
                    <label><input type="radio" name="bepantsering" value="licht" required> Licht</label><br>
                    <label><input type="radio" name="bepantsering" value="middel"> Middel</label><br>
                    <label><input type="radio" name="bepantsering" value="zwaar"> Zwaar</label>
                </div>

                <div class="vraag">
                    <h2>4) Hoeveel bemanningsleden moeten erin passen?</h2>
                    <label><input type="radio" name="bemanning" value="1" required> 1</label><br>
                    <label><input type="radio" name="bemanning" value="3"> 3</label><br>
                    <label><input type="radio" name="bemanning" value="5"> 5</label>
                </div>

                <div class="vraag">
                    <h2>5) Moet het voertuig amfibisch zijn?</h2>
                    <label><input type="radio" name="amfibisch" value="ja" required> Ja</label><br>
                    <label><input type="radio" name="amfibisch" value="nee"> Nee</label>
                </div>

                <div class="vraag">
                    <h2>6) Welke extra opties wil je?</h2>
                    <label><input type="checkbox" name="opties[]" value="nachtzicht"> Nachtzicht</label><br>
                    <label><input type="checkbox" name="opties[]" value="raketten"> Raketten</label><br>
                    <label><input type="checkbox" name="opties[]" value="camouflage"> Camouflage</label>
                </div>

                <div class="vraag">
                    <h2>7) Wat is de maximale prijs?</h2>
                    <label><input type="radio" name="prijs" value="1" required> €1 miljoen</label><br>
                    <label><input type="radio" name="prijs" value="5"> €5 miljoen</label><br>
                    <label><input type="radio" name="prijs" value="10"> €10 miljoen</label>
                </div>

                <div class="vraag">
                    <h2>8) Wat is de gewenste actieradius?</h2>
                    <label><input type="radio" name="actieradius" value="100" required> 100 km</label><br>
                    <label><input type="radio" name="actieradius" value="300"> 300 km</label><br>
                    <label><input type="radio" name="actieradius" value="500"> 500 km</label>
                </div>

                <div class="vraag">
                    <h2>9) Welke communicatiemiddelen moeten aanwezig zijn?</h2>
                    <label><input type="radio" name="communicatie" value="radio" required> Radio</label><br>
                    <label><input type="radio" name="communicatie" value="satelliet"> Satelliet</label><br>
                    <label><input type="radio" name="communicatie" value="geen"> Geen</label>
                </div>

                <button type="submit">Verstuur</button>
            </form>
        </div>
    </main>

        <footer>

        </footer>
</body>
</html>
