<html>
	<?
		    require_once('../controller/Utente.php');
	?>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="LoginStyle.css">
</head>
	<body>
		<?php 
		
		session_start();
		
		if(isset($_POST["submit"])) {

			require_once '../controller/Utente.php';

			$user = $_POST["username"];
			$pwd = $_POST["password"];

			$utente = Utente::get_utente_by_email($user, $pwd);

			if($utente != false) {
				$_SESSION["email"] = $user;
				
				// @TODO manda alla pagina dashboard
			}
			else {
				$_SESSION["error"] = "Email o password errata!";
				header('Location: ./Login.php'); 
			}

		} 
		else { ?>
			<div class="pre_contenitore">
				<p>Login</p>
			</div>
			<div class="contenitore corto">
				<form action="Login.php" method="post">

					<? 
					
					if(isset($_SESSION["error"])) {
						echo $_SESSION["error"];
						unset($_SESSION["error"]);
					}
					?>

					<p>Inserisci le tue credenziali</p>
						<p>
							<label>Username</label><br>
								<input type="text" name="username" class="username" placeholder="Username" required>
						</p>
						<p>
							<label>Password</label><br>
								<input type="Password" name="password" class="password" placeholder="Password" required>
						</p>
							<input type="submit" name="btn" value="invia">
				</form>
					<form action="prova.php" method="post">
						<input type="submit" name="btn" value="Registrati">
				</form>
			</div>
		<? } ?>				
	</body>
</html>