<?php


$server = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$con = new mysqli($server, $username, $password, $dbname);
if (!$con) {
    die("Connection fail" . mysqli_connect_error());

}


?>

    <!dodtype html>
    <html>

    <head>

        <title>

            this is example

        </title>
    </head>

    <body>

    <form action="" method="post">
        <label for="">Enter First Name </label>
        <input type="text" name="fname" value="">
        <label for="">Enter Last Name </label>
        <input type="text" name="lname" value="">
        <label for="">Enter Email </label>
        <input type="email" name="email" value="">
        <input type="submit" name="submit" value="submit">
    </form>
    </body>


    </html>


<?php
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $lname = $_POST['email'];
    $insert = "INSERT into  myguests  (firstname ,lastname,email) VALUE ('$fname','$lname','&email')";
    if (mysqli_query($con, $insert)) {
        echo "<script> alert('New record added sucessfully') </script>";

    } else {
        echo "Connect" . $insert . mysqli_error($con);

    }
    mysqli_close($con);
}
?>