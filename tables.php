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

                <h1>Monthly Bills Due Form Manager</h1>
                <h4><?php echo date('m-d-Y'); ?></h4>

                <div class="nav">
                    <ul class="list-inline">
                    <li><a href="index.php" title="">home</a></li>
                    <li><form action="" method="POST"><input type="text" name="getmont" value="" placeholder="blank demo field"><input type="submit" name="upmonth" value="undefined use"></form></a></li>
                    <li><a href="fillsheet.php" title="">NEW monthly</a></li>
                    </ul>
                    <ul class="list-inline">
                    <li><a href="janview.php" title="">jan</a></li>
                    <li><a href="febview.php" title="">feb</a></li>
                    <li><a href="marview.php" title="">mar</a></li>
                    <li><a href="aprview.php" title="">apr</a></li>
                    <li><a href="mayview.php" title="">may</a></li>
                    <li><a href="junview.php" title="">jun</a></li>
                    <li><a href="julview.php" title="">jul</a></li>
                    <li><a href="augview.php" title="">aug</a></li>
                    <li><a href="sepview.php" title="">sep</a></li>
                    <li><a href="octview.php" title="">oct</a></li>
                    <li><a href="novview.php" title="">nov</a></li>
                    <li><a href="decview.php" title="">dec</a></li>
                    </ul>
                </div>

<?php
    include 'inc/calendar.php';
    $calendar = new Calendar();

    echo $calendar->show();

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
