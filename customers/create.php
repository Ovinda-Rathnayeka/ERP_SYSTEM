<?php include "../includes/header.php"; ?>
<?php include "../config/db.php"; ?>

<div class="row justify-content-center">
  <div class="col-md-6">

    <div class="card shadow-sm border-0">
      <div class="card-header bg-primary text-white">
        <h5 class="mb-0"><i class="bi bi-person-plus-fill me-2"></i> Add New Customer</h5>
      </div>

      <div class="card-body">

        <?php
        if (isset($_POST['save'])) {
            $title = $_POST['title'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $contact = $_POST['contact'];
            $district = $_POST['district'];

            mysqli_query($conn, "INSERT INTO customers(title,fname,lname,contact,district)
                                 VALUES('$title','$fname','$lname','$contact','$district')");

            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <i class='bi bi-check-circle-fill me-2'></i>Customer added successfully!
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>";
        }
        ?>

        <form method="POST" class="mt-3">

          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <select name="title" id="title" class="form-select" required>
              <option selected disabled>Choose...</option>
              <option>Mr</option>
              <option>Mrs</option>
              <option>Miss</option>
              <option>Dr</option>
            </select>
          </div>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required>
            <label for="fname">First Name</label>
          </div>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required>
            <label for="lname">Last Name</label>
          </div>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact" required>
            <label for="contact">Contact</label>
          </div>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="district" id="district" placeholder="District" required>
            <label for="district">District</label>
          </div>

          <button type="submit" name="save" class="btn btn-primary w-100">
            <i class="bi bi-save me-1"></i> Save Customer
          </button>

        </form>
      </div>
    </div>

  </div>
</div>

<?php include "../includes/footer.php"; ?>
