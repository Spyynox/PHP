<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <form method="Post">

        <p>
            <input type="checkbox" name="poney[]" value="Pinkie Pie">Pinkie Pie<br>
        </p>

        <p>
            <input type="checkbox" name="poney[]" value="Rarity">Rarity<br>
        </p>

        <p>
            <input type="checkbox" name="poney[]" value="Rainbow Dash">Rainbow Dash<br>
        </p>
        
        <p>
            <input type="checkbox" name="poney[]"  value= "Applejack">Applejack<br>
        </p>
        
        <p>
            <input type="checkbox" name="poney[]"  value= "Princesse Celestiale">Princesse Celestiale<br>
        </p>

        <p>
        <input type="submit" name="submit" value="submit">
        </p>
        
    </form>    
        <?php
    
            
    
    if (isset($_POST["submit"])) {
        if (isset($_POST["poney"])) {
           foreach ($_POST["poney"] as $value) {
        
       
        echo $value . ", ";
        
           }
        }
    else {
        echo "Vous n'avez séléctionné aucun poney.";
    }
}     
            
            
    
        ?>

        </form>
</body>
</html>