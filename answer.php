<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Volume of a Sphere, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Shanea Jaromay" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-deep_orange.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Volume of a Sphere, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of a Sphere, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/volume of sphere.png" width="250" />
      </div>
      <div class="page-content-php">
        <div id="employment-info">
        <?php
        // this calculates volume of a sphere
        $radiusOfSphere = $_GET["radius-of-sphere"];

        // Calculate surface area of the cylinder
        $volumeOfSphere = (4 / 3) * M_PI * ($radiusOfSphere ** 3);

        // Output the result
        echo "If the sphere has a radius = " . $radiusOfSphere . " mm<br />";
        echo "<br />";
        echo "The volume is:" . (round($volumeOfSphere, 2)) . " mm³.";
        echo "<br />";
        ?>
      </div>
  </div>
  <div class="page-content-return">
    <a href="./index.php">Return ...</a>
  </div>
  </main>
  </div>
</body>

</html>
