# TSW Monthly
## Overview
* Balance Sheet or Record Keeping of sorts for Monthly payables.
* PHP, HTML5, Responsive
* PDO prepared statements
* Using MySQL - sql table included
* MD5 password ready
* Built for single user but can be adapted
* Great start for any personal bookkeeping
* Easily adaptable to about any PHP script
* Valid HTML5 forms and pages
* A few security functions and sanitizers
* Preset fields for keeping track of bills
* One update-able page for each month
* Register new user is manual (db table `tsw-members` using: tsw-login-register https://github.com/tradesouthwest/tsw-login-register)

## Code Example
```
    	$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  	$sql = "UPDATE jan
					SET `bill` = :bill, `amnt` = :amnt, `dtdue` = :dtdue, `dtpaid` = :dtpaid, `notes` = :notes
					WHERE `id` = :id";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(array(':bill' => $bill, ':amnt' => $amnt, ':dtdue' => $dtdue, ':dtpaid' => $dtpaid,	':notes' => $notes,
					':id' => $id,));
				if( $stmt !==false){
				    //Database::disconnect();
  				    Database::disconnect();
                    echo "<div class='success-message pull-right'><h1>Successfull activity</h1><h2>Entry No. '" . $id . "' Name '" . $bill . "' Updated</h2>
                    <p><a href=\"janview.php\">Back to January</a></p></div>";
				} else { print('no go'); }
```

## Motivation
I had troubles with helping my 85 year old mother keep track of what bills she paid and what bills she 'forgot' to pay. This was my solution.

## Installation
Very basic PHP Apache Server, LAMP style install:
* create a database or just add the 13 tables to an existing MySQL database
   * the sql table is in the `inc` directory; file named `tsw-monthly.sql`
* add files where needed into directory structure
* add settings in file `inc/functions.php` and connection credentials in `inc/dbh.php`
* send donation to Larry... lol :-)

## Usage
* Open a month from menu and add new account information using the "update" button [+]
* Note that the update button column will not print.
* Each month table (spreadsheet) can be printed out using browser print
* Do not forget to log out.
* (login default is in inc/functions.php file) remeber this is open source so change default in PHPMyAdmin and set to MD5 dropdown for password field.

## TO DO
* instatiate spl register for require or includes
* faster return to page after edit... link-less

## Contributors
Open for contributions.

## License
Licensed under Apache Open Source. You can use this script for free for any private or commercial projects.
http://www.apache.org/licenses/LICENSE-2.0
# tsw-monthly
