<?php require 'base_php/debut_base.php'; ?>

<div id="main">


	<h1>
		<?php echo Titre_Rallye; ?> 
	</h1>
	<hr class="trait-long">


	<h2>
		<a href="Place_du_Trocadero.php?lang=<?php echo $_GET["lang"] ?>"> <?php echo Place_du_Trocadéro; ?> </a>
	</h2>
	<hr class="trait-court">


	<h2>
		<a href="Tour_Eiffel.php?lang=<?php echo $_GET["lang"] ?>"> <?php echo Tour_Eiffel; ?> </a>
	</h2>
	<hr class="trait-court">


	<h2>
		<a href="Palais_de_Chaillot.php?lang=<?php echo $_GET["lang"] ?>"> <?php echo Palais_de_Chaillot; ?> </a>
	</h2>
	<hr class="trait-court">


	<h2>
		<a href="Jardins_du_Trocadero.php?lang=<?php echo $_GET["lang"] ?>"> <?php echo Jardins_du_Trocadéro; ?> </a>
	</h2>
	<hr class="trait-court">


	<h2>
		<a href="Champ_de_Mars.php?lang=<?php echo $_GET["lang"] ?>"> <?php echo Champ_de_Mars; ?> </a>
	</h2>
	<hr class="trait-court">


	<div id="contenu">

	</div>
</div>

<?php require 'base_php/fin_base.php'; ?>