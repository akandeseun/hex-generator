  <ol>
    <?php foreach ($colorsHex as $color) : ?>

      <li style="color: <?= $color ?>">something</li>
    <?php endforeach; ?>
  </ol>


  <ol>
    <?php foreach ($colorsHex[$randomIndex] as $color) : ?>

      <li><?= $color ?></li>
    <?php endforeach; ?>
  </ol>

  <ol>
    <?php foreach ($hexcodes as $color) : ?>

      <?php $fullColor = "#$randomColorStart" . "$color" . "$randomColorEnd"; ?>

      <li><?= $fullColor ?></li>
    <?php endforeach; ?>
  </ol>