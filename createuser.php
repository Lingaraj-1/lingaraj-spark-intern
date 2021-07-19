<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "bank";

$conn = mysqli_connect($servername, $username, $password, $database_name);
if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
}
if (isset($_POST["Submit"])) {
    $Customerid = $_POST["Customerid"];
    $Name = $_POST["Name"];
    $Address = $_POST["Address"];
    $Contactno = $_POST["Contactno"];
    $Amount = $_POST["Amount"];

    $sql_query = "INSERT INTO createuser (Customerid,Name,Address,Contactno,Amount)
    VALUES ('$Customerid','$Name','$Address','$Contactno',$Amount)";

    if (mysqli_query($conn, $sql_query)) {
        echo "user information is successfully created";
    } else {
        echo "Error" . $sql_query . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
