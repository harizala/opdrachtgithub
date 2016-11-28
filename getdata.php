<?php
$conn = new mysqli('localhost', 'root', 'mysql', 'mde3a');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo $_GET["data"];
$ingevoerdeletters = mysqli_real_escape_string($conn,$_GET["data"]);
echo $ingevoerdeletters;
$res = mysqli_query($conn, "SELECT brandname FROM brands WHERE brandname LIKE '$ingevoerdeletters%';");

if(!$_GET["data"]) {
    echo "";
}
    else {
        if (mysqli_num_rows($res)>=1) {
        while($row = mysqli_fetch_array($res)) {
            $name = $row['brandname'];
            echo $name;
            }
        }
    }

?>