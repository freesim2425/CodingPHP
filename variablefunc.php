<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟังก์ชั่นทีทำงานกับตัวแปร</title>
</head>
<body>

    <h1>ตัวอย่างโค้ด</h1>

    <pre class="hljs" style="display: block; overflow-x: auto; background: rgb(255, 255, 255); color: rgb(163, 158, 155); padding: 5em 5em; border: 2px solid rgb(231, 0, 193); border-radius: 10px;"><span class="xml"><span class="php"><span class="hljs-meta" style="color: rgb(239, 97, 85);">&lt;?php</span>

<span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;h1&gt;ผลลัพธ์&lt;/h1&gt;&lt;br&gt;"</span>;

<span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;style&gt; body
{background-color:rgb(22, 27, 29)}
&lt;/style&gt;"</span>;

<span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;style&gt;
body {
	color:rgb(147, 92, 37)
}
&lt;/style&gt;"</span>;


<span class="hljs-comment" style="color: rgb(141, 134, 135);">// ประกาศตัวแปร</span>
 $total1 = <span class="hljs-keyword" style="color: rgb(129, 91, 164);">null</span>;
 $total2 = <span class="hljs-string" style="color: rgb(72, 182, 133);">""</span>;
 $total3 = <span class="hljs-number" style="color: rgb(249, 155, 21);">0</span>;
 $total4 = <span class="hljs-string" style="color: rgb(72, 182, 133);">"ray"</span>;
 $total5 = <span class="hljs-string" style="color: rgb(72, 182, 133);">"R-ray"</span>;

 <span class="hljs-comment" style="color: rgb(141, 134, 135);">// แสดงค่าที่อยู่ในตัวแปร</span>
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"ตัวแปร total1 = "</span>.$total1.<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>;
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"ตัวแปร total2 = "</span>.$total2.<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>;
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"ตัวแปร total3 = "</span>.$total3.<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>;
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"ตัวแปร total4 = "</span>.$total4.<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>;

 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;hr&gt;"</span>;
 <span class="hljs-comment" style="color: rgb(141, 134, 135);">// ฟังก์ชั่น isset เป็นการเช็คค่าตัวแปรว่ามีอยู่หรือไม่ ถ้ามีคือ1 ไม่มีคือ0</span>
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"ตัวแปร total1 = "</span>.<span class="hljs-keyword" style="color: rgb(129, 91, 164);">isset</span>($total1).<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>;
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"ตัวแปร total2 = "</span>.<span class="hljs-keyword" style="color: rgb(129, 91, 164);">isset</span>($total2).<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>;
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"ตัวแปร total3 = "</span>.<span class="hljs-keyword" style="color: rgb(129, 91, 164);">isset</span>($total3).<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>;
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"ตัวแปร total4 = "</span>.<span class="hljs-keyword" style="color: rgb(129, 91, 164);">isset</span>($total4).<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>;
 
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;hr&gt;"</span>;
 <span class="hljs-comment" style="color: rgb(141, 134, 135);">// ฟังก์ชั่น unset ยกเลิกตัวแปรแล้วคืนค่าให้กับหน่วยความจำ</span>
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"ตัวแปร total5 ก่อนใช้ unset = "</span>.<span class="hljs-keyword" style="color: rgb(129, 91, 164);">isset</span>($total5).<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>; <span class="hljs-comment" style="color: rgb(141, 134, 135);">// ก่อนใช้คำสั่ง unset ค่าที่แสดงออกมาจะเป็น 1</span>
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">unset</span>($total5); <span class="hljs-comment" style="color: rgb(141, 134, 135);">// การใช้ unset ในการยกเลิกตัวแปร </span>
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"ตัวแปร total5 หลังใช้ unset = "</span>.<span class="hljs-keyword" style="color: rgb(129, 91, 164);">isset</span>($total5).<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>; <span class="hljs-comment" style="color: rgb(141, 134, 135);">// หลังใช้คำสั่ง unset ค่าที่แสดงออกมาจะเป็น 0 หรือ ค่าว่าง</span>
 
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;hr&gt;"</span>;
 <span class="hljs-comment" style="color: rgb(141, 134, 135);">// ฟังก์ชั่น empty ใช้สำหรับตรวจสอบค่าว่าง</span>
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"ตัวแปร total1 = "</span>.<span class="hljs-keyword" style="color: rgb(129, 91, 164);">empty</span>($total1).<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>;
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"ตัวแปร total2 = "</span>.<span class="hljs-keyword" style="color: rgb(129, 91, 164);">empty</span>($total2).<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>;
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"ตัวแปร total3 = "</span>.<span class="hljs-keyword" style="color: rgb(129, 91, 164);">empty</span>($total3).<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>;
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"ตัวแปร total4 = "</span>.<span class="hljs-keyword" style="color: rgb(129, 91, 164);">empty</span>($total4).<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>;
 
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;hr&gt;"</span>;
 <span class="hljs-comment" style="color: rgb(141, 134, 135);">//ฟังก์ชั่น is_null ฟังก์ชั่นสำหรับตรวจสอบตัวแปรที่มีค่า null หรือ ค่าว่าง</span>
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"ตัวแปร total1 = "</span>.is_null($total1).<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>;
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"ตัวแปร total2 = "</span>.is_null($total2).<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>;
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"ตัวแปร total3 = "</span>.is_null($total3).<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>;
 <span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"ตัวแปร total4 = "</span>.is_null($total4).<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>;

