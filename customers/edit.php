<?php include "../includes/header.php"; ?>
<?php include "../config/db.php"; ?>

<?php
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM customers WHERE id=$id"));

if (isset($_POST['update'])) {
    mysqli_query($conn, "UPDATE customers SET
        title='{$_POST['title']}',
        fname='{$_POST['fname']}',
        lname='{$_POST['lname']}',
        contact='{$_POST['contact']}',
        district='{$_POST['district']}'
        WHERE id=$id");

    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <i class='bi bi-check-circle-fill me-2'></i>Customer updated successfully!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
}
?>

<div class="row justify-content-center">
  <div class="col-md-6">

    <div class="card shadow-sm border-0">
      <div class="card-header bg-primary text-white">
        <h5 class="mb-0"><i class="bi bi-pencil-fill me-2"></i> Edit Customer</h5>
      </div>

      <div class="card-body">
        <form method="POST" class="mt-3">

          <!-- Title Dropdown -->
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <select name="title" id="title" class="form-select" required>
              <option value="Mr" <?= $data['title'] === 'Mr' ? 'selected' : '' ?>>Mr</option>
              <option value="Mrs" <?= $data['title'] === 'Mrs' ? 'selected' : '' ?>>Mrs</option>
              <option value="Miss" <?= $data['title'] === 'Miss' ? 'selected' : '' ?>>Miss</option>
              <option value="Dr" <?= $data['title'] === 'Dr' ? 'selected' : '' ?>>Dr</option>
            </select>
          </div>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="fname" id="fname" value="<?= $data['fname']; ?>" required>
            <label for="fname">First Name</label>
          </div>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="lname" id="lname" value="<?= $data['lname']; ?>" required>
            <label for="lname">Last Name</label>
          </div>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="contact" id="contact" value="<?= $data['contact']; ?>" required>
            <label for="contact">Contact</label>
          </div>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="district" id="district" value="<?= $data['district']; ?>" required>
            <label for="district">District</label>
          </div>

          <button type="submit" name="update" class="btn btn-primary w-100">
            <i class="bi bi-save me-1"></i> Update Customer
          </button>
        </form>
      </div>
    </div>

  </div>
</div>

<?php include "../includes/footer.php"; ?>
