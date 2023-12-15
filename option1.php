<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    body {
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-weight: bold;
    }

    .box {
      width: 100px;
      height: 100px;
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <?php

  $colorNumbers = [];

  // 1 - red, 2 - blue, 3 - green
  $colorsHex = [
    0 => [],
    1 => [],
    2 => []
  ];

  for ($i = 0; $i < count($colorsHex); $i++) {
    if (count($colorsHex[$i]) === 0) {
      for ($j = 0; $j < 60; $j++) {
        $colorsHex[$i][$j] = rand(0, 150);
      }
    }
  }

  $red = $colorsHex[0];
  $green = $colorsHex[1];
  $blue = $colorsHex[2];

  rsort($red);
  rsort($green);
  rsort($blue);

  // red

  for ($i = 0; $i < count($red); $i++) {
    $colorEq = dechex($red[$i]);

    // if (strlen($colorEq) == 1) {
    //   $colorEq .= $colorEq;
    // }

    $red[$i] = $colorEq;
  }
  // green

  for ($i = 0; $i < count($green); $i++) {
    $colorEq = dechex($green[$i]);

    // if (strlen($colorEq) == 1) {
    //   $colorEq .= $colorEq;
    // }

    $green[$i] = $colorEq;
  }
  // blue

  for ($i = 0; $i < count($blue); $i++) {
    $colorEq = dechex($blue[$i]);

    // if (strlen($colorEq) == 1) {
    //   $colorEq .= $colorEq;
    // }

    $blue[$i] = $colorEq;
  }



  // rsort($colorsHex[]);

  // foreach ($colorsHex as $rgb) {
  //   rsort($rgb);

  //   for ($i = 0; $i < count($rgb); $i++) {
  //     $colorEq = dechex($rgb[$i]);

  //     if (strlen($colorEq) == 1) {
  //       $colorEq .= $colorEq;
  //     }

  //     $rgb[$i] = $colorEq;
  //   }
  // }



  // red

  // for ($i=0; $i < count($red); $i++) { 

  // }


  ?>

  <?php for ($i = 0; $i < 60; $i++) : ?>

    <?php $fullColor = "#" . $red[$i] . $green[$i] . $blue[$i];
    ?>

    <div class="box" style="background:<?= $fullColor ?>"></div>
    <p><?= $fullColor ?></p>

  <?php endfor; ?>

</body>

</html>