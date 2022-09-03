
  <!-- footer -->
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Main Menu</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Our Products</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Knowledge Base</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Delivery</a></li>
                      <li><a href="#">Returns</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Discount</a></li>
                      <li><a href="#">Special Offer</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Useful Links</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Site Map</a></li>
                      <li><a href="#">Search</a></li>
                      <li><a href="#">Advanced Search</a></li>
                      <li><a href="#">Suppliers</a></li>
                      <li><a href="#">FAQ</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contact Us</h3>
                    <address>
                      <p> 25 Astor Pl, NY 10003, USA</p>
                      <p><span class="fa fa-phone"></span>+1 212-982-4589</p>
                      <p><span class="fa fa-envelope"></span>dailyshop@gmail.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Designed by <a href="http://www.zit-bd.com/">ZIT</a></p>
            <div class="aa-footer-payment">
              <span class="fa fa-cc-mastercard"></span>
              <span class="fa fa-cc-visa"></span>
              <span class="fa fa-paypal"></span>
              <span class="fa fa-cc-discover"></span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <!-- Login Modal -->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login or Register</h4>
          <form class="aa-login-form" action="">
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" name="email" placeholder="Username or email">
            <label for="">Password<span>*</span></label>
            <input type="password" name="password" placeholder="Password">
            <button class="aa-browse-btn" type="submit">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="{{url('/account')}}">Register now!</a>
            </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="frontend/js/bootstrap.js"></script>
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="frontend/js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="frontend/js/jquery.smartmenus.bootstrap.js"></script>
  <!-- To Slider JS -->
  <script src="frontend/js/sequence.js"></script>
  <script src="frontend/js/sequence-theme.modern-slide-in.js"></script>
  <!-- Product view slider -->
  <script type="text/javascript" src="frontend/js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="frontend/js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="frontend/js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="frontend/js/nouislider.js"></script>
  <script src="frontend/js/custom.js"></script>
  <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>

  <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
  <script>
       // Defining a function to display error message
   function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form
function validateForm() {
    // Retrieving the values of form elements
    var name = document.contactForm.name.value;
    var email = document.contactForm.email.value;
    var subject = document.contactForm.subject.value;
    var company = document.contactForm.company.value;
    var msg = document.contactForm.msg.value;


    // Defining error variables with a default value
    var nameErr = emailErr = subjectErr = companyErr = msgErr = true;

    // Validate name
    if(name == "") {
        printError("nameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if(regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }


    // Validate email address
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }

    // Validate subject
    if(subject == "") {
        printError("subjectErr", "Please enter your subject");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if(regex.test(subject) === false) {
            printError("subjectErr", "Please enter a valid subject");
        } else {
            printError("subjectErr", "");
            subjectErr = false;
        }
    }
    // Validate subject
    if(company == "") {
        printError("companyErr", "Please enter your company");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if(regex.test(company) === false) {
            printError("companyErr", "Please enter a valid company");
        } else {
            printError("companyErr", "");
            companyErr = false;
        }
    }
    // Validate msg
    if(msg == "") {
        printError("msgErr", "Please enter your msg");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if(regex.test(msg) === false) {
            printError("msgErr", "Please enter a valid msg");
        } else {
            printError("msgErr", "");
            msgErr = false;
        }
    }

    // Prevent the form from being submitted if there are any errors
    if((nameErr || emailErr || companyErr || subjectErr || msgErr) == true) {
        return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                        "Full Name: " + name + "\n" +
                        "Email Address: " + email + "\n" +
                        "Subject : " + subject + "\n" +
                        "Company: " + company + "\n" +
                        "Message: " + msg + "\n";

        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};

  </script>
{!! Toastr::message() !!}
<!-- toastrr js -->

<!-- Custom js -->
  </body>
</html>
