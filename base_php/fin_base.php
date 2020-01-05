<?php 
if ($_GET["lang"] === "fr") {
	require "contenu/contenu_fr.php"; 
} else {
	require "contenu/contenu_eng.php";
} 
?>
	
	<!-- <div id="footer">
		<p style="float: right;">
			<?php echo Mentions_legales; ?> 
			<br/>
			<?php echo Statistiques; ?> 
		</p>

	</div> -->

	<div class="footer">
		<div> 
			<img src="../image/unesco.png"> 
		</div>

	    <div> 
	    	<img src="../image/upem.png"> 
	   	</div>
	   	
	    <div>
	    	<?php echo Mentions_legales; ?> 
			<br/>
			<?php echo Statistiques; ?> 
		</div>
	</div>

</body>
</html>