<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <?php
        include_once("commonCode.php");
        navBar("Register");
    ?>

    <h1>Registration form:</h1>
    <?php
    $showForm = true;
    if (isset($_POST["Username"], $_POST["psw"], $_POST["pswAgain"])) {
        $showForm = false;
        if ($_POST["psw"] == "") {
            print("Please type a password");
            $showForm = true;
        } else {

            if ($_POST["psw"] == $_POST["pswAgain"] && !userAlreadyRegistered($_POST["Username"])) {
                print("Passwords match. You will be registered ...");
                $fHandler = fopen("Clients.csv", "a");
                fwrite($fHandler, "\n" . $_POST["Username"] . ";" . $_POST["psw"]);
                fclose($fHandler);
            } else {
                $showForm = true;
                print("Passwords do not match or the user already exists. Please try again");
            }
        }
    }
    if ($showForm) {
    ?>
        <form method="POST">
            <label>Username:</label>
            <br>
            <input type="test" name="Username">
            <br>
            <label>Password:</label>
            <br>
            <input type="password" name="psw">
            <input type="password" name="pswAgain">
            <input type="submit" value="Register">
        </form>
    <?php
    }
    ?>

</body>

</html>