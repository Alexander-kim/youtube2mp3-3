<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>YouTubeDownloader</title>
<link href='http://fonts.googleapis.com/css?family=Kite+One' rel='stylesheet' type='text/css'>
</head>
<body>
<div style="position: absolute; top: 50%; left: 50%">
<div style="width: 500px; left: -250px; text-align: center; top: -100px; height: 200px; position: absolute;">
	<form action="index.php" method="get">
    	<span style="font-size:53px;font-family: 'Kite One', sans-serif;">Youtube2MP3</span><br>
	<input style="width: 100%; margin-top:50px;margin-bottom:50px;padding:10px" placeholder="http://youtube.com/watch?v=..." type="text" name="youtubelink" /><br>
    	<input style="font-size:30px" type="submit" value="an Server schicken" />
	</form>
<?

	if (isset($_GET['youtubelink']))
	{
		if(strpos($_GET['youtubelink'],"youtube")!==false)
		{
			 $youtubelink = $_GET['youtubelink'];
       			 echo "Datei wird heruntergeladen...";
       			 $command = "sh /var/www/youtube/youtube2mp3.sh ".$youtubelink;
       			 shell_exec($command);
		}
		else
		{
			echo "fehlerhafter Link!";
		}
	}
?>
</div>
</div>
</body>
