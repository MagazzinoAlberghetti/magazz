<html><?
//require_once "captcha.php";  
?>
<head>
	<title>Registrazione</title>
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
      height: 500px;
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
.contenitore input[type="submit"]{  /* i css si riferiscono solo al pulsante è NELL $digit LA VARIABILEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE*/
	border-radius: 14px;
	height: 40px;
}

.contenitore input[type="submit"]:hover {
	background: lightblue;
}
    </style>
</head>
	<body>

        <div class="pre_contenitore">
			<p>Registrazione</p>
		</div>
		<div class="contenitore">
			<form action="Login.php" method="post">

				<p>Inserisci le tue credenziali</p>
					<p>
						<label>Nome</label><br>
							<input type="text" name="NomeUtente" class="nomeutente" placeholder="Nome Utente">
					</p>
					<p>
						<label>Cognome </label><br>
							<input type="text" name="CognomeUtente" class="congomeutente" placeholder="Cognome Utente">
					</p>
                    <p>
						<label>Email </label><br>
							<input type="text" name="EmailUtente" class="emailutente" placeholder="Email">
                    </p>
                    <p>
						<label>Password </label><br>
							<input type="text" name="PAssword" class="password" placeholder="Password">
					</p>
            
						<input type="submit" name="btn" value="invia">
			</form>
		</div>

	</body>


</html>
