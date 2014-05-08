<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK"/>
<title>会员系统</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php 

	if (isset($_GET['index'])) {
		include $_GET['index'].'.inc.php';
	} else {
		include 'start.inc.php';
	}
?>
</body>
</html>