<?php
session_start();
include('db_conn.php');
include('redirect.php');
if (isset($_POST['add_category_btn'])) {



  

    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $meta_title = $_POST['meta_title'];
    $status = isset($_POST['status']) ? '1' : '0';
    $popular = isset($_POST['popular']) ? '1' : '0';
    $path = "Uploads";
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = $image;

    $cate_query = "INSERT INTO categories (name,description,image,meta_title,status,popular)
  VALUES ('$name','$description','$image','$meta_title','$status','$popular')";

    $cate_query_run = mysqli_query($conn, $cate_query);

    if ($cate_query_run) {
        move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $filename);
        redirect("add_category.php", "Category Added SuccesFully");
    } else {
        redirect("add_category.php", "Something went Wrong");
    }
}
