<?php 
ob_start();
include 'inc/header.php'; 
error_reporting(0);
?>
<?php include 'app.php'; 
    include_once 'config/serverside.php';
?>
<?php 
if(isset($_POST['submit']))
{
    $validation = new userValidator($_POST);
    $errors = $validation->validateForm();
}

?>

        <h1 class="logo"> Product Add</h1>
        <ul class="nav-ul">
        
            <li></li>
            <li> <a href="product add.php" class="button-1" role="button" > CANCEL </a></li>
        </ul>
         
    </div>
        <div class="container">
            <hr class="rounded">
        </div>
</nav>



<!-- MAIN-->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"  id="product_form" >
    <div class="container">


        <label for="SKU">SKU:</label>
        <input type="text" id="SKU" name="SKU" placeholder="" class="" value="<?php echo htmlspecialchars($_POST['SKU']) ?? '' ?>">  
        <div class="error">
            <?php echo $errors['SKU'] ?? '' ?>
        </div>
        
        <?php 
         
        ?>

        <div class="">
            <?php 
             
            ?>

        </div>

        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name" placeholder="" value=" <?php echo htmlspecialchars($_POST['Name']) ?? '' ?>"> <br>
        <div class="error">
            <?php echo $errors['Name'] ?? '' ?>
        </div>

        <label for="Price">Price:</label>
        <input type="text" id="Price" name="Price" placeholder="" value="<?php echo htmlspecialchars($_POST['Price']) ?? '' ?>"> <br>
        <div class="error">
            <?php echo $errors['Price'] ?? '' ?>
        </div>
        
    
    </div>
    
        </div>

 <div class="container">
    <label for="productSelect">Product Select:</label>
    <select name="productSelect" id="productType" required="required">
        <option value="type" >CHOOSE YOUR TYBE</option>
        <option >DVD</option>
        <option >Book</option>
        <option >Furniture</option>

    </select>
    
    <div class="container" id="new"></div>

    <input type="submit" name="submit" id="submit" value="SAVE" class="button-1" >
    </form> 
    
    

        <script>
         $(document).ready(function()
        {

                 $('select#productType').change(function()
                {
                     var selected = $(this).val();
                     if(selected == 'DVD'){
                         $('#new').html('<div class="container" id="new"><label for="Size">DVD (MB):</label><input type="text"  id="Size" name="Size" placeholder="please provide size in MBs format" required><div class="error"><?php echo $errors['Size'] ?? '' ?></div></div>');
                    } else if (selected == 'Book'){
                        $('#new').html('<div class="container" id="new"><label for="Weight">WEIGHT (KG):</label><input type="text" id="Book" name="Weight" placeholder="please provide weight in KGs format" required><div class="error"><?php echo $errors['Weight'] ?? '' ?></div></div>');
                     } else if (selected == 'Furniture'){
                         $('#new').html('<div class="container" id="new"><label for="Height">HEIGHT (CM):</label><input type="text" id="Furniture" name="Height" placeholder="please provide dimensions HxWxL format" required><div class="error"><?php echo $errors['Height'] ?? '' ?></div><br><label for="Width">WIDTH (CM):</label><input type="text" id="Furniture" name="Width" placeholder="please provide dimensions HxWxL format" required><br><label for="Lenght">LENGTH (CM):</label><input type="text" id="Furniture" name="Lenght" placeholder="please provide dimensions HxWxL format" required></div>');
                     } else {
                      $('#new').toggle();
                  }
                 });
                        
        })
        
        

     </script>
   

    
<!-- Divider-->
<div class="container">
    <hr class="rounded">
</div>

</div>



<?php include 'inc/footer.php'; ?>