<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400|Rochester|Roboto:300,400" rel="stylesheet">
  <link rel="stylesheet" href="../src/css/normalize.css">
  <link rel="stylesheet" href="../src/css/main.css">
  <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <script type="text/javascript" src="https://unpkg.com/masonry-layout@4.2.0/dist/masonry.pkgd.min.js">
  </script>


  <title>WOMEN - ODRI Model Management</title>
</head>
<body>
  <div id="p_prldr">
    <div class="contpre">
      <span class="svg_anm"></span><br>Please, wait<br><small>Loading...</small>
    </div>
  </div>
  <header>
      <?php
      include 'en-header.html' ?>
  </header>


  <main>



<div class="container">

  <div class="model-filter filter-button-group">
    <button class="model-filter__item model-filter__item--active" data-filter="*" data-filter=".">All</button>
    <button class="model-filter__item" data-filter=".top">TOP</button>
    <button class="model-filter__item" data-filter=".a-j">A-J</button>
    <button class="model-filter__item" data-filter=".k-r">K-R</button>
    <button class="model-filter__item" data-filter=".s-z">S-Z</button>
  </div>
<section class="models">
  <div class="model a-j">
    <img src="../src/img/women/Alina/IMG_2977.jpg" alt="" class="model__imgprev">
    <a href="women_info_alina.php" class="model__name">Alina</a>
  </div>
  <div class="model a-j">
    <img src="../src/img/women/Anna/IMG_2351.jpg" alt="" class="model__imgprev">
    <a href="women_info_anna.php" class="model__name">Anna</a>
  </div>
  <div class="model s-z">
    <img src="../src/img/women/Valery/IMG_2468.jpg" alt="" class="model__imgprev">
    <a href="women_info_valery.php" class="model__name">Valeriia</a>
  </div>
  <div class="model s-z">
    <img src="../src/img/women/ViktoriiaB/IMG_2505.jpg" alt="" class="model__imgprev">
    <a href="women_info_viktoriyab.php" class="model__name">Viktoriia B.</a>
  </div>

</section>

</div>
  </main>
  <footer>
    <?php
    include 'en-footer.php' ?>
  </footer>
  <script type="text/javascript">$(window).on('load', function () {
    var $preloader = $('#p_prldr'),
        $svg_anm   = $preloader.find('.svg_anm');
    $svg_anm.fadeOut();
    $preloader.delay(750).fadeOut('slow');
});</script>
    <script src="https://use.fontawesome.com/e059081491.js"></script>
<script type="text/javascript" src="../src/js/isotope.js"></script>
</body>
</html>
