<html>
	<head>
		<title>Logout Handler</title>
	</head>
	<body>
		<?php
			session_start();
			session_destroy();
			header("location: homepage.php");
		?>
	</body>
</html>
