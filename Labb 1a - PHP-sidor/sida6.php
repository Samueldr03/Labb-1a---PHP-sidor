<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Sida 6 - PHP tar emot data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'menu.php'; ?>

<h1>Mottagen data från formulär</h1>
<p>Denna sida tar emot namn och telefonnummer via GET eller POST och skriver ut dem.</p>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['namn']) && isset($_GET['telefon'])) {
    $namn = htmlspecialchars($_GET['namn']);
    $telefon = htmlspecialchars($_GET['telefon']);

    echo "<h3>Data mottagen via GET:</h3>";
    echo "<p><strong>Namn:</strong> $namn</p>";
    echo "<p><strong>Telefon:</strong> $telefon</p>";
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['namn']) && isset($_POST['telefon'])) {
    $namn = htmlspecialchars($_POST['namn']);
    $telefon = htmlspecialchars($_POST['telefon']);

    echo "<h3>Data mottagen via POST:</h3>";
    echo "<p><strong>Namn:</strong> $namn</p>";
    echo "<p><strong>Telefon:</strong> $telefon</p>";
} else {
    echo "<p>Ingen data har skickats än.</p>";
}
?>

<?php include 'Footer.php'; ?>

</body>
</html>