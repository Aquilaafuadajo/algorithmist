<?php 
  $email = '';
  $errors = array('email'=>'');

  if(isset($_POST['submit'])) {
    // check email
    if(empty($_POST['email'])) {
      $errors['email'] = 'An email is required <br />';
    } else {
      $email = $_POST['email'];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'email must be a valid email address';
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
  <link rel="stylesheet" href="./assets/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/custom.css">
  <title>Algorithmist</title>
</head>
<body>
  <div class="container-fluid">
    <section class="hero">
      <div class="jumbotron">
        <div class="row">
          <div class="col"></div>
          <div class="col form-section">
            <h1 class="display-4 custom-header">We Launch Soon</h1>
            <p class="custom-text">Subscribe to get notification as soon as we launch!</p>
            <form action="index.php" method="POST">
              <input type="text" name="email" class="custom-input" placeholder="Enter your email" value="<?php echo htmlspecialchars($email); ?>">
              <div class="red-text">
                <?php echo $errors['email']; ?>
              </div>
              <input type="submit" name="submit" value="NOTIFY ME" class="submit-btn">
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="content l-bg">
      <h3 class="custom-sub-header">Need code solutions for your challenges</h3>
      <div class="container r-bg">
        <div class="row">
          <div class="col">
            <p class="normal-text">Algorithimist is an AI application that solves real life 
              challenges requiring only a few set of keywords. 
              It outputs the solution in your preferred language.</p>
          </div>
          <div class="col">
            <img src="./assets/images/Desktop - 1 1.png" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="demo">
      <p class="normal-text ta-center">Outputs result in over 50 languages</p>
    </section>

    <section class="demo">
      <p class="normal-text ta-center">Tested by top tech companies</p>
    </section>

    <section class="demo">
      <p class="normal-text ta-center">Tested by top tech companies</p>
    </section>

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col display-flex white">
            <p class="custom-text white mb-0">Phone: +44 785 4587 454,  Email: info@algorithimist.com</p>
          </div>
          <div class="col display-flex">
            <div class="social-media-icons">
              <a class="" href="#"><img src="./assets/images/icons/Facebook White.svg" alt="facebook icon"></a>
              <a class="left-right-margin" href="#"><img src="./assets/images/icons/IG White.svg" alt="instagram icon"></a>
              <a class="left-right-margin" href="#"><img src="./assets/images/icons/Twitter White.svg" alt="twitter icon"></a>
              <a class="left-right-margin" href="#"><img src="./assets/images/icons/Linkedln white image.svg" alt="facebook icon"></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>


  <script src="./assets/js/jquery/jquery-3.5.1.min.js"></script>
  <script src="./assets/js/bootstrap/bootstrap.min.js"></script>
</body>
</html>