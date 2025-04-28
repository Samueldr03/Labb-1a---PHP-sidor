<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Sida 1</title>
    <link rel="stylesheet" href="style.css"> <!-- Valfri stilmall -->
</head>
<body>

<?php include 'menu.php'; ?>

<h1>Sida 1</h1>

<p>
    <?php
    echo "Denna text är genererad med utskriftskommandot i PHP";
    ?>
</p>

<h2>Mata in ditt namn:</h2>
<form method="post">
    <label for="namn">Namn:</label>
    <input type="text" id="namn" name="namn">
    <input type="submit" name="submitNamn" value="Skicka">
</form>

<?php
if (isset($_POST['submitNamn'])) {
    // Spara värdet i strName, använd förvalt namn om tomt
    $strName = !empty($_POST['namn']) ? htmlspecialchars($_POST['namn']) : "Ditt Namn";

    // Skriv ut önskad information
    echo "<p>Hej $strName!</p>";
    echo "<p>Baklänges: " . strrev($strName) . "</p>";
    echo "<p>Gemener: " . mb_strtolower($strName, 'UTF-8') . "</p>";
    echo "<p>Versaler: " . mb_strtoupper($strName, 'UTF-8') . "</p>";
    echo "<p>Antal tecken: " . mb_strlen($strName, 'UTF-8') . "</p>";
}
?>

<?php include 'footer.php'; ?>

</body>
</html>