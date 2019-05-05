<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <form method="Post">
        

             <input type="radio" name="tortue" value="Leonardo">Leonardo<br>

             <input type="radio" name="tortue" value="Donatelle">Donatelle<br>

             <input type="radio" name="tortue" value="Michelangelo">Michelangelo<br>
        
             <input type="radio" name="tortue" value="Raphael">Raphael<br>
           
             <input type="radio" name="tortue" value="Hamato">Hamato<br>

             <input type="submit" name="submit" value="submit">

    </form>    
        <?php
            
           if (isset($_POST["submit"])) {
               if (isset($_POST["tortue"])) {
                   echo $_POST["tortue"];
                   # code...
               }
               else {
                   echo "Vous n'avez séléctionné aucune tortue.";
               }
           }
        ?>

        </form>
</body>
</html>