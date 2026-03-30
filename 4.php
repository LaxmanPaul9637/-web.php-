<?php
session_start();
$_SESSION['userid']=10020;
echo"Session variable'userid'is set to".$_SESSION['userid'];
?>