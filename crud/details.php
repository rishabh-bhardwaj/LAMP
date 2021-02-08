<?php
    include "first.php";
?>
<?php
    $sql="SELECT * FROM   `users` ";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows>0)
    {
        ?>
        <html>
            <head>
                 <title>
                     USER DETAILS
                </title>
            </head>
        <body>
         <table border="1px solid black">
           <thead>
                <tr>
                    <td>ID</td>
                    <td>Username</td>
                    <td>E-Mail</td>
                    <td>Contact</td>
                    <td>City</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
               
                    <?php
                        while($row=$result->fetch_assoc())
                        {?>
                             <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['contact'] ?></td>
                            <td><?php echo $row['city'] ?></td>
                            <td><a href="edit.php?id=<?php echo $row["id"];?>">Edit</td>
                            <td><a href="delete.php?id=<?php echo $row["id"];?>">Delete</td>
                            <tr>
                   <?php 
                   }
                   ?>
              
            </tbody>
        </table>
        </body>
        </html>
<?php
}
?>