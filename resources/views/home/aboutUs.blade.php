<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      
      @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
         
      </div>
      <!-- header section end -->
      
      <div class="about_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                  <div>
                     <h1 class="about_taital">About BlogBloom</h1>
                     <p class="about_text" style="margin-bottom: 20px;">Our journey started with a simple idea - to provide a place where voices can bloom and ideas can flourish. We believe that everyone has the potential to inspire, educate, and entertain through their words. BlogBloom is our way of making this vision a reality. BlogBloom is a haven for both writers and readers. Here, you can write blogs on any topic that excites you, whether it's a personal reflection, a how-to guide, or an in-depth analysis of your favorite subject. We also encourage you to explore the diverse array of blogs contributed by our talented community members. You can read, comment, and engage with fellow bloggers to expand your horizons and discover new perspectives.</p>
                     </div>

                     <div>
                     <h1 class="about_taital">Our Vision and Mission</h1>
                     <p class="about_text"> At BlogBloom, we envision a world where every voice is heard, every story is celebrated, and every idea is cherished. We believe in the beauty of diversity and the strength of unity in the world of blogging. Our mission is to nurture a global community of bloggers by providing a user-friendly platform where individuals can create and share their stories, insights, and knowledge. We're committed to fostering a culture of inclusivity, respect, and inspiration, where every blogger's journey can blossom.</p>
                     </div>
                     <div class="readmore_bt"><a href="#">Contact Us</a></div>
                  </div>
               </div>
               <div class="col-md-6 padding_right_0">
                  <div><img src="images/about1.png" class="about_img"></div>
               </div>
            </div>
         </div>
      </div>
      
      
      <!-- footer section start -->
      @include('home.footer')
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
</html>




