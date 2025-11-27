
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ERP System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --bs-navbar-bg: #1f2e3d;
    }
    body { background-color: #f8f9fa; }
    .navbar { background-color: var(--bs-navbar-bg); }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">

    
    <a class="navbar-brand" href="/ERP_SYSTEM/index.php">
      <i class="bi bi-speedometer2 me-2"></i>ERP System
    </a>

    <div class="d-flex">

      
      <a class="btn btn-outline-light nav-btn me-2" href="/ERP_SYSTEM/customers/index.php">
        <i class="bi bi-people-fill me-1"></i> Customers
      </a>

      
      <a class="btn btn-outline-light nav-btn me-2" href="/ERP_SYSTEM/items/index.php">
        <i class="bi bi-box-seam me-1"></i> Items
      </a>

      
      <a class="btn btn-warning nav-btn" href="/ERP_SYSTEM/reports/index.php">
        <i class="bi bi-graph-up me-1"></i> Reports
      </a>

    </div>
  </div>
</nav>

<div class="container mt-4">
