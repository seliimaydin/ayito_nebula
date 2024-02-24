<?php 

session_start();

session_destroy();

header('Location:loginhome?durum=exit');

?>