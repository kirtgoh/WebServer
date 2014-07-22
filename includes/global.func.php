<?php
  function _runtime()
  {
    $_mtime = explode(' ',microtime());
    return $_mtime[0] + $_mtime[1];
  }
?>
