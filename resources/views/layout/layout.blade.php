<!DOCTYPE html>
<html lang="en">
<head>
  <title>Region Heal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
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
    background-color: #4A4E69;
    /*color: #000;*/
    color: #F2E9E4 !important;
  }

  .ml-auto .dropdown-menu {
      left: auto !important;
      right: 0px;
  }

  .likes{
    color: #C9ADA7;
    float:right;margin-right: 20px;
    margin-bottom: 10px;
  }
  .clicked {
    color: red;
  }

  #loading {
    position: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    opacity: 0.8;
    background-color: #000;
    z-index: 99;
  }

  #loading-image {
    z-index: 100;
  }

  .navbar {
    background-color: #4A4E69 !important;
  }

  .modal-content {
    background-color: #4A4E69 !important;
  }

</style> 
</head>
<body>

<div id="loading">
  <img id="loading-image" src="/img/mainload.gif" alt="Loading..." />
</div>


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

$(window).on('load', function () {
  $('#loading').hide();
}) 


</script>

</body>
</html>
