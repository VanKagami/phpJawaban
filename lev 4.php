<!-- Jawaban Vandy -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    $x = 5;
    $y = 2;
    $a = 8;
    $b = 4;
    
  ?>

  <!-- Perbarui dan cetak variable $x dibawah -->
  <?php
    $x = 10;
    $x = $x + 5;
    echo $x;
    
  ?>

  <br>

  <!-- Perbarui dan cetak variable $y dibawah -->
  <?php
    $y = 2;
    $y = $y * 5;
    echo $y
    
  ?>

  <br>

  <!-- Perbarui dan cetak variable $a dibawah -->
  <?php
    $a = 8;
    echo $a++;
  ?>

  <br>
  
  <!-- Perbarui dan cetak variable $b dibawah -->
  <?php
    
    $b = 4;
    echo $b-1;
  ?>

</body>
</html>
