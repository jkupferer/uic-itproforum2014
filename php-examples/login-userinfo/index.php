<?php
# The NetID can be found for authenticated users in REMOTE_USER or REDIRECT_REMOTE_USER
$netid = $_SERVER['REMOTE_USER'] ? $_SERVER['REMOTE_USER'] : $_SERVER['REDIRECT_REMOTE_USER'];

# Connect to ldap
$ldap = ldap_connect("ldap.uic.edu");

# Search ldap for the user
$search = ldap_search($ldap,
    "ou=people,dc=uic,dc=edu",
    "(&(uid=$netid)(primarypid=true))"
);

# Get ldap query results
$info = ldap_get_entries($ldap, $search);

if( $info[0] ) {
    $displayname = $info[0]['displayname'][0];
    $ou = $info[0]['ou'][0];
} else {
    $displayname = $netid;
    $ou = 'unknown';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login Required</title>
</head>
<body>

<?php if( $netid ): ?>

<h1>Hello, <?php echo $displayname ?></h1>
<h2>You're from <?php echo $ou ?></h2>
<p><a href="/bluestem/cgi/logout.cgi?redirect=1">Logout</a></p>

<?php else: ?>

<h1>Hello, stranger</h1>
<p>Please <a href="/bluestem/cgi/lb_login.cgi<?php echo $_SERVER[REQUEST_URI] ?>">login</a></p>

<?php endif ?>

</body>
</html>
