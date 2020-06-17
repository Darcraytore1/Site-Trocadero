<?php
	include("connexionBDD.php");
	session_start();
	if (isset($_SESSION['login'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add content</title>
	<link rel="stylesheet" type="text/css" href="CSS.css">
</head>
<body>
	<?php
	if(isset($_POST['section'])){
		$section = $_POST['section'];
	?>	
		<form method="POST">
			<p>Enter your changes : <br></p>
			<textarea name = "contenu" rows="30" cols="120">
				<?php
					$request= "SELECT contenu FROM T_contenu_eng WHERE monument = '$section'";
					$pdoStatement = $dbh->query($request);
					$result = $pdoStatement->fetchAll();
					echo $result[0][0];
				?>
			</textarea>
			<input type="hidden" name="section" value = "<?php echo "".$_POST['section']."" ?>">
			<input type="submit" name="Send">
		</form>
		<?php
		?>
			
	<?php
	}
	else{
	?>
		<form method="POST">
			<p>Enter the section you want to modify : <select name = "section"></p>
				<?php
					$request= "SELECT * FROM T_contenu_eng";
					$pdoStatement = $dbh->query($request);
					$result = $pdoStatement->fetchAll();
					for($i = 0;$i<count($result);$i++){
					?>
						<option value="<?php echo $result[$i][0]; ?>"><?php echo $result[$i][0]; ?></option>
					<?php
					}
			?>
			</select><br>

			<input type="submit" name="Send">
		</form>
	<?php
		}
	?>

	<?php
		if(isset($_POST['contenu'])){
			try {
					$sql = "UPDATE T_contenu_eng SET contenu = ? WHERE monument = ?";
					$dbh->prepare($sql)->execute([$_POST['contenu'],$_POST['section']]);
					echo "<p>The code entered for ".$_POST['section']." has been added</p>";
				} catch (Exception $e) {
					die('<p>Problem encountered!'.$e->getMessage()."</p>");
			}
		}
	?>
	<br><br>
	<form method="POST" action="index.php">
		<input type="submit" value="back">
	</form>

<?php 
} 
else {
	include("pageNonAuthoriseEng.php");
}
?>
</body>
</html>