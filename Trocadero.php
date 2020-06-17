<?php require 'base_php/debut_base.php'; ?>
<div id="main">
	<div class="contenu-image">
		<div class="image">
			<img src="image/place_du_trocadero.png">
		</div>

		<div class="texte-image">
			<h2>
				<?php echo titre_place_trocadero; ?>
			</h2>
			<p>
				<?php echo html_entity_decode(contenu_Trocadero); ?> 
			</p>
		</div>
	</div>
</div>
<?php require 'base_php/fin_base.php'; ?>