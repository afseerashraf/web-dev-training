<?php 
include "connection.php";
$users = "SELECT * FROM users";
$values = $mysql -> query($users);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        a{
            text-decoration: none;
        }
        table{
            margin-left:100px;
            margin-top:100px;
        }
        .new{
            margin-top: 150px;
            margin-left: 50px;
        }
    </style>
</head>
<body>
    <h1 id="User"></h1>
    <a href="index.php"><button class="btn btn-outline-success new">Add New User</button></a>

    <table class="table">
        <tbody>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
      
            <?php
            while($row = mysqli_fetch_assoc($values))
            {
            ?>
            <tr>
            <td><?php echo $row['id'];?></td>
            <td id="name"><?php echo $row['name'];?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['email'];?></td>
            <td><a href="edit.php?id=<?php echo $row['id'] ?>;"><button class="btn btn-outline-primary">Edit</button></a> <a href="delete.php?id=<?php echo $row['id'];?>"><button class="btn btn-outline-danger">Delete</button></a><button class="btn btn-outline-success" id="view">View</button></td>
            </tr>
            <?php } ?>
           
        
        </tbody>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</body>

<script>
    $(document).ready(function(){
        $('#view').click(function(){
            var name = $(this).closest('tr').find('td[id-name]').text();
            $('#User').text(name);
        })
    });
</script>
</html>