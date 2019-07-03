<!DOCTYPE html>
<html>
<head>
	<title>koşul</title>
</head>
<body>
<div align="center">
<h2> if koşulu</h2>
<form method="post"action"">
<br><br>
<input type="text" name="a"placeholder="1. Sayıyı giriniz" size="25"/><br><br>
<input type="text" name="b"placeholder="2. Sayıyı giriniz"size="25"/>
<br><br>
<button type="submit">Hesapla</button>
</form>
</div>
<?php
//if ($_POST) {
	# code...

$aa=$_POST["a"];
$bb=$_POST["b"];
//echo $aa;
echo "<br>";
//echo $aa+$bb;

}
if ($aa<$bb) {
	echo "a b'den küçüktür.";
	# code...
}
else if ($aa==$bb) {
	echo "a bye eşittir";
	# code...
}
else
{
	echo "a b den büyüktür";
}

?>
</body>
</html>