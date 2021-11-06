<?php
 $link = mysqli_connect("127.0.0.1", "a0594944_root", "root", "a0594944_users); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
 $name = $_POST['name'];
 $login = $_POST['login'];
 $password = $_POST['password'];
 $e_mail = $_POST['e_mail'];
 $info = $_POST['info'];
 $sql = "INSERT INTO user (user_name, user_login, user_password, user_e_mail, user_info) 
 VALUES ('$name', '$login', '$password', '$e_mail', '$info')";
if (mysqli_query($link, $sql)) {
	print "<p>Все сохранено.";
 print "<p><a href=\"index.php\"> Вернуться к списку
пользователей </a>"; }
else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку книг </a>";}
?>