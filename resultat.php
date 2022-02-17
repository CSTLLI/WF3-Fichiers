<!--**************************************************************************************-->
<!-- 																					  -->
<!-- Project: Fichiers		                            / $$      /$$ /$$$$$$$$ /$$$$$$   -->
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

		<title>Enregistrement effectué</title>

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

	if (isset($_FILES['image']) && str_contains($_FILES['image']['type'], "image")){

		//# Creation des variables
		$target_dir_images = "uploads/";
		$target_dir_desc = "desc/";
		$target_file = $target_dir_images . $_FILES['image']['full_path'];
		// echo $target_file;

		//# Deplacement de l'image vers le dossier uploads
		if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){

			$file_name = $_POST['name'];
			// echo $file_name;

			//# Creation du fichier txt en copiant les données de l'image
			$txt_file = fopen($target_dir_desc . $file_name . '.txt', 'w');
			$txt_content = "Nom de l'image : " . $file_name . "\n" . "Chemin de destination : " . $target_file;

			fwrite($txt_file, $txt_content);
			fclose($txt_file);	

			echo "Transfert effectué avec succès!";
		}else {
			echo "Erreur sur le transfert.";
		}
	}else{
		echo "Format du fichier non accepté.";
	}

	echo "\n <a class='fs-3 fw-bold' href='index.php'>Revenir à l'accueil</a>";
?>