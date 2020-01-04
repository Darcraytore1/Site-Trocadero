<?php 
require 'base_php/debut_base.php'; 
if ($_SERVER["QUERY_STRING"] === "fr") {
	require "contenu/contenu_fr.php"; 
} else {
	require "contenu/contenu_eng.php";
}
?>

<div id="main">
	<p>
		<?php echo Contenu_Contact; ?> 
	</p>
</div>

<?php require 'base_php/fin_base.php'; ?>