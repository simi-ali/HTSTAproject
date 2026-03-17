<!DOCTYPE html>
<html lang="en">

<head>
	<title>HTSTA Final Project</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../style.css">
</head>

<body>
	<?php
	include("commonCode.php");
	navBar("Products");


	?>
	<main>
		
		<h1><a href="https://en.wikipedia.org/wiki/Italy" target="blank_"><?= $arrayOfTranslations["Italy"] ?></a></h1>
		<h2>space</h2>
		<?php 
		$sqlQuery=$connection->prepare("SELECT * FROM Products");
		$sqlQuery->execute();
		$result=$sqlQuery->get_result();
		while($row=$result->fetch_assoc()){
		?>
		<figure>
                <figcaption><?= $row[($language == "EN") ? "productEN" : "productPT"] ?></figcaption>
                <img src="<?= $row["imageLink"] ?>" alt="<?= $row["productEN"] ?>" width="300">
                <figcaption><a href="<?= $row["pageLink"] ?>?lang=<?= $language ?>"> </a></figcaption>
                <figcaption><?= $row["price"] ?>€</figcaption>
                <form method="POST">
                    <input tpye="number" placeholder="quantity" name="quantityToBuy">
                    <input type="hidden" value="<?= $row["productID"] ?>" name="itemToBuy"></input>
                    <input type="submit" value="buy">
                </form>
            </figure>
        <?php
        }
        ?>
		<h2>space</h2>
		<h2>space</h2>
	</main>
	<footer>
		<p> LPEM - HTSTA Final Project 2024 </p>
	</footer>
</body>

</html>