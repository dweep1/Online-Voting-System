<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style/design.css">
</head>
<body>
<div id="main">
	<div class="aa">
	    <h1>Online Voting System</h1>
		<form action="" method="post">
			<input type="submit" name="messi" value="Messi"/>
			<input type="submit" name="ronaldo" value="Ronaldo"/>
			<input type="submit" name="neymar" value="Neymar"/>
		</form>
	</div>

 
<?php
    include 'detail.php';
    include 'connection.php';
    if (isset($_COOKIE['rahmat'])) {
    	echo "<p class='color'>You can not vote again...</p>";
    }else {

    if (isset($_POST['messi'])) {

    	$name  = 'rahmat';
        $value = 'true';
    	setcookie($name,$value,time()+(1*365*24*60*60));

     	$messi = mysqli_query($con,"UPDATE football SET messi= messi+1");
     	if ($messi) {
     		echo "<div class='message'>Your vote is cast for messi!!</div>";
     	}
     }
     if (isset($_POST['ronaldo'])) {

     	$name  = 'rahmat';
        $value = 'true';
    	setcookie($name,$value,time()+(1*365*24*60*60));

     	$ronaldo = mysqli_query($con,"UPDATE football SET ronaldo= ronaldo+1");
     	if ($ronaldo) {
     		echo "<div class='message'>Your vote is cast for ronaldo!!</div>";
     	}
     }
     if (isset($_POST['neymar'])) {

     	$name  = 'rahmat';
        $value = 'true';
    	setcookie($name,$value,time()+(1*365*24*60*60));

     	$neymar = mysqli_query($con,"UPDATE football SET neymar= neymar+1");
     	if ($neymar) {
     		echo "<div class='message'>Your vote is cast for neymar!!</div>";
     	}
     } 

    } 
?>

</div>
</body>
</html>