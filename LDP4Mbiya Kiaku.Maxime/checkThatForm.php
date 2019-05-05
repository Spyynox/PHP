<?php  
	$erreur = array();
	if (isset($_POST["submit"])) {
		# code...

		if (empty($_POST["Prénom"])) {
			# code...
			array_push($erreur, "Le champ Prénom n'est pas rempli.");
		}

		if (empty($_POST["noms"])) {
			# code...
			array_push($erreur, "Le champ Nom n'est pas rempli.");
		}

		if (empty($_POST["mail1"])) {
			# code...
			array_push($erreur, "Le champ E-mail n'est pas rempli.");
		}

		if (empty($_POST["Bachelor"])) {
			# code...
			array_push($erreur, "Le champ Bachelor n'est pas rempli.");
		}

		if (empty($_POST["Age"])) {
			# code...
			array_push($erreur, "Le champ Age n'est pas rempli.");
		}


		if (empty($_POST["password"])) {
			# code...
			array_push($erreur, "Le champ Mot de passe n'est pas rempli.");
		}

		if (empty($_POST["repassword"])) {
			# code...
			array_push($erreur, "Le champ Mot de passe vérifié n'est pas rempli.");
		}

		if (!isset($_POST["sex"])) {
			# code...
			array_push($erreur, 'doit contenir au "Femme" ou "Homme"');
		}

		if (empty($_POST["tomes"])) {
			# code...
			array_push($erreur, 'doit contenir au moins un tome');
			foreach ($_POST as $selected) {
				# code...
				echo $selected."</br";
			}
		}

		if (empty($_POST["commentaire"])) {
			# code...
			array_push($erreur, "Le champ Commentaire n'est pas rempli.");
		}

		if (strlen($_POST["Prénom"]) < 2) {
			# code...
			array_push($erreur, "Le champ Prénom ne contient pas 2 caractères.");
		}

		if (strlen($_POST["noms"]) < 2) {
			# code...
			array_push($erreur, "Le champ noms ne contient pas 2 caractères.");
		}

		if (strlen($_POST["Age"]) > 13 ) {
			# code...
			array_push($erreur, "doit être inférieur à 160.");
		}

		if (strlen($_POST["password"]) < 12) {
			# code...
			array_push($erreur, "doit contenir au moins 12 caractères");
		}

		if (strlen($_POST["repassword"]) < 12) {
			# code...
			array_push($erreur, "doit contenir au moins 12 caractères");
		}

		if ($_POST["repassword"] != $_POST["password"]) {
	                     	
         	# code...
         	array_push($taberreur,'doit être égal au champ "Mot de passe"');

		}

		if ($_POST["commentaire"] != "<b>si ce texte s'affiche en gras, u lost the game</b>") {
			# code...
			array_push($erreur, "Ne change pas le texte");
		}

		if (ctype_alpha($_POST["Prénom"]== false)) {
			# code...
			array_push($erreur, "Le champ prénom doit contenir que des caractères alphabétique");
		}

		if (ctype_alpha($_POST["noms"]== false)) {
			# code...
			array_push($erreur, "Le champ noms doit contenir que des caractères alphabétique");
		}

		if (is_numeric($_POST["Age"]== false)) {
			# code...
			array_push($erreur, "doit contenir que des chiffres");
		}

		


	  	if (empty($erreur)) {
	  		# code...

	  		echo "<table border=" . 1 . ">";
	  		
	  		foreach ($_POST as $key => $value) {
	  			# code...
	  			if ($key != "submit") {
	  				# code...
	  				

	  				switch ($key) {
	  					case 'Prénom':
	  						# code...
	  					$key = "Prénoms";
	  					break;

	  					case 'noms':
	  						# code...
	  					$key = "Nom";
	  					break;

	  					case 'mail1':
	  						# code...
	  					$key = "E-mail";
	  					break;

	  					case 'Age':
	  						# code...
	  					$key = "Age";
	  					break;

	  					case 'Bachelor':
	  						# code...
	  					$key = "Bachelor";
	  					break;

	  					case 'password':
	  						# code...
	  					$key = "Mot de passe";
	  					break;

	  					case 'repassword':
	  						# code...
	  					$key = "Mot de passe vérifié";
	  					break;

	  					case 'sex':
	  						# code...
	  					$key = "Sexe";
	  					break;

	  					case 'tomes':
	  						# code...
	  					$key = "Tome(s) favoris de H2G2";
	  					break;

	  					case 'commentaire':
	  						# code...
	  					$key = "Commentaire";
	  				}
	  				echo "<tr><th>" . $key . "</th><td>" .  $value . "</td></tr>";
	  			}
	  		}

	  		echo "</table>";
	  	}

	  	if (count($erreur) != 0) {
	  		# code...
	  		echo "<h3>Erreurs<h3><ul>";

	  		foreach ($erreur as $key => $value) {
	  			# code...
	  			echo "<li>" . $value . "</li>";
	  		}

	  		echo "</ul><img src=" . "https://risibank.fr/cache/stickers/d311/31114-full.jpg" . ">";
	  	}

	}	

?>	