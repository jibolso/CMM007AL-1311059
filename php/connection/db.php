<?php
/**
 * Created by PhpStorm.
 * User: hackathon
 * Date: 26/04/2016
 * Time: 01:40
 */

/**
 * Creating the database connection constants
 */
define("DBSERVER","ap-cdbr-azure-east-c.cloudapp.net");
define("DB_USERNAME", "bc3cd652a184fb");
define("DB_PASSWORD", "b42f7fca");
define("DB_DATABASE", "CMM007ALDB-1311059");

//creating the database connection
$db = mysqli_connect(DBSERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

?>
