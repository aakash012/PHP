<?php
session_start();
//session_destroy();
echo "Welcome ",$_SESSION['email'];
echo "<a href='logout.php'> Logout</a>";
 ?>
