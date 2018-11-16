<?php
$server="localhost";
	$user  ="root";
	$pass  ="";
	$dbname ="usersdb";
	$con = new mysqli($server,$user,$pass,$dbname);
	if ($con->connect_error)
  {
		echo "db connect error".$con->connect_error;
	}

  /*
  if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
      echo 'We don\'t have mysqli!!!';
  } else {
      echo 'Phew we have it!';
  }


  //$mysqli = mysqli_connect('loclhost', 'root', '', 'usersdb');


  class Dbh
  {
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;


    public function connect()
    {
      $this->servername = "127.0.0.1";
      $this->username = "root";
      $this->password = "";
      $this->dbname = "usersdb";
      $this->charset = "utf8mb4";

  try {
    $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
    $pdo = new PDO($dsn, $this->username, $this->password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  } catch (PDOException $e) {
    echo "Connection failed: ".$e->getMessage();
  }



    }
  }
  */
?>
