<!DOCTYPE html>
<html lang="eng">
<head>
   <meta charset='utf-8'>
   <title>HTML-форма</title>
</head>
<body>
<?php
function getTwoDotsDistance($A, $B) {
  return sqrt((($A['X'] - $B['X']) ** 2 + ($A['Y'] - $B['Y'])) ** 2);
}
$errors = [];
if (!empty($_POST)) {
   if (empty($_POST['content'])) {
       $errors[] = 'The field has not been filled';
   }

   if (empty($errors)) {
      $file = 'content.txt';
      $current = file_get_contents($file);
      $current = htmlspecialchars($_POST['content']);
      file_put_contents($file, $current);
      exit();
   }
}

if (!empty($errors)) {
   foreach ($errors as $error) {
       echo "<span class='error'>$error</span>";
   }
}

?>
<form method="post">
  <textarea name="content" cols="30" rows="10" value="<?= htmlspecialchars($_POST['content'], ENT_QUOTES); ?>" placeholder="<??>"></textarea>
  <input type="submit" value="Отправить">
</form>
</body>
</html>