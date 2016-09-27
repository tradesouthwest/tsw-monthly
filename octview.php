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
    <title>Oct Mothlys</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <div class="container">
            <div class="row">

                <?php include 'nav.php'; ?>

                <div class="clearfix"></div>
                <h3>Monthly Bill Payments for Month October</h3>
		        <h4>First Half</h4>
		        <table class="table">
                    <thead>
                        <tr>
                          <th>Bill</th>
                          <th>Amount</th>
                          <th>Date Due</th>
		                  <th>Date Paid</th>
		                  <th>Notes (chk#)</th>
		                  <th class="noprint">update</th>
                        </tr>
                    </thead>
                    <tbody>

<?php
require 'inc/dbh.php';
	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = $pdo->query("SELECT * FROM oct WHERE more = 0");
		foreach ($sql as $row) {
?>

                    <tr>
                    <td class="upform"><input type="text" name="bill" value="<?php echo $row['bill']; ?>"></td>
                    <td class="upform"><input type="text" name="amnt" value="<?php echo $row['amnt']; ?>"></td>
		            <td class="upform"><input type="text" name="dtdue" value="<?php echo $row['dtdue']; ?>"></td>
		            <td class="upform"><input type="text" name="dtpaid" value="<?php echo $row['dtpaid']; ?>"></td>
                    <td class="upform"><input type="text" name="notes" value="<?php echo $row['notes']; ?>"></td>
                    <td class="upform noprint">
                    <form class="upform" action="process.php" method="POST">
                        <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                        <input type="submit" name="submit_oct" value="+"></form></td>
                    </tr>
<?php } ?>
                    </tbody>
                </table>

                <h4>Second half</h4>
                <table class="table">
                    <thead>
                    <tr>
                      <th>Bill</th>
                      <th>Amount</th>
                      <th>Date Due</th>
            		  <th>Date Paid</th>
		              <th>Notes (chk#)</th>
		              <th class="noprint">update</th>
                    </tr>
                    </thead>
                    <tbody>
<?php
/*
`id` `bill` `amnt` dtdue`
`dtpaid` `notes` `more`
*/
$sql = $pdo->query("SELECT * FROM oct WHERE more = 1");
	foreach ($sql as $row) {
?>


                    <tr>
                    <td class="upform"><input type="text" name="bill" value="<?php echo $row['bill']; ?>"></td>
                    <td class="upform"><input type="text" name="amnt" value="<?php echo $row['amnt']; ?>"></td>
		            <td class="upform"><input type="text" name="dtdue" value="<?php echo $row['dtdue']; ?>"></td>
		            <td class="upform"><input type="text" name="dtpaid" value="<?php echo $row['dtpaid']; ?>"></td>
                    <td class="upform"><input type="text" name="notes" value="<?php echo $row['notes']; ?>"></td>
                    <td class="upform noprint">
                    <form class="upform" action="process.php" method="POST">
                        <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                        <input type="submit" name="submit_oct" value="+"></form></td>
                  </tr>
<?php } ?>
                  </tbody>
                </table>

        </div>
    </div>
</div><div class="clearfix"></div>
</body>
</html>