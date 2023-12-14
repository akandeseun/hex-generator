<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  // rgb(255, 255, 255)
  $rgb = [0, 0, 0];
  $rgbIndex = [0, 1, 2];
  $hexCode = [00, 00, 00];

  $colorNumbers = [];

  $colorsHex = [];

  // populate color numbers array with 64 random numbers between 0 - 255
  for ($i = 0; $i < 10; $i++) {
    $colorNumbers[$i] = rand(0, 255);
  }

  sort($colorNumbers);

  for ($i = 0; $i < 10; $i++) {
    $x = dechex($colorNumbers[$i]);
    $colorsHex[$i] = "#0000{$x}";
  }

  ?>

  <ol>
    <?php foreach ($colorsHex as $color) : ?>

      <li style="color: <?= $color ?>">something</li>
    <?php endforeach; ?>
  </ol>
</body>

</html>