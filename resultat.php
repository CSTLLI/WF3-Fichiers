<!--**************************************************************************************-->
<!-- 																					  -->
<!-- Project: Array  		                            / $$      /$$ /$$$$$$$$ /$$$$$$   -->
<!--                  			                        | $$  /$ | $$| $$_____//$$__  $$  -->
<!-- resultat.php                                  	    | $$ /$$$| $$| $$     |__/  \ $$  -->
<!--                                                  	| $$/$$ $$ $$| $$$$$     /$$$$$/  -->
<!-- By: vcastell <valeriocastellipro@gmail.com>	    | $$$$_  $$$$| $$__/    |___  $$  -->
<!--                                              		| $$$/ \  $$$| $$      /$$  \ $$  -->
<!-- Created: 2022/02/16 10:41:35 vcastell   	        | $$/   \  $$| $$     |  $$$$$$/  -->
<!-- Updated: 2022/02/16 23:33:28 vcastell              |__/     \__/|__/      \______/   -->
<!--                                                                     				  -->
<!--**************************************************************************************-->

<!DOCTYPE html>
<html lang='fr'>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Utilisateur trouvé</title>

		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Integration de Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>

	<body class="container d-flex d-flex flex-column text-center justify-content-center align-items-center vh-100"></body>
</html>	

<?php
	//### Main

	// echo "<pre>";
	// echo var_dump($_FILES);
	// echo "</pre>";

	$users = array(
		array("Jean", "Todt", "jeantodt@gmail.com", "FerrariForever"),
		array("Charles", "Leclerc", "charlesleclerc@gmail.com", "FerrariForever"),
		array("Charlotte", "Leclerc", "charlesleclerc@gmail.com", "FerrariForever"),
		array("Carlos", "Sainz", "jcarlossainz@gmail.com", "FerrariForever")
	);

	if (isset($_POST['name'])){

		// echo "<pre>";
		// echo print_r($users);
		// echo "</pre>";

		$inputName = $_POST['name'];
		$error = 1;

		forEach ($users as $user){
			if ($user[1] == $inputName){
				$error = 0;

				echo "<div class='card border border-1'>";

				for ($i = 0; $i <= count($user); $i++){
					echo "<p>" . $user[$i] . "</p>";
				}

				echo "</div>";
			}
		}

		if ($error != 0){
			echo "User non trouvé.";
		}
	}
	echo "\n <a class='fs-3 fw-bold' href='index.php'>Revenir à l'accueil</a>";
?>