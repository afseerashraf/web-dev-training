<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>user</title>
  <style>
    h1 {
      margin-top: 200px;
      margin-left: 400px;
    }

    .continer {
      margin-top: 50px;
      margin-left: 400px;
      height: fit-content;
      width: fit-content;
      
    }

    form input {
      height: 30px;
      width: 300px;
      border: none;
      padding-bottom: 12px;
      border-bottom: solid 1px black;
      
    }

    label {
      font-size: large;
    }

    #login {
      background-color: blueviolet;
      width: 308px;
      color: white;
      padding: 1px;
      border: none;
    }

    #login:hover {
      background-color: #F8EDED;
      color: black;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <h1>User Information</h1>
  <div class="continer">
    <form action='newuser.php' method="post">
      <input type="text" name="name" placeholder="name" required><br>
      <input type="text" name="mobile" placeholder="mobile" rquired><br>
      <input type="email" name="email" placeholder="email" required><br><br>


      <input type="submit" id="login" value="Save">
    </form>
  </div>







</body>


</html>