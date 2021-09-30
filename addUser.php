<?php

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

// echo $_POST['todoName'];

$namn = $_POST['namn'] ?? '';

$names = $_POST['names'] ?? '';
$mejl = $_POST['mejl'] ?? '';
$namn = trim($namn);


if($namn && $mejl) {
  
  if(file_exists('names.json')) {
    $json = file_get_contents('names.json');
    $namesArray = json_decode($json, true);

    // echo '<pre>';
    // var_dump($namesArray);
    // echo '</pre>';

  } else {
    $namesArray = [];
  }

  $namesArray[] = ['id' => rand(), 'mejl' => $mejl, 'namn' => $namn];
  
file_put_contents('names.json', json_encode($namesArray, JSON_PRETTY_PRINT));

}
echo '<pre>';
var_dump($namesArray);
echo '</pre>';

header('location: index.php'); 