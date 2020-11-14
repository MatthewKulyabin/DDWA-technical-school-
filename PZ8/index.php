<!DOCTYPE html>
<html lang="eng">
<head>
   <meta charset='utf-8'>
   <title>HTML-форма</title>
</head>
<body>
<?php
$errors = [];
if (!empty($_POST)) {
   if (empty($_POST['content'])) {
       $errors[] = 'The field has not been filled';
   }

   if (empty($errors)) {
      $file = 'content.txt';
      $current = file_get_contents($file);
      echo $current;
      exit();
   }
}

if (!empty($errors)) {
   foreach ($errors as $error) {
       echo "<span class='error'>$error</span>";
   }
}

?>
<form method="get">
  <textarea name="content" cols="30" rows="10" value="<?= htmlspecialchars($_POST['content'], ENT_QUOTES); ?>" placeholder="<??>"></textarea>
  <input type="submit" value="Отправить">
</form>
</body>
</html>