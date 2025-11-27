<?php include "../includes/header.php"; ?>
<?php include "../config/db.php"; ?>

<h2>Add Item</h2>

<?php
if(isset($_POST['save'])){
    $code = $_POST['item_code'];
    $name = $_POST['item_name'];
    $category = $_POST['category'];
    $sub_category = $_POST['sub_category'];
    $qty = $_POST['qty'];
    $unit_price = $_POST['unit_price'];

    mysqli_query($conn, "INSERT INTO items(item_code, item_name, category, sub_category, qty, unit_price)
        VALUES('$code','$name','$category','$sub_category','$qty','$unit_price')");

    echo "<div class='alert alert-success'>Item Added Successfully!</div>";
}
?>

<form method="POST">

<input class="form-control mb-2" name="item_code" placeholder="Item Code" required>
<input class="form-control mb-2" name="item_name" placeholder="Item Name" required>

<select name="category" class="form-control mb-2" id="cat">
    <option>Electronics</option>
    <option>Furniture</option>
</select>

<select name="sub_category" class="form-control mb-2" id="subcat"></select>

<script>
document.getElementById('cat').onchange = function(){
    if(this.value == "Electronics"){
        subcat.innerHTML = "<option>Mobile</option><option>Laptop</option>";
    } else {
        subcat.innerHTML = "<option>Table</option><option>Chair</option>";
    }
}
</script>

<input class="form-control mb-2" name="qty" placeholder="Quantity" required>
<input class="form-control mb-2" name="unit_price" placeholder="Unit Price" required>

<button class="btn btn-primary" name="save">Save</button>
</form>

<?php include "../includes/footer.php"; ?>
