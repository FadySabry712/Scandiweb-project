<?php 
ob_start();
error_reporting(0);
?>
<?php 
include 'app.php'; 
include 'inc/header.php';
?>

<?php session_start();?>

<?php 
$primary_products = new view_data();
$datas = $primary_products->show_initial_data();

$added_products = new view_added_data();
$added_datas = $added_products->show_added_data();
?>



<?php ob_end_flush();?>
 
        <h1 class="logo"> Product List</h1>
<form action="app.php" method="post">
        <ul class="nav-ul">
            <li> <a href="product add.php" class="button-1" role="button"> ADD </a></li>
            <li> <button type="submit" name="delete_multiple" class="button-1" > MASS DELETE </button></li>
        </ul>
         
    </div>
            <div class="container">
                <hr class="rounded">
            </div>
    </nav>

    <!-- Main Body-->
    <main>
        <div class="container-main"> 
            <?php 
                if(isset($_SESSION['status'])) {
                echo "<h3>" . $_SESSION['status'] . "</h3>";
                unset($_SESSION['status']);
                }
            ?>
        </div>
                
        <div class="container-main">
            <ul class="products">
                <?php  foreach($datas as $item):  ?>
                 <li id="box-1">
                    <input type="checkbox" class=".delete-checkbox" >
                        <?php  echo  $item['SKU']; ?> </br>
                        <?php  echo $item['Name']; ?> </br>
                        <?php  echo $item['Price']; ?> </br>
                        <?php  echo $item['Size']; ?> </br>
                
                </li>
                <li id="box-2">
                    <input type="checkbox" class=".delete-checkbox" id="<?php echo $item['id']; ?>">
                    <label>
                        <?php  echo  $item['SKU']; ?> </br>
                        <?php  echo $item['Name']; ?> </br>
                        <?php  echo $item['Price']; ?> </br>
                        <?php  echo $item['Size']; ?>  </br>

                    </label>
                </li> 
                <li id="box-3">
                    <input type="checkbox" class=".delete-checkbox" id="<?php echo $item['id']; ?>">
                        <?php  echo  $item['SKU']; ?> </br>
                        <?php  echo $item['Name']; ?> </br>
                        <?php  echo $item['Price']; ?> </br>
                        <?php  echo $item['Size']; ?> </br></label>
                </li>
                <li id="box-4">
                    <input type="checkbox" class=".delete-checkbox" id="<?php echo $item['id'];  ?>" >
                        <?php  echo  $item['SKU']; ?> </br> 
                        <?php echo $item['Name']; ?> </br>
                        <?php  echo $item['Price']; ?> </br>
                        <?php  echo $item['Size']; ?> </br></label>
                </li>
                <?php  endforeach; ?>

                <?php 
                foreach($added_datas as $data): 
                    error_reporting(0);?>
                    <li id="box-5">
                    <input type="checkbox" class=".delete-checkbox" name="delete_id[]" value="<?= $data['id']?>"></br>
                        <?php  echo $data['SKU']; ?> </br>
                        <?php  echo $data['Name']; ?> </br>
                        <?php  echo $data['Price']; ?> </br> 
                        

                    <?php
                        if ($data['Size'] > 0)
                            echo "Size: " . $data['Size'] . " MB";
                        if ($data['Weight'] > 0)
                            echo "Weight: " . $data['Weight'] . " KG";
                        if ($data['Height'] && $data['Width'] && $data['Lenght']> 0)
                            echo "Dimensions: " . $data['Height'] ."x". $data['Width'] ."x". $data['Lenght'] . "CM";
                               
                     ?>
                      
                    </li>
                    <?php endforeach; 
                    ?>  
            </ul>
        
                   
        </div>
                <div class="container">
                  <hr class="rounded">
        </div>
</form>
</main>
<?php ob_end_flush();?>
<?php
include 'inc/footer.php'; ?>