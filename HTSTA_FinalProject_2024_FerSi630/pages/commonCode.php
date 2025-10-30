<?php
$language = "EN";

if (isset($_GET["lang"])) {
    $language = $_GET["lang"];
}

$arrayOfTranslations = [];

if (($fileTranslations = fopen("Translation.csv", "r")) !== false) {
    $header = fgetcsv($fileTranslations, 0, ";");

    while (($piecesOfTranslations = fgetcsv($fileTranslations, 0, ";")) !== false) {
        if (count($piecesOfTranslations) >= 3) {
            $key = trim($piecesOfTranslations[0]);
            $english = trim($piecesOfTranslations[1]);
            $portuguese = trim($piecesOfTranslations[2]);

            $arrayOfTranslations[$key] = ($language == "EN") ? $english : $portuguese;
        }
    }

    fclose($fileTranslations);
} else {
    die("Translation file not found.");
}

function navBar($currentPage)
{
    global $language, $arrayOfTranslations;

    $pages = [
        "Home" => ["label" => $arrayOfTranslations["HomeBtn"], "url" => "index.php"],
        "Country1" => ["label" => $arrayOfTranslations["Country1Btn"], "url" => "country1.php"],
        "Country2" => ["label" => $arrayOfTranslations["Country2Btn"], "url" => "country2.php"],
        "Register" => ["label" => $arrayOfTranslations["RegisterBtn"], "url" => "register.php"],
    ];
?>
    <header>
        <img id="logo" src="../images/lpem.png" alt="banner">
        <nav>
            <ul>
                <?php foreach ($pages as $pageKey => $pageData): ?>
                    <li class="highlightColor <?= ($currentPage === $pageKey) ? 'active' : '' ?>">
                        <a href="<?= $pageData['url'] ?>"><?= htmlspecialchars($pageData['label']) ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <form>
                <select name="lang" onchange="this.form.submit()">
                    <option value="EN" <?= ($language == "EN") ? "selected" : "" ?>>English</option>
                    <option value="PT" <?= ($language == "PT") ? "selected" : "" ?>>Portuguese</option>
                </select>
            </form>
        </nav>
    </header>
<?php
}

function userAlreadyRegistered($checkedUser)
{
    $bReturnValue = false;

    if (($fHandler = fopen("Clients.csv", "r")) !== false) {
        while (($items = fgetcsv($fHandler, 0, ";")) !== false) {
            if (isset($items[0]) && trim($items[0]) === trim($checkedUser)) {
                $bReturnValue = true;
                break;
            }
        }
        fclose($fHandler);
    }

    return $bReturnValue;
}
?>
