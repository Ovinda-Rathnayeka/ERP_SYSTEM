<?php include "../includes/header.php"; ?>
<?php include "../config/db.php"; ?>

<?php
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM items WHERE id=$id"));

if(isset($_POST['update'])){
    mysqli_query($conn, "UPDATE items SET
        item_code='{$_POST['item_code']}',
        item_name='{$_POST['item_name']}',
        category='{$_POST['category']}',
        sub_category='{$_POST['sub_category']}',
        qty='{$_POST['qty']}',
        unit_price='{$_POST['unit_price']}'
        WHERE id=$id");

    echo "<div class='alert alert-success'>Item Updated!</div>";
}
?>

<h2>Edit Item</h2>

<form method="POST">

<input class="form-control mb-2" name="item_code" value="<?= $data['item_code']; ?>">
<input class="form-control mb-2" name="item_name" value="<?= $data['item_name']; ?>">

<select name="category" class="form-control mb-2">
    <option <?= $data['category']=="Electronics"?'selected':'' ?>>Electronics</option>
    <option <?= $data['category']=="Furniture"?'selected':'' ?>>Furniture</option>
</select>

<input class="form-control mb-2" name="sub_category" value="<?= $data['sub_category']; ?>">
<input class="form-control mb-2" name="qty" value="<?= $data['qty']; ?>">
<input class="form-control mb-2" name="unit_price" value="<?= $data['unit_price']; ?>">

<button class="btn btn-primary" name="update">Update</button>
</form>

<?php include "../includes/footer.php"; ?>
