<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Managment System </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link href="assets/css/styles.css" rel="stylesheet">

</head>

<body>
<?php
       session_start();

    if (!$_SESSION['username']) {
        header('Location: login.php');
        exit; 
        
    } 

    if (isset($_GET['logout'])) {
        
        $_SESSION = array();
        session_destroy();
        header("Location: login.php");
        exit;
    }

    if (isset($_GET['message'])) {
        echo "<script>alert('".$_GET['message']."');</script>";
    }
?>


  <div class="wrapper">
    <!-- Sidebar -->

    <nav id="sidebar">
      <div class="sidebar-header">
        <img alt="logo" src="assets/img/logo.png">
        <p class="h5" style="margin-top: 10px;">Library Managment System</p>
      </div>

      <ul class="nav nav-pills flex-column mt-4" id="menu">

        <li class="nav-item" style="margin-top: 20px;">
          <a href="#" class="nav-link text-white" onclick="loadDashboard()">
            <i class="fa fa-desktop"></i><span class="fs-6 ms-3 d-sm-inline">Dashboard</span>
          </a>
        </li>

        <li class="menu-header">Category</li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white" onclick="addCat()">
            <i class="fa fa-plus"></i><span class="fs-6 ms-3 d-sm-inline">Add Category</span>
          </a>
        </li>

        
        <li class="nav-item">
          <a href="#" class="nav-link text-white" onclick="loadCatList()">
            <i class="fa fa-plus"></i><span class="fs-6 ms-3 d-sm-inline">Category List</span>
          </a>
        </li>

        <li class="menu-header">Users</li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white" onclick="loadUserList()">
            <i class="fa fa-plus"></i><span class="fs-6 ms-3 d-sm-inline">User List</span>
          </a>
        </li>

      
        



       



      </ul>

    </nav>
    <!-- Sidebar Ends -->


    <div id="content">

      <!-- Top Nav Bar -->

      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #7D308E;">

        <div class="container-fluid">

          <a href="#" class="nav_button" id="sidebarCollapse">
            <i class="fa fa-bars" style="color: white; font-size: 24px; margin-left: 10px;"></i>
          </a>

          <!-- Top Nav Bar Search Option-->

          <div id="top_nav-search" class="navbar-nav me-auto mb-2 mb-lg-0">

            <div class="input-group">

            <input type="text" class="form-control" placeholder="Search..." aria-label="Search..."
              aria-describedby="inputGroup-sizing-sm" style="border-radius: 20px; max-height: 32px;" id="search">

            <button class="btn btn-light btn-sm" type="button" id="top_nav-search-button"
              style="border-radius: 20px; margin-left: 10px;">Search</button>

            </div>

          </div>


          <!-- Top Nav Bar Profile Icon Dropdown-->
          
          <div class="dropdown" style="margin-right: 10px;">
            <a class="dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user-circle" style="color: white; font-size: 32px; margin-left: 10px;"></i>
            </a>
            <!-- Dropdown Menu-->
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-end" aria-labelledby="navbarDropdown" style="margin-top: 20px;">
              
              <center><i class="fas fa-user-circle" style="color: black; font-size: 32px; margin-left: 10px;"></i></center>
              <p class="h6" id="userName" style="text-align: center;"><?php echo $_SESSION['username']; ?></p>


              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#profileItem" onclick="loadProfile()">Profile</a></li>
              <li><a class="dropdown-item" href="?logout">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Top Nav Bar Ends -->



      <!-- Page Content Area -->

      <div id="feature-container">
        <h2 class="h2" id="feature-title">Dashboard</h2>

        <div id="feature-content">

        </div>


      </div>

      <!-- Page Content Area Ends -->

    </div>

    <div class="modal fade" id="profileItem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div id="profile-content">

            </div>
            
            </div>
        </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

    <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    

    
</body>

</html>