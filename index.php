<html>
<head> <title> Сведения о прользователях сайта </title> </head>
<body>
<?php
 $link = mysqli_connect("127.0.0.1", "root", "", "users"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
?>
<h2>Зарегистрированные пользователи:</h2>
<table border="1">
		<tr>
			<th> Номер</th>
			<th> Имя</th>
			<th> E-mail</th>
			<th> Редактировать</th>
			<th> Уничтожить</th>
		</tr>
<?php	
$result = mysqli_query($link, "SELECT id_user, user_name, user_e_mail FROM user");
while ($row=mysqli_fetch_array($result)){
 echo "<tr>";
 echo "<td>" . $row['id_user'] . "</td>";
 echo "<td>" . $row['user_name'] . "</td>";
 echo "<td>" . $row['user_e_mail'] . "</td>";
 echo "<td><a href='edit.php?id=" . $row['id_user']. "'>Редактировать</a></td>"; 
 echo "<td><a href='delete.php?id=" . $row['id_user']. "'>Удалить</a></td>"; 
 echo "</tr>";}
print "</table>";
$num_rows = mysqli_num_rows($result); 
print("<P>Всего пользователей: $num_rows </p>");
?>
<p> <a href="new.php"> Добавить пользователя </a>
</body> </html>