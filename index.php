<?php 

$command = escapeshellcmd('/var/www/html/snomcli/cgi-bin/cli.py');
$output = shell_exec($command);
echo $output;

?>
