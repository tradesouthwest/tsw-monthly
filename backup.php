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
    <title>Process Monthlys</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <div class="container">
            <div class="row">

                <?php include 'nav.php'; ?>
                <h1>Monthly Bills Due Database Manager</h1>
                <h4><?php echo date('m-d-Y'); ?></h4>
                <hr>

                <form action="" method="POST">
                    <label>Quick View by Month</label><br>
                    <select name="selectmonth">
                        <option value="jan">jan</option>
                        <option value="feb">feb</option>
                        <option value="mar">mar</option>
                        <option value="apr">apr</option>
                        <option value="may">may</option>
                        <option value="jun">jun</option>
                        <option value="jul">jul</option>
                        <option value="aug">aug</option>
                        <option value="sep">sep</option>
                        <option value="oct">oct</option>
                        <option value="nov">nov</option>
                        <option value="dec">dec</option>
                    </select><br>
                        <input type="submit" name="submit_select" value="Submit"><br>
                </form>

               <hr>

                <form action="" method="POST">
                    <label><b>Choose month to copy backup file from</b></label><br>
                    <select name="tableone">
                        <option value="jan">jan</option>
                        <option value="feb">feb</option>
                        <option value="mar">mar</option>
                        <option value="apr">apr</option>
                        <option value="may">may</option>
                        <option value="jun">jun</option>
                        <option value="jul">jul</option>
                        <option value="aug">aug</option>
                        <option value="sep">sep</option>
                        <option value="oct">oct</option>
                        <option value="nov">nov</option>
                        <option value="dec">dec</option>
                    </select><br>
                  <br>


                    <label><b>Choose month to copy data to</b></label><br>
                     <select name="tabletwo">
                        <option value="jan">jan</option>
                        <option value="feb">feb</option>
                        <option value="mar">mar</option>
                        <option value="apr">apr</option>
                        <option value="may">may</option>
                        <option value="jun">jun</option>
                        <option value="jul">jul</option>
                        <option value="aug">aug</option>
                        <option value="sep">sep</option>
                        <option value="oct">oct</option>
                        <option value="nov">nov</option>
                        <option value="dec">dec</option>
                    </select><br>
                        <input type="submit" name="submit_clone" value="Submit"><br>
                </form>

<?php

/*
`id` `bill` `amnt` dtdue`
`dtpaid` `notes` `more`
*/

if( isset( $_POST['submit_trans']))
{
        require 'inc/dbh.php';
   		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$table2 = $_POST['tabletwo'];

$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

foreach ($_POST['id'] as $key => $value) {
$id = $_POST['id'][$key];
$bill = $_POST['bill'][$key];
$amnt = $_POST['amnt'][$key];
$dtdue = $_POST['dtdue'][$key];
$dtpaid = $_POST['dtpaid'][$key];
$notes = $_POST['notes'][$key];

   $sql = "UPDATE `$table2` SET `bill` = :bill, `amnt` = :amnt, `dtdue` = :dtdue, `dtpaid` = :dtpaid, `notes` = :notes
					WHERE `id` = :id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute(array(':bill' => $bill, ':amnt' => $amnt, ':dtdue' => $dtdue, ':dtpaid' => $dtpaid,
				                        ':notes' => $notes, ':id' => $id ));

}
	  				        //Database::disconnect();
  			       	Database::disconnect();
                    echo "<div class='success-message pull-right'><h1>Successfull activity '" . $table2 . "'</h1>
                    <p><a href=\"tables.php\">Back to Tables</a></p></div>";
}
?>
<?php
if( isset( $_POST['submit_clone'])){

   		    $table1  = $_POST['tableone'];
		        $table2  = $_POST['tabletwo'];
?>

<form class="upform" action="" method="POST">
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
	$sql = $pdo->query("SELECT * FROM `$table1`");
		foreach ($sql as $row) {
?>

                    <tr>
                    <td class="upform"><input type="text" name="bill[]" value="<?php echo $row['bill']; ?>"></td>
                    <td class="upform"><input type="text" name="amnt[]" value="<?php echo $row['amnt']; ?>"></td>
		            <td class="upform"><input type="text" name="dtdue[]" value="<?php echo $row['dtdue']; ?>"></td>
		            <td class="upform"><input type="text" name="dtpaid[]" value="<?php echo $row['dtpaid']; ?>"></td>
                    <td class="upform"><input type="text" name="notes[]" value="<?php echo $row['notes']; ?>"></td>
                    <td class="upform noprint">

                        <input type="hidden" value="<?php echo $row['more']; ?>" name="more[]">
                        <input type="hidden" value="<?php echo $row['id']; ?>" name="id[]">
                        <input type="hidden" value="<?php echo $table2; ?>" name="tabletwo">
                        </td>
                    </tr>
<?php } ?>

                </tbody>
            </table>
<input type="submit" name="submit_trans" value="OK Copy"></form>

<?php
    }
?>






<?php
if( isset( $_POST['submit_select'])){

    $selectmonth = $_POST['selectmonth'];
?>

<form class="upform" action="" method="POST">
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
	$sql = $pdo->query("SELECT * FROM `$selectmonth`");
		foreach ($sql as $row) {
?>

                    <tr>
                    <td class="upform"><input type="text" name="bill" value="<?php echo $row['bill']; ?>"></td>
                    <td class="upform"><input type="text" name="amnt" value="<?php echo $row['amnt']; ?>"></td>
		            <td class="upform"><input type="text" name="dtdue" value="<?php echo $row['dtdue']; ?>"></td>
		            <td class="upform"><input type="text" name="dtpaid" value="<?php echo $row['dtpaid']; ?>"></td>
                    <td class="upform"><input type="text" name="notes" value="<?php echo $row['notes']; ?>"></td>
                    <td class="upform noprint">

                        <input type="hidden" value="<?php echo $row['more']; ?>" name="more">
                        <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                        <input type="hidden" value="<?php echo $table2; ?>" name="table2">
                        </td>
                    </tr>
<?php } ?>

                </tbody>
            </table>
<input type="submit" name="newval_tab" value="OK Copy"></form>
<?php
    }
?>
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
