<?php require 'base_php/debut_base.php'; ?>

<div id="main">


	<p class="gros">
		<?php echo Titre_Rallye; ?> 
	</p>
	<hr class="trait-long">


	<p class="gros">
		<a href="Place_du_Trocadero.php?lang=<?php echo $_GET["lang"] ?>"> <?php echo Place_du_Trocadéro; ?> </a>
	</p>
	<hr class="trait-court">


	<p class="gros">
		<a href="Tour_Eiffel.php?lang=<?php echo $_GET["lang"] ?>"> <?php echo Tour_Eiffel; ?> </a>
	</p>
	<hr class="trait-court">


	<p class="gros">
		<a href="Palais_de_Chaillot.php?lang=<?php echo $_GET["lang"] ?>"> <?php echo Palais_de_Chaillot; ?> </a>
	</p>
	<hr class="trait-court">


	<p class="gros">
		<a href="Jardins_du_Trocadero.php?lang=<?php echo $_GET["lang"] ?>"> <?php echo Jardins_du_Trocadéro; ?> </a>
	</p>
	<hr class="trait-court">


	<p class="gros">
		<a href="Champ_de_Mars.php?lang=<?php echo $_GET["lang"] ?>"> <?php echo Champ_de_Mars; ?> </a>
	</p>
	<hr class="trait-court">


	<div id="contenu">

	</div>
</div>

<?php require 'base_php/fin_base.php'; ?>