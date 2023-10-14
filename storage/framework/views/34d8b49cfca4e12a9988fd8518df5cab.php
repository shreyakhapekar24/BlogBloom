<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      
      <?php echo $__env->make('home.homecss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <script type="text/javascript">
        // Function to send the form data to an email address
        function sendForm() {
            var name = document.querySelector('input[name="Email"][placeholder="Name"]').value;
            var phone = document.querySelector('input[name="Email"][placeholder="Phone Numbar"]').value;
            var email = document.querySelector('input[name="Email"][placeholder="Email"]').value;
            var message = document.querySelector('textarea[name="Massage"]').value;

            // Replace 'your-email@example.com' with your actual email address
            var emailTo = 'shreyakhapekar24@gmail.com';

            // Construct the email body
            var emailBody = "Name: " + name + "\nPhone Number: " + phone + "\nEmail: " + email + "\nMessage: " + message;

            // Send the email using a mailto link
            window.location.href = 'mailto:' + emailTo + '?subject=Contact Form Submission&body=' + emailBody;

            // Display a pop-up message
            alert('Query submitted successfully! Thank you for your message.');
        }
    </script>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      <!-- header section end -->
      
      <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_taital">Get In Touch</h1>
          <div class="email_text">
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Name" name="Email">
             </div>
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Phone Numbar" name="Email">
             </div>
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Email" name="Email">
             </div>
             <div class="form-group">
                <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
             </div>
             <div class="send_btn"><a href="javascript:void(0);" onclick="sendForm();">SEND</a></div>
          </div>
        </div>
      </div>
      <!-- contact section end -->
      
      
      <!-- footer section start -->
      <?php echo $__env->make('home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2023 All Rights Reserved. Design by <a href="https://www.quora.com/profile/Shreya-Khapekar-4">Ms. Shreya Khapekar</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> 
   </body>
</html><?php /**PATH C:\xampp\htdocs\blogbloom\resources\views/home/contact.blade.php ENDPATH**/ ?>