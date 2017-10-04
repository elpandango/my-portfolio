<?
require $_SERVER['DOCUMENT_ROOT'].'/PHPMailer/PHPMailerAutoload.php';
// ----------------------------конфигурация-------------------------- //


// Принимаем данные с формы

$name=$_POST['name'];

$email=$_POST['email'];

$msg=$_POST['message'];

 // Отправляем письмо админу




$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

//$mail->isSMTP();                                      // Set mailer to use SMTP
//$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
//$mail->SMTPAuth = true;                               // Enable SMTP authentication
//$mail->Username = 'user@example.com';                 // SMTP username
//$mail->Password = 'secret';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('elpandango@gmail.com', 'Eugen');
$mail->addAddress('elpandango@gmail.com', 'Eugen');
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';

$mail->Body    = <<<EOD
<strong>Отправлено от: $email</strong><br>
<strong>Имя отправителя: $name</strong><br>
<p>$msg</p>
EOD;

if( $mail->send() ) {
    Header("Location: \?mail=send");
    exit();
} else {
    Header("Location: \?mail=error");
    exit();
}