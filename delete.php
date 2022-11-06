

<?php 

require_once ('connect.php');

  $id = $_GET['id'];
  $DelSql = "DELETE FROM `etudiant` WHERE id=$id";

  $res = mysqli_query($conn, $DelSql);
  if ($res) {
    header("Location: vue.php");
    
  }else{
    echo "Failed to delete";
  }

 ?>