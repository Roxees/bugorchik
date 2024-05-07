                
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Получаем значения из полей формы
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                
                    // Здесь может быть код для валидации и обработки полученных данных
                    // Например, проверка на существование пользователя, проверка пароля и т.д.
                
                    // Для примера, просто выведем полученные данные
                    echo "Email: " . htmlspecialchars($email) . "<br>";
                    echo "Password: " . htmlspecialchars($password);
                }
                ?>
                
<body background = "img/fon.png">
</body>
<h1>Data has been successfully added to the database.<h1><br/> 
Welcome to the 100 Yuristov.<br/>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Choose file for upload <br/>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload images" name="submit">
</form>
