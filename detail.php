<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style/design.css">
</head>
<body>
	
</body>
</html>


<?php
    include 'connection.php';
    $detail = mysqli_query($con,"SELECT * FROM football");
    while ($row = mysqli_fetch_array($detail)) {

    	$store1 = $row['messi'];
    	$store2 = $row['ronaldo'];
    	$store3 = $row['neymar'];

    	$result      = $store1 + $store2 + $store3;
    	$per_messi   = round($store1*100/$result).'%';
    	$per_ronaldo = round($store2*100/$result).'%';
    	$per_neymar  = round($store3*100/$result).'%';

    	echo "<div class='records'>
                    <img src='images/messi.jpg'>&nbsp;&nbsp;&nbsp;&nbsp$store1($per_messi)<br>
                    <img src='images/ronaldo.jpg'>&nbsp;&nbsp;&nbsp;&nbsp$store1($per_ronaldo)<br>
                    <img src='images/neymar.jpg'>&nbsp;&nbsp;&nbsp;&nbsp$store1($per_neymar)
    	      </div>";
    }
?>