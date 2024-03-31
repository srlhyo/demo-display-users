<?php

session_start();

// check if users data exists in session
if(isset($_SESSION["users"])) {
  $users = $_SESSION["users"];
} else {
  $users = [];
}

if(isset($_SESSION["errors"])) {
  $errors = $_SESSION["errors"];
} else {
  $errors = [];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users pages</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Add Users</h1>
        <form action="add_users.php" method="post" class="user_details">
            <div class="details">
              <label for="name">Enter your name: </label>
              <input class="user_name" type="text" name="name" id="name" required />
            </div>

            <div class="details">
              <label class="user_email" for="email">Enter your email: </label>
              <input type="email" name="email" id="email" required />
            </div>

            <div class="details">
              <input class="submit_details" type="submit" value="submit" />
            </div>

          </form>
          <?php if(!empty($errors)) :?>
            <div class="displayErrors">
              <ul>
                <?php foreach($errors as $error) :?>
                  <li><?php echo $error; ?></li>
                <?php endforeach ?>
              </ul>
            </div>
          <?php endif ?>
          <h2>Display Users</h2>
          <div class="displayResult">
            <ul class="result">
              <?php foreach($users as $user) :?>
                <li><?= $user["name"] ?></li>
              <?php endforeach ?>
            </ul>
          </div>
    </div>
    <script src="script.js" ></script>
</body>
</html>