<span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> <span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;hr&gt;"</span>;
<span class="hljs-comment" style="color: rgb(141, 134, 135);">// แสดงรายเอียดตัวแปร</span>
<span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> var_dump($total1).<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>;
<span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> var_dump($total2).<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>;
<span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> var_dump($total3).<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>;
<span class="hljs-keyword" style="color: rgb(129, 91, 164);">echo</span> var_dump($total4).<span class="hljs-string" style="color: rgb(72, 182, 133);">"&lt;br&gt;"</span>;

 <span class="hljs-meta" style="color: rgb(239, 97, 85);">?&gt;</span></span></span></pre>

 <!--ส่วนโค้ด PHP-->
<?php

echo "<h1>ผลลัพธ์</h1><br>";

echo "<style> body
{background-color:rgb(22, 27, 29)}
</style>";

echo "<style>
body {
	color:rgb(147, 92, 37)
}
</style>";


// ประกาศตัวแปร
 $total1 = null;
 $total2 = "";
 $total3 = 0;
 $total4 = "ray";
 $total5 = "R-ray";

 // แสดงค่าที่อยู่ในตัวแปร
 echo "ตัวแปร total1 = ".$total1."<br>";
 echo "ตัวแปร total2 = ".$total2."<br>";
 echo "ตัวแปร total3 = ".$total3."<br>";
 echo "ตัวแปร total4 = ".$total4."<br>";

 echo "<hr>";
 // ฟังก์ชั่น isset เป็นการเช็คค่าตัวแปรว่ามีอยู่หรือไม่ ถ้ามีคือ1 ไม่มีคือ0
 echo "ตัวแปร total1 = ".isset($total1)."<br>";
 echo "ตัวแปร total2 = ".isset($total2)."<br>";
 echo "ตัวแปร total3 = ".isset($total3)."<br>";
 echo "ตัวแปร total4 = ".isset($total4)."<br>";
 
 echo "<hr>";
 // ฟังก์ชั่น unset ยกเลิกตัวแปรแล้วคืนค่าให้กับหน่วยความจำ
 echo "ตัวแปร total5 ก่อนใช้ unset = ".isset($total5)."<br>"; // ก่อนใช้คำสั่ง unset ค่าที่แสดงออกมาจะเป็น 1
 unset($total5); // การใช้ unset ในการยกเลิกตัวแปร 
 echo "ตัวแปร total5 หลังใช้ unset = ".isset($total5)."<br>"; // หลังใช้คำสั่ง unset ค่าที่แสดงออกมาจะเป็น 0 หรือ ค่าว่าง
 
 echo "<hr>";
 // ฟังก์ชั่น empty ใช้สำหรับตรวจสอบค่าว่าง
 echo "ตัวแปร total1 = ".empty($total1)."<br>";
 echo "ตัวแปร total2 = ".empty($total2)."<br>";
 echo "ตัวแปร total3 = ".empty($total3)."<br>";
 echo "ตัวแปร total4 = ".empty($total4)."<br>";
 
 echo "<hr>";
 //ฟังก์ชั่น is_null ฟังก์ชั่นสำหรับตรวจสอบตัวแปรที่มีค่า null หรือ ค่าว่าง
 echo "ตัวแปร total1 = ".is_null($total1)."<br>";
 echo "ตัวแปร total2 = ".is_null($total2)."<br>";
 echo "ตัวแปร total3 = ".is_null($total3)."<br>";
 echo "ตัวแปร total4 = ".is_null($total4)."<br>";

echo "<hr>";
// แสดงรายเอียดตัวแปร
echo var_dump($total1)."<br>";
echo var_dump($total2)."<br>";
echo var_dump($total3)."<br>";
echo var_dump($total4)."<br>";

 ?>
</body>
</html>