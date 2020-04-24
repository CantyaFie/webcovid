<?php
session_start();
session_destroy();
header ("location: http://localhost/COVID-19/login/index.php");
?>