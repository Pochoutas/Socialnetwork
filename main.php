<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Social Network | Home</title>
</head>
<body>
  <h1>Social Network</h1>
  <h2>Home</h2>
  <p>Bonjour <b><?= $user->getUsername(); ?></b>.</p>
  <a href="/logout">Logout</a>
 
  <form action="/" method="post">
    <div>
      <label for="title">title : </label>
      <input type="text" id="title" name="title">
    </div>
    <br>
    <div>
      <label for="content">content : </label>
      <textarea id="content" name="content"></textarea>
    </div>
    <br>
    <div>
      <input type="submit" value="Publier">
    </div>
  </form>
  <hr>
  <?php foreach ($posts as $post): ?>
    <div>
    <h3><?= $post->getTitle(); ?></h3>
    <p><?= $post->getContent(); ?></p>
    <p><i>Author : <?= User::findById($post->getIdUser())[0]['firstName'] . ' ' . User::findById($post->getIdUser())[0]['lastName'] ?></i></p>

    </div>
   <hr>
  <?php endforeach ?>
  
</body>
</html>