<?php
	include("connexionBDD.php");
	session_start();
	if (isset($_SESSION['login'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ajout contenu</title>
	<link rel="stylesheet" type="text/css" href="CSS.css">
</head>
<body>
	<?php
	if(isset($_POST['section'])){
		$section = $_POST['section'];
	?>	
		<form method="POST">
			<p>Rentrer vos modifications : <br></p>
			<textarea name = "contenu" rows="30" cols="120">
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
			<p>Rentrer la section que vous voulez modifier : <select name = "section"></p>
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
					$updateContenu = htmlentities($_POST['contenu']);
					$sql = "UPDATE T_contenu SET contenu = ? WHERE monument = ?";
					$dbh->prepare($sql)->execute([$updateContenu,$_POST['section']]);
					echo "<p>L'enregistrement de code ".$_POST['section']." a bien ete ajouté.</p>";
				} catch (Exception $e) {
					die('<p>Problème rencontré!'.$e->getMessage()."</p>");
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