

    <?php

    /* Database credentials. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    define('DB_SERVER', 'sql6.freesqldatabase.com');

    define('DB_USERNAME', 'sql6491278');

    define('DB_PASSWORD', '6IebBW9dyx');
    //define('DB_PASSWORD', '&W5gj7SgT8{Fr5/[');

    define('DB_NAME', 'sql6491278');



    /* Attempt to connect to MySQL database */

    $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);



    // Check connection

    if($mysqli === false){

        die("ERROR: Could not connect. " . $mysqli->connect_error);

    }

    ?>

