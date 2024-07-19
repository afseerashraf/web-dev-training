<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    h1 {
      margin-top: 200px;
      margin-left: 500px;
    }

    .continer {
      margin-top: 50px;
      margin-left: 500px;
    }

    form input {
      height: 30px;
      width: 300px;
    }

    label {
      font-size: large;
    }
  </style>
</head>

<body>
  <h1>Login form</h1>
  <div class="continer">
    <form action="newUser.php" method="POST">
      <label for="username">Username</label> <br>
      <input type="text" name="username" placeholder="username"><br>
      <label for="password">Password</label><br>
      <input type="password" name="password" placeholder="password"><br><br>
      <input type="submit" id="login" value="Login">
    </form>
  </div>







<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</body>
<script>
  $('document').ready(function() {
    $('#login').click(function() {
      var username = $('.username').val();
      var password = $('.password').val();

      if (username == "") {
        alert("Enter the username");
      }
      if (password == "") {
        alert("Enter the password");
      }
    });

  });
</script>

</html>