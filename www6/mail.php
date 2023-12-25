<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  // Валидация данных
  if (empty($name) || empty($email) || empty($message)) {
    echo "Пожалуйста, заполните все поля формы.";
  } else {
    // Отправка сообщения на почту администратору
    $to = "egorziro223@yandedx.ru";
    $subject = "Новое сообщение от $name";
    $body = "Имя: $name\nEmail: $email\n\n$message";
    
    if (mail($to, $subject, $body)) {
      echo "Ваше сообщение успешно отправлено.";
    } else {
      echo "Что-то пошло не так. Пожалуйста, попробуйте еще раз.";
    }
  }
} else {
  echo "Что-то пошло не так. Пожалуйста, попробуйте еще раз.";
}
?>