<?php
$php_user_id = posix_geteuid();
$php_user_info = posix_getpwuid ( $php_user_id );
$sitehome = $php_user_info['dir'];
$phpdir = dirname(__FILE__);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Look, no hard-coding!</title>
<style type="text/css">
table {
   border-collapse: collapse;
}
h1 {
   font-family: sans-serif;
}
tr:nth-child(odd) {
   background-color: #ddd;
}
th,td {
   text-align: left;
   padding: 10px 20px;
}
</style>
</head>
<body>
<h1>Look, no hard-coding!</h1>

<table>
<tr><th>Site hostname                         </th>
    <td><?php echo $_SERVER['HTTP_HOST']    ?></td></tr>

<tr><th>Page URL                              </th>
    <td><?php echo $_SERVER["SCRIPT_URI"]   ?></td></tr>

<tr><th>Site home directory                   </th>
    <td><?php echo $sitehome                ?></td></tr>

<tr><th>Directory with current PHP script file</th>
    <td><?php echo $phpdir                  ?></td></tr>

<tr><th>Site Document Root                    </th>
    <td><?php echo $_SERVER["DOCUMENT_ROOT"]?></td></tr>
</table>

<p><a href="phpinfo.php">Check phpinfo() for more!</a></p>

</body>
