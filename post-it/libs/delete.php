<?php
include( "config.php" );

if(isset($_POST['deletepost']) and is_numeric($_POST['deletepost']))
{
  $id = $_POST['deletepost'];
  $count=$bdd->prepare("DELETE FROM post WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../index.php');
};

?>