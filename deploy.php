<?php
// Wenn das Skript nicht im CLI-Modus läuft, Sicherheits-Token prüfen
if (php_sapi_name() !== 'cli') {
    $secretToken = 'DEIN_GEHEIMER_TOKEN';
    if (!isset($_GET['token']) || $_GET['token'] !== $secretToken) {
        header('HTTP/1.0 403 Forbidden');
        exit('Access Denied');
    }
}

$repoDir = '/home/testmitallemwaszhlt-vwb/public_html';
$command = "cd {$repoDir} && git pull git@github.com:Kiritoamru/TestDevOps.git main 2>&1";
$output = shell_exec($command);
echo "<pre>$output</pre>";
?>
