<!--**************************************************************************************-->
<!-- 																					  -->
<!-- Project: Fichiers		                            / $$      /$$ /$$$$$$$$ /$$$$$$   -->
<!--                  			                        | $$  /$ | $$| $$_____//$$__  $$  -->
<!-- search.php                                  	    | $$ /$$$| $$| $$     |__/  \ $$  -->
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

		<title>Recherche</title>

		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Integration de Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>

	<body class="container d-flex d-flex flex-column text-center justify-content-center align-items-center vh-100"></body>
</html>	

<?php
	$target_dir_desc = "desc/";
	$file = $_POST['search_name'];
	// echo $file;

	if (file_exists($target_dir_desc . $file . '.txt')){
		$target_file = $target_dir_desc . $file . '.txt';
		$path = file_get_contents($target_file);

		$path_file = strstr($path, "./uploads/");
		// echo $path_file;

		echo "<img class='w-50' src='" . $path_file ."'>";	
		echo $path;	
	}else {
		echo "Image non trouvée.";
	}
	echo "\n <a class='fs-3 fw-bold' href='index.php'>Revenir à l'accueil</a>";
?>