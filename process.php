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

<?php
require_once 'inc/dbh.php';
/*
`id` `bill` `amnt` dtdue`
`dtpaid` `notes` `more`
*/

if( isset( $_POST['newval_jan']))
{
	$id      = $_POST['id'];
	$bill    = $_POST['bill'];
	$amnt    = $_POST['amnt'];
	$dtdue   = $_POST['dtdue'];
	$dtpaid  = $_POST['dtpaid'];
	$notes   = $_POST['notes'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  	$sql = "UPDATE jan
		    SET `bill` = :bill, `amnt` = :amnt, `dtdue` = :dtdue, `dtpaid` = :dtpaid, `notes` = :notes
		    WHERE `id` = :id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute(array(
			    ':bill' => $bill, ':amnt' => $amnt, ':dtdue' => $dtdue, ':dtpaid' => $dtpaid, ':notes' => $notes, 
			    ':id' => $id )
			    );
			if( $stmt !==false)
			{
			//Database::disconnect();
  			Database::disconnect();
                        echo "<div class='success-message pull-right'><h1>Successfull activity</h1><h2>Entry No. '" . $id . "' Name '" . $bill . "' Updated</h2>
                        <p><a href=\"janview.php\">Back to January</a></p></div>";
			} else { print('no go'); }
}
?>
<?php
    if( isset( $_POST['submit_jan']))
    {
?>
		    
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
                  <tbody><form action="" method="POST">

<?php
        $id = $_POST['id'];

	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM jan WHERE id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
			$data = $q->fetch(PDO::FETCH_ASSOC);

			if( !empty ($data['bill'])) $bill  = $data['bill'];
			if( !empty ($data['amnt'])) $amnt   = $data['amnt'];
			if( !empty ($data['dtdue'])) $dtdue  = $data['dtdue'];
			if( !empty ($data['dtpaid'])) $dtpaid = $data['dtpaid'];
			if( !empty ($data['notes'])) $notes    = $data['notes'];
?>

                <tr>
                <td><input type="text" name="bill" value="<?php echo $bill; ?>"></td>
                <td><input type="text" name="amnt" value="<?php echo $amnt; ?>"></td>
		<td><input type="text" name="dtdue" value="<?php echo $dtdue; ?>"></td>
		<td><input type="text" name="dtpaid" value="<?php echo $dtpaid; ?>"></td>
                <td><input type="text" name="notes"   value="<?php echo $notes; ?>"></td>
                <td class="noprint">
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                    <input type="submit" name="newval_jan" value="update"></td>
                </tr>
                </form></tbody>
            </table>
		    
<?php
    }
?>

<?php
/*
 * feb
 */

if( isset( $_POST['newval_feb'])){
	$id     = $_POST['id'];
	$bill   = $_POST['bill'];
	$amnt   = $_POST['amnt'];
	$dtdue  = $_POST['dtdue'];
	$dtpaid = $_POST['dtpaid'];
	$notes  = $_POST['notes'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  	$sql = "UPDATE feb
				SET `bill` = :bill, `amnt` = :amnt, `dtdue` = :dtdue, `dtpaid` = :dtpaid, `notes` = :notes
				WHERE `id` = :id";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(array(':bill' => $bill, ':amnt' => $amnt, ':dtdue' => $dtdue, ':dtpaid' => $dtpaid,
				':notes' => $notes, ':id' => $id,));
				if( $stmt !==false){
				//Database::disconnect();
  				Database::disconnect();
            echo "<div class='success-message pull-right'><h1>Successfull activity</h1><h2>Entry No. '" . $id . "' Name '" . $bill . "' Updated</h2>
            <p><a href=\"febview.php\">Back to February</a></p></div>";
				} else { print('no go'); }
}
?>
<?php
if( isset( $_POST['submit_feb'])){
	?>
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
$id = $_POST['id'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM feb WHERE id = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($id));
				$data = $q->fetch(PDO::FETCH_ASSOC);

				if( !empty ($data['bill'])) $bill  = $data['bill'];
				if( !empty ($data['amnt'])) $amnt   = $data['amnt'];
				if( !empty ($data['dtdue'])) $dtdue  = $data['dtdue'];
				if( !empty ($data['dtpaid'])) $dtpaid = $data['dtpaid'];
				if( !empty ($data['notes'])) $notes    = $data['notes'];
		?>

                <tr>
                <td><form action="" method="POST"><input type="text" name="bill" value="<?php echo $bill; ?>"></td>
                <td><input type="text" name="amnt" value="<?php echo $amnt; ?>"></td>
		        <td><input type="text" name="dtdue" value="<?php echo $dtdue; ?>"></td>
		        <td><input type="text" name="dtpaid" value="<?php echo $dtpaid; ?>"></td>
                <td><input type="text" name="notes"   value="<?php echo $notes; ?>"></td>
                <td class="noprint">
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                    <input type="submit" name="newval_feb" value="update"></form></td>
                </tr>
                </tbody>
            </table>
<?php
    }
