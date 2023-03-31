<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link rel="stylesheet" href="/public/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <div class="navbar">
    <form action="/index.php" method="post">
      <input type="submit" value="infos" name="A propos" id="b1">
    </form>
    <form action="/app/views/users/login.php" method="post">
      <input type="submit" value="Login" name="login">
    </form>
    <form action="/app/views/users/register.php" method="post">
      <input type="submit" value="Register" name="register">
    </form>
  </div>
</body>

</html>