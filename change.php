<?php
session_start();

$editMejl = $_POST['mejl'] ?? '';
$editNamn = $_POST['namn'] ?? '';



$_SESSION["email"] = $editMejl; 
$_SESSION["name"] = $editNamn; 






// när man trycker skicka ska reset ske
//om inte skicka ska texten stå kvar











header('location: index.php'); 