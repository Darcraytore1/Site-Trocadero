<?php
	include("connexionBDD.php");
	session_start();
	session_unset();
?>
	<!-- Compte admin, login = Croustillant et password = Yesss-->
<!DOCTYPE html>
<html>
<head>
	<title>Connexion Admin</title>
	<link rel="stylesheet" href="CSS.css">
	<h1 class="titre-principal">Connection Admin</h1>
	<div class="loginBOX">
		<div class="parent">

			<p> Veuillez rentrez votre login et votre mot de passe </p>
			<form method="POST">
				<p>login </p><input type="text" name="login"> <br><br>
				<p>password </p><input type="password" name="password"> <br><br>
				<input type="submit" value="valider">
			</form>
		</div>
	</div>
</head>
<body>

</body>
</html>
<?php
	if (isset($_POST['login'])){
		$login = $_POST['login'];
		$password = $_POST['password'];
		$request= "SELECT * FROM T_compteAdmin";
		$pdoStatement = $dbh->query($request);
		$result = $pdoStatement->fetchAll();
		$authentification = 0;

		//echo $result[1][1] == sha1($password);
		//echo $result[1][0] == $login;
		for($i = 0;$i<count($result);$i++){

			if($result[$i][0] == $login && $result[$i][1] == sha1($password)){
				$authentification = 1;
				break;
			}

			if ($result[$i][0] == $login && $result[$i][1] != sha1($password)){
				$authentification = 2;
			}

			if ($result[$i][0] != $login && $result[$i][1] == sha1($password)){
				$authentification = 3;
			}
		}

		switch ($authentification) {
			case 0:
				?><p> authentification rate, mot de passe et login incorrect </p><?php
				break;
			
			case 1:
				echo "authentification reussie";
				$_SESSION['login'] = $login;
				$_SESSION['pwd'] = $pwd;
				header("Location: index.php");
				exit;
				break;
			case 2:
				?><p> mot de passe incorrect </p><?php
				break;
			case 3:
				?><p> login incorrect </p><?php
		}
	}
?>