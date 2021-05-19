<html>
  <head>
	<script src="https://weeklyd3.github.io/resources/jquery.min.js"></script>
    <title>The Discussion</title>
  </head>
  <body style="background-color:#b3d4fc;">
	<link rel="stylesheet" href="https://weeklyd3.github.io/resources/style.css" />
	<div id="header" style="position:sticky; top:0; height:10%; min-height:2em; width:100%; background-color:blue; color:white !important;">
		<h1>Weekly D3 Forums<center style="font-size:0.5em;" id="status"></center></h1>
	</div>
    <?php
		$myname = $_COOKIE['myname'];
		setcookie('myname', $myname);
		echo "<p>Logged in as: ".htmlspecialchars($myname).".</p>";
		function post() {
			$myname = $_COOKIE['myname'];
			
		}
	?> 
	<h3>View Discussion (<a href="#compose">Skip to editor</a>)</h3>
	<iframe id="topics" src="topics.html" style='width:100%; height:90%;'></iframe>
	<h3>Your Post</h3>
	<div id="compose"></div>
	<div id="toolbar">
		<button onclick="x.document.execCommand('bold');" style="font-weight:bold;">B</button>
		<button onclick="x.document.execCommand('italic');"><i>I</i></button>
		<button onclick="x.document.execCommand('underline');" style="text-decoration:underline;">U</button>
	</div>
	<form action="/post.php" method="post">
	<iframe src="writer.html" style="width:100%; height:300px;" id="writehere" onload="iframeLoaded();"></iframe>
	<input type="submit" onclick="fill();" value="Post Your Reply" />
	<textarea id="yourTextarea" style="visibility:hidden;" name="reply"></textarea>
	</form>
	<script>
	var x = document.getElementById("writehere");
var x = (x.contentWindow || x.contentDocument);
	function fill() {
		var myvalue=x.document.getElementById('msg').innerHTML;
		document.getElementById('yourTextarea').value = myvalue;
	}
	setTimeout(function() {
		var y=document.getElementsByTagName('iframe')[0];
		y.src+="";
	}, 500);
</script>
  </body>
</html>
		<?php
			$status = $_POST['status'];
			echo "<script>document.getElementById('status').innerHTML='".$status."';</script>";
		?>
				<script>
		  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
var page ='topics.html', lM;
function date() {
	var mydate  = new Date();
	return " "+mydate;
}
		function checkModified() {
   $.get(page, function(a, b, x) {
	   console.log('▼ Refreshing chat' + date());
	   console.log('| Getting header...')
      var mod = (x.getResponseHeader('Last-Modified')) ? x.getResponseHeader('Last-Modified') : x.getResponseHeader('Content-Length');
      if (lM != mod) {
         lM = mod;
		 console.log("| Fetched!" + date())
		 console.log("└ XHR finished!" + date())
         document.getElementById("topics").src += "";
      } else {
		  console.log('└ Finished: no new changes found.' + date())
	  }
   });
}
setInterval(checkModified, 1000); // every 5 seconds
		  function iframeLoaded() {
      var iFrameID = document.getElementById('writehere');
      if(iFrameID) {
            // here you can make the height, I delete it first, then I make it again
            iFrameID.height = "";
            iFrameID.height = iFrameID.contentWindow.document.body.scrollHeight + "px";
      }   
  }
  </script>