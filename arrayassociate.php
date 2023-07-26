<?php
// การสร้าง array แบบจับคู่ (Associate)
// แบบจับคู่ key => value ('=>' คือลูกศรแอร์โล้)
$room = array("A01" => "ray","A02" => "ji","A03" => "jo");
// print_r($room);
print($room["A01"]."\t".$room["A02"]);
?>