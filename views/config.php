<?php
// 328/pdo/config.php
// database information


//define constants
define( "DB_DSN", "mysql:dbname=rholterg_grc");
define( "DB_USERNAME", "rholterg_sdev328");
define( "DB_PASSWORD", "S3bast!an1");

try {
    // instantiate a database object
    $dbh = new PDO (DB_DSN, DB_USERNAME, DB_PASSWORD);
    //echo "Still Connected to database";
}
catch(PDOException $e){
    echo $e->getMessage();
}
