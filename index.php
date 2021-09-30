<?php
  session_start();
  $_SESSION["email"];
  $_SESSION["name"];

  $names = [];
  if(file_exists('names.json')) {
    $json = file_get_contents('names.json');
    $names = json_decode($json, true);
  }
 



?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://kit.fontawesome.com/043e51ac62.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
     
    <title></title>
</head>
<body>
   
    <form action="addUser.php" method="POST">
    <div class="mt-5 container">
   <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="text" id="in" class="form-control inputMejl" id="exampleFormControlInput1"name="mejl" placeholder="name@example.com" 
  value="<?php echo $_SESSION["email"] ;?>" > 
</div>
<div class="mb-3">
  <label for="Namn" class="form-label">Namn</label>
  <input type="text" id="in"class="inputName form-control" name="namn"placeholder="Förnamn och efternamn" value="<?php echo $_SESSION["name"] ;?>" > 
 



  <button type="submit" name="submit"class="btn btn-info mt-5">Skicka</button>
  </div>
  
  </form>


<?php foreach($names as $namn): ?>

<div class="container mb-3 d-flex justify-content-center">
    <form action="change.php"method="POST">
    <input class="border-none blue" type="text" readonly name="mejl" value="<?php echo  $namn['mejl'] ?>">
    <input class="border-none" type="text" readonly name="namn" value="<?php echo $namn['namn'] ?>">

    <button type="submit" name="submit" class="btn btn-info change" >Ändra</button>
    </form> 
    <form action="delete.php" method="POST">
    <button class="btn btn-danger remove">Ta bort</button>
    </form>
    
    
</div>
<?php endforeach; ?>


   </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>