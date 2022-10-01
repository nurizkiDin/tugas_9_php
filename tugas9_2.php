<?php
function prima($angka){
    $pembagi = 0;
    for($i=1;$i<=$angka;$i++){
        if($angka%$i==0){
            $pembagi++;
        }
    }
    return $pembagi;
}
function tampilPrima($jumlah){
    for($i=1;$i<=$jumlah;$i++){
        if(prima($i)==2){
            echo $i.", ";
        }
    }
}
tampilPrima(200);
?>