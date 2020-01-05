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

require 'base_php/debut_base.php'; 
?>

<div id="main">
	<p class="gros">
		<?php echo Titre_Accueil; ?> 
	</p>
	<hr width="50%" color="red" align="left">
	<p>
		<?php echo Contenu_Accueil; ?> 
	</p>
		

	<div id="contenu">


	</div>
</div>

<?php require 'base_php/fin_base.php'; ?>