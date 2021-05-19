<html>
  <head>
    <title>Please Wait...</title>
  </head>
  <body style="background-color:#b3d4fc;">
	<link rel="stylesheet" href="https://weeklyd3.github.io/resources/style.css" />
	<div id="header" style="position:sticky; top:0; height:10%; min-height:2em; width:100%; background-color:blue; color:white !important;">
		<h1>Logging In...</h1>
	</div>
    <?php
		$psw = $_POST['psw'];
		if ($psw=="free") {
			$myname = $_POST['myname'];
			setcookie('myname', $myname);
			echo "You will be redirected. Not redirecting?";
			echo ' <a href="javascript:location.href=\'/
			\'">Click here to go back.</a>';
			echo '<script>setTimeout(function() { location.href=\"/\"; }, 2000);';
		} else {
			echo "Bad password, <a href=javascript:history.back(1);>try again?</a>";
		}
	?> 
  </body>
</html>