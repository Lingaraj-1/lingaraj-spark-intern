<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: black;
            font-family: 'Times New Roman', Times, serif;
            font-size: 25px;
            text-align: left;
        }

        th {
            background-color: violet;
            color: white;
        }

        tr:nth-child(even) {
            background-color: white;
        }

        body {
            background-color: skyblue;
        }

        .container {
            text-align: center;
        }

        h3 {
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">

            <a class="navbar-brand" href="Home.html">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="About.html">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Createuser.html">Create user</a>

                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="AllCustomer.php">All Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Transaction-details.html">Transaction-details </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav><br><br>
    <h3>ALL CUSTOMERS</h3><br>
    <table>
        <tr>
            <th>Customerid</th>
            <th>Name</th>
            <th>Address</th>
            <th>Contactno</th>
            <th>Amount</th>
        </tr>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database_name = "bank";

        $conn = mysqli_connect($servername, $username, $password, $database_name);
        if (!$conn) {
            die("Connection Failed" . mysqli_connect_error());
        }
        $sql = "SELECT Customerid,Name,Address,Contactno,Amount from createuser";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["Customerid"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["Address"] . "</td><td>" . $row["Contactno"] . "</td><td>" . $row["Amount"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 result";
        }
        $conn->close();
        ?>
    </table>
    <br><br><br><br>
    <a href="Transaction-details.html">
        <div class="container">
            <button type="button" class="btn btn-primary btn-lg">Transfer Money</button>
        </div>
    </a><br><br>
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mt-6">
                    <p>All @copy rights are reserved</p>
                    <p>powered by lingaraj Hottiyavar</p>
                </div>

            </div>
        </div>
    </footer>




</body>

</html>