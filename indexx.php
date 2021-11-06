<html>
<head> <title> Сведения о холодильниках </title> </head>
<body>
<h2>Холодильники:</h2>
<table border="1">
		<tr>
			<th> Номер</th>
			<th> Марка</th>
			<th> Модель</th>
			<th> Внутренний объем</th>
			<th> Редактировать</th>
			<th> Удалить</th>
		</tr>
<?php	
$link = mysqli_connect("127.0.0.1", "root", "", "fridge"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
$result = mysqli_query($link, "SELECT id_f, brand, model, internal_volume FROM fridges");
while ($row=mysqli_fetch_array($result)){
 echo "<tr>";
 echo "<td>" . $row['id_f'] . "</td>";
 echo "<td>" . $row['brand'] . "</td>";
 echo "<td>" . $row['model'] . "</td>";
 echo "<td>" . $row['internal_volume'] . "</td>";
 echo "<td><a href='editt.php?id=" . $row['id_user']. "'>Редактировать</a></td>"; 
 echo "<td><a href='deletee.php?id=" . $row['id_user']. "'>Удалить</a></td>"; 
 echo "</tr>";}
print "</table>";
$num_rows = mysqli_num_rows($result); 
print("<P>Всего моделей холодильников: $num_rows </p>");
?>
<p> <a href="neww.php"> Добавить модель холодильника </a>
</body> </html>