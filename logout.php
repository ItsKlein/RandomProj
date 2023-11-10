<?php

session_start();
session_unset();
session_destroy();
header('Location: http://localhost/Zppsu_Medical/Php_logics/login.php');
exit();


?>