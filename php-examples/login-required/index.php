<?php
# The NetID can be found for authenticated users in REMOTE_USER or REDIRECT_REMOTE_USER
$netid = $_SERVER['REMOTE_USER'] ? $_SERVER['REMOTE_USER'] : $_SERVER['REDIRECT_REMOTE_USER'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login Required</title>
</head>
<body>
<h1>Hello, <?php echo $netid ?></h1>
<p><a href="/bluestem/cgi/logout.cgi">Logout</a></p>
</body>
</html>
