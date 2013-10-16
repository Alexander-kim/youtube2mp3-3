<?php
if (isset($_GET['youtubelink'])  && strpos($_GET['youtubelink'],"youtube")!==false)
{
	$youtubelink = $_GET['youtubelink'];
	echo "Datei wird heruntergeladen...";
	$command = "sh /var/www/youtube/youtube2mp3.sh ".$youtubelink;
	shell_exec($command);
}
else
{
	echo "Link fehlt";
}
?>
