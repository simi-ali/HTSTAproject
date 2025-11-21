<!DOCTYPE html>
<html>
 
<head>
    <title>Best Holiday Destinations</title>
    <link rel="stylesheet" href="style.css">
</head>
 
<body>
    <?php

    session_start();

    if(isset($_POST["Logout"])) {
        session_unset();
        session_destroy();
        session_start();
    }

    include_once("common.php");
    head("Login", "Login");
    ?>
    <main class="register">
        <h1><?= $arrayOfTranslations["LoginH1"] ?></h1>
        <br>
        <?php
        $showForm = true;
        if (isset($_POST["Username"], $_POST["psw"])) {
            $showForm = false;
            $success = false;
            if ($_POST["psw"] == null || $_POST["Username"] == null) {
                $showForm = true;
                print($arrayOfTranslations["LoginOut1"]);
            } else {
                $fHandler = fopen("Clients.csv", "r");
                fgets($fHandler);
                fgets($fHandler);
                while (!feof($fHandler)) {
                    $oneUser = fgets($fHandler);
                    $individualUserComponents = explode(";", $oneUser);
                    ($individualUserComponents[0] == $_POST["Username"] && password_verify($_POST["psw"], $individualUserComponents[1])) ? $success = true : "";
                    // $individualUserComponents[0] == $_POST["Username"] && $individualUserComponents[1] == $_POST["psw"]
                }
                if ($success) {
                    // print($arrayOfTranslations["LoginOut2"]);
                    $_SESSION["UserLogged"]=true;
                } else {
                    print($arrayOfTranslations["LoginOut3"]);
                    $showForm = true;
                }
            }
        }
        if ($showForm) {
        ?>
            <form method="POST">
                <label><?= $arrayOfTranslations["LoginLabel1"] ?></label>
                <input type="test" name="Username">
                <br>
                <br>
                <label><?= $arrayOfTranslations["LoginLabel2"] ?></label>
                <input type="password" name="psw">
                <br>
                <br>
                <input type="submit" value="<?= $arrayOfTranslations["LoginLabel3"] ?>">
            </form>
        <?php
        }
        ?>
    </main>
    <?php
    foot();
    ?>
</body>
 
</html>