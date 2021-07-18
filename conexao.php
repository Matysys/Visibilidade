	
<?php
      try{
           $server = "localhost";
           $username = "root";
           $password = "";
           $db = "loja";

           $conn = new PDO("mysql:host=$server;dbname=$db", $username, $password);
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo json_encode("Connection failed: " . $e->getMessage());
  return;
}      



?>
