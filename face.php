<?php
	define('IN_TG',true);
	define('SCRIPT','face');
	require dirname(__FILE__).'/includes/common.inc.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BBS - face select</title>
<?php
	require ROOT_PATH.'includes/title.inc.php';
?>
</head>
<body>
<div id="face">
	<h3>select face</h3>
	<dl>
		<?php foreach (range(1,9) as $num) { ?>
		<dd><img src="face/m0<?php echo $num?>.gif" alt="head<?php echo $num?>" /></dd>
		<?php } ?>
	</dl>
	<dl>
		<?php foreach (range(10,64) as $num) { ?>
		<dd><img src="face/m<?php echo $num?>.gif" alt="head<?php echo $num?>" /></dd>
		<?php } ?>
	</dl>
</div>
</div>
</body>


