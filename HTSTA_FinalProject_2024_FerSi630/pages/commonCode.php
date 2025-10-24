<?php
function navBar($currentPage)
{
	$pages = [
		"Home" => "index.php",
		"Country1" => "country1.php",
		"Country2" => "country2.php",
		"Register" => "register.php",
	];
?>
	<header>
		<img id="logo" src="../images/lpem.png" alt="banner">
		<nav>
			<ul>
				<?php foreach ($pages as $name => $url): ?>
					<li class="highlightColor <?= ($currentPage === $name) ? 'active' : '' ?>">
						<a href="<?= $url ?>"><?= $name === "Country1" ? "Country #1" : ($name === "Country2" ? "Country #2" : $name) ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</nav>
	</header>
<?php
}
?>

<?php
	function userAlreadyRegistered($checkedUser){
		//this function checks if $checkUser string is an existing user in the Clients.csv
		//IF the given user IS already in the file we will return TRUE -> user already registered
		//IF NOT (the user did not register) we will return from this function FALSE 

		$bReturnValue = false; //the user is NOT in our database

		$fHandler = fopen("Clients.csv", "r");
		while(!feof($fHandler)){
			$newLine = fgets($fHandler);
			$items = explode(";",$newLine);
			if ($items[0] == $checkedUser){
				$bReturnValue = true;
			}
		}

		return $bReturnValue;
	}
?>