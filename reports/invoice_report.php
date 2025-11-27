<?php include "../includes/header.php"; ?>
<?php include "../config/db.php"; ?>

<h2>Invoice Report</h2>

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
            c.fname, c.lname, c.district,
            COUNT(ii.item_id) AS item_count,
            SUM(ii.total) AS invoice_amount
        FROM invoices i
        JOIN customers c ON i.customer_id = c.id
        JOIN invoice_items ii ON i.id = ii.invoice_id
        WHERE i.date BETWEEN '$from' AND '$to'
        GROUP BY i.id
        ORDER BY i.date DESC
    ");
?>

<table class="table table-bordered mt-4">
<tr>
    <th>Invoice No</th>
    <th>Date</th>
    <th>Customer</th>
    <th>District</th>
    <th>Item Count</th>
    <th>Invoice Amount</th>
</tr>

<?php while($row = mysqli_fetch_assoc($q)){ ?>
<tr>
    <td><?= $row['invoice_no']; ?></td>
    <td><?= $row['date']; ?></td>
    <td><?= $row['fname']." ".$row['lname']; ?></td>
    <td><?= $row['district']; ?></td>
    <td><?= $row['item_count']; ?></td>
    <td><?= $row['invoice_amount']; ?></td>
</tr>
<?php } ?>
</table>

<?php } ?>

<?php include "../includes/footer.php"; ?>
