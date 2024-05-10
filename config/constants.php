
<?php

    // Start session 
    session_start();

    define("SITEURL",  'http://localhost/CS_260/pages/');
    define("MAINSITEURL",  'http://localhost/CS_260/pages/');

    // Selecting a database
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'faculty_recruitment';
    $conn = new mysqli($server, $username, $password, $database , 3306) or die("not connected");
    // echo "connected" ; 


?>