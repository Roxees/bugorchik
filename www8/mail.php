<?php
 $con = false;
function connectBD () {
global $mysqli;
$con = new mysqli ("localhost", "root", "", "m99524v9_bugor" );
$con -> query ("set names 'utf-8'");
}


function closeBD (){
  global $mysqli;
  $mysqli -> close ();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $mail = $_POST["mail"];
  $message = $_POST["info"];
  
  // Валидация данных
  if (empty($name) || empty($mail) || empty($info)) {
    echo "Пожалуйста, заполните все поля формы.";
  } else {
    // Отправка сообщения на почту администратору
    $to = "egorziro223@yandedx.ru";
    $subject = "Новое сообщение от $name";
    $body = "Имя: $name\nEmail: $mail\n\n$info";
    
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