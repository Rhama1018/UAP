 <?php
            include"koneksi.php";
            $username=$_POST['username'];
            $password=$_POST['password'];
            $sql="INSERT into admin (username,password)
                                    value ('$username','$password')";
            mysqli_query($koneksi,$sql);
            header('location:login.php');
           
?>