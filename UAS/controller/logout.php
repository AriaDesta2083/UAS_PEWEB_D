<?php
//delete seasion

session_start();
$_SESSION = [];
session_unset();
session_destroy();

//delete cookie

setcookie('id','', time() - 1000);
setcookie('set','', time() - 1000);

header("location: /UAS");
exit;

?>