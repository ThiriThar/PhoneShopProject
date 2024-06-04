<html>

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

        <?php
        error_reporting(1);
        include ('connection.php');
        extract($_POST);
        if($save){
        $img=$_FILES['img']['name'];
        mkdir("image/$n");
        move_uploaded_file($_FILES['img']['tmp_name'],"image/$n/".$_FILES['img']['name']);
        $insertq="insert into phonelist values ('','$n','$b','$p','$ph','$img')";
        $con->query($insertq);
        header("location:display.php");
        }
        ?>


        <div class="row mt-3">
            <div class="col-4"></div>
            <div class="col-4">
                <form method="post" enctype="multipart/form-data">
                    <table class="table table-info">
                        <tr>
                            <td>Enter Your Phone Name</td>
                            <td><input type="text" required name="n"/></td>
                        </tr>
                        <tr>
                            <td>Enter Your Phone Brand</td>
                            <td><input type="text" required name="b"/></td>
                        </tr>
                        <tr>
                            <td>Enter Your Phone Price</td>
                            <td><input type="number" required name="p"/></td>
                        </tr>
                        <tr>
                            <td>Enter Your PhNumber</td>
                            <td><input type="number" required name="ph"/></td>
                        </tr>
                        <tr>
                            <td>Enter Your Phone Image</td>
                            <td><input type="file" required name="img"/></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td> <input type="submit" class="btn btn-outline-secondary" name="save"
                                    value="Insert Data" />
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="col-4"></div>


        </div>

    </center>
</body>

</html>