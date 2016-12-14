INSER CLI.PY

<?php 

$command = escapeshellcmd('/var/www/html/snomcli/cgi-bin/form.py');
$output = shell_exec($command);
echo $output;

?>
