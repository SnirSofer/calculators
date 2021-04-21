<?php
    $last_mone = 1503.10;
    $current_mone = 2481.97;
   
    //$last_mone = 75.90;
    //$current_mone = 836.14;
   
    $used = ($current_mone - $last_mone);
    $kw_hour = 0.47; // ILS
    $maam_ahuz = 0.17;
    $price = ($used * $kw_hour);
    $maam = ($price * $maam_ahuz);
    $total_price = $price+$maam;
   
    echo 'Used: '.$used . 'Kw | Price: '. $price. ' | Maam: '.$maam.' | Total: '.$total_price.' ILS';
