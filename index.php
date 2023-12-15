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

  $randomIndex = rand(0, 2);
  $randomColorStart = dechex(rand(0, 200));
  $randomColorEnd = dechex(rand(0, 200));

  if (strlen($randomColorStart) == 1) {
    $randomColorStart .= $randomColorStart;
  }

  if (strlen($randomColorEnd) == 1) {
    $randomColorEnd .= $randomColorEnd;
  }

  $hexCode = [00, 00, 00];

  $colorNumbers = [];

  $hexcodes = [];

  // 1 - red, 2 - blue, 3 - green
  // $colorsHex = [
  //   1 => [],
  //   2 => [],
  //   3 => []
  // ];

  // populate color numbers array with 64 random numbers between 0 - 255
  for ($i = 0; $i < 64; $i++) {
    $randomValues = rand(10, 200);
    $colorNumbers[$i] = $randomValues;

    // $colorsHex[$randomIndex][$i] = $randomValues;
  }

  rsort($colorNumbers);

  for ($i = 0; $i < 62; $i++) {
    $x = dechex($colorNumbers[$i]);
    if (strlen($x) == 1) {
      $x .= $x;
      // $hexcodes[$i] = $x;
    }

    $hexcodes[$i] = $x;
  }


  ?>


  <ol>
    <?php foreach (array_unique($hexcodes) as $color) : ?>

      <?php $fullColor = "#$randomColorStart" . "$color" . "$randomColorEnd"; ?>

      <div class="box" style="background:<?= $fullColor ?>"></div>
      <!-- <p><?= $fullColor ?></p> -->
    <?php endforeach; ?>
  </ol>

</body>

</html>