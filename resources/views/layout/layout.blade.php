<!DOCTYPE html>
<html lang="en">
<head>
  <title>Region Heal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <!-- https://www.cssscript.com/minimal-dark-mode-switch-button/ -->
  <!-- <link rel="stylesheet" href="https://kk-designs.github.io/dark-mode/dark-mode.css"> -->
  <!-- <script src="https://kk-designs.github.io/dark-mode/dark-mode.js"></script> -->

  <link rel="stylesheet" href="/dark/dark-mode.css">
  <script src="/dark/dark-mode.js"></script>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Lexend&display=swap');
  body{
    font-family: 'Lexend', sans-serif;
    /*background-color: #91B2C7;*/
    background-color: #f2ead6;
    /*background-color: #343a40;*/
  }

  .kotak{
    background-color: #91B2C7;
    /*color: #000;*/
  }

  .ml-auto .dropdown-menu {
      left: auto !important;
      right: 0px;
  }

  .likes{
    color: #f2f2f2;
    float:right;margin-right: 20px;
    margin-bottom: 10px;
  }
  .clicked {
    color: red;
  }

</style> 
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark text-white">
  <ul class="navbar-nav">
    <li class="nav-item">
      <span class="nav-link">Region Heal</span>

    </li>
  </ul>

  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <button class="btn btn-primary" onclick='changeToDarkMode();'><i class="fas fa-adjust"></i></button>
    </li>
  </ul>
</nav>
  
<div class="container">
  @yield('content')
  <footer class="mb-3 text-white">
    <center>
        <a href="https://github.com/zahiruddinnorzain/region-heal" target=_blank style="color: #fff">
            <i class="fab fa-github fa-lg"></i>
        </a>
    </center>
  </footer>
</div>

<script>
changeToDarkMode();
</script>

</body>
</html>
