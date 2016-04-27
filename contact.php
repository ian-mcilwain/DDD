<?php

/*
	Template Name: Contact
	
*/

get_header();  ?>
<div class="projectsContainer">
<div class="contact clearfix">
    <div class="oneLine clearfix">
      <div class="followUs">
      <h2>
      <span class="firstLine">Follow Us</span><br>
      <a href="https://www.facebook.com/DOTDOTDASHCOMMUNICATIONS" target="_blank">Facebook</a>
      <a href="https://twitter.com/dotdottweet" target="_blank">Twitter</a>
      <a href="https://instagram.com/dotdotshot" target="_blank">Instagram</a>
      </h2>
      </div>
      <div class="address">
        <h2><span class="firstLine">ADDRESS</span> <br>
        <a href="https://www.google.ca/maps/place/272+Avenue+Rd,+Toronto,+ON+M4V+2G7/@43.6785335,-79.398269,176m/data=!3m2!1e3!4b1!4m2!3m1!1s0x882b34a0bb549e83:0xd4cc16c4557caf00" target="_blank">272 AVENUE ROAD<br>
          TORONTO, ON <br>
          M4V 2G7</h2>
          </a>
          <img src="<?php echo get_template_directory_uri(); ?>/img/onePercentLogoBlack.png" alt="">
      </div>

      <div class="newBusiness">
        <h2><span class="firstLine">NEW BUSINESS</span><br> JASON VAN BRUGGEN <br> <a class="email" href="mailto:BUSINESS@DOTDOTDASH.CA">BUSINESS@DOTDOTDASH.CA</a></h2>
      </div>
    </div> <!-- .oneLine ends here -->
    <div class="generalInquiries">
    <h2><span class="firstLine">GENERAL INQUIRIES</span><br> BLAINE PEARSON <br>
    <a class="email" href="mailto:
    HELLO@DOTDOTDASH.CA
  ">HELLO@DOTDOTDASH.CA</a></h2>
    </div>  
    <div class="mediaInquiries">
      <h2><span class="firstLine">MEDIA INQUIRIES</span><br> JESSE BONDAR <br>
        <a class="email" href="mailto:MEDIA@DOTDOTDASH.CA">MEDIA@DOTDOTDASH.CA</a>
      </h2>
      <img src="<?php echo get_template_directory_uri(); ?>/img/onePercentLogoBlack.png" alt="">
    </div>
</div>
</div><!--  projectsContainer ends here -->

<div class="videoBackground clearfix">
<video class="videoLoop" autoplay loop="true" poster="<?php echo get_template_directory_uri(); ?>/img/loop5poster.png">
  <source src="<?php echo get_template_directory_uri(); ?>/img/video/Loop5.mp4">
  <source src="<?php echo get_template_directory_uri(); ?>/img/video/Loop5.webm">
</video>

</div>


<?php get_footer(); ?>