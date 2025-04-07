<?php
$datum = date("Y-m-d");
$tijd = date("h:i:sa");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;

    // Gegevens ophalen
    $snelheid = $_POST['snelheid'];
    $penetratie = $_POST['penetratie'];
    $kaliber = $_POST['kaliber'];
    $combat_bereik = $_POST['combat_bereik'];
    $pantser_frontaal = $_POST['pantser_frontaal'];
    $pantser_zijkant = $_POST['pantser_zijkant'];
    $pantser_achterkant = $_POST['pantser_achterkant'];
    $specialisatie = $_POST['specialisatie'];
    $motor_hp = $_POST['motor_hp'];
    $brandstof = $_POST['brandstof'];
    $kostenefficient = $_POST['kostenefficient'];
    $naam = $_POST['naam'];

    if (isset($_POST['shells'])) {
        $shells = $_POST['shells'];
    } else {
        $shells = [];
    }

    // Nieuwe vragen
    $gewicht = $_POST['gewicht']; // Gewicht van de tank
    $amfibisch = $_POST['amfibisch']; // Amfibisch of niet

    // Simpele scorelogica
    $score = $score + $snelheid;
    $score = $score + ($penetratie / 10);
    $score = $score + $kaliber;
    $score = $score + ($combat_bereik / 10);
    $score = $score + ($pantser_frontaal / 5);
    $score = $score + ($pantser_zijkant / 10);
    $score = $score + ($pantser_achterkant / 10);
    $score = $score + (count($shells) * 15);
    $score = $score + ($motor_hp / 10);
    $score = $score + ($gewicht / 5);
    if ($amfibisch == "ja") {
        $score = $score + 20;
    }
    if ($specialisatie == "anti-tank") {
        $score = $score + 30;
    }
    if ($kostenefficient == "ja") {
        $score = $score + 10;
    }


    // Resultaat bepalen
    if ($score >= 250) {
        $resultaat = "Welkom $naam je hebt de formulier ingevuld om $tijd op $datum<br><br><img src='../tanks/PanzerkampfwagenVITigerII(Königstiger).png' class='imgtank'><br> Jouw voertuig is een Panzerkampfwagen VI Tiger II (Königstiger) – een zwaar bepantserde tank met krachtige vuurkracht en langeafstandsvermogen.";
    } elseif ($score >= 180) {
        $resultaat = "Welkom $naam je hebt de formulier ingevuld om $tijd op $datum<br><br><img src='../tanks/PanzerkampfwagenVITigerI.png' class='imgtank'><br>Jouw voertuig is een Panzerkampfwagen VI Tiger I – een iconische tank met dikke bepantsering, sterk kanon en uitstekende gevechtsmogelijkheden.";
    } elseif ($score >= 120) {
        $resultaat = "Welkom $naam je hebt de formulier ingevuld om $tijd op $datum<br><br><img src='../tanks/PanzerkampfwagenVPanther.png' class='imgtank'><br>Jouw voertuig is een Panzerkampfwagen V Panther – een gebalanceerde tank met goede mobiliteit, penetratie en pantser.";
    } else {
        $resultaat = "Welkom $naam je hebt de formulier ingevuld om $tijd op $datum<br><br><img src='../tanks/panzerkampfwagenIV.png' class='imgtank'><br>Jouw voertuig is een Panzerkampfwagen IV – veelzijdig, kostenefficiënt en geschikt voor verschillende scenario's.";
    }

    // Cookie instellen voor 1 uur
    setcookie("resultaat", $resultaat, time() + 3600);
}
if (isset($_COOKIE['resultaat'])) {
    // Als geen formulier is verzonden, maar cookie bestaat
    $resultaat = $_COOKIE['resultaat'];
} else {
    // Geen formulier én geen cookie
    $resultaat = "Er is nog geen formulier ingevuld.";
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/verwerk.css">
    <title>Resultaat</title>
</head>
<body>
<div class="container">
    <h1>Resultaat</h1>
    <p><?php echo $resultaat; ?></p>
    <a href="formulier.php">Opnieuw invullen</a>
</div>
</body>
</html>
