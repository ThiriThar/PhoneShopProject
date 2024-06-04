<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<center>
        <h1 class="mt-5">Phone Register Form</h1>
        <br>
        <a class="btn btn-outline-success" role="button" href="index.php">
            Home
        </a>
        <a class="btn btn-outline-warning" role="button" href="display.php">
            Display
        </a>
        <br>
<table class="table table-success mt-3">
    <tr>
        <td>No</td>
        <td>Name</td>
        <td>Brand</td>
        <td>Price</td>
        <td>Phone Number</td>
        <td>Image</td>
        <td>Delete</td>
        <td>Edit</td>
    </tr>

    <?php
        error_reporting(1);
        include('connection.php');
        $data = "SELECT * FROM phonelist ORDER BY id DESC";
        $val = $con->query($data);
        while(list($id, $phonename, $brand, $price, $phone, $img) = mysqli_fetch_array($val)){
            echo "<tr>";
            echo "<td>".$id."</td>";
            echo "<td>".$phonename."</td>";
            echo "<td>".$brand."</td>";
            echo "<td>".$price."</td>";
            echo "<td>".$phone."</td>";
            echo "<td>".$img."</td>";
            echo "<td><a href='delete.php? id=$id'>Delete</a></td>";
            echo "<td><a href='edit.php? id=$id'>Edit</a></td>";
            echo "</tr>";
        }
    ?>
</table>
</center>
</body>