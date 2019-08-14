<?php
$loop = 20;
$num = 1;
for ($i=0;1-$i <= $loop+1; $i++) { 
    if ($i == 1) {
        echo "Aku Data ke- ".$num++.", mendapatkan medali emas <br>";
    }elseif ($i == 2) {
        echo "Aku Data ke- ".$num++.", mendapatkan medali perak <br>";
    }elseif ($i == 3) {
        echo "Aku Data ke- ".$num++.", mendapatkan medali perunggu <br>";
    }elseif ($i >= 4 && $i <= 6) {
        echo "Aku Data ke- ".$num++.", mendapatkan tas laptop <br>";
    }elseif ($i >= 7 && $i <= 9) {
        echo "Aku Data ke- ".$num++.", mendapatkan tas karung <br>";
    }elseif ($i >= 10)  {
        echo "Aku Data ke- ".$num++.",tidak mendapatkan apapun<br>";
    }
}
?>