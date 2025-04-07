



<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/formulier.css">
    <link rel="stylesheet" href="styles/nav.css">
    <title>FORMULIER</title>
</head>
<body>
<header>
    <?php
    include "include/navformulier.php";
    ?>
</header>

<main>
    <div id="intro">
        <H1>Welkom bij de formulier pagina.</H1>
        <h2>Op deze pagina kan je een vragenlijst invullen, waarbij je een soort-tank te zien krijgt afhankelijk van je wensen</h2>
    </div>
    <h1 id="hoofdregel">De formulier</h1>
    <div class="container">
        <form action="verwerk_formulier.php" method="POST">

            <div class="vraag">
                <h2>1) Wat is je naam?)</h2>
                <input type="text" name="naam"  required>

            </div>



            <div class="vraag">
                <h2>2) Hoe snel moet het gewenste voertuig zijn? (in km/u)</h2>
                <input type="number" name="snelheid" min="1" max="150" required>
                <p>Minimale snelheid: 1 km/u, Maximale snelheid: 150 km/u</p>
            </div>

            <div class="vraag">
                <h2>3) Hoeveel penetratie moet het maximaal bevatten? (in mm)</h2>
                <input type="number" name="penetratie" min="1" max="200" required>
                <p>Minimale penetratie: 1 mm, Maximale penetratie: 200 mm</p>
            </div>

            <div class="vraag">
                <h2>4) Wat voor soort shells moet het tank steunen?</h2>
                <label><input type="checkbox" name="shells[]" value="APDS"> APDS</label><br>
                <label><input type="checkbox" name="shells[]" value="AP"> AP</label><br>
                <label><input type="checkbox" name="shells[]" value="HE"> HE</label><br>
                <label><input type="checkbox" name="shells[]" value="APHE"> APHE</label>
            </div>

            <div class="vraag">
                <h2>5) Hoe groot moet het kaliber van het kanon zijn? (in mm)</h2>
                <input type="number" name="kaliber" min="50" max="128" required>
                <p>Minimaal kaliber: 50 mm, Maximale kaliber: 128 mm</p>
            </div>

            <div class="vraag">
                <h2>6) Wat is het gewenste effectief combat bereik? (in meter)</h2>
                <input type="number" name="combat_bereik" min="100" max="5000" required>
                <p>Minimaal bereik: 100 meter, Maximale bereik: 5000 meter</p>
            </div>

            <div class="vraag">
                <h2>7) Hoe dik moet het frontale pantser zijn? (in mm)</h2>
                <input type="number" name="pantser_frontaal" min="0" max="200" required>
                <p>Minimaal pantser: 0 mm, Maximale pantser: 200 mm</p>
            </div>

            <div class="vraag">
                <h2>8) Hoe dik moet het zijpantser zijn? (in mm)</h2>
                <input type="number" name="pantser_zijkant" min="0" max="100" required>
                <p>Minimaal pantser: 0 mm, Maximale pantser: 100 mm</p>
            </div>

            <div class="vraag">
                <h2>9) Hoe dik moet het achterpantser zijn? (in mm)</h2>
                <input type="number" name="pantser_achterkant" min="0" max="100" required>
                <p>Minimaal pantser: 0 mm, Maximale pantser: 100 mm</p>
            </div>

            <div class="vraag">
                <h2>10) Wat is de specialisatie van de tank?</h2>
                <label><input type="radio" name="specialisatie" value="anti-lucht" required> Anti-lucht</label><br>
                <label><input type="radio" name="specialisatie" value="anti-personeel"> Anti-personeel</label><br>
                <label><input type="radio" name="specialisatie" value="anti-tank"> Anti-tank</label>
            </div>

            <div class="vraag">
                <h2>11) Hoe sterk moet de motor zijn? (in HorsePower)</h2>
                <input type="number" name="motor_hp" min="50" max="1500" required>
                <p>Minimale motor HP: 50, Maximale motor HP: 1500</p>
            </div>

            <div class="vraag">
                <h2>12) Wat voor soort brandstof moet het tank gebruiken?</h2>
                <label><input type="radio" name="brandstof" value="diesel" required> Diesel</label><br>
                <label><input type="radio" name="brandstof" value="benzine"> Benzine</label>
            </div>

            <div class="vraag">
                <h2>13) Moet de tank kostenefficiënt zijn?</h2>
                <label><input type="radio" name="kostenefficient" value="ja" required> Ja</label><br>
                <label><input type="radio" name="kostenefficient" value="nee"> Nee</label>
            </div>

            <button class="formulierknop" type="submit">Verstuur</button>

        </form>

    </div>
</main>

<br>

</body>

<?php
include "footer.php";
?>

</html>
