<!DOCTYPE html>
<html>
<head>
	<title>Konversi Suhu</title>
</head>
<body>
	<form method="post">
<label>Celcius</label>
<input type="number" name="suhu" required >
<input type="submit" name="submit" value="Convert To R">
</form>
</body>
</html>
<?php 
$submit = isset($_POST['submit']);
if ($submit) {
$suhu = $_POST['suhu'];
	$eksekusi=$suhu*0.8;
	echo "hasil $eksekusi °R";
}
?>