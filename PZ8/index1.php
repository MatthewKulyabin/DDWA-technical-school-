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
   if (empty($_POST['AX']) || empty($_POST['AY']) ||
       empty($_POST['BX']) || empty($_POST['BY'])) {
       $errors[] = 'One of the field has not been filled';
   }

   if (empty($errors)) {
      $A = array();
      $B = array();

      $A['X'] = htmlspecialchars($_POST['AX']);
      $A['Y'] = htmlspecialchars($_POST['AY']);
      $B['X'] = htmlspecialchars($_POST['BX']);
      $B['Y'] = htmlspecialchars($_POST['BY']);
      echo getTwoDotsDistance($A, $B);
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
	<p>Enter X coordinate of A:
		<input type="text" name="AX"
			value="<?= htmlspecialchars($_POST['AX'], ENT_QUOTES); ?>">
  </p>
  <p>Enter Y coordinate of A:
		<input type="text" name="AY"
			value="<?= htmlspecialchars($_POST['AY'], ENT_QUOTES); ?>">
  </p>
  <p>Enter X coordinate of B:
    <input type="text" name="BX"
      value="<?= htmlspecialchars($_POST['BX'], ENT_QUOTES); ?>">
  </p>
  <p>Enter Y coordinate of B:
    <input type="text" name="BY"
      value="<?= htmlspecialchars($_POST['BY'], ENT_QUOTES); ?>">
  </p>
   <input type="submit" value="Отправить">
</form>
</body>
</html>