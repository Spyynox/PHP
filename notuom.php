<?php

 
    $tab0 = array("Goodbye", "Dennis");

    $tab1 = array("U", "DUN", "GOOFED");

    $tab2 = array("name"=>"Glenn","first_name"=>"kenny","pets"=>"dusty","crime"=>"animal abuse","achievement"=>"goofed");

    $tab3 = array("bananas", "apple","fish"=>"sharktopus", "lemon", "pineapple", "pear", "cherry");

    $tab4 = array("x-men", "spiderman","great saiyaman","iron man","superman", "batman","wolverine", "hulk");

function onlyTheBest($tab) { 
        
          $best = "";
          foreach ($tab as $key => $value) {

            if (strlen($value) > strlen($best)) {
              $best = $value;
            }
          }
          echo $best;    
          }
          onlyTheBest($tab3)
          ?>