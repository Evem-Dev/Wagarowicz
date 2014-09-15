<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="Description" content="Spierdalaj z lekcji bez obaw ! "> 
	<title>Wagarowicz - Zarejestruj się ! </title>
	<link rel="stylesheet" type="text/css" href="templates/Account/Register/css/register.css">

	  <script type="text/javascript">
			function chuj()
				{
					if(document.passwd.value != document.passwCheck.value)
					{
						alert('Hasła się nie zgadzają chuju ! '); 
						return false;
					}
					else
					{
						return true;
					}
				}
		</script>
</head>
<body>

	<div id="registerPanel">
		<div id="productText">
			<h1 id="welcomeText">Zarejestruj się na </h1>
			<img id="wagarowiczImage" src="templates/Account/Register/imagesRegister/Wagarowicz.png">
				<div id="registerPanelContent">

						<form id="registerUsserForms" action="index.php?request=Account&action=register" method="post">
							<p id="registerUsser">Login</p><input type="text" name="login" id="login">
							<p id="registerUsser">Hasło</p><input type="password" name="passwd1" id="passwd" >
							<p id="registerUsser">Powtórz<br> Hasło</p><input type="password" name="passwd2" id="passwCheck">
							<input type='submit' value='Załóż konto :)' id="registerButon">
						</form>

				</div>

		</div>
    </div>

</body>
</html>