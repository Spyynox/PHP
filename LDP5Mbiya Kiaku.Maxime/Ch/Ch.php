<?php
	$erreur = array();
	$text = $_POST["textarea"];
	if (isset($_POST["submit"])) {
		# code...
		if (empty($_POST["decodage"])) {
			# code...
			array_push($erreur, "Tu n'as pas choisi ton type de décodage");
		}
		


		if (empty($_POST["textarea"])) {
			# code...
			array_push($erreur, "Le champ Text n'est pas rempli");
		}elseif ($_POST["decodage"] == "Morse") {
			# code...
			$tabmorse = explode(",", $text);
			$tab = array(".-"=>"a","-..."=>"b", "-.-."=>"c", "-.."=>"d", "."=>"e", "..-."=>"f", "--."=>"g", "...."=>"h", ".."=>"i", ".---"=>"j", "-.-"=>"k", ".-.."=>"l", "--"=>"m", "-."=>"n", "---"=>"o", ".--."=>"p", "--.-"=>"q", ".-."=>"r", "..."=>"s", "-"=>"t", "..-"=>"u", "...-"=>"v", ".--"=>"w", "-..-"=>"x", "-.--"=>"y", "--.."=>"z", "-----"=>"0",".----"=>"1", "..---"=>"2", "...--"=>"3", "....-"=>"4", "....."=>"5", "-...."=>"6", "--..."=>"7", "---.."=>"8", "----."=>"9",".-.-.-"=>".","--..--"=>",","..--.."=>"?","-..-."=>"/"," "=>" ");
			foreach ($tabmorse as $key => $value) {
				echo $tab[$value];
			}
		}
		
		elseif ($_POST["decodage"] == "Reverser +1") {
			$tabreverser = str_split($text);
			$tabb = array("a"=>"b", "b"=>"c", "c"=>"d", "d"=>"e", "e"=>"f", "f"=>"g", "g"=>"h", "h"=>"i", "i"=>"j", "j"=>"k", "k"=>"l", "l"=>"m", "m"=>"n", "n"=>"o", "o"=>"p", "p"=>"q", "q"=>"r", "r"=>"s", "s"=>"t", "t"=>"u", "u"=>"v", "v"=>"w", "w"=>"x", "x"=>"y", "y"=>"z", "z"=>"a", "A"=>"B", "B"=>"C", "C"=>"D", "D"=>"E", "E"=>"F", "F"=>"G", "G"=>"H", "H"=>"I", "I"=>"J", "J"=>"K", "K"=>"L", "L"=>"M", "M"=>"N", "N"=>"O", "O"=>"P", "P"=>"Q", "Q"=>"R", "R"=>"S", "S"=>"T", "T"=>"U", "U"=>"V", "V"=>"W", "W"=>"X", "X"=>"Y", "Y"=>"Z", "Z"=>"A");
			foreach ($tabreverser as $key => $value) {
				echo $tabb[$value];
			}
		}	

		elseif ($_POST["decodage"] == "Esrom") {
			$tabesrom = $tab = explode(",", $text);
			$tabbb = array("1"=>"A", "2"=>"B", "3"=>"C", "4"=>"D", "5"=>"E", "6"=>"F", "7"=>"G", "8"=>"H", "9"=>"I", "0"=>" ");
			foreach ($tabesrom as $key => $value) {
				echo $tabbb[$value];
			}
		}	
		if (count($erreur) != 0)
			foreach ($erreur as $key => $value) {
				# code...
				echo "<br>" . $value . "</br>";
			}
	}		
		

	
?>