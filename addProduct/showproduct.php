<!DOCTYPE html>
<?php
  include('../includes/connection.php'); 

    if (isset($_GET['id'])) {
        // Retrieve the ID from the URL parameter
        $id = $_GET['id'];
$q="DELETE FROM `product` WHERE id = '$id'";

    // Perform the deletion based on the ID
    // Replace this with your own code to delete the value

    $resultImage = mysqli_query($con,$q);
}  
$result=[];
$sql = "SELECT * FROM `product`";
$result=mysqli_query($con,$sql);
?>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    table {
        border-collapse: collapse;
        margin: 0 auto;
        width: 100%;
    }

    td {
        text-align: left;
        padding: 10px;
        height: 20px;
    }

    tr:hover {
        background-color: lightgrey;
    }

    .centertext {
        text-align: center;
    }
    </style>
</head>

<body>
    <table>
        <tr style="background-color: #ff5421;">

            <th>
                ID
            </th>
            <th>
                Name
            </th>
            <th>
                Price
            </th>
            <th>
                Discounted Price
            </th>
            <th>
                Detailes
            </th>
            <th>
                Image
            </th>
        </tr>
        <?php
 while($row = mysqli_fetch_assoc($result)){
  ?>
        <tr>
            <td class="centertext">
                <?php echo $row["id"]; ?>
            </td>
            <td class="centertext">
                <?php echo $row["name"]; ?>
            </td>
            <td class="centertext">
                <?php echo $row["price"]; ?>
            </td>
            <td class="centertext">
                <?php echo $row["dPrice"]; ?>
            </td>
            <td class="centertext">
                <?php echo $row["description"]; ?>
            </td>
            <td class="centertext">
                <img src="../img/product/<?php echo $row["img"]; ?>" style='width:100px;height:100px'>
            </td>
            <td>
                <a href=" updetform.php?id=<?php echo $row["id"]; ?>"><i class="fa fa-pencil" aria-hidden="true"
                        style="color:green;font-size:28px"></i> </a>
            </td>
            <td>
                <a href="showproduct.php?id=<?php echo $row["id"]; ?>"> <i class="fa fa-trash" aria-hidden="true"
                        style="color:red;font-size:28px"></i></a>
            </td>

        </tr>
        <?php } ?>
    </table>
</body>

</html>