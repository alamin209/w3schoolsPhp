<?php


$server="localhost";
$username="root";
$password="";

$con=new mysqli($server,$username,$password);
////////////////////object oriented ////////////////////////////////
//if($con->connect_error)
//{
//    die("Connection has been fail:".$con->connect_error);
//
//}
//
//else
//{
//
//    $sql="CREATE DATABASE  MYDB";
//    if ($con->query($sql)==true)
//    {
//        echo "database create sucessfull";
//
//    }
//
//    else
//    {
//        echo "Database is not created ";
//    }
//}

///////////////////// nnormal////////////

if (!$con)
{

    die("Database was not crate".mysqli_connect_error() );
}
  $sql="CREATE DATABASE  MYDB";
if (mysqli_query($con,$sql))
{
    echo "Database created succesfully";
}

else
{
    echo "fail to conenected ";
    mysqli_close($con);

}
?>