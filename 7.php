<?php
$N= (int)(5);
$tens=$N/10;
$units=$N%10;
if($units != 0 && $tens % $units == 0){
    echo"yes";
}elseif($units!=0 && $units%$tens==0){
    echo"yes";
}else{
    echo"No";
}

?>