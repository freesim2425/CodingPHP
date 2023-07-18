<!-- local variable and globals variable -->
<?php
// global
//ประตัวแปรนอกฟังก์ชั่น global
$x = 100;
$y = 10;
function showNumber(){// local
    // ประกาศตัวแปรในฟังก์ชั่น local
    global $x; // เรียกใช้ global เพื่อให้สามารถเรียกใช้นอกฟังก์ชั่นได้
    print("ตัวแปร x.".$x."<br>");
    $GLOBALS ["z"] = 5000; // เรียกใช้ globals และประกาศตัวแปรให้กับ z ในกรณีที่ไม่ได้กำหนดคาคงที่ไว้
}
ShowNumber(); // เรียกใช้ฟังก์ชั่น showNumber
print("ตัวแปร x".$x."<br>"); // เรียกค่าใน local ออกมาแสดง
print("&copy ตัวแปร z".$z); // เรียกตัวแปร z ที่อยู่ในฟังก์ชั่น showNumber 
?>