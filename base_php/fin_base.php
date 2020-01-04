<?php 
if ($_SERVER["QUERY_STRING"] === "fr") {
	require "contenu/contenu_fr.php"; 
} else {
	require "contenu/contenu_eng.php";
} 
?>

	<div id="footer">
		<p style="float: right;">
			<?php echo Mentions_legales; ?> 
			<br/>
			<?php echo Statistiques; ?> 
		</p>

	</div>

</body>
</html>