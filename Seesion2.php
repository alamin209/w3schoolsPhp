<?php
session_start()
?>
<html>

<?php

  echo " MY Name is ".$_SESSION['name']." .</br>";
   $_SESSION['name']="Aklima";//modifing seesion
  echo " MY Father  is ".$_SESSION['fullName']." .</br>";

?>

<?php
session_unset();
session_destroy();
?>

</html>
