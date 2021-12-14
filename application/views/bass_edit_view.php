<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo site_url('bass/update');?>" method="POST">
    <p>name</p>
    <input type="text" name="name" value="<?php echo $data['name'];?>">
    <br>

    <p>email</p>
    <input type="text" name="email" value="<?php echo $data['email'];?>">
    <br>

    <p>pass</p>
    <input type="text" name="pass" value="<?php echo $data['pass'];?>">
    <br>

    <input type="hidden" name="id" value="<?php echo $data['id'];?>">

    <button type="submit">OK</button>


    </form>
    
</body>
</html>