?>

<?php
/*
 * mar
 */

if( isset( $_POST['newval_mar'])){
	$id     = $_POST['id'];
	$bill   = $_POST['bill'];
	$amnt   = $_POST['amnt'];
	$dtdue  = $_POST['dtdue'];
	$dtpaid = $_POST['dtpaid'];
	$notes  = $_POST['notes'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  	$sql = "UPDATE mar
					SET `bill` = :bill, `amnt` = :amnt, `dtdue` = :dtdue, `dtpaid` = :dtpaid, `notes` = :notes
					WHERE `id` = :id";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(array(':bill' => $bill, ':amnt' => $amnt, ':dtdue' => $dtdue, ':dtpaid' => $dtpaid,
				':notes' => $notes, ':id' => $id,));
				if( $stmt !==false){
				//Database::disconnect();
  				Database::disconnect();
            echo "<div class='success-message pull-right'><h1>Successfull activity</h1><h2>Entry No. '" . $id . "' Name '" . $bill . "' Updated</h2>
            <p><a href=\"marview.php\">Back to March</a></p></div>";
				} else { print('no go'); }
}
?>
<?php
if( isset( $_POST['submit_mar'])){
	?>
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
$id = $_POST['id'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM mar WHERE id = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($id));
				$data = $q->fetch(PDO::FETCH_ASSOC);

				if( !empty ($data['bill'])) $bill  = $data['bill'];
				if( !empty ($data['amnt'])) $amnt   = $data['amnt'];
				if( !empty ($data['dtdue'])) $dtdue  = $data['dtdue'];
				if( !empty ($data['dtpaid'])) $dtpaid = $data['dtpaid'];
				if( !empty ($data['notes'])) $notes    = $data['notes'];
		?>

                 <tr>
                <td><form action="" method="POST"><input type="text" name="bill" value="<?php echo $bill; ?>"></td>
                <td><input type="text" name="amnt" value="<?php echo $amnt; ?>"></td>
		        <td><input type="text" name="dtdue" value="<?php echo $dtdue; ?>"></td>
		        <td><input type="text" name="dtpaid" value="<?php echo $dtpaid; ?>"></td>
                <td><input type="text" name="notes"   value="<?php echo $notes; ?>"></td>
                <td class="noprint">
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                    <input type="submit" name="newval_mar" value="update"></form></td>
                </tr>
                </tbody>
            </table>
<?php
    }
?>

<?php
/*
 * apr
 */

