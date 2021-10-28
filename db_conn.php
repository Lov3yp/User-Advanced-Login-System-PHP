<?php

$sname= "localhost";
$unmae= "aimlityc_proje2";
$password = "*e9_wQ7K31y+";

$db_name = "aimlityc_proje2";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Bağlantı hatası!";
}

