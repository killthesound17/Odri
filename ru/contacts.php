<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC|Roboto&amp;subset=cyrillic" rel="stylesheet">

  <link rel="stylesheet" href="../src/css/normalize.css">
  <link rel="stylesheet" href="../src/css/slick.css">
  <link rel="stylesheet" href="../src/css/main.css">
  <script src="https://use.fontawesome.com/e059081491.js"></script>
  <script type="text/javascript" src="../src/js/jquery-3.2.1.min.js">
  </script>

  <title>Контакты - ODRI Model Management</title>
</head>
<body>
  <div class="container">
    <div class="lang-buttons">
      <a href="../en/contacts.php">EN</a>
      <a href="#">RU</a>
    </div>
  </div>
  <header>
      <?php include 'ru-header.html' ?>

  </header>

  <main>
    <section class="contact-us">
      <div class="container">
        <div class="contact-flex">
        <div class="contact-info">
          <h2  class="contact-info__heading contact-info__heading--rus">Контакты</h2>
          <ul class="contact-info__list">
            <li class="contact-info__list-item">  <i class="fa fa-map-marker fa-fw" aria-hidden="true"></i> 65000, Одесса, Гагаринское Плато, 5/3</li>
            <li class="contact-info__list-item"><i class="fa fa-phone fa-fw" aria-hidden="true"></i>+380 (063) 013 - 15 -31</li>
            <li class="contact-info__list-item "><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i> <a class="contact-info__link"  href="mailto:odrimodels@gmail.com?subject=feedback">odrimodels@gmail.com</a></li>
            <li class="contact-info__list-item"><i class="fa fa-skype fa-fw" aria-hidden="true"></i>odrimodels</li>
              <li class="contact-info__list-item"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Полина Платонова</li>
          </ul>

          <h2 class="contact-info__heading contact-info__heading--mod contact-info__heading--rus">Соц. сети</h2class>
          <div class="socialmedia socialmedia--mod">
            <a href="https://www.facebook.com/odriMM/" class="socialmedia__link socialmedia__link--mod"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            <a href="https://vk.com/odri_models_odessa" class="socialmedia__link socialmedia__link--mod"><i class="fa fa-vk" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/odri_models/" class="socialmedia__link socialmedia__link--mod"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="contact-map">
          <h2 class="contact-map__heading">Мы на карте</h2>
          <div class="map" id="map-main"></div>
        </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <?php include 'ru-footer.php' ?>
  </footer>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzEm15-1x81gZ9FcYraaVZdEEfW65rOMI&callback=initMap" defer></script>
  <!-- <script type="text/javascript" src="../src/js/slick.min.js">
  </script> -->
  <script src="https://use.fontawesome.com/e059081491.js"></script>
  <!-- <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <script type="text/javascript" src="https://unpkg.com/masonry-layout@4.2.0/dist/masonry.pkgd.min.js">
  </script> -->
  <script type="text/javascript" src="../src/js/map.js">

  </script>
  <script type="text/javascript" src="../src/js/main.js">

  </script>
</body>
</html>
