<?php
session_start();
include('includes/requester.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="SLU Document Review Tracker">
  <title>SLU Document Review Tracker</title>

  <link rel="icon" type="image/png" href="assets/slu_logo.png">
  <!-- MAIN CSS -->
  <link href="resources/css/user-home.css" rel="stylesheet">
  <link href="resources/css/requester-home.css" rel="stylesheet">
</head>

<body>
  <nav class="sidebar close">
    <header>
      <div class="image-text">
        <span class="image">
          <img src="assets/slu_logo.png" alt="logo">
        </span>
        <div class="text header-text">
          <span class="name">Saint Louis University</span>
          <span class="task">Document Review Tracker</span>
        </div>
      </div>
      <ion-icon name="chevron-forward-outline" class="toggle"></ion-icon>
    </header>
    <div class="menu-bar">
      <div class="menu">
        <ul class="menu-links">
          <li class="nav-link">
            <a href="requester-home.php">
              <ion-icon name="home-outline"></ion-icon>
              <span class="text nav-text">Home</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="requester-view.php">
              <ion-icon name="document-outline"></ion-icon>
              <span class="text nav-text">View Requests</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="requester-add.php">
              <ion-icon name="document-attach-outline"></ion-icon>
              <span class="text nav-text">Add Requests</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="requester-track.php">
              <ion-icon name="document-text-outline"></ion-icon>
              <span class="text nav-text">Track Requests</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="bottom-content">
        <li class="">
          <a href="includes/logout.php">
            <ion-icon name="log-out-outline"></ion-icon>
            <span class="text nav-text">Logout</span>
          </a>
        </li>
        <li class="mode">
          <div class="moon-sun">
            <ion-icon name="moon-outline" class="moon"></ion-icon>
            <ion-icon name="sunny-outline" class="sun"></ion-icon>
          </div>
          <span class="mode-text text">Dark Mode</span>
          <div class="toggle-switch">
            <span class="switch"></span>
          </div>
        </li>
      </div>
    </div>
  </nav>

  <section class="home">
    <div class="top">
      <div class="profile-details">
        <img src="assets/school.png" alt="">
        <span class="user_name"><?php echo $_SESSION["fname"] . " " . $_SESSION["lname"]; ?></span>
        <ion-icon name="radio-button-on-outline" class="profile-icon"></ion-icon>
      </div>
    </div>

    <div class="home-content">
      <div class="overview">
        <div class="title">
          <ion-icon name="bar-chart-outline" class="content-icon"></ion-icon>
          <span class="text">Home</span>
        </div>
      </div>

      <div class="boxes">
          <div class="box box1">
            <ion-icon name="file-tray-full-outline" class="box-icon"></ion-icon>
            <span class="text">Pending Approvals</span>
            <span class="number" id="pending-approvals"></span>
          </div>
          <div class="box box2">
            <ion-icon name="close-outline" class="box-icon"></ion-icon>
            <span class="text">Rejected Approvals</span>
            <span class="number" id="rejected approvals"></span>
          </div>
          <div class="box box3">
            <ion-icon name="documents-outline" class="box-icon"></ion-icon>
            <span class="text">Total Approvals</span>
            <span class="number" id="total-approvals"></span>
          </div>
      </div>
      
      <div class="title">
          <ion-icon name="document-text-outline" class="content-icon"></ion-icon>
          <span class="text">List of Documents</span>
        </div>

      <div class="container-table">
          <table>
            <thead>
              <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Version</th>
                <th>Date</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Cell 1</td>
                <td>Cell 2</td>
                <td>Cell 3</td>
                <td>Cell 4</td>
                <td>Cell 5</td>
              </tr>
              <tr>
                <td>Cell 1</td>
                <td>Cell 2</td>
                <td>Cell 3</td>
                <td>Cell 4</td>
                <td>Cell 5</td>
              </tr>
              <tr>
                <td>Cell 1</td>
                <td>Cell 2</td>
                <td>Cell 3</td>
                <td>Cell 4</td>
                <td>Cell 5</td>
              </tr>
              <tr>
                <td>Cell 1</td>
                <td>Cell 2</td>
                <td>Cell 3</td>
                <td>Cell 4</td>
                <td>Cell 5</td>
              </tr>
              <tr>
                <td>Cell 1</td>
                <td>Cell 2</td>
                <td>Cell 3</td>
                <td>Cell 4</td>
                <td>Cell 5</td>
              </tr>
            </tbody>
          </table>
        </div>
  </section>


  <!-- CUSTOM JS -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="resources/js/requester-home.js"></script>
  <script src="resources/js/user-home.js"></script>
</body>

</html>