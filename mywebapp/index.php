<html>
  <head>
    <title>PHP test</title>
  </head>
  <body>
    <?php
      $conn = new mysqli('sql_container', 'root', 'kinddevil', 'details');
      if($conn->connect_error){
        echo "\nError: Unable to connect: " . $conn->connect_error;
      }
      else {
        echo "Connected to the database successfully";
      }
    ?>
  </body>
</html>
