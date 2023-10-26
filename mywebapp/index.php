<html>
  <head>
    <title>PHP test</title>
  </head>
  <body>
    <?php
      $dbpassword = getenv("DB_PASSWORD");
      $conn = new mysqli('sql_container', 'root', $dbpassword, 'details');
      if($conn->connect_error){
        echo "\nError: Unable to connect: " . $conn->connect_error;
      } else {
        echo "Connected to the database successfully";
      }
    ?>
  </body>
</html>