if( isset( $_POST['newval_apr'])){
	$id     = $_POST['id'];
	$bill   = $_POST['bill'];
	$amnt   = $_POST['amnt'];
	$dtdue  = $_POST['dtdue'];
	$dtpaid = $_POST['dtpaid'];
	$notes  = $_POST['notes'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  	$sql = "UPDATE apr
					SET `bill` = :bill, `amnt` = :amnt, `dtdue` = :dtdue, `dtpaid` = :dtpaid, `notes` = :notes
					WHERE `id` = :id";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(array(':bill' => $bill, ':amnt' => $amnt, ':dtdue' => $dtdue, ':dtpaid' => $dtpaid,
				':notes' => $notes, ':id' => $id,));
				if( $stmt !==false){
				//Database::disconnect();
  				Database::disconnect();
            echo "<div class='success-message pull-right'><h1>Successfull activity</h1><h2>Entry No. '" . $id . "' Name '" . $bill . "' Updated</h2>
            <p><a href=\"aprview.php\">Back to April</a></p></div>";
				} else { print('no go'); }
}
?>
<?php
if( isset( $_POST['submit_apr'])){
	?>
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
$id = $_POST['id'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM apr WHERE id = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($id));
				$data = $q->fetch(PDO::FETCH_ASSOC);

				if( !empty ($data['bill'])) $bill  = $data['bill'];
				if( !empty ($data['amnt'])) $amnt   = $data['amnt'];
				if( !empty ($data['dtdue'])) $dtdue  = $data['dtdue'];
				if( !empty ($data['dtpaid'])) $dtpaid = $data['dtpaid'];
				if( !empty ($data['notes'])) $notes    = $data['notes'];
		?>

                <tr>
                <td><form action="" method="POST"><input type="text" name="bill" value="<?php echo $bill; ?>"></td>
                <td><input type="text" name="amnt" value="<?php echo $amnt; ?>"></td>
		        <td><input type="text" name="dtdue" value="<?php echo $dtdue; ?>"></td>
		        <td><input type="text" name="dtpaid" value="<?php echo $dtpaid; ?>"></td>
                <td><input type="text" name="notes"   value="<?php echo $notes; ?>"></td>
                <td class="noprint">
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                    <input type="submit" name="newval_apr" value="update"></form></td>
                </tr>
                </tbody>
            </table>
<?php
    }
?>

<?php
/*
 * may
 */

if( isset( $_POST['newval_may'])){
	$id     = $_POST['id'];
	$bill   = $_POST['bill'];
	$amnt   = $_POST['amnt'];
	$dtdue  = $_POST['dtdue'];
	$dtpaid = $_POST['dtpaid'];
	$notes  = $_POST['notes'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  	$sql = "UPDATE may
					SET `bill` = :bill, `amnt` = :amnt, `dtdue` = :dtdue, `dtpaid` = :dtpaid, `notes` = :notes
					WHERE `id` = :id";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(array(':bill' => $bill, ':amnt' => $amnt, ':dtdue' => $dtdue, ':dtpaid' => $dtpaid,
				':notes' => $notes, ':id' => $id,));
				if( $stmt !==false){
				//Database::disconnect();
  				Database::disconnect();
            echo "<div class='success-message pull-right'><h1>Successfull activity</h1><h2>Entry No. '" . $id . "' Name '" . $bill . "' Updated</h2>
            <p><a href=\"mayview.php\">Back to May</a></p></div>";
				} else { print('no go'); }
}
?>
<?php
if( isset( $_POST['submit_may'])){
	?>
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
$id = $_POST['id'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM may WHERE id = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($id));
				$data = $q->fetch(PDO::FETCH_ASSOC);

				if( !empty ($data['bill'])) $bill  = $data['bill'];
				if( !empty ($data['amnt'])) $amnt   = $data['amnt'];
				if( !empty ($data['dtdue'])) $dtdue  = $data['dtdue'];
				if( !empty ($data['dtpaid'])) $dtpaid = $data['dtpaid'];
				if( !empty ($data['notes'])) $notes    = $data['notes'];
		?>

                <tr>
                <td><form action="" method="POST"><input type="text" name="bill" value="<?php echo $bill; ?>"></td>
                <td><input type="text" name="amnt" value="<?php echo $amnt; ?>"></td>
		        <td><input type="text" name="dtdue" value="<?php echo $dtdue; ?>"></td>
		        <td><input type="text" name="dtpaid" value="<?php echo $dtpaid; ?>"></td>
                <td><input type="text" name="notes"   value="<?php echo $notes; ?>"></td>
                <td class="noprint">
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                    <input type="submit" name="newval_may" value="update"></form></td>
                </tr>
                </tbody>
            </table>
<?php
    }
?>

<?php
/*
 * jun
 */

