<?php
function fibonacci($n){
    if($n==0){
        return 0;
    }else if($n==1){
        return 1;
    }else{
        return fibonacci($n-1)+fibonacci($n-2);
    }
}
function jumlah($m){
    for($i=0;$i<$m+2;$i++){
        echo fibonacci($i)." ";
    }
}
jumlah(20);
?>