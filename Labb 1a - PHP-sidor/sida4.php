<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Sida 4 - Beräkningar</title>
    <link rel="stylesheet" href="style.css"> <!-- Min gemensamma CSS -->
    <style>
        body {
            margin: 0;
            padding-bottom: 80px;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>

<?php include 'menu.php'; ?>

<h1>Beräkna omkrets och area</h1>
<p>På denna sida kan du mata in längd och bredd för en rektangel.</p>
<p>Programmet kommer att beräkna och skriva ut omkretsen och arean baserat på dina värden.</p>

<!-- Formulär för längd och bredd -->
<form method="post">
    <label for="length">Längd:</label><br>
    <input type="number" name="length" id="length" required><br><br>

    <label for="width">Bredd:</label><br>
    <input type="number" name="width" id="width" required><br><br>

    <input type="submit" name="calculate" value="Beräkna">
</form>

<?php
// Funktion för att räkna ut arean
function calculateArea($length, $width) {
    return $length * $width;
}

// Funktion för att räkna ut omkrets och skriva ut både omkrets och area
function calculateCircumference($length, $width) {
    $circumference = 2 * ($length + $width);
    $area = calculateArea($length, $width);

    echo "<h3>Resultat:</h3>";
    echo "<p>Omkrets: $circumference</p>";
    echo "<p>Area: $area</p>";
}

// Kolla om formuläret är skickat
if (isset($_POST['calculate'])) {
    $length = floatval($_POST['length']);
    $width = floatval($_POST['width']);

    if ($length > 0 && $width > 0) {
        calculateCircumference($length, $width);
    } else {
        echo "<p style='color:red;'>Längd och bredd måste vara större än 0.</p>";
    }
}
?>

<!-- Footer inkluderas -->
<?php include 'Footer.php'; ?>

</body>
</html>