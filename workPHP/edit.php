<?php
include "connection.php";
$id = $_GET['id'];
$select = "SELECT * FROM users WHERE ID = $id";
$value = $mysql->query($select);
$result = mysqli_fetch_assoc($value);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
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

        #login {
            background-color: blueviolet;
            width: 308px;
            color: white;
        }

        #login:hover {
            background-color: white;
            color: black;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1>Update User Information</h1>
    <div class="continer">
        <form action='update.php' method="post">
            <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
            <label for="username">Name</label> <br>
            <input type="text" name="name" placeholder="name" value="<?php echo $result['name']; ?>" required><br>
            <label for="mobile">Mobile</label><br>
            <input type="text" name="mobile" placeholder="mobile" value="<?php echo $result['mobile']; ?>" rquired><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" placeholder="email" value="<?php echo $result['email']; ?>" required><br><br>


            <input type="submit" id="login" value="Update">
        </form>
    </div>
</body>

</html>