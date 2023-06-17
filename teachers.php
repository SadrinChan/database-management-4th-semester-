<?php include 'connection.php';?>
<?php
     $str = "select * from teachers";
     $q=mysqli_qureq($conn,$str);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>All Teachers</h2>
        <table border="2">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Salary</th>
                <th>Department</th>
            </thead>
            <tbody>
                <?php
                   while($r = mysql_fetch_array($q)) { ?>
                   <tr>
                    <td><?php echo $r['name'];?></td>
                    <td><?php echo $r['email'];?></td>
                    <td><?php echo $r['salary'];?></td>
                    <td><?php echo $r['department'];?></td>
                   </tr>
                   <?php }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>
