<?php include "../includes/header.php"; ?>
<?php include "../config/db.php"; ?>

<h2>Item List</h2>
<a href="create.php" class="btn btn-success mb-3">Add Item</a>

<table class="table table-bordered">
<tr>
    <th>Code</th>
    <th>Name</th>
    <th>Category</th>
    <th>Sub Category</th>
    <th>Qty</th>
    <th>Unit Price</th>
    <th>Action</th>
</tr>

<?php
$q = mysqli_query($conn, "SELECT * FROM items ORDER BY id DESC");
while($row = mysqli_fetch_assoc($q)){
?>
<tr>
    <td><?= $row['item_code']; ?></td>
    <td><?= $row['item_name']; ?></td>
    <td><?= $row['category']; ?></td>
    <td><?= $row['sub_category']; ?></td>
    <td><?= $row['qty']; ?></td>
    <td><?= $row['unit_price']; ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
    </td>
</tr>
<?php } ?>
</table>

<?php include "../includes/footer.php"; ?>
