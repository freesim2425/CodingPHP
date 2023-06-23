<?php

// หาพื้นที่สามเหลียม
$width = 30;
$height = 30;
if ($width>0 && $height>0 ) {
    echo "พื้นที่สีเหลี่ยม = ".$width*$height."\tตรางนิ้ว";
}else{
    echo "ค่าต้องมีมากกว่า 0";
} 

echo "<hr>";
// คิดเกรด
$score = 49;
if ($score >= 80) {
    echo "A";
}elseif ($score >= 70) {
    echo "B";
}elseif ($score >= 60) {
    echo "C";
}elseif ($score >= 50) {
    echo "D";
}else {
    echo "F";
}

?>