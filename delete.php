<?php
$link = mysqli_connect("127.0.0.1", "root", "", "users"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
 $id = $_GET['id'];
 $sql = "DELETE FROM user WHERE id_user = '$id' ";
 mysqli_query($link, $sql);
 header("Location: index.php");
 exit;
?>
