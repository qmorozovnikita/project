<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <title>Site</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg ">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow collapse navbar-collapse" id="navbar1">
  
      <h5 class="my-0 mr-md-auto font-weight-normal"><a href="/" style="text-decoration: none;">Nikita Morozov</a></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark " href="about.php">About</a>
        <a class="p-2 text-dark " href="blog/index.php">Blog</a>
        <a class="p-2 text-dark" href="donate.php">Donate</a>
        <a class="p-2 text-dark" href="feedback.php">Feedback</a>
        <?php if($_SESSION['user_id'] == 1) {
          ?>
          <a class="p-2 text-dark" href="../admin/index.php">Admin</a>
          <?php
        }
        ?>
      </nav>
      <?php
      if(empty($_SESSION)) {
        ?>
          <a class="btn btn-outline-primary sign" href="login.php">Sign in</a>
          <a class="btn btn-outline-primary" href="register.php">Sign up</a>
        <?php
      } else {
        ?>
          <a class="btn btn-outline-primary" href="../profile/edit.php">Edit Profile</a>
          <a class="btn btn-outline-dark" href="logout.php">Logout</a>
        <?php
      }
      ?>
    </div>
</nav>