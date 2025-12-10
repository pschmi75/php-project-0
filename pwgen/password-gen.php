<?php
  if ($_POST["length"] !== NULL) {
    $pwlen = (int) $_POST["length"];
    $rand = new Random\Randomizer();
    $srcstr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!&/()=?#+*";
    if ($pwlen < 1) $pw = "Length must be greater than 0";
    else $pw = ""; //$rand->getBytesFromString($srcstr, $pwlen)
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Random Password Generator</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="title-container">
    <h1>Password Generator </h1>
    <h3>Your Password:</h3>
  </div>
  <div class="password-container">
    <h5><?php echo $pw ? $pw : "" ?></h5>
  </div>
  <form method="POST" action="#">
    <p>How long should your password be?</p>
    <input class="number-input" type="number" name="length" value="8" min="1" required>
    <input class="submit-input" type="submit" value="generate">
  </form>
</body>
</html>