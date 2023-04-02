<?php

	// use PHPMailer\PHPMailer\PHPMailer;
	// use PHPMailer\PHPMailer\Exception;

	// require '../phpmailer/src/Exception.php';
	// require '../phpmailer/src/PHPMailer.php';

	// $mail = new PHPMailer(true);	
	// $mail->CharSet = 'UTF-8';
	// $mail->setLanguage('ru', 'phpmailer/language/');
	// $mail->IsHTML(true);

	// $mail->setForm('demo@gmail.com');

	// $mail->addAddress('pekahka@gmail.com');

	// $mail->Subject = 'Demo';


	// $body = '';

	// if(trim(!empty($_POST['name']))){
	// 	$body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
	// }
	// if(trim(!empty($_POST['email']))){
	// 	$body.='<p><strong>Почта:</strong> '.$_POST['email'].'</p>';
	// }
	// if(trim(!empty($_POST['message']))){
	// 	$body.='<p><strong>Сообщение:</strong> '.$_POST['message'].'</p>';
	// }

	// $mail->Body = $body;

	// if(!$mail->send()) {
	// 	$message = 'Ошибка';
	// } else {
	// 	$message = 'Данные отправлены!';
	// }

	// $response = ['message' => $message];

	// header('Content-type: application/json');
	// echo json_encode($response)


	
// несколько получателей
	$to  = 'pekahka@gmail.com';


	// тема письма
	$subject = 'Письмо с моего сайта';

	// текст письма
	$message = 'Пользователь' . $_POST['name'] . ' отправил вам письмо:<br />' . $_POST['message'] . '<br />
	Связяться с ним можно по email <a href="mailto:' . $_POST['email'] . '">' . $_POST['email'] . '</a>'
	;

	// Для отправки HTML-письма должен быть установлен заголовок Content-type
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

	// Дополнительные заголовки
	$headers .= 'To: Igor <pekahka@gmail.com>' . "\r\n"; // Свое имя и email
	$headers .= 'From: '  . $_POST['name'] . '<' . $_POST['email'] . '>' . "\r\n";


	// Отправляем
	mail($to, $subject, $message, $headers);
?>




