<? php
function sendMail() {
        $fname= htmlspecialchars($_POST['fname']);
        $lname = htmlspecialchars($_POST['lname']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $address = htmlspecialchars($_POST['address']);
        $bitrhdate = htmlspecialchars($_POST['bitrhdate']);
        $gender = htmlspecialchars($_POST['gender']);
        $height = htmlspecialchars($_POST['height']);
        $bust = htmlspecialchars($_POST['bust']);
        $waist = htmlspecialchars($_POST['waist']);
        $hips = htmlspecialchars($_POST['hips']);
        $shoes = htmlspecialchars($_POST['shoes']);
        $hair = htmlspecialchars($_POST['hair']);
        $eyes = htmlspecialchars($_POST['eyes']);
        $messageForm = 'your message';

        include 'class.phpmailer.php';// подключаем класс

        $mail = new PHPMailer();
        $mail->From = 'test@test.ru';   //вписать с какого мыла будет приходить
        $mail->FromName = 'Odri Models'; //от кого
        $mail->AddAddress('nastia.seo@gmail.com');
        $mail->IsHTML(true);
        $mail->Subject = 'Новая анкета Odri Models';

        // if(isset($_FILES['photo'])) {
        //     if($_FILES['photo']['error'] == 0)
        //       {
        //         $mail->AddAttachment($_FILES['photo']['tmp_name'],$_FILES['photo']['name']);
        //       }
        //     }
        $mail->Body = $messageForm;
            if (!$mail->Send()) die ('Mailer Error: '.$mail->ErrorInfo);
            {
              echo '<center><b>Спасибо за отправку вашего сообщения<br><a href=index.html>Нажмите</a>, чтобы вернуться на главную страницу';
              }
            if (!empty($_POST['sendform'])) sendMail();
?>
