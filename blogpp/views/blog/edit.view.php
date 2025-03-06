<!DOCTYPE html>
<html lang="lv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Labot ierakstu</title>
</head>
<body>
  <h1>Labot ierakstu</h1>
  <form action="update" method="post">
    <label for="content">Ieraksta saturs</label>
    <textarea name="content" id="content" cols="30" rows="10"><?= $post['content'] ?></textarea>
    <input type="hidden" name="id" value="<?= $post['id'] ?>">
    <button type="submit">Saglabāt</button>
  </form>
</body>
</html>
