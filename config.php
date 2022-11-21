<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'login');
define('DB_SERVER', 'sql12.freemysqlhosting.net');
define('DB_USERNAME', 'sql12579528');
define('DB_PASSWORD', 'ZG6iiuIsMR');
define('DB_NAME', 'sql12579528');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}

?>
