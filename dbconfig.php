<?php
// Database Configuration

/*
 * Connection for Heroku Clear DB
 */
 $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
 $DB_host = $url["host"];
 $DB_user = $url["user"];
 $DB_pass = $url["pass"];
 $DB_name = substr($url["path"], 1);

// Hostname
define ( 'DB_HOST', $DB_host);
// Username
define ( 'DB_USER', $DB_user );
// Password
define ( 'DB_PASSWORD', $DB_pass );
// Databse Name
define ( 'DB_DB', $DB_name );


/*
 * Connection for local Machine 
 *

// Hostname
define ( 'DB_HOST', 'localhost' );
// Username
define ( 'DB_USER', 'root' );
// Password
define ( 'DB_PASSWORD', '' );
// Databse Name
define ( 'DB_DB', 'dblogin2' );*/
?>