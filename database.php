<?php 

class dataBase {
    public $DB_HOST;
    public $DB_USER;
    public $DB_PASS;
    public $DB_NAME;


    public function connect() {
        $this->DB_HOST = 'localhost';
        $this->DB_USER = 'fady';
        $this->DB_PASS = '123456';
        $this->DB_NAME = 'frontpage';

        $conn = new mysqli($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME);

        
        return $conn;
    }
}













/*    
$conn->DB_HOST = 'localhost';
$conn->DB_USER = 'fady';
$conn->DB_PASS = '123456';
$conn->DB_NAME = 'frontpage';
*/
/*create connection*/

//$conn = new mysqli($conn->DB_HOST, $conn->DB_USER, $conn->DB_PASS, $conn->DB_NAME);

/* CHECK */

//if($conn->connect_error){
  //  die('connection Failed' . $conn->connect_error);
//}

?> 




