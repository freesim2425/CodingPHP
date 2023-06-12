<?php
$price="100.17";
$dalivery=50.99;

$total= $price + $dalivery;

// echo gettype($toltal);
echo "ก่อนแปลง = ".gettype($total)."<br>"; //ให้แสดงค่าชนิดตัวแปรที่อยู่ใน $total
echo $total."<br>"; // แสดงค่าที่อยู่ในตัวแปร $toltal

//type casting
$total=(integer)$total."<br>"; // แปลงชนิดตัวแปรที่ให้เปลี่ยนใหม่ให้ตรงความต้องการของเรา
echo "หลังแปลง =".gettype($total)."<br>";// แสดงค่า $toltal หลังแปลงชนิดตัวแปร
echo $total."<br>"; // แสดงค่าที่อยู่ใน $toltal

echo "<hr>";
$sum ="400.98";
echo "ก่อนแปลง = ".gettype($sum)."<br>";
echo $sum."<br>";

$sum=(double)$sum;
echo "หลังแปลง = ".gettype($sum)."<br>";
echo $sum;

echo "<hr>";
// กำหนดชนิดตัวแปรตั้งแต่เริ่มประกาศตัวแปร
$a=(integer)10.9;
$b=(integer)20.5;

$c=$a+$b;

echo $c; 



?>