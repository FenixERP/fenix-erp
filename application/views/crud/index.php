<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<?php
foreach ($css_files as $css) {
	echo "<link rel='stylesheet' href='$css'/>";
}
?>
</head>
<body>


<?php echo $output;?>




<?php
foreach ($js_files as $js) {
	echo "<script src='$js'></script>";
}
?>
</body>
</html>