if( isset( $_POST['newval_jun'])){
	$id     = $_POST['id'];
	$bill   = $_POST['bill'];
	$amnt   = $_POST['amnt'];
	$dtdue  = $_POST['dtdue'];
	$dtpaid = $_POST['dtpaid'];
	$notes  = $_POST['notes'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  	$sql = "UPDATE jun
					SET `bill` = :bill, `amnt` = :amnt, `dtdue` = :dtdue, `dtpaid` = :dtpaid, `notes` = :notes
					WHERE `id` = :id";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(array(':bill' => $bill, ':amnt' => $amnt, ':dtdue' => $dtdue, ':dtpaid' => $dtpaid,
				':notes' => $notes, ':id' => $id,));
				if( $stmt !==false){
				//Database::disconnect();
  				Database::disconnect();
            echo "<div class='success-message pull-right'><h1>Successfull activity</h1><h2>Entry No. '" . $id . "' Name '" . $bill . "' Updated</h2>
            <p><a href=\"junview.php\">Back to June</a></p></div>";
				} else { print('no go'); }
}
?>
<?php
if( isset( $_POST['submit_jun'])){
	?>
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
$id = $_POST['id'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM jun WHERE id = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($id));
				$data = $q->fetch(PDO::FETCH_ASSOC);

				if( !empty ($data['bill'])) $bill  = $data['bill'];
				if( !empty ($data['amnt'])) $amnt   = $data['amnt'];
				if( !empty ($data['dtdue'])) $dtdue  = $data['dtdue'];
				if( !empty ($data['dtpaid'])) $dtpaid = $data['dtpaid'];
				if( !empty ($data['notes'])) $notes    = $data['notes'];
		?>

                <tr>
                <td><form action="" method="POST"><input type="text" name="bill" value="<?php echo $bill; ?>"></td>
                <td><input type="text" name="amnt" value="<?php echo $amnt; ?>"></td>
		        <td><input type="text" name="dtdue" value="<?php echo $dtdue; ?>"></td>
		        <td><input type="text" name="dtpaid" value="<?php echo $dtpaid; ?>"></td>
                <td><input type="text" name="notes"   value="<?php echo $notes; ?>"></td>
                <td class="noprint">
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                    <input type="submit" name="newval_jun" value="update"></form></td>
                </tr>
                </tbody>
            </table>
<?php
    }
?>

<?php
/*
 * jul
 */

if( isset( $_POST['newval_jul'])){
	$id     = $_POST['id'];
	$bill   = $_POST['bill'];
	$amnt   = $_POST['amnt'];
	$dtdue  = $_POST['dtdue'];
	$dtpaid = $_POST['dtpaid'];
	$notes  = $_POST['notes'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  	$sql = "UPDATE jul
					SET `bill` = :bill, `amnt` = :amnt, `dtdue` = :dtdue, `dtpaid` = :dtpaid, `notes` = :notes
					WHERE `id` = :id";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(array(':bill' => $bill, ':amnt' => $amnt, ':dtdue' => $dtdue, ':dtpaid' => $dtpaid,
				':notes' => $notes, ':id' => $id,));
				if( $stmt !==false){
				//Database::disconnect();
  				Database::disconnect();
            echo "<div class='success-message pull-right'><h1>Successfull activity</h1><h2>Entry No. '" . $id . "' Name '" . $bill . "' Updated</h2>
            <p><a href=\"julview.php\">Back to July</a></p></div>";
				} else { print('no go'); }
}
?>
<?php
if( isset( $_POST['submit_jul'])){
	?>
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
$id = $_POST['id'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM jul WHERE id = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($id));
				$data = $q->fetch(PDO::FETCH_ASSOC);

				if( !empty ($data['bill'])) $bill  = $data['bill'];
				if( !empty ($data['amnt'])) $amnt   = $data['amnt'];
				if( !empty ($data['dtdue'])) $dtdue  = $data['dtdue'];
				if( !empty ($data['dtpaid'])) $dtpaid = $data['dtpaid'];
				if( !empty ($data['notes'])) $notes    = $data['notes'];
		?>

                <tr>
                <td><form action="" method="POST"><input type="text" name="bill" value="<?php echo $bill; ?>"></td>
                <td><input type="text" name="amnt" value="<?php echo $amnt; ?>"></td>
		        <td><input type="text" name="dtdue" value="<?php echo $dtdue; ?>"></td>
		        <td><input type="text" name="dtpaid" value="<?php echo $dtpaid; ?>"></td>
                <td><input type="text" name="notes"   value="<?php echo $notes; ?>"></td>
                <td class="noprint">
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                    <input type="submit" name="newval_jul" value="update"></form></td>
                </tr>
                </tbody>
            </table>
<?php
    }
