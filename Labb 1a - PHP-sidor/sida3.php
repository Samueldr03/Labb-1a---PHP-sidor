<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Sida 3</title>
    <link rel="stylesheet" href="style.css"> <!-- Använd den faktiska stilmallen -->
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

<h1>Ordhantering och Sökning</h1>
<p>Denna sida visar hur man hanterar en lista med ord och söker efter ett specifikt ord i listan.</p>
<p>Fyll i en text med ord separerade av mellanslag och skriv ett sökord för att leta efter detta ord i listan.</p>

<!-- Formulär för ord och sökord -->
<h2>Fyll i ord och sökord:</h2>
<form method="post">
    <label for="words">Ord (separera med mellanslag):</label><br>
    <input type="text" id="words" name="words" required><br><br>

    <label for="searchWord">Sökord:</label><br>
    <input type="text" id="searchWord" name="searchWord" required><br><br>

    <input type="submit" name="submitWords" value="Sök">
</form>

<?php
// 1. Kolla om formuläret har skickats
if (isset($_POST['submitWords'])) {
    // 2. Hämta och dela upp strängen till en array
    $words = explode(" ", htmlspecialchars($_POST['words']));
    $searchWord = htmlspecialchars($_POST['searchWord']);

    // 3. Skriv ut arrayen i råformat
    echo "<pre>";
    echo "<h3>Array med ord:</h3>";
    print_r($words);
    echo "</pre>";

    // 4. Sök efter sökordet och hitta var det förekommer
    $foundCount = 0;
    foreach ($words as $index => $word) {
        if ($word == $searchWord) {
            echo "<p>Sökordet '$searchWord' hittades på plats: $index</p>";
            $foundCount++;
        }
    }

    // 5. Skriv ut hur många gånger sökordet hittades
    if ($foundCount > 0) {
        echo "<p>Sökordet '$searchWord' hittades $foundCount gång(er) i listan.</p>";
    } else {
        echo "<p>Sökordet '$searchWord' hittades inte i listan.</p>";
    }
}
?>

<!-- Inkludera footern -->
<?php include 'Footer.php'; ?>

</body>
</html>