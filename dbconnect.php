<?php
/**
 * Created by Tested.
 * User: Niero
 * Date: 11-10-2015 ---- Upddated 2020
 * Time: 17:57
 */

$db_host="ec2-34-195-169-25.compute-1.amazonaws.com";
$db_username="fctufjhibrmzck";
$db_password="b84bd5b5da411c0d3c367a6d7ba74d2898462d4e6079efa0dc3b8e55c59db48b";
$db_name="deetjv3u173jsk";


$db_connect     = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die();
// Check connection
if (mysqli_connect_error())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// echo "<h1>Connected Successfully!</h1>"; 
