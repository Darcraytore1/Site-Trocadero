<?php 
require 'base_php/debut_base.php'; 
if ($_GET["lang"] === "fr") {
	require "contenu/contenu_fr.php"; 
} else {
	require "contenu/contenu_eng.php";
}
?>

<div id="main">


	<div id="contenu">


 	</div>
</div>

<?php require 'base_php/fin_base.php'; ?>