<?php
 $fromuser=$_SESSION['user'];
 $touser=$_GET['touser'];
 $songid=$_GET['songid'];

 
 $query="INSERT INTO `recommendation` (`recommendid`,`fromuser`, `touser`, `songid`, `accept_reject`) VALUES (NULL, `$fromuser`, `$touser`, `$songid`, `0`)";
 $data=mysqli_query($dbc,$query);
 //header('location:temp33.php')
?>