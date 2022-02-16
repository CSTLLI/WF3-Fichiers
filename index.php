<!--**************************************************************************************-->
<!-- 																					  -->
<!-- Project: Fichies                                   / $$      /$$ /$$$$$$$$ /$$$$$$   -->
<!--                  			                        | $$  /$ | $$| $$_____//$$__  $$  -->
<!-- index.php                                    	    | $$ /$$$| $$| $$     |__/  \ $$  -->
<!--                                                  	| $$/$$ $$ $$| $$$$$     /$$$$$/  -->
<!-- By: vcastell <valeriocastellipro@gmail.com>	    | $$$$_  $$$$| $$__/    |___  $$  -->
<!--                                              		| $$$/ \  $$$| $$      /$$  \ $$  -->
<!-- Created: 2022/02/16 10:41:35 vcastell   	        | $$/   \  $$| $$     |  $$$$$$/  -->
<!-- Updated: 2022/02/16 23:29:28 vcastell              |__/     \__/|__/      \______/   -->
<!--                                                                     				  -->
<!--**************************************************************************************-->

<!DOCTYPE html>
<html lang='fr'>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Fichiers</title>

		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Intégration de Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>

	<body class="border border-3 border-radius-2 container d-flex d-flex flex-column gap-5 text-center justify-content-center align-items-center vh-100">

		<h1>Fichiers</h1>

		<form action="resultat.php" method="post" enctype="multipart/form-data">
			<div class="d-flex flex-column gap-3">
				<input type="text" placeholder="Nom" name="name" id="name">
				<input type="file" name="image" id="image">

				<button type="submit">Envoyer l'image</button>
			</div>
		</form>

		<form action="search.php" method="post" enctype="multipart/form-data">
			<div class="d-flex flex-column gap-3">
				<input type="text" placeholder="Nom" name="search_name" id="search_name">

				<button type="submit">Rechercher l'image</button>
			</div>
		</form>
	</body>
</html>