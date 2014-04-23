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

<?php if( $netid ): ?>

<h1>Hello, <?php echo $netid ?></h1>
<p><a href="/bluestem/cgi/logout.cgi?redirect=1">Logout</a></p>

<?php else: ?>

<h1>Hello, stranger</h1>
<p>Please <a href="/bluestem/cgi/lb_login.cgi<?php echo $_SERVER[REQUEST_URI] ?>">login</a></p>

<?php endif ?>

</body>
</html>
