<?php  
$fiyat=120;
	$kdv=($fiyat*18)/100;
	$toplam=$kdv+$fiyat;
	echo "toplam". $toplam;

	if($toplam >100) {
		echo "kargo bedava";
		# code...
	}
	else{
		echo "kargo ücretli";
	}
	
	
	?>