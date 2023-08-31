<?php
// Form Validation Script
$nameErr = $emailErr = $messageErr = "";
$name = $email = $mailSubject = $message = $messageSuccess = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Name
  if (empty($_POST["user-name"])) {
    $nameErr = "Please enter a valid name . Only letters and spaces are allowed.";
  } else {
    $name = test_input($_POST["user-name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
      $nameErr = "Only letters and white spaces allowed";
    }
  }

  // Email
  if (empty($_POST["user-email"])) {
    $emailErr = "Email address is required.";
  } else {
    $email = test_input($_POST["user-email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email address format.";
    }
  }

  // Message
  if (empty($_POST["input-message"])) {
    $messageErr = "Message can't be empty";
  } else {
    $message = test_input($_POST["input-message"]);
  }

  //  Email SUbmission 
  $toEmail = "19bcs1922@gmail.com";
  $mailSubject = "Contact Form Submission";
  $mailHeader = "From: $email\r\n";
  $mailBody = "Name: $name\r\nEmail: $email\r\nMessage: $message\r\n";

  /*if (mail($toEmail, $mailSubject, $mailBody, $mailHeader)) {
    $messageSuccess = "Thank you! Your information has been received successfully.";
  }else {
    $messageSuccess = "Thank you! Your information has been received successfully.";
    // $messageSuccess = "Email sending failed.";    ===> email not sent because of local server issue
  }*/

  if (isset($_POST["submit"])) {
    $messageSuccess = "Thank you! Your information has been received successfully.";
  }
}
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);

  return $data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- FAVICON -->
  <link rel="shortcut icon" href="./Images/favicon.png" type="image/x-icon" />

  <!-- REMIXICON -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

  <!-- CSS -->
  <link rel="stylesheet" href="./Styles/styles.css" />

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <title>Super Sonic Gym Website - Sahil Lamba</title>
</head>

