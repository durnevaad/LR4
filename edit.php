<head> <title> Редактирование данных о пользователе </title> </head>
<?php
 $link = mysqli_connect("127.0.0.1", "root", "", "users"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
 $id = $_GET['id'];
 $rows = mysqli_query($link,"SELECT * FROM user WHERE id_user='$id'");
 $row = mysqli_fetch_assoc($rows);
?>
<FORM  method="post" action="save_edit.php">
<INPUT type="hidden" name="id" value="<?=$row['id_user']?>">
<br>Имя:<INPUT type="text" name="name" value="<?=$row['user_name']?>"> 
<br>Логин: <INPUT type="text" name="login" value="<?=$row['user_login']?>"> 
<br>Пароль:<INPUT type="password" name="password" value="<?=$row['user_password']?>">
<br>Е-mail:<INPUT type="text" name="e_mail" value="<?=$row['user_e_mail']?>">
<br>Информация:<INPUT type="text" name="info" value="<?=$row['user_info']?>">
<p><INPUT type="submit"value="Сохранить">
</FORM>
<a href="index.php"> Вернуться к списку пользователей </a>