?>

<?php
/*
 * aug
 */

if( isset( $_POST['newval_aug'])){
	$id     = $_POST['id'];
	$bill   = $_POST['bill'];
	$amnt   = $_POST['amnt'];
	$dtdue  = $_POST['dtdue'];
	$dtpaid = $_POST['dtpaid'];
	$notes  = $_POST['notes'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  	$sql = "UPDATE aug
					SET `bill` = :bill, `amnt` = :amnt, `dtdue` = :dtdue, `dtpaid` = :dtpaid, `notes` = :notes
					WHERE `id` = :id";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(array(':bill' => $bill, ':amnt' => $amnt, ':dtdue' => $dtdue, ':dtpaid' => $dtpaid,
				':notes' => $notes, ':id' => $id,));
				if( $stmt !==false){
				//Database::disconnect();
  				Database::disconnect();
            echo "<div class='success-message pull-right'><h1>Successfull activity</h1><h2>Entry No. '" . $id . "' Name '" . $bill . "' Updated</h2>
            <p><a href=\"augview.php\">Back to August</a></p></div>";
				} else { print('no go'); }
}
?>
<?php
if( isset( $_POST['submit_aug'])){
	?>
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
$id = $_POST['id'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM aug WHERE id = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($id));
				$data = $q->fetch(PDO::FETCH_ASSOC);

				if( !empty ($data['bill'])) $bill  = $data['bill'];
				if( !empty ($data['amnt'])) $amnt   = $data['amnt'];
				if( !empty ($data['dtdue'])) $dtdue  = $data['dtdue'];
				if( !empty ($data['dtpaid'])) $dtpaid = $data['dtpaid'];
				if( !empty ($data['notes'])) $notes    = $data['notes'];
		?>

                <tr>
                <td><form action="" method="POST"><input type="text" name="bill" value="<?php echo $bill; ?>"></td>
                <td><input type="text" name="amnt" value="<?php echo $amnt; ?>"></td>
		        <td><input type="text" name="dtdue" value="<?php echo $dtdue; ?>"></td>
		        <td><input type="text" name="dtpaid" value="<?php echo $dtpaid; ?>"></td>
                <td><input type="text" name="notes"   value="<?php echo $notes; ?>"></td>
                <td class="noprint">
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                    <input type="submit" name="newval_aug" value="update"></form></td>
                </tr>
                </tbody>
            </table>
<?php
    }
?>

<?php
/*
 * sep
 */

if( isset( $_POST['newval_sep'])){
	$id     = $_POST['id'];
	$bill   = $_POST['bill'];
	$amnt   = $_POST['amnt'];
	$dtdue  = $_POST['dtdue'];
	$dtpaid = $_POST['dtpaid'];
	$notes  = $_POST['notes'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  	$sql = "UPDATE sep
					SET `bill` = :bill, `amnt` = :amnt, `dtdue` = :dtdue, `dtpaid` = :dtpaid, `notes` = :notes
					WHERE `id` = :id";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(array(':bill' => $bill, ':amnt' => $amnt, ':dtdue' => $dtdue, ':dtpaid' => $dtpaid,
				':notes' => $notes, ':id' => $id,));
				if( $stmt !==false){
				//Database::disconnect();
  				Database::disconnect();
            echo "<div class='success-message pull-right'><h1>Successfull activity</h1><h2>Entry No. '" . $id . "' Name '" . $bill . "' Updated</h2>
            <p><a href=\"sepview.php\">Back to September</a></p></div>";
				} else { print('no go'); }
}
?>
<?php
if( isset( $_POST['submit_sep'])){
	?>
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
$id = $_POST['id'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM sep WHERE id = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($id));
				$data = $q->fetch(PDO::FETCH_ASSOC);

				if( !empty ($data['bill'])) $bill  = $data['bill'];
				if( !empty ($data['amnt'])) $amnt   = $data['amnt'];
				if( !empty ($data['dtdue'])) $dtdue  = $data['dtdue'];
				if( !empty ($data['dtpaid'])) $dtpaid = $data['dtpaid'];
				if( !empty ($data['notes'])) $notes    = $data['notes'];
		?>

                 <tr>
                <td><form action="" method="POST"><input type="text" name="bill" value="<?php echo $bill; ?>"></td>
                <td><input type="text" name="amnt" value="<?php echo $amnt; ?>"></td>
		        <td><input type="text" name="dtdue" value="<?php echo $dtdue; ?>"></td>
		        <td><input type="text" name="dtpaid" value="<?php echo $dtpaid; ?>"></td>
                <td><input type="text" name="notes"   value="<?php echo $notes; ?>"></td>
                <td class="noprint">
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                    <input type="submit" name="newval_sep" value="update"></form></td>
                </tr>
                </tbody>
            </table>
<?php
    }
