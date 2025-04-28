<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Sida 2</title>
    <link rel="stylesheet" href="style.css"> <!-- Använd din faktiska stilmall -->
    <style>
        body {
            margin: 0;
            padding-bottom: 60px; /* så att inte footern täcker innehållet */
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>

<?php include 'menu.php'; ?>

<h1>Om denna sida</h1>
<p>Detta är sida 2 i webbplatsen. Här kan du mata in tre djur som finns på en bondgård och sedan manipulera dessa djur i en array.</p>

<!-- Formulär för att mata in djur -->
<h2>Mata in tre djur från en bondgård:</h2>
<form method="post">
    <label for="animal1">Djur 1:</label>
    <input type="text" id="animal1" name="animal1" required><br><br>

    <label for="animal2">Djur 2:</label>
    <input type="text" id="animal2" name="animal2" required><br><br>

    <label for="animal3">Djur 3:</label>
    <input type="text" id="animal3" name="animal3" required><br><br>

    <input type="submit" name="submitAnimals" value="Skicka">
</form>

<?php
// 1. Kontrollera om formuläret har skickats
if (isset($_POST['submitAnimals'])) {
    // 2. Spara djuren i arrayen $farmAnimals
    $farmAnimals = array(
        htmlspecialchars($_POST['animal1']),
        htmlspecialchars($_POST['animal2']),
        htmlspecialchars($_POST['animal3'])
    );

    // 3. Skriv ut arrayen i råformat
    echo "<pre>";
    echo "<h3>Array i råformat (innan förändringar):</h3>";
    print_r($farmAnimals);
    echo "</pre>";

    // 4. Ersätt djuret på tredje platsen med "Struts"
    $farmAnimals[2] = "Struts";

    // 5. Lägg till "Alpacka" som fjärde djur
    $farmAnimals[] = "Alpacka";

    // 6. Ta bort det första djuret (index 0)
    array_shift($farmAnimals);

    // 7. Skriv ut den modifierade arrayen i råformat
    echo "<pre>";
    echo "<h3>Array i råformat (efter förändringar):</h3>";
    print_r($farmAnimals);
    echo "</pre>";

    // 8. Skriv ut djuret på andra platsen i arrayen
    echo "<p>Det djur som nu finns på andra platsen i arrayen är: " . $farmAnimals[1] . "</p>";
}
?>

<!-- Inkludera footern -->
<?php include 'Footer.php'; ?>

</body>
</html>