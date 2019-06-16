<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="loginstyle.css">
	<meta charset="UTF-8">
	<title>LOGIN</title>
	<style>
		.container{
			border:20px solid rgba(0,0,0,.5);
			width: 400px;
			height: 200px;
			background: #808080;
			position: fixed;
			top: 30%;
			left: 50%;
			margin-top: -140px;
			margin-left: -240px;
			text-align: center;
			padding:40px;
			display: table;
		}
		.box{
			background:#808080;   
			display: table-cell;
			text-align: center;
			vertical-align: middle;
			border:50px solid rgba(0,0,0,.2);
		}
</style>
	
		
</head>
<body>
	<center>
	<div class="container">
	<div class="box">
	<h1>SELAMAT DATANG DI MOTODUCATION</h1>
	<h3>Silahkan Login</h3>
	<form action="proses-login.php" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Log In"></td>
			</tr>
		</table>
		<a href="daftar.php">Buat Akun</a>
	</form>
	</center>
</div>
</div>
</body>
</html>
?>
