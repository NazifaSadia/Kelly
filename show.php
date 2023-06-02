<?php
    include('inc/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-12">

          <h2>Contact Information</h2>

          <table class="table table-striped table-bordered" id="usersdata">
              <thead>
                <tr>
                  <th scope="col">#Sl.</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Subject</th>
                  <th scope="col">Message</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>

              <tbody>
                <?php
                    $query = "SELECT * FROM contact_info";
                    $allInfo = mysqli_query($connect , $query);

                    $i = 1;
                    while( $row = mysqli_fetch_assoc($allInfo) ){
                        $id         = $row['id'];
                        $name       = $row['name'];
                        $email      = $row['email'];
                        $subject    = $row['subject'];
                        $message    = $row['message'];
                      ?>
                      <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $name ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $subject ?></td>
                        <td><?php echo $message ?></td>
                        <td>
                          <div class="btn-group">
                            <a href="update_contact.php?id=<?php echo $id?>" class="btn btn-success btn-sm">Update</a>
                            <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteUser<?php echo $id; ?>">Delete</a>
                          </div>
                        </td>

                        <!-- Delete User Confirmation Modal -->
                          <div class="modal fade" id="deleteUser<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this user?</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                          <a href="show.php?id=<?php echo $id; ?>" type="submit" class="btn btn-danger">Confirm</a>
                                          <a type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</a>
                                      </div>                          
                                  </div>
                              </div>
                          </div>
                      </tr>

                    <?php
                        $i++;
                    }
                    ?>
              </tbody>
          </table>

          <!-- SQL for Delete -->
          <?php
              if( isset($_GET['id']) )
              {
                  $conID = $_GET['id'];

                  $query = "DELETE FROM contact_info WHERE id='$conID'";

                  $deleteInfo = mysqli_query($connect, $query);

                  if( $deleteInfo )
                  {
                      header("Location:show.php");
                  }
                  else{
                      die("Operation Failed." . mysqli_error($connect) );
                  }
              }
          ?>
        </div>
    </div>
</div>
  
<?php
  include_once('inc/footer.php');
?>