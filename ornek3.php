

<?php
$isim=$email=$cinsiyet=$yorum=$website="";
if ($_SERVER["$REQUEST_METHOD"]=="POST") {
	$isim=test_input($_POST["isim"]);
	$email=input($_POST["email"]);
	$cinsiyet=input($_POST["cinsiyet"]);
	$yorum=input($_POST["yorum"]);
	$website=input($_POST["website"]);

	
}
function test_input($data){
	$data=trim($data);
	$data=stripcslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}

?>