<body>
  <!-- HEADER -->
  <header class="header" id="header">
    <nav class="nav container">
      <a href="#" class="nav-logo">
        <img src="./Images/logo-nav.png" alt="logo-nav" />SUPER-SONIC
      </a>

      <div class="nav-menu" id="nav-menu">
        <ul class="nav-list">
          <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#program" class="nav-link">Program</a></li>
          <li class="nav-item"><a href="#pricing" class="nav-link">Pricing</a></li>
          <li class="nav-item"><a href="#contact-us" class="nav-link">Contact Us</a></li>

          <div class="nav-link">
            <a href="#footer" class="button nav-button">Register Now</a>
          </div>
        </ul>

        <div class="nav-close" id="nav-close">
          <i class="ri-close-line"></i>
        </div>
      </div>

      <!-- Toggle Button -->
      <div class="nav-toggle" id="nav-toggle">
        <i class="ri-menu-line"></i>
      </div>
    </nav>
  </header>

  <!--==================== MAIN ====================-->
  <main class="main">
    <!--==================== HOME ====================-->
    <section class="home section" id="home">
      <div class="home-container container grid">
        <div class="home-data">
          <h2 class="home-subtitle">Make Your</h2>
          <h1 class="home-title">Body Shape</h1>
          <p class="home-description">
            Transform your body at our state-of-the-art gym. Our expert trainers and cutting-edge equipment will help you achieve your fitness goals and sculpt the shape you desire
          </p>
          <a href="#" class="button button-flex">
            Get Started <i class="ri-arrow-right-line"></i>
          </a>
        </div>
        <div class="home-images">
          <img src="./Images/home-img.png" alt="home-img" class="home-img" />

          <div class="home-triangle home-triangle-3"></div>
          <div class="home-triangle home-triangle-2"></div>
          <div class="home-triangle home-triangle-1"></div>
        </div>
      </div>
    </section>

    <!--==================== LOGOS ====================-->
    <section class="logos section">
      <div class="logos-container container grid">
        <img src="./Images/logo1.png" alt="logo img" class="logo-img" />
        <img src="./Images/logo2.png" alt="logo img" class="logo-img" />
        <img src="./Images/logo3.png" alt="logo img" class="logo-img" />
        <img src="./Images/logo4.png" alt="logo img" class="logo-img" />
      </div>
    </section>

    <!--==================== PROGRAM ====================-->
    <section class="program section" id="program">
      <div class="container">
        <div class="section-data">
          <h2 class="section-subtitle">Our Program</h2>
          <div class="section-titles">
            <h1 class="section-title-border">Build Your</h1>
            <h1 class="section-title">Best Body</h1>
          </div>
        </div>
        <div class="program-container grid">
          <!-- Card 1 -->
          <article class="program-card">
            <div class="program-shape">
              <img src="./Images/program1.png" alt="program img" class="program-img" />
            </div>
            <h3 class="program-title">HIIT Tranining</h3>
            <p class="program-description">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Dolores quas sequi aliquid itaque velit saepe
              officiis voluptatibus sit!
            </p>
            <a href="#" class="program-button">
              <i class="ri-arrow-right-line"></i>
            </a>
          </article>
          <!-- Card 2 -->
          <article class="program-card">
            <div class="program-shape">
              <img src="./Images/program2.png" alt="program img" class="program-img" />
            </div>
            <h3 class="program-title">Cardio</h3>
            <p class="program-description">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Dolores quas sequi aliquid itaque velit saepe
              officiis voluptatibus sit!
            </p>
            <a href="#" class="program-button">
              <i class="ri-arrow-right-line"></i>
            </a>
          </article>
          <!-- Card 3 -->
          <article class="program-card">
            <div class="program-shape">
              <img src="./Images/program3.png" alt="program img" class="program-img" />
            </div>
            <h3 class="program-title">Yoga</h3>
            <p class="program-description">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Dolores quas sequi aliquid itaque velit saepe
              officiis voluptatibus sit!
            </p>
            <a href="#" class="program-button">
              <i class="ri-arrow-right-line"></i>
            </a>
          </article>
          <!-- Card 4 -->
          <article class="program-card">
            <div class="program-shape">
              <img src="./Images/program4.png" alt="program img" class="program-img" />
            </div>
            <h3 class="program-title">Weight Lifting</h3>
            <p class="program-description">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Dolores quas sequi aliquid itaque velit saepe
              officiis voluptatibus sit!
            </p>
            <a href="#" class="program-button">
              <i class="ri-arrow-right-line"></i>
            </a>
          </article>
        </div>
      </div>
    </section>

    <!--==================== CHOOSE US ====================-->
    <section class="choose section" id="choose">
      <div class="choose-overflow">
        <div class="choose-container container grid">
          <div class="choose-content">
            <div class="section-data">
              <h2 class="section-subtitle">Best Reason</h2>
              <div class="section-titles">
                <h1 class="section-title-border">Why</h1>
                <h1 class="section-title">Choose Us ?</h1>
              </div>
            </div>
            <p class="choose-description">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque
              similique tempore obcaecati soluta. Maiores nobis provident at,
              corrupti ex similique quam voluptatibus labore consequatur nam
              expedita aperiam, sunt nihil iure.
            </p>

            <div class="choose-data">
              <div class="choose-group">
                <h3 class="choose-number">200+</h3>
                <p class="choose-subtitle">Total Members</p>
              </div>
              <div class="choose-group">
                <h3 class="choose-number">50+</h3>
                <p class="choose-subtitle">Best Traniner</p>
              </div>
              <div class="choose-group">
                <h3 class="choose-number">10+</h3>
                <p class="choose-subtitle">Programs</p>
              </div>
              <div class="choose-group">
                <h3 class="choose-number">100+</h3>
                <p class="choose-subtitle">Awards</p>
              </div>
            </div>
          </div>

          <div class="choose-images">
            <img src="./Images/choose-img.png" alt="choose img" class="choose-img" />
            <div class="choose-triangle choose-triangle-1"></div>
            <div class="choose-triangle choose-triangle-2"></div>
            <div class="choose-triangle choose-triangle-3"></div>
          </div>
        </div>
      </div>
    </section>

    <!--==================== PRICING ====================-->
    <section class="pricing section" id="pricing">
      <div class="container">
        <div class="section-data">
          <h2 class="section-subtitle">pricing</h2>
          <div class="section-titles">
            <h1 class="section-title-border">OUR</h1>
            <h1 class="section-title">SPECIAL PLAN</h1>
          </div>
        </div>
        <!-- Pricing 1 -->
        <div class="pricing-container grid">
          <article class="pricing-card">
            <header class="pricing-header">
              <div class="pricing-shape">
                <img src="./Images/pricing1.png" alt="pricing 1 img" class="pricing-img" />
              </div>
              <h1 class="pricing-title">Basic Package</h1>
              <h2 class="pricing-number">&#8377;2000</h2>
            </header>

            <ul class="pricing-list">
              <li class="pricing-item">
                <i class="ri-checkbox-circle-line"></i>6 Days a Week
              </li>
              <li class="pricing-item pricing-item-opacity">
                <i class="ri-checkbox-circle-line"></i>1 Workout Stringer
              </li>
              <li class="pricing-item pricing-item-opacity">
                <i class="ri-checkbox-circle-line"></i>1 Protein Shaker
              </li>
              <li class="pricing-item pricing-item-opacity">
                <i class="ri-checkbox-circle-line"></i>Accer to Tranining
                Videos
              </li>
              <li class="pricing-item pricing-item-opacity">
                <i class="ri-checkbox-circle-line"></i>Full Body Massage
              </li>
            </ul>

            <a href="#" class="button button-flex pricing-button">
              Purchase Now <i class="ri-arrow-right-line"></i>
            </a>
          </article>
          <!-- Pricing 2 -->
          <article class="pricing-card">
            <header class="pricing-header">
              <div class="pricing-shape">
                <img src="./Images/pricing2.png" alt="pricing 1 img" class="pricing-img" />
              </div>
              <h1 class="pricing-title">Basic Package</h1>
              <h2 class="pricing-number">&#8377;5000</h2>
            </header>

            <ul class="pricing-list">
              <li class="pricing-item">
                <i class="ri-checkbox-circle-line"></i>7 Days a Week
              </li>
              <li class="pricing-item">
                <i class="ri-checkbox-circle-line"></i>1 Workout Stringer
              </li>
              <li class="pricing-item">
                <i class="ri-checkbox-circle-line"></i>1 Protein Shaker
              </li>
              <li class="pricing-item pricing-item-opacity">
                <i class="ri-checkbox-circle-line"></i>Accer to Tranining
                Videos
              </li>
              <li class="pricing-item pricing-item-opacity">
                <i class="ri-checkbox-circle-line"></i>Full Body Massage
              </li>
            </ul>

            <a href="#" class="button button-flex pricing-button">
              Purchase Now <i class="ri-arrow-right-line"></i>
            </a>
          </article>
          <!-- Pricing 3 -->
          <article class="pricing-card">
            <header class="pricing-header">
              <div class="pricing-shape">
                <img src="./Images/pricing3.png" alt="pricing 1 img" class="pricing-img" />
              </div>
              <h1 class="pricing-title">Basic Package</h1>
              <h2 class="pricing-number">&#8377;8000</h2>
            </header>

            <ul class="pricing-list">
              <li class="pricing-item">
                <i class="ri-checkbox-circle-line"></i>24 x 7 Opening
              </li>
              <li class="pricing-item">
                <i class="ri-checkbox-circle-line"></i>1 Workout Stringer
              </li>
              <li class="pricing-item">
                <i class="ri-checkbox-circle-line"></i>1 Protein Shaker
              </li>
              <li class="pricing-item">
                <i class="ri-checkbox-circle-line"></i>Accer to Tranining
                Videos
              </li>
              <li class="pricing-item">
                <i class="ri-checkbox-circle-line"></i>Full Body Massage
              </li>
            </ul>

            <a href="#" class="button button-flex pricing-button">
              Purchase Now <i class="ri-arrow-right-line"></i>
            </a>
          </article>
        </div>
      </div>
    </section>

    <!--==================== Contact Us Section ====================-->
    <section class="contact-us section" id="contact-us">
      <div class="contact-container container grid">
        <div class="contact-content">
          <div class="section-titles">
            <h1 class="section-title-border">CONTACT US <i class="ri-arrow-right-line"></i></h1>
            <h1 class="section-title">Fill This Form</h1>
          </div>
          <p class="contact-description">
            Please complete this form with your details as specified in order to get in touch with us.
          </p>

          <!-- Contact Form -->
          <form action="index.php" class="contact-form" id="contact-form" method="POST">
            <div class="contact-box">
              <label for="user-name"><span class="error">*</span>Name :</label>
              <input type="text" name="user-name" placeholder="Enter your name" class="contact-input" />
              <span class="error">
                <?php
                echo $nameErr;
                ?>
              </span>
            </div>
            <div class="contact-box">
              <label for="user-email"><span class="error">*</span>Email :</label>
              <input type="email" name="user-email" placeholder="Enter your email" class="contact-input" />
              <span class="error">
                <?php
                echo $emailErr;
                ?>
              </span>
            </div>
            <div class="contact-box">
              <label for="input-message"><span class="error">*</span>Message :</label>
              <textarea name="input-message" id="input-message" placeholder="Enter your message" rows="8" class="contact-input">
                </textarea>
              <span class="error">
                <?php
                echo $messageErr;
                ?>
              </span>
            </div>
            <button type="submit" name="submit" class="button button-flex">
              Submit Now <i class="ri-arrow-right-line"></i>
            </button>
            <?php
            if (!empty($messageSuccess)) {
            ?>
              <div class="success">
                <?php echo $messageSuccess; ?>
              </div>
            <?php
            }
            ?>
          </form>
        </div>
        <img src="./Images/contact-img.png" alt="contact image" class="contact-img" />
      </div>
    </section>
  </main>

  <!--==================== FOOTER ====================-->
  <footer class="footer section" id="footer">
    <div class="footer-container container grid">
      <div>
        <a href="#" class="footer-logo">
          <img src="./Images/logo-nav.png" alt="logo" />SUPER-SONIC
        </a>
        <p class="footer-description">
          Subscribe to our Gym Membership
        </p>
        <button class="button button-flex">Subscribe <i class="ri-arrow-right-line"></i></button>
      </div>
      <div class="footer-content">
        <!-- Footer 1 -->
        <div>
          <h3 class="footer-title">
            SERVICES
          </h3>

          <ul class="footer-links">
            <li><a href="#" class="footer-link">HIIT Tranining</a></li>
            <li><a href="#" class="footer-link">Cardio</a></li>
            <li><a href="#" class="footer-link">Yoga</a></li>
            <li><a href="#" class="footer-link">Weight Lifting</a></li>
          </ul>
        </div>
        <!-- Footer 2 -->
        <div>
          <h3 class="footer-title">
            PRICING
          </h3>

          <ul class="footer-links">
            <li><a href="#" class="footer-link">Basic</a></li>
            <li><a href="#" class="footer-link">Permium</a></li>
            <li><a href="#" class="footer-link">Diamond</a></li>
          </ul>
        </div>
        <!-- Footer 3 -->
        <div>
          <h3 class="footer-title">
            GYM
          </h3>

          <ul class="footer-links">
            <li><a href="#" class="footer-link">About Us</a></li>
            <li><a href="#" class="footer-link">Program</a></li>
            <li><a href="#" class="footer-link">Customers</a></li>
            <li><a href="#" class="footer-link">Partners</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="footer-group">
        <ul class="footer-social">
          <a href="#" class="footer-social-link"><i class="ri-facebook-circle-fill"></i></a>
          <a href="#" class="footer-social-link"><i class="ri-instagram-line"></i></a>
          <a href="#" class="footer-social-link"><i class="ri-twitter-fill"></i></a>
        </ul>

        <span class="footer-copy">
          &#169;Copyright Sahil Lamba. All rights reserved
        </span>
      </div>
    </div>
  </footer>
  <!--=============== MAIN JS ===============-->
  <script src="./Scripts/script.js"></script>
</body>

</html>