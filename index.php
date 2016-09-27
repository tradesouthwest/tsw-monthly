<?php
if(!isset($_SESSION)){session_start();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Monthlys</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <div class="container">
            <div class="row">

                <?php include 'nav.php'; ?>
<?php
//echo SID;
//process login form if submitted
include 'inc/functions.php';
    if(isset($_POST['submit']))
    {
        include 'inc/dbh.php';
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $active = 1;
		$pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        $stmt = $pdo->prepare('SELECT * FROM tsw_members
    	                           WHERE (username = :username AND password = :password AND active = :active)');
            $stmt->execute(array(
            ':username' => $username,
            ':password' => $password,
            ':active'   => $active
            ));
        if ($stmt->rowCount() > 0)
        {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $firstname = $row['firstname'];
            $idm       = $row['idm'];
            $email     = $row['email'];
            $email_stripped = $email;
            $date_session   = date('mdY-Hi');
            $user_session   = $email_stripped;
            if(!isset($_SESSION))
            {session_start();}
                $_SESSION['user_session'] = "$user_session$date_session";  // used for uploads identifier
                $_SESSION['firstname'] = $firstname;                      // for displaying name
                $_SESSION['user_id'] = $idm;                             // for user id fetching if needed

                //redirect('tables.php');  exit;
        } else
            {
            esc('Wrong username or password.');
            }
?>

                <!--alternate usage instead of redirect(or header) -->
                <h1>You are Logged In</h1>
                <h2><?php print($_SESSION['firstname']); ?></h2>
                <a href='tables.php' class='btn btn-primary'>Logged In, Go to Admin</a>
                <hr>

<?php
    }
?>

                <hr>
                <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <p><input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" tabindex="1"></p>
                    </div>
                    <br>
                    <div class="form-group">
                     <p><input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3"></p>
                    </div>

                <hr>
                    <div class="form-group">
                        <p><input type="submit" name="submit" value="Login" class="btn btn-primary btn-block btn-lg" tabindex="5"></p>
                    </div>
                </form>
                hint: mon - mon
                <br>
                <p>&nbsp;</p>
                <hr>
                <br>
                <p>tsw-monthly by <a href="http://tradesouthwest.com" title="programming and development of internet related products">TSW=|=</a> OpenSource available at Github.com <a href="https://github.com/tradesouthwest/tsw-monthly" title="tradesouthwest on github">https://github.com/tradesouthwest/tsw-monthly</a></p>
            </div>
        </div>
    </div><div class="clearfix"></div>
</body>
</html>