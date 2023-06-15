<?php

// รูปแบบคำสั่งแบบเงื่อนไขเดียว
$balance = 1000;
$transfer = 500;

echo "-ยอดเงินคงเหลือ\t".$balance."<br>";
echo "-ยอดเงินที่ต้องการกด\t".$transfer."<br>"; 

// เริ่มเข้าเงื่อนไข
if ($transfer <= $balance) { 

    echo "-สามารถกดเงินสดได้"."<br>";
    echo "-ยอดคงเหลือ\t".($balance-=$transfer)."<br>"; // คำนวนยอดเงิน แล้วแสดงยอดเงินคงเหลือ
}
// จบเงื่อนไข 

echo "-คืนบัตรกดเงินสด"."<br>";


echo "<hr>";


// รูปแบบคำสั่งแบบ 2 เงื่อนไขเ
$balance = 1000;
$withdraw = 2000;

echo "-ยอดเงินคงเหลือ\t".$balance."<br>";
echo "-ยอดที่ต้องการถอน\t".$withdraw."<br>";

if ($withdraw <= $balance) { 

    echo "-สามารถกดเงินสดได้"."<br>";
    echo "-ยอดคงเหลือ\t".($balance-=$withdraw)."<br>";
    echo "-ยอดเงินสดไม่พอ"."<br>";
}
echo "-คืนบัตรกดเงินสด";

echo "<hr>";

// เงื่อนไขทางตรรกศาสตร์ &&(and,และ)
$balance = 1000;
$withdraw = -500;

echo "-ยอดเงินคงเหลือ\t".$balance."<br>";
echo "-ยอดที่ต้องการถอน\t".$withdraw."<br>";

$a = $balance-=$withdraw;
$b = $withdraw > 0;

if ($a && $b) { // เงื่อนไขต้องเป็นจริงทั้งสองฝั่ง
 echo "-สามารถกดเงินสดได้"."<br>";
 echo "-ยอดคงเหลือ\t".$balance."<br>";
}else{
    echo "-ยอดเงินไม่พอ"."<br>";
}
echo "-คืนบัตร";

echo "<hr>";

// เงื่อนไขทางตรรกศาสตร์ ||(or,หรือ)
$balance = 1000;
$withdraw = 0;

echo "-ยอดเงินคงเหลือ\t".$balance."<br>";
echo "-ยอดที่ต้องการถอน\t".$withdraw."<br>";

$a = $balance-=$withdraw;
$b = $withdraw > 0;

if (!($a) || $b) { // หากเงื่อนไขตัวใดตัวหนึ่งเป็นจริงจะรันตามปกติแต่หากเงื่อนไขเป็นเท็จทั้งสองฝั่งจะรับในบรรทัดถัดไป
 echo "-สามารถกดเงินสดได้"."<br>";
 echo "-ยอดคงเหลือ\t".$balance."<br>";
}else{
    echo "-ยอดเงินไม่พอ"."<br>";
}
echo "-คืนบัตร";



?>