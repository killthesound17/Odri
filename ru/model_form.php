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
    <script type="text/javascript" src="../src/js/jquery-3.2.1.min.js">
    </script>

    <title>Стать моделью - ODRI Model Management</title>
</head>

<body>
  <div class="container">
    <div class="lang-buttons">
      <a href="../en/model_form.php">EN</a>
      <a href="#">RU</a>
    </div>
  </div>
    <header>
        <?php include 'ru-header.html' ?>
    </header>


    <main>


        <div class="container">
            <section class="model-reg">
                <div class="text-reg">
                  <h2 class="text-reg__heading text-reg__heading--rus">Стать моделью</h2>
                    <h3 class="text-reg__heading text-reg__heading--rus">Online анкета</h3>
                    <p class="text-reg__text">The quickest & easiest way is to send your images to us via this page. Make sure you complete all the sections and someone will be in touch with you if we feel that you have the right look for us.</p>
                    <h3 class="text-reg__heading text-reg__heading--rus">Посети наш офис</h3>
                    <p class="text-reg__text">If you would prefer to come in and see us - contact your local agency and ask for the “open call” schedule.</p>
                </div>
                <div class="form-reg">

                    <form action="../src/php/send.php" class="reg-form" enctype="multipart/form-data" method="post">
                        <h2 class="reg-form__heading reg-form__heading--rus">Контактная информация</h2>
                        <div class="field-flex">
                            <div class="reg-field reg-field--half">
                                <label class="reg-field__label" for="fname">Имя</label><br>
                                <input type="text" id="fname" name="firstname" value="">
                            </div>
                            <div class="reg-field reg-field--half">
                              <label class="reg-field__label" for="lname">Фамилия</label><br>
                                <input type="text" id="lname" name="lastname" value=""></div>
                            <div class="reg-field reg-field--half"><label class="reg-field__label" for="mail">E-mail</label><br>
                                <input type="text" id="mail" name="email" value=""></div>
                            <div class="reg-field reg-field--half"><label class="reg-field__label" for="phonenumber">Тел.номер</label><br>
                                <input type="tel" id="phonenumber" name="phone" value=""></div>
                            <div class="reg-field">
                                <label class="reg-field__label" for="adrs">Адрес</label><br>
                                <input type="text" id="adrs" name="address" value="">
                            </div>
                        </div>
                        <h2 class="reg-form__heading reg-form__heading--rus">Личная информация</h2>
                        <div class="field-flex">
                        <div class="reg-field reg-field--half">
                            <label class="reg-field__label" for="bday">Дата рождения</label><br>
                            <input type="date" id="bday" name="birthdate" value="">
                        </div>
                        <div class="reg-field reg-field--half reg-field--mod">
                          <span class="reg-field__label">пол</span><br>
                                    <label class="reg-field__label" for="fem">Женщина</label>
                                    <input type="radio" name="gender" value="fem">
                                    <label class="reg-field__label" for="male">Мужчина</label>
                                    <input type="radio" name="gender" value="male">

                        </div>
                        <div class="reg-field reg-field--quarter">
                            <label class="reg-field__label" for="height">рост</label><br>
                            <input type="text" id="height" name="height" value="">
                        </div>
                        <div class="reg-field reg-field--quarter">
                            <label class="reg-field__label" for="bust">бюст</label><br>
                            <input type="text" id="bust" name="bust" value="">
                        </div>
                        <div class="reg-field reg-field--quarter">
                            <label class="reg-field__label" for="waist">талия</label><br>
                            <input type="text" id="waist" name="waist" value="">
                        </div>
                        <div class="reg-field reg-field--quarter">
                            <label class="reg-field__label" for="hips">бедра</label><br>
                            <input class="reg-field__label" type="text" id="hips" name="hips" value="">
                        </div>
                        <div class="reg-field reg-field--third">
                            <label class="reg-field__label" for="shoes">обувь</label><br>
                            <input type="text" id="shoes" name="shoes" value="">
                        </div>
                        <div class="reg-field reg-field--third">
                            <label class="reg-field__label" for="hair">волосы</label><br>
                            <input type="text" id="hair" name="hair" value="">
                        </div>
                        <div class="reg-field reg-field--third">
                            <label class="reg-field__label" for="eyes">глаза</label><br>
                            <input type="eyes" id="eyes" name="eyes" value="">
                        </div>
                          <div class="reg-field">
                            <label class="reg-field__label" for="photos">Фотографии (до 5 шт.)</label><br>
                            <input type="file" id="photos" name="" value="" multiple accept="image/png, image/jpeg" required>
                          </div>
                      </div>

                        <input type="submit" name="sendform" value="отправить">
                    </form>
                </div>
        </div>
        </section>

    </main>
    <footer>
        <?php include 'ru-footer.php' ?>
    </footer>

    <script src="https://use.fontawesome.com/e059081491.js"></script>

    <script type="text/javascript" src="../src/js/main.js"></script>
</body>

</html>
