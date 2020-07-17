<?php 

  // include db connection
  include('config/db_connect.php');


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

    if(array_filter($errors)) {
      //$allErrors = '';
    } else {
      $email = mysqli_real_escape_string($conn, $_POST['email']);

      // create sql
      $sql = "INSERT INTO users(email) VALUES('$email')";

      if(mysqli_query($conn, $sql)) {
        // success
        echo "<script>alert('email saved successfully');</script>";
        $email = '';
      } else {
        // error
        echo 'query error: ' . mysqli_error($conn);
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
      <div class="container pd-20">
        <img src="./assets/images/A Logo 1 (1).png" alt="algorithmist logo" class="logo">
        <div class="row">
          <div class="col-sm top-form-section">
            <h1 class="lg-text-1">Code smart with <span style="font-weight: 700;">Algorithimist</span></h1>
            <h2 class="lg-text-2">Coming Soon!</h2>
            <img src="./assets/images/Frame 1 1.png" alt="" class="w-100 sm-screen-img">
            <form action="index.php" method="POST">
              <p class="sm-text">Want to get notified when our app is out?</p>
              <input type="text" name="email" class="custom-input" placeholder="Enter your email" value="<?php echo htmlspecialchars($email); ?>">
              <div class="red-text">
                <?php echo $errors['email']; ?>
              </div>
              <input type="submit" name="submit" value="NOTIFY ME" class="submit-btn">
            <!-- <form action="" class="form">
              <p class="sm-text">Want to get notified when our app is out?</p>
              <input type="text" name="email" class="custom-input" placeholder="Enter your email">
              <input type="submit" name="submit" value="NOTIFY ME" class="submit-btn">
            </form> -->
          </div>
          <div class="col-sm">
            <img src="./assets/images/Frame 1 1.png" alt="" class="w-100 lg-screen-img">
          </div>
        </div>
      </div>
    </section>
    
    <section class="content bg-white">
      <div class="container">
        <h3 class="custom-h3 mg-btm-30">Get quick code solutions for your challenges</h3>
        <div class="pd-top-bottom row">
          <div class="col-md">
            <p class="m-text pd-top-bottom">Ever wanted a quick fix in creating your codes?
              Algorithimist provides you with a faster approach  
              to create a thousand lines of code to solve any problem.
              It is an Artificial Intelligence application that solves real life 
              challenges requiring only a few set of keywords. 
              It outputs the solution in the users’ preferred language.
            </p>
          </div>
          <div class="col-md">
            <div class="code-editor">
              <div id="typed-strings" style="font-family: 'Courier New', Courier, monospace !important;">
    
                <code><span class="purple"">function</span> <span class="blue">algorithmist</span><span class="grey">(keywords)</span> { <br />
                  &nbsp;&nbsp;<span class="purple"">let</span><span class="grey">keywords</span> <span class="light-blue">= [<span class="tomato-red">...arguments</span>]</span> <br />
                </code>
                <code><span class="purple"">function</span> <span class="blue">algorithmist</span><span class="grey">(keywords)</span> { <br />
                  &nbsp;&nbsp;<span class="purple"">let</span> <span class="grey">keywords</span> <span class="light-blue">= [<span class="tomato-red">...arguments</span>]</span> <br />
                  &nbsp;&nbsp;<span class="orange">keywords</span><span class="blue">.shift</span>() <br />
                  &nbsp;&nbsp;<span class="purple"">function</span> <span class="blue">chkKeywords</span>(<span class="grey">val, keywords</span>) { <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="light-blue">if</span>(<span class="light-blue">!</span><span class="orange">keywords</span><span class="blue">.includes</span>(<span class="grey">val</span>)) <span class="light-blue">return</span> <span class="tomato-red">true</span> <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="light-blue">return</span><span class="tomato-red"> false </span>  <br />
                  } <br />
                  &nbsp;&nbsp;<span class="light-blue">return</span> <span class="orange">keywords</span><span class="blue">.reduce</span>((<span class="grey">acc, val</span>) => { <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="blue">chkKeywords</span>(<span class="grey">val, keywords</span>) ? <span class="orange">acc</span><span class="blue">.push</span>(<span class="grey">val</span>) <span class="grey">: acc</span> <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="light-blue">return</span> <span class="grey">acc</span> <br />
                    &nbsp;&nbsp;}, <span class="light-blue">[]</span>); <br />
                }</code>
              </div>
              <span id="typed" style="font-family: 'Courier New', Courier, monospace !important;"></span>
            </div>
            
          </div>
        </div>
      </div>
    </section>

    <section class="content wte bg-white">
      <h3 class="custom-h3 mg-btm-30">What to expect</h3>
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <img src="./assets/images/iPhone 8 - 1 (1)_iphone8spacegrey_portrait 9 (3).png" alt="" class="w-100">
          </div>
          <div class="col-sm">
            <img src="./assets/images/iPhone 8 - 1 (1)_iphone8spacegrey_portrait 4 (2).png" alt="" class="w-100">
          </div>
          <div class="col-sm">
            <img src="./assets/images/iPhone 8 - 1 (1)_iphone8spacegrey_portrait 9 (3).png" alt="" class="w-100">
          </div>
        </div>
      </div>
    </section>

    <section class="content bg-light-grey">
      <div class="container">
        <h3 class="custom-h3">Outputs result in over 50 languages</h3>
        <div class="container-fluid mg-20">
          <div class="grid-container--fill">
            <div class="lang-card">
              <img src="./assets/images/new js.png" alt="" class="w-100">
            </div>
            <div class="lang-card">
              <img src="./assets/images/csharp.png" alt="" class="w-100">
            </div>
            <div class="lang-card">
              <img src="./assets/images/new swift.png" alt="" class="w-100">
            </div>
            <div class="lang-card">
              <img src="./assets/images/Java.png" alt="" class="w-100">
            </div>
            <div class="lang-card">
              <img src="./assets/images/new ruby.png" alt="" class="w-100">
            </div>
            <div class="lang-card">
              <img src="./assets/images/php.png" alt="" class="w-100">
            </div>
            <div class="lang-card">
              <img src="./assets/images/Python.png" alt="" class="w-100">
            </div>
          </div>
          <!-- <div class="row">
            <div class="col-md">
              <div class="row">
                <div class="lang-card">
                  <img src="./assets/images/angular.png" alt="" class="w-100">
                </div>
                <div class="lang-card">
                  <img src="./assets/images/csharp.png" alt="" class="w-100">
                </div>
                <div class="lang-card">
                  <img src="./assets/images/Dart.png" alt="" class="w-100">
                </div>
                <div class="lang-card">
                  <img src="./assets/images/Java.png" alt="" class="w-100">
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="row">
                <div class="lang-card">
                  <img src="./assets/images/javascript-512.png" alt="" class="w-100">
                </div>
                <div class="lang-card">
                  <img src="./assets/images/php.png" alt="" class="w-100">
                </div>
                <div class="lang-card">
                  <img src="./assets/images/angular.png" alt="" class="w-100">
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>

    <section class="content bg-white">
      <div class="container">
        <h3 class="custom-h3">Trusted by top global companies</h3>
        <div class="container-fluid mg-20">
          <div class="row companies">
            <div class="col-sm">
              <div class="row">
                <div class="col center-align pd-img">
                  <img src="./assets/images/hotels (1).png" alt="" class="w-100">
                </div>
                <div class="col center-align pd-img">
                  <img src="./assets/images/Amazon (1).png" alt="" class="w-100">
                </div>
              </div>
            </div>
            <div class="col-sm">
              <div class="row">
                <div class="col center-align pd-img">
                  <img src="./assets/images/Google.png" alt="" class="w-100">
                </div>
                <div class="col center-align pd-img">
                  <img src="./assets/images/Flutterwave (1).png" alt="" class="w-100">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="content bg-light-grey btm-content">
      <div class="container">
        <div class="row">
          <div class="col-md pd-0">
            <h1 class="lg-text-3">Want to get notified?</h1>
          </div>
          <div class="col-md pd-0 mg-auto">
            <div class="row btm-form">
              <form action="index.php" method="POST">
                <input type="text" name="email" class="custom-input" placeholder="Enter your email" value="<?php echo htmlspecialchars($email); ?>">
                <div class="red-text">
                  <?php echo $errors['email']; ?>
                </div>
                <input type="submit" name="submit" value="NOTIFY ME" class="submit-btn">
              <!-- <form action="">
                <input type="text" name="email" class="custom-input" placeholder="Enter your email">
                <input type="submit" name="submit" value="NOTIFY ME" class="submit-btn btm-btn">
              </form> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm display-flex white">
            <p class="custom-text white mb-0">Phone: +44 785 4587 454,  Email: info@algorithimist.com</p>
          </div>
          <div class="col-sm display-flex">
            <div class="social-media-icons">
              <a class="icon" href="#"><img src="./assets/images/icons/Facebook White.svg" alt="facebook icon"></a>
              <a class="icon" href="#"><img src="./assets/images/icons/IG White.svg" alt="instagram icon"></a>
              <a class="icon" href="#"><img src="./assets/images/icons/Twitter White.svg" alt="twitter icon"></a>
              <a class="icon" href="#"><img src="./assets/images/icons/Linkedln white image.svg" alt="facebook icon"></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>


  <script src="./assets/js/jquery/jquery-3.5.1.min.js"></script>
  <script src="./assets/js/bootstrap/bootstrap.min.js"></script>
  <script src="assets/js/typed/typed.js"></script>
  <script>
    var typed = new Typed('#typed', {
      stringsElement: '#typed-strings',
      typeSpeed: 20,
      // loop: true,
      // loopCount: Infinity,
      backDelay: 1000,
    });
  </script>
</body>
</html>