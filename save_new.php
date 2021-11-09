<?php
 $link = mysqli_connect("127.0.0.1", "a0594944_root", "root", "a0594944_users"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
 $user_name = $_POST['user_name'];
 $user_login = $_POST['user_login'];
 $user_password = $_POST['user_password'];
 $user_e_mail = $_POST['user_e_mail'];
 $user_info = $_POST['user_info'];
 $sql = "INSERT INTO user (user_name, user_login, user_password, user_e_mail, user_info) VALUES('$user_name','$user_login', '$user_password', '$user_e_mail', '$user_info')";
  if (mysqli_query($link, $sql)) { 
 print "<p>Все сохранено";
 print "<p><a href=\"index.php\"> Вернуться к списку пользователей</a>"; }
 else { print "Ошибка сохранения! <a href=\"index.php\"> Вернуться к списку пользователей </a>";}
?>