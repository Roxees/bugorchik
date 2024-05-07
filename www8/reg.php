<?php
// Проверяем, была ли отправлена форма методом POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Валидация данных (в данном примере просто проверяем, что поля не пустые)
    if (empty($email) || empty($password)) {
        echo json_encode(['success' => false, 'message' => 'Пожалуйста, заполните все поля.']);
        exit;
    }

    // Возвращаем сообщение об успешной регистрации в формате JSON
    echo json_encode(['success' => true, 'message' => 'Регистрация прошла успешно!']);
} else {
    // Если запрос был не методом POST, возвращаем сообщение об ошибке
    echo json_encode(['success' => false, 'message' => 'Метод запроса не поддерживается.']);
}
?>