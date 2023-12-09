<!DOCTYPE html>

<?php
 $result=[];
 $row ='';
 $id=-1;
  include('../includes/connection.php'); 
  if (isset($_GET['id'])) {
    // Retrieve the ID from the URL parameter
    $id = $_GET['id'];
   
    $sql = "SELECT * FROM `product` where id ='$id'";
    $result=mysqli_query($con,$sql);
   $row = mysqli_fetch_assoc($result);
  
 }
if(isset($_POST["add"]))
{
 
 
 
$title= $_POST["title"];
$price= $_POST["price"];
$dprice= $_POST["dprice"];
$dis= $_POST["dis"];


$total = count($_FILES['path']['name']);
for( $i=0 ; $i < $total ; $i++ ) {

    //Get the temp file path
    $tmpFilePath = $_FILES['path']['tmp_name'][$i];
 
    //Make sure we have a file path
    if ($tmpFilePath != ""){
      //Setup our new file path
      $dir = "../img/product/";
      $fileName = time().'-'.$_FILES['path']['name'][$i];
      $newFilePath = $dir.$fileName ; //$dir.
 
      //Upload the file into the temp dir
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {

        $sqlImages = "UPDATE `product` SET  `pName`='$title',`price`='$price',`dPrice`='$dprice',`description`='$dis',`path`='$fileName' WHERE id ='$id'";
      
        $resultImage = mysqli_query($con,$sqlImages);
      }
    }
  }

//  $query="INSERT INTO `login`(`email`, `password`) VALUES ('$email','$pass')";
//  mysqli_query($con,$query);
}
?>
<html>
 
<body>


<div   style="background: red;">
  <form  method="post" enctype="multipart/form-data"   >
 
    <h1>Add Product</h1>

    <label  for="email"><b>Title</b></label><br> 
    <input value='<?php echo   $row['pName'] ?>' type="text" placeholder="Enter product title" name="title" required><br>  

    <label  ><b>Price</b></label><br> 
    <input value='<?php echo   $row['price'] ?>' type="text" placeholder="Enter Price" name="price" required><br> 

    <label  ><b>Discounted Price</b></label><br> 
    <input value='<?php echo   $row['dPrice'] ?>' type="text" placeholder="Enter Discounted Price" name="dprice" required><br> 
    <label  ><b>Discription</b></label><br> 
    <input value='<?php echo   $row['description'] ?>' type="text" placeholder="Enter Discription" name="dis" required><br> 
 
                    <label for="User Full Name">Image</label>
                    <input type="file" class="form-control" id="path" style="background: white ;color:black;" placeholder="No file chosen" name="path[]" multiple>
            
    <button name="add" type="submit" class="btn">submit</button>
  </form>
</div>



</body>
</html>