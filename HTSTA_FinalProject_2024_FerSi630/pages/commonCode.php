<?php
$language = "EN";

if (isset($_GET["lang"])) {
	$language = $_GET["lang"];
}

print("The current language is " . $language);

$arrayOfTranslations = [];

$fileTranslations = fopen("Translation.csv", "r");
while (!feof($fileTranslations)) {
	$lineFromeFile = fgets($fileTranslations);
	$piecesOfTranslations = explode(";", $lineFromFile);
	$arrayOfTranslations[$piecesOfTranslations[0]] = ($language == "EN") ? $piecesOfTranslations[1] : $piecesOfTranslations[2];
}

function navBar($currentPage)
{
	global $language;
	global$arrayOfTranslations;
	$pages = [
		$arrayOfTranslations["HomeBtn"] => "index.php",
		$arrayOfTranslations["Country1Btn"] => "country1.php",
		$arrayOfTranslations["Country2Btn"] => "country2.php",
		$arrayOfTranslations["RegisterBtn"] => "register.php",
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

			<form>
				<select name="lang" onchange="this.form.submit()">
					<option value="EN" <?php if ($language == "EN") print("selected"); ?>>English</option>
					<option value="PT" <?php if ($language == "PT") print("selected"); ?>>Portuguese</option>
				</select>
			</form>



		</nav>
	</header>
<?php
}
?>

<?php
function userAlreadyRegistered($checkedUser)
{
	//this function checks if $checkUser string is an existing user in the Clients.csv
	//IF the given user IS already in the file we will return TRUE -> user already registered
	//IF NOT (the user did not register) we will return from this function FALSE 

	$bReturnValue = false; //the user is NOT in our database

	$fHandler = fopen("Clients.csv", "r");
	while (!feof($fHandler)) {
		$newLine = fgets($fHandler);
		$items = explode(";", $newLine);
		if ($items[0] == $checkedUser) {
			$bReturnValue = true;
		}
	}

	return $bReturnValue;
}
?>