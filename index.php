<?php require 'base_php/debut_base.php'; ?>

<div id="main">
	<h2>
		<?php echo Titre_Accueil; ?> 
	</h2>
	<hr class="trait-long">

	<div class="galleryContainer">
		<div class="slideShowContainer">
			<div class="nextPrevBtn leftArrow">
				<span class="arrow arrowLeft"></span>
			</div>
			<div class="nextPrevBtn rightArrow">
				<span class="arrow arrowRight"></span>
			</div>
			<div class="image">
				<img src="image/place_du_trocadero.png">
			</div>
			<div class="image">
				<img src="image/champ_de_mars.png">
			</div>
			<div class="image">
				<img src="image/Jardins-du-Trocadero.png">
			</div>
			<div class="image">
				<img src="image/Tokyo_Tower.JPG">
			</div>
			<div class="image">
				<img src="image/tour-eiffel.png">
			</div>
			<div class="image">
				<img src="image/palais_de_chaillot.png">
			</div>
			<div class="image">
				<img src="image/marechal_fauch.jpg">
			</div>

		</div>
		<div id="pointsContainer"></div>
  	</div>

	<p>
		<?php echo html_entity_decode(Contenu_Accueil); ?> 
	</p>
		

	<div id="contenu">


	</div>
</div>

<script src="js/slider.js"></script>
<?php require 'base_php/fin_base.php'; ?>