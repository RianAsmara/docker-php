<?php
require 'config.php';

if (isset($_POST['login'])) {
    $errMsg = '';

    // Get data from FORM
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == '') {
        $errMsg = 'Enter username';
    }
    if ($password == '') {
        $errMsg = 'Enter password';
    }

    if ($errMsg == '') {
        try {
            $stmt = $connect->prepare(
                'SELECT id, fullname, username, password, secretpin FROM pdo WHERE username = :username'
            );
            $stmt->execute([
                ':username' => $username,
            ]);
            $data = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($data == false) {
                $errMsg = "User $username not found.";
            } else {
                if ($password == $data['password']) {
                    $_SESSION['name'] = $data['fullname'];
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['password'] = $data['password'];
                    $_SESSION['secretpin'] = $data['secretpin'];

                    header('Location: dashboard.php');
                    exit();
                } else {
                    $errMsg = 'Password not match.';
                }
            }
        } catch (PDOException $e) {
            $errMsg = $e->getMessage();
        }
    }
}
?>

<html>

<head>
	<title>Login</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
	integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
	integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<style>
	html,
	body {
		margin: 1px;
		border: 0;
	}
</style>

<body>
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div style=" border: solid 1px #006D9C; ">
				<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b>Login</b></div>
				<div style="margin: 15px">
					<form action="" method="post">
						<input type="text" name="username" value="<?php if (isset($_POST['username'])) {
          echo $_POST['username'];
      } ?>" autocomplete="off" class="box" /><br /><br />
						<input type="password" name="password" value="<?php if (
          isset($_POST['password'])
      ) {
          echo $_POST['password'];
      } ?>" autocomplete="off" class="box" /><br /><br />
						<input type="submit" name='login' value="Login" class='submit btn btn-primary btn-block' />
					</form>
				</div>
				<?php if (isset($errMsg)) {
        echo '<div style="color:#FF0000;text-align:center;font-size:17px;">' .
            $errMsg .
            '</div>';
    } ?>
				<br>
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