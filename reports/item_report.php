<?php include "../includes/header.php"; ?>
<?php include "../config/db.php"; ?>

<h2>Item Summary Report</h2>

<table class="table table-bordered mt-4">
<tr>
    <th>Item Name</th>
    <th>Category</th>
    <th>Sub Category</th>
    <th>Quantity</th>
</tr>

<?php
$q = mysqli_query($conn, "
    SELECT DISTINCT item_name, category, sub_category, qty
    FROM items
    ORDER BY item_name ASC
");

while($row = mysqli_fetch_assoc($q)){
?>
<tr>
    <td><?= $row['item_name']; ?></td>
    <td><?= $row['category']; ?></td>
    <td><?= $row['sub_category']; ?></td>
    <td><?= $row['qty']; ?></td>
</tr>
<?php } ?>
</table>

<?php include "../includes/footer.php"; ?>
