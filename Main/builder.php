<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
   <!DOCTYPE html>
   <html lang="en">

   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="viewport" content="width=device-width , initial-scale=1">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono&family=Inter&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="builder.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono&family=Inter&display=swap" rel="stylesheet">
      <script src="https://kit.fontawesome.com/0469953560.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <title>Builder</title>
   </head>

   <body>
      <header class="header">
         <a href="home.php" class="logo"> <img src="image\partpicker.png"></a>
         <nav class="navbar">
            <a href="home.php">home</a>
            <a href="builder.php">builder</a>
            <div class="dropdown">
               <button class="dropbtn"><a>Browse Products <i class="fa-solid fa-caret-down"></i></button></a>
               <div class="dropdown-content">
                  <table>
                     <tr>
                        <td>
                           <div class="gallery">
                              <a target="_blank" href="cpu.php">
                                 <img src="image/nav-cpu.png" width="100" height="100">
                              </a>
                              <div class="desc">CPU</div>
                           </div>
                        <td>
                           <div class="gallery">
                              <a target="_blank" href="memory.php">
                                 <img src="image/nav-memory.png" width="100" height="100">
                              </a>
                              <div class="desc">Memory</div>
                           </div>
                        <td>
                           <div class="gallery">
                              <a target="_blank" href="cpucooler.php">
                                 <img src="image/nav-cpucooler.png" width="100" height="100">
                              </a>
                              <div class="desc">CPU Cooler</div>
                           </div>
                        <td>
                           <div class="gallery">
                              <a target="_blank" href="motherboard.php">
                                 <img src="image/nav-motherboard.png" width="100" height="100">
                              </a>
                              <div class="desc">Motherboard</div>
                           </div>
                        <td>
                     <tr>
                        <td>
                           <div class="gallery">
                              <a target="_blank" href="storage.php">
                                 <img src="image/nav-ssd.png" width="100" height="100">
                              </a>
                              <div class="desc">Storage</div>
                           </div>
                        <td>
                           <div class="gallery">
                              <a target="_blank" href="videocard.php">
                                 <img src="image/nav-videocard.png" width="100" height="100">
                              </a>
                              <div class="desc">Graphics Card</div>
                           </div>
                        </td>
                        <td>
                           <div class="gallery">
                              <a target="_blank" href="powersupply.php">
                                 <img src="image/nav-powersupply.png" width="100" height="100">
                              </a>
                              <div class="desc">Power Supply</div>
                           </div>
                        </td>
                        <td>
                           <div class="gallery">
                              <a target="_blank" href="case.php">
                                 <img src="image/nav-case.png" width="100" height="100">
                              </a>
                              <div class="desc">Cabinet</div>
                           </div>
                        </td>
                  </table>
               </div>
            </div>
            <a href="#Compare">Compare</a>
         </nav>
         <div class="login-status">
            <a href="profile.php">
               <i class="fa-solid fa-user"> <?php echo "<styles>" . $_SESSION['user_name'];
                                             "</styles>" ?></i>
            </a>
         </div>
         <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <a href="logout.php">
               <div class="fa-solid fa-arrow-right-from-bracket" id="logout-btn"></div>
            </a>
         </div>
         <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
         </form>
      </header>
      <section class="parts" id="parts">
         <div class="content">
            <h3>Choose Your Parts</h3>
         </div>
      </section>
      <section class="builder">
         <center>
            <table class="table table-light table-striped table-bordered ">
               <thead class="thead-dark">
                  <tr>
                     <th>Category</th>
                     <th>Selection</th>
                     <th>Source</th>
                     <th>Price</th>
                     <th>Add/Delete</th>
                  </tr>
               </thead>
               <tbody>
                  <tr id="processor">
                     <td class="category lead">Processor</td>
                     <td class="selection"></td>
                     <td class="source"></td>
                     <td class="price text-right"></td>
                     <td class="ref"><button type="button" class="btn btn-outline-primary btn-lg">Add Processor</button></td>
                  </tr>
                  <tr id="motherboard">
                     <td class="category lead">Motherboard</td>
                     <td class="selection"></td>
                     <td class="source"></td>
                     <td class="price text-right"></td>
                     <td class="ref"><button type="button" class="btn btn-outline-primary btn-lg">Add Motherboard</button></td>
                  </tr>
                  <tr id="gpu">
                     <td class="category lead">Graphics Card</td>
                     <td class="selection"></td>
                     <td class="source"></td>
                     <td class="price text-right"></td>
                     <td class="ref"><button type="button" class="btn btn-outline-primary btn-lg">Add Graphic Card</button></td>
                  </tr>
                  <tr id="psu">
                     <td class="category lead">Power Supply</td>
                     <td class="selection"></td>
                     <td class="source"></td>
                     <td class="price text-right"></td>
                     <td class="ref"><button type="button" class="btn btn-outline-primary btn-lg">Add Power Supply</button></td>
                  </tr>
                  <tr id="cabinet">
                     <td class="category lead">Cabinet</td>
                     <td class="selection"></td>
                     <td class="source"></td>
                     <td class="price text-right"></td>
                     <td class="ref"><button type="button" class="btn btn-outline-primary btn-lg">Add Cabinet</button></td>
                  </tr>
                  <tr id="memory">
                     <td class="category lead">Memory (RAM)</td>
                     <td class="selection"></td>
                     <td class="source"></td>
                     <td class="price text-right"></td>
                     <td class="ref"><button type="button" class="btn btn-outline-primary btn-lg">Add Memory</button></td>
                  </tr>
                  <tr id="memory2">
                     <td class="category lead">Additional Memory (RAM)</td>
                     <td class="selection"></td>
                     <td class="source"></td>
                     <td class="price text-right"></td>
                     <td class="ref"><button type="button" class="btn btn-outline-primary btn-lg">Add Memory</button></td>
                  </tr>
                  <tr id="hdd">
                     <td class="category lead">Hard disk drive (HDD)</td>
                     <td class="selection"></td>
                     <td class="source"></td>
                     <td class="price text-right"></td>
                     <td class="ref"><button type="button" class="btn btn-outline-primary btn-lg">Add Hard disk</button></td>
                  </tr>
                  <tr id="ssd">
                     <td class="category lead">Solid State Disk (SSD)</td>
                     <td class="selection"></td>
                     <td class="source"></td>
                     <td class="price text-right"></td>
                     <td class="ref"><button type="button" class="btn btn-outline-primary btn-lg">Add SSD</button></td>
                  </tr>
                  <tr id="monitor">
                     <td class="category lead">Monitor</td>
                     <td class="selection"></td>
                     <td class="source"></td>
                     <td class="price text-right"></td>
                     <td class="ref"><button type="button" class="btn btn-outline-primary btn-lg">Add Monitor</button></td>
                  </tr>
                  <tr id="cooler">
                     <td class="category lead">CPU cooler</td>
                     <td class="selection"></td>
                     <td class="source"></td>
                     <td class="price text-right"></td>
                     <td class="ref"><button type="button" class="btn btn-outline-primary btn-lg">Add Cpu Cooler</button></td>
                  </tr>
                  <tr id="totals">
                     <td></td>
                     <td></td>
                     <td><strong>Grand Total</strong></td>
                     <td class="price text-right"></td>
                     <td></td>
                  </tr>
               </tbody>
            </table>
         </center>
      </section>
      <button class="clearbuild">Clear Build</button>
      <button class="savebuild">Save Build</button>
      <section class="footer" id="footer">
         <table>
            <tr>
               <td>
                  <div class="f1">
                     <img src="image/logo.png">
                     <br>
                     <p>
                        PICK PARTS.<br>
                        BUILD YOUR PC.<br>
                        COMPARE AND SHARE.
                     </p>
                  </div>
               </td>
               <td>
                  <div class="f2">
                     <center>
                        <h1>Catergories</h1>
                        <center>
                           <hr>
                           <br>
                           <center>
                              <p>
                                 <a href="Builder.php">Builder</a><br>
                                 <a href="Builder.php">Browse Products</a><br>
                                 <a href="Builder.php">Compare</a>
                              </p>
                           </center>
                  </div>
               </td>
               <td>
                  <div class="f2">
                     <center>
                        <h1>Company</h1>
                        <center>
                           <hr>
                           <br>
                           <center>
                              <p>
                                 <a href="about.html">About</a><br>
                                 <a href="contact.html">Contact Us</a><br>
                                 <a href="#">User Code Of Conduct</a>
                              </p>
                           </center>
                  </div>
               </td>
            </tr>
         </table>
      </section>
      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
      <!-- custom js file link  -->
      <script src="script.js"></script>
   </body>
<?php
} else {
   header("Location: login.php");
   exit();
}
?>

   </html>