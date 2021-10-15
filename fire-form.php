<html>
<body style="font-family: monospace;">
<div style="background: #aaffaa;
    padding: 1px;
    text-align: center;">
<p>Send push message with FCM</p>
</div>
  <form action="fire-send.php" method="post">
  	<p>Password:</p>
    <input name="password"  value=""/>
	<p>Title:</p>
	<textarea name="title" rows="1" cols="100"></textarea>
	<p>Message:</p>
	<textarea name="body" rows="1" cols="100"></textarea>
	<p>Image URL:</p>
	<input name="imageurl"  value=""/>
    <p>Topic:</p>
	<input name="topic"  value=""/>
    <input type="submit" name="sub" 
           value="Send Push"/>
    </form>
	<div style="border: 1px solid black; background-color: #eeeeff;">
	<div style="padding: 10px">
	<p style = "font-size:14px;font-weight:bold;">Subscription</p>
	<p style = "font-size:14px;">all - all users</p>
	</div>
	</div>
</body>
</html>

