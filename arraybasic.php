<?php
// ประกาศตัวแปรแบบปกติ
// $number1 = 10;
// $number2 = 20;
// $number3 = 30;

// array แบบเดียว // การสร้างด้วยฟังก์ชั่น array, range, []
$number = array(10,20,30); // ระบุสมาชิกด้านในอาร์เรย์
//print $total= $number[0] + $number[1]."</br>"; // ตัวอย่างการนำค่าใน array มาคำนวน 
    // $number = array(10,20,30,"raywat",true); // ในภาษาโปรแกรมบางตัวจะถูก fig ให้เก็บค่าเฉพาะตัวเลขเท่านั้นหรือตัวอักษรเท่านั้น แต่ว่าในตัว php นั้นสามารถนำเข้าไปได้มากกว่า 1 รูปแบบ
// print($number[1]."</br>"); // การระบุค่าใน index ให้ระบุในสัญญาลักณ์กล้ามปู []
// print($number[2]);

// แสดงสมาชิกในอาร์เรย์ ในอีกรูปแบบหนึ่ง
// print_r($number);

$city = array("แม่สะเรียง","สบเมย","แม่ลาน้อย");
$city[1] = "ขุนยวม"; // การแก้ไขข้อมูลใน array
print($city[0]."\t".$city[1]."\t".$city[2]."</br>");
print_r($city); // แสดงผลสมาชิกใน array ทั้งหมด
?>