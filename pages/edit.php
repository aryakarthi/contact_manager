<?php 

  include("../config/connect_db.php");

  $edit = $_GET['edit'];

  $sql = "SELECT * FROM contacts WHERE id = '$edit'";

  $edit_contact = mysqli_query($connection,$sql);

  if($row = mysqli_fetch_array($edit_contact)){
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $city = $row['city'];
  }
  
?>

<?php

  include("../config/connect_db.php");

  $nameErr = $emailErr = $mobileErr = $cityErr = "";

  if(isset($_POST["update"])){

    $edit = $_GET["edit"];

    // $name = $_POST["name"];
    // $email = $_POST["email"];
    // $mobile = $_POST["mobile"];
    // $city = $_POST["city"];

    include("../partials/validation.php");


    if(empty($nameErr) && empty($emailErr) && empty($mobileErr) && empty($cityErr)){

      $sql = "UPDATE contacts SET name='$name',email='$email',mobile='$mobile',city='$city' WHERE id = '$edit'";

      $edit_contact = mysqli_query($connection,$sql);

      if($edit_contact){
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
      <h5><i class="bi bi-pencil-square mx-1"></i>Edit Contact</h5>
      <hr>

      <div class="my-3">
        <ul class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/crud/">Home</a>
          </li>
          <li class="breadcrumb-item">
          Edit Contact
          </li> 
        </ul>
      </div>

      <div class="col-md-6">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?edit=' . $edit; ?>" method="post" novalidate>
          <div class="col-md-12">

            <?php include("../partials/inputs.php"); ?>

            <input type="submit" name="update" class="btn btn-success" value="Update">

          </div>
        </form>
      </div>

    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>