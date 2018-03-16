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
    $email = $_POST['email'];
    $insert = "INSERT into  myguests  (firstname ,lastname,email) VALUE ('$fname','$lname','$email')";

    if (mysqli_query($con, $insert)) {
        //i wil get last insert id afert ecustion or insertion
        $last_id=$con->insert_id;
        echo "<script> alert('New record added sucessfully') </script>".$last_id;

    } else {
        echo "Connect" . $insert . mysqli_error($con);

    }
    mysqli_close($con);
}
?>
<?php
/*  With praperd statement
if (isset($_POST['submit'])) {
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$lname = $_POST['email'];
$stmt = $con->prepare("INSERT into  myguests  (firstname ,lastname,email) VALUE (?,? ,?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);
$firstname="$fname";
$lastname="$lname";
$email="$email";
$stmt->execute();
echo "New records created successfully";

//    if (mysqli_query($con, $stmt)) {
//        //i wil get last insert id afert ecustion or insertion
//        $last_id=$con->insert_id;
//        echo "<script> alert('New record added sucessfully') </script>".$last_id;
//
//    } else {
//        echo "Connect" . $stmt . mysqli_error($con);
//
//    }
//    mysqli_close($con);
}
 */
?>
