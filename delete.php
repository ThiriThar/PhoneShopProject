<?php
    include('connection.php');
    $sql = $con->query("delete from phonelist where id='{$_GET['id']}'");
    header('location:display.php');
?>