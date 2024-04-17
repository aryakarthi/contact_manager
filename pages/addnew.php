<?php

  include("../config/connect_db.php");

  $name = $email = $mobile = $city = "";

  $nameErr = $emailErr = $mobileErr = $cityErr = "";

  if(isset($_POST["addnew"])){

    include("../partials/validation.php");

    if(empty($nameErr) && empty($emailErr) && empty($mobileErr) && empty($cityErr)){

      $sql = "INSERT INTO contacts (name,email,mobile,city) VALUES ('$name','$email','$mobile','$city')";

      $add_contact = mysqli_query($connection,$sql);

      if($add_contact){
        header("Location: /crud/");
      }
      else{
        echo "Something went wrong!";
      }

    }

  }

?>

<?php include_once "../partials/header.php" ?>

  <div class="container mt-5">
    <div class="row">
      <h5><i class="bi bi-plus-square mx-1"></i>Add New Contact</h5>
      <hr>

      <div class="my-3">
        <ul class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/crud/">Home</a>
          </li>
          <li class="breadcrumb-item">
          Add New Contact
          </li>
        </ul>
      </div>

      <div class="col-md-6">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" novalidate>
          <div class="col-md-12">

            <?php include("../partials/inputs.php"); ?>

            <input type="submit" name="addnew" class="btn btn-success" value="Add New">

          </div>
        </form>
      </div>

    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>