<?php

$datum = date("Y-m-d");
$tijd = date("h:i:sa");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;

    // Gegevens ophalen
    $snelheid = (int) $_POST['snelheid'];
    $penetratie = (int) $_POST['penetratie'];
    $kaliber = (int) $_POST['kaliber'];
    $combat_bereik = (int) $_POST['combat_bereik'];
    $pantser_frontaal = (int) $_POST['pantser_frontaal'];
    $pantser_zijkant = (int) $_POST['pantser_zijkant'];
    $pantser_achterkant = (int) $_POST['pantser_achterkant'];
    $specialisatie = $_POST['specialisatie'];
    $motor_hp = (int) $_POST['motor_hp'];
    $brandstof = $_POST['brandstof'];
    $kostenefficient = $_POST['kostenefficient'];
    $naam = $_POST['naam'];

    // Shells tellen als er zijn
    if (isset($_POST['shells'])) {
        $shells = $_POST['shells'];
    } else {
        $shells = [];
    }


    // Simpele scorelogica
    $score += $snelheid;
    $score += $penetratie / 10; // bijv. 200 mm = 20 punten
    $score += $kaliber;
    $score += $combat_bereik / 10;
    $score += $pantser_frontaal / 5;
    $score += $pantser_zijkant / 10;
    $score += $pantser_achterkant / 10;
    $score += count($shells) * 15;
    $score += $motor_hp / 10;

    if ($specialisatie == "anti-tank") $score += 30;
    if ($kostenefficient == "ja") $score += 10;

    // Resultaat bepalen
    if ($score >= 250) {
        $resultaat = " Welkom $naam je hebt de formulier ingevuld om $tijd op $datum  <br> Jouw voertuig is een Panzerkampfwagen VI Tiger II (Königstiger) – een zwaar bepantserde tank met krachtige vuurkracht en langeafstandsvermogen. <img src='../tanks/PanzerkampfwagenVITigerII(Königstiger).png' class='imgtank'> ";
    } elseif ($score >= 180) {
        $resultaat = " Welkom $naam je hebt de formulier ingevuld om $tijd op $datum   <br>Jouw voertuig is een Panzerkampfwagen VI Tiger I – een iconische tank met dikke bepantsering, sterk kanon en uitstekende gevechtsmogelijkheden. <img src='../tanks/PanzerkampfwagenVITigerI.png' class='imgtank' >";
    } elseif ($score >= 120) {
        $resultaat = " Welkom $naam je hebt de formulier ingevuld om $tijd op $datum   <br> Jouw voertuig is een Panzerkampfwagen V Panther – een gebalanceerde tank met goede mobiliteit, penetratie en pantser.<img src='../tanks/PanzerkampfwagenVPanther.png' class='imgtank'>";
    } else {
        $resultaat = " Welkom $naam je hebt de formulier ingevuld om $tijd op $datum  <br> Jouw voertuig is een Panzerkampfwagen IV – veelzijdig, kostenefficiënt en geschikt voor verschillende scenario's.<br><img src='../tanks/panzerkampfwagenIV.png' class='imgtank'>";
    }
    while($score >= 250)
    {
        $resultaat = " Welkom $naam je hebt de formulier ingevuld om $tijd op $datum  <br> Jouw voertuig is een Panzerkampfwagen VI Tiger II (Königstiger) – een zwaar bepantserde tank met krachtige vuurkracht en langeafstandsvermogen. <img src='../tanks/PanzerkampfwagenVITigerII(Königstiger).png' class='imgtank'> ";
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Resultaat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f1f1;
            padding: 20px;
        }
        .container {
            background: white;
            border-radius: 10px;
            padding: 20px;
            max-width: 700px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        a {
            display: inline-block;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }

        .imgtank
        {
            width: 100px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Resultaat</h1>
    <p><?php echo $resultaat; ?></p>
    <a href="formulier.php">Opnieuw invullen</a>
</div>
</body>
</html>
