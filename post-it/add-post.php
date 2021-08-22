<?php
include( "libs/config.php" );
$req = $bdd->prepare('INSERT INTO post (title, description) VALUES(?, ?)');
$req->execute(array($_POST['title'], $_POST['description']));
header('Location: index.php');

?>