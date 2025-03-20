<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;

    // Naam ophalen
    $naam = $_POST['naam'];

    // Punten berekenen
    $score += $_POST['snelheid'];
    $score += $_POST['actieradius'];
    $score += $_POST['prijs'];

    if ($_POST['bepantsering'] == "zwaar") {
        $score += 50;
    } elseif ($_POST['bepantsering'] == "middel") {
        $score += 30;
    } else {
        $score += 10;
    }

    if ($_POST['bemanning'] == "5") {
        $score += 40;
    } elseif ($_POST['bemanning'] == "3") {
        $score += 20;
    }

    if ($_POST['amfibisch'] == "ja") {
        $score += 30;
    }

    if (isset($_POST['opties'])) {
        $score += count($_POST['opties']) * 10;
    }

    // Resultaat bepalen
    if ($score >= 250) {
        $resultaat = "Jouw voertuig is een gevechtstank!";
    } elseif ($score >= 150) {
        $resultaat = "Jouw voertuig is een pantservoertuig!";
    } elseif ($score >= 100) {
        $resultaat = "Jouw voertuig is een lichte verkenningsauto!";
    } else {
        $resultaat = "Jouw voertuig is een eenvoudige transportwagen.";
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultaat</title>
</head>
<body>
<div class="container">
    <h1>Resultaat voor <?php echo htmlspecialchars($naam); ?></h1>
    <p><?php echo $resultaat; ?></p>
    <a href="formulier.php">Opnieuw invullen</a>
</div>
</body>
</html>
