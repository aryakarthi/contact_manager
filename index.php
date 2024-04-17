<?php include_once "./partials/header.php" ?>

  <div class="container mt-5">
    <div class="row">
      <div class="d-flex justify-content-between">
        <h5><i class="bi bi-person-lines-fill mx-1"></i>Contact List</h5>
        <a href="./pages/addnew.php" class="btn btn-success"><i class="bi bi-plus-circle mx-1"></i>Add New</a>
      </div>

      <div class="col-md-12 table-responsive mt-3">

        <?php

          include("./config/connect_db.php");

          $sql = "SELECT * FROM contacts";

          $get_contacts = mysqli_query($connection,$sql);

          $output = "";

          $sno = 1;

          if(mysqli_num_rows($get_contacts) > 0){

        ?>

          <table class="table table-primary table-striped">
            <thead>

              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>City</th>
                <th>Actions</th>
                <th>ID</th>
              </tr>

            </thead>
            <tbody>

            <?php

              while($row = mysqli_fetch_assoc($get_contacts)){

                // print_r($row);

                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $mobile = $row['mobile'];
                $city = $row['city'];

                $output .= '<tr>
                              <td>'. $sno .'</td>
                              <td>'. $name .'</td>
                              <td>'. $email .'</td>
                              <td>'. $mobile .'</td>
                              <td>'. $city .'</td>
                              <td>
                                <a href="pages/view.php?view='. $id .'" class="btn btn-warning btn-sm"><i class="bi bi-eye-fill"></i></a>
                                <a href="pages/edit.php?edit='. $id .'" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                                <a href="pages/delete.php?delete='. $id .'" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                              </td>
                              <td>'. $id .'</td>
                            </tr>';

                $sno++;
              }

              echo $output;

            ?>

            </tbody>
          </table>

        <?php

          }
          else{
            echo '<h4 class="text-center bg-light bg-gradient py-3">No contacts found!</h4>';
          }

        ?>

      </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>


