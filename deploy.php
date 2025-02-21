<?php
// Sicherheits-Token für den Zugriff (ÄNDERN!)
$secretToken = 'Test';

// Sicherheitsprüfung (nur wenn über URL-Parameter ein Token mitgegeben wird)
if (!isset($_GET['token']) || $_GET['token'] !== $secretToken) {
    header('HTTP/1.0 403 Forbidden');
    exit('Access Denied');
}

// Git-Repository-Pfad (angepasst für dein Setup)
$repoDir = '/home/testmitallemwaszhlt-vwb/public_html';

// Git-Befehl ausführen
$command = "cd {$repoDir} && git pull git@github.com:Kiritoamru/TestDevOps.git main 2>&1";

// Shell-Befehl ausführen und Ausgabe erfassen
$output = shell_exec($command);

// Ausgabe anzeigen (für Debugging oder Cronjob-Log)
echo "<pre>$output</pre>";
?>
