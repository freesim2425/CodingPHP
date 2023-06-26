<?php
/*
while (เงื่อนไข) {
    คำสั่งที่จะทำซ้ำเมื่อเงื่อนไขเป็นจริง
}
*/
// ตย.การใช้ While Loop
$cound = 1;
$limit = 12;
    while ($cound <= $limit) {
        echo "ครั้งที่ ".$cound."<br>";
            $cound++;   
    }

echo "<hr>";
// ตย.การทำแม่สูตรคุณ
$cound = 1;
$sum = 2;
$allsum = $sum * $cound;
$limit = 12;
    while ($cound <= $limit) {
            $sum*$cound;
            $cound++; // เพิ่มค่าขึ้นทีล่ะ 1 เอาค่า 1 ที่ได้ ไปบวกกับ cound จนกว่าค่าจะเท่ากับ limit สิ้นสุดเงื่อนไข 
        echo $sum." * ".$cound."\t=\t".$sum*$cound."<br>";
}
?>