<html> <body>
<?php
$link = mysqli_connect(127.0.0.1", "a0594944_root", "root", "a0594944_users); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
$id = $_POST['id'];
 $name = $_POST['name'];
 $login = $_POST['login'];
 $password = $_POST['password'];
 $e_mail = $_POST['e_mail'];
 $info = $_POST['info'];
 $sql = "UPDATE user SET user_name = '$name', user_login = '$login', user_password ='$password',user_e_mail ='$e_mail',
	user_info='$info' WHERE id_user='$id' ";
if (mysqli_query($link, $sql)) {
 echo 'Все сохранено. <a href="index.php"> Вернуться к списку
пользователей </a>'; }
 else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться к списку пользователей</a> '; }
?>
</body> </html>