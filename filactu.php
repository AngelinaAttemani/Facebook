<?php
include("");

session_start();
ob_start(); // Je démarre le buffer de sortie : les données à afficher sont stockées

?>
<html>
	<head>
	    <title>Facebook</title>
        <meta charset ="UTF-8">
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<header>
            <h1><a href="#">Facebook</a></h1>
    </header>
	<body>
	<h4>Bienvenue jeune padawan!</h4>
	<input type="button" href="index.php?action=connexion" value="Deconnexion">
	<?php
		//include("mur.php");
		//include("nouveaupost.php");
		//include("posts.php");
	?>
	</body>
</html>
