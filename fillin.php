<?php
session_start();
if (!isset($_SESSION['user_session']))
{
header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mothlys</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <div class="container">
            <div class="row">

                <?php include 'nav.php'; ?><div class="clearfix"></div>

<?php
/*
`id` `bill` `amnt` dtdue`
`dtpaid` `notes` `more`
*/

if( isset( $_POST['upmonth'])){

require 'inc/dbh.php';

$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

foreach ($_POST['bill'] as $key => $value) {
$bill = $_POST['bill'][$key];
$amnt = $_POST['amnt'][$key];
$dtdue = $_POST['dtdue'][$key];
$dtpaid = $_POST['dtpaid'][$key];
$notes = $_POST['notes'][$key];

   $sql = "INSERT INTO jan ( bill, amnt, dtdue, dtpaid, notes )
          VALUES ( ?, ?, ?, ?, ? )";
   $q = $pdo->prepare($sql);

            $q->execute( array($bill, $amnt, $dtdue, $dtpaid, $notes ) );
}

 Database::disconnect();
 echo "New record created successfully";

} // ends if-isset submit
?>

            </div>
        </div>
    </div><div class="clearfix"></div>
</body>
</html>