?>

<?php
/*
 * oct
 */

if( isset( $_POST['newval_oct'])){
	$id     = $_POST['id'];
	$bill   = $_POST['bill'];
	$amnt   = $_POST['amnt'];
	$dtdue  = $_POST['dtdue'];
	$dtpaid = $_POST['dtpaid'];
	$notes  = $_POST['notes'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  	$sql = "UPDATE oct
					SET `bill` = :bill, `amnt` = :amnt, `dtdue` = :dtdue, `dtpaid` = :dtpaid, `notes` = :notes
					WHERE `id` = :id";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(array(':bill' => $bill, ':amnt' => $amnt, ':dtdue' => $dtdue, ':dtpaid' => $dtpaid,
				':notes' => $notes, ':id' => $id,));
				if( $stmt !==false){
				//Database::disconnect();
  				Database::disconnect();
            echo "<div class='success-message pull-right'><h1>Successfull activity</h1><h2>Entry No. '" . $id . "' Name '" . $bill . "' Updated</h2>
            <p><a href=\"octview.php\">Back to October</a></p></div>";
				} else { print('no go'); }
}
?>
<?php
if( isset( $_POST['submit_oct'])){
	?>
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
$id = $_POST['id'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM oct WHERE id = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($id));
				$data = $q->fetch(PDO::FETCH_ASSOC);

				if( !empty ($data['bill'])) $bill  = $data['bill'];
				if( !empty ($data['amnt'])) $amnt   = $data['amnt'];
				if( !empty ($data['dtdue'])) $dtdue  = $data['dtdue'];
				if( !empty ($data['dtpaid'])) $dtpaid = $data['dtpaid'];
				if( !empty ($data['notes'])) $notes    = $data['notes'];
		?>

                <tr>
                <td><form action="" method="POST"><input type="text" name="bill" value="<?php echo $bill; ?>"></td>
                <td><input type="text" name="amnt" value="<?php echo $amnt; ?>"></td>
		        <td><input type="text" name="dtdue" value="<?php echo $dtdue; ?>"></td>
		        <td><input type="text" name="dtpaid" value="<?php echo $dtpaid; ?>"></td>
                <td><input type="text" name="notes"   value="<?php echo $notes; ?>"></td>
                <td class="noprint">
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                    <input type="submit" name="newval_oct" value="update"></form></td>
                </tr>
                </tbody>
            </table>
<?php
    }
?>

<?php
/*
 * nov
 */

