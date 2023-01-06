<!-- Starting Php Session -->
<?php
session_start();
if (isset($_SESSION['id']) || isset($_SESSION['user_name'])) {

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
      Admin Panel
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />



    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->
    <link id="pagestyle" href="./css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
  </head>
  <style>
    .form-control {
      border: 1px solid #b3a1a1 !important;
      padding: 8px 10px;
    }
  </style>

  <body class="g-sidenav-show  bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="admin.php">
          <span class="ms-1 font-weight-bold text-white">Admin Panel</span>
        </a>
      </div>


      <hr class="horizontal light mt-0 mb-2">

      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">









          <li class="nav-item">
            <a class="nav-link text-white active bg-gradient-primary " href="add_category.php">

              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>

              <span class="nav-link-text ms-1">Add Category</span>
            </a>
          </li>




          <li class="nav-item">
            <a class="nav-link text-white " href="./billing.html">

              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">receipt_long</i>
              </div>

              <span class="nav-link-text ms-1">Billing</span>
            </a>
          </li>

        </ul>
      </div>

      <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
          <a class="btn bg-gradient-primary mt-4 w-100" href="adminlogout.php" type="button">Log Out</a>
        </div>

      </div>

    </aside>

    <main class="main-content border-radius-lg ">
      <!-- Navbar -->
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        </div>

      </div>
      </nav>

      <!-- End Navbar -->

      <div class="container-fluid py-6">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h2 class="font-weight-bolder mb-0">Add Category</h2>
              </div>
              <div class="card-body">
                <form action="code.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-8">
                      <label for="">Name</label>
                      <input type="text" name="name" placeholder="Enter Category Name" class="form-control">
                    </div>
              
                    <div class="col-md-12">
                      <label for="">Description</label>
                      <textarea rows="3" name="description" placeholder="Enter Description" class="form-control">
                    </textarea>
                    </div>

                    <div class="col-md-12">
                      <label for="">Upload Image</label>
                      <input type="file" name="image" class="form-control">
                    </div>

                    <div class="col-md-12">
                      <label for="">Meta Title</label>
                      <input type="text" name="meta_title" placeholder="Enter Meta Title" class="form-control">
                    </div>

                    <div class="col-md-6">
                      <label for="">Status</label>
                      <input type="checkbox" name="status">
                    </div>

                    <div class="col-md-6">
                      <label for="">Popular</label>
                      <input type="checkbox" name="popular">
                    </div>

                    <div class="col-md-12">
                      <button type="submit" class="btn-primary active bg-gradient-primary" name="add_category_btn">Save</button>
                    </div>

                  </div>
                </form>

              </div>
            </div>
          </div>

        </div>
      </div>

  </body>
<?php
} else {
  header("Location: login.php");
  exit();
}
?>
<!-- Ending php Session -->

  </html>