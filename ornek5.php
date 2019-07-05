<?php
$vize=50;
$final=60;
$sonuc=(($vize*40/100)+($final*60/100));
echo "ortalamanız:".$sonuc. "<br>";
if ($sonuc>=50) {
	echo "geçtiniz";
}
else {
	echo "Kaldınız";
}
?>