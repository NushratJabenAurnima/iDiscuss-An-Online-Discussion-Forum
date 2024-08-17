<?php
session_start();
session_unset();
session_destroy();
header("Location: /Learn_php_sql/Forum/index.php?logoutsuccess=true");
exit();
?>