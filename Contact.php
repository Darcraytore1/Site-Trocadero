<?php 
if ($_GET["lang"] === "fr") {
	require_once "contenu/contenu_fr.php"; 
} else {
	require_once "contenu/contenu_eng.php";
}

require 'base_php/debut_base.php'; 
?>

<div id="main">
	<p>
		<?php echo Contenu_Contact; ?> 
	</p>
</div>

<?php require 'base_php/fin_base.php'; ?>