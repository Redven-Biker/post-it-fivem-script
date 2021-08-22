<?php include('libs/config.php'); ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="background"></div>
<div class="grid-container">
  <?php $reponse = $bdd->query('SELECT * FROM post'); while ($data = $reponse->fetch()) { ?> 
    <div class="post-it">
      <form action='libs/delete.php' method='post' style="z-index:99;padding-bottom: 150px">
      <p class="sticky taped">
      <strong><?php echo $data['title']; ?></strong><br>
      <?php echo $data['description']; ?><br>
      <?php echo '<button type="submit" name="deletepost" style="color:red;font-size:15px;font-family: Indie Flower, cursive;background: transparent;border:none;" value="' . $data['id'] . '">delete</button>'; ?>
      </p>
      </form>
    </div>
    <?php } $reponse->closeCursor(); ?>
    <div class="post-it-2">
      <form action="add-post.php" method="post">
      <p class="sticky taped">
      <input type="text" name="title" placeholder="Title">
      <textarea name="description" rows="4" placeholder="Description"></textarea><br>
      <button type="submit" style="color:red;font-size:18px;font-family: Indie Flower, cursive;background: transparent;border:none;">add</button>
      </p>
      </form>
    </div>
</div>
</div>
</body>
</html>
