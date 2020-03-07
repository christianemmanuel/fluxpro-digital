<?php 
  $result = "";
  $error  = "";
if(isset($_POST['submit']))
{
    require 'phpmailer/PHPMailerAutoload.php';
    // require '/home2/fluxpro/santorinidentaldigital.com/phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    //smtp settings
    $mail->isSMTP(); // send as HTML
    $mail->Host = "mail.fluxprodigital.com"; // SMTP servers
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = "email@fluxprodigital.com"; // Your mail
    $mail->Password = 'flux2019'; // Your password mail
    $mail->Port = 465; //specify SMTP Port
    $mail->SMTPSecure = 'ssl';                               
    $mail->setFrom($_POST['email'],$_POST['name'], 'Wolfmania');
    $mail->addAddress('email@fluxprodigital.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Subject='FluxPro Digital: ' .$_POST['name'];
    $mail->Body='<p style="font-size: 14px; line-height: 1.5rem; padding: 20px; background-color: #eaeaea; color: black;">Name: '.$_POST['name'].'<br> Email: '.$_POST['email'].' <br> Comapny Name: '.$_POST['companyName'].' <br>Mobile Number: '.$_POST['mobileNumber'].'<br> Hear about us: '  .$_POST['howDidYouHear'].'<br> Message: '  .$_POST['description'].'</p>';
    if(!$mail->send()) {
      $error = "<span class='alert alert-error'>Something went worng. Please try again or refresh the page. <span id='close'>&#x2715;</span></span>";
    }
    else {
      $result="<div class='alert alert-success'>Thanks\t" .$_POST['name']. " for contacting us. <span id='close'>&#x2715;</span></div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FluxPro Digital - Marketing Agency</title>
  
  <!-- Mobile -->
  <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

  <link rel="stylesheet" href="./assets/css/normalize.css">
  <link rel="stylesheet" href="./assets/css/skeleton.css">
  
  <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>

  <nav class="navbar sticky-navbar">
    <div class="container">
      <a href="index.html" class="brand-logo">
        <img src="./assets/images/logo-icon.svg" alt="Logo" />
      </a>

      <div class="navbar-toggle">
        <span>toggle</span>
      </div>

      <ul class="navbar-list">
        <li class="navbar-item">
          <a class="navbar-link" href="index.html">Home</a>
        </li>
        <li class="navbar-item">
          <a class="navbar-link" href="services.html">Services</a>
        </li>
        <li class="navbar-item">
          <a class="navbar-link" href="about-us.html">About Us</a>
        </li>
        <li class="navbar-item">
          <a class="navbar-link" href="portfolio.html">Portfolio</a>
        </li>
        <li class="navbar-item active">
          <a class="navbar-link" href="contact-us.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>

  <section class="global-section pt-150">
    <div class="container">
      <div class="online-payment-container">
        <img src="./assets/images/contact-us-img-1.png" class="img-bg contact-img-1" alt="Image">

        <div class="payment-list">
          <div class="payment-item left">
            <h5>SINGLE-PURCHASE</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>

          <div class="payment-item right">
            <h5>MONTHLY-SUBSCRIPTION</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>

          <div class="payment-item left">
            <h5>CANCELLATION FEE</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>

          <div class="payment-item right">
            <h5>LOGOS</h5>
            <p>Credit Card (visa/mastercard/etc) <br> Paypal</p>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <section class="global-section pt-50 pb-0">
    <div class="container">
      <div class="contact-form-container">
        <div class="contact-form-img">
          <img src="./assets/images/contact-us-img-2.png" class="contact-img-2" alt="Image">

          <div class="get-in-touch">
            <h2>GET IN TOUCH</h2>
            <a href="mailto:fluxprodigital@gmail.com">fluxprodigital@gmail.com</a>

            <ul>
              <li><a href="#" class="fb-icon"><img src="./assets/images/fb-icon@300x.svg" alt=""></a></li>
              <li><a href="#" class="instagram-icon"><img src="./assets/images/instgram-icon@300x.svg" alt=""></a></li>
              <li><a href="#" class="unknown-icon"><img src="./assets/images/unknown-icon@300x.svg" alt=""></a></li>
            </ul>
          </div>
        </div>
        
        <div class="contact-forms-group">
          <div class="contact-forms-detail">
            <div class="text-right">
              <h2 class="mb-0">SEND US A MESSAGE</h2>
              <h5 class="color-green">We’ll be in touch soon</h5>
            </div>
            

            <?=$result; ?>
            <?=$error; ?>
            <form action="" method="post">
              <div class="form-group">
                <label for="name">Name</label>
                <input class="u-full-width" type="text" name="name" id="name" required>
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input class="u-full-width" type="email" name="email" id="email" required>
              </div>

              <div class="form-group">
                <label for="companyName">Company Name</label>
                <input class="u-full-width" type="text" name="companyName" id="companyName">
              </div>

              <div class="form-group">
                <label for="mobileNumber">Mobile Number</label>
                <input class="u-full-width" type="number" name="mobileNumber" id="mobileNumber">
              </div>

              <div class="form-group">
                <label for="howDidYouHear">How did you hear about us</label>
                <select class="u-full-width" name="howDidYouHear" id="howDidYouHear">
                  <option value="">...</option>
                  <option value="Search Engine">Search Engine</option>
                  <option value="Referral">Referral</option>
                  <option value="Social Media">Social Media</option>
                </select>
              </div>

              <div class="form-group">
                <label for="description">How can we help you</label>
                <textarea class="u-full-width" name="description" id="description" required></textarea>
              </div>
              
              <button type="submit" name="submit" id="submitForm" class="button-primary">Submit</button>
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <a class="chat-with-us">Chat with us</a>

  <footer class="main-footer">
    <div class="container">
      <div class="footer-detail">
        <img src="./assets/images/footer-logo.svg" alt="Logo">
        
        <div class="footer-contact-detail">
          <h5>FluxPro Digital</h5>
          <ul>
            <li>Telephone: +603-2967 4564 Mobile:+06 019-286 1994</li>
            <li>HR & Admin:+06 012-287 6016</li>
            <li>Fax: +603-2967 4564</li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  
  <script src="./assets/js/jquery-3.4.1.min.js"></script>
  <script src="./assets/js/cookie.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="./assets/js/script.js"></script>

  <script>
    $(document).ready(function() {
      $('#submitForm').click(function() {
        $.removeCookie('hide-after-click');
      });
      
      setTimeout(function() {
        $('.alert').remove();
      }, 3500);

      $('#close').click(function() {
        if (!$('.alert').is('hide-alert')) {
          $('.alert').addClass('hide-alert');

          $.cookie('hide-after-click', 'yes', {expires: null });
        }
        return false;
      });

      if ($.cookie('hide-after-click') == 'yes') {
        $('.alert').addClass('hide-alert');
      }

      $.cookie('hide-after-click', 'yes', {expires: null });
    });
  </script>
</body>
</html>