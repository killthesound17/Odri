<? php
function complete_mail() {
        // $_POST['title'] содержит данные из поля "Тема", trim() - убираем все лишние пробелы и переносы строк, htmlspecialchars() - преобразует специальные символы в HTML сущности, будем считать для того, чтобы простейшие попытки взломать наш сайт обломались, ну и  substr($_POST['title'], 0, 1000) - урезаем текст до 1000 символов. Для переменных $_POST['mess'], $_POST['name'], $_POST['tel'], $_POST['email'] все аналогично
        $_POST['fname'] =  substr(htmlspecialchars(trim($_POST['fname'])), 0, 100);
        $_POST['lname'] =  substr(htmlspecialchars(trim($_POST['lname'])), 0, 100);
        $_POST['email'] =  substr(htmlspecialchars(trim($_POST['email'])), 0, 50);
        $_POST['phone'] =  substr(htmlspecialchars(trim($_POST['phone'])), 0, 30);
        $_POST['address'] =  substr(htmlspecialchars(trim($_POST['address'])), 0, 30);
        $_POST['bitrhdate'] =  substr(htmlspecialchars(trim($_POST['bitrhdate'])), 0, 30);
        $_POST['gender'] =  substr(htmlspecialchars(trim($_POST['gender'])), 0, 30);
        $_POST['height'] =  substr(htmlspecialchars(trim($_POST['height'])), 0, 30);
        $_POST['bust'] =  substr(htmlspecialchars(trim($_POST['bust'])), 0, 30);
        $_POST['waist'] =  substr(htmlspecialchars(trim($_POST['waist'])), 0, 30);
        $_POST['hips'] =  substr(htmlspecialchars(trim($_POST['hips'])), 0, 30);
        $_POST['shoes'] =  substr(htmlspecialchars(trim($_POST['shoes'])), 0, 30);
        $_POST['hair'] =  substr(htmlspecialchars(trim($_POST['hair'])), 0, 30);
        $_POST['eyes'] =  substr(htmlspecialchars(trim($_POST['eyes'])), 0, 30);

        //
        // // если не заполнено поле "Имя" - показываем ошибку 0
        // if (empty($_POST['name']))
        //      output_err(0);
        // // если неправильно заполнено поле email - показываем ошибку 1
        // if(!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $_POST['email']))
        //      output_err(1);
        // // если не заполнено поле "Сообщение" - показываем ошибку 2
        // if(empty($_POST['mess']))
        //      output_err(2);
        // // обратите внимание, теперь мы можем писать красивые письма, с помощью html тегов ;-)
        $messageForm = '
<b>Имя отправителя:</b>'.$_POST['fname'].'<br />
<b>Имя отправителя:</b>'.$_POST['lname'].'<br />
<b>Имя отправителя:</b>'.$_POST['email'].'<br />
<b>Имя отправителя:</b>'.$_POST['phone'].'<br />
<b>Имя отправителя:</b>'.$_POST['address'].'<br />
<b>Имя отправителя:</b>'.$_POST['bitrhdate'].'<br />
<b>Имя отправителя:</b>'.$_POST['gender'].'<br />
<b>Имя отправителя:</b>'.$_POST['height'].'<br />
<b>Имя отправителя:</b>'.$_POST['bust'].'<br />
<b>Имя отправителя:</b>'.$_POST['waist'].'<br />
<b>Имя отправителя:</b>'.$_POST['hips'].'<br />
<b>Имя отправителя:</b>'.$_POST['shoes'].'<br />
<b>Имя отправителя:</b>'.$_POST['hair'].'<br />
<b>Имя отправителя:</b>'.$_POST['eyes'].'<br />
';

        // подключаем файл класса для отправки почты
        require 'class.phpmailer.php';

        $mail = new PHPMailer();
        $mail->From = 'test@test.ru';      // от кого !!!!!!!!!
        $mail->FromName = 'www.php-mail.ru';   // от кого !!!!!!!!!!!
        $mail->AddAddress('to@yandex.ru', 'Имя'); // кому - адрес, Имя !!!!!!!!
        $mail->IsHTML(true);        // выставляем формат письма HTML
        $mail->Subject = $_POST['lname'];  // тема письма

        // если был файл, то прикрепляем его к письму
        // if(isset($_FILES['attachfile'])) {
        //          if($_FILES['attachfile']['error'] == 0){
        //             $mail->AddAttachment($_FILES['attachfile']['tmp_name'], $_FILES['attachfile']['name']);
        //          }
        // }
        // если было изображение, то прикрепляем его в виде картинки к телу письма.
        if(isset($_FILES['photo'])) {
                 if($_FILES['photo']['error'] == 0){
                    if (!$mail->AddEmbeddedImage($_FILES['photo']['tmp_name'], 'my-attach', 'image.gif', 'base64', $_FILES['photo']['type']))
                         die ($mail->ErrorInfo);
                    $messageForm .= 'Фото :<br /><img src="cid:my-attach" border=0><br /> ';
                 }
        }
        $mail->Body = $messageForm;

        // отправляем наше письмо
        if (!$mail->Send()) die ('Mailer Error: '.$mail->ErrorInfo);
        echo 'Спасибо! Ваше письмо отправлено.';
}

function output_err($num)
{
    $err[0] = 'ОШИБКА! Не введено имя.';
    $err[1] = 'ОШИБКА! Неверно введен e-mail.';
    $err[2] = 'ОШИБКА! Не введено сообщение.';
    echo '<p>'.$err[$num].'</p>';
    show_form();
    exit();
}

if (!empty($_POST['sendform'])) complete_mail();
else show_form();
?>
