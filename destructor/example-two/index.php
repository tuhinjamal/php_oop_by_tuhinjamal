<?php
class DatabaseConnection{
    private $connection;
    public function __construct($host,$username,$password,$database){
        $this->connection = mysqli_connect($host, $username,$password,$database);
            if (!$this->connection){
                die('Error:'. mysqli_connect_error());
            }
        
    }

    public function query($sql){
        $result = mysqli_query($this->connection,$sql);
        if(!$result){
            die('Error'.mysql_error($this->connection));
        }
    return $result;

    }

    public function __destruct(){
        mysqli_close($this->connection);
    }

}

$db = new DatabaseConnection('localhost','root','','tajmahal');

 $result = $db->query('SELECT * FROM users');
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}