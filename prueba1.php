<?php
$esprimo=TRUE;
$count=0;
for ($numero=1; $count<10; $numero++) {
    for ($j=2;$j<$numero;$j++) {
        if ($numero%$j==0) {
            $esprimo=false;
        }
    }
    if ($esprimo){
        echo $numero."</br>";
        $count++;
    }
    $esprimo(mi cambio)=TRUE;
}
?>
