<html>
	<head>
		<title>Google Translate Voice MP3 Downloader</title>
	</head>
	<body>
		<form method="post" action="downloadmp3.php">
		<div>
			<label>Language:</label>
			<select id="language" name="language">
				<option value="en" selected>English</option>
			</select>
		</div>
		<div>
			<label>Word (for example: hello)</label>
			<input type="text" name="word" id="word"/>
		</div>
		<input type="submit" value="Download MP3"/>
		</form>
	</body>
</html>