<?php 
$con=mysqli_connect('localhost','root','','abcd');
if($con==TRUE)
{
    ?>
    <script>
        window.location.href="a.php";
    </script>
<?php
}
?>
  