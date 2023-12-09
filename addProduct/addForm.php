<!DOCTYPE html>

<?php
  include('../includes/connection.php'); 
if(isset($_POST["add"]))
{
 
 
 
$name= $_POST["name"];
$price= $_POST["price"];
$category= $_POST["category"];
$shop= $_POST["shop"];
$dis= $_POST["dis"];
$path= $_POST["path"];
$link=$_POST['link'];

$sqlImages = "INSERT INTO `product`(`name`, `price`, `category`, `description`, `img`, `shop`,`link`) VALUES ('$name','$price','$category','$dis', '$path','$shop','$link')";
     
$resultImage = mysqli_query($con,$sqlImages);
// $total = count($_FILES['path']['name']);
// for( $i=0 ; $i < $total ; $i++ ) {

//     //Get the temp file path
//     $tmpFilePath = $_FILES['path']['tmp_name'][$i];
 
//     //Make sure we have a file path
//     if ($tmpFilePath != ""){
//       //Setup our new file path
//       $dir = "../assets/img/product/";
//       $fileName = time().'-'.$_FILES['path']['name'][$i];
//       $newFilePath = $dir.$fileName ; //$dir.
 
//       //Upload the file into the temp dir
//       if(move_uploaded_file($tmpFilePath, $newFilePath)) {

//         $sqlImages = "INSERT INTO `product`(`name`, `price`, `category`, `description`, `img`, `shop`) VALUES ('$name','$price','$category','$dis', '$fileName','$shop')";
//         $resultImage = mysqli_query($con,$sqlImages);
//       }
//     }
//   }

//  $query="INSERT INTO `login`(`email`, `password`) VALUES ('$email','$pass')";
//  mysqli_query($con,$query);
}
?>
<html>
 
<body>


<div   style="background: red;">
  <form  method="post" enctype="multipart/form-data"   >
 
    <h1>Add Product</h1>

    <label  for="email"><b>Name</b></label><br> 
    <input type="text" placeholder="Enter product name" name="name" required><br>  

    <label  ><b>Price</b></label><br> 
    <input type="text" placeholder="Enter Price" name="price" required><br> 
    <label  ><b>Category</b></label><br> 
    <select name="category" id="category">
            <option value="watch">Watch</option>
            <option value="Vagitable">Vigitable</option>
        </select><br>
    <label  ><b>Shop</b></label><br> 
    <select name="shop" id="shop">
            <option value="amazon">Amazon</option>
            <option value="alibaba">Alibaba</option>
             
            
        </select><br>
    <label  ><b>Discription</b></label><br> 
    <input type="text" placeholder="Enter Discription" name="dis" required><br> 
 
                    <label for="User Full Name">Image</label>
                    <input type="text" class="form-control" id="path" style="background: white ;color:black;" placeholder="No file chosen" name="path" >
                    <label for="User Full Name">Link</label>
                    <input type="text" class="form-control" id="path" style="background: white ;color:black;" placeholder="No file chosen" name="link" >
            
    <button name="add" type="submit" class="btn">submit</button>
  </form>
</div>



</body>
</html>