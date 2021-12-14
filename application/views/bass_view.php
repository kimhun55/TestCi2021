<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    kimhun55

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>pass</th>
            <th>category</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        <tbody>
            <?php foreach($data as $val){?>
            <tr>
                <td><?php echo $val['id'];?></td>
                <td><?php echo $val['name'];?></td>
                <td><?php echo $val['email'];?></td>
                <td><?php echo $val['pass'];?></td>
                <td><?php echo $val['category']['cat_name'];?></td>
                <td><a href="<?php echo site_url('bass/edit/').$val['id'];?>">edit</a></td>
                <td><a href="<?php echo site_url('bass/delete/').$val['id'];?>">delete</a></td>

            </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="<?php echo site_url('bass/add');?>">add</a>
</body>
</html>