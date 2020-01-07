<?php 
if (!isset($_GET["lang"])) {
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	if ($lang != 'fr')
	    $lang = 'eng';
	header("Location: index.php?lang=$lang");
}

if ($_GET["lang"] === "fr") {
	require_once "contenu/contenu_fr.php"; 
} else {
	require_once "contenu/contenu_eng.php";
}
?>


<!DOCTYPE html>
<html>

<head>
	<title> <?php echo basename($_SERVER["SCRIPT_NAME"], ".php"); ?> </title>
	<link rel="stylesheet" type="text/css" href="CSS.css">
	<meta charset="utf-8">
</head>
<body>
	<header>
		<div id = "entete">
			<div id="logo">
				<img src="image/logo.png">
			</div>
			
			<div id="titre">
				<h1 class="titre-principal">
					<?php echo Titre_page; ?> 
				</h1>
			</div>

			<div id="flotte">
				<p>
					<?php echo langue ?>
				</p>
				<div>	
					<a href="<?php echo $_SERVER["PHP_SELF"]; ?>?lang=fr">
						<img src="image/french_flag.png">
					</a>

					<a href="<?php echo $_SERVER["PHP_SELF"]; ?>?lang=eng">
						<img src="image/english_flag.png">
					</a>
				</div>	
			</div>
		</div>


		<div id="boutons">
			<div class="bouton <?php if ($_SERVER["SCRIPT_NAME"] === "/index.php") { ?>active<?php } ?>">
				<a href="index.php?lang=<?php echo $_GET["lang"] ?>"> 
					<h2>
						<?php echo Accueil; ?> 
					</h2>
				</a>
			</div>

			<div class="bouton <?php if ($_SERVER["SCRIPT_NAME"] === "/Rallye.php") { ?>active<?php } ?>">
				<a href="Rallye.php?lang=<?php echo $_GET["lang"] ?>"> 
					<h2>
						<?php echo Rallye; ?> 
					</h2>
				</a>
			</div>

			<div class="bouton <?php if (in_array($_SERVER["SCRIPT_NAME"], array(
																			"/Trocadero.php",
																			"/Champ_de_Mars.php",
																			"/Jardins_du_Trocadero.php",
																			"/Palais_de_Chaillot.php",
																			"/Place_du_Trocadero.php",
																			"/Tour_Eiffel.php"))) { ?>active<?php } ?>">
				<a href="Trocadero.php?lang=<?php echo $_GET["lang"] ?>"> 
					<h2>
						<?php echo Trocadero; ?> 
					<h2>
				</a>	
			</div>
			
			<div class="bouton <?php if ($_SERVER["SCRIPT_NAME"] === "/Contact.php") { ?>active<?php } ?>">
				<a href="Contact.php?lang=<?php echo $_GET["lang"] ?>"> 
					<h2>
						<?php echo Contact; ?> 
					<h2>
				</a>
			</div>
		</div>
	</header>
