<html>
  <head>
    <title>Weekly D3 Forums -- Get Access</title>
  </head>
  <body style="background-color:#b3d4fc;">
	<link rel="stylesheet" href="https://weeklyd3.github.io/resources/style.css" />
	<div id="header" style="position:sticky; top:0; height:10%; min-height:2em; width:100%; background-color:blue; color:white !important;">
		<h1>Access Chat Rooms</h1>
		<form action="login.php" method="post">
			<input type="text" name="myname" id="myname" placeholder="Please enter your name..." required />
			<input type="password" name="psw" required placeholder="Enter Password (try free!)" />
			<style>input[type=password] {
				border:1px solid black;
				padding:7px;
			}
			</style>
			<input type="submit" value="OK" />
		</form>
	</div>
	<?php
		$name = $_POST['myname'];
		echo "<script>document.getElementById('myname').value='".$name."';</script>";
	?>
  </body>
</html>