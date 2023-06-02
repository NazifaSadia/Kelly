<?php
    include_once('inc/header.php');
?>

<?php
    include_once('inc/menu.php');
?>

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>
            </div>
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            
          <?php
            if( isset($_GET['id']) )
            {
                $id = $_GET['id'];

                $query = "SELECT * FROM contact_info WHERE id = '$id'";

                $data = mysqli_query($connect, $query);

                while( $row = mysqli_fetch_assoc($data) ){
                    $id         = $row['id'];
                    $name       = $row['name'];
                    $email      = $row['email'];
                    $subject    = $row['subject'];
                    $message    = $row['message'];
                ?>
                    <!-- Form Start-->
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" value="<?php echo $name ?>" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" value="<?php echo $email ?>" placeholder="Your Email" required>
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <input type="text" value="<?php echo $subject ?>" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>

                        <div class="form-group mt-3">
                            <textarea class="form-control text-start" name="message" rows="5" required>
                                <?php echo $message;?></textarea>
                        </div>

                        <div class="text-center my-3">
                            <input type="submit" name="save" value="Save Changes" class="btn btn-primary">
                        </div>                       
                    </form>
                    <!-- Form End-->
                <?php
                }
            }
          ?>
         <!-- Update Contact Information -->
          <?php
            if( isset($_POST['save']) )
            {
                $name       = $_POST['name'];
                $email      = $_POST['email'];
                $subject    = $_POST['subject'];
                $message    = $_POST['message'];

                $query = "UPDATE contact_info SET name='$name', email='$email', subject='$subject', message='$message' WHERE id='$id'";

                $updateData = mysqli_query($connect, $query);

                if( $updateData )
                {
                    header("Location:show.php");
                }
                else{
                    die("Operation Failed." . mysqli_error($connect));
                }
            }
          ?>
            
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->


  <?php
      include_once('inc/footer.php');
  ?>