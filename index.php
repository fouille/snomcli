<?php 

$command = escapeshellcmd('/cgi-bin/cli.py');
$output = shell_exec($command);
echo $output;

?>
