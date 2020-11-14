<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PZ8</title>
</head>
<body>
  <?php
  date_default_timezone_set('Asia/Tomsk');
  function greet($name, $surname) {
    $currHour = intval(date('H'));
    if ($currHour >= 5 && $currHour <= 11) {
      echo "Доброе утро"." ".$name." ".$surname;
    } else if ($currHour >= 11 && $currHour <= 16) {
      echo "Доброе день"." ".$name." ".$surname;
    } else if ($currHour >= 16 && $currHour <= 0) {
      echo "Доброе вечер"." ".$name." ".$surname;
    } else {
      echo "Доброе ночь"." ".$name." ".$surname;
    }
  }
  $errors = [];
  if (!empty($_POST)) {
    if (empty($_POST['name']) || empty($_POST['surname'])) {
      $errors[] = 'The text fields have not been filled';
    }

    if (empty($errors)) {
    greet(htmlspecialchars($_POST['name']),
        htmlspecialchars($_POST['surname']));
      exit();
    }
  }

  if (!empty($errors)) {
    foreach ($errors as $error) {
      echo "<span>$error</span>";
    }
  }
  ?>
  <form method="post">
  <p>
    <input type="text" name="name" placeholder="Enter your name" />
  </p>
  <p>
    <input type="text" name="surname" placeholder="Enter your surname" />
  </p>
  <input type="submit" value="Send" />
  </form>
</body>
</html>