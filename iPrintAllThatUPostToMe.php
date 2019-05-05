<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <form method="Post">

        <p>
            <input type="text" name="text" placeholder="text" >
        </p>

        <p>
            <input type="text" name="pwd" placeholder="pwd" >
        </p>

        <p>
            <input type="hidden" name="hid" value="I'm hide forever" />
        </p>
        
        <p>
            <input type="submit" name="submit"  value= "submit" placeholder="submit" >
        </p> 
    </form>    
        <?php
    
    foreach($_POST as $key=>$value)
    {
        $bonjour="";
            if (strlen($value)>10) {
                
                    for ($i=0; $i < 7; $i++) { 
                        $n= $value[$i];
                        $bonjour.=$n;

                    }
                $bonjour.="...";
            
            }
            else { 
                $bonjour=$value; 
                
            }
            echo  $key." => ".$bonjour."<br>";
            
            
    }
    
        ?>

        </form>
</body>
</html>