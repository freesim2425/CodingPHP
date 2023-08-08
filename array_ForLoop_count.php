<?php
//เข้าถึง Array ด้วย ForLoop
$fruit = ["ชมพู","มะระกอ","กล้วย","สม","มะนาว","มะโอ"];
    //$fruit = array("ชมพู","มะระกอ","กล้วย","สม","มะนาว","มะโอ");
$total = count($fruit); // สร้างตัวแปร total เก็บค่า count ที่นับได้จากในตัวแปร fruit มาเก็บไว้เพื่อนำไปใช้ใน forloop
for($index = 0; $index < $total; $index++){ //การใช้ forLoop แสดงสมาชิกใน array
        // print($fruit[$index]."\t".$index."</br>"); // ตัวอย่างแสดงจำนวนนับ index และค่าที่อยู่ข้างใน fruit
    print($fruit[$index]."</br>");
}

// print("count number = ".$total); // print แสดงค่าจำนวนข้อชุดข้อมูลที่อยู่ในอาร์เรย์

?>