<?php 
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: adminLogin.php');
  exit();
}

?>
<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Padukuhan Jlumbang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <nav class="navbar navbar-dark" style="background-color: #3C4735;">
      <div class="container ">
        <div  class="container navbar-brand">
          <h2 style="font-size: 20px;">Padukuhan Jlumbang</h2>
        </div>
      </div>
    </nav>

    <div class="sidebar2">
      <div class="list-group" style="margin-top: 60px;">
        <button type="button" class="list-group-item list-group-item-action active" style="margin-top: 5px; background-color: #54B435;">
          <b>HOME</b>
        </button>
        <a href="adminMonografi.php" class="list-group-item list-group-item-action"style="margin-top: 7px; background-color: #54B435 ;">Monografi</a>
        <a href="adminBerita.php" type="button" class="list-group-item list-group-item-action" style="margin-top: 7px; background-color: #54B435 ;">Berita</a>
        <a href="adminLogin.php" type="button" class="list-group-item list-group-item-action" style="margin-top: 7px; background-color: #54B435 ;">Logout</a>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>