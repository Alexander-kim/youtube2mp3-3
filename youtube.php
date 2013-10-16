<?php

$youtubelink = $_GET['youtubelink'];
echo "Datei wird heruntergeladen...";
$command = "sh /var/www/youtube/youtube2mp3.sh ".$youtubelink;
shell_exec($command);

?>
