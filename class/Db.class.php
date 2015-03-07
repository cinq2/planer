<?php
$mysqli = new mysqli("localhost", "Patryk", "123", "tebedu");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";


class Db {
	private $dbLogin = "Patryk";
	private $dbPasswd = "123";
	private $dbName = "tebedu";

	public function __construct ()

}


?>
