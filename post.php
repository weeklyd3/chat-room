<form action="forums.php" method="post">
<input type="hidden" value="<span style=background-color:#00ff00;>Your message has been sent.</span>" name="status" id="hidden"/>
<input type="submit" style="visibility:hidden;" />
</form>
<?php 
$text = $_POST['reply'];
$name = $_COOKIE['myname'];
if ($text=="" || $name=="") {
	echo "<script>document.getElementById('hidden').value='<span style=\"background-color:red; color:white;\">Cannot post with an empty name or message.</span>';</script>";
} else {
	$stream = fopen('./topics.html','a');
	fwrite($stream, '<tr><td>'.htmlspecialchars($name).'</td><td>'.$text.'</td></tr>');
}
echo "<script>document.getElementsByTagName('input')[1].click();</script>";
?>