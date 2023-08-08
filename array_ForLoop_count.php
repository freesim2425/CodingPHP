<?php
// เข้าถึง Array ด้วย ForLoop
// เรียกใช้ function count เพื่อนับ
$fruit = ["ชมพู","มะระกอ","กล้วย","สม","มะนาว","มะโอ"];
    //$fruit = array("ชมพู","มะระกอ","กล้วย","สม","มะนาว","มะโอ");
$total = count($fruit); // สร้างตัวแปร total เก็บค่า count ที่นับได้จากในตัวแปร fruit มาเก็บไว้เพื่อนำไปใช้ใน forloop
for($index = 0; $index < $total; $index++){ //การใช้ forLoop แสดงสมาชิกใน array
        // print($fruit[$index]."\t".$index."</br>"); // ตัวอย่างแสดงจำนวนนับ index และค่าที่อยู่ข้างใน fruit
    print($fruit[$index]."</br>");
}
// print("count number = ".$total); // print แสดงค่าจำนวนข้อชุดข้อมูลที่อยู่ในอาร์เรย์
// --------------------------------------------------------------------------------------------------------
echo "<hr>";

// เรียกใช้ฟังก์ชั่น array_count_values ใช้นับความถี่ของข้อมูลใน array ที่มีค่าซ้ำกัน
$number = [10,10,20,20,30,30,50,60,70,80,90];
print_r(array_count_values($number));
?>
