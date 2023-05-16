<?php 
ob_start();
ob_end_flush();
?>
<?php 
include_once 'config/database.php';
include_once 'config/serverside.php';
//include_once 'product add.php';
?>



<?php
class view_data extends initial_data 
{
  public function show_initial_data()
    {
       $datas = $this->get_initial_data();
       return $datas;
    }
}


class view_added_data extends added_data 
{
    public function show_added_data()
      {
         $added_datas = $this->get_added_data();
         return $added_datas;
      }
  }
  //$query = "DELETE FROM `added_data` WHERE `added_data`.`id` ='$extract_id'";
?>



<?php
$connect = new dataBase();
if(isset($_POST['delete_multiple'])) 
{
    if(isset($_POST['delete_id']))
    {
        foreach($_POST['delete_id'] as $id)
        {
            $query = "DELETE FROM `added_data` WHERE `id`='$id'";
            $query_run = mysqli_query($connect->connect(), $query);
            
            if($query_run)
            {
                 $_SESSION['status'] = "Data Deleted Successfuly";
                 header('location: index.php');
            }
                else 
            {
                $_SESSION['status'] = "Data Not Deleted ";
                header('location: index.php');
            }
        }

    }
    /*
    $all_id = $_POST['delete_id'];
    $extract_id = implode(',', $all_id);
   
    
    $query = "DELETE FROM `added_data` WHERE `id` IN ('$extract_id')";
    
    
    $query_run = mysqli_query($connect->connect(), $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Deleted Successfuly";
        header('location: index.php');
    }
    else 
    {
        $_SESSION['status'] = "Data Not Deleted ";
        header('location: index.php');
    }*/
}
?>

<?php 

?>


<?php 
$connection = new dataBase();

    $SKU = $Name = $Price = $Size = $Book = $Height = $Width = $Lenght =  '';
    $SKU_Err = $Name_Err = $Price_Err = $Size_Err = $Height_Err = $Width_Err = $Lenght_Err=  '';

// form submit 
    if(isset($_POST['submit']))
    

 //validate SKU
    if(empty($_POST['SKU'])){
    $SKU_Err = 'SKU is required';
     } 
     else {
     $SKU = filter_input(INPUT_POST, 'SKU', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     /*if (!preg_match("/^[-a-z0-9]*$/",$SKU)) {  
        $SKU_Err = "Only alphabets and numbers are allowed";  
    }  */
        }

    //validate name 
    if(empty($_POST['Name'])){
    $Name_Err = 'Name is required';
    } 
    else {
     $Name = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     /*if (!preg_match("/^[-a-z0-9]*$/",$Name_Err)) {  
        $Name_Err = "Only alphabets  are allowed";  
    }  */
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
        $Book_Err = 'Weight is required';}
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
        $Width_Err = 'Width is required';}
        else{
        $Width = filter_input(INPUT_POST, 'Width', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        //validate length
    if(empty($_POST['Lenght'])){
        $Lenght_Err = 'Lenght is required';}
        else{
        $Lenght = filter_input(INPUT_POST, 'Lenght', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        $insert = new added_data(); 
        if(empty($SKU_Err) && empty($Name_Err) && empty($Price_Err)){
            $insert->set_values($SKU, $Name, $Price, $Size, $Book, $Height, $Width,$Lenght);
        }

/*
    if(empty($SKU_Err) && empty($Name_Err) && empty($Price_Err)){
    // add to database 
     $sql = 
     "INSERT INTO added_data (SKU, Name, Price, Size, Weight, Height, Width, Lenght)
      VALUES ('$SKU', '$Name', '$Price', '$Size', '$Book', ' $Height', '$Width', '$Lenght')";

    if(mysqli_query($connection->connect(), $sql)) {
        //true 
        header('location: index.php');
        ob_end_flush();
    } else {
        //error
        echo 'Error:' . mysqli_error($connection->connect());
    }
}   */
?>


<?php 
$connection = new dataBase();


?>
