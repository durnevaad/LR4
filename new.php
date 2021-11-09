<html>
<head> <title> Добавление нового пользователя</title> </head>
<body>
<H2> Регистрация на сайте: </H2>
<form action="save_new.php" method="post">
<br>Имя: <input name="user_name" type="text" size="20">
<br>Логин: <input name="user_login" type="text" size="20"> 
<br>Пароль: <input name="user_password" type="password" size="20">
<br>Почта: <input name="user_e_mail" type="text" size="20"> 
<br>Информация: <input name="user_info" type="text" size="20"> 
<p><input name="add" type="submit" value="Добавить">
<input type="reset"value="Очистить"><p>
</form>
<p>
<a href="index.php"> Вернуться к списку пользователей </a>
</body>
</html>