<!DOCTYPE html>
<html lang="en">
  <head>
    <title>phpMonitor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="asset/bootstrap.min.css" rel="stylesheet">
    <script src="asset/bootstrap.bundle.min.js"></script>
  </head>
  <body>

    <style>
      body {
        margin: 0;
      }

      .h-nav {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 100%;
        position: fixed;
        overflow: auto;
      }

      .v-ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 20%;
        background-color: #f1f1f1;
        position: fixed;
        top: 50px;
        height: 100%;
        overflow: auto;
      }

      .v-li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
      }

      .v-li a.active {
        background-color: #465480;
        color: white;
      }

      .v-li a:hover:not(.active) {
        background-color: #555;
        color: white;
      }

      .screen {
        position: fixed;
        top: 50px;
        margin-left:20%;
        padding:1px 16px;
        width: 80%;
        height:680px;
        overflow: auto;   
      }
    </style>

    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'table.php';
    ?>

    <div>
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark h-nav">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="images/user.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Member</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Decode MD5</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Google</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button>
            </form>
          </div>
        </div>
    </nav>

    </div>

    <ul class="v-ul">
      <li class="v-li"><a class="<?= $page == 'form.php' ? 'active':''; ?>" href="?page=form.php">Home</a></li>
      <li class="v-li"><a class="<?= $page == 'table.php' ? 'active':''; ?>" href="?page=table.php">News</a></li>
      <li class="v-li"><a class="<?= $page == 'add_md5.php' ? 'active':''; ?>" href="?page=add_md5.php">md5</a></li>
      <li class="v-li"><a class="<?= $page == 'form_edit.php' ? 'active':''; ?>" href="?page=form_edit.php">About</a></li>
    </ul>

    <div id="render_screen" class="screen">
      <?php include $page; ?>
    </div>


  </body>
</html>
