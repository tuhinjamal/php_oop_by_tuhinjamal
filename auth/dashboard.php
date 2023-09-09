<?php
include_once 'app/auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Auth System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
<div class="row justify-content-center">
<div class="col-sm-6 pt-4">
  <h2>User Dashboard</h2>
  <?php echo $_SESSION['user_name']?>
 <a href="/logout" class="btn btn-dark btn-sm">Logout</a>
  </div>
  </div>
</div>

</body>
</html>
