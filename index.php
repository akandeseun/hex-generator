<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  // rgb(red, green, blue)
  $rgb = [255, 255, 255];
  $randomIndex = rand(0, 2);
  $randomColorStart = dechex(rand(0, 255));
  $randomColorEnd = dechex(rand(0, 255));

  $hexCode = [00, 00, 00];

  $colorNumbers = [];

  $hexcodes = [];

  // 1 - red, 2 - blue, 3 - green
  $colorsHex = [
    1 => [],
    2 => [],
    3 => []
  ];

  // populate color numbers array with 64 random numbers between 0 - 255
  for ($i = 0; $i < 64; $i++) {
    $randomValues = rand(0, 255);
    $colorNumbers[$i] = $randomValues;

    // $colorsHex[$randomIndex][$i] = $randomValues;
  }

  rsort($colorNumbers);

  for ($i = 0; $i < 64; $i++) {
    $x = dechex($colorNumbers[$i]);
    if (strlen($x) == 1) {
      $x .= $x;
    }

    $hexcodes[$i] = $x;
  }


  ?>


  <ol>
    <?php foreach ($hexcodes as $color) : ?>

      <?php $fullColor = "#$randomColorStart" . "$randomColorEnd" . "$color"; ?>

      <li style="color: <?= $fullColor ?>">something</li>
    <?php endforeach; ?>
  </ol>

</body>

</html>