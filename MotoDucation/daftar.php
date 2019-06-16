<html>
<head>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
	<meta charset="UTF-8">
    <title>DAFTAR</title>
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
	<a class="link" href="login.php">Kembali ke Beranda</a>
    <br/><br/>
	    <center>
		<div class="container">
		<div class="box">
		<div class="header">
		<h1>Daftar </h1>
	<div class="data">
    <form action="proses-daftar.php" method="post">
        <table width="25%" border="0">
        <tr>
            <td> <label for="username">Username</td>
            <td><input class="form-control" type="text" name="username" placeholder="username"/></td>
        </tr>
		<tr>
            <td> <label for="password">Password</td>
            <td><input class="form-control" type="text" name="password" placeholder="Password"/></td>
        </tr>
		
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="DAFTAR"></td>
                <input type="hidden" name="level" value="user">
            </tr>
		 </table>
		 </div>	
       
    </form>


	
</body>
</html>
