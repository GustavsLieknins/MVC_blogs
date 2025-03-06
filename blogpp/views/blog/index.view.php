<!DOCTYPE html>
<html lang="lv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visi ieraksti</title>
</head>
<body>
<nav>
  <ul>
    <li><a href="/">Home</a></li>
    <li><a href="/create">Create</a></li>
  </ul>
</nav>

  <h1>Visi bloga ieraksti</h1>
    <ul>
    <?php foreach ($posts as $post) { ?>
        <li><a href="show?id=<?= $post['id'] ?>"><?= $post['content'] ?></a></li>
    <?php } ?>
    </ul>
</body>
</html>