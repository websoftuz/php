<!DOCTYPE html>
<html>
<head>
  <title>Forma</title>
</head>
<body>
  <form action="index.php" method="POST">
    Ismingiz: <input type="text" name="name"><br>
    Pochtangiz: <input type="text" name="email"><br>
    <input type="submit" name="submit" value="Jo'natish">
  </form>
</body>
</html>
<?php 
 $name = $_POST['name'];
 $email = $_POST['email'];

 echo "Salom ".$name;
