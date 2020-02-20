<html>
<?
session_start();
?>

<head>
	<title>Registrazione</title>
	<link rel="stylesheet" href="LoginStyle.css">
</head>

<body>


	<div class="pre_contenitore">
		<p>Registrazione</p>
	</div>
	<div class="contenitore lungo">

		<form action="controllocaptcha.php" method="post">

			<p>Inserisci le tue credenziali</p>
			<p>
				<label>Nome</label><br>
				<input type="text" name="NomeUtente" class="nomeutente" placeholder="Nome Utente" required>
			</p>
			<p>
				<label>Cognome </label><br>
				<input type="text" name="CognomeUtente" class="congomeutente" placeholder="Cognome Utente" required>
			</p>
			<p>
				<label>Email </label><br>
				<input type="text" name="EmailUtente" class="emailutente" placeholder="Email" required>
			</p>
			<p>
				<label>Password </label><br>
				<input type="text" name="PAssword" class="password" placeholder="Password" required>
			</p>

			<p><img src="./captcha.php" /></p>
			Controllo Robot <input type="text" name="captcha" class="captcha" placeholder="Inserire Codice" required/><br><br>
			<input type="submit" name="invia" value="invia">
			<?
						if($_SESSION['error'] == '404'){
							echo "<div style='margin:1px; padding:1px; background-color:#FF0000''> 
							<h3>Codice Errato</h3>
							</div>";
						}
						else{
							echo "<div> 
							<h3> Welcome ;) </h3>
							</div>";
						}
			?>
			<?
			
			
			//$digit = $_SESSION['digit'];
			$_SESSION['captcha'] = $captcha;

			if($_SESSION['error'] == '404'){
				?>
				<!-- <script>
					alert("Hello! I am an alert box!!")
				</script>-->
				<?
			}
			?>
		</form>
	</div>

	

</body>

</html>