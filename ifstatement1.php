<?php
// รูปแบบคำสั่งแบบ 1 เงื่อนไขเ
$balance = 1000;
$transfer = 500;
echo "-ยอดเงินคงเหลือ\t".$balance."<br>";
echo "-ยอดเงินที่ต้องการกด\t".$transfer."<br>"; 

if ($transfer <= $balance) { 
    echo "-สามารถกดเงินสดได้"."<br>";
    echo "-ยอดคงเหลือ\t".($balance-=$transfer)."<br>"; // คำนวนยอดเงิน แล้วแสดงยอดเงินคงเหลือ
}
echo "-คืนบัตรกดเงินสด"."<br>";

echo "<hr>";
// รูปแบบคำสั่งแบบ 2 เงื่อนไข
$balance = 1000;
$withdraw = 2000;
echo "-ยอดเงินคงเหลือ\t".$balance."<br>";
echo "-ยอดที่ต้องการถอน\t".$withdraw."<br>";
if ($withdraw <= $balance) { 
    echo "-สามารถกดเงินสดได้"."<br>";
    echo "-ยอดคงเหลือ\t".($balance-=$withdraw)."<br>";
    echo "-ยอดเงินสดไม่พอ"."<br>";
}else {
    echo "-ทำรายการใหม่อีกครั้งภายหลัง"."<br>";
}
echo "-คืนบัตรกดเงินสด";
?>