<?php 

$command = escapeshellcmd('/var/www/html/cgi-bin/cli.py');
$output = shell_exec($command);
echo $output;

?>
