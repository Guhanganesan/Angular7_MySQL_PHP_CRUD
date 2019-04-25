<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
/*
Setting CORS to * will allow your PHP server to accept requests from another domain where the 
Angular 7 server is running from without getting blocked by the browser by reason of the Same Origin Policy. 
In development, you'll be running the PHP server from localhost:8080 port and Angular from localhost:4200 
which are considered as two distinct domains.
*/
// https://www.techiediaries.com/php-angular/

/*
use mydb;
create table policies( id int not null auto_increment, number varchar(20), amount float, primary key(id)); 
*/

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'mydb');

function connect()
{
  $connect = mysqli_connect(DB_HOST ,DB_USER ,DB_PASS ,DB_NAME);

  if (mysqli_connect_errno($connect)) {
    die("Failed to connect:" . mysqli_connect_error());
  }

  mysqli_set_charset($connect, "utf8");

  return $connect;
}

$con = connect();

?>



