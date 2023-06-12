<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & HTML</title>
<style>
    h1{
        text-align:center;
    }
</style>
</head>
<body>

    <h1>php ร่วมกับ HTML</h1>

    <?php
    
    $name = "ray"; // ray เก็บค่าไว้ในตัวแปร $name

    echo "raywat"; // echoแสดงข้อความ
    echo "<h1>ศึกษา</h1>";

    print("ray print") // printแสดงข้อความ
    
    ?> 

    <form action=""> <!--สร้าง form action to PHP--> 
        <label for="">Fname</label>
        <input type="text" name="" id="" value="<?php echo $name; ?>"> <!--นำค่าที่อยู่ในตัวแปร $name มาแสดงใน บล๊อก Fname-->

        <label for="">Lname</label>
        <input type="text" name="" id="" value="<?php echo "wat"; ?>"><!--แสดงข้อความโดยใช้คำสั่งPHP-->
    </form>    
</body>
</html>