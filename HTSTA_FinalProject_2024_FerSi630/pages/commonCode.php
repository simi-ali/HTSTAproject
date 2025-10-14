<?php
function navBar($currentPage)
{
	$pages = [
		"Home" => "index.php",
		"Country1" => "country1.php",
		"Country2" => "country2.php",
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