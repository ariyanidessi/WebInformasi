<?php
include 'config.php';
session_start();
// logout by remove session
if (isset($_SESSION['username'])) {
  // remove all session variables
  session_unset();

  // destroy the session
  session_destroy(); 
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Padukuhan Jlumbang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="/admin/style.css">
</head>
<body>
  <?php
  // define variables and set to empty values
  $nameErr = $passErr = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tempUser = $_POST["inputName"];
    $tempPass = $_POST["inputPassword"];

    if (empty($tempUser)) {
      $nameErr = "* Username Tidak Boleh Kosong";
      $status = "failed";
    }
    if (empty($tempUser)) {
      $passErr = "* Password Tidak Boleh Kosong";
      $status = "failed";
    } else {
      // cek username dan pass di database
      $query = "SELECT * FROM user WHERE username='" . $tempUser . "' AND password='" . md5($tempPass) . "'";
      $result = mysqli_query($con, $query);
      if ($result->num_rows > 0) {
        $_SESSION['username'] = $tempUser;
        $status = "success";
      } else {
        $status = "failed";
      }
    }
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <nav class="navbar navbar-dark" style="background-color: #379237">
    <div class="container text-center">
      <div class="container navbar-brand text-center">
        <h2>Padukuhan Jlumbang</h2>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="card m-auto mt-5" style="width: 300px; background: rgba(60, 71, 53, 0.1);">
      <div class="card-body">
        <h3 class="card-title text-center">LOGIN</h3>
        <form action="adminLogin.php" method="POST">
          <div class="mb-3">
            <label for="inputName" class="form-label">Username</label>
            <input type="text" class="form-control" name="inputName" id="inputName" value="">
            <span class="text-danger"><?php echo $nameErr; ?></span>
          </div>
          <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" name="inputPassword" id="inputPassword" value="">
            <span class="text-danger"><?php echo $passErr; ?></span>
          </div>
          <div class="d-grid ms-5 mt-3 md-5 me-5 text-center">
            <button type="submit" class="btn btn-primary" style="background-color: green">Submit</button>
          </div>
        </form>
        <div class="text-center m-4">
          <!-- loading -->
          <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($status == "success") {
          ?>
              <div class="text-success">
                * Login Berhasil
              </div>
            <?php
              header('Refresh: 1; URL=adminHome.php');
              exit();
            } else if ($status == "failed") {
            ?>
              <div class="text-danger">
                * Login gagal
              </div>
          <?php
            } else {
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
 
</body>

</html>