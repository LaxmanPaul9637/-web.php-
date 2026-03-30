<?php
session_start();
$timeout=1800;
if(isset($_SESSION['last_activity'])){
$inactive_time=time()-$_SESSION['last_activity'];
if($inactive_time>$timeout){
    session_unset();
	session_destroy();
	echo"Session epired due to inactivity.";
	exit();
	}
}
$_SESSION['last_activity']=time();
echo"Session is active.";
?>
