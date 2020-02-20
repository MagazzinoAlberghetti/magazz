<html>
<head>
	<title>Login</title>
	<style>
	/*contenitore in cima dove c'è scritto "Login"*/
.pre_contenitore{
	  width:320px;
	  margin:auto;
	  height:50px;
	  border:1px solid black;
	  border-radius: 40px 40px 0px 0px;
	   background-color:rgba(0,0,0,0.9);
	   box-shadow: 20px 30px 20px #000000;
	   padding:20px;
}

.pre_contenitore p{
     color:white;
     text-align: center;
     font-size: 1.9em;
     font-family: arial;
    line-height:2px;

}


body{
	background-image: url("https://i1.wp.com/www.deteched.com/wp-content/uploads/2017/10/Space-Vortex-4K-Abstract-Wallpapers.jpg");
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	text-align: center;
}

/*contenitore contenete il form */

.contenitore {
	  border:1px solid black;
	  margin:auto;
	  width: 320px;
      height: 390px;
      border-radius: 0px 0px 40px 40px;
      padding:20px;
      background-color:rgba(0,0,0,0.8);
      box-shadow: 20px 20px 20px #000000;
     
      color:white;

}

.contenitore input{
    width: 100%;
    margin-bottom: 20px;
    border:none;
    border:1px solid black;
    height: 30px;

}
.contenitore input[type="text"], input[type="password"] /* i css si riferiscono solo alla barra ditesto */
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}

.contenitore p{
	
}
.contenitore input[type="submit"]{  /* i css si riferiscono solo al pulsante */
	border-radius: 14px;
	height: 40px;
}

.contenitore input[type="submit"]:hover {
	background: lightblue;
}
    </style>
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
			<div class="contenitore">
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
								<input type="text" name="username" class="username" placeholder="Username">
						</p>
						<p>
							<label>Password</label><br>
								<input type="Password" name="password" class="password" placeholder="Password">
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