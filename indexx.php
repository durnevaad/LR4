<title>Дурнева А.Д.</title>
<html>
<head> <title> Сведения о холодильниках </title> </head>
<body>
<h2>Холодильники:</h2>
<table border="2">
		<tr>
		    <th> Номер</th>
			<th> Марка</th>
			<th> Модель</th>
			<th> Тип разморозки</th>
			<th> Редактировать</th>
			<th> Удалить</th>
		</tr>
<?php	
$link = mysqli_connect("127.0.0.1", "root", "", "fridge"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
$result = mysqli_query($link, "SELECT id, brand, model,internal_volume FROM fridges");
while ($row=mysqli_fetch_array($result)){
 echo "<tr>";
 echo "<td>" . $row['id'] . "</td>";
 echo "<td>" . $row['brand'] . "</td>";
 echo "<td>" . $row['model'] . "</td>";
 echo "<td>" . $row['internal_volume'] . "</td>";
 echo "<td><a href='edit.php?id=" . $row['id']. "'>Редактировать</a></td>"; 
 echo "<td><a href='delete.php?id=" . $row['id']. "'>Удалить</a></td>"; 
 echo "</tr>";}
print "</table>";
$num_rows = mysqli_num_rows($result); 
print("<P>Моделей холодильников: $num_rows </p>");
?>
<p> <a href="neww.php"> Добавить новую модель </a>
</body> </html>