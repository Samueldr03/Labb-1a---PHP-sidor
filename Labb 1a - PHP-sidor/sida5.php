<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Sida 5 - Servervariabler</title>
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

<h1>Information om server och användare</h1>
<p>På denna sida använder vi inbyggda servervariabler i PHP för att visa information om din anslutning, servern och det aktuella skriptet.</p>
<p>Denna information kan vara användbar för felsökning eller loggning.</p>

<?php
// Servernamn
$serverName = $_SERVER['SERVER_NAME'];

// Användarens IP-adress
$userIP = $_SERVER['REMOTE_ADDR'];

// Filnamnet på sidan
$currentFile = $_SERVER['PHP_SELF'];

// Port som används av användaren
$userPort = $_SERVER['REMOTE_PORT'];

// Metod som använts (GET/POST)
$requestMethod = $_SERVER['REQUEST_METHOD'];

// Utskrifter
echo "<h3>Serverinformation:</h3>";
echo "<p><strong>Servernamn:</strong> $serverName</p>";
echo "<p><strong>Din IP-adress:</strong> $userIP</p>";
echo "<p><strong>Aktuellt filnamn:</strong> $currentFile</p>";
echo "<p><strong>Din port:</strong> $userPort</p>";
echo "<p><strong>HTTP-metod:</strong> $requestMethod</p>";
?>

<!-- Footer -->
<?php include 'Footer.php'; ?>

</body>
</html>