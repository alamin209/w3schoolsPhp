
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mydbpdo";

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
    try {
//        $conn = new PDO("mysql:host=$servername:dbname=$dnmane", $username, $password);
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO   mygust (fiirstname, lastname, email)
VALUES ( '$fname', '$lname', '$email')";
        $conn->exec($sql);
        echo "Inforamtion added  suceessfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}
$conn = null
    ?>