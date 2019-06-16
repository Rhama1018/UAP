 <?php
session_start();
if(isset($_SESSION['username']));
            {
            header("location:user.php");
            session_destroy();}
            ?>