<?php
$php_user_id = posix_geteuid();
$php_user_info = posix_getpwuid ( $php_user_id );
$sitehome = $php_user_info['dir'];
$phpdir = dirname(__FILE__);

// Second argument, true, preserves ini section information
$conf_in_phpdir = parse_ini_file("$phpdir/config.ini",true);
$conf_in_homedir = parse_ini_file("$sitehome/conf/uic-itproforum2014.ini",true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Using configs with PHP is easy!</title>
</head>
<body>
<h1>Using configs with PHP is easy!</h1>
<h2>Config stored in <?php echo "$phpdir/config.ini" ?></h2>
<pre><?php print_r($conf_in_phpdir) ?></pre>
<h2>Config stored in <?php echo "$sitehome/conf/uic-itproforum2014.ini" ?></h2>
<pre><?php print_r($conf_in_homedir) ?></pre>
</body>
