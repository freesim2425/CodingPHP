<?php

// ประกาศตัวแปร
$price=50; // integer
$score=90.58; // dubel

$name = "ray wat"; // string
$isvalid=false; // boolean

$price = $price+100; // 50+100; =>price

// แสดงค่าที่อยู่ในตัวแปร
echo $name."<br>";
echo $isvalid."<br>";
echo $price."<br>";
echo $score."<br>";

echo "<hr>";
// การกำหนดชนิดข้อมูล และการตรวจสอบชนืดข้อมูล gettype , gettype
// gettype ดึงชนิดตัวแปรมาแสดง
echo gettype($name)."<br>";
echo gettype($isvalid)."<br>";
echo gettype($price)."<br>";
echo gettype($score);

echo "<hr>";
// settype กำหนดหรือเปลี่ยนค่าของตัวแปร
settype($score,"integer");

echo "หลังเปลี่ยนชนิดตัวแปร =".gettype($score)."<br>"; 


?>