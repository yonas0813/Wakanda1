<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form action="login_aksi.php" method="post">
        <input type="text" placeholder="Enter your Username" name="username">
        <input type="password" placeholder="Enter your password" name="password">
        <button class="btn btn-primary" name="submit">Login</button>
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
            <a href="register.php">Register</a>
        </span>
      </div>
    </div>
  </div>
</body>
</html>