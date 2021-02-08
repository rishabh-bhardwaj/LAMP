
<?php
    include "first.php";
?>
<?php 
    include "first.php";
    //if(isset($_POST['submit']))
    //{
        $id=$_GET['id'];
        $sql="SELECT * FROM `users` WHERE `id`='$id'";
        $result=mysqli_query($conn,$sql);
        $row=$result->fetch_assoc();
        $username=$row['username'];
        $email=$row['email'];
        $contact=$row['contact'];
        $city=$row['city'];

?>
<?php
    if(isset($_POST['update']))
    {
        $username=$_POST['username'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $city=$_POST['city'];
        $sql="UPDATE `users` SET  username='$username', email='$email',contact='$contact',city='$city' where id=$id ";
        $row= mysqli_query($conn,$sql);
        if($row)
        {
            echo "data updated";
            header("Location:details.php");
        }
        else
        {
            echo "data not updated";
        }
      //  echo $username;
    }
?>
<html>
    <head>
        <title>
            HTML forms
        </title>
    </head>
    <body>
        <form method="post" action="edit.php?id=<?php echo $id ?>">
            USERNAME<input type="text" name="username" value=<?php echo "$username"; ?> placeholder="enter your name" required><br>
            E-MAIL<input type="email" name="email"  value=<?php echo "$email"; ?>  placeholder="type your e-mail" required><br>
            CONTACT<input type="text" name="contact"  value=<?php echo "$contact"; ?> placeholder="type your contact" required><br>
            Select City<select name="city">
                <option value="Dehradun" <?php if($city=="Dehradun"){ echo "selected";} ?> > Dehradun</option>
                <option value="Delhi" <?php if($city=="Delhi"){ echo "selected";}  ?>>Delhi</option>
                <option value="Jaipur" <?php if($city=="Jaipur"){ echo "selected";}  ?> >Jaipur</option>
            </select><br>
            <input type="submit" name="update" value="update">
        </form>
    </body>
</html>