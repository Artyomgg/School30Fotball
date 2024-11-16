<?php

session_start();

// Проверяем, авторизован ли пользователь  
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

// Сохранение изменений в тексте  
if (isset($_POST['submit'])) {
    $new_text = $_POST['new_text'];
    file_put_contents('text.txt', $new_text);
    $success_message = "Текст успешно обновлен!";
}

// Загрузка текущего текста  
$current_text = file_get_contents('text.txt');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Админ Панель</title>
</head>
<body>
    <h1>Добро пожаловать в админ панель</h1>
    
    <?php if (isset($success_message)) { ?>
        <p><?php echo $success_message; ?></p>
    <?php } ?>
    
    <form method="POST">
        <textarea name="new_text" rows="10" cols="50"><?php echo $current_text; ?></textarea>
        <br>
        <input type="submit" name="submit" value="Сохранить">
    </form>
    
    <p><a href="logout.php">Выйти</a></p>
</body>
</html>