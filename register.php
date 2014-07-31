<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Your Title</title>
<link rel="shortcuticon" href="favicon.ico" />
<link rel="stylesheet" href="styles/1/basic.css" type="text/css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="styles/1/register.css" type="text/css" media="" title="no title" charset="utf-8">
</head>
<body>

<?php
  define('IN_TG',true);
  require dirname(__FILE__).'/includes/common.inc.php';
  include ROOT_PATH.'includes/header.inc.php';
?>

<div id="register">
  <h2>会员注册</h2>
  <form method="post" action="post.php">
    <dl>
      <dt>请认真填写一下内容</dt>
      <dd>用 户 名：<input type="text" name="username" class="text" />(*必填，至少两位)</dd>
      <dd>密　　码：<input type="password" name="password" class="text" />(*必填，至少六位)</dd>
      <dd>确认密码：<input type="password" name="notpassword" class="text" />(*必填，同上)</dd>
      <dd>密码提示：<input type="text" name="passt" class="text" />(*必填，至少两位)</dd>
      <dd>密码回答：<input type="text" name="passd" class="text" />(*必填，至少两位)</dd>
      <dd>性　　别：<input type="radio" name="sex" value="男" checked="checked" />男 <input type="radio" name="sex" value="女" />女</dd>
      <dd class="face"><img src="face/m01.gif" alt="头像选择" onclick="javascript:window.open('face.php','face','width=400,height=400,top=0,left=0')" /></dd>
      <dd>电子邮件：<input type="text" name="email" class="text" /></dd>
      <dd>　Q Q 　：<input type="text" name="qq" class="text" /></dd>
      <dd>主页地址：<input type="text" name="url" class="text" value="http://" /></dd>
      <dd>验 证 码：<input type="text" name="yzm" class="text yzm"  /></dd>
      <dd><input type="submit" class="submit" value="注册" /></dd>
    </dl>
  </form>
</div>

<?php
  include ROOT_PATH. 'includes/footer.inc.php';
?>

</body>

