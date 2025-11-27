<?php include "../includes/header.php"; ?>

<div class="text-center mb-5">
  <h2 class="mb-2">📈 Reports Dashboard</h2>
  <p class="text-muted">Access detailed reports about invoices, items, and more.</p>
</div>

<div class="row g-4">

 
  <div class="col-md-4">
    <a href="invoice_report.php" class="text-decoration-none">
      <div class="card h-100 shadow-sm border-0 hover-shadow transition">
        <div class="card-body text-center">
          <i class="bi bi-receipt-cutoff display-4 text-primary mb-3"></i>
          <h5 class="card-title">Invoice Report</h5>
          <p class="text-muted">View invoices between selected date ranges.</p>
          <span class="btn btn-outline-primary mt-2">View Report</span>
        </div>
      </div>
    </a>
  </div>

 
  <div class="col-md-4">
    <a href="invoice_item_report.php" class="text-decoration-none">
      <div class="card h-100 shadow-sm border-0 hover-shadow transition">
        <div class="card-body text-center">
          <i class="bi bi-basket-fill display-4 text-success mb-3"></i>
          <h5 class="card-title">Invoice Item Report</h5>
          <p class="text-muted">See item-level invoice details with category & price.</p>
          <span class="btn btn-outline-success mt-2">View Report</span>
        </div>
      </div>
    </a>
  </div>

  
  <div class="col-md-4">
    <a href="item_report.php" class="text-decoration-none">
      <div class="card h-100 shadow-sm border-0 hover-shadow transition">
        <div class="card-body text-center">
          <i class="bi bi-boxes display-4 text-warning mb-3"></i>
          <h5 class="card-title">Item Summary Report</h5>
          <p class="text-muted">Unique items list with category & quantity.</p>
          <span class="btn btn-outline-warning mt-2">View Report</span>
        </div>
      </div>
    </a>
  </div>

</div>


<style>
  .transition {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }

  .hover-shadow:hover {
    transform: translateY(-4px);
    box-shadow: 0 6px 18px rgba(0,0,0,0.15);
  }
</style>

<?php include "../includes/footer.php"; ?>
