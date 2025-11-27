<?php include "includes/header.php"; ?>

<div class="text-center mb-5">
  <h1 class="mb-3">Welcome to the ERP System</h1>
  <p class="lead text-muted">Manage your operations efficiently using the tools below.</p>
</div>

<div class="row g-4">


  <div class="col-md-4">
    <a href="customers" class="text-decoration-none">
      <div class="card h-100 shadow-sm border-0 hover-shadow transition">
        <div class="card-body text-center">
          <i class="bi bi-people-fill display-4 text-primary mb-3"></i>
          <h5 class="card-title">Customer Management</h5>
          <p class="text-muted">Add, edit, and manage your customers</p>
        </div>
      </div>
    </a>
  </div>

 
  <div class="col-md-4">
    <a href="items" class="text-decoration-none">
      <div class="card h-100 shadow-sm border-0 hover-shadow transition">
        <div class="card-body text-center">
          <i class="bi bi-box-seam display-4 text-success mb-3"></i>
          <h5 class="card-title">Item Management</h5>
          <p class="text-muted">Handle inventory, products, and items</p>
        </div>
      </div>
    </a>
  </div>

  
  <div class="col-md-4">
    <a href="reports/index.php" class="text-decoration-none">
      <div class="card h-100 shadow-sm border-0 hover-shadow transition">
        <div class="card-body text-center">
          <i class="bi bi-bar-chart-fill display-4 text-warning mb-3"></i>
          <h5 class="card-title">Reports</h5>
          <p class="text-muted">View sales and item reports</p>
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

<?php include "includes/footer.php"; ?>
