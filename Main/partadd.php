<?php
session_start();
include "db_conn.php";
global $conn;
    $id=$_GET['item'];
    echo $id;
    $sql = "SELECT category_id from products where id=$id";
    $result = $conn->query($sql);
    $res = $result->fetch_assoc();
    $cat=$res['category_id'];
    echo $cat;

    $sql = "INSERT INTO builds(id,category_id) VALUES('$id','$cat')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: builder.php?success=Your part has been added successfully");
     exit();
    }