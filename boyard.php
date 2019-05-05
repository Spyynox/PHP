<?php

	$tab0 = array('Goodbye', 'Dennis');

	$tab1 = array('U', 'DUN', 'GOOFED');

	$tab2 = array('name'=>'Glenn','first_name'=>'kenny','pets'=>'dusty','crime'=>'animal abuse','achievement'=>'goofed');

	$tab3 = array('bananas', 'apple','fish'=>'sharktopus', 'lemon', 'pineapple', 'pear', 'cherry');

	$tab4 = array('x-men', 'spiderman','great saiyaman','iron man','superman', 'batman','wolverine', 'hulk');

?>
<pre>
    <?php
    function myArrayPrint($only = array()) { 
        
        $length = array_map("strlen", $only);
        $height = max($length);
        $best = array_search($height, $length);
      echo($only[$best])."<br>";
    }
    $myArrayPrint = array (0 => 'Goodjkjbye', 1 => 'Dennis');
print_r ($tab0);
    $myArrayPrint = array (0 => 'Goodbye', 1 => 'DUN', 2 => 'GOOFED');
print_r ($tab1);
    $myArrayPrint = array ('name' => 'Glenn', "first_name" => 'kenny', "pets" => 'dusty', "crime" => 'animal buse', "achievement" => 'goofed');
    print_r ($tab2);
    $myArrayPrint = array ('bananas', 'apple', "fish" => 'sharktopus', "lemon", 'pineapple', 'pear', 'cherry');
    print_r ($tab3);
    $myArrayPrint = array ('name' => 'Glenn', "first_name" => 'kenny', "pets" => 'dusty', "crime" => 'animal buse', "achievement" => 'goofed');
print_r ($tab4);
?>
 </pre>