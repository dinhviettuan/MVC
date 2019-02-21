<?php 
 require "connect.php";
 $id=$_GET["id"];
 $stmt = $pdo->prepare("DELETE FROM student WHERE studentId = ?");
 $stmt->execute([$id]);
 $deleted = $stmt->rowCount();
 header("location:http://localhost/bt/MVC/index.php");
?>