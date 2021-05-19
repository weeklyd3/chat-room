<html>
  <head>
    <title>Weekly D3 Forums</title>
  </head>
  <body style="background-color:#b3d4fc;">
	<link rel="stylesheet" href="https://weeklyd3.github.io/resources/style.css" />
	<div id="header" style="position:sticky; top:0; height:10%; min-height:2em; width:100%; background-color:blue; color:white !important;">
		<h1>Weekly D3 Forums</h1>
	</div>
    <?php
		$loginname=$_COOKIE['myname'];
		if ($loginname == "") {
			echo '<div style="border:1px solid black; margin:7px; width:250px;">';
			echo '<p>Log in to continue:</p>';
			echo '<form action="/password.php" method="post">';
			echo '<input type="text" name="myname" placeholder="Your Name" required />';
			echo '<input type="submit" value="Log In" />';
			echo "&nbsp;&nbsp;";
			echo '<input type="reset" value="Clear Form" />';
			echo "</form></div>";
		} else {
			echo '<div style="border:1px solid black; margin:7px; width:250px;">';
			echo '<p>Hi, '.htmlspecialchars($loginname).'!</p>';
			echo '<a href="/forums.php">Visit the forums!</a>';
			echo "</div>";
		}
	?> 
  </body>
</html>