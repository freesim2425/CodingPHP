<?php
// break ถ้าโปรแกรมพบคำสั่งนี้จะหยุดทำงานในลูปทันทีเพื่อนไปทำงานคำสั่งอื่นนอกลูป
for ($i=1; $i < 10 ; $i++) { 
    echo "รอบที่ = ",$i."<br>";
    if ($i==5) {
        break;
    }
}
echo "จบการทำงาน";

echo "<hr>";
// continue คำสั่งนี้จะทำให้หยุดการทำงานแล้วย้อนไปเริ่มต้นการทำงานในลูปใหม่
for ($i=1; $i <= 3 ; $i++) { 
    if ($i==2) //ตรวจสอบเงื่อนไข
        continue;// หยุดในบรรทัดที่5แล้วรันต่อในบนนทัดถัดไปแล้วกลับมาเริ่มต้นใหม่
        echo "รอบที่ = ",$i."<br>";   
}
echo "จบการทำงาน";

echo "<hr>";
// คำสั่งให้โปรแกรมหยุดทำงาน(ใช้ในกรณีที่มีข้อผิดพลาดเกิดขึ้นในโปรแกรมจะออกจากการทำงานของโปรแกรมทั้งหมด)
for ($i=1; $i <= 3 ; $i++) { 
    if ($i==2) //ตรวจสอบเงื่อนไข
        continue;// หยุดในบรรทัดที่5แล้วรันต่อในบนนทัดถัดไปแล้วกลับมาเริ่มต้นใหม่
        echo "รอบที่ = ",$i."<br>";   
}
    exit; // ออกจากการทำงานของโปรแกรมทั้งหมด
echo "จบการทำงาน";
?>