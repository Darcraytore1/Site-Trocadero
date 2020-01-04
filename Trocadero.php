<?php 
require 'base_php/debut_base.php';
if ($_SERVER["QUERY_STRING"] === "fr") {
	require "contenu/contenu_fr.php"; 
} else {
	require "contenu/contenu_eng.php";
}
?>

<div id="main">


	<p class="gros">
		<?php echo Titre_Rallye; ?> 
	</p>
	<hr width="50%" color="red" align="left">


	<p class="gros">
		<a href="Place_du_Trocadero.php?<?php echo $_SERVER["QUERY_STRING"] ?>"> <?php echo Place_du_Trocadéro; ?> </a>
	</p>
	<hr width="20%" color="red" align="left">


	<p class="gros">
		<a href="Tour_Eiffel.php?<?php echo $_SERVER["QUERY_STRING"] ?>"> <?php echo Tour_Eiffel; ?> </a>
	</p>
	<hr width="20%" color="red" align="left">


	<p class="gros">
		<a href="Palais_de_Chaillot.php?<?php echo $_SERVER["QUERY_STRING"] ?>"> <?php echo Palais_de_Chaillot; ?> </a>
	</p>
	<hr width="20%" color="red" align="left">


	<p class="gros">
		<a href="Jardins_du_Trocadero.php?<?php echo $_SERVER["QUERY_STRING"] ?>"> <?php echo Jardins_du_Trocadéro; ?> </a>
	</p>
	<hr width="20%" color="red" align="left">


	<p class="gros">
		<a href="Champ_de_Mars.php?<?php echo $_SERVER["QUERY_STRING"] ?>"> <?php echo Champ_de_Mars; ?> </a>
	</p>
	<hr width="20%" color="red" align="left">


	<div id="contenu">

	</div>
</div>

<?php require 'base_php/fin_base.php'; ?>