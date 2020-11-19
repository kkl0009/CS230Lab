<?php

$servename = "localhost";
$DBuname = "root";
$DBPass = "r00tP@ss!230";
$DBname = "group6";

$conn = mysqli_connect($servename, $DBuname, $DBPass, $DBname);

if (!$conn) {
    die("Connection failed...".mysqli_connect_error());
    # code...
}
