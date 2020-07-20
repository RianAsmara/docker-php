<html>

<head>
  <title>Docker PHP Mysql PDO</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
  integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
  integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<style>
  html,
  body {
    margin: 1px;
    border: 0;
  }
</style>

<body>
  <div align="center">
    <div style=" border: solid 1px #079B96; " align="left">
      <?php if (isset($errMsg)) {
          echo '<div style="color:#FF0000;text-align:center;font-size:18px;">' .
              $errMsg .
              '</div>';
      } ?>
      <div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b>Docker PHP Mysql</b></div>
      <div style="margin: 15px">
        Welcome guest !
        <br>
        <a href="login.php">Login</a> <br>
        <a href="register.php">Register</a> <br>
        <a href="forgot.php">Forgot Password</a>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
</body>

</html>