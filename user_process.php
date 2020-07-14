<?php
/**
 * Created by PhpStorm.
 * User: ZiaulHaque
 * Date: 11-10-2015
 * Time: 18:25
 */
include("dbconnect.php");

/*
 * Inserting data to table
 * */

if (isset ($_POST['submit'])) {
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($db_connect, $email);

    $query= ("INSERT INTO email_capture (email) VALUES ('$email')") ;

    $result = mysqli_query($db_connect, $query) or die(mysqli_error($db_connect));

    if($result) {
        echo "<script>
        alert('Successfully Submitted');
        </script>";
    } else {
        echo "<script>
        alert('unsuccessull');
        </script>";
    }

}






mysqli_close($db_connect);
// header("location:index.php?note=success");