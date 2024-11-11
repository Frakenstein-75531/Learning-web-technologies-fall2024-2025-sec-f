<?php
$AA=4;
$BB=5;
$CC=6;
if($AA>$BB && $AA>$CC){
    echo"The variable containing AA is the largest number which is {$AA}";
}
elseif($BB>$AA && $BB>$CC){
    echo"The variable containing BB is the largest number which is {$BB} ";
}
else{
    echo"The variable containing CC is the largest number which is {$CC} ";

}


?>