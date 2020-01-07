<?php require 'base_php/debut_base.php'; ?>

<div id="main">
	<p>
		<?php echo Contenu_Rallye; ?> 
	</p>

	<div id="map">Chargement ...</div>
</div>

 
<script src="js/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASQSLUIWa-sNKTw1PTOepRx_Ohr09Al58&callback=initMap" async defer></script>

<?php require 'base_php/fin_base.php'; ?>