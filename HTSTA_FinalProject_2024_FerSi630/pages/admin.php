<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
</head>

<body>

<?php
include_once("commonCode.php");
navBar("Admin");

// Check if user is logged in AND is admin
if (!$_SESSION["UserLogged"] || empty($_SESSION["IsAdmin"]) || $_SESSION["IsAdmin"] !== true) {
    echo "<p style='color:red;'>You do not have admin permissions.</p>";
    echo "<meta http-equiv='refresh' content='2; url=index.php?lang=$language'>";
    exit;
}
?>

<h1><?= $arrayOfTranslations["AdminBtn"] ?></h1>

<h2>Registered Users:</h2>

<?php
if (($fHandler = fopen("Clients.csv", "r")) !== false) {
    echo "<table border='1' cellpadding='10' style='border-collapse: collapse;'>";
    echo "<tr><th>Username</th></tr>";

    while (($user = fgetcsv($fHandler, 0, ";")) !== false) {
        if (!empty(trim($user[0]))) {
            echo "<tr><td>" . htmlspecialchars(trim($user[0])) . "</td></tr>";
        }
    }

    echo "</table>";

    fclose($fHandler);
} else {
    echo "<p style='color:red;'>Could not read Clients.csv</p>";
}
?>

</body>
</html>
