<?php
$nombre_de_lignes = 1;
$prenom = "";

while ($prenom == "")
{
    echo "Bonjour $nombre_de_lignes <br>";
    if ($nombre_de_lignes == 5) {
        $prenom = "Emir";
    }
    $nombre_de_lignes++;
    
}
?>