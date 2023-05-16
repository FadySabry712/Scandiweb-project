<?php 
ob_start();
ob_end_flush();
?>
<?php
 include_once 'config/database.php'; ?>
<?php 
class initial_data extends dataBase
  {
    protected function get_initial_data()
    {
        $sql = 'SELECT * FROM `initial_data`';
        $result = $this->connect()->query($sql);
        $num_rows = $result->num_rows;
        if($num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
              $data[] = $row;
            }
             return $data;
        }
    } 
  }



  class added_data extends dataBase 
  {
    protected function get_added_data()
    {
        $sql_added = 'SELECT * FROM `added_data`';
        $result_added = $this->connect()->query($sql_added);
        $num_rows_added = $result_added->num_rows;
        if($num_rows_added > 0) 
        {
            while($row_added = $result_added->fetch_assoc())
            {
              $added_data[] = $row_added;
            }
             return $added_data;
        }
    } 

    public function set_values ($SKU, $Name, $Price, $Size, $Book, $Height, $Width, $Lenght)
    {
      $conn = $this->connect();

      //$connection = new dataBase();

        if(mysqli_query($conn, "INSERT INTO added_data (SKU, Name, Price, Size, Weight, Height, Width, Lenght) VALUES ('$SKU', '$Name', '$Price
        ', '$Size', '$Book', ' $Height', '$Width', '$Lenght')")) 
        {
         //true 
          header('location: index.php');
          
        } 
       else 
      {
        //error
        echo 'Error:' . mysqli_error($conn);
      }
    }
      

    }


?>

<?php 

class userValidator
{
  private $data;
  private $errors = [];
private static $fields = ['SKU','Name','Price'];

    public function __construct($post_data) 
    {
      $this->data = $post_data;
    }

    public function validateForm()
    {
      foreach(self::$fields as $field)
      {
        if(!array_key_exists($field, $this->data))
        {
          trigger_error("$field cannot be empty");
          return;
        }
      }
      $this->validateSKU();
      $this->validateName();
      $this->validatePrice();
      
      return $this->errors;
    }

    private function validateSKU()
    {
      $val = trim($this->data['SKU']);

      if(empty($val))
      {
        $this->addError('SKU', 'SKU cannot be empty');
      } else 
      {
        if(!preg_match('/^[A-Za-z0-9]{6,50}$/', $val))
        {
          $this->addError('SKU', 'SKU must be at least 6 chars and alphanumeric');
        }
      }
    }

    private function validateName()
    {
      $val = trim($this->data['Name']);

      if(empty($val))
      {
        $this->addError('Name', 'Name cannot be empty');
      } else 
      {
        if(!preg_match('/^[A-Za-z0-9]{6,20}$/', $val))
        {
          $this->addError('Name', 'Name must be at least 6 chars and alphanumeric');
        }
      }
    }

    private function validatePrice()
    {
      $val = trim($this->data['Price']);

      if(empty($val))
      {
        $this->addError('Price', 'Price cannot be empty');
      } else 
      {
        if(!preg_match('/^[0-9]$/', $val))
        {
          $this->addError('Price', 'Price must be a number ');
        }
      }
    }


    private function addError($key, $val)
    {
      $this->errors[$key] = $val;
    }
}
?>










<?php /*
class Insert extends dataBase {
public $SKU; public $Name; public $Price; public $Size; public $Book; public $Height; public $Width; public $Lenght;
public $SKU_Err; public $Name_Err; public $Price_Err; public $Size_Err; public $Book_Err; public $Height_Err; public $Width_Err; public $Lenght_Err;

public function insert(){
// form submit 
    if(isset($_POST['submit']))

 //validate SKU
 if(empty($_POST['SKU'])){
     $SKU_Err = 'SKU is required';
      } 
      else {
         $SKU = filter_input(INPUT_POST, 'SKU', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
         }

    //validate name 
    if(empty($_POST['Name'])){
    $Name_Err = 'Name is required';
    } 
    else {
     $Name = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    //validate price
    if(empty($_POST['Price'])){
     $Price_Err = 'Price is required';
     } 
     else {
     $Price = filter_input(INPUT_POST, 'Price', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     } 

     //validate Size
    if(empty($_POST['Size'])){
        $Size_Err = 'Size is required';
        } 
        else {
        $Size = filter_input(INPUT_POST, 'Size', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

    //validate Weight
    if(empty($_POST['Weight'])){
        $Book_Err = 'Size is required';}
        else{
        $Book = filter_input(INPUT_POST, 'Weight', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        //validate height
    if(empty($_POST['Height'])){
        $Height_Err = 'hight is required';}
        else{
        $Height = filter_input(INPUT_POST, 'Height', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        //validate Width
    if(empty($_POST['Width'])){
        $Width_Err = 'Size is required';}
        else{
        $Width = filter_input(INPUT_POST, 'Width', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        //validate length
    if(empty($_POST['Lenght'])){
        $Lenght_Err = 'Size is required';}
        else{
        $Lenght = filter_input(INPUT_POST, 'Lenght', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

    

if(empty($SKU_Err) && empty($Name_Err) && empty($Price_Err)){
    // add to database 
    $sql = "INSERT INTO added_data (SKU, Name, Price, Size, Weight, Height, Width, Lenght) VALUES ('$SKU', '$Name', '$Price
    ', '$Size', '$Book', ' $Height', '$Width', '$Lenght')";


$connection = new Insert();

    if(mysqli_query($connection->connect(), $sql)) {
        //true 
        header('location: index.php');
    } else {
        //error
        echo 'Error:' . mysqli_error($connection->connect());
    }
}   
} 
}
 */


 /*
    private function validateSize()
    {
      $val = trim($this->data['Size']);

      if(empty($val))
      {
        $this->addError('Size', 'Size cannot be empty');
      } else 
      {
        if(!preg_match('/^[0-9]$/', $val))
        {
          $this->addError('Size', 'Size must be a number');
        }
      }
    }

    private function validateWeight()
    {
      $val = trim($this->data['Weight']);

      if(empty($val))
      {
        $this->addError('Weight', 'Weight cannot be empty');
      } else 
      {
        if(!preg_match('/^[0-9]$/', $val))
        {
          $this->addError('Weight', 'Weight must be a number');
        }
      }
    }

    private function validateHeight()
    {
      $val = trim($this->data['Height']);

      if(empty($val))
      {
        $this->addError('Height', 'fields cannot be empty');
      } else 
      {
        if(!preg_match('/^[0-9]$/', $val))
        {
          $this->addError('Weight', 'fields must be a number');
        }
      }
    }*/
 ?>