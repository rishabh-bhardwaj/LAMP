<?php 
    include "first.php";
?>
<?php
    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $city=$_POST['city'];
        $sql="INSERT INTO `users` (`id`, `username`, `email`, `contact`, `city`) VALUES (NULL, '$username', '$email', '$contact', '$city')";
        mysqli_query($conn,$sql);
        echo "data inserted succesfully";
    }
?>
<html>
    <head>
        <title>
            HTML forms
        </title>
    </head>
    <body>
        <form method="post" action="add.php">
            USERNAME<input type="text" name="username" placeholder="type your username" required><br>
            E-MAIL<input type="email" name="email" placeholder="type your e-mail" required><br>
            CONTACT<input type="text" name="contact" placeholder="type your contact" required><br>
            Select City<select name="city">
                <option value="Dehradun">Dehradun</option>
                <option value="Delhi">Delhi</option>
                <option value="Jaipur">Jaipur</option>
            </select><br>
            <input type="submit" name="submit" value="click here">
        </form>
    </body>
</html>