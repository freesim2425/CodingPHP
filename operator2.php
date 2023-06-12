<?php
$a = 500; // ตัวแปรชนิด integer
$b = "500"; // ตัวแปรชนิด string
// ตัวอย่างผลลัพธ์ operator
echo var_dump ($a==$b)."<br>"; // เท่ากัน
echo var_dump ($a===$b)."<br>"; // เหมือนกัน
echo var_dump ($a!=$b)."<br>"; // ไม่เท่ากับ   
echo var_dump ($a<>$b)."<br>"; // ไม่เท่ากับ
echo var_dump ($a!==$b)."<br>"; // ไม่เหมือนกัน
echo var_dump ($a>$b)."<br>"; //  มากกว่า
echo var_dump ($a<$b)."<br>"; // น้อยกว่า
echo var_dump ($a>=$b)."<br>"; // มากกว่าเท่ากับ
echo var_dump ($a<=$b)."<br>"; // น้อยกว่าเท่ากับ

//* เงื่อนไขและผลลัพธ์ของเครื่องหมาย <=> หากตรงกับเงื่อนไขใดผลลัพธิ์ก็จะแสดงออกมาแบบนั้น
//* เช่น a<b = -1, a=b = 0, a>b = 1  
echo var_dump ($a<=>$b)."<br>"; // spacesship (php7) ใช้ได้กับ php เวอร์ชั่น7 ขึ้นไป

?>