<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP課題5</title>
 </head>
 
 <body>

 <?php
$numbers = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];

// 合計
$sum = array_sum($numbers);

// 平均
$average = array_sum($numbers) / count($numbers);
echo $average;

?>

 </body>
 
 </html>