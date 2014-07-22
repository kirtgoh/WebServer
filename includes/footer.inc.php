<?php
  if (!defined('IN_TG')) {
    exit('Access Denied!');
  }
?>
<div id="footer" class="footer">
  <p>程序运行时间：<?php echo round((_runtime() - START_TIME),4); ?>秒</p>
  <p>版权所有 翻版必究</p>
  <p>本程序由<span>瓢城Web俱乐部</span>提供 源代码可以任意修改或发布 (c) yc60.com</p>
</div>
