<?php
$Cookie_uesrname="alamin";//change the value
$Cookie_value="Jahangir Cookie";
setcookie($Cookie_uesrname,$Cookie_value, time() + (86400*30),"/");//setting the cooki
//setcookie($Cookie_uesrname,$Cookie_value, time() - 3600,"/");//deleting the cooki
?>
<body>
<?php
if(!isset($_COOKIE[$Cookie_uesrname]))
  {

echo "THis  cookie was not seet ".$Cookie_uesrname."</br>";

  }
  else
  {

      echo "This cocki is set".$Cookie_uesrname. " </br>";
      echo "This cocki value".$_COOKIE[$Cookie_uesrname] ." </br>";

  }

?>
<?php

//echo  "Cooki user" ."is delete";

if (count($_COOKIE)>0)
{
    echo "Cookie are enable";

}
else
{

    echo "Cookie are disable";
}

?>



</body>
