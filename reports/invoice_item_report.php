<?php include "../includes/header.php"; ?>
<?php include "../config/db.php"; ?>

<h2>Invoice Item Report</h2>

<form method="GET" class="row mb-3">
    <div class="col-md-4">
        <label>From Date</label>
        <input type="date" name="from" class="form-control" required>
    </div>
    <div class="col-md-4">
        <label>To Date</label>
        <input type="date" name="to" class="form-control" required>
    </div>
    <div class="col-md-4 mt-4">
        <button class="btn btn-primary mt-2">Search</button>
    </div>
</form>

<?php
if(isset($_GET['from'])){
    $from = $_GET['from'];
    $to = $_GET['to'];

    $q = mysqli_query($conn, "
        SELECT 
            i.invoice_no,
            i.date,
            c.fname, c.lname,
            it.item_name,
            it.item_code,
            it.category,
            ii.unit_price
        FROM invoice_items ii
        JOIN invoices i ON ii.invoice_id = i.id
        JOIN items it ON it.id = ii.item_id
        JOIN customers c ON c.id = i.customer_id
        WHERE i.date BETWEEN '$from' AND '$to'
        ORDER BY i.date DESC
    ");
?>

<table class="table table-bordered mt-4">
<tr>
    <th>Invoice No</th>
    <th>Date</th>
    <th>Customer</th>
    <th>Item Name</th>
    <th>Item Code</th>
    <th>Category</th>
    <th>Unit Price</th>
</tr>

<?php while($row = mysqli_fetch_assoc($q)){ ?>
<tr>
    <td><?= $row['invoice_no']; ?></td>
    <td><?= $row['date']; ?></td>
    <td><?= $row['fname']." ".$row['lname']; ?></td>
    <td><?= $row['item_name']; ?></td>
    <td><?= $row['item_code']; ?></td>
    <td><?= $row['category']; ?></td>
    <td><?= $row['unit_price']; ?></td>
</tr>
<?php } ?>
</table>

<?php } ?>

<?php include "../includes/footer.php"; ?>
