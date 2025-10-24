<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP Form</title>
</head>

<body>

    <?php
    $carsAvailable = ["Volvo", "Saab", "Mercedes", "Audi", "Dacia"];
    if (isset($_POST["fname"], $_POST["lname"], $_POST["cars"])) {
        if(!isset($carsAvailable[$_POST["cars"]])) {
            print("HA HA YOU ARE a hacker! leave me the eff alone.");
            die();
        }
        print("User " . $_POST["fname"] . " loves " . $carsAvailable[$_POST["cars"]]);
     
    }
    ?>

    <form method="POST">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname">
        Pick your favorite car:
        <select name="cars" id="cars">

            <?php
            foreach ($carsAvailable as $i => $car) {

            ?>
                <option value="<?= $i ?>"> <?= $car ?> </option>
            <?php
            }
            ?>

        </select><br>
        <input type="submit" value="Submit">

    </form>
</body>

</html>