if( isset( $_POST['newval_nov'])){
	$id     = $_POST['id'];
	$bill   = $_POST['bill'];
	$amnt   = $_POST['amnt'];
	$dtdue  = $_POST['dtdue'];
	$dtpaid = $_POST['dtpaid'];
	$notes  = $_POST['notes'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  	$sql = "UPDATE nov
					SET `bill` = :bill, `amnt` = :amnt, `dtdue` = :dtdue, `dtpaid` = :dtpaid, `notes` = :notes
					WHERE `id` = :id";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(array(':bill' => $bill, ':amnt' => $amnt, ':dtdue' => $dtdue, ':dtpaid' => $dtpaid,
				':notes' => $notes, ':id' => $id,));
				if( $stmt !==false){
				//Database::disconnect();
  				Database::disconnect();
            echo "<div class='success-message pull-right'><h1>Successfull activity</h1><h2>Entry No. '" . $id . "' Name '" . $bill . "' Updated</h2>
            <p><a href=\"novview.php\">Back to November</a></p></div>";
				} else { print('no go'); }
}
?>
<?php
if( isset( $_POST['submit_nov'])){
	?>
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
$id = $_POST['id'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM nov WHERE id = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($id));
				$data = $q->fetch(PDO::FETCH_ASSOC);

				if( !empty ($data['bill'])) $bill  = $data['bill'];
				if( !empty ($data['amnt'])) $amnt   = $data['amnt'];
				if( !empty ($data['dtdue'])) $dtdue  = $data['dtdue'];
				if( !empty ($data['dtpaid'])) $dtpaid = $data['dtpaid'];
				if( !empty ($data['notes'])) $notes    = $data['notes'];
		?>

                <tr>
                <td><form action="" method="POST"><input type="text" name="bill" value="<?php echo $bill; ?>"></td>
                <td><input type="text" name="amnt" value="<?php echo $amnt; ?>"></td>
		        <td><input type="text" name="dtdue" value="<?php echo $dtdue; ?>"></td>
		        <td><input type="text" name="dtpaid" value="<?php echo $dtpaid; ?>"></td>
                <td><input type="text" name="notes"   value="<?php echo $notes; ?>"></td>
                <td class="noprint">
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                    <input type="submit" name="newval_nov" value="update"></form></td>
                </tr>
                </tbody>
            </table>
<?php
    }
?>

<?php
/*
 * dec
 */

if( isset( $_POST['newval_dec'])){
	$id     = $_POST['id'];
	$bill   = $_POST['bill'];
	$amnt   = $_POST['amnt'];
	$dtdue  = $_POST['dtdue'];
	$dtpaid = $_POST['dtpaid'];
	$notes  = $_POST['notes'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  	$sql = "UPDATE `dec`
					SET `bill` = :bill, `amnt` = :amnt, `dtdue` = :dtdue, `dtpaid` = :dtpaid, `notes` = :notes
					WHERE `id` = :id";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(array(':bill' => $bill, ':amnt' => $amnt, ':dtdue' => $dtdue, ':dtpaid' => $dtpaid,
				':notes' => $notes, ':id' => $id,));
				if( $stmt !==false){
				//Database::disconnect();
  				Database::disconnect();
            echo "<div class='success-message pull-right'><h1>Successfull activity</h1><h2>Entry No. '" . $id . "' Name '" . $bill . "' Updated</h2>
            <p><a href=\"decview.php\">Back to December</a></p></div>";
				} else { print('no go'); }
}
?>
<?php
if( isset( $_POST['submit_dec'])){
	?>
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
$id = $_POST['id'];

		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM `dec` WHERE id = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($id));
				$data = $q->fetch(PDO::FETCH_ASSOC);

				if( !empty ($data['bill'])) $bill  = $data['bill'];
				if( !empty ($data['amnt'])) $amnt   = $data['amnt'];
				if( !empty ($data['dtdue'])) $dtdue  = $data['dtdue'];
				if( !empty ($data['dtpaid'])) $dtpaid = $data['dtpaid'];
				if( !empty ($data['notes'])) $notes    = $data['notes'];
		?>

                <tr>
                <td><form action="" method="POST"><input type="text" name="bill" value="<?php echo $bill; ?>"></td>
                <td><input type="text" name="amnt" value="<?php echo $amnt; ?>"></td>
		        <td><input type="text" name="dtdue" value="<?php echo $dtdue; ?>"></td>
		        <td><input type="text" name="dtpaid" value="<?php echo $dtpaid; ?>"></td>
                <td><input type="text" name="notes"   value="<?php echo $notes; ?>"></td>
                <td class="noprint">
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                    <input type="submit" name="newval_dec" value="update"></form></td>
                </tr>
                </tbody>
            </table>
<?php
    }
?>

</div>
</div>
</div><div class="clearfix"></div>
</body>
</html>
