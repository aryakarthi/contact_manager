<?php 

  include("../config/connect_db.php");

  $view = $_GET['view'];

  $sql = "SELECT * FROM contacts WHERE id = '$view'";

  $view_contact = mysqli_query($connection,$sql);

  if($row = mysqli_fetch_array($view_contact)){
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $city = $row['city'];
  }
  
?>

<?php include_once "../partials/header.php" ?>

  <div class="container mt-5">
    <div class="row">
    <h5><i class="bi bi-file-text mx-1"></i>Contact Details</h5>
      <hr>

      <div class="my-3">
        <ul class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/crud/">Home</a>
          </li>
          <li class="breadcrumb-item">
          Contact Details
          </li>
        </ul>
      </div>

      <div class="col-md-8 mt-3">
        <ul class="list-group mx-auto">
          <li class="list-group-item"><strong>ID : </strong><?php echo $id ?></li>
          <li class="list-group-item"><strong>Name : </strong><?php echo $name ?></li>
          <li class="list-group-item"><strong>Email : </strong><?php echo $email ?></li>
          <li class="list-group-item"><strong>Mobile : </strong><?php echo $mobile ?></li>
          <li class="list-group-item"><strong>City : </strong><?php echo $city ?></li>
        </ul>
      </div>
      
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>