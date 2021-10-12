<!DOCTYPE html>
<html>
<head>
	<title>Ошибка</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">

	<style type="text/css">
		.error-box {
			font-family: 'Roboto', sans-serif;
		}

		.error-box h1 {
			text-align: center;
			padding-top: 40px;
			font-size: 40px;
		}

		.error-box p {
			text-align: center;
			padding-top: 10px;
			font-size: 20px;
		}
	</style>


</head>
<body>

	<div class="error-box">
		<h1>ERROR :(</h1>
		<p><?php echo $error_msg; ?></p>
	</div>

</body>
</html>