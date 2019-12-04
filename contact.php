<?php

    $error = ""; $successMessage = "";

    if ($_POST) {

        if (!$_POST["email"]) {

            $error .= "An email address is required.<br>";

        }

        if (!$_POST["content"]) {

            $error .= "The content field is required.<br>";

        }

        if (!$_POST["subject"]) {

            $error .= "The subject is required.<br>";

        }

        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {

            $error .= "The email address is invalid.<br>";

        }

        if ($error != "") {

            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';

        } else {

            $emailTo = "info@royalestandard.com";

            $subject = $_POST['subject'];

            $content = $_POST['content'];

            $headers = "From: ".$_POST['email'];

            if (mail($emailTo, $subject, $content, $headers)) {
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';
            } else {
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>ROYALE STANDARD</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>

  <body>
    <section id="nav-bar">
      <nav class="navbar navbar-expand-sm navbar-custom">
          <a class="navbar-brand" href="#"><img src="img/RoyaleStandardLogo.png"></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCustom">
              <i class="fa fa-bars fa-lg py-1 text-white"></i>
          </button>

          <div class="navbar-collapse collapse" id="navbarCustom">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="home.html">HOME</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      SERVICES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="commercialfinance.html">COMMERCIAL FINANCE</a>
                      <a class="dropdown-item" href="mortgages.html">MORTGAGES</a>
                      <a class="dropdown-item" href="insurance.html">INSURANCE</a>
                      <a class="dropdown-item" href="loans.html">2ND CHANGE LOANS</a>
                      <a class="dropdown-item" href="offshore.html">OFFSHORE</a>
                    </div>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="associates.html">ASSOCIATES</a>
                  </li>
                  <!--<li class="nav-item active">
                      <a class="nav-link" href="news.html">NEWS</a>
                  </li>-->
                  <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT</a>
                  </li>
              </ul>
          </div>
      </nav>
    </section>

    <!-- Page Content -->
    <section id="content-contact">
      <div class="row">
        <div class="col-md-8 mb-5">
          <h2>Your Enquiry</h2>
          <hr class="line">
            <div id="error"></div>
              <form method="post">
                <label class="form-txt">*Your email address submitted will only be shared to Royale Standard*</label>
                <fieldset class="form-group">
                  <label class="form-txt" for="email">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </fieldset>
                <fieldset class="form-group">
                  <label class="form-txt" for="subject">Subject</label>
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter email subject">
                </fieldset>
                <fieldset class="form-group">
                  <label class="form-txt" for="exampleTextarea">What would you like to ask us?</label>
                  <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter your enquiry"></textarea>
                </fieldset>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-txt" class="form-check-label" for="exampleCheck1">I am happy to submit my details</label>
                </div>
                <br>
                <button type="submit" id="submit" class="btn btn-dark">Submit</button>
              </form>
        </div>
        <div class="col-md-4 mb-5">
          <h2>Contact Us</h2>
          <hr>
          <address class="contact-txt">
            <strong>Royale Standard</strong>
            <br>2A Francis Street
            <br>Leicester
            <br>LE2 2BD
          </address>
          <address class="contact-txt">
            <abbr title="Phone">Phone:</abbr>
            +44 116 431 5735
            <br>
            <abbr title="Phone">Mobile:</abbr>
            +44 7746 679 350
            <br>
            <abbr title="Email">Email:</abbr>
            <a href="mailto: info@royalestandard.com">info@royalestandard.com </a>
          </address>
        </div>
      </div>
    </section>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>

    <script type="text/javascript">

          $("form").submit(function(e) {

              var error = "";

              if ($("#email").val() == "") {

                  error += "The email field is required.<br>"

              }

              if ($("#subject").val() == "") {

                  error += "The subject field is required.<br>"

              }

              if ($("#content").val() == "") {

                  error += "The content field is required.<br>"

              }

              if (error != "") {

                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');

                  return false;

              } else {

                  return true;

              }
          })
    </script>

    <!-- Footer -->
    <section id="disclaimer">
      <div class="container-fluid text-center text-md-left">
        <div class="row">
          <div class="col-md-6 mt-md-0 mt-3">
            <h6>Regulated Bodies</h6>
            <img class="authority" src="img/ICO.jpg" alt="">
            <img class="authority" src="img/AOBP.jpg" alt="">
            <img class="authority" src="img/FOS.jpg" alt="">
            <br>
          </div>

          <div class="col-md-6 mb-md-0 mb-3">
            <h6>Disclaimer</h6>
            <p class="disclaimer">Your home may be repossessed if you do not keep up repayments on a mortgage or other loans secured on it.
            <br>Royale Standard are the introducer between the client looking for financial advice and the lending source.
            <br>Some of the services shown within Royale Standard, are not regulated by the FCA.
            <br>ICO Data Protection Act 1998 - Registration No. ZA185680</p>
          </div>
        </div>
      </div>
    </section>


    <section id="footer">
      <footer>
        <div class="socials">
          <a class="socials" href="mailto: info@royalestandard.com"><i class="fa fa-envelope fa-lg"></i></a>
          <a href="tel: +44 774 667 9350"><i class="fa fa-phone fa-lg"></i></a>
          <a href=""><i class="fa fa-twitter fa-lg"></i></a>
          <a href=""><i class="fa fa-linkedin fa-lg"></i></a>
        </div>
        <p class="footer-msg">Developed by ISB Developers</p>
      </footer>
    </section>

  </body>
</html>
