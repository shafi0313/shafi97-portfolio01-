<?php
ob_start();
include '../includes/config.php';
session_start();
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">

        <?php
        if (isset($_POST['username'])) {
          $username = v($_POST['username']);
          $password = v($_POST['password']);

          $username = mysqli_real_escape_string($cont, $username);
          $password = mysqli_real_escape_string($cont, $password);

          $query = "SELECT * FROM login WHERE username = '{$username}' and password = '{$password}'";
          $select_user_query = mysqli_query($cont, $query);
          //   $rows = mysqli_num_rows($select_user_query);

          //   if ($rows === 1) {
          //     $_SESSION['username'] = $username;
          //     header("Location:index.php");
          //   } else {
          //     echo "<h3>User Name/Password is incorrect.</h3><br>Click Here to <a href='login.php'>Login</a>";
          //   }
          // } else {

          if (!$select_user_query) {
            die("Query Failed" . mysqli_error($cont));
          }

          while ($row = mysqli_fetch_array($select_user_query)) {
            $db_id        = $row['id'];
            $db_username  = $row['username'];
            $db_password  = $row['password'];
          }

          if ($username !== $db_username && $password !== $db_password) {

            header("Location: login.php");
            echo "inCo";
          } else if ($username == $db_username && $password == $db_password) {
            $_SESSION['username'] = $db_username;
            $_SESSION['password'] = $db_password;

            header("Location: index.php");
          } else {
            header("Location: login.php");
            echo "inCo";
          }
        }
        ?>
        <form method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" required="required" name="username">
              <label for="inputEmail">User Name</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" class="form-control" name="password" required="required">
              <label for="">Password</label>
            </div>
          </div>
          <input class="btn btn-primary btn-block" type="submit" value="Login">
        </form>

        <!-- <div class="text-center">
            <a class="d-block small mt-3" href="register.html">Register an Account</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div> -->
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>

<?php
function v($post)
{
  $post = trim($post);
  $post = stripcslashes($post);
  $post = htmlspecialchars($post);

  return $post;
}
?>