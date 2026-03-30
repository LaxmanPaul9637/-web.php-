<?php
if(isset($_COOKIE['visit_count'])){
    $visit_count=$_COOKIE['visit_count']+1;
}else{
    $visit_count=1;
}
setcookie("visit_count",$visit_count,time()+86400);
echo"You have visited this page".$visit_count."times.";
?>