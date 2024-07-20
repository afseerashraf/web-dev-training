<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    h1 {
      margin-top: 200px;
      margin-left: 400px;
    }

    .continer {
      margin-top: 50px;
      margin-left: 400px;
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
  <h1>User Information</h1>
  <div class="continer">
    <form action='newUser.php' method="post">
      <label for="username">Name</label> <br>
      <input type="text" name="name" placeholder="name"><br>
      <label for="email">email</label><br>
      <input type="text" name="email" placeholder="email"><br><br>
      <label for="message">Message</label><br>
      <textarea name="message" id="message" cols="36" rows="5">

      </textarea><br>

      <input type="submit" id="login" value="Login">
    </form>
  </div>







</body>


</html>