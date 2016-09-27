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

	<form action="fillin.php" method="POST">
		<h3>Monthly Bill Sheet for Filling Month Database</h3>
		<p>Add your information that will apply to every month to create a master table for database. All tables could be rename and factored from this one table.</p>
		<h4>First Half</h4>

  <table class="table">
    <thead>
      <tr>
        <th>Bill</th>
        <th>Amount</th>
        <th>Date Due</th>
		  <th>Date Paid</th>
		  <th>Notes (chk#)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="text" name="bill[]" value="Mortgage"></td>
        <td><input type="text" name="amnt[]" value="$544.11"></td>
		  <td><input type="text" name="dtdue[]" value="5th"></td>
		  <td><input type="text" name="dtpaid[]" value="9-5-16"></td>
        <td><input type="text" name="notes[]" value="Auto Pay"></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value="American Insr"></td>
        <td><input type="text" name="amnt[]" value="7.95"></td>
		  <td><input type="text" name="dtdue[]" value="4th"></td>
		  <td><input type="text" name="dtpaid[]" value="9-10-16"></td>
        <td><input type="text" name="notes[]" value="chk 184"></td>
      </tr>

      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""> </td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
    </tbody>
</table>
Second half
<?php
/*
`id` `bill` `amnt` dtdue`
`dtpaid` `notes` `more`
*/
?>
  <table class="table">
    <thead>
      <tr>
        <th>Bill</th>
        <th>Amount</th>
        <th>Date Due</th>
		<th>Date Paid</th>
		<th>Notes (chk#)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
            <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
      <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
            <tr>
        <td><input type="text" name="bill[]" value=""></td>
        <td><input type="text" name="amnt[]" value=""></td>
		  <td><input type="text" name="dtdue[]" value=""></td>
		  <td><input type="text" name="dtpaid[]" value=""></td>
        <td><input type="text" name="notes[]" value=""></td>
      </tr>
</tbody></table>
<input type="submit" name="upmonth" value="Create Table">
</form>
            </div>
        </div>
    </div><div class="clearfix"></div>
</body>
</html>
