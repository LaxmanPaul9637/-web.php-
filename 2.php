<?php
if(isset($_COOKIE['username'])){
   echo"username:".$_COOKIE['username'];
}else{
   echo"Cookie'username'is not set.";
}
?>