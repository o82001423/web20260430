<?php
function aa($data) {
    echo"<pre>";
    print_r($data);
    echo"/<pre>";
}

$myarry=[1,2,3];
aa($myarry);

$sum=0;
for($i=1;$i<=10;$i++){
    echo "第 $i 次 <br>";
    $sum=$sum+$i;
}


?>
