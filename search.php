<?php
include 'function.php';
session_start();

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products;";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Maagnas</title>
</head>
<body>
<form>
    <label>Search</label>
    <input type="search" id="search">

</form>
<div class="product-list">
<?php if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { 
                        ?>
                    <div class="col">
                        <div class="custom-container">
                        <img src="assets/<?php echo $row["item_image"] ?>">
                            <p class="text-lead"><?php echo $row["item_name"] . ' ' . $row["item_description"] ?></p>
                            <p class="text-lead">₱<?php echo $row["retail_price"] ?></p>
                        </div>
                    </div>
                     <?php }} 
                     $conn->close(); ?>
                            
</div>    
</div>
</body>
</html>