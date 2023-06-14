<?php
$balance = 1000;
$transfer = 500;

echo  "ยอดเงินคงเหลือ\t".$balance."<br>";
if ($transfer <= $balance) {

    echo "สามารถกดเงินสดได้"."<br>";
    echo "ยอดคงเหลือหลังจากด\t".($balance-=$transfer)."\tเหลือ\t".$balance."<br>";

    if ($transfer >= $balance) {
        echo "คืนบัตร";
    }
}
//echo "คืนบัตรกดเงินสด";

?>