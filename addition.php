<?php
    if(isset($_POST['submit']))
    {
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $add=$num1+$num2;
        echo " addition of two numbers is".$add;
    }
?>
<html>
    <head>
        <title>
        adding two numbers
        </title>
    </head>
    <body>
        <form method="post" action="addition.php">
            <input type="number" name="num1" placeholder="Enter the first number">
            <input type="number" name="num2" placeholder="Enter the second number">
            <input type="submit" name="submit">
            
        </form>
    </body>
</html>
