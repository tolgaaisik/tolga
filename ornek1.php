<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	.kutu{
		width: 20px;
		height: 20px;
		background-color: orange;
		float: left;
		margin: 1px;
		padding: 25px;
	}
	</style>
</head>
 
<body>
<?php
	for($i=1;$i<=20;$i++){
	?>
	<div class="kutu"><?php echo "$i" ?></div>
	<?php
	}
	?>
</body>
</html>