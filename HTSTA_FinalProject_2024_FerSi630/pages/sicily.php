<?php
include "commonCode.php";
function t($text)  {
	return $text;
}
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo t("Sicily"); ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include "navbar.php"; ?>

    <main>
        <h1><a href="https://en.wikipedia.org/wiki/Sicily" target="_blank"><?php echo t("Sicily"); ?></a></h1>

        <p>
            <?php echo t("Sicily is Italy's largest island, famous for its stunning beaches, rich history, delicious cuisine, and vibrant culture."); ?>
        </p>

        <p><?php echo t("Some recommended places to visit include:"); ?></p>

        <dl>
            <dt><a href="https://en.wikipedia.org/wiki/Palermo_Cathedral" target="_blank"><?php echo t("Cathedral of Palermo"); ?></a></dt>
            <dt><a href="https://en.wikipedia.org/wiki/Ancient_theatre_of_Taormina" target="_blank"><?php echo t("Ancient Theatre of Taormina"); ?></a></dt>
            <dt><a href="https://en.wikipedia.org/wiki/Palazzo_dei_Normanni" target="_blank"><?php echo t("Royal Palace of Palermo"); ?></a></dt>
        </dl>

        <p><?php echo t("Enjoy your journey through this beautiful island!"); ?></p>
    </main>

    <?php include "footer.php"; ?>
</body>
</html>
