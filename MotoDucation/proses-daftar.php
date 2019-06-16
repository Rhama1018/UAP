    <?php
    require("db_connect.php");
    if(isset($_POST['Submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$level = $_POST['level'];
		$sql = "INSERT INTO user (username, password, level) VALUES ('$username', '$password', '$level')";
		$result = mysqli_query($connection,$sql);
		if($result)
        echo "Berhasil Terdaftar";
        else 
        echo"gagal";
    }
    ?>
