<?php
echo "<center>";
$a = 5;
$b = 10;
// แบบ Perfig ++(ตามด้วยตัวแปร)
echo "ค่าเริ่มต้น\t=\t".$a."<br>"; // 5
echo "เพิ่มค่าแบบ\tperfig\t=\t".(++$a)."<br>"; // บวกก่อนแสดงผลพัลธ์ 6
echo "ค่าปัจจุบัน\t=\t".$a."<br>"; // 6

echo "<hr>";
$a = 5; 
// แบบ Portfig (ตัวแปร)++
echo "ค่าเริ่มต้น\t=\t".$a."<br>"; // 5
echo "เพิ่มค่าแบบ\tperfig\t=\t".($a++)."<br>"; // แสดงผลก่อนแล้วบวก 5
echo "ค่าปัจจุบัน\t=\t".$a."<br>"; // 6

echo "<hr>";
$b = 10;
// แบบ Perfig --(ตามด้วยตัวแปร)
echo "ค่าเริ่มต้น\t=\t".$b."<br>"; // 10
echo "เพิ่มค่าแบบ\tperfig\t=\t".(--$b)."<br>"; // ลบก่อนแสดงผลพัลธ์ 11
echo "ค่าปัจจุบัน\t=\t".$a."<br>"; // 9

echo "<hr>";
$b = 10;
// แบบ Portfig (ตัวแปร)
echo "ค่าเริ่มต้น\t=\t".$b."<br>"; // 10
echo "เพิ่มค่าแบบ\tperfig\t=\t".($b--)."<br>"; // แสดงผลก่อนแล้วลบ 10
echo "ค่าปัจจุบัน\t=\t".$b."<br>"; // 9
echo "</center>";
?>