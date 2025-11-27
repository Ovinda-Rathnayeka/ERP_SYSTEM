<?php include "../includes/header.php"; ?>
<?php include "../config/db.php"; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
  <h2 class="mb-0"><i class="bi bi-person-lines-fill me-2"></i>Customer List</h2>
  <a href="create.php" class="btn btn-success">
    <i class="bi bi-plus-circle me-1"></i> Add Customer
  </a>
</div>

<div class="card shadow-sm border-0">
  <div class="card-body">

    <div class="table-responsive">
      <table class="table table-hover table-striped align-middle">
        <thead class="table-primary">
          <tr>
            <th>Title</th>
            <th>Name</th>
            <th>Contact</th>
            <th>District</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $q = mysqli_query($conn, "SELECT * FROM customers ORDER BY id DESC");
          while ($row = mysqli_fetch_assoc($q)) {
          ?>
          <tr>
            <td><?= $row['title']; ?></td>
            <td><?= $row['fname'] . " " . $row['lname']; ?></td>
            <td><?= $row['contact']; ?></td>
            <td><?= $row['district']; ?></td>
            <td>
              <a class="btn btn-sm btn-warning me-1" href="edit.php?id=<?= $row['id']; ?>">
                <i class="bi bi-pencil-fill"></i> Edit
              </a>
              <a class="btn btn-sm btn-danger" href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Are you sure?');">
                <i class="bi bi-trash-fill"></i> Delete
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </div>
</div>

<?php include "../includes/footer.php"; ?>
