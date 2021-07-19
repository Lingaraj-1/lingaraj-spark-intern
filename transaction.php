
<?php
$sender = $_POST["sender"];
$receiver = $_POST["receiver"];
$amount = $_POST["amount"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE createuser SET AMOUNT=AMOUNT-$amount WHERE Customerid=$sender";
$conn->query($sql);
$sql = "UPDATE createuser SET AMOUNT=AMOUNT+$amount WHERE customerid=$receiver";
$conn->query($sql);

$sql1 = "select * from createuser where Customerid=$sender";
$res1 = $conn->query($sql1);
$ss = "";

if ($res1->num_rows > 0) {
    while ($row1 = $res1->fetch_assoc()) {
    }
}

$sql2 = "select * from createuser where Customerid=$receiver";
$res2 = $conn->query($sql2);
$rr = "";
if ($res2->num_rows > 0) {
    while ($row1 = $res2->fetch_assoc()) {
    }
}

if (mysqli_query($conn, $sql)) {
    echo "transaction of Rs$amount is successfully done";
} else {
    echo "Error" . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
