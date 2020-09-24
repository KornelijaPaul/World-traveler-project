<? php
     $riel = 2103942;
     $kyat = 19092;
     $krones = 109;
     $lek = 9094;
   
     echo "Riel: $riel, Kyat: $kyat, Krones: $krones, Lek: $lek";
   
     $riel_rate = 0.00026;
     $kyat_rate = 0.00066;
     $krones_rate = 0.11;
     $lek_rate = 0.0090;
   
     $usd_from_riel = $riel * $riel_rate;
     $usd_from_kyat = $kyat * $kyat_rate;
     $usd_from_krones = $krones * $krones_rate;
     $usd_from_lek = $lek * $lek_rate;
   
     echo "\nYour $riel riel were exchanged for $usd_from_riel usd.";
     echo "\nYour $kyat kyat were exchanged for $usd_from_kyat usd.";
     echo "\nYour $krones krones were exchanged for $usd_from_krones usd.";
     echo "\nYour $lek lek were exchanged for $usd_from_lek usd.";
   
     $total_usd = $usd_from_riel + $usd_from_kyat + $usd_from_krones + $usd_from_lek;
     $total_usd -= 4;
   
     echo "\n";
     echo "Finally, you will receive $total_usd";