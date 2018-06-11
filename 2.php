<?php
  // 1.2 Получить все четырехзначные числа, сумма цифр которых равна заданному числу n.
  $n = 10;
  for($i = 1000; $i<10000; $i++)
  {
    $fourth = floor(($i % 100) % 10);
    $third = floor(($i % 100) / 10);
    $second = floor(($i % 1000) / 100);
    $first = floor($i / 1000);
    $sum = $first+$second+$third+$fourth;
    if($n == $sum)
    {
      echo $i."</br>";
    }
  }
?>
