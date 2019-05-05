<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <form method="POST">
      <select name="youtubeur">
        <option value="" selected></option>
        <option value="Norman">Norman</option>
        <option value="jojo bernard">jojo bernard</option>
        <option value="Cyprien">Cyprien</option>
        <option value="Mister V">Mister V</option>
        <option value="Hugo Tout Seul">Hugo Tout Seul</option>
    ....
      </select>
         <p>
            <input type="submit" name="submit" value="submit">
        </p>
</form>    
        <?php
           
           if (isset($_POST["submit"])) {
                if (isset($_POST["youtubeur"]) && $_POST["youtubeur"] != "") {
                    echo $_POST["youtubeur"];
                }
            else {
                echo "Vous n'avez séléctionné aucun youtubeur.";
                 }
            }     
       
       ?>