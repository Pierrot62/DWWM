<?php
echo'
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>CRUD</title>';

	if (file_exists("./CSS/style.css"))
	{

	echo '<link rel="stylesheet" href="./CSS/style.css">';
	
	}else
	{
		echo '<link rel="stylesheet" href="../../CSS/style.css">';

	};

echo'

	<script src="./JS/script.js"></script>
</head>';

echo'<body>';
	