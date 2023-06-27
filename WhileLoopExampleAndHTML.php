<?php
$cound = 1;
$limit = 12;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1> รายการอาหาร </h1>
  <select name="" id="">
        <?php while ($cound <= $limit) {?>
        <option value="<?php echo $cound; ?>">รายการที่ <?php echo $cound; ?></option>
    <?php
        $cound++;
    }
    ?>
  </select>
</body>
</html>