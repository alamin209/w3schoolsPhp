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
        $last_id = $con->insert_id;
        echo "<script> alert('New record added sucessfully') </script>" . $last_id;

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
<?php

$all = "SELECT * FROM  myguests ";
$all_run = mysqli_query($con, $all);
if (mysqli_num_rows($all_run) > 0) {
    while ($result = mysqli_fetch_assoc($all_run)) { ?>

        <table>
            <tr>
                <th>
                    First Name:

                </th>

                <th>
                    Last Name

                </th>
                <th>
                    Email

                </th>
                <th>
                    Registation Date
                </th>

            </tr>

            <tr>
                <td>
                    <?php echo $result['firstname'] ?>

                </td>
               <td>
                <?php echo $result['lastname'] ?>


                </td>

                <td>
                                <?php echo $result['email']  ?>


                </td>

                <td>
                                <?php echo $result['reg_date']  ?>

                </td>


                <td><a href="mysqli.php?id= <?php  echo $result['id'] ?>" onclick="return confirm('Are you sure you want to delete this item?');" >Delete</a></td>
            </tr>


        </table>


    <?php }
} ?>
<?php
///It is my wayaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
if (isset($_GET['id']))
{
    $id=$_GET['id'];
$delet_id= "Delete FROM  myguests where id=$id";
$run_dlete=mysqli_query($con,$delet_id);

if ($run_dlete)
{
    echo "Id delte successfully ";
}
}

?>


<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$con = new mysqli($server, $username, $password, $dbname);
if(isset($_GET['delete_product']))
{

    $delete_id=$_GET['delete_product'];
    print_r($delete_id);
    $delete_cat="delete from myguests  where id='$delete_id'";
    print_r( $delete_cat);
    $run_delete = mysqli_query($con,$delete_cat);
    if($run_delete)
    {

        echo"<script></script>";
        echo"<script>window.open('mysqli.php','_self')</script>";

    }


}
?>


