<?php
	include("connexionBDD.php");
	session_start();
	if (isset($_SESSION['login'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ajout contenu</title>
</head>
<body>
	<?php
	if(isset($_POST['section'])){
		$section = $_POST['section'];
	?>	
		<form method="POST">
			Rentrer vos modifications : <br>
			<textarea name = "contenu">
				<?php
					$request= "SELECT contenu FROM T_contenu WHERE monument = '$section'";
					$pdoStatement = $dbh->query($request);
					$result = $pdoStatement->fetchAll();
					echo $result[0][0];
				?>
			</textarea>
			<input type="hidden" name="section" value = "<?php echo "".$_POST['section']."" ?>">
			<input type="submit" name="">
		</form>
		<?php
		?>
			
	<?php
	}
	else{
	?>
		<form method="POST">
			Rentrer la section que vous voulez modifier : <select name = "section">
				<option value = "">--Section--</option>
				<?php
					$request= "SELECT * FROM T_contenu";
					$pdoStatement = $dbh->query($request);
					$result = $pdoStatement->fetchAll();
					for($i = 0;$i<count($result);$i++){
					?>
						<option value="<?php echo $result[$i][0]; ?>"><?php echo $result[$i][0]; ?></option>
					<?php
					}
			?>
			</select><br>

			<input type="submit" name="">
		</form>
	<?php
		}
	?>

	<?php
		if(isset($_POST['contenu'])){
			try {
					$sql = "UPDATE T_contenu SET contenu = ? WHERE monument = ?";
					$dbh->prepare($sql)->execute([$_POST['contenu'],$_POST['section']]);
					echo "L'enregistrement de code ".$_POST['section']." a bien ete ajoute";
				} catch (Exception $e) {
					die('Problème rencontre!'.$e->getMessage());
			}
		}
	?>
	<br><br>
	<form method="POST" action="index.php">
		<input type="submit" value="retour">
	</form>
<?php 
} 
else {
	include("pageNonAuthorise.php");
}
?>
</body>
</html>