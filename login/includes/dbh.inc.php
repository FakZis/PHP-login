<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "catch_ideas_login";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Verbindung nicht m&ouml;glich: ".mysqli_connect_error());
}
