<?php

for($i=0; $i<3;$i++){
    for($j=0;$j<=$i;$j++){
        echo"*";
    }
    echo"\r\n";
}
$count=1;
for($i=3; $i<0;$i--){
    for($j=3;$j<=$i;$j--){
       
        echo"{$count}";
        $count++;
    }
   
    echo"\r\n